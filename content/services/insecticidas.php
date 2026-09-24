<?php
declare(strict_types=1);

return [
    'order'           => 71,
    'path'            => '/productos/insecticidas/',
    'title'           => 'Insecticidas',
    'navLabel'        => 'Insecticidas',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Insecticida: cipermetrina, hormiguicida',
    'metaDescription' => 'Insecticidas y hormiguicidas para hormigas cortadoras, mosquicidas para galpones y '
                       . 'tambos. Cotizá por WhatsApp sin costo, envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Control de plagas',
        'h1'      => 'Insecticidas y hormiguicidas para el campo',
        'h2'      => 'Cebos para hormigas cortadoras, mosquicidas para galpones y tambos, e insecticidas agrícolas.',
        'lead'    => 'Las hormigas cortadoras pueden dejar una pastura o un cultivo recién implantado sin '
                   . 'hojas en pocos días, y las moscas en el tambo o el galpón afectan al animal y al '
                   . 'trabajo diario. Mandanos qué plaga tenés y en qué superficie, y te cotizamos el '
                   . 'insecticida o el hormiguicida que corresponde, sin costo y sin compromiso.',
    ],
    'includes' => [
        'Cebos hormiguicidas para hormigas cortadoras en pastura, cultivo o jardín',
        'Mosquicidas para galpones, tambos y corrales',
        'Insecticidas agrícolas para plagas de cultivo, según el registro del producto',
        'Presentaciones por unidad o por caja para el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Usá siempre equipo de protección personal (EPP) al aplicar: guantes, máscara y ropa adecuada',
        'Aplicá según la etiqueta y solo productos con registro del SENAVE para el cultivo o uso indicado',
        'Mantené los productos fuera del alcance de niños y animales, en su envase original',
    ],
    'weNeed' => [
        'Qué plaga tenés: hormigas cortadoras, moscas u otra',
        'Dónde la vas a aplicar: pastura, cultivo, galpón o tambo',
        'Aproximadamente cuánta superficie o cuántos puntos hay que tratar',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Hormigas cortadoras: por qué hay que actuar rápido',
            'body' => [
                'La hormiga cortadora puede defoliar una pastura recién implantada o un cultivo joven en '
                    . 'pocos días, porque una sola colonia corta y acarrea una enorme cantidad de hojas hacia '
                    . 'el hormiguero. Cuanto antes se trate el hormiguero, menor es el daño y menos cebo hace '
                    . 'falta después.',
                'El cebo hormiguicida funciona porque las propias hormigas lo cargan hasta la colonia; por '
                    . 'eso conviene aplicarlo con el hormiguero seco y sin lluvia a la vista, siguiendo las '
                    . 'indicaciones de la etiqueta sobre la cantidad de puntos de aplicación por hormiguero.',
            ],
            'items' => [
                ['title' => 'Pasturas nuevas', 'text' => 'Un hormiguero activo cerca de una pastura recién sembrada puede arruinar la implantación.'],
                ['title' => 'Cultivos jóvenes', 'text' => 'Las plantas tiernas son las más vulnerables al corte de las hormigas.'],
                ['title' => 'Galpones y jardines', 'text' => 'Los hormigueros cerca de construcciones también se tratan con cebo hormiguicida.'],
            ],
        ],
        [
            'h2'   => 'Mosquicidas e insecticidas agrícolas',
            'body' => [
                'En tambos y galpones, las moscas afectan el bienestar del animal y complican el trabajo '
                    . 'diario; los mosquicidas se aplican en el ambiente siguiendo las indicaciones de la '
                    . 'etiqueta sobre dónde y con qué frecuencia.',
                'Para plagas de cultivo trabajamos con insecticidas agrícolas de uso general; el producto '
                    . 'adecuado depende del cultivo y la plaga, por eso conviene contarnos qué estás viendo '
                    . 'en el lote. Usá siempre EPP y respetá el registro del SENAVE del producto.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Insecticida, hormiguicida y otros productos de campo en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta un insecticida o hormiguicida?',
            'a' => 'El precio depende de la presentación, la marca y la cantidad. Mandanos por WhatsApp qué '
                 . 'necesitás y te respondemos con el precio y el costo de envío hasta tu localidad, sin '
                 . 'compromiso.',
        ],
        [
            'q' => '¿Tienen algo para hormigas cortadoras?',
            'a' => 'Sí, trabajamos con cebos hormiguicidas pensados para hormigas cortadoras. Contanos dónde '
                 . 'está el hormiguero y te cotizamos.',
        ],
        [
            'q' => '¿Necesito equipo de protección para aplicar?',
            'a' => 'Sí, usá siempre equipo de protección personal (EPP): guantes, máscara y ropa adecuada, '
                 . 'según lo que indique la etiqueta del producto.',
        ],
        [
            'q' => '¿Tienen mosquicidas para tambo?',
            'a' => 'Sí, tenemos mosquicidas para galpones, tambos y corrales. Contanos el ambiente que hay '
                 . 'que tratar y te cotizamos.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar insecticida', 'whatsappText' => ''],
    'related'   => ['fumigadoras', 'herbicidas', 'raticidas'],
    'guides'    => ['hormigas-cortadoras', 'cipermetrina', 'fipronil', 'tierra-de-diatomeas'],
    'articles'  => [],
    'toolLinks' => [],
];
