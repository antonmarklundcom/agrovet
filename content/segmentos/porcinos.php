<?php
/**
 * Segment page: porcinos. Copies the register and structure of
 * content/services/curabichera.php, at ~70% of its length, per
 * templates/segment.php and docs/build/brief.md Round 2.
 */

declare(strict_types=1);

return [
    'order'           => 40,
    'path'            => '/porcinos/',
    'navLabel'        => 'Porcinos',
    'seoTitle'        => 'Productos para cerdos: envío al país',
    'metaDescription' => 'Balanceados, antiparasitarios, bebederos y antibióticos veterinarios para '
                       . 'cerdos. Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Producción porcina',
        'h1'      => 'Productos para cerdos',
        'lead'    => 'Balanceado por etapa, antiparasitarios, bebederos y antibióticos con receta: '
                   . 'contanos la categoría y el número de cabezas y te cotizamos sin costo, con el '
                   . 'envío hasta tu granja.',
    ],
    'leadSlug' => 'balanceados',
    'bundle'   => [
        'balanceados', 'antiparasitarios-para-ganado', 'bebederos',
        'antibioticos-veterinarios', 'veterinario-rural',
    ],
    'traps' => [
        [
            'title' => 'No ajustar el balanceado por categoría',
            'text'  => 'Dar el mismo balanceado a lechones, recría y engorde atrasa la ganancia de '
                     . 'peso; cada categoría tiene una formulación distinta y conviene respetarla.',
        ],
        [
            'title' => 'Desparasitar sin criterio fijo',
            'text'  => 'Repetir siempre el mismo antiparasitario en el mismo momento del ciclo termina '
                     . 'generando resistencia; el esquema conviene definirlo con tu veterinario.',
        ],
        [
            'title' => 'Descuidar el agua de los bebederos',
            'text'  => 'Un bebedero con poco caudal o sucio baja el consumo de agua y de balanceado, '
                     . 'y eso se nota primero en el peso de faena que en cualquier otro indicador.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Qué necesita cada categoría del plantel',
            'body' => [
                'Lechones, recría, engorde y reproductores tienen requerimientos distintos de '
                    . 'balanceado, y el plan de desparasitación cambia según la categoría y el estado '
                    . 'sanitario del plantel; tu veterinario es quien define el esquema.',
                'Contanos la categoría, el número de cabezas y si necesitás bebederos u otro insumo '
                    . 'para la granja y te armamos la cotización completa con un solo envío.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Categoría del plantel (lechones, recría, engorde, reproductores)',
        'Número de cabezas',
        'Si tenés indicación veterinaria para antiparasitario o antibiótico',
        'La localidad a la que hay que enviar el pedido',
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el balanceado para cerdos?',
            'a' => 'Depende de la categoría, la marca y la cantidad de bolsas. Mandanos el número de '
                 . 'cabezas por WhatsApp y te respondemos con precio y envío, sin compromiso.',
        ],
        [
            'q' => '¿Tienen balanceado para cada etapa de crecimiento?',
            'a' => 'Sí, cotizamos balanceado para lechones, recría, engorde y reproductores según la '
                 . 'categoría que nos indiques.',
        ],
        [
            'q' => '¿Puedo pedir bebederos junto con el balanceado?',
            'a' => 'Sí, podés combinar balanceados, bebederos y otros insumos de granja en un mismo '
                 . 'mensaje y te armamos la cotización completa.',
        ],
        [
            'q' => '¿Venden antibióticos para cerdos?',
            'a' => 'Sí, bajo receta veterinaria. Mandanos la indicación del profesional y te cotizamos '
                 . 'el producto correspondiente.',
        ],
        [
            'q' => '¿Hacen envíos a granjas del interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
];
