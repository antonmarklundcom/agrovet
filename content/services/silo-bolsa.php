<?php
/**
 * Product page. Keywords: silo bolsa (260/mes), bolsa silo (260), silo bolsa
 * para forraje, silo bolsa precio, bolsas para silo de maíz, precio por metro.
 */

declare(strict_types=1);

return [
    'order'           => 90,
    'path'            => '/productos/silo-bolsa/',
    'title'           => 'Silo bolsa',
    'navLabel'        => 'Silo bolsa',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Silo bolsa: precio y envío al país',
    'metaDescription' => 'Silo bolsa (bolsa silo) para grano y forraje, en el diámetro y largo que '
                       . 'necesites. Cotizá por WhatsApp sin costo y recibila en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Insumos de campo',
        'h1'      => 'Silo bolsa para grano y forraje',
        'h2'      => 'Bolsa silo en el diámetro y largo que necesites, con envío a todo Paraguay.',
        'lead'    => 'Una bolsa silo mal elegida o pinchada se nota recién cuando ya hay pérdida de '
                   . 'grano o de silaje. Contanos si es para grano o para forraje, el diámetro y el '
                   . 'largo que necesitás, y te cotizamos sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Silo bolsa para grano seco, como maíz o soja',
        'Silo bolsa para forraje (silaje), pensada para el picado húmedo',
        'Distintos diámetros y largos, según lo que necesite el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'No publicamos precio por metro: depende del diámetro, el largo y la cantidad',
        'Revisá la bolsa al armarla y periódicamente durante el almacenaje, para detectar roturas a tiempo',
        'Protegé la bolsa de roedores y de objetos punzantes en la base donde se apoya',
    ],
    'weNeed' => [
        'Si es para grano o para forraje (silaje)',
        'El diámetro y el largo que necesitás',
        'Cuántas bolsas',
        'La localidad a la que hay que enviarlas',
    ],
    'sections' => [
        [
            'h2'   => 'Grano o forraje: la diferencia importa',
            'body' => [
                'La silo bolsa para grano guarda cereal seco, como maíz o soja, protegido del aire y '
                    . 'la humedad hasta que se vende o se usa. La silo bolsa para forraje se usa para '
                    . 'silaje: guarda el picado húmedo en fermentación, y por eso el film y el manejo '
                    . 'del armado son distintos a los de grano.',
                'El diámetro y el largo se eligen según la cantidad a guardar y la maquinaria de '
                    . 'embolsado disponible; contanos esos datos y te ayudamos a cotizar lo que '
                    . 'corresponde a tu volumen.',
            ],
            'items' => [
                ['title' => 'Para grano', 'text' => 'Guarda cereal seco, como maíz o soja, protegido del aire y la humedad.'],
                ['title' => 'Para forraje', 'text' => 'Pensada para silaje: el picado húmedo en fermentación.'],
                ['title' => 'Diámetro y largo', 'text' => 'Se eligen según el volumen a guardar y la embolsadora disponible.'],
            ],
        ],
        [
            'h2'   => 'Calidad del film y cuidado durante el almacenaje',
            'body' => [
                'El film de la silo bolsa se fabrica en capas, pensadas para dar protección contra '
                    . 'los rayos UV y mantener la hermeticidad durante todo el tiempo de almacenaje. '
                    . 'Una bolsa de buena calidad reduce el riesgo de roturas por el sol y el viento.',
                'Además del film, el cuidado está en el lugar donde se apoya la bolsa (sin piedras ni '
                    . 'rastrojo punzante), en revisarla con frecuencia para detectar pinchaduras de '
                    . 'roedores o pájaros, y en reparar cualquier rotura apenas se nota, para no '
                    . 'perder grano ni calidad de silaje.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Grano y forraje', 'text' => 'Cotizamos silo bolsa tanto para grano seco como para silaje.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta la silo bolsa?',
            'a' => 'El precio depende del diámetro, el largo y la cantidad de bolsas. Mandanos por '
                 . 'WhatsApp esos datos y te respondemos con el precio y el costo de envío hasta tu '
                 . 'localidad, sin compromiso.',
        ],
        [
            'q' => '¿Sirve la misma bolsa para maíz y para silaje?',
            'a' => 'No necesariamente. La silo bolsa para grano seco y la silo bolsa para forraje '
                 . '(silaje) están pensadas para contenidos distintos; contanos qué vas a guardar y '
                 . 'te orientamos sobre cuál corresponde.',
        ],
        [
            'q' => '¿En qué diámetros y largos viene?',
            'a' => 'Depende de la marca y del volumen a guardar. Contanos cuánto grano o forraje '
                 . 'necesitás embolsar y te ayudamos a definir el diámetro y el largo que más te '
                 . 'convienen.',
        ],
        [
            'q' => '¿Cómo se cuida la bolsa para que no se rompa?',
            'a' => 'Se apoya sobre una base pareja, sin piedras ni rastrojo punzante, se revisa con '
                 . 'frecuencia para detectar pinchaduras de roedores o pájaros, y cualquier rotura se '
                 . 'repara apenas se nota, para no perder grano ni calidad de silaje.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar silo bolsa', 'whatsappText' => ''],
    'related'   => ['semillas', 'raticidas', 'fertilizantes'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [],
];
