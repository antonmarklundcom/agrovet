<?php
/**
 * Segment page: aves (postura y parrilleros). Copies the register and
 * structure of content/services/curabichera.php, at ~70% of its length, per
 * templates/segment.php and docs/build/brief.md Round 2.
 */

declare(strict_types=1);

return [
    'order'           => 30,
    'path'            => '/aves/',
    'navLabel'        => 'Aves',
    'seoTitle'        => 'Productos para gallinas y pollos',
    'metaDescription' => 'Balanceados, bebederos y antibióticos veterinarios para gallinas de postura '
                       . 'y pollos parrilleros. Cotizá sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Aves de granja',
        'h1'      => 'Productos para gallinas y pollos (postura y parrilleros)',
        'lead'    => 'Balanceado para cada etapa, bebederos para el galpón y antibióticos con receta '
                   . 'cuando hace falta: contanos el tamaño del lote y te cotizamos sin costo, con '
                   . 'envío hasta tu localidad.',
    ],
    'leadSlug' => 'balanceados',
    'bundle'   => [
        'balanceados', 'bebederos', 'tejido-de-alambre', 'antibioticos-veterinarios',
    ],
    'traps' => [
        [
            'title' => 'Usar balanceado de otra etapa',
            'text'  => 'Dar balanceado de postura a un lote de parrilleros (o al revés) atrasa el '
                     . 'crecimiento o la puesta; cada etapa tiene su formulación y conviene '
                     . 'respetarla.',
        ],
        [
            'title' => 'Dejar bebederos sucios o con poco caudal',
            'text'  => 'Un bebedero sucio o insuficiente para el lote baja el consumo de agua y, con '
                     . 'eso, el consumo de balanceado; revisarlos a diario evita pérdidas de peso y de '
                     . 'postura.',
        ],
        [
            'title' => 'No cerrar bien el galpón con tejido de alambre',
            'text'  => 'Un galpón mal cerrado deja entrar depredadores y aves silvestres que traen '
                     . 'enfermedad; el tejido de alambre en el perímetro es parte de la sanidad del '
                     . 'lote, no solo de la seguridad.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Balanceado según la etapa del lote',
            'body' => [
                'Un pollito recién llegado necesita un balanceado de arranque con mayor proteína; a '
                    . 'medida que crece pasa a crecimiento y, en parrilleros, a terminación; en '
                    . 'ponedoras, el balanceado de postura acompaña toda la etapa productiva. Contanos '
                    . 'en qué etapa está tu lote y te cotizamos el balanceado correcto.',
                'Si además estás armando o reparando el galpón, sumamos bebederos y tejido de alambre '
                    . 'en la misma cotización, con un solo envío hasta tu localidad.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Tipo de ave y etapa (postura, arranque, crecimiento o terminación)',
        'Cantidad de aves del lote',
        'Si necesitás bebederos o tejido de alambre además del balanceado',
        'La localidad a la que hay que enviar el pedido',
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el balanceado para mi lote?',
            'a' => 'Depende de la etapa, la marca y la cantidad de bolsas. Mandanos el tamaño del '
                 . 'lote por WhatsApp y te respondemos con precio y envío, sin compromiso.',
        ],
        [
            'q' => '¿Tienen balanceado para postura y para parrilleros?',
            'a' => 'Sí, cotizamos balanceado de arranque, crecimiento, terminación y postura según la '
                 . 'etapa del lote que nos indiques.',
        ],
        [
            'q' => '¿Puedo pedir bebederos junto con el balanceado?',
            'a' => 'Sí, podés combinar balanceados, bebederos y tejido de alambre para el galpón en un '
                 . 'mismo mensaje y te armamos la cotización completa.',
        ],
        [
            'q' => '¿Venden antibióticos para aves?',
            'a' => 'Sí, bajo receta veterinaria. Mandanos la indicación del profesional y te cotizamos '
                 . 'el producto correspondiente.',
        ],
        [
            'q' => '¿Hacen envíos a granjas del interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
];
