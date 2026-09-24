<?php
/**
 * BRAND page. Keywords: nexgard (2.900/mes), nexgard spectra (1.000), nexgard
 * para perros (880), nexgard precio (210), nexgard para gatos (210),
 * afoxolaner (140). We are NOT an official distributor: no logos, no stock
 * claims, no manufacturer quotes.
 */

declare(strict_types=1);

return [
    'order'           => 26,
    'path'            => '/productos/nexgard/',
    'title'           => 'NexGard',
    'navLabel'        => 'NexGard',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'NexGard para perros: precio y envío',
    'metaDescription' => 'NexGard y NexGard Spectra para perros, contra pulgas, garrapatas y otros '
                       . 'parásitos. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'NexGard para perros',
        'h2'      => 'NexGard y NexGard Spectra, en la presentación que corresponde al peso de tu perro.',
        'lead'    => 'Una pulga o una garrapata no se ven hasta que ya son un problema: mordida, '
                   . 'sarna o una enfermedad que la garrapata transmite. Contanos el peso de tu '
                   . 'perro y si querés NexGard o NexGard Spectra, y te cotizamos sin costo con el '
                   . 'envío hasta tu localidad.',
    ],
    'includes' => [
        'NexGard: comprimido masticable mensual contra pulgas y garrapatas',
        'NexGard Spectra: suma cobertura frente a algunos parásitos internos',
        'Presentaciones según el peso del perro, tal como indica la caja',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'NexGard® es una marca registrada de su fabricante. No somos distribuidor '
            . 'oficial: cotizamos el producto original con envío y te confirmamos disponibilidad.',
        'NexGard y NexGard Spectra son para perros; para gatos existen productos rotulados '
            . 'específicamente para gatos',
        'Siempre por el peso del perro indicado en la caja; nunca partas un comprimido salvo '
            . 'indicación del veterinario',
        'Consultá al veterinario en cachorros, hembras preñadas o en lactancia, o en perros con '
            . 'antecedentes de convulsiones',
    ],
    'weNeed' => [
        'El peso de tu perro',
        'Si preferís NexGard o NexGard Spectra',
        'Cuántas unidades necesitás',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué es NexGard y para qué se usa',
            'body' => [
                'NexGard es un comprimido masticable mensual para perros, con afoxolaner como '
                    . 'principio activo, indicado contra pulgas y garrapatas. NexGard Spectra suma '
                    . 'milbemicina oxima y en general amplía la cobertura frente a algunos parásitos '
                    . 'internos; el prospecto de cada producto detalla su alcance exacto.',
                'La presentación se elige siempre por el peso del perro, tal como está impreso en la '
                    . 'caja: cada rango de peso corresponde a un comprimido distinto y no se deben '
                    . 'partir ni compartir entre perros de peso diferente.',
            ],
            'items' => [
                ['title' => 'Contra pulgas y garrapatas', 'text' => 'Un comprimido masticable mensual, según el peso indicado en la caja.'],
                ['title' => 'NexGard Spectra', 'text' => 'Suma cobertura frente a algunos parásitos internos, en términos generales.'],
                ['title' => 'Uso exclusivo en perros', 'text' => 'Nunca se administra a gatos; existen productos rotulados para cada especie.'],
            ],
        ],
        [
            'h2'   => 'Cuándo consultar al veterinario antes de dar NexGard',
            'body' => [
                'Los antiparasitarios de esta familia (isoxazolinas) llevan en su prospecto una '
                    . 'advertencia general sobre antecedentes de convulsiones; si tu perro tuvo '
                    . 'convulsiones alguna vez, consultá al veterinario antes de empezar. Lo mismo si '
                    . 'es cachorro, si la perra está preñada o amamantando, o si tenés dudas sobre el '
                    . 'peso exacto y la presentación que corresponde.',
                'Guardá siempre la caja hasta terminar el tratamiento: ahí está el peso, el lote y el '
                    . 'prospecto con la información completa del producto.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Producto original', 'text' => 'Cotizamos el NexGard o NexGard Spectra original, según el peso de tu perro.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta NexGard?',
            'a' => 'El precio depende de la presentación y del peso del perro. Mandanos por '
                 . 'WhatsApp esos datos y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿NexGard sirve para gatos?',
            'a' => 'No. NexGard y NexGard Spectra son para perros. Para gatos existen productos '
                 . 'rotulados específicamente para esa especie; consultanos y te orientamos.',
        ],
        [
            'q' => '¿Cuál es la diferencia entre NexGard y NexGard Spectra?',
            'a' => 'NexGard cubre pulgas y garrapatas. NexGard Spectra, además, suma cobertura '
                 . 'frente a algunos parásitos internos, en términos generales; el prospecto de '
                 . 'cada producto detalla su alcance exacto.',
        ],
        [
            'q' => '¿Qué es el afoxolaner?',
            'a' => 'Es el principio activo de NexGard, de la familia de las isoxazolinas, que '
                 . 'actúa contra pulgas y garrapatas. Su prospecto incluye una advertencia general '
                 . 'sobre antecedentes de convulsiones, por lo que en esos casos conviene '
                 . 'consultar al veterinario antes de usarlo.',
        ],
        [
            'q' => '¿Son distribuidores oficiales de NexGard?',
            'a' => 'No. NexGard® es una marca registrada de su fabricante y nosotros no somos '
                 . 'distribuidor oficial. Cotizamos el producto original con envío y te '
                 . 'confirmamos disponibilidad antes de que confirmes la compra.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar NexGard', 'whatsappText' => ''],
    'related'   => ['antipulgas', 'antiparasitarios-para-perros', 'veterinaria'],
    'guides'    => ['pulgas-y-garrapatas-en-perros', 'sarna-en-perros'],
    'articles'  => [],
    'toolLinks' => [],
];
