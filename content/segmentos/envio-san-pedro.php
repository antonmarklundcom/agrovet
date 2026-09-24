<?php
/**
 * Segment page: envío a San Pedro (departamento). Somos una agroveterinaria
 * online, sin local en San Pedro — el énfasis está en dejarlo claro desde el
 * h1 y en cada mención de "envío". Keyword: agroveterinaria san pedro (1.000/mes).
 */

declare(strict_types=1);

return [
    'order'           => 60,
    'path'            => '/envios/san-pedro/',
    'navLabel'        => 'Envíos a San Pedro',
    'seoTitle'        => 'Agroveterinaria con envío a San Pedro',
    'metaDescription' => 'Agroveterinaria online que envía a todo el departamento de San Pedro: sal '
                       . 'mineral, antiparasitarios y curabichera. Cotizá gratis por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Envíos a San Pedro',
        'h1'      => 'Agroveterinaria online con envío a San Pedro',
        'lead'    => 'No tenemos local en San Pedro del Ycuamandiyú ni en ningún otro punto del '
                   . 'departamento: somos una agroveterinaria online. Mandanos por WhatsApp qué '
                   . 'necesitás para tu ganado o tu chacra y te cotizamos sin costo, con el envío '
                   . 'hasta tu localidad.',
    ],
    'leadSlug' => 'sal-mineral',
    'bundle'   => [
        'sal-mineral',
        'antiparasitarios-para-ganado',
        'curabichera',
        'alambre',
        'semillas',
        'herbicidas',
    ],
    'traps' => [
        [
            'title' => 'Comprar sal mineral sin pensar en la época',
            'text'  => 'En la seca el ganado la consume distinto que en verde; pedir siempre la '
                     . 'misma cantidad hace que sobre o falte en el comedero.',
        ],
        [
            'title' => 'Dejar la curabichera para cuando ya hay bichera',
            'text'  => 'En un campo de cría, el ombligo del ternero y las heridas de castración son '
                     . 'puntos de riesgo todo el año; conviene tenerla en el galpón antes de que '
                     . 'haga falta.',
        ],
        [
            'title' => 'No calcular bien el alambre antes de pedir',
            'text'  => 'Pedir de menos implica un segundo envío; pedir de más es plata inmovilizada. '
                     . 'Contanos los metros del potrero o alambrado antes de cotizar.',
        ],
        [
            'title' => 'Mezclar productos de agricultura familiar sin consultar',
            'text'  => 'Un herbicida pensado para un cultivo puede no ser el indicado para otro '
                     . '(sésamo, chía, mandioca); decinos qué vas a sembrar o tratar.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Ganadería de cría y agricultura familiar en San Pedro',
            'body' => [
                'San Pedro es en gran parte un departamento de ganadería de cría, con muchos '
                    . 'pequeños y medianos productores, y una agricultura familiar fuerte en '
                    . 'sésamo, chía y mandioca. Eso marca lo que más se cotiza: sal mineral y '
                    . 'antiparasitarios para el rodeo, curabichera para las heridas de manga y '
                    . 'castración, y semillas o herbicidas para la chacra.',
                'Como somos una agroveterinaria online, no vendemos por mostrador ni tenemos punto '
                    . 'de retiro en el departamento: recibimos tu pedido por WhatsApp, te '
                    . 'cotizamos con el costo de envío hasta tu localidad y coordinamos la entrega.',
            ],
            'items' => [],
        ],
        [
            'h2'   => 'A qué localidades llegamos',
            'body' => [
                'Enviamos a San Pedro del Ycuamandiyú, San Estanislao (Santaní), Choré, Lima, '
                    . 'Guayaibí, Nueva Germania, Tacuatí, Capiibary y Santa Rosa del Aguaray, entre '
                    . 'otras localidades del departamento. Si tu zona no está en la lista, '
                    . 'preguntanos igual: el envío se cotiza según dirección.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Qué productos necesitás y en qué cantidad',
        'Si es para ganado, chacra o ambos',
        'Tu localidad dentro de San Pedro',
        'Si tenés fecha límite (por ejemplo antes de una siembra o una manga)',
    ],
    'faq' => [
        [
            'q' => '¿Tienen local en San Pedro?',
            'a' => 'No. Somos una agroveterinaria online: no tenemos local, oficina ni punto de '
                 . 'retiro en San Pedro ni en ningún otro departamento. Cotizamos por WhatsApp y '
                 . 'coordinamos el envío hasta tu localidad.',
        ],
        [
            'q' => '¿Envían a todo el departamento de San Pedro?',
            'a' => 'Sí, enviamos a todo el departamento, incluidas localidades como San Pedro del '
                 . 'Ycuamandiyú, Santaní, Choré, Lima, Guayaibí, Nueva Germania, Tacuatí, Capiibary '
                 . 'y Santa Rosa del Aguaray. El costo depende de la localidad y te lo pasamos en '
                 . 'la cotización.',
        ],
        [
            'q' => '¿Cuánto cuesta el envío a San Pedro?',
            'a' => 'Depende de la localidad, el peso y el volumen del pedido. Mandanos tu lista por '
                 . 'WhatsApp y te respondemos con el precio de los productos y el costo de envío, '
                 . 'sin compromiso.',
        ],
        [
            'q' => '¿Tienen productos para agricultura familiar además de ganadería?',
            'a' => 'Sí, además de sal mineral y antiparasitarios para el rodeo trabajamos semillas y '
                 . 'herbicidas para chacras de sésamo, chía o mandioca. Contanos qué cultivo tenés '
                 . 'y te armamos la cotización.',
        ],
        [
            'q' => '¿Cuánto tarda en llegar el pedido?',
            'a' => 'El plazo depende de la localidad y del transporte disponible en ese momento; te '
                 . 'lo confirmamos junto con el precio cuando te cotizamos por WhatsApp.',
        ],
    ],
];
