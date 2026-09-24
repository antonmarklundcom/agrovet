<?php
/**
 * EXEMPLAR product page. Every other file in this directory copies its shape,
 * register (voseo), length and structure. Keywords: curabichera, cura bichera,
 * cura bicheras (1.300/mes cada una), curabichera plata, curabichera para
 * perros, curabichera en pasta, curabichera precio.
 */

declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/productos/curabichera/',
    'title'           => 'Curabichera',
    'navLabel'        => 'Curabichera',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Curabichera: precio y envío al país',
    'metaDescription' => 'Curabichera en aerosol, plata, polvo y pasta para ganado, ovejas y perros. '
                       . 'Cotizá por WhatsApp sin costo y recibila en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Curabichera para ganado, ovejas y perros',
        'h2'      => 'Aerosol, curabichera plata, polvo y pasta, con envío a todo Paraguay.',
        'lead'    => 'Una bichera no espera: en pocos días las larvas agrandan la herida y el animal '
                   . 'pierde peso. Mandanos qué presentación y cuántas unidades necesitás y te '
                   . 'cotizamos sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Curabichera en aerosol, incluida la curabichera plata',
        'Curabichera en polvo para heridas grandes o húmedas',
        'Curabichera en pasta para aplicar en zonas puntuales',
        'Presentaciones por unidad o por caja para el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Uso exclusivamente veterinario: nunca en personas',
        'Respetá el tiempo de retiro que indica la etiqueta antes de faenar o vender leche',
        'En heridas profundas o con infección, consultá al veterinario',
    ],
    'weNeed' => [
        'Qué presentación buscás: aerosol, polvo o pasta',
        'Cuántas unidades o cajas',
        'Para qué especie la vas a usar',
        'La localidad a la que hay que enviarla',
    ],
    'sections' => [
        [
            'h2'   => 'Qué es la bichera y por qué hay que tratarla el mismo día',
            'body' => [
                'La bichera (miasis) aparece cuando la mosca de la bichera, o gusano barrenador, pone '
                    . 'sus huevos en una herida abierta. En uno o dos días nacen las larvas, que se '
                    . 'alimentan del tejido vivo y agrandan la herida, y el olor atrae a más moscas.',
                'Los puntos de riesgo son siempre los mismos: el ombligo del ternero recién nacido, '
                    . 'la castración, el descorne, la marcación, las heridas de alambre y los '
                    . 'raspones de manga. En verano y con humedad el riesgo sube, por eso conviene '
                    . 'tener curabichera en el galpón antes de que haga falta.',
            ],
            'items' => [
                ['title' => 'Ombligo del ternero', 'text' => 'Curar el ombligo al nacer es la prevención más barata de toda la temporada.'],
                ['title' => 'Castración y descorne', 'text' => 'Toda herida de manejo se cubre con curabichera en el momento.'],
                ['title' => 'Heridas de alambre', 'text' => 'Un corte chico en verano puede ser una bichera en 48 horas.'],
            ],
        ],
        [
            'h2'   => 'Aerosol, plata, polvo o pasta: cuál conviene',
            'body' => [
                'La curabichera en aerosol es la más práctica para el trabajo de manga: se aplica '
                    . 'rápido y a distancia. La curabichera plata es un aerosol con aluminio que deja '
                    . 'una capa plateada visible, así sabés qué animal ya está curado y la herida '
                    . 'queda protegida de las moscas.',
                'El polvo se usa en heridas grandes o que supuran, porque seca la zona. La pasta '
                    . 'queda adherida en lugares difíciles y sirve para aplicaciones puntuales. Para '
                    . 'perros hay presentaciones de uso veterinario en aerosol; seguí siempre la '
                    . 'etiqueta y consultá al veterinario si la herida es profunda.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Curabichera, antiparasitario y sal mineral en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta la curabichera?',
            'a' => 'El precio depende de la presentación, la marca y la cantidad. Mandanos por '
                 . 'WhatsApp qué necesitás y te respondemos con el precio y el costo de envío '
                 . 'hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué es la curabichera plata?',
            'a' => 'Es una curabichera en aerosol con aluminio, que deja una capa plateada sobre la '
                 . 'herida. Protege de las moscas y te permite ver de lejos qué animal ya fue curado.',
        ],
        [
            'q' => '¿Se puede usar curabichera en perros?',
            'a' => 'Existen curabicheras de uso veterinario aptas para perros; la etiqueta indica '
                 . 'las especies. Si la herida es profunda o el perro está decaído, llevalo al '
                 . 'veterinario además de curar la herida.',
        ],
        [
            'q' => '¿Cada cuánto hay que volver a aplicar?',
            'a' => 'Lo indica la etiqueta de cada producto. En general se revisa la herida a diario '
                 . 'y se repite la aplicación hasta que cicatriza y deja de atraer moscas.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar curabichera', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-ganado', 'ivermectina', 'sal-mineral'],
    'guides'    => ['como-usar-curabichera'],
    'articles'  => [],
    'toolLinks' => [],
];
