<?php
declare(strict_types=1);

return [
    'order'           => 30,
    'path'            => '/productos/alimento-para-perros-y-gatos/',
    'title'           => 'Alimento para mascotas',
    'navLabel'        => 'Alimento para mascotas',
    'cluster'         => 'nutricion',
    'parent'          => null,
    'seoTitle'        => 'Alimento para perros y gatos: cotizá',
    'metaDescription' => 'Alimento para perros y gatos, cachorro, adulto o castrado, en bolsas grandes. '
                       . 'Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Nutrición animal',
        'h1'      => 'Alimento para perros y gatos',
        'h2'      => 'Balanceado para cachorro, adulto o castrado, en bolsas grandes, con envío a todo Paraguay.',
        'lead'    => 'Cada etapa de tu mascota pide un alimento distinto: un cachorro no come lo mismo '
                   . 'que un adulto castrado. Mandanos si es para perro o gato, la etapa y, si ya usás '
                   . 'una marca puntual, cuál, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Alimento para perros y gatos cachorros, adultos y castrados',
        'Bolsas grandes para hogares con varias mascotas o criaderos',
        'Cotización por la marca que ya usás, si tenés una preferida',
        'Alimento para razas pequeñas y para razas grandes',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'No es alimento medicado: ante bajo peso, sobrepeso o enfermedad, consultá al veterinario',
        'El cambio de alimento conviene hacerlo de forma gradual, mezclando con el anterior, para '
            . 'evitar problemas digestivos',
        'No garantizamos marcas específicas en stock: cotizamos según la marca que nos indiques',
    ],
    'weNeed' => [
        'Si es para perro o para gato',
        'La etapa: cachorro, adulto o castrado',
        'La marca que usás, si tenés una preferida',
        'El tamaño de bolsa y la cantidad',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Alimento según la etapa de tu mascota',
            'body' => [
                'Un cachorro necesita un alimento con más energía y proteína para crecer, mientras '
                    . 'que un adulto sano rinde bien con una fórmula de mantenimiento. Cuando el '
                    . 'perro o el gato se castra, su gasto de energía baja y conviene pasar a un '
                    . 'alimento pensado para esa condición, para que no suba de peso de golpe.',
                'Lo mismo pasa con el tamaño: una raza grande no come igual que una raza pequeña, ni '
                    . 'en cantidad ni siempre en formulación. Contanos la etapa y el tamaño de tu '
                    . 'mascota y te orientamos sobre qué línea pedir en la cotización.',
            ],
            'items' => [
                ['title' => 'Cachorros', 'text' => 'Fórmulas con más energía y proteína para el crecimiento.'],
                ['title' => 'Adultos', 'text' => 'Alimento de mantenimiento para el día a día.'],
                ['title' => 'Castrados', 'text' => 'Fórmulas pensadas para el menor gasto de energía tras la castración.'],
            ],
        ],
        [
            'h2'   => 'Bolsas grandes y la marca que ya usás',
            'body' => [
                'Para hogares con varias mascotas o para criaderos, cotizamos alimento en bolsas '
                    . 'grandes, que suele salir más conveniente que comprar en bolsas chicas de forma '
                    . 'seguida. Para perros y para gatos manejamos el mismo esquema de cotización.',
                'No tenemos una marca fija cargada en el catálogo: decinos la marca que ya usás, por '
                    . 'ejemplo Dog Chow, Pedigree, Monello o Pro Plan cachorro, y te la cotizamos con '
                    . 'el costo de envío hasta tu localidad. Si no tenés una marca definida, contanos '
                    . 'la etapa y el tamaño de tu mascota y te sugerimos opciones.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Cotizás la marca que usás', 'text' => 'Nos decís qué alimento le das hoy y te lo cotizamos.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el alimento para perros y gatos?',
            'a' => 'El precio depende de la marca, la etapa y el tamaño de bolsa. Mandanos por '
                 . 'WhatsApp qué necesitás y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Tienen Purina, Dog Chow, Pedigree o Pro Plan?',
            'a' => 'Trabajamos por pedido: decinos la marca que usás, por ejemplo Purina, Dog Chow, '
                 . 'Pedigree, Monello o Pro Plan cachorro, y te la cotizamos con el envío hasta tu '
                 . 'localidad.',
        ],
        [
            'q' => '¿Cuál es la diferencia entre el alimento para cachorro y para adulto?',
            'a' => 'El de cachorro aporta más energía y proteína para el crecimiento. El de adulto es '
                 . 'de mantenimiento. Si tu mascota está castrada, conviene una fórmula pensada para '
                 . 'ese menor gasto de energía.',
        ],
        [
            'q' => '¿Cuánto alimento necesita mi perro o gato por día?',
            'a' => 'La cantidad recomendada figura en la etiqueta de cada producto y varía según el '
                 . 'peso, la edad y la actividad del animal. Usala como guía general y consultá al '
                 . 'veterinario si tenés dudas sobre el peso de tu mascota.',
        ],
        [
            'q' => '¿Hacen envíos de bolsas grandes al interior?',
            'a' => 'Sí, enviamos a todo Paraguay, incluidas las bolsas grandes. El costo y el plazo '
                 . 'dependen de la localidad y te los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar alimento para mascotas', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-perros', 'antiparasitarios-para-gatos', 'balanceados'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [],
];
