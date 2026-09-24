<?php
/**
 * Article body for content/blog/preparar-hacienda-para-vacunacion.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'preparar-hacienda-para-vacunacion';

$sections = [
    [
        'h2'   => 'Por qué conviene organizarse antes del día de vacunación',
        'body' => [
            'La vacunación oficial contra la fiebre aftosa y las vacunas complementarias del plan '
                . 'sanitario rinden mejor cuando el establecimiento llega preparado: animales '
                . 'identificados, manga en condiciones y el producto conservado como corresponde. '
                . 'Improvisar el mismo día suele significar más tiempo de manga, más estrés para los '
                . 'animales y más chance de errores.',
            'Las fechas exactas de cada campaña oficial las fija el SENACSA y cambian de una campaña a '
                . 'otra, así que conviene revisar el calendario sanitario vigente antes de organizar el '
                . 'trabajo, en lugar de guiarse por lo que se hizo el año anterior.',
        ],
    ],
    [
        'h2'   => 'Registros al día antes de arrancar',
        'body' => [
            'Tener actualizado el registro de existencias y la identificación de cada animal facilita '
                . 'tanto la vacunación oficial como el seguimiento sanitario propio del establecimiento. '
                . 'Revisar con anticipación qué categorías faltan vacunar, qué animales son nuevos en el '
                . 'rodeo y cuáles ya recibieron alguna dosis evita duplicar trabajo el día de la manga.',
            'Un registro claro también ayuda a planificar la compra: cuántas dosis hacen falta según la '
                . 'cantidad de animales por categoría, para no quedarse corto ni comprar de más.',
        ],
    ],
    [
        'h2'   => 'La manga en condiciones',
        'body' => [
            'Una manga en buen estado hace que el trabajo sea más rápido y más seguro, tanto para las '
                . 'personas como para los animales. Revisar tablas sueltas, portones que no cierran '
                . 'bien y puntos donde un animal pueda lastimarse antes del día de vacunación evita '
                . 'demoras y heridas de último momento.',
        ],
        'items' => [
            ['title' => 'Estructura firme', 'text' => 'Tablas, portones y cepo revisados antes de meter hacienda.'],
            ['title' => 'Piso sin barro excesivo', 'text' => 'Un piso resbaladizo suma estrés y riesgo de golpes.'],
            ['title' => 'Espacio para trabajar cómodo', 'text' => 'Suficiente lugar para aplicar la vacuna sin apuro ni forcejeo.'],
        ],
    ],
    [
        'h2'   => 'Cadena de frío: el punto que más se descuida',
        'body' => [
            'Muchas vacunas pierden eficacia si se rompe la cadena de frío entre la compra y la '
                . 'aplicación. Conservarlas según indica la etiqueta, trasladarlas en conservadora con '
                . 'hielo y evitar dejarlas al sol durante la jornada de vacunación es tan importante '
                . 'como la técnica de aplicación misma.',
            'Planificar la compra con unos días de anticipación, en lugar de conseguir las dosis a '
                . 'último momento, da más margen para asegurar que lleguen en buen estado y a tiempo '
                . 'para la fecha elegida.',
        ],
    ],
    [
        'h2'   => 'Trabajo tranquilo con los animales',
        'body' => [
            'Un animal que llega tranquilo a la manga se vacuna más rápido y con menos riesgo de '
                . 'golpes, tanto para él como para quien lo maneja. Arrear sin apuro, evitar gritos y '
                . 'golpes innecesarios, y dar tiempo a que el lote se acomode en los corrales previos '
                . 'reduce el estrés general de la jornada y mejora el rendimiento del trabajo.',
        ],
    ],
    [
        'h2'   => 'Vacunas complementarias: qué conversar con el veterinario',
        'body' => [
            'Además de la vacunación oficial, muchos establecimientos suman vacunas complementarias '
                . 'del plan sanitario según la zona, la categoría de animales y los antecedentes del '
                . 'rodeo. Qué vacunas complementarias conviene aplicar y en qué momento del año es una '
                . 'decisión que conviene conversar con el veterinario, porque depende de cada '
                . 'establecimiento en particular.',
            'Aprovechar el día de manga para coordinar también otras tareas sanitarias (revisión '
                . 'general, control de parásitos) puede ahorrar una segunda jornada de encierre, '
                . 'siempre que el veterinario lo recomiende para tu caso.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cuándo es la vacunación oficial contra la aftosa?',
        'a' => 'Las fechas las fija el SENACSA y cambian en cada campaña. Conviene revisar el '
             . 'calendario sanitario vigente en las fuentes oficiales en lugar de guiarse por el año '
             . 'anterior.',
    ],
    [
        'q' => '¿Qué vacunas complementarias conviene aplicar?',
        'a' => 'Depende de la zona, la categoría de animales y los antecedentes sanitarios del '
             . 'establecimiento. Es una decisión que conviene conversar con tu veterinario.',
    ],
    [
        'q' => '¿Cómo hay que conservar las vacunas hasta el día de aplicación?',
        'a' => 'Según indica la etiqueta de cada producto, en general respetando la cadena de frío '
             . 'con conservadora y hielo, y evitando exponerlas al sol durante la jornada de trabajo.',
    ],
    [
        'q' => '¿Cuánto cuestan las vacunas?',
        'a' => 'El precio depende del producto, la marca y la cantidad de dosis. Mandanos por '
             . 'WhatsApp qué necesitás y te respondemos con el precio y el envío hasta tu localidad, '
             . 'sin compromiso.',
    ],
];

require ROOT_DIR . '/templates/article.php';
