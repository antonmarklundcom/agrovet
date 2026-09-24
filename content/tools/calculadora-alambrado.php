<?php
declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/herramientas/calculadora-de-alambrado/',
    'title'           => 'Calculadora de alambrado',
    'navLabel'        => 'Calculadora de alambrado',
    'seoTitle'        => 'Calculadora de alambrado: metros y rollos',
    'metaDescription' => 'Calculá cuántos metros de alambre y cuántos rollos necesitás para tu '
                       . 'alambrado según hilos y desperdicio. Cotizá sin costo por WhatsApp.',
    'hero' => [
        'eyebrow' => 'Herramientas',
        'h1'      => 'Calculadora de alambrado',
        'lead'    => 'Estimá los metros de alambre y la cantidad de rollos que necesitás según el '
                   . 'perímetro de tu potrero y la cantidad de hilos.',
    ],
    'intro' => [
        'Antes de salir a comprar alambre conviene saber cuánto vas a necesitar: no es solo el '
            . 'perímetro del potrero, sino el perímetro multiplicado por la cantidad de hilos que '
            . 'va a tener el alambrado. Un cerco de cinco hilos consume cinco veces más metraje que '
            . 'una sola vuelta de alambre, y ese detalle es el que más gente pasa por alto cuando '
            . 'calcula a ojo.',
        'Esta calculadora suma esa cuenta por vos. Si ya conocés el perímetro del alambrado, lo '
            . 'cargás directo; si no lo tenés medido pero el potrero es más o menos rectangular, '
            . 'ingresá el largo y el ancho y ella calcula el perímetro. Después multiplica ese '
            . 'perímetro por la cantidad de hilos y le suma un porcentaje de desperdicio, porque en '
            . 'la obra siempre se pierde metraje en empalmes, tensores y sobras de rollo. Con el '
            . 'total en metros, la calculadora divide por el largo del rollo que uses (250, 350, '
            . '500 o 1.000 metros, según lo que consigas) y redondea hacia arriba, porque un rollo '
            . 'empezado cuenta entero para la compra.',
        'También podés estimar, de forma aproximada, cuántos postes vas a necesitar si le indicás '
            . 'la distancia que pensás dejar entre uno y otro: es un número orientativo, porque el '
            . 'trazado real depende de esquinas, tranqueras y desniveles del terreno, y eso solo se '
            . 've en el campo. Los resultados sirven para armar el pedido y pedir la cotización; no '
            . 'reemplazan una medición en el lugar si el alambrado tiene formas irregulares. Con el '
            . 'metraje y los rollos calculados, mandanos el resultado por WhatsApp o por el '
            . 'formulario y te cotizamos el alambre con el envío a tu localidad, sin costo y sin '
            . 'compromiso.',
    ],
    'faq' => [
        [
            'q' => '¿Cómo calculo cuántos metros de alambre necesito?',
            'a' => 'Multiplicá el perímetro del alambrado por la cantidad de hilos y sumale un '
                 . 'porcentaje de desperdicio (5% por defecto) para empalmes y tensores. Esta '
                 . 'calculadora hace esa cuenta automáticamente.',
        ],
        [
            'q' => '¿Qué pasa si no sé el perímetro exacto de mi potrero?',
            'a' => 'Si el potrero es más o menos rectangular, cargá el largo y el ancho: la '
                 . 'calculadora obtiene el perímetro sola. Para formas irregulares conviene medir '
                 . 'en el campo.',
        ],
        [
            'q' => '¿Cuántos rollos de alambre necesito comprar?',
            'a' => 'Se divide el total de metros por el largo del rollo que uses (250, 350, 500 o '
                 . '1.000 m) y se redondea hacia arriba, porque un rollo empezado se compra entero.',
        ],
        [
            'q' => '¿El número de postes es exacto?',
            'a' => 'No, es aproximado: se calcula según el perímetro y la distancia entre postes '
                 . 'que indiques, pero esquinas, tranqueras y desniveles del terreno cambian la '
                 . 'cantidad real en obra.',
        ],
    ],
    'related'       => ['alambre', 'tejido-de-alambre'],
    'ctaWhatsapp'   => '',
    'formNeed'      => 'campo',
    'analyticsTool' => 'calculadora_alambrado',
];
