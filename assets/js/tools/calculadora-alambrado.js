/**
 * Calculadora de alambrado: metros totales de alambre, rollos necesarios y
 * una estimación aproximada de postes. Nothing here hardcodes a country's
 * number formatting — it reads window.Market.locale, same pattern as the
 * other tools.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("alambrado-form");
  if (!form || !window.Market) {
    return;
  }

  var perimetroRow   = document.getElementById("alambrado-perimetro-row");
  var rectanguloRow  = document.getElementById("alambrado-rectangulo-row");
  var perimetroInput = document.getElementById("alambrado-perimetro");
  var largoInput     = document.getElementById("alambrado-largo");
  var anchoInput     = document.getElementById("alambrado-ancho");
  var hilosInput     = document.getElementById("alambrado-hilos");
  var rolloSelect    = document.getElementById("alambrado-rollo");
  var desperdicioInput = document.getElementById("alambrado-desperdicio");
  var espaciadoInput = document.getElementById("alambrado-espaciado");
  var resultBox      = document.getElementById("alambrado-result");
  var metrosLine      = document.getElementById("alambrado-metros");
  var rollosLine       = document.getElementById("alambrado-rollos");
  var postesLine       = document.getElementById("alambrado-postes");
  var explicacionLine  = document.getElementById("alambrado-explicacion");
  var useResult         = document.getElementById("alambrado-use-result");
  var lastResult         = null;

  var numberFmt = new Intl.NumberFormat(window.Market.locale || "es-PY", {
    maximumFractionDigits: 0
  });

  function fmtNumber(n) {
    return numberFmt.format(Math.round(Number(n) || 0));
  }

  function toggleModo() {
    var modo = (form.querySelector('input[name="modo"]:checked') || {}).value || "perimetro";
    var isRectangulo = modo === "rectangulo";
    rectanguloRow.hidden = !isRectangulo;
    perimetroRow.hidden = isRectangulo;
  }

  var modoRadios = form.querySelectorAll('input[name="modo"]');
  for (var i = 0; i < modoRadios.length; i++) {
    modoRadios[i].addEventListener("change", toggleModo);
  }
  toggleModo();

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var modo = (form.querySelector('input[name="modo"]:checked') || {}).value || "perimetro";
    var perimetro;

    if (modo === "rectangulo") {
      var largo = parseFloat(largoInput.value) || 0;
      var ancho = parseFloat(anchoInput.value) || 0;
      perimetro = 2 * (largo + ancho);
    } else {
      perimetro = parseFloat(perimetroInput.value) || 0;
    }

    if (perimetro <= 0) {
      (modo === "rectangulo" ? largoInput : perimetroInput).focus();
      return;
    }

    var hilos = parseInt(hilosInput.value, 10) || 1;
    hilos = Math.min(10, Math.max(1, hilos));

    var rolloLargo = parseFloat(rolloSelect.value) || 500;
    var desperdicio = parseFloat(desperdicioInput.value) || 0;
    var espaciado = parseFloat(espaciadoInput.value) || 10;

    var totalMetros = perimetro * hilos * (1 + desperdicio / 100);
    var rollos = Math.ceil(totalMetros / rolloLargo);
    var postes = Math.ceil(perimetro / espaciado) + 1;

    metrosLine.textContent = fmtNumber(totalMetros) + " m";
    rollosLine.textContent = fmtNumber(rollos) + (rollos === 1 ? " rollo" : " rollos");
    postesLine.textContent = "≈ " + fmtNumber(postes) + " postes";

    explicacionLine.textContent =
      "Perímetro " + fmtNumber(perimetro) + " m × " + hilos +
      (hilos === 1 ? " hilo" : " hilos") + " + " + fmtNumber(desperdicio) +
      "% de desperdicio = " + fmtNumber(totalMetros) + " m, repartidos en rollos de " +
      fmtNumber(rolloLargo) + " m.";

    resultBox.hidden = false;

    lastResult = "Alambrado: " + fmtNumber(totalMetros) + " m de alambre, " +
      fmtNumber(rollos) + (rollos === 1 ? " rollo" : " rollos") + " de " +
      fmtNumber(rolloLargo) + " m, " + hilos + (hilos === 1 ? " hilo" : " hilos") +
      ", ≈ " + fmtNumber(postes) + " postes.";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("calculadora_alambrado", { hilos: hilos, rollo: rolloLargo });
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
