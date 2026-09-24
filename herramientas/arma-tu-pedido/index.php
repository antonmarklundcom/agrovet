<?php
/**
 * Armá tu pedido: one row per product (grouped by cluster) where the visitor
 * types a free-text quantity/presentation, plus "otros productos", localidad
 * and nombre. Works as plain markup with no JS: without it, the visitor still
 * reads the product list and can send everything through the lead form below.
 * Follows the herramienta-ejemplo pattern: build $toolCalcHtml, then require
 * templates/tool.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'arma-tu-pedido';
$tool = content('tools')[$slug];

/* Product rows grouped by cluster, in cluster menu order, skipping
   'veterinaria' — this tool is for goods that go in a shipment, not for
   booking a vet visit. */
$clusterOrder  = ['sanidad', 'nutricion', 'campo'];
$clusterLabels = clusters();
$byCluster     = [];
foreach (services() as $serviceSlug => $service) {
    $cluster = $service['cluster'] ?? '';
    if (!in_array($cluster, $clusterOrder, true)) {
        continue;
    }
    $byCluster[$cluster][] = ['slug' => $serviceSlug, 'label' => $service['navLabel']];
}

$whatsappDigits = phone_digits(site('whatsapp'));

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>" data-whatsapp-digits="<?= e($whatsappDigits) ?>">
  <form class="tool-form" id="pedido-form" novalidate>
    <?php foreach ($clusterOrder as $cluster): ?>
      <?php if (empty($byCluster[$cluster])): ?>
        <?php continue; ?>
      <?php endif; ?>
      <fieldset class="field">
        <legend><?= e($clusterLabels[$cluster] ?? $cluster) ?></legend>
        <?php foreach ($byCluster[$cluster] as $item): ?>
          <div class="tool-form__row pedido-row" data-item data-slug="<?= e($item['slug']) ?>" data-label="<?= e($item['label']) ?>">
            <label class="field">
              <span><?= e($item['label']) ?></span>
              <input type="text" name="item-<?= e($item['slug']) ?>" id="pedido-item-<?= e($item['slug']) ?>"
                     placeholder="Cantidad y presentación, ej: 10 unidades">
            </label>
          </div>
        <?php endforeach; ?>
      </fieldset>
    <?php endforeach; ?>

    <label class="field">
      <span>Otros productos</span>
      <textarea name="otros" id="pedido-otros" rows="3"
                placeholder="Algún producto que no está en la lista, con cantidad y presentación"></textarea>
    </label>

    <div class="tool-form__row">
      <label class="field">
        <span>Localidad de entrega</span>
        <input type="text" name="localidad" id="pedido-localidad" autocomplete="address-level2" required>
      </label>
      <label class="field">
        <span>Nombre (opcional)</span>
        <input type="text" name="nombre" id="pedido-nombre" autocomplete="name">
      </label>
    </div>
  </form>

  <div class="tool-result" id="pedido-result" aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <pre class="pedido-preview" id="pedido-preview"></pre>
    <div class="btn-row mt-3">
      <button class="btn btn--primary" type="button" id="pedido-enviar-whatsapp">Enviar pedido por WhatsApp</button>
      <button class="btn btn--secondary" type="button" id="pedido-use-result"><?= e(ui('tools.use_result')) ?></button>
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
