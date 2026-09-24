<?php
/**
 * Calculadora de fertilizante: kilos totales y bolsas necesarias según
 * hectáreas y una dosis que el visitante ya trae (de su análisis de suelo o
 * su técnico) — esta calculadora no sugiere ninguna dosis. Follows the
 * herramienta-ejemplo pattern: build $toolCalcHtml, then require
 * templates/tool.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'calculadora-fertilizante';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="fertilizante-form" novalidate>
    <div class="tool-form__row">
      <label class="field">
        <span>Hectáreas</span>
        <input type="number" inputmode="decimal" min="0" step="0.1" name="hectareas" id="fertilizante-hectareas" required>
      </label>
      <label class="field">
        <span>Dosis (kg/ha)</span>
        <input type="number" inputmode="decimal" min="0" step="1" name="dosis" id="fertilizante-dosis" required>
      </label>
    </div>
    <p class="note">La dosis la define tu análisis de suelo o tu técnico; esta calculadora no
      recomienda ninguna dosis, solo convierte la que vos ya tenés en kilos y bolsas.</p>

    <div class="tool-form__row">
      <label class="field">
        <span>Tamaño de bolsa</span>
        <select name="bolsa" id="fertilizante-bolsa">
          <option value="25">25 kg</option>
          <option value="50" selected>50 kg</option>
        </select>
      </label>
    </div>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="fertilizante-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Kilos totales</dt>
      <dd id="fertilizante-kilos"></dd>
      <dt>Bolsas necesarias</dt>
      <dd id="fertilizante-bolsas"></dd>
    </dl>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="fertilizante-use-result"><?= e(ui('tools.use_result')) ?></button>
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
