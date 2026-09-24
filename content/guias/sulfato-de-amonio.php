<?php
declare(strict_types=1);

return [
    'order'           => 70,
    'path'            => '/guias/sulfato-de-amonio/',
    'title'           => 'Sulfato de amonio',
    'navLabel'        => 'Sulfato de amonio',
    'seoTitle'        => 'Sulfato de amonio: para qué sirve',
    'metaDescription' => 'Sulfato de amonio: qué es, cuándo conviene sobre urea y en qué suelos '
                       . 'rinde más. Cotizá la cantidad que necesitás sin costo y sin compromiso.',
    'lastReviewed'    => '2026-09-24',
    'hero' => [
        'eyebrow' => 'Guías',
        'h1'      => 'Sulfato de amonio: qué es y cuándo conviene usarlo',
        'lead'    => 'Nitrógeno y azufre en un solo fertilizante: para qué sirve, cuándo rinde más '
                   . 'que la urea y en qué suelos se nota la diferencia.',
    ],
    'intro' => [
        'El sulfato de amonio es un fertilizante granulado que aporta nitrógeno y azufre en el '
            . 'mismo grano: alrededor de 21 % de nitrógeno y 24 % de azufre. El azufre es el '
            . 'nutriente que muchas veces falta sin que se note a simple vista, hasta que el '
            . 'cultivo queda amarillento y no responde igual a la urea sola.',
        'Se usa en granos como soja, maíz y trigo, en pasturas que necesitan un empuje de '
            . 'rebrote y en cultivos hortícolas exigentes en azufre, como la cebolla o el ajo. '
            . 'También acidifica un poco el suelo, así que en suelos ya ácidos conviene manejarlo '
            . 'con cal o corrigiendo el pH antes de aplicar.',
    ],
    'steps' => [
        [
            'title' => 'Confirmá si tu suelo necesita azufre',
            'body'  => ['Si venís usando solo urea o NPK sin azufre en varias campañas seguidas, '
                . 'es un indicio de que el sulfato de amonio puede rendir mejor que otra fuente '
                . 'de nitrógeno sola.'],
        ],
        [
            'title' => 'Compará con la urea según tu suelo',
            'body'  => ['La urea aporta más nitrógeno por bolsa pero nada de azufre; el sulfato '
                . 'de amonio aporta menos nitrógeno por kilo, pero suma azufre y se comporta '
                . 'distinto en suelos con pH alto, donde pierde menos nitrógeno por '
                . 'volatilización.'],
        ],
        [
            'title' => 'Elegí el momento de aplicación',
            'body'  => ['Se usa tanto en la siembra como en cobertura, según el cultivo y lo que '
                . 'indique la etiqueta del producto y la recomendación de tu ingeniero '
                . 'agrónomo.'],
        ],
        [
            'title' => 'Cuidá el suelo si ya es ácido',
            'body'  => ['El sulfato de amonio tiende a acidificar el suelo con el uso continuo. '
                . 'En suelos que ya vienen ácidos, consultá si conviene combinarlo con un '
                . 'encalado.'],
        ],
        [
            'title' => 'Guardalo seco y protegido',
            'body'  => ['Es un producto higroscópico: si toma humedad se apelmaza y cuesta '
                . 'aplicarlo parejo. Guardalo en bolsa cerrada, en un lugar seco.'],
        ],
    ],
    'faq' => [
        [
            'q' => '¿Qué es el sulfato de amonio?',
            'a' => 'Es un fertilizante granulado que aporta nitrógeno y azufre juntos, en una '
                 . 'proporción cercana a 21 % de nitrógeno y 24 % de azufre.',
        ],
        [
            'q' => '¿Cuándo conviene el sulfato de amonio en vez de la urea?',
            'a' => 'Cuando el suelo o el cultivo necesita azufre además de nitrógeno, o en suelos '
                 . 'de pH alto donde la urea pierde más nitrógeno por volatilización.',
        ],
        [
            'q' => '¿En qué suelos rinde más el sulfato de amonio?',
            'a' => 'Se nota más en suelos pobres en azufre y en pasturas o cultivos que vienen '
                 . 'recibiendo nitrógeno sin azufre en las últimas campañas.',
        ],
        [
            'q' => '¿Se puede mezclar sulfato de amonio con otros fertilizantes?',
            'a' => 'Algunas combinaciones no son recomendables por reacciones entre productos; '
                 . 'consultá la etiqueta y, ante la duda, a tu ingeniero agrónomo antes de '
                 . 'mezclar.',
        ],
        [
            'q' => '¿Cuánta cantidad necesito por hectárea?',
            'a' => 'Depende del cultivo, el análisis de suelo y la presentación del producto; '
                 . 'mandanos los datos de tu lote y te respondemos con la cantidad y el envío.',
        ],
    ],
    'relatedService' => 'fertilizantes',
    'toolLink'       => [
        'path'  => '/herramientas/calculadora-de-fertilizante/',
        'label' => 'Calculadora de fertilizante',
        'text'  => 'Poné las hectáreas y tu dosis y te da las bolsas.',
    ],
    'related' => ['nitrato-de-calcio', 'humus-de-lombriz'],
];
