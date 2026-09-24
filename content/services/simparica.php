<?php
/**
 * BRAND page. Keywords: simparica (210/mes), simparica trio (50), simparica
 * precio (50), simparica para que sirve. We are NOT an official distributor:
 * no logos, no stock claims, no manufacturer quotes.
 */

declare(strict_types=1);

return [
    'order'           => 28,
    'path'            => '/productos/simparica/',
    'title'           => 'Simparica',
    'navLabel'        => 'Simparica',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Simparica para perros: precio y envío',
    'metaDescription' => 'Simparica y Simparica Trio para perros, comprimido mensual contra pulgas '
                       . 'y garrapatas. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Simparica para perros',
        'h2'      => 'Simparica y Simparica Trio, en la presentación que corresponde al peso de tu perro.',
        'lead'    => 'Con pastura alta o después de una caminata por el monte, la garrapata sube '
                   . 'sin que la veas. Contanos el peso de tu perro y si querés Simparica o '
                   . 'Simparica Trio, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Simparica: comprimido masticable mensual contra pulgas y garrapatas',
        'Simparica Trio: suma otros principios activos, en términos generales',
        'Presentaciones según el peso del perro, tal como indica la caja',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Simparica® es una marca registrada de su fabricante. No somos distribuidor '
            . 'oficial: cotizamos el producto original con envío y te confirmamos disponibilidad.',
        'Uso exclusivo en perros; nunca en gatos',
        'Siempre por el peso del perro indicado en la caja; nunca partas un comprimido salvo '
            . 'indicación del veterinario',
        'Consultá al veterinario en cachorros, hembras preñadas o en lactancia, o en perros con '
            . 'antecedentes de convulsiones',
    ],
    'weNeed' => [
        'El peso de tu perro',
        'Si preferís Simparica o Simparica Trio',
        'Cuántas unidades necesitás',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Para qué sirve Simparica',
            'body' => [
                'Simparica es un comprimido masticable mensual para perros, con sarolaner como '
                    . 'principio activo, indicado contra pulgas y garrapatas. Simparica Trio suma '
                    . 'otros principios activos y en general amplía la cobertura; el prospecto de '
                    . 'cada producto detalla su alcance exacto.',
                'La presentación se elige siempre por el peso del perro, tal como está impreso en la '
                    . 'caja: cada rango de peso corresponde a un comprimido distinto y no se deben '
                    . 'partir ni compartir entre perros de peso diferente.',
            ],
            'items' => [
                ['title' => 'Contra pulgas y garrapatas', 'text' => 'Un comprimido masticable mensual, según el peso indicado en la caja.'],
                ['title' => 'Simparica Trio', 'text' => 'Suma otros principios activos, en términos generales.'],
                ['title' => 'Uso exclusivo en perros', 'text' => 'Nunca se administra a gatos.'],
            ],
        ],
        [
            'h2'   => 'Cuándo consultar al veterinario antes de dar Simparica',
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
        ['title' => 'Producto original', 'text' => 'Cotizamos el Simparica o Simparica Trio original, según el peso de tu perro.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Para qué sirve Simparica?',
            'a' => 'Es un comprimido masticable mensual para perros contra pulgas y garrapatas. '
                 . 'Simparica Trio suma otros principios activos, en términos generales; el '
                 . 'prospecto de cada producto detalla su alcance exacto.',
        ],
        [
            'q' => '¿Cuánto cuesta Simparica?',
            'a' => 'El precio depende de la presentación y del peso del perro. Mandanos por '
                 . 'WhatsApp esos datos y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué diferencia hay entre Simparica y Simparica Trio?',
            'a' => 'Simparica cubre pulgas y garrapatas. Simparica Trio suma otros principios '
                 . 'activos, en términos generales; el prospecto de cada producto detalla su '
                 . 'alcance exacto.',
        ],
        [
            'q' => '¿Qué es el sarolaner?',
            'a' => 'Es el principio activo de Simparica, de la familia de las isoxazolinas, que '
                 . 'actúa contra pulgas y garrapatas. Su prospecto incluye una advertencia general '
                 . 'sobre antecedentes de convulsiones, por lo que en esos casos conviene '
                 . 'consultar al veterinario antes de usarlo.',
        ],
        [
            'q' => '¿Son distribuidores oficiales de Simparica?',
            'a' => 'No. Simparica® es una marca registrada de su fabricante y nosotros no somos '
                 . 'distribuidor oficial. Cotizamos el producto original con envío y te '
                 . 'confirmamos disponibilidad antes de que confirmes la compra.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar Simparica', 'whatsappText' => ''],
    'related'   => ['antipulgas', 'antiparasitarios-para-perros', 'veterinaria'],
    'guides'    => ['pulgas-y-garrapatas-en-perros', 'sarna-en-perros'],
    'articles'  => [],
    'toolLinks' => [],
];
