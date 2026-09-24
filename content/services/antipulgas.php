<?php
/**
 * Product page: antipulgas para perros y gatos. Keywords: antipulgas para
 * perros y gatos, pipeta para perros, collar antipulgas, comprimidos
 * masticables contra pulgas y garrapatas.
 */

declare(strict_types=1);

return [
    'order'           => 25,
    'path'            => '/productos/antipulgas-para-perros-y-gatos/',
    'title'           => 'Antipulgas para perros y gatos',
    'navLabel'        => 'Antipulgas',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Antipulgas para perros y gatos',
    'metaDescription' => 'Pipetas, collares y comprimidos antipulgas para perros y gatos, por peso '
                       . 'y especie. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Antipulgas para perros y gatos',
        'h2'      => 'Pipetas, collares y comprimidos masticables, elegidos por peso y por especie.',
        'lead'    => 'Las pulgas no se van solas y las garrapatas encima traen otros riesgos. '
                   . 'Contanos si es para perro o gato, el peso aproximado y si preferís pipeta, '
                   . 'collar o comprimido, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Pipetas (spot-on) contra pulgas y garrapatas por rango de peso',
        'Collares antipulgas de liberación prolongada',
        'Comprimidos masticables contra pulgas y garrapatas',
        'Productos específicos para gatos, nunca los mismos que para perros',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Nunca uses un antipulgas para perros en un gato: muchos contienen permetrina, tóxica '
            . 'para los felinos aunque sea en dosis mínimas',
        'Aplicá según la etiqueta y respetá el peso y la edad indicados',
        'Si el gato o el perro babea, tiembla o está decaído después de aplicar un producto, '
            . 'llevalo a la veterinaria de inmediato',
    ],
    'weNeed' => [
        'Si es para perro o gato',
        'El peso aproximado del animal',
        'Si preferís pipeta, collar o comprimido masticable',
        'Si buscás una marca puntual (por ejemplo Nexgard, Bravecto, Simparica o Frontline) para cotizarla',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué conviene tratar antes de que se note la infestación',
            'body' => [
                'Cuando ves pulgas saltando ya hay huevos y larvas en la casa, en la cucha y en el '
                    . 'patio. El perro o el gato se rasca, se lastima la piel y en infestaciones '
                    . 'grandes, sobre todo en cachorros, puede llegar a anemia. Las garrapatas suman '
                    . 'otro riesgo: se prenden en las orejas, entre los dedos y en el cuello.',
                'Por eso el tratamiento preventivo, aplicado según la etiqueta, rinde más que curar '
                    . 'una infestación ya instalada. La elección depende del animal: un cachorro chico, '
                    . 'un perro que nada seguido o un gato que sale al patio necesitan presentaciones '
                    . 'distintas.',
            ],
            'items' => [
                ['title' => 'Perros de patio o campo', 'text' => 'Más expuestos a garrapatas; conviene protección continua.'],
                ['title' => 'Gatos', 'text' => 'Solo productos formulados para felinos, nunca los de uso canino.'],
                ['title' => 'Cachorros y gatitos', 'text' => 'Hay presentaciones por peso y edad mínima; seguí la etiqueta.'],
            ],
        ],
        [
            'h2'   => 'Pipeta, collar o comprimido: cuál conviene',
            'body' => [
                'La pipeta se aplica sobre la piel, entre los omóplatos, y suele durar varias semanas; '
                    . 'es la opción más común para perros y gatos. El collar libera el producto de forma '
                    . 'constante y sirve como protección de fondo, aunque conviene combinarlo con otra '
                    . 'medida si el animal nada seguido.',
                'El comprimido masticable actúa desde adentro y evita que el producto se lave con el '
                    . 'baño o la lluvia, algo útil en perros muy activos. Si ya usás una marca y solo '
                    . 'querés reponerla, decinos el nombre (por ejemplo Nexgard, Bravecto, Simparica o '
                    . 'Frontline) y te la cotizamos.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Antipulgas, vitaminas y alimento para mascotas en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el antipulgas para perros y gatos?',
            'a' => 'Depende de la presentación (pipeta, collar o comprimido), la marca y el peso del '
                 . 'animal. Mandanos esos datos por WhatsApp y te respondemos con el precio y el '
                 . 'costo de envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Puedo usar un antipulgas de perro en mi gato?',
            'a' => 'No. Varios antipulgas para perros contienen permetrina, que es tóxica para los '
                 . 'gatos incluso en cantidades mínimas. Usá siempre un producto formulado para '
                 . 'felinos y consultá al veterinario ante la duda.',
        ],
        [
            'q' => '¿Pipeta, collar o comprimido, cuál es mejor?',
            'a' => 'Los tres funcionan si se usan según la etiqueta. La pipeta es la más práctica '
                 . 'para empezar, el collar da protección continua y el comprimido no se lava con '
                 . 'el agua. Contanos la rutina del animal y te orientamos con lo que tenemos.',
        ],
        [
            'q' => '¿Cada cuánto hay que renovar el tratamiento?',
            'a' => 'Depende del producto: lo indica la etiqueta de cada presentación. En general va '
                 . 'de unas semanas a un mes, salvo el collar, que dura más tiempo.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar antipulgas', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-perros', 'antiparasitarios-para-gatos', 'vitaminas'],
    'guides'    => ['pulgas-y-garrapatas-en-perros'],
    'articles'  => [],
    'toolLinks' => [],
];
