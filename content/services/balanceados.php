<?php
declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/productos/balanceado-para-animales/',
    'title'           => 'Balanceados',
    'navLabel'        => 'Balanceados',
    'cluster'         => 'nutricion',
    'parent'          => null,
    'seoTitle'        => 'Balanceado para animales en Paraguay',
    'metaDescription' => 'Balanceado para cerdos, gallinas ponedoras, parrilleros, vacas y equinos. '
                       . 'Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Nutrición animal',
        'h1'      => 'Balanceado para animales',
        'h2'      => 'Ración balanceada para cerdos, aves, bovinos y equinos, con envío a todo Paraguay.',
        'lead'    => 'Cada especie y cada etapa productiva necesita una ración distinta: no es lo mismo '
                   . 'un lechón que un cerdo en terminación, ni una gallina ponedora que un parrillero. '
                   . 'Mandanos qué animal y qué etapa tenés, y te cotizamos sin costo con el envío hasta '
                   . 'tu localidad.',
    ],
    'includes' => [
        'Balanceado para cerdos en sus distintas etapas',
        'Balanceado para gallinas ponedoras y para parrilleros',
        'Balanceado para bovinos de terminación y para tambo',
        'Balanceado para equinos',
        'Presentaciones en bolsa según el volumen que necesites',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'La ración adecuada varía según la etapa y la etiqueta de cada balanceado: seguila como guía',
        'Todo cambio de alimento conviene hacerlo de forma gradual para evitar problemas digestivos',
        'Para planes de alimentación específicos, consultá con un veterinario o nutricionista animal',
    ],
    'weNeed' => [
        'Qué especie: cerdos, aves, bovinos o equinos',
        'La etapa productiva: cría, recría, engorde, postura o lechería',
        'Cuántas bolsas necesitás',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué balanceado corresponde a cada categoría',
            'body' => [
                'En cerdos, el balanceado cambia entre la etapa de lactancia, la recría y la '
                    . 'terminación, porque las necesidades de energía y proteína no son las mismas '
                    . 'en un lechón que en un capón cerca de faena. En aves, una gallina ponedora '
                    . 'necesita una fórmula pensada para sostener la postura, distinta de la que '
                    . 'lleva un parrillero en crecimiento rápido.',
                'En bovinos, el balanceado se usa sobre todo para acelerar la terminación a corral o '
                    . 'para complementar la dieta en tambo, siempre junto con el forraje disponible. '
                    . 'En equinos, la ración se ajusta según el trabajo del animal y su condición '
                    . 'corporal. Contanos tu caso y te orientamos sobre qué línea de balanceado pedir '
                    . 'en la cotización.',
            ],
            'items' => [
                ['title' => 'Cerdos', 'text' => 'Balanceado por etapa: lactancia, recría y terminación.'],
                ['title' => 'Aves', 'text' => 'Fórmulas distintas para postura y para parrilleros.'],
                ['title' => 'Bovinos y equinos', 'text' => 'Terminación, tambo o trabajo, según lo que necesites.'],
            ],
        ],
        [
            'h2'   => 'Balanceado o ración mezclada: qué considerar',
            'body' => [
                'El balanceado comercial viene formulado para cubrir las necesidades de la etapa que '
                    . 'declara en la etiqueta, lo que simplifica el manejo en establecimientos '
                    . 'chicos o donde no se dispone de todos los insumos para mezclar en el campo.',
                'Si ya usás una mezcla propia con maíz, soja u otros insumos, el balanceado también '
                    . 'sirve como complemento puntual en etapas críticas, como el arranque de postura '
                    . 'o los últimos días de terminación. Decinos qué estás usando hoy y te ayudamos '
                    . 'a definir qué pedir.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Balanceado, sal mineral y antiparasitarios en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el balanceado para animales?',
            'a' => 'El precio depende de la especie, la marca, la etapa y la cantidad de bolsas. '
                 . 'Mandanos por WhatsApp qué necesitás y te respondemos con el precio y el costo de '
                 . 'envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Tienen balanceado para cerdo en todas las etapas?',
            'a' => 'Sí, cotizamos balanceado para cada etapa del cerdo, desde lactancia hasta '
                 . 'terminación. Contanos en qué etapa está tu lote y te pasamos las opciones.',
        ],
        [
            'q' => '¿Qué diferencia hay entre el balanceado para gallina ponedora y el de parrilleros?',
            'a' => 'El de ponedoras está formulado para sostener la producción de huevos, con más '
                 . 'calcio para la cáscara. El de parrilleros prioriza el crecimiento rápido del ave. '
                 . 'Son fórmulas distintas y no se reemplazan entre sí.',
        ],
        [
            'q' => '¿Cuánto balanceado necesita cada animal por día?',
            'a' => 'La cantidad recomendada la indica la etiqueta de cada producto según la especie y '
                 . 'la etapa. Usala como guía general y ajustala con tu veterinario o nutricionista '
                 . 'según el objetivo productivo.',
        ],
        [
            'q' => '¿Hacen envíos de balanceado al interior del país?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar balanceado', 'whatsappText' => ''],
    'related'   => ['sal-mineral', 'alimento-para-mascotas', 'antiparasitarios-para-ganado'],
    'guides'    => ['gallinas-ponedoras'],
    'articles'  => [],
    'toolLinks' => [],
];
