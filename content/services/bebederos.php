<?php
declare(strict_types=1);

return [
    'order'           => 60,
    'path'            => '/productos/bebederos-para-animales/',
    'title'           => 'Bebederos',
    'navLabel'        => 'Bebederos',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Bebederos para aves, cerdos y ganado',
    'metaDescription' => 'Bebederos para gallinas, chupón para cerdos y bebederos de nivel para ganado. '
                       . 'Cotizá por WhatsApp sin costo y recibilos en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Insumos de campo',
        'h1'      => 'Bebederos para animales',
        'h2'      => 'Bebederos para aves, chupón para cerdos y bebederos de nivel para ganado, con envío a todo Paraguay.',
        'lead'    => 'Un bebedero que gotea, se ensucia rápido o no alcanza para el lote entero termina '
                   . 'costando en consumo de agua y en sanidad. Mandanos para qué animal y cuántos '
                   . 'bebederos necesitás, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Bebederos automáticos para gallinas y aves de galpón',
        'Chupón (bebedero a chupete) para cerdos',
        'Bebederos de nivel para ganado bovino',
        'Distintos materiales y capacidades según el tamaño del lote',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Son bebederos para producción animal, en galpón o a campo: no son dispensadores de agua '
            . 'para uso doméstico',
        'Conviene revisar y limpiar los bebederos con frecuencia para evitar que se conviertan en '
            . 'foco de enfermedades',
        'En verano, ubicarlos bajo sombra o galpón ayuda a que el agua se mantenga en mejores '
            . 'condiciones',
    ],
    'weNeed' => [
        'Para qué animal: aves, cerdos o ganado',
        'Cuántos bebederos o cuántos animales tenés',
        'Si el bebedero va a campo abierto o bajo galpón',
        'La localidad a la que hay que enviarlos',
    ],
    'sections' => [
        [
            'h2'   => 'Bebederos según el animal',
            'body' => [
                'En aves, el bebedero automático mantiene el agua limpia y disponible todo el día, '
                    . 'algo clave tanto en gallinas ponedoras como en parrilleros, donde el consumo '
                    . 'de agua acompaña directamente al de alimento. En cerdos, el chupón (o bebedero '
                    . 'a chupete) reduce el desperdicio de agua y evita que el chiquero se llene de '
                    . 'barro, algo que en verano hace mucha diferencia en el bienestar del animal.',
                'En ganado, el bebedero de nivel asegura que el agua esté siempre disponible sin '
                    . 'depender de que alguien la reponga a mano, y facilita agrupar el rodeo cerca de '
                    . 'la manga o el potrero de trabajo. Contanos el animal y el tamaño del lote y te '
                    . 'orientamos sobre qué capacidad conviene cotizar.',
            ],
            'items' => [
                ['title' => 'Aves', 'text' => 'Bebederos automáticos para ponedoras y parrilleros.'],
                ['title' => 'Cerdos', 'text' => 'Chupón para reducir el desperdicio de agua y el barro.'],
                ['title' => 'Ganado', 'text' => 'Bebederos de nivel para tener agua disponible todo el día.'],
            ],
        ],
        [
            'h2'   => 'Qué considerar antes de comprar',
            'body' => [
                'La capacidad del bebedero tiene que acompañar el tamaño del lote: uno chico para un '
                    . 'lote grande obliga a rellenar seguido y el agua se ensucia más rápido. El '
                    . 'material también importa según el uso: a campo abierto conviene algo resistente '
                    . 'al sol y a los golpes; bajo galpón se puede priorizar un modelo más liviano.',
                'Si el bebedero va a estar a la intemperie, ubicarlo bajo sombra ayuda a que el agua '
                    . 'no se caliente en verano. Decinos si tu instalación es a campo o bajo techo y '
                    . 'te sugerimos el modelo que mejor se adapta.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Bebederos, alambre y sal mineral en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan los bebederos para animales?',
            'a' => 'El precio depende del tipo, el material, la capacidad y la cantidad. Mandanos por '
                 . 'WhatsApp para qué animal y cuántos necesitás, y te respondemos con el precio y el '
                 . 'costo de envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué es un chupón para cerdo?',
            'a' => 'Es un bebedero a chupete: el cerdo empuja o muerde una pieza metálica y libera '
                 . 'agua solo mientras la usa. Reduce el desperdicio de agua y evita que el chiquero '
                 . 'se llene de barro.',
        ],
        [
            'q' => '¿Tienen bebederos automáticos para gallinas?',
            'a' => 'Sí, cotizamos bebederos automáticos para gallinas ponedoras y para parrilleros, en '
                 . 'distintas capacidades según el tamaño del galpón.',
        ],
        [
            'q' => '¿Sirven como dispensador de agua para la casa?',
            'a' => 'No, son bebederos pensados para producción animal, a campo o en galpón. No están '
                 . 'diseñados como dispensadores de agua para uso doméstico.',
        ],
        [
            'q' => '¿Hacen envíos de bebederos al interior del país?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar bebederos', 'whatsappText' => ''],
    'related'   => ['sal-mineral', 'alambre', 'tejido-de-alambre'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [],
];
