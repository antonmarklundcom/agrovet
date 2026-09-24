<?php
declare(strict_types=1);

return [
    'order'           => 30,
    'path'            => '/productos/ivermectina-veterinaria/',
    'title'           => 'Ivermectina veterinaria',
    'navLabel'        => 'Ivermectina',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Ivermectina veterinaria: precio y envío',
    'metaDescription' => 'Ivermectina veterinaria para perros, bovinos y otros animales, uso '
                       . 'exclusivamente veterinario. Cotizá sin costo por WhatsApp y recibila en '
                       . 'todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Ivermectina veterinaria para animales',
        'h2'      => 'Antiparasitario a base de ivermectina para perros, bovinos y otras especies, de uso exclusivamente veterinario.',
        'lead'    => 'La ivermectina es uno de los antiparasitarios más usados en animales, pero la '
                   . 'dosis y la especie importan: lo que sirve para un bovino no se aplica igual en '
                   . 'un perro. Contanos para qué animal y especie la necesitás y te cotizamos sin '
                   . 'costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Ivermectina inyectable para bovinos y otras especies de producción',
        'Ivermectina en presentación oral o tópica para perros, de uso veterinario',
        'Presentaciones por unidad o por caja para el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Uso exclusivamente veterinario: la ivermectina veterinaria nunca es para personas; '
            . 'no respondemos consultas sobre uso humano',
        'La dosis y la indicación las define tu veterinario según especie, peso y estado del animal',
        'En razas tipo collie (border collie, pastor australiano y similares) la ivermectina puede '
            . 'ser peligrosa por sensibilidad genética (MDR1); el uso en perros debe indicarlo un '
            . 'veterinario',
        'Respetá el tiempo de retiro que indica la etiqueta antes de faenar o vender leche',
    ],
    'weNeed' => [
        'Especie y peso aproximado del animal',
        'Si tenés indicación de tu veterinario sobre presentación y frecuencia',
        'Cuántas unidades o cajas necesitás',
        'La localidad a la que hay que enviarla',
    ],
    'sections' => [
        [
            'h2'   => 'Qué es la ivermectina y para qué se usa en animales',
            'body' => [
                'La ivermectina es un antiparasitario veterinario que actúa contra parásitos '
                    . 'internos y externos en distintas especies: bovinos, perros y otros animales de '
                    . 'producción o compañía. Se usa en el marco de un plan sanitario, según la carga '
                    . 'parasitaria y el momento del año.',
                'Es un producto de uso exclusivamente veterinario: no es para personas y no '
                    . 'respondemos consultas sobre uso en humanos. La dosis y la frecuencia siempre '
                    . 'las define un veterinario, según la especie, el peso y el estado del animal.',
            ],
            'items' => [],
        ],
        [
            'h2'   => 'Un cuidado especial en ciertas razas de perros',
            'body' => [
                'Algunas razas de perros, como el border collie, el pastor australiano y otras del '
                    . 'grupo collie, pueden tener una sensibilidad genética conocida como MDR1 que las '
                    . 'hace más vulnerables a la ivermectina. En esas razas, y en general en cualquier '
                    . 'perro, el uso de ivermectina debe indicarlo el veterinario.',
                'Si no sabés si tu perro pertenece a una raza sensible o tiene otras condiciones de '
                    . 'salud, consultá antes de aplicar cualquier presentación de ivermectina.',
            ],
            'items' => [
                ['title' => 'Razas sensibles', 'text' => 'Collie, border collie, pastor australiano y cruzas: consultá siempre al veterinario antes de usar ivermectina.'],
                ['title' => 'Indicación veterinaria', 'text' => 'La dosis y la presentación las define un profesional, no la etiqueta sola.'],
                ['title' => 'Nunca en personas', 'text' => 'Es un producto exclusivamente veterinario; no respondemos consultas de uso humano.'],
            ],
        ],
    ],
    'benefits' => [
        ['title' => 'Para cada especie', 'text' => 'Cotizamos la presentación que corresponde a bovinos, perros u otra especie que nos indiques.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta la ivermectina?',
            'a' => 'El precio depende de la presentación, la marca y la cantidad. Mandanos por '
                 . 'WhatsApp la especie y qué necesitás, y te respondemos con el precio y el costo de '
                 . 'envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿La ivermectina veterinaria sirve para personas?',
            'a' => 'No. Es un producto de uso exclusivamente veterinario, formulado y dosificado para '
                 . 'animales. No respondemos consultas sobre uso en personas; para eso consultá a un '
                 . 'médico.',
        ],
        [
            'q' => '¿Es segura la ivermectina para todos los perros?',
            'a' => 'No en todos los casos. Algunas razas, como el border collie y el pastor '
                 . 'australiano, tienen una sensibilidad genética (MDR1) que puede hacer peligrosa la '
                 . 'ivermectina. El uso en perros siempre debe indicarlo un veterinario. Mirá también '
                 . 'nuestra guía sobre ivermectina en animales.',
        ],
        [
            'q' => '¿Se puede usar ivermectina en gatos?',
            'a' => 'Existen presentaciones veterinarias pensadas para felinos, pero la sensibilidad '
                 . 'varía según el producto y la dosis. Consultá a tu veterinario antes de aplicarla '
                 . 'en un gato.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar ivermectina veterinaria', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-perros', 'antiparasitarios-para-ganado', 'curabichera'],
    'guides'    => ['ivermectina-en-animales'],
    'articles'  => [],
    'toolLinks' => [],
];
