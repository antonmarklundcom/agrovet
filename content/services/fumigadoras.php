<?php
declare(strict_types=1);

return [
    'order'           => 80,
    'path'            => '/productos/mochilas-fumigadoras/',
    'title'           => 'Mochilas fumigadoras',
    'navLabel'        => 'Mochilas fumigadoras',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Mochila fumigadora: precio y envío',
    'metaDescription' => 'Mochilas fumigadoras manuales y a batería, en distintas capacidades, para aplicar '
                       . 'herbicidas e insecticidas. Cotizá por WhatsApp, envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Equipos para el campo',
        'h1'      => 'Mochila fumigadora manual y a batería',
        'h2'      => 'Distintas capacidades y boquillas, para aplicar herbicidas, insecticidas y fungicidas.',
        'lead'    => 'Una mochila fumigadora en mal estado gotea, pierde presión o no calibra bien, y eso '
                   . 'significa desperdiciar producto o aplicar de más. Mandanos si la necesitás manual o a '
                   . 'batería, y para qué la vas a usar, y te cotizamos la mochila con el envío hasta tu '
                   . 'localidad, sin costo y sin compromiso.',
    ],
    'includes' => [
        'Mochilas fumigadoras manuales, de accionamiento a palanca',
        'Mochilas fumigadoras a batería, para reducir el esfuerzo en aplicaciones largas',
        'Distintas capacidades (litros), según la superficie que trabajás',
        'Boquillas de distintos tipos para ajustar el tipo de aplicación',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'No uses la misma mochila para herbicidas e insecticidas o fungicidas en cultivos sensibles: lavala bien entre productos o tené un equipo dedicado',
        'Calibrá el equipo y seguí la etiqueta del producto que vas a aplicar',
        'Usá siempre equipo de protección personal (EPP) al fumigar',
    ],
    'weNeed' => [
        'Manual o a batería',
        'La capacidad (litros) que necesitás',
        'Para qué producto la vas a usar principalmente',
        'La localidad a la que hay que enviarla',
    ],
    'sections' => [
        [
            'h2'   => 'Manual o a batería: cuál conviene',
            'body' => [
                'La mochila manual funciona a palanca y no depende de carga, por lo que es una opción simple '
                    . 'y económica para superficies chicas o aplicaciones ocasionales. La mochila a batería '
                    . 'mantiene una presión más pareja y reduce el esfuerzo cuando la aplicación es larga o '
                    . 'repetida.',
                'La capacidad en litros se elige según la superficie que trabajás habitualmente: una '
                    . 'capacidad mayor significa menos recargas, pero también más peso para cargar. Contanos '
                    . 'para qué la vas a usar y te ayudamos a elegir la que corresponde.',
            ],
            'items' => [
                ['title' => 'Aplicaciones chicas u ocasionales', 'text' => 'Una mochila manual de menor capacidad suele alcanzar.'],
                ['title' => 'Trabajo diario o superficies grandes', 'text' => 'Una mochila a batería con mayor capacidad rinde más por jornada.'],
                ['title' => 'Distintos productos', 'text' => 'Si alternás herbicida e insecticida, conviene tener un equipo dedicado a cada uno.'],
            ],
        ],
        [
            'h2'   => 'Boquillas, calibración y cuidado del equipo',
            'body' => [
                'Las boquillas determinan cómo sale el producto: hay opciones para chorro, cono o abanico, y '
                    . 'conviene elegir la que corresponde al tipo de aplicación. La calibración depende del '
                    . 'producto y de lo que indique la etiqueta; consultá esa información antes de aplicar.',
                'Después de fumigar herbicidas, lavá bien la mochila antes de usarla con insecticidas o '
                    . 'fungicidas, porque un resto de herbicida puede dañar un cultivo sensible. Guardá el '
                    . 'equipo limpio y protegido, y revisá juntas y mangueras antes de cada temporada.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Mochila fumigadora y los productos que vas a aplicar en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta una mochila fumigadora?',
            'a' => 'El precio depende del modelo, la capacidad y la marca. Mandanos por WhatsApp qué '
                 . 'necesitás y te respondemos con el precio y el costo de envío hasta tu localidad, sin '
                 . 'compromiso.',
        ],
        [
            'q' => '¿Mochila manual o a batería, cuál me conviene?',
            'a' => 'La manual es más simple y económica para uso ocasional; la de batería rinde mejor en '
                 . 'aplicaciones largas o repetidas. Contanos cómo la vas a usar y te orientamos.',
        ],
        [
            'q' => '¿Qué capacidad (litros) necesito?',
            'a' => 'Depende de la superficie que trabajás habitualmente. Contanos aproximadamente cuánto '
                 . 'fumigás por vez y te recomendamos una capacidad.',
        ],
        [
            'q' => '¿Puedo usar la misma mochila para herbicida e insecticida?',
            'a' => 'No es lo ideal: un resto de herbicida puede dañar un cultivo sensible al aplicar '
                 . 'insecticida o fungicida. Lavala bien entre productos o tené un equipo dedicado a cada uno.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar mochila fumigadora', 'whatsappText' => ''],
    'related'   => ['insecticidas', 'herbicidas', 'glifosato'],
    'guides'    => ['cipermetrina'],
    'articles'  => [],
    'toolLinks' => [],
];
