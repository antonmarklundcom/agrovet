<?php
declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/productos/tejido-de-alambre/',
    'title'           => 'Tejido de alambre',
    'navLabel'        => 'Tejido de alambre',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Tejido de alambre: precio y envío al campo',
    'metaDescription' => 'Tejido romboidal, olímpico, hexagonal para gallinero y electrosoldado, por '
                       . 'metro o por rollo. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Insumos de campo',
        'h1'      => 'Tejido de alambre para cerco y gallinero',
        'h2'      => 'Romboidal, olímpico, hexagonal para gallinero y electrosoldado, en distintas alturas.',
        'lead'    => 'El tejido correcto depende de qué querés contener o cercar: no es lo mismo un '
                   . 'perímetro que un gallinero. Contanos el tipo, la altura y los metros que '
                   . 'necesitás, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Tejido romboidal (olímpico) por metro o por rollo',
        'Tejido hexagonal para gallinero y aves de corral',
        'Tejido electrosoldado para cerco de huerta y jardín',
        'Distintas alturas según el uso: perimetral, gallinero o huerta',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Los postes, tensores y accesorios de fijación se cotizan aparte del tejido',
        'La altura y el calibre inciden en el precio final por metro',
        'Para uso perimetral con hacienda, revisá que la altura sea suficiente antes de comprar',
    ],
    'weNeed' => [
        'Qué tipo de tejido buscás: romboidal, hexagonal o electrosoldado',
        'La altura que necesitás',
        'Cuántos metros o rollos',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué tipo de tejido conviene según el uso',
            'body' => [
                'El tejido romboidal, conocido como olímpico, es el más usado para cerco perimetral '
                    . 'y deportivo: la trama en rombo lo hace resistente y se vende en distintas '
                    . 'alturas según lo que haya que contener. El tejido hexagonal, más liviano, es '
                    . 'el que se usa para gallinero y para separar aves de corral, porque su malla '
                    . 'más chica no deja pasar pollitos.',
                'El tejido electrosoldado tiene la unión de los alambres soldada en cada cruce, lo '
                    . 'que le da una forma más rígida y prolija. Se usa mucho en cerco de huerta y '
                    . 'jardín, donde importa más la terminación que la resistencia a un empuje '
                    . 'fuerte.',
            ],
            'items' => [
                ['title' => 'Romboidal (olímpico)', 'text' => 'Resistente, para cerco perimetral y deportivo, en varias alturas.'],
                ['title' => 'Hexagonal para gallinero', 'text' => 'Malla chica, pensada para contener aves de corral.'],
                ['title' => 'Electrosoldado', 'text' => 'Rígido y prolijo, ideal para huerta y jardín.'],
            ],
        ],
        [
            'h2'   => 'Cómo se calcula el precio por metro',
            'body' => [
                'El precio del tejido de alambre por metro varía según el tipo de trama, la altura '
                    . 'y el calibre del alambre. Un tejido más alto o de calibre más grueso rinde '
                    . 'más protección, pero también cuesta más por metro que uno liviano.',
                'Para que la cotización sea exacta necesitamos saber cuántos metros lineales vas a '
                    . 'cercar y la altura que buscás. Con esos dos datos te respondemos precio y '
                    . 'costo de envío en el mismo mensaje.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Tejido, alambre y postes en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuál es el precio del tejido de alambre por metro?',
            'a' => 'Depende del tipo de trama, la altura y el calibre. Mandanos por WhatsApp qué '
                 . 'tejido y cuántos metros necesitás y te respondemos con el precio y el costo de '
                 . 'envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué tejido conviene para un gallinero?',
            'a' => 'El tejido hexagonal es el más usado para gallinero, porque su malla chica no '
                 . 'deja pasar pollitos y es liviano para instalar en corrales y ponedoras.',
        ],
        [
            'q' => '¿Qué diferencia hay entre tejido romboidal y electrosoldado?',
            'a' => 'El romboidal (olímpico) tiene la trama entrelazada y es más resistente a un '
                 . 'empuje fuerte. El electrosoldado tiene los cruces soldados, queda más rígido y '
                 . 'prolijo, y se usa sobre todo en huerta y jardín.',
        ],
        [
            'q' => '¿Qué altura de tejido necesito?',
            'a' => 'Depende de qué vas a cercar: un perímetro con hacienda necesita más altura que '
                 . 'un gallinero o una huerta. Contanos el uso y te sugerimos la altura al cotizar.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar tejido de alambre', 'whatsappText' => ''],
    'related'   => ['alambre', 'bebederos', 'sal-mineral'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [
        [
            'path'  => '/herramientas/calculadora-de-alambrado/',
            'label' => 'Calculadora de alambrado',
            'text'  => 'Estimá metros y rollos para tu cerco antes de pedir la cotización.',
        ],
    ],
];
