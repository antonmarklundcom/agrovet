<?php
/**
 * Vet-coordination page for large-animal / rural production work. We do not
 * have our own field vets: we take the situation + zone by WhatsApp and
 * answer with the rural-vet options available there. Keywords: veterinario
 * para grandes animales / veterinario rural, veterinario grandes animales,
 * asesoramiento ganadero, sanidad animal (50), calendario sanitario,
 * revisación de toros, tacto de preñez, inseminación artificial, castración.
 * Vacunación aftosa: only in general terms — official SENACSA campaigns via
 * comisiones de salud animal, we do not run or claim them.
 */

declare(strict_types=1);

return [
    'order'           => 30,
    'path'            => '/veterinaria/grandes-animales/',
    'title'           => 'Veterinario para grandes animales',
    'navLabel'        => 'Grandes animales',
    'cluster'         => 'veterinaria',
    'parent'          => 'veterinaria',
    'seoTitle'        => 'Veterinario rural y grandes animales',
    'metaDescription' => 'Contanos qué necesita tu establecimiento y la zona: te respondemos por '
                       . 'WhatsApp con opciones de veterinario rural para grandes animales, sin costo.',
    'hero' => [
        'eyebrow' => 'Atención veterinaria',
        'h1'      => 'Veterinario rural para grandes animales',
        'h2'      => 'Sanidad de rodeo, tacto de preñez, revisación de toros y asesoramiento '
                    . 'ganadero en tu zona.',
        'lead'    => 'Un rodeo sin calendario sanitario o un toro sin revisar antes del servicio '
                   . 'salen caros después. Contanos qué necesita tu establecimiento y en qué zona '
                   . 'estás, y te respondemos por WhatsApp con las opciones de veterinario rural '
                   . 'disponibles cerca tuyo.',
    ],
    'includes' => [
        'Recepción de tu consulta por WhatsApp, con el establecimiento y la zona',
        'Opciones de veterinario para grandes animales disponibles en tu zona',
        'Asesoramiento ganadero para armar un calendario sanitario',
        'Coordinación de servicios como tacto de preñez, revisación de toros, '
            . 'inseminación artificial o castración según lo que ofrezca cada opción',
    ],
    'excludes' => [
        'Si es una urgencia grave (parto complicado, animal caído, herida severa), acudí a la '
            . 'atención veterinaria más cercana de tu zona sin esperar',
        'No tenemos veterinarios de campo propios: coordinamos con las opciones que trabajan '
            . 'en cada zona',
        'Las campañas de vacunación antiaftosa son organizadas por SENACSA a través de las '
            . 'comisiones de salud animal; no las organizamos ni las reemplazamos',
    ],
    'weNeed' => [
        'Qué necesitás: sanidad de rutina, un servicio puntual o asesoramiento',
        'Tipo y cantidad aproximada de animales',
        'La zona o localidad del establecimiento',
        'Un número de WhatsApp para coordinar la visita',
    ],
    'sections' => [
        [
            'h2'   => 'Sanidad animal: lo que conviene tener organizado',
            'body' => [
                'La sanidad animal de un rodeo se sostiene con un calendario sanitario ordenado: '
                    . 'qué se hace en cada época del año, desde el control parasitario hasta la '
                    . 'revisación de toros antes del servicio. Las campañas de vacunación antiaftosa '
                    . 'se organizan a través de SENACSA y las comisiones de salud animal de cada zona.',
                'A eso se suma el trabajo puntual: un tacto de preñez para saber qué vacas repiten, '
                    . 'una inseminación artificial programada, o una castración de terneros en la '
                    . 'época que corresponde. Contanos qué necesita tu establecimiento y buscamos las '
                    . 'opciones de veterinario rural que atienden esa zona.',
            ],
            'items' => [
                ['title' => 'Calendario sanitario', 'text' => 'Ordenar el año evita improvisar cuando ya hay un problema.'],
                ['title' => 'Revisación de toros', 'text' => 'Antes del servicio, conviene confirmar que el toro está en condiciones.'],
                ['title' => 'Tacto de preñez', 'text' => 'Define qué animales siguen en el rodeo y cuáles no.'],
            ],
        ],
        [
            'h2'   => 'Cómo te conectamos con un veterinario rural',
            'body' => [
                'No tenemos veterinarios de campo propios: nos escribís por WhatsApp contando qué '
                    . 'necesita el establecimiento, cuántos animales y en qué zona estás, y buscamos '
                    . 'las opciones de veterinario para grandes animales que trabajan ahí, ya sea '
                    . 'para asesoramiento ganadero o para un servicio puntual.',
                'Te devolvemos esas opciones para que coordines vos la visita. Si se trata de una '
                    . 'urgencia con un animal, no esperes la respuesta: buscá la atención veterinaria '
                    . 'más cercana de inmediato.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Un solo mensaje', 'text' => 'Contás tu establecimiento y tu zona una vez, por WhatsApp.'],
        ['title' => 'Opciones de tu zona', 'text' => 'Te pasamos qué veterinario rural atiende cerca tuyo.'],
        ['title' => 'Sin costo', 'text' => 'Contarnos qué necesitás y orientarte no tiene cargo.'],
    ],
    'faq' => [
        [
            'q' => '¿Hacen la vacunación antiaftosa?',
            'a' => 'No: esas campañas las organiza SENACSA a través de las comisiones de salud '
                 . 'animal de cada zona. Te podemos orientar sobre el resto del calendario '
                 . 'sanitario del establecimiento.',
        ],
        [
            'q' => '¿Coordinan tacto de preñez o inseminación artificial?',
            'a' => 'Contanos qué necesitás y la zona del establecimiento, y te respondemos con las '
                 . 'opciones de veterinario rural que ofrecen ese servicio ahí.',
        ],
        [
            'q' => '¿Tienen veterinarios propios para el campo?',
            'a' => 'No, coordinamos con veterinarios rurales que atienden distintas zonas; no son '
                 . 'veterinarios propios de agroveterinaria.',
        ],
        [
            'q' => '¿Dan asesoramiento ganadero sin visita?',
            'a' => 'Podemos orientarte por WhatsApp sobre sanidad animal en general; para revisar '
                 . 'animales o definir un calendario sanitario puntual, coordinamos la visita con '
                 . 'la opción disponible en tu zona.',
        ],
        [
            'q' => '¿Qué hago si tengo una urgencia con un animal ahora?',
            'a' => 'Si es grave, no esperes: buscá la atención veterinaria más cercana a tu '
                 . 'establecimiento de inmediato. Escribinos igual si necesitás orientación.',
        ],
    ],
    'cta'       => ['label' => 'Buscar veterinario rural', 'whatsappText' => ''],
    'related'   => ['veterinaria', 'antiparasitarios-para-ganado', 'sal-mineral'],
    'guides'    => ['sal-mineral-para-ganado'],
    'articles'  => [],
    'toolLinks' => [],
];
