<?php
/**
 * Segment page: envío a San Lorenzo (Departamento Central, Gran Asunción).
 * Mezcla de mascotas, gallinas de patio y huertas/quintas — más rural que
 * Asunción capital pero sin ser zona ganadera. Keyword: agroveterinaria san
 * lorenzo (260/mes).
 */

declare(strict_types=1);

return [
    'order'           => 80,
    'path'            => '/envios/san-lorenzo/',
    'navLabel'        => 'Envíos a San Lorenzo',
    'seoTitle'        => 'Agroveterinaria con envío a San Lorenzo',
    'metaDescription' => 'Agroveterinaria online con envío a San Lorenzo: alimento para mascotas, '
                       . 'balanceado para gallinas y fertilizantes. Cotizá gratis por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Envíos a San Lorenzo',
        'h1'      => 'Agroveterinaria online con envío a San Lorenzo',
        'lead'    => 'No tenemos local en San Lorenzo ni en el resto del Departamento Central: '
                   . 'somos una agroveterinaria online. Contanos qué necesitás para tu mascota, tus '
                   . 'gallinas o tu huerta y te cotizamos sin costo, con el envío coordinado hasta '
                   . 'tu dirección.',
    ],
    'leadSlug' => 'alimento-para-mascotas',
    'bundle'   => [
        'alimento-para-mascotas',
        'antiparasitarios-para-perros',
        'balanceados',
        'bebederos',
        'fertilizantes',
        'antiparasitarios-para-gatos',
    ],
    'traps' => [
        [
            'title' => 'Dejar a las gallinas de patio solo con balanceado vencido o mal guardado',
            'text'  => 'El balanceado guardado en lugares húmedos pierde calidad rápido; conviene '
                     . 'pedir la cantidad que se va a consumir en poco tiempo.',
        ],
        [
            'title' => 'No renovar el agua del bebedero en los días de calor',
            'text'  => 'Con calor las gallinas y las mascotas toman más agua; un bebedero chico o '
                     . 'sucio hace que tomen menos de lo que necesitan.',
        ],
        [
            'title' => 'Saltear la desparasitación de perros y gatos que salen al patio',
            'text'  => 'En zonas con quintas y patios, las mascotas que salen tienen más contacto con '
                     . 'otros animales; mantener el antiparasitario al día es más barato que tratar '
                     . 'un problema después.',
        ],
        [
            'title' => 'Fertilizar la huerta sin saber qué se sembró antes',
            'text'  => 'Cada cultivo de la quinta pide algo distinto; contanos qué tenés plantado '
                     . 'para recomendarte el fertilizante adecuado.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Mascotas, gallinas de patio y huertas en San Lorenzo',
            'body' => [
                'San Lorenzo combina zonas bien urbanas con quintas y patios donde todavía se crían '
                    . 'gallinas y se mantiene una huerta chica. Por eso lo que más se pide es '
                    . 'alimento y antiparasitarios para perros y gatos, balanceado y bebederos para '
                    . 'las gallinas, y fertilizantes para la huerta o el jardín.',
                'No tenemos local en San Lorenzo: recibimos el pedido por WhatsApp, te cotizamos con '
                    . 'el costo de envío hasta tu dirección y coordinamos la entrega.',
            ],
            'items' => [],
        ],
        [
            'h2'   => 'También llegamos a zonas cercanas del Central',
            'body' => [
                'Si estás en localidades cercanas como Fernando de la Mora, Luque, Capiatá o Ñemby, '
                    . 'contanos igual: el envío se cotiza según tu dirección dentro del '
                    . 'Departamento Central.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Qué productos necesitás (mascotas, gallinas o huerta)',
        'Especie y cantidad de animales, si aplica',
        'Tu dirección o barrio dentro de San Lorenzo',
        'Si tenés urgencia o podés esperar el envío programado',
    ],
    'faq' => [
        [
            'q' => '¿Tienen local en San Lorenzo?',
            'a' => 'No. Somos una agroveterinaria online, sin local ni punto de retiro en San '
                 . 'Lorenzo. Cotizamos por WhatsApp y coordinamos el envío hasta tu dirección.',
        ],
        [
            'q' => '¿Tienen balanceado para gallinas de patio?',
            'a' => 'Sí, trabajamos balanceado y bebederos para gallinas de patio. Contanos cuántas '
                 . 'tenés y te armamos la cotización con el envío incluido.',
        ],
        [
            'q' => '¿Cuánto cuesta el alimento para perros o gatos?',
            'a' => 'Depende de la marca, la línea y el tamaño de la bolsa. Mandanos qué mascota '
                 . 'tenés y te respondemos con precio y costo de envío, sin compromiso.',
        ],
        [
            'q' => '¿Envían también a otras ciudades del Central cerca de San Lorenzo?',
            'a' => 'Sí, enviamos a localidades cercanas como Fernando de la Mora, Luque, Capiatá y '
                 . 'Ñemby. El costo se cotiza según la dirección exacta.',
        ],
        [
            'q' => '¿Cuánto tarda en llegar el pedido?',
            'a' => 'El plazo depende de la zona y del transporte disponible; te lo confirmamos junto '
                 . 'con el precio cuando te cotizamos por WhatsApp.',
        ],
    ],
];
