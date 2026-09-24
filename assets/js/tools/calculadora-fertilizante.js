/**
 * Calculadora de fertilizante: kilos totales y bolsas necesarias según
 * hectáreas y una dosis (kg/ha) que el visitante trae de su análisis de
 * suelo o su técnico. This tool never suggests a dose.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("fertilizante-form");
  if (!form || !window.Market) {
    return;
  }

  var hectareasInput = document.getElementById("fertilizante-hectareas");
  var dosisInput     = document.getElementById("fertilizante-dosis");
  var bolsaSelect    = document.getElementById("fertilizante-bolsa");
  var resultBox      = document.getElementById("fertilizante-result");
  var kilosLine      = document.getElementById("fertilizante-kilos");
  var bolsasLine     = document.getElementById("fertilizante-bolsas");
  var useResult      = document.getElementById("fertilizante-use-result");
  var lastResult     = null;

  var numberFmt = new Intl.NumberFormat(window.Market.locale || "es-PY", {
    maximumFractionDigits: 0
  });

  function fmtNumber(n) {
    return numberFmt.format(Math.round(Number(n) || 0));
  }

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var hectareas = parseFloat(hectareasInput.value) || 0;
    var dosis = parseFloat(dosisInput.value) || 0;

    if (hectareas <= 0 || dosis <= 0) {
      (hectareas <= 0 ? hectareasInput : dosisInput).focus();
      return;
    }

    var bolsaTamano = parseFloat(bolsaSelect.value) || 50;
    var kilosTotales = hectareas * dosis;
    var bolsas = Math.ceil(kilosTotales / bolsaTamano);

    kilosLine.textContent = fmtNumber(kilosTotales) + " kg";
    bolsasLine.textContent = fmtNumber(bolsas) + (bolsas === 1 ? " bolsa" : " bolsas") +
      " de " + fmtNumber(bolsaTamano) + " kg";
    resultBox.hidden = false;

    lastResult = "Fertilizante: " + fmtNumber(kilosTotales) + " kg totales (" +
      fmtNumber(hectareas) + " ha × " + fmtNumber(dosis) + " kg/ha), " +
      fmtNumber(bolsas) + (bolsas === 1 ? " bolsa" : " bolsas") + " de " +
      fmtNumber(bolsaTamano) + " kg.";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("calculadora_fertilizante", { bolsa: bolsaTamano });
    }
  });

  if (useResult) {
    useResult.addEventListener("click", function () {
      var leadForm = document.querySelector("form[data-lead-form]");
      if (!window.ToolsShared || !leadForm || !lastResult) {
        return;
      }
      window.ToolsShared.prefillLeadForm(leadForm, {
        need: "campo",
        message: lastResult,
        result: lastResult
      });
      window.ToolsShared.focusLeadForm(leadForm);
    });
  }
})(window, document);
