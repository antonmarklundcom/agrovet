<?php
/**
 * Article body for content/blog/temporada-de-bicheras.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'temporada-de-bicheras';

$sections = [
    [
        'h2'   => 'Por qué las bicheras suben con el calor y la humedad',
        'body' => [
            'La bichera (miasis) la produce la mosca del gusano barrenador cuando pone sus huevos '
                . 'en una herida abierta. En poco tiempo nacen las larvas, que se alimentan del '
                . 'tejido vivo, agrandan la herida y sueltan un olor que atrae a más moscas. Ese '
                . 'ciclo se acelera con el calor y la humedad, así que en la época de más temperatura '
                . 'del año el riesgo sube en todo el establecimiento.',
            'No hace falta una herida grande para que empiece: un raspón de alambre, un ombligo mal '
                . 'curado o un corte de manga alcanzan. Por eso conviene pensar la temporada antes de '
                . 'que llegue el calor fuerte, con el galpón surtido y la rutina de revisión ya '
                . 'instalada, en lugar de salir a buscar curabichera cuando ya apareció el primer caso.',
        ],
    ],
    [
        'h2'   => 'Los puntos de riesgo del rodeo',
        'body' => [
            'Hay momentos del manejo que generan heridas previsibles, y son los mismos todos los '
                . 'años. Anticiparlos es la forma más barata de evitar una bichera.',
        ],
        'items' => [
            ['title' => 'Ombligo del ternero', 'text' => 'Curar el ombligo apenas nace es la prevención más simple de toda la temporada de partos.'],
            ['title' => 'Castración y descorne', 'text' => 'Toda herida de manejo necesita curabichera en el momento, no al otro día.'],
            ['title' => 'Heridas de alambre', 'text' => 'Un corte chico en un día caluroso puede terminar en bichera en cuestión de horas.'],
            ['title' => 'Marcación y señalada', 'text' => 'Cualquier corte de piel durante estas tareas queda expuesto hasta que cicatriza.'],
        ],
    ],
    [
        'h2'   => 'Revisión diaria: la rutina que evita perder animales',
        'body' => [
            'Recorrer el rodeo todos los días, aunque sea de forma rápida, permite detectar una '
                . 'herida recién infestada antes de que la larva avance. Se presta atención al '
                . 'comportamiento del animal (se aparta del grupo, se rasca o lame una zona, camina '
                . 'distinto) y se revisan de cerca el ombligo de los terneros, las cicatrices de '
                . 'castración y descorne recientes, y cualquier corte visible en la piel.',
            'En la parición, la revisión diaria del ombligo de cada ternero nuevo es la tarea que más '
                . 'rinde: se cura apenas nace y se vuelve a mirar los días siguientes. Un animal '
                . 'tratado a tiempo cicatriza rápido; uno que se descubre tarde puede perder peso, '
                . 'infectarse o, en casos graves, comprometer la vida.',
        ],
    ],
    [
        'h2'   => 'Qué tener en el galpón antes de que empiece la temporada',
        'body' => [
            'Conviene llegar a la temporada de más calor con el curabichera ya en el galpón, no '
                . 'pedirlo cuando ya hay un animal afectado. Las presentaciones más usadas son el '
                . 'aerosol (rápido para el trabajo de manga), la curabichera plata (que deja una capa '
                . 'visible sobre la herida) y el polvo o la pasta para heridas más grandes o de '
                . 'difícil acceso.',
            'Además del curabichera, tené a mano guantes para manipular animales heridos, un botiquín '
                . 'básico y los datos del veterinario de confianza por si una herida se complica. '
                . 'Respetá siempre el tiempo de retiro que indica la etiqueta antes de faenar o vender '
                . 'leche, y recordá que estos productos son de uso exclusivamente veterinario: nunca '
                . 'para personas.',
        ],
    ],
    [
        'h2'   => 'Manejo de pariciones en plena temporada',
        'body' => [
            'La época de partos suele coincidir en parte con los meses de más calor, así que el '
                . 'ombligo del ternero recién nacido es el punto de mayor atención. Curarlo al nacer, '
                . 'mantener el lugar de parición limpio y revisar a las vacas recién paridas por si '
                . 'quedó alguna herida del parto reduce buena parte del riesgo.',
            'Si notás una herida ya infestada, no esperes: cuanto antes se limpia y se trata, menos '
                . 'daño hace la larva. Ante heridas profundas, infectadas o un animal decaído, la '
                . 'recomendación es siempre consultar al veterinario.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cuándo empieza la temporada de bicheras en Paraguay?',
        'a' => 'Sube con el calor y la humedad, típicamente en los meses más cálidos del año. Las '
             . 'fechas exactas varían según la zona y el clima de cada campaña, así que conviene '
             . 'revisar el calendario sanitario vigente del SENACSA y no guiarse por una fecha fija.',
    ],
    [
        'q' => '¿Qué curabichera conviene tener en el galpón?',
        'a' => 'Depende del uso: aerosol para trabajo rápido de manga, curabichera plata para dejar '
             . 'una marca visible sobre la herida curada, y polvo o pasta para heridas más grandes. '
             . 'Mandanos qué necesitás por WhatsApp y te cotizamos sin costo.',
    ],
    [
        'q' => '¿Cuánto cuesta el curabichera?',
        'a' => 'El precio depende de la presentación, la marca y la cantidad. Contanos qué necesitás '
             . 'y te respondemos con el precio y el costo de envío hasta tu localidad, sin compromiso.',
    ],
    [
        'q' => '¿Qué hago si encuentro una bichera avanzada?',
        'a' => 'Limpiá y tratá la herida cuanto antes con el producto indicado en la etiqueta. Si la '
             . 'herida es profunda, está infectada o el animal está decaído, consultá al veterinario '
             . 'o, si es una emergencia grave, acudí a la clínica veterinaria más cercana.',
    ],
];

require ROOT_DIR . '/templates/article.php';
