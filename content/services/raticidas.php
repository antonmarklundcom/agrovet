<?php
declare(strict_types=1);

return [
    'order'           => 70,
    'path'            => '/productos/raticidas/',
    'title'           => 'Raticidas',
    'navLabel'        => 'Veneno para ratas',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Veneno para ratas: raticidas y cebos',
    'metaDescription' => 'Raticidas en cebos en bloque y pellet, y cebaderos para proteger galpones y depósitos '
                       . 'de granos. Cotizá por WhatsApp sin costo, envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Control de plagas',
        'h1'      => 'Veneno para ratas y raticidas para galpones y depósitos',
        'h2'      => 'Cebos en bloque y pellet, y cebaderos para proteger a niños, mascotas y animales de granja.',
        'lead'    => 'Las ratas contaminan el grano, rompen bolsas y dañan instalaciones, y se multiplican '
                   . 'rápido si no se actúa. Mandanos dónde tenés el problema y cuánta superficie hay que '
                   . 'cubrir, y te cotizamos el raticida y los cebaderos que necesitás, sin costo y sin '
                   . 'compromiso.',
    ],
    'includes' => [
        'Raticidas en cebos en bloque, resistentes a la humedad del galpón',
        'Raticidas en pellet para puntos de cebado dentro de silos y depósitos',
        'Cebaderos (portacebos) para que el cebo quede fuera del alcance de niños, mascotas y animales de granja',
        'Presentaciones por unidad o por caja para el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Mantené los cebos siempre dentro del cebadero, nunca sueltos ni al alcance de niños o animales',
        'Usá el producto según la etiqueta; no lo apliques cerca de alimentos ni bebederos',
        'Si una mascota o un animal llega a comer el cebo, llevalo de inmediato al veterinario',
    ],
    'weNeed' => [
        'Dónde vas a usar el raticida: galpón, depósito de granos, casa o corral',
        'Si ya tenés cebaderos o necesitás que te coticemos también',
        'Aproximadamente cuánta superficie hay que cubrir',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué las ratas son un problema serio en el campo',
            'body' => [
                'Una pareja de ratas se puede convertir en decenas de animales en pocos meses. En el galpón '
                    . 'rompen bolsas de balanceado y semilla, contaminan el grano con orina y heces, y dañan '
                    . 'cables e instalaciones. En los depósitos de granos las pérdidas se suman rápido si no '
                    . 'se corta el problema a tiempo.',
                'El riesgo no es solo económico: las ratas transmiten enfermedades a las personas y a los '
                    . 'animales de granja. Por eso conviene actuar apenas aparecen los primeros indicios '
                    . '(roeduras, excrementos, caminos en el polvo) y no esperar a que la población crezca.',
            ],
            'items' => [
                ['title' => 'Depósitos de granos', 'text' => 'El grano contaminado se pierde o baja de calidad; cortar el problema temprano evita pérdidas mayores.'],
                ['title' => 'Galpones y corrales', 'text' => 'Bolsas rotas y cables roídos son señal de que ya hay una población establecida.'],
                ['title' => 'Zonas con niños o mascotas', 'text' => 'El cebadero deja el cebo fuera de su alcance sin perder eficacia contra las ratas.'],
            ],
        ],
        [
            'h2'   => 'Bloque, pellet o cebadero: cómo se usan',
            'body' => [
                'El cebo en bloque resiste mejor la humedad y se fija dentro del cebadero, por lo que es el '
                    . 'más usado en galpones y depósitos. El pellet se distribuye en puntos de cebado y '
                    . 'conviene renovarlo con más frecuencia porque se humedece más fácil.',
                'El cebadero (portacebos) es lo que separa un tratamiento seguro de uno riesgoso: mantiene el '
                    . 'cebo fijo, protegido de la lluvia y fuera del alcance de niños, mascotas y aves de '
                    . 'corral. Seguí siempre las indicaciones de la etiqueta sobre dónde colocar los puntos '
                    . 'de cebado.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Raticida, cebaderos y otros productos de sanidad en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el raticida?',
            'a' => 'El precio depende de la presentación, la marca y la cantidad. Mandanos por WhatsApp qué '
                 . 'necesitás y te respondemos con el precio y el costo de envío hasta tu localidad, sin '
                 . 'compromiso.',
        ],
        [
            'q' => '¿Es peligroso para mis mascotas o animales?',
            'a' => 'El cebo debe ir siempre dentro de un cebadero, fuera de su alcance. Si un animal llegara '
                 . 'a comerlo, llevalo de inmediato al veterinario.',
        ],
        [
            'q' => '¿Cebo en bloque o en pellet, cuál me conviene?',
            'a' => 'El bloque resiste mejor la humedad y dura más en el cebadero; el pellet se usa en puntos '
                 . 'de cebado que se revisan y renuevan con más frecuencia. Contanos dónde lo vas a usar y te '
                 . 'orientamos.',
        ],
        [
            'q' => '¿Necesito comprar cebaderos aparte?',
            'a' => 'Sí, se recomienda usarlos siempre. Podemos cotizarte el raticida junto con los cebaderos '
                 . 'en el mismo pedido.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar raticida', 'whatsappText' => ''],
    'related'   => ['insecticidas', 'fumigadoras', 'balanceados'],
    'guides'    => ['como-eliminar-ratas'],
    'articles'  => [],
    'toolLinks' => [],
];
