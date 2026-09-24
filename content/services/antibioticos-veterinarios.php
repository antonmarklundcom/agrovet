<?php
declare(strict_types=1);

return [
    'order'           => 40,
    'path'            => '/productos/antibioticos-veterinarios/',
    'title'           => 'Antibióticos veterinarios',
    'navLabel'        => 'Antibióticos veterinarios',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Antibióticos veterinarios: con receta',
    'metaDescription' => 'Antibióticos veterinarios para perros y ganado, incluida terramicina, '
                       . 'venta bajo receta veterinaria. Cotizá sin costo por WhatsApp, envío a '
                       . 'todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Antibióticos veterinarios, venta con receta',
        'h2'      => 'Antibióticos para perros y ganado, incluida terramicina (oxitetraciclina), con envío a todo Paraguay.',
        'lead'    => 'Un antibiótico mal indicado no solo no cura: puede generar resistencia y '
                   . 'complicar el próximo tratamiento. Mandanos la receta de tu veterinario con lo '
                   . 'que necesitás y te cotizamos sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Antibióticos inyectables y orales para perros y otras mascotas, con receta',
        'Antibióticos para ganado, incluida terramicina (oxitetraciclina)',
        'Presentaciones por unidad o por caja para el establecimiento',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Venta bajo receta veterinaria: necesitamos la indicación de tu veterinario para cotizar y despachar',
        'No te automediques ni le des al animal un antibiótico que sobró de otro tratamiento',
        'Un tratamiento incompleto o mal indicado favorece la resistencia bacteriana y complica curas futuras',
        'Respetá el tiempo de retiro que indica la etiqueta antes de faenar o vender leche',
    ],
    'weNeed' => [
        'La receta o indicación de tu veterinario',
        'Especie y peso aproximado del animal',
        'Presentación indicada: inyectable, oral u otra',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué el antibiótico siempre va con receta',
            'body' => [
                'Un antibiótico ataca un tipo de bacteria específico, en una dosis y un tiempo de '
                    . 'tratamiento pensados para ese cuadro. Por eso la venta es bajo receta '
                    . 'veterinaria: el profesional que revisó al animal es quien puede indicar cuál '
                    . 'corresponde y por cuánto tiempo darlo.',
                'Interrumpir el tratamiento antes de tiempo, o usar un antibiótico que sobró de otro '
                    . 'animal o de otro cuadro, favorece que las bacterias se vuelvan resistentes. Eso '
                    . 'complica no solo a ese animal, sino a los tratamientos futuros en todo el '
                    . 'establecimiento o la casa.',
            ],
            'items' => [
                ['title' => 'Receta veterinaria', 'text' => 'Necesaria para cotizar y despachar antibióticos, sin excepción.'],
                ['title' => 'Tratamiento completo', 'text' => 'Cortar el tratamiento antes de tiempo favorece la resistencia bacteriana.'],
                ['title' => 'Tiempo de retiro', 'text' => 'En ganado, respetá el plazo de la etiqueta antes de faenar o vender leche.'],
            ],
        ],
        [
            'h2'   => 'Terramicina y otras presentaciones veterinarias',
            'body' => [
                'La terramicina, a base de oxitetraciclina, es uno de los antibióticos veterinarios '
                    . 'más conocidos, tanto en inyectable para ganado como en presentaciones tópicas '
                    . 'para heridas. Hay además antibióticos orales e inyectables pensados para perros '
                    . 'y otras mascotas, según el cuadro que indique el veterinario.',
                'La elección entre inyectable, oral o tópico depende del tipo de infección y de la '
                    . 'especie, y siempre la define quien revisó al animal. Nosotros cotizamos y '
                    . 'enviamos la presentación que te indicó tu veterinario.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Con receta, sin vueltas', 'text' => 'Nos mandás la indicación de tu veterinario y cotizamos exactamente eso.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan los antibióticos veterinarios?',
            'a' => 'Depende de la presentación, la marca y la cantidad. Mandanos por WhatsApp la '
                 . 'receta de tu veterinario y te respondemos con precio y envío sin compromiso.',
        ],
        [
            'q' => '¿Necesito receta para comprar antibióticos?',
            'a' => 'Sí, la venta de antibióticos veterinarios es bajo receta veterinaria. Necesitamos '
                 . 'la indicación de tu veterinario para poder cotizar y despachar el producto.',
        ],
        [
            'q' => '¿Qué es la terramicina?',
            'a' => 'Es un antibiótico veterinario a base de oxitetraciclina, usado en ganado en '
                 . 'presentación inyectable y también en formas tópicas para heridas. Se vende con '
                 . 'receta veterinaria.',
        ],
        [
            'q' => '¿Puedo darle a mi mascota un antibiótico que sobró de otro tratamiento?',
            'a' => 'No es recomendable: la dosis y el tipo de antibiótico dependen del cuadro '
                 . 'específico, y automedicar favorece la resistencia bacteriana. Consultá siempre a '
                 . 'tu veterinario antes de dar un antibiótico.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar antibióticos veterinarios', 'whatsappText' => ''],
    'related'   => ['ivermectina', 'antiparasitarios-para-ganado', 'veterinario-a-domicilio'],
    'guides'    => ['terramicina-veterinaria'],
    'articles'  => [],
    'toolLinks' => [],
];
