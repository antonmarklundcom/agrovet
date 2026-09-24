<?php
/**
 * Segment page: envío a Asunción (ciudad). Público de mascotas y quintas
 * urbanas, no productores rurales. Keyword: agroveterinaria asuncion (390/mes).
 */

declare(strict_types=1);

return [
    'order'           => 70,
    'path'            => '/envios/asuncion/',
    'navLabel'        => 'Envíos a Asunción',
    'seoTitle'        => 'Agroveterinaria con envío a Asunción',
    'metaDescription' => 'Agroveterinaria online con envío a Asunción: alimento y antiparasitarios '
                       . 'para perros y gatos, fertilizantes para la quinta. Cotizá gratis por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Envíos a Asunción',
        'h1'      => 'Agroveterinaria online con envío a Asunción',
        'lead'    => 'No tenemos local en Asunción: somos una agroveterinaria online que cotiza por '
                   . 'WhatsApp y coordina el envío a domicilio. Contanos qué necesitás para tu '
                   . 'mascota o tu quinta y te pasamos precio y costo de envío sin compromiso.',
    ],
    'leadSlug' => 'alimento-para-mascotas',
    'bundle'   => [
        'alimento-para-mascotas',
        'antiparasitarios-para-perros',
        'antiparasitarios-para-gatos',
        'fertilizantes',
        'tejido-de-alambre',
        'veterinaria',
    ],
    'traps' => [
        [
            'title' => 'Cambiar de alimento de golpe',
            'text'  => 'Un cambio brusco de marca o línea de alimento para perros o gatos suele dar '
                     . 'diarrea; conviene mezclar el nuevo con el que ya comía durante unos días.',
        ],
        [
            'title' => 'Desparasitar sin fijarse el peso de la mascota',
            'text'  => 'La presentación y la cantidad de antiparasitario dependen del tamaño del '
                     . 'animal; contanos el peso aproximado para que la cotización venga bien.',
        ],
        [
            'title' => 'No calcular el costo del envío a domicilio de antemano',
            'text'  => 'En Asunción coordinamos la entrega en tu dirección, pero el costo se suma al '
                     . 'del pedido; pedilo en la cotización para no llevarte sorpresas.',
        ],
        [
            'title' => 'Regar de más una huerta o quinta chica pensando que así crece mejor',
            'text'  => 'El exceso de agua y de fertilizante daña la raíz igual que la falta; contanos '
                     . 'qué plantas tenés para recomendarte el producto adecuado.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Mascotas y huertas urbanas en Asunción',
            'body' => [
                'En Asunción la consulta más frecuente es por mascotas: alimento y antiparasitarios '
                    . 'para perros y gatos que viven en casas y departamentos. También recibimos '
                    . 'pedidos de quintas y huertas de patio, con fertilizantes, humus y tejido de '
                    . 'alambre para cercar un espacio verde chico.',
                'Como no tenemos local en la ciudad, todo el pedido se arma por WhatsApp: nos '
                    . 'contás qué necesitás, te cotizamos con el costo de envío a tu dirección y '
                    . 'coordinamos la entrega.',
            ],
            'items' => [],
        ],
        [
            'h2'   => 'Si además necesitás un veterinario',
            'body' => [
                'Junto con el pedido de productos podés consultarnos por veterinaria: te orientamos '
                    . 'según lo que nos cuentes y, si es una emergencia grave, lo mejor es acudir a '
                    . 'la clínica veterinaria más cercana en lugar de esperar el envío.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Qué productos necesitás (alimento, antiparasitario, fertilizante)',
        'Especie, tamaño o peso aproximado de la mascota, si aplica',
        'Tu dirección o zona dentro de Asunción',
        'Si tenés una marca o presentación preferida',
    ],
    'faq' => [
        [
            'q' => '¿Tienen local en Asunción?',
            'a' => 'No. Somos una agroveterinaria online, sin local ni punto de retiro en Asunción. '
                 . 'Cotizamos por WhatsApp y coordinamos el envío a tu domicilio.',
        ],
        [
            'q' => '¿Hacen envío a domicilio dentro de Asunción?',
            'a' => 'Sí, coordinamos el envío a tu dirección dentro de la ciudad. El costo depende de '
                 . 'la zona y del pedido, y te lo pasamos junto con el precio en la cotización.',
        ],
        [
            'q' => '¿Cuánto cuesta el alimento para perros o gatos?',
            'a' => 'Depende de la marca, la línea y el tamaño de la bolsa. Mandanos qué mascota '
                 . 'tenés y qué alimento buscás, y te respondemos con precio y envío sin costo.',
        ],
        [
            'q' => '¿Tienen productos para huertas o quintas chicas?',
            'a' => 'Sí, trabajamos fertilizantes, humus y tejido de alambre para cercar. Contanos el '
                 . 'espacio y qué plantas tenés para orientarte mejor.',
        ],
        [
            'q' => '¿Qué hago si mi mascota tiene una urgencia?',
            'a' => 'Si es una emergencia grave, acudí a la clínica veterinaria más cercana. Para todo '
                 . 'lo demás, contanos por WhatsApp y te orientamos junto con la cotización.',
        ],
    ],
];
