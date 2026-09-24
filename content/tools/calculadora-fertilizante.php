<?php
declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/herramientas/calculadora-de-fertilizante/',
    'title'           => 'Calculadora de fertilizante',
    'navLabel'        => 'Calculadora de fertilizante',
    'seoTitle'        => 'Calculadora de fertilizante por hectárea',
    'metaDescription' => 'Calculá cuántas bolsas de fertilizante necesitás según tus hectáreas y la '
                       . 'dosis de tu análisis de suelo. Cotizá el pedido sin costo por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Herramientas',
        'h1'      => 'Calculadora de fertilizante por hectárea',
        'lead'    => 'Convertí hectáreas y dosis en kilos totales y en bolsas de 25 o 50 kg para '
                   . 'armar el pedido.',
    ],
    'intro' => [
        'Una vez que sabés cuántas hectáreas vas a fertilizar y qué dosis por hectárea recomienda '
            . 'tu análisis de suelo o tu técnico, lo que queda es una cuenta de compra: cuántos '
            . 'kilos en total y cuántas bolsas hay que pedir. Esta calculadora hace esa conversión '
            . 'para que no tengas que sacarla a mano ni redondear a ojo antes de mandar el pedido.',
        'Vos cargás las hectáreas y la dosis en kg/ha que ya tenés definida; la calculadora no te '
            . 'sugiere ninguna dosis, porque eso depende del cultivo, del análisis de suelo de tu '
            . 'chacra y del criterio de tu técnico, y varía de un lote a otro. Con esos dos datos '
            . 'multiplica hectáreas por dosis y obtiene los kilos totales que necesitás comprar.',
        'Después, según el tamaño de bolsa que uses (25 o 50 kg), divide el total en kilos y '
            . 'redondea hacia arriba, porque una bolsa abierta se compra entera aunque sobre '
            . 'producto. El resultado te sirve para armar el pedido con el número exacto de bolsas '
            . 'antes de cotizar: así no comprás de más ni te quedás corto a mitad de siembra o '
            . 'aplicación. Con el cálculo hecho, mandanos las hectáreas, la dosis y el producto que '
            . 'buscás por WhatsApp o por el formulario y te respondemos con el precio de las bolsas '
            . 'y el costo de envío a tu localidad, sin costo y sin compromiso.',
    ],
    'faq' => [
        [
            'q' => '¿La calculadora me dice qué dosis de fertilizante usar?',
            'a' => 'No. La dosis en kg/ha la definís vos según tu análisis de suelo o lo que te '
                 . 'indique tu técnico; la calculadora solo convierte esa dosis en kilos totales y '
                 . 'en bolsas.',
        ],
        [
            'q' => '¿Cómo se calculan los kilos totales de fertilizante?',
            'a' => 'Se multiplican las hectáreas por la dosis en kg/ha que ingresás. Ese total en '
                 . 'kilos es la base para calcular las bolsas.',
        ],
        [
            'q' => '¿Cuántas bolsas de fertilizante necesito comprar?',
            'a' => 'Se divide el total en kilos por el tamaño de bolsa (25 o 50 kg) y se redondea '
                 . 'hacia arriba, porque una bolsa abierta se compra entera.',
        ],
        [
            'q' => '¿Puedo pedir distintos productos con este cálculo?',
            'a' => 'Sí, el número de bolsas sirve para cualquier fertilizante granulado; contanos '
                 . 'qué producto buscás junto con el resultado y te cotizamos.',
        ],
    ],
    'related'       => ['fertilizantes', 'semillas'],
    'ctaWhatsapp'   => '',
    'formNeed'      => 'campo',
    'analyticsTool' => 'calculadora_fertilizante',
];
