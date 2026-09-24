<?php
declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/productos/antiparasitarios-para-perros/',
    'title'           => 'Antiparasitarios para perros',
    'navLabel'        => 'Antiparasitario para perros',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Antiparasitario para perros con envío',
    'metaDescription' => 'Antiparasitario interno y externo para perros: pipetas, comprimidos y '
                       . 'desparasitantes contra pulgas, garrapatas y lombrices. Cotizá sin costo '
                       . 'por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Antiparasitario para perros, interno y externo',
        'h2'      => 'Pipetas, comprimidos y desparasitantes contra pulgas, garrapatas y lombrices, con envío a todo Paraguay.',
        'lead'    => 'Las pulgas y garrapatas no solo molestan: transmiten enfermedades que se '
                   . 'complican rápido en un perro sin protección. Contanos si buscás algo para uso '
                   . 'externo, interno o los dos, y te cotizamos sin costo con el envío hasta tu casa.',
    ],
    'includes' => [
        'Antiparasitario interno para perros, en comprimidos o suspensión',
        'Antiparasitario externo en pipeta (spot-on) contra pulgas y garrapatas',
        'Collares y otras presentaciones antiparasitarias',
        'Desparasitante combinado interno y externo',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Uso exclusivamente veterinario: nunca apliques productos de otra especie en el perro',
        'Respetá el peso del animal y la dosis que indica la etiqueta',
        'En cachorros, hembras preñadas o perros enfermos, consultá antes al veterinario',
    ],
    'weNeed' => [
        'Peso aproximado del perro (o de cada perro, si son varios)',
        'Si buscás antiparasitario interno, externo o ambos',
        'Alguna marca o presentación de preferencia, si la tenés',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Interno y externo: dos problemas distintos',
            'body' => [
                'El antiparasitario interno para perros ataca lombrices y otros parásitos '
                    . 'intestinales, que un perro puede contagiarse por el pasto, la tierra o la '
                    . 'comida de la calle. El antiparasitario externo actúa contra pulgas y '
                    . 'garrapatas, que se pegan al pelo y la piel y pueden transmitir enfermedades '
                    . 'como la erlichiosis.',
                'Un cachorro que rasca todo el día, un perro con manchas de pulgas en la cama o '
                    . 'garrapatas visibles detrás de las orejas son señales de que ya hace falta '
                    . 'tratamiento, no prevención. Cuanto antes se trate, menos se disemina en la casa '
                    . 'o el patio.',
            ],
            'items' => [
                ['title' => 'Pulgas y garrapatas', 'text' => 'La pipeta externa corta el ciclo antes de que la infestación se instale en la casa.'],
                ['title' => 'Lombrices intestinales', 'text' => 'El desparasitante interno se repite cada cierto tiempo según indique la etiqueta.'],
                ['title' => 'Cachorros', 'text' => 'Necesitan productos y dosis distintas a un perro adulto; consultá antes de aplicar.'],
            ],
        ],
        [
            'h2'   => 'Pipeta, comprimido o collar: cuál conviene',
            'body' => [
                'La pipeta (spot-on) se aplica sobre la piel del cuello y protege contra pulgas y '
                    . 'garrapatas por varias semanas; es la opción más práctica si el perro no se '
                    . 'baña seguido. El comprimido antiparasitario interno se da por boca y ataca las '
                    . 'lombrices desde adentro, y hay comprimidos combinados que cubren interno y '
                    . 'externo en una sola toma.',
                'El collar antiparasitario da protección más prolongada pero conviene revisarlo si '
                    . 'el perro nada mucho o se moja seguido. Seguí siempre la etiqueta del producto '
                    . 'y respetá el intervalo entre aplicaciones que indica el fabricante.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Antiparasitario, alimento y curabichera en la misma cotización si los necesitás juntos.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el antiparasitario para perros?',
            'a' => 'Depende de la presentación, la marca y la cantidad. Mandanos por WhatsApp el '
                 . 'peso del perro y qué necesitás, y te respondemos con precio y envío sin '
                 . 'compromiso.',
        ],
        [
            'q' => '¿Cada cuánto hay que desparasitar a un perro?',
            'a' => 'Depende de la edad, si vive con más animales y la zona; lo indica la etiqueta de '
                 . 'cada producto y lo confirma tu veterinario. Mirá también nuestra guía sobre cada '
                 . 'cuánto desparasitar.',
        ],
        [
            'q' => '¿Puedo usar el mismo antiparasitario para todos mis perros?',
            'a' => 'La dosis se calcula por peso, así que un perro grande y uno chico necesitan '
                 . 'cantidades distintas del mismo producto. Contanos el peso de cada uno al pedir la '
                 . 'cotización.',
        ],
        [
            'q' => '¿Sirve el antiparasitario de perro para otros animales?',
            'a' => 'No. Cada especie tiene productos y dosis específicas; usar un antiparasitario de '
                 . 'perro en otro animal puede ser peligroso. Pedinos el que corresponde a cada '
                 . 'especie.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar antiparasitario para perros', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-gatos', 'ivermectina', 'alimento-para-mascotas'],
    'guides'    => ['cada-cuanto-desparasitar', 'pulgas-y-garrapatas-en-perros', 'sarna-en-perros'],
    'articles'  => [],
    'toolLinks' => [],
];
