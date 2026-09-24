<?php
/**
 * Segment page: equinos. Copies the register and structure of
 * content/services/curabichera.php, at ~70% of its length, per
 * templates/segment.php and docs/build/brief.md Round 2.
 */

declare(strict_types=1);

return [
    'order'           => 50,
    'path'            => '/equinos/',
    'navLabel'        => 'Equinos',
    'seoTitle'        => 'Productos para caballos: envío al país',
    'metaDescription' => 'Antiparasitarios, curabichera, balanceados y sal mineral para caballos. '
                       . 'Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Caballos',
        'h1'      => 'Productos para caballos',
        'lead'    => 'Antiparasitarios, curabichera para heridas, balanceados y sal mineral: contanos '
                   . 'qué necesita tu caballo y te cotizamos sin costo, con el envío hasta tu '
                   . 'localidad.',
    ],
    'leadSlug' => 'antiparasitarios-para-ganado',
    'bundle'   => [
        'antiparasitarios-para-ganado', 'garrapaticidas', 'curabichera', 'vacunas-ganado',
        'balanceados', 'veterinario-rural',
    ],
    'traps' => [
        [
            'title' => 'Desparasitar sin variar el principio activo',
            'text'  => 'Usar siempre el mismo antiparasitario en el mismo caballo genera resistencia '
                     . 'con el tiempo; el esquema y la rotación los define tu veterinario según el '
                     . 'estado del animal.',
        ],
        [
            'title' => 'Dejar una herida de rienda o de alambre sin curar',
            'text'  => 'Una matadura o un corte de alambre sin atender puede terminar en bichera en '
                     . 'pocos días, sobre todo en verano; conviene tener curabichera a mano antes de '
                     . 'que haga falta.',
        ],
        [
            'title' => 'No cubrir minerales en trabajo o entrenamiento exigido',
            'text'  => 'Un caballo de trabajo pesado sin sal mineral pierde condición aunque el pasto '
                     . 'parezca suficiente; el desgaste se nota primero en el rendimiento que en el '
                     . 'aspecto del animal.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Qué tener a mano según el uso del caballo',
            'body' => [
                'Un caballo de trabajo diario, uno de cría o uno de exhibición tienen necesidades '
                    . 'distintas de balanceado y sal mineral, y todos comparten el mismo riesgo de '
                    . 'heridas de rienda, matadura o alambre que puede terminar en bichera si no se '
                    . 'atiende a tiempo.',
                'Contanos la cantidad de animales y el uso que les das y te armamos la cotización con '
                    . 'antiparasitarios, curabichera, balanceados y sal mineral en un solo envío.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Cantidad de caballos y el uso que les das (trabajo, cría, exhibición)',
        'Qué falta hoy: antiparasitario, curabichera, balanceado o sal mineral',
        'Si tenés indicación de tu veterinario para algún producto puntual',
        'La localidad a la que hay que enviar el pedido',
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta desparasitar un caballo?',
            'a' => 'Depende del producto, la presentación y la cantidad de animales. Mandanos el '
                 . 'detalle por WhatsApp y te respondemos con precio y envío, sin compromiso.',
        ],
        [
            'q' => '¿Sirve la curabichera para caballos?',
            'a' => 'Sí, se usa en heridas de rienda, matadura o alambre siguiendo la etiqueta del '
                 . 'producto; si la herida es profunda o infectada, consultá a tu veterinario.',
        ],
        [
            'q' => '¿Puedo pedir varios productos en una sola cotización?',
            'a' => 'Sí, podés combinar antiparasitarios, curabichera, balanceados y sal mineral en un '
                 . 'mismo mensaje y te armamos la cotización completa con un solo envío.',
        ],
        [
            'q' => '¿Cada cuánto hay que desparasitar a un caballo?',
            'a' => 'El esquema depende del estado del animal y del historial de desparasitación; '
                 . 'consultá a tu veterinario para definirlo y evitar resistencia.',
        ],
        [
            'q' => '¿Hacen envíos a establecimientos del interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos junto con el precio.',
        ],
    ],
];
