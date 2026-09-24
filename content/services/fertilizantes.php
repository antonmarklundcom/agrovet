<?php
/**
 * Product page for fertilizantes. Recommend soil analysis; no application rates.
 * Keywords: fertilizante (720), urea fertilizante (170), urea para pasto (90),
 * fertilizante npk (140), triple 15 (110), sulfato de amonio (320), nitrato de
 * calcio (260), abono orgánico (260), humus de lombriz (320), abono foliar (170),
 * fertilizante para pasto (90).
 */

declare(strict_types=1);

return [
    'order'           => 40,
    'path'            => '/productos/fertilizantes/',
    'title'           => 'Fertilizantes',
    'navLabel'        => 'Fertilizantes',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Fertilizantes: precio y envío a Paraguay',
    'metaDescription' => 'Urea, NPK, sulfato de amonio, nitrato de calcio y abono orgánico para pasturas '
                       . 'y cultivos. Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Nutrición de suelo',
        'h1'      => 'Fertilizantes para pasturas y cultivos',
        'h2'      => 'Urea, NPK, sulfato de amonio, nitrato de calcio y abono orgánico, con envío a todo el país.',
        'lead'    => 'Un lote que no rinde no siempre necesita más agua: muchas veces le falta nutriente. '
                   . 'Contanos qué fertilizante buscás y para qué cultivo o pastura, y te cotizamos sin '
                   . 'costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Urea para pasto y cultivos, en distintas presentaciones',
        'Fertilizantes NPK, incluido el 15-15-15 (triple 15)',
        'Sulfato de amonio y nitrato de calcio',
        'Abono orgánico, humus de lombriz y abono foliar',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'No indicamos dosis ni kilos por hectárea: eso depende de tu suelo y del cultivo',
        'Para saber qué nutriente le falta a tu lote, lo correcto es hacer un análisis de suelo',
        'Guardá el fertilizante seco y lejos de la humedad hasta el momento de aplicarlo',
        'Seguí siempre las indicaciones de la etiqueta y de tu técnico o veterinario de confianza',
    ],
    'weNeed' => [
        'Qué fertilizante buscás (urea, NPK, sulfato de amonio, orgánico, etc.)',
        'Para qué lo vas a usar: pastura, cultivo, huerta o vivero',
        'Cuántos kilos o bolsas necesitás',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué fertilizante corresponde según lo que necesita el suelo',
            'body' => [
                'La urea es la fuente de nitrógeno más usada para pasto y cultivos: empuja el crecimiento '
                    . 'verde y es clave después de un corte o pastoreo fuerte. Los fertilizantes NPK, como '
                    . 'el 15-15-15 o triple 15, aportan nitrógeno, fósforo y potasio juntos, y se usan '
                    . 'sobre todo en la implantación o en lotes que necesitan un aporte más completo.',
                'El sulfato de amonio suma nitrógeno y azufre, y se usa en suelos donde el azufre es '
                    . 'limitante. El nitrato de calcio aporta calcio junto con nitrógeno de rápida '
                    . 'absorción. Para saber cuál le hace falta a tu lote, lo más seguro es partir de un '
                    . 'análisis de suelo; sin ese dato, cualquier recomendación es solo una aproximación.',
            ],
            'items' => [
                ['title' => 'Urea', 'text' => 'Nitrógeno de rápida respuesta para pasto y cultivos en crecimiento.'],
                ['title' => 'NPK / triple 15', 'text' => 'Aporte completo para la implantación o lotes con varias carencias.'],
                ['title' => 'Sulfato de amonio y nitrato de calcio', 'text' => 'Nitrógeno junto con azufre o calcio, según lo que falte.'],
            ],
        ],
        [
            'h2'   => 'Abono orgánico, humus y abono foliar',
            'body' => [
                'El abono orgánico y el humus de lombriz mejoran la estructura del suelo además de '
                    . 'aportar nutrientes, y son la opción habitual para huerta, vivero y jardín, o como '
                    . 'complemento en lotes más chicos. El abono foliar se aplica directamente sobre la '
                    . 'hoja y sirve para corregir una carencia puntual de forma más rápida que un '
                    . 'fertilizante de suelo.',
                'Ya sea urea, NPK, un orgánico o un foliar, la cantidad correcta depende de tu suelo, tu '
                    . 'pastura o cultivo y del resultado de un análisis de suelo. Nosotros te cotizamos el '
                    . 'producto que nos pidas; la dosis la define tu técnico o veterinario de confianza '
                    . 'según la etiqueta.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Fertilizante junto con semillas o herbicidas en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el fertilizante?',
            'a' => 'El precio depende del tipo de fertilizante, la marca y la cantidad de kilos o bolsas. '
                 . 'Mandanos por WhatsApp qué necesitás y te respondemos con el precio y el costo de envío '
                 . 'hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué fertilizante conviene para el pasto?',
            'a' => 'En general se usa urea para dar un empuje de nitrógeno, o un NPK si el suelo necesita '
                 . 'también fósforo y potasio. Lo más seguro es partir de un análisis de suelo para saber '
                 . 'qué le falta exactamente a tu lote.',
        ],
        [
            'q' => '¿Cuánto fertilizante hay que aplicar por hectárea?',
            'a' => 'No damos esa dosis nosotros: depende del análisis de suelo, del cultivo o pastura y '
                 . 'de la recomendación de tu técnico. Usá nuestra calculadora de fertilizante como '
                 . 'referencia y confirmá siempre con un profesional.',
        ],
        [
            'q' => '¿Tienen abono orgánico o humus de lombriz?',
            'a' => 'Sí, cotizamos abono orgánico y humus de lombriz para huerta, vivero o lotes chicos. '
                 . 'Contanos la cantidad que necesitás y te pasamos precio y envío.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar fertilizante', 'whatsappText' => ''],
    'related'   => ['semillas', 'herbicidas', 'glifosato'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [
        [
            'path'  => '/herramientas/calculadora-de-fertilizante/',
            'label' => 'Calculadora de fertilizante',
            'text'  => 'Calculá una referencia de bolsas de fertilizante por hectárea antes de cotizar.',
        ],
    ],
];
