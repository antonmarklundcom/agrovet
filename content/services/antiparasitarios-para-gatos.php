<?php
declare(strict_types=1);

return [
    'order'           => 21,
    'path'            => '/productos/antiparasitarios-para-gatos/',
    'title'           => 'Antiparasitarios para gatos',
    'navLabel'        => 'Antiparasitario para gatos',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Antiparasitario para gatos: envío al país',
    'metaDescription' => 'Antiparasitario para gatos: pipetas contra pulgas y comprimidos internos, '
                       . 'aptos para felinos. Cotizá sin costo por WhatsApp, envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Antiparasitario para gatos, interno y externo',
        'h2'      => 'Pipetas contra pulgas y desparasitantes internos aptos para felinos, con envío a todo Paraguay.',
        'lead'    => 'Un gato se lame todo el cuerpo varias veces al día, así que cualquier producto '
                   . 'que le pongas tiene que estar formulado para su especie. Contanos qué necesitás '
                   . 'y te cotizamos sin costo, con el envío hasta tu casa.',
    ],
    'includes' => [
        'Antiparasitario interno para gatos, en comprimido o suspensión',
        'Pipeta (spot-on) apta para felinos contra pulgas y otros parásitos externos',
        'Desparasitante combinado interno y externo para gatos',
        'Collares antiparasitarios formulados para felinos',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Uso exclusivamente veterinario: nunca uses en el gato un producto formulado para perros',
        'Respetá el peso del animal y la dosis que indica la etiqueta',
        'En gatitos, gatas preñadas o gatos enfermos, consultá antes al veterinario',
    ],
    'weNeed' => [
        'Peso aproximado del gato (o de cada gato, si son varios)',
        'Si buscás antiparasitario interno, externo o ambos',
        'Si el gato sale al exterior o vive solo puertas adentro',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué el gato necesita un producto propio',
            'body' => [
                'Los gatos son mucho más sensibles que los perros a ciertos principios activos: un '
                    . 'antiparasitario externo formulado para perros puede resultar tóxico si se '
                    . 'aplica en un gato, sobre todo porque el gato se lame el pelo y lo ingiere. Por '
                    . 'eso siempre hay que pedir la presentación específica para felinos.',
                'Un gato que sale al patio o convive con perros tiene más riesgo de pulgas y '
                    . 'parásitos internos que uno que vive puertas adentro, pero incluso un gato de '
                    . 'interior puede tener lombrices o pulgas que entran con otra mascota o en la '
                    . 'ropa.',
            ],
            'items' => [
                ['title' => 'Pulgas', 'text' => 'La pipeta felina protege por varias semanas y corta el contagio a otras mascotas de la casa.'],
                ['title' => 'Parásitos internos', 'text' => 'El desparasitante en comprimido se repite según indique la etiqueta, aunque el gato viva adentro.'],
                ['title' => 'Gatitos', 'text' => 'Necesitan productos y dosis distintas a un gato adulto; consultá antes de aplicar.'],
            ],
        ],
        [
            'h2'   => 'Pipeta o comprimido: cuál conviene',
            'body' => [
                'La pipeta se aplica en la nuca, donde el gato no puede lamerse, y es la forma más '
                    . 'segura de dar antiparasitario externo. El comprimido antiparasitario interno se '
                    . 'da por boca, a veces escondido en la comida, y ataca los parásitos intestinales '
                    . 'desde adentro.',
                'Hay presentaciones combinadas que cubren pulgas y parásitos internos en una sola '
                    . 'aplicación. Seguí siempre la etiqueta del producto y respetá el intervalo entre '
                    . 'aplicaciones que indica el fabricante.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Productos para felinos', 'text' => 'Presentaciones formuladas específicamente para gatos, no adaptadas de perro.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el antiparasitario para gatos?',
            'a' => 'Depende de la presentación, la marca y la cantidad. Mandanos por WhatsApp el '
                 . 'peso del gato y qué necesitás, y te respondemos con precio y envío sin '
                 . 'compromiso.',
        ],
        [
            'q' => '¿Cada cuánto hay que desparasitar a un gato?',
            'a' => 'Depende de la edad, si sale al exterior y si convive con otros animales; lo '
                 . 'indica la etiqueta de cada producto y lo confirma tu veterinario. Mirá también '
                 . 'nuestra guía sobre cada cuánto desparasitar.',
        ],
        [
            'q' => '¿Puedo usar en mi gato un antiparasitario de perro?',
            'a' => 'No. Algunos principios activos formulados para perros pueden ser tóxicos para un '
                 . 'gato. Pedí siempre la presentación específica para felinos.',
        ],
        [
            'q' => '¿Mi gato necesita antiparasitario si vive solo adentro?',
            'a' => 'Sí, aunque el riesgo sea menor. Las pulgas y algunos parásitos pueden entrar con '
                 . 'otra mascota o en la ropa, así que conviene mantener el desparasitante al día '
                 . 'igual.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar antiparasitario para gatos', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-perros', 'ivermectina', 'alimento-para-mascotas'],
    'guides'    => ['cada-cuanto-desparasitar'],
    'articles'  => [],
    'toolLinks' => [],
];
