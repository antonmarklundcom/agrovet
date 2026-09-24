<?php
declare(strict_types=1);

return [
    'order'           => 5,
    'path'            => '/herramientas/arma-tu-pedido/',
    'title'           => 'Armá tu pedido',
    'navLabel'        => 'Armá tu pedido',
    'seoTitle'        => 'Armá tu pedido: cotización por WhatsApp',
    'metaDescription' => 'Elegí los productos que necesitás, indicá cantidad y presentación, y mandanos '
                       . 'el pedido armado por WhatsApp. Cotización sin costo, envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Herramientas',
        'h1'      => 'Armá tu pedido',
        'lead'    => 'Marcá los productos que necesitás con la cantidad y la presentación, y enviá '
                   . 'el pedido completo por WhatsApp para que te respondamos con precio y envío.',
    ],
    'intro' => [
        'Cuando el pedido tiene varios productos, escribir todo a mano en el chat suele dejar '
            . 'afuera algún dato: cuántas unidades, qué presentación, para qué localidad. Esta '
            . 'herramienta ordena esa lista antes de que la mandes, para que la cotización salga '
            . 'completa a la primera.',
        'Recorré los productos agrupados por sanidad animal, nutrición animal y campo y cultivos, '
            . 'y en los que necesites escribí la cantidad y la presentación tal como la conocés: '
            . '"10 unidades", "20 bolsas de 25 kg", "3 rollos de 500 m". No hace falta completar '
            . 'todos los campos, solo los productos que realmente vas a pedir. Si te falta algo que '
            . 'no aparece en la lista, agregalo en "Otros productos" con el mismo detalle. Sumá la '
            . 'localidad de entrega, porque el costo de envío depende de dónde recibís el pedido, y '
            . 'si querés, tu nombre para que la respuesta llegue más rápido.',
        'A medida que cargás los datos, la herramienta arma una vista previa del mensaje. Cuando '
            . 'está lista, un botón lo abre directo en WhatsApp con todo el texto ya escrito, o lo '
            . 'copia al formulario de esta misma página si preferís mandarlo por ahí. En los dos '
            . 'casos el pedido llega completo y te respondemos con precio y costo de envío a tu '
            . 'localidad, sin costo y sin compromiso.',
    ],
    'faq' => [
        [
            'q' => '¿Tengo que completar todos los productos de la lista?',
            'a' => 'No. Cargá cantidad y presentación solo en los productos que realmente vas a '
                 . 'pedir; el resto queda vacío y no se incluye en el mensaje.',
        ],
        [
            'q' => '¿Qué pasa si necesito un producto que no está en la lista?',
            'a' => 'Escribilo en el campo "Otros productos" con el mismo detalle de cantidad y '
                 . 'presentación; se agrega al final del pedido.',
        ],
        [
            'q' => '¿Por qué pide la localidad de entrega?',
            'a' => 'El costo de envío depende de a dónde llega el pedido, así que lo pedimos para '
                 . 'poder cotizarte con el envío incluido.',
        ],
        [
            'q' => '¿El pedido armado ya tiene un precio?',
            'a' => 'No: esta herramienta solo ordena lo que necesitás para mandarlo completo. '
                 . 'Te respondemos con precio y envío después de recibir el pedido.',
        ],
    ],
    'related'       => ['curabichera', 'sal-mineral', 'alambre'],
    'ctaWhatsapp'   => '',
    'formNeed'      => 'otro',
    'analyticsTool' => 'arma_tu_pedido',
];
