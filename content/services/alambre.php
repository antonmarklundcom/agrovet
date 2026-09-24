<?php
declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/productos/alambre/',
    'title'           => 'Alambre',
    'navLabel'        => 'Alambre',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Alambre de púas, dulce y galvanizado',
    'metaDescription' => 'Alambre de púas, liso de alta resistencia y dulce para atar, por rollo o por '
                       . 'unidad. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Insumos de campo',
        'h1'      => 'Alambre para alambrado y cerco eléctrico',
        'h2'      => 'Púas, liso de alta resistencia, galvanizado y dulce para atar, en rollo.',
        'lead'    => 'Un alambrado flojo es hacienda suelta en la ruta o en el campo del vecino. '
                   . 'Contanos cuántos rollos necesitás y para qué tipo de cerco es, y te cotizamos '
                   . 'sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Alambre de púas para cerco perimetral de bovinos',
        'Alambre liso u ovalado de alta resistencia para tensores',
        'Alambre galvanizado para cerco eléctrico',
        'Alambre dulce para atar postes, tranqueras y trabajos de galpón',
        'Rollos por unidad o por lote para el establecimiento',
    ],
    'excludes' => [
        'El rendimiento por hectárea depende del diseño del alambrado: filas, postes y tranqueras',
        'Para cerco eléctrico, la boyerera y el equipo se cotizan aparte',
        'Revisá que el galvanizado sea el adecuado para tu zona antes de comprar',
    ],
    'weNeed' => [
        'Qué tipo de alambre buscás: púas, liso, galvanizado o dulce',
        'Cuántos rollos o kilos necesitás',
        'Si es para alambrado perimetral, interno o cerco eléctrico',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué tipo de alambre usar según el cerco',
            'body' => [
                'El alambre de púas es el más usado en alambrado perimetral para bovinos: la púa '
                    . 'frena al animal sin que haga falta electrificar la línea. El alambre liso u '
                    . 'ovalado de alta resistencia se usa en tensores y en cercos donde no conviene '
                    . 'la púa, como divisiones internas con ovinos o caballos.',
                'Para cerco eléctrico se usa alambre galvanizado, que conduce mejor y resiste la '
                    . 'intemperie. El alambre dulce no es para tensar: se usa para atar postes, '
                    . 'tranqueras y arreglos de galpón, y por eso se vende aparte del resto.',
            ],
            'items' => [
                ['title' => 'Alambre de púas', 'text' => 'La opción estándar para alambrado perimetral de bovinos.'],
                ['title' => 'Liso de alta resistencia', 'text' => 'Para tensores y cercos internos donde no conviene la púa.'],
                ['title' => 'Alambre dulce', 'text' => 'Para atar, no para tensar: postes, tranqueras y galpón.'],
            ],
        ],
        [
            'h2'   => 'Cuántos rollos necesitás para tu alambrado',
            'body' => [
                'La cantidad de rollos depende del largo del alambrado, del número de filas de '
                    . 'alambre y de la distancia entre postes. Un alambrado perimetral de varias '
                    . 'filas consume bastante más metraje que un cerco interno de una o dos filas.',
                'Si no tenés el cálculo hecho, usá la calculadora de alambrado para estimar metros y '
                    . 'rollos antes de pedir la cotización; así el precio y el envío que te pasamos '
                    . 'se ajustan a lo que realmente necesitás.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Alambre, tejido y postes en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el alambre de púas?',
            'a' => 'El precio depende de la marca, el calibre y la cantidad de rollos. Mandanos por '
                 . 'WhatsApp qué necesitás y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué diferencia hay entre alambre de púas y alambre liso?',
            'a' => 'El de púas frena al animal por sí solo y se usa en el perímetro. El liso u '
                 . 'ovalado de alta resistencia no tiene púa, se usa en tensores y en cercos donde '
                 . 'se busca menos riesgo de lastimar al animal.',
        ],
        [
            'q' => '¿El alambre dulce sirve para tensar el cerco?',
            'a' => 'No, el alambre dulce es blando y se usa para atar postes, tranqueras y arreglos '
                 . 'de galpón. Para tensar el cerco se usa alambre de púas o liso de alta '
                 . 'resistencia.',
        ],
        [
            'q' => '¿Cuántos rollos necesito para mi alambrado?',
            'a' => 'Depende del largo, del número de filas y de la distancia entre postes. Podés '
                 . 'usar la calculadora de alambrado para estimar metros y rollos antes de pedir la '
                 . 'cotización.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar alambre', 'whatsappText' => ''],
    'related'   => ['tejido-de-alambre', 'bebederos', 'sal-mineral'],
    'guides'    => ['cuanto-alambre-necesito'],
    'articles'  => [],
    'toolLinks' => [
        [
            'path'  => '/herramientas/calculadora-de-alambrado/',
            'label' => 'Calculadora de alambrado',
            'text'  => 'Estimá metros y rollos de alambre que necesitás para tu alambrado.',
        ],
    ],
];
