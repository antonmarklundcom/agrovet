<?php
declare(strict_types=1);

return [
    'order'           => 22,
    'path'            => '/productos/antiparasitarios-para-ganado/',
    'title'           => 'Antiparasitarios para ganado',
    'navLabel'        => 'Antiparasitario para ganado',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Antiparasitario para ganado y cerdos',
    'metaDescription' => 'Antiparasitario inyectable, pour-on y garrapaticida para bovinos, y '
                       . 'antiparasitario para cerdos. Cotizá sin costo por WhatsApp y recibilo en '
                       . 'todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Antiparasitario para ganado bovino y cerdos',
        'h2'      => 'Inyectable, pour-on y garrapaticida para bovinos, y antiparasitario para cerdos, con envío a todo Paraguay.',
        'lead'    => 'Un lote con carga de parásitos pierde peso y conversión aunque coma bien: la '
                   . 'garrapata y los parásitos internos le sacan al animal lo que la pastura le da. '
                   . 'Contanos la especie, la categoría y cuántos animales tenés, y te cotizamos sin '
                   . 'costo con el envío hasta tu establecimiento.',
    ],
    'includes' => [
        'Antiparasitario inyectable para bovinos, interno y externo',
        'Antiparasitario pour-on para aplicar en el lomo, sin manga si hace falta',
        'Garrapaticida para el control de garrapata en el rodeo',
        'Antiparasitario para cerdos, interno y externo',
        'Cotización con el costo de envío hasta tu establecimiento',
    ],
    'excludes' => [
        'Uso exclusivamente veterinario: seguí siempre las indicaciones de la etiqueta',
        'Respetá el tiempo de retiro que indica la etiqueta antes de faenar o vender leche',
        'En animales muy debilitados o con carga parasitaria alta, consultá al veterinario antes de tratar',
    ],
    'weNeed' => [
        'Especie: bovinos, cerdos u otra',
        'Categoría y cantidad de animales a tratar',
        'Si preferís inyectable, pour-on o garrapaticida',
        'La localidad o el establecimiento al que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Interno, externo y garrapata: por qué conviene tratar junto',
            'body' => [
                'Los parásitos internos (gusanos gastrointestinales) bajan la conversión y el peso '
                    . 'sin que se note a simple vista, hasta que el lote se atrasa. Los parásitos '
                    . 'externos, sobre todo la garrapata, además de sacarle sangre al animal pueden '
                    . 'transmitir enfermedades de la sangre que complican todavía más el cuadro.',
                'Por eso muchos productos combinan control interno y externo en una sola aplicación. '
                    . 'El momento de la manga es la oportunidad para tratar todo el lote junto, en vez '
                    . 'de esperar a ver animales con garrapata visible o con la piel afectada.',
            ],
            'items' => [
                ['title' => 'Manga y encierre', 'text' => 'El momento del rodeo general es la oportunidad para tratar todo el lote de una vez.'],
                ['title' => 'Garrapata', 'text' => 'Un rodeo con garrapata visible ya tiene carga parasitaria alta; conviene actuar rápido.'],
                ['title' => 'Sequía y verano', 'text' => 'Con menos pastura, la carga parasitaria pesa más sobre el estado corporal del animal.'],
            ],
        ],
        [
            'h2'   => 'Inyectable, pour-on o garrapaticida: cuál conviene',
            'body' => [
                'El inyectable se aplica en la manga y da un control interno y externo parejo en '
                    . 'todo el lote. El pour-on se vierte sobre el lomo del animal y es una opción '
                    . 'práctica cuando no hay manga disponible, aunque conviene aplicarlo con el '
                    . 'animal seco para que absorba bien.',
                'El garrapaticida se usa específicamente para bajar la carga de garrapata cuando ya '
                    . 'es visible en el rodeo. Para cerdos hay presentaciones propias, inyectables o '
                    . 'en el agua de bebida; consultá la etiqueta según la categoría y el peso de los '
                    . 'animales.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Para el establecimiento', 'text' => 'Cotizamos por unidad o por caja según el tamaño del lote que necesites tratar.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el antiparasitario para ganado?',
            'a' => 'Depende de la presentación, la marca y la cantidad de animales a tratar. '
                 . 'Mandanos por WhatsApp la categoría y cuántas cabezas tenés, y te respondemos con '
                 . 'precio y envío sin compromiso.',
        ],
        [
            'q' => '¿Inyectable o pour-on, cuál es mejor?',
            'a' => 'Depende de si tenés manga disponible y de la categoría de animales. El inyectable '
                 . 'da un control parejo en la manga; el pour-on es más práctico sin encierre. '
                 . 'Consultá a tu veterinario cuál conviene para tu rodeo.',
        ],
        [
            'q' => '¿Cuánto hay que esperar para faenar o vender leche después de tratar?',
            'a' => 'El tiempo de retiro lo indica la etiqueta de cada producto y varía según la '
                 . 'presentación. Respetalo siempre antes de faenar o vender leche.',
        ],
        [
            'q' => '¿El antiparasitario de ganado sirve para cerdos?',
            'a' => 'No en todos los casos; cada especie tiene productos y dosis específicas. Contanos '
                 . 'si es para bovinos o para cerdos y te cotizamos el que corresponde.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar antiparasitario para ganado', 'whatsappText' => ''],
    'related'   => ['curabichera', 'ivermectina', 'sal-mineral'],
    'guides'    => ['doramectina', 'albendazol-veterinario', 'garrapata-en-bovinos', 'levamisol'],
    'articles'  => ['temporada-de-garrapatas'],
    'toolLinks' => [],
];
