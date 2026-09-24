<?php
/**
 * Product page: vitaminas para animales. Keywords: vitaminas para vacas
 * flacas, vitamina ADE / AD3E, complejo B, calcio para vacas, hierro para
 * lechones, suplementos para perros.
 */

declare(strict_types=1);

return [
    'order'           => 38,
    'path'            => '/productos/vitaminas-para-animales/',
    'title'           => 'Vitaminas para animales',
    'navLabel'        => 'Vitaminas',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Vitaminas para animales: envío al país',
    'metaDescription' => 'Vitamina ADE, complejo B, calcio y hierro para vacas, lechones, perros y '
                       . 'gatos. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Vitaminas para animales',
        'h2'      => 'ADE, complejo B, calcio y hierro, según la etiqueta y la indicación de tu veterinario.',
        'lead'    => 'Un animal flaco, un ternero que no despega o una lechonada débil piden más '
                   . 'que buen pasto. Contanos la especie, la situación y qué te indicó el '
                   . 'veterinario, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Vitamina ADE / AD3E inyectable para vacas y otras categorías',
        'Complejo B para recuperación y apoyo metabólico',
        'Calcio inyectable, de uso frecuente en vacas recién paridas',
        'Hierro inyectable para lechones',
        'Suplementos vitamínicos para perros y gatos',
    ],
    'excludes' => [
        'Aplicá siempre según la etiqueta y la indicación de tu veterinario',
        'El calcio en vacas recién paridas se asocia al manejo de la hipocalcemia posparto; '
            . 'esa situación la evalúa el veterinario, no es autotratamiento',
        'Ante un animal muy decaído, que no se levanta o convulsiona, es una urgencia: llamá a tu '
            . 'veterinario de inmediato',
    ],
    'weNeed' => [
        'Para qué especie es (bovino, porcino, perro, gato)',
        'La situación que te preocupa (vacas flacas, posparto, lechones débiles, otra)',
        'Qué te indicó el veterinario, si ya consultaste',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Cuándo un suplemento vitamínico hace diferencia',
            'body' => [
                'En vacas que llegan flacas al final del invierno o de una seca, un aporte de '
                    . 'vitaminas y minerales ayuda a sostener la recuperación mientras mejora la '
                    . 'oferta de pasto. Después del parto, muchas vacas necesitan un apoyo puntual: '
                    . 'ahí es donde suele aparecer el calcio inyectable, siempre bajo indicación '
                    . 'veterinaria porque la hipocalcemia posparto es una urgencia real.',
                'En los lechones, el hierro inyectable en las primeras semanas es una práctica '
                    . 'habitual porque nacen con reservas bajas y la leche materna no alcanza a '
                    . 'cubrirlas. En perros y gatos, los suplementos vitamínicos se usan en '
                    . 'convalecencia, crecimiento o cuando el veterinario detecta una carencia '
                    . 'puntual.',
            ],
            'items' => [
                ['title' => 'Vacas flacas', 'text' => 'Apoyo vitamínico y mineral en época de escasez de pasto.'],
                ['title' => 'Vacas posparto', 'text' => 'Calcio bajo indicación veterinaria ante riesgo de hipocalcemia.'],
                ['title' => 'Lechones', 'text' => 'Hierro inyectable en las primeras semanas de vida.'],
            ],
        ],
        [
            'h2'   => 'ADE, complejo B y calcio: para qué sirve cada uno',
            'body' => [
                'La vitamina ADE (o AD3E) combina vitamina A, D y E, y se usa en general como apoyo '
                    . 'metabólico y reproductivo en distintas categorías de ganado. El complejo B se '
                    . 'asocia a la recuperación del apetito y el metabolismo en animales debilitados '
                    . 'o en tratamiento.',
                'El calcio inyectable actúa rápido y por eso se reserva para situaciones puntuales, '
                    . 'como el posparto en vacas, siempre evaluado por un veterinario. En todos los '
                    . 'casos, la dosis y la frecuencia las marca la etiqueta del producto o la '
                    . 'indicación profesional, no una regla general.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Vitaminas, sal mineral y vacunas en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan las vitaminas para animales?',
            'a' => 'Depende del producto, el laboratorio y la presentación. Mandanos la especie y '
                 . 'la situación por WhatsApp y te respondemos con el precio y el costo de envío '
                 . 'hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué vitamina sirve para vacas flacas?',
            'a' => 'Se suele usar vitamina ADE o complejo B como apoyo, siempre acompañando una '
                 . 'mejora en la alimentación. Contanos la situación del rodeo y te orientamos con '
                 . 'lo que tenemos para cotizar.',
        ],
        [
            'q' => '¿El calcio para vacas posparto lo puedo aplicar yo?',
            'a' => 'La hipocalcemia posparto es una urgencia que evalúa un veterinario, porque la '
                 . 'dosis y la vía de aplicación importan. Consultalo antes de aplicar calcio a una '
                 . 'vaca recién parida.',
        ],
        [
            'q' => '¿Tienen hierro para lechones?',
            'a' => 'Sí, hierro inyectable para lechones en las primeras semanas de vida. Seguí la '
                 . 'etiqueta del producto para la aplicación.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar vitaminas', 'whatsappText' => ''],
    'related'   => ['sal-mineral', 'vacunas-ganado', 'alimento-para-mascotas'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [],
];
