<?php
/**
 * Article body for content/blog/epoca-seca-sal-mineral.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'epoca-seca-sal-mineral';

$sections = [
    [
        'h2'   => 'Por qué la pastura no alcanza en la época seca',
        'body' => [
            'En los meses secos del año la pastura pierde calidad: baja la proteína, baja la energía '
                . 'disponible y, aunque el campo se vea verde, el rodeo no siempre saca de ahí lo que '
                . 'necesita. Es la época en la que más se nota la diferencia entre un animal '
                . 'suplementado y uno que depende solo de lo que encuentra pastoreando.',
            'La consecuencia más visible es la pérdida de estado: vacas que bajan de condición '
                . 'corporal, terneros que crecen más lento y vientres que llegan más débiles al '
                . 'servicio siguiente. Suplementar con sal mineral y, cuando hace falta, con una sal '
                . 'proteica, ayuda a sostener ese déficit mientras dura la seca.',
        ],
    ],
    [
        'h2'   => 'Sal mineral y sal proteica: para qué sirve cada una',
        'body' => [
            'La sal mineral aporta los minerales que la pastura de la seca no cubre y que el animal '
                . 'necesita para mantenerse, reproducirse y criar bien a su cría. Es la base que '
                . 'conviene tener disponible todo el año, y en la seca se vuelve más importante '
                . 'todavía porque el pasto aporta menos.',
            'La sal proteica suma además una fuente de proteína y energía, pensada justamente para '
                . 'los meses de pastura pobre. Se usa sobre todo en vacas de cría, vaquillas en '
                . 'recría o animales que necesitan sostener condición corporal antes del servicio. '
                . 'Cuál conviene en cada caso depende del estado del rodeo y de la pastura disponible; '
                . 'contanos tu situación y te ayudamos a definirlo.',
        ],
        'items' => [],
    ],
    [
        'h2'   => 'Comederos, agua y control del consumo',
        'body' => [
            'De poco sirve comprar buena sal mineral si el consumo no se controla. Un comedero techado '
                . 'protege el producto de la lluvia y del sol, evita que se apelmace y hace que el '
                . 'consumo sea más parejo entre los animales. Ubicarlo cerca de la aguada, pero no '
                . 'pegado, ayuda a que los animales circulen y no se concentren siempre en el mismo '
                . 'punto del potrero.',
            'El agua también es parte del manejo de la seca: bebederos limpios y con buen caudal '
                . 'hacen que el animal tome mejor y, de paso, consuma mejor la sal. Revisar el '
                . 'consumo cada tanto (si sobra o si vuela) permite ajustar la cantidad de comederos '
                . 'o su ubicación antes de que se note en el estado del rodeo.',
        ],
    ],
    [
        'h2'   => 'Qué mirar en un rodeo que empieza a perder estado',
        'body' => [
            'Vacas que bajan de condición corporal, pelo apagado, terneros que no acompañan el '
                . 'crecimiento esperado y una menor actividad general del rodeo son señales de que la '
                . 'suplementación no está alcanzando. Conviene revisar primero si el comedero está '
                . 'siempre disponible y en buen estado, y recién después evaluar un cambio de producto.',
            'Si la caída de estado es marcada o afecta a varios animales a la vez, es momento de '
                . 'consultar al veterinario para descartar otras causas además de la alimentación, '
                . 'como parásitos o alguna enfermedad de base.',
        ],
    ],
    [
        'h2'   => 'Planificar la compra antes de que suban los fletes',
        'body' => [
            'La sal mineral se usa en volumen, y comprarla sobre la hora suele salir más caro: menos '
                . 'margen para comparar presentaciones y, en plena seca, más demanda de transporte '
                . 'hacia el interior. Pedir la cotización con anticipación, antes de que el consumo se '
                . 'dispare, da más margen para planificar cuánto stock tener en el establecimiento.',
            'Nosotros no tenemos local físico: trabajamos por cotización y enviamos a todo Paraguay. '
                . 'Mandanos por WhatsApp cuántas bolsas necesitás, para qué categoría de animales y tu '
                . 'localidad, y te respondemos con el precio y el costo de envío, sin compromiso.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cuándo es la época seca en Paraguay?',
        'a' => 'Coincide en general con los meses de invierno, cuando baja la humedad y la pastura '
             . 'pierde calidad en buena parte del país. La duración exacta varía según la zona y el '
             . 'año, así que conviene mirar el estado de la pastura propia más que una fecha fija.',
    ],
    [
        'q' => '¿Qué diferencia hay entre sal mineral y sal proteica?',
        'a' => 'La sal mineral aporta minerales que la pastura no cubre; la sal proteica suma además '
             . 'proteína y energía, pensada para los meses de pastura pobre. Contanos el estado de tu '
             . 'rodeo y te ayudamos a definir cuál te conviene.',
    ],
    [
        'q' => '¿Cuánto cuesta la sal mineral?',
        'a' => 'El precio depende de la marca, la presentación y la cantidad de bolsas. Mandanos tu '
             . 'pedido por WhatsApp y te respondemos con el precio y el envío hasta tu localidad, sin '
             . 'costo ni compromiso.',
    ],
    [
        'q' => '¿Hacen envíos de sal mineral al interior del país?',
        'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
             . 'pasamos junto con la cotización.',
    ],
];

require ROOT_DIR . '/templates/article.php';
