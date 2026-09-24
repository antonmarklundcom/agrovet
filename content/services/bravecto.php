<?php
/**
 * BRAND page. Keywords: bravecto (720/mes), bravecto precio (210), bravecto
 * para perros, bravecto gatos (40). We are NOT an official distributor: no
 * logos, no stock claims, no manufacturer quotes.
 */

declare(strict_types=1);

return [
    'order'           => 27,
    'path'            => '/productos/bravecto/',
    'title'           => 'Bravecto',
    'navLabel'        => 'Bravecto',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Bravecto: precio y envío al país',
    'metaDescription' => 'Bravecto para perros, con protección prolongada contra pulgas y '
                       . 'garrapatas según el prospecto. Cotizá por WhatsApp sin costo y envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Bravecto para perros',
        'h2'      => 'Comprimido masticable con protección prolongada, según el prospecto del producto.',
        'lead'    => 'Andar acordándose de la fecha del antiparasitario mes a mes es fácil de '
                   . 'olvidar, y una garrapata no avisa. Contanos el peso de tu perro y te '
                   . 'cotizamos Bravecto sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Bravecto: comprimido masticable para perros contra pulgas y garrapatas',
        'Protección prolongada, según lo que indica el prospecto de cada presentación',
        'Presentaciones según el peso del perro, tal como indica la caja',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Bravecto® es una marca registrada de su fabricante. No somos distribuidor '
            . 'oficial: cotizamos el producto original con envío y te confirmamos disponibilidad.',
        'Hay presentaciones para gatos; consultá cuál corresponde antes de comprar',
        'Siempre por el peso del perro indicado en la caja; nunca partas un comprimido salvo '
            . 'indicación del veterinario',
        'Consultá al veterinario en cachorros, hembras preñadas o en lactancia, o en perros con '
            . 'antecedentes de convulsiones',
    ],
    'weNeed' => [
        'El peso de tu perro (o de tu gato, si buscás la presentación felina)',
        'La especie: perro o gato',
        'Cuántas unidades necesitás',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué es Bravecto y para qué se usa',
            'body' => [
                'Bravecto es un comprimido masticable para perros, con fluralaner como principio '
                    . 'activo, indicado contra pulgas y garrapatas, con protección prolongada según '
                    . 'lo que indica el prospecto de cada presentación. La presentación se elige '
                    . 'siempre por el peso del perro, tal como está impreso en la caja.',
                'También hay presentaciones de Bravecto en formato spot-on (aplicación sobre la '
                    . 'piel) pensadas para gatos; si tenés gato, consultanos para orientarte sobre '
                    . 'cuál corresponde, porque no es la misma presentación que la del perro.',
            ],
            'items' => [
                ['title' => 'Contra pulgas y garrapatas', 'text' => 'Comprimido masticable con protección prolongada, según el prospecto.'],
                ['title' => 'Por peso, no al ojo', 'text' => 'La caja indica el rango de peso exacto; nunca se parte el comprimido.'],
                ['title' => 'Hay presentaciones para gatos', 'text' => 'En formato distinto al de perros; consultá antes de comprar.'],
            ],
        ],
        [
            'h2'   => 'Cuándo consultar al veterinario antes de dar Bravecto',
            'body' => [
                'Los antiparasitarios de esta familia (isoxazolinas) llevan en su prospecto una '
                    . 'advertencia general sobre antecedentes de convulsiones; si tu perro o gato '
                    . 'tuvo convulsiones alguna vez, consultá al veterinario antes de empezar. Lo '
                    . 'mismo si es cachorro o gatito, o si el animal está preñado o amamantando.',
                'Nunca le des a un gato un producto formulado para perros, ni al revés: cada especie '
                    . 'tiene su presentación de Bravecto. Guardá la caja hasta terminar el '
                    . 'tratamiento, ahí está el prospecto completo.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Producto original', 'text' => 'Cotizamos el Bravecto original, según el peso y la especie del animal.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta Bravecto?',
            'a' => 'El precio depende de la presentación y del peso del animal. Mandanos por '
                 . 'WhatsApp esos datos y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Bravecto sirve para perros?',
            'a' => 'Sí, es un comprimido masticable pensado para perros, contra pulgas y '
                 . 'garrapatas, con protección prolongada según el prospecto. La presentación se '
                 . 'elige por el peso del perro.',
        ],
        [
            'q' => '¿Hay Bravecto para gatos?',
            'a' => 'Sí, existen presentaciones de Bravecto pensadas para gatos, en formato '
                 . 'distinto al de perros. Consultanos y te orientamos sobre cuál corresponde a '
                 . 'tu gato.',
        ],
        [
            'q' => '¿Qué es el fluralaner?',
            'a' => 'Es el principio activo de Bravecto, de la familia de las isoxazolinas, que '
                 . 'actúa contra pulgas y garrapatas. Su prospecto incluye una advertencia general '
                 . 'sobre antecedentes de convulsiones, por lo que en esos casos conviene '
                 . 'consultar al veterinario antes de usarlo.',
        ],
        [
            'q' => '¿Son distribuidores oficiales de Bravecto?',
            'a' => 'No. Bravecto® es una marca registrada de su fabricante y nosotros no somos '
                 . 'distribuidor oficial. Cotizamos el producto original con envío y te '
                 . 'confirmamos disponibilidad antes de que confirmes la compra.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar Bravecto', 'whatsappText' => ''],
    'related'   => ['antipulgas', 'antiparasitarios-para-perros', 'veterinaria'],
    'guides'    => ['pulgas-y-garrapatas-en-perros'],
    'articles'  => [],
    'toolLinks' => [],
];
