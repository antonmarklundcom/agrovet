/**
 * Armá tu pedido: collects every filled product row plus "otros productos",
 * localidad and nombre into one WhatsApp-ready message, shows a live preview,
 * and either opens wa.me with it or copies it into this page's lead form.
 */
(function (window, document) {
  "use strict";

  var tool = document.querySelector('[data-tool="arma-tu-pedido"]');
  var form = document.getElementById("pedido-form");
  if (!tool || !form) {
    return;
  }

  var rows          = Array.prototype.slice.call(form.querySelectorAll("[data-item]"));
  var otrosInput    = document.getElementById("pedido-otros");
  var localidadInput = document.getElementById("pedido-localidad");
  var nombreInput    = document.getElementById("pedido-nombre");
  var preview        = document.getElementById("pedido-preview");
  var whatsappBtn     = document.getElementById("pedido-enviar-whatsapp");
  var useResultBtn     = document.getElementById("pedido-use-result");
  var whatsappDigits    = tool.getAttribute("data-whatsapp-digits") || "";

  /** Builds the WhatsApp-ready pedido message from the current form values. */
  function buildMessage() {
    var lines = ["Hola, quiero cotizar este pedido:"];
    var hasItem = false;

    rows.forEach(function (row) {
      var input = row.querySelector("input");
      var value = input ? input.value.trim() : "";
      if (value === "") {
        return;
      }
      hasItem = true;
      lines.push("- " + row.getAttribute("data-label") + ": " + value);
    });

    var otros = otrosInput ? otrosInput.value.trim() : "";
    if (otros !== "") {
      hasItem = true;
      lines.push("Otros: " + otros);
    }

    var localidad = localidadInput ? localidadInput.value.trim() : "";
    if (localidad !== "") {
      lines.push("Entrega en: " + localidad);
    }

    var nombre = nombreInput ? nombreInput.value.trim() : "";
    if (nombre !== "") {
      lines.push("Nombre: " + nombre);
    }

    return { text: lines.join("\n"), hasItem: hasItem, localidad: localidad };
  }

  function renderPreview() {
    var built = buildMessage();
    if (preview) {
      preview.textContent = built.text;
    }
    return built;
  }

  form.addEventListener("input", renderPreview);
  renderPreview();

  if (whatsappBtn) {
    whatsappBtn.addEventListener("click", function () {
      var built = renderPreview();

      if (!built.hasItem) {
        (rows[0] ? rows[0].querySelector("input") : localidadInput).focus();
        return;
      }
      if (built.localidad === "" && localidadInput) {
        localidadInput.focus();
        return;
      }

      if (window.ToolsShared) {
        window.ToolsShared.trackToolUsed("arma_tu_pedido", { channel: "whatsapp" });
      }

      if (whatsappDigits === "") {
        var leadForm = document.querySelector("form[data-lead-form]");
        if (window.ToolsShared && leadForm) {
          window.ToolsShared.prefillLeadForm(leadForm, {
            need: "otro",
            message: built.text,
            result: built.text
          });
          window.ToolsShared.focusLeadForm(leadForm);
        }
        return;
      }

      window.open(
        "https://wa.me/" + whatsappDigits + "?text=" + encodeURIComponent(built.text),
        "_blank",
        "noopener"
      );
    });
  }

  if (useResultBtn) {
    useResultBtn.addEventListener("click", function () {
      var built = renderPreview();
      var leadForm = document.querySelector("form[data-lead-form]");
      if (!window.ToolsShared || !leadForm || !built.hasItem) {
        return;
      }
      window.ToolsShared.prefillLeadForm(leadForm, {
        need: "otro",
        message: built.text,
        result: built.text
      });
      window.ToolsShared.focusLeadForm(leadForm);

      window.ToolsShared.trackToolUsed("arma_tu_pedido", { channel: "form" });
    });
  }
})(window, document);
