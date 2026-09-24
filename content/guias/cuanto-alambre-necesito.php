<?php
declare(strict_types=1);

return [
    'order'           => 40,
    'path'            => '/guias/cuanto-alambre-necesito/',
    'title'           => 'Cuánto alambre necesito',
    'navLabel'        => 'Cuánto alambre necesito',
    'seoTitle'        => 'Cuánto alambre necesito para el cerco',
    'metaDescription' => 'Cómo calcular cuánto alambre necesitás para un alambrado: perímetro, '
                       . 'hilos y desperdicio, con un ejemplo. Cotizá sin costo y con envío.',
    'lastReviewed'    => '2026-09-24',
    'hero' => [
        'eyebrow' => 'Guías',
        'h1'      => 'Cuánto alambre necesito para un alambrado',
        'lead'    => 'La cuenta básica para calcular metros y rollos antes de pedir presupuesto: '
                   . 'perímetro, hilos y un margen de desperdicio.',
    ],
    'intro' => [
        'Antes de pedir un alambrado hace falta saber cuánto alambre entra, para no comprar de '
            . 'más ni quedarte corto a mitad de obra. La cuenta parte de tres datos: el perímetro '
            . 'del terreno a cercar, cuántos hilos va a tener el alambrado y un margen de '
            . 'desperdicio por empalmes, tensores y esquinas.',
        'La cantidad de postes y varillas depende del tipo de alambrado que elijas (liso, de '
            . 'púa, tejido) y de la separación entre ellos, así que esa parte conviene definirla '
            . 'según el tipo de alambrado que vayas a usar. Con el perímetro y los hilos ya tenés '
            . 'lo esencial para pedir la cotización del alambre.',
    ],
    'steps' => [
        [
            'title' => 'Medí el perímetro del terreno',
            'body'  => ['Sumá los cuatro lados (o los que correspondan) del área que vas a '
                . 'cercar. Ese es tu perímetro en metros.'],
        ],
        [
            'title' => 'Definí cuántos hilos va a tener el alambrado',
            'body'  => ['Un alambrado de tres, cuatro o cinco hilos multiplica la cantidad de '
                . 'alambre por esa cantidad de vueltas al perímetro.'],
        ],
        [
            'title' => 'Multiplicá perímetro por número de hilos',
            'body'  => ['Esa cuenta te da los metros lineales de alambre que necesitás antes de '
                . 'sumar el desperdicio.'],
        ],
        [
            'title' => 'Sumá un margen de desperdicio',
            'body'  => ['Agregá un porcentaje extra para empalmes, tensores y esquinas, así no te '
                . 'falta alambre a mitad de tramo.'],
        ],
        [
            'title' => 'Convertí los metros a rollos',
            'body'  => ['Dividí los metros totales por los metros que trae cada rollo del '
                . 'producto que vas a comprar, para saber cuántos rollos pedir.'],
        ],
        [
            'title' => 'Definí postes y varillas según el tipo de alambrado',
            'body'  => ['La separación entre postes y varillas cambia según el tipo de alambrado '
                . '(liso, de púa, tejido), así que definila con esa referencia.'],
        ],
        [
            'title' => 'Pedí la cotización con esos datos',
            'body'  => ['Con el perímetro, los hilos y el tipo de alambrado ya podés mandarnos el '
                . 'pedido y te cotizamos el alambre con el envío.'],
        ],
    ],
    'faq' => [
        [
            'q' => '¿Cómo calculo los metros de alambre que necesito?',
            'a' => 'Multiplicá el perímetro del terreno por la cantidad de hilos del alambrado, y '
                 . 'sumale un margen de desperdicio para empalmes y tensores.',
        ],
        [
            'q' => '¿Ejemplo de cálculo?',
            'a' => 'Un terreno de ejemplo con 400 metros de perímetro y un alambrado de 4 hilos '
                 . 'necesita 1.600 metros de alambre antes del desperdicio; sumando un margen '
                 . 'extra, el pedido final queda un poco por encima de esa cifra.',
        ],
        [
            'q' => '¿Cada cuánto van los postes y las varillas?',
            'a' => 'La separación depende del tipo de alambrado que elijas; definila según ese '
                 . 'criterio antes de calcular la cantidad de postes.',
        ],
        [
            'q' => '¿Cuánto cuesta el alambre?',
            'a' => 'Depende de la presentación, la marca y la cantidad. Mandanos el perímetro y '
                 . 'los hilos y te respondemos con precio y envío.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y '
                 . 'te los pasamos en la cotización.',
        ],
    ],
    'relatedService' => 'alambre',
    'toolLink'       => [
        'path'  => '/herramientas/calculadora-de-alambrado/',
        'label' => 'Calculadora de alambrado',
        'text'  => 'Poné el perímetro y los hilos y te da metros y rollos.',
    ],
    'related' => ['control-de-malezas-en-pasturas', 'sal-mineral-para-ganado'],
];
