<?php
/**
 * Calculadora de alambrado: metros de alambre y rollos necesarios, más una
 * estimación aproximada de postes. Follows the herramienta-ejemplo pattern:
 * build $toolCalcHtml, then require templates/tool.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'calculadora-alambrado';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="alambrado-form" novalidate>
    <fieldset class="field">
      <legend>¿Cómo querés cargar el potrero?</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="modo" id="alambrado-modo-perimetro" value="perimetro" checked>
        <label class="chip" for="alambrado-modo-perimetro">Ya sé el perímetro</label>
        <input class="chip-radio" type="radio" name="modo" id="alambrado-modo-rectangulo" value="rectangulo">
        <label class="chip" for="alambrado-modo-rectangulo">Largo x ancho</label>
      </div>
    </fieldset>

    <div class="tool-form__row" id="alambrado-perimetro-row">
      <label class="field">
        <span>Perímetro del alambrado (m)</span>
        <input type="number" inputmode="decimal" min="0" step="1" name="perimetro" id="alambrado-perimetro">
      </label>
    </div>

    <div class="tool-form__row" id="alambrado-rectangulo-row" hidden>
      <label class="field">
        <span>Largo del potrero (m)</span>
        <input type="number" inputmode="decimal" min="0" step="1" name="largo" id="alambrado-largo">
      </label>
      <label class="field">
        <span>Ancho del potrero (m)</span>
        <input type="number" inputmode="decimal" min="0" step="1" name="ancho" id="alambrado-ancho">
      </label>
    </div>

    <div class="tool-form__row">
      <label class="field">
        <span>Cantidad de hilos</span>
        <input type="number" inputmode="numeric" min="1" max="10" step="1" name="hilos" id="alambrado-hilos" value="5">
      </label>
      <label class="field">
        <span>Largo del rollo (según el rollo que uses)</span>
        <select name="rollo" id="alambrado-rollo">
          <option value="250">250 m</option>
          <option value="350">350 m</option>
          <option value="500" selected>500 m</option>
          <option value="1000">1.000 m</option>
        </select>
      </label>
    </div>

    <div class="tool-form__row">
      <label class="field">
        <span>Desperdicio estimado (%)</span>
        <input type="number" inputmode="numeric" min="0" max="50" step="1" name="desperdicio" id="alambrado-desperdicio" value="5">
      </label>
      <label class="field">
        <span>Distancia entre postes (m, aproximado)</span>
        <input type="number" inputmode="decimal" min="1" step="0.5" name="espaciado" id="alambrado-espaciado" value="10">
      </label>
    </div>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="alambrado-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Metros totales de alambre</dt>
      <dd id="alambrado-metros"></dd>
      <dt>Rollos necesarios</dt>
      <dd id="alambrado-rollos"></dd>
      <dt>Postes aproximados</dt>
      <dd id="alambrado-postes"></dd>
    </dl>
    <p class="note" id="alambrado-explicacion"></p>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="alambrado-use-result"><?= e(ui('tools.use_result')) ?></button>
    </div>
  </div>

  <noscript><p class="note"><?= e(ui('tools.need_js')) ?></p></noscript>
</div>

<?php
$formId      = $slug;
$formService = $slug;
$formNeed    = $tool['formNeed'];
$formHeading = ui('form.legend');
/* The form is buffered into $toolCalcHtml BEFORE templates/tool.php sets $page,
   so it cannot read the path from there. */
$formSourcePage = $tool['path'];
require ROOT_DIR . '/partials/lead-form.php';
?>
<?php
$toolCalcHtml = ob_get_clean();

require ROOT_DIR . '/templates/tool.php';
