<?php
/**
 * Article body for content/blog/temporada-de-garrapatas.php.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'temporada-de-garrapatas';

$sections = [
    [
        'h2'   => 'Por qué las garrapatas aumentan en primavera y verano',
        'body' => [
            'El ciclo de la garrapata del bovino se acelera con el calor y la humedad: los huevos '
                . 'eclosionan más rápido y las larvas encuentran más chance de subir a un animal y '
                . 'completar su desarrollo. Por eso, en la transición de primavera a verano la carga '
                . 'de garrapatas en el rodeo suele subir de forma notoria, sobre todo en potreros con '
                . 'pasto alto o poco rotados.',
            'Un rodeo con muchas garrapatas no solo pierde sangre y peso: cada garrapata es también '
                . 'una posible vía de entrada de enfermedades que se transmiten por su picadura. Por '
                . 'eso conviene pensar el control antes de que la carga se dispare, no cuando ya se ve '
                . 'a simple vista en el cuero de los animales.',
        ],
    ],
    [
        'h2'   => 'Qué significa un control estratégico',
        'body' => [
            'Controlar de forma estratégica significa planificar los tratamientos según el momento '
                . 'del año y el ciclo de la garrapata, en lugar de tratar solo cuando ya se nota la '
                . 'infestación. Un plan pensado con anticipación reduce la carga general del campo y '
                . 'evita que el problema se acumule potrero por potrero.',
            'La elección del garrapaticida (baño, aspersión o pour-on, según el producto y la '
                . 'categoría de animales) depende de la carga, la infraestructura disponible y la '
                . 'época del año. Contanos cómo es tu establecimiento y te ayudamos a definir qué '
                . 'presentación te conviene cotizar.',
        ],
        'items' => [],
    ],
    [
        'h2'   => 'Rotar familias químicas para evitar resistencia',
        'body' => [
            'Usar siempre el mismo tipo de garrapaticida, campaña tras campaña, favorece que aparezcan '
                . 'garrapatas resistentes a ese producto. Rotar entre distintas familias químicas a lo '
                . 'largo del año, siguiendo siempre lo que indica la etiqueta de cada producto, es una '
                . 'de las formas más simples de sostener la eficacia del control en el tiempo.',
        ],
        'items' => [
            ['title' => 'No repetir siempre el mismo principio activo', 'text' => 'Alternar entre familias reduce la presión de selección sobre la garrapata.'],
            ['title' => 'Respetar la etiqueta', 'text' => 'Dosis, dilución y frecuencia las indica siempre el producto, nunca a ojo.'],
            ['title' => 'Consultar al veterinario', 'text' => 'Ante dudas sobre qué rotar o si ya hay resistencia instalada, es quien mejor puede orientar.'],
        ],
    ],
    [
        'h2'   => 'Tristeza parasitaria: por qué el control de garrapatas importa más allá de la piel',
        'body' => [
            'La tristeza parasitaria es el nombre que se le da al conjunto de enfermedades que se '
                . 'transmiten a través de la picadura de la garrapata y que pueden afectar seriamente '
                . 'al animal, sobre todo cuando entra hacienda de zonas con distinta exposición previa. '
                . 'Mantener la carga de garrapatas baja es una de las formas de reducir ese riesgo.',
            'No se trata de eliminar por completo la garrapata del campo, algo poco realista, sino de '
                . 'mantener la carga en un nivel que no comprometa la salud ni la producción del rodeo. '
                . 'Un plan sostenido en el tiempo rinde más que un tratamiento único y a destiempo.',
        ],
    ],
    [
        'h2'   => 'Cuándo llamar al veterinario',
        'body' => [
            'Si a pesar del tratamiento la carga de garrapatas sigue alta, si aparecen animales '
                . 'decaídos, con fiebre, pálidos o que dejan de comer, o si hay sospecha de tristeza '
                . 'parasitaria en hacienda recién ingresada, es momento de consultar al veterinario. '
                . 'Un diagnóstico a tiempo cambia el resultado del tratamiento.',
            'Ante un cuadro grave y repentino, la recomendación es acudir directamente a la clínica '
                . 'veterinaria más cercana.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Cuándo empieza la temporada de garrapatas en Paraguay?',
        'a' => 'Sube con el calor y la humedad, en general desde la primavera y a lo largo del '
             . 'verano. La intensidad varía según la zona y el año, así que conviene guiarse por el '
             . 'estado del propio potrero y por el calendario sanitario vigente del SENACSA.',
    ],
    [
        'q' => '¿Qué garrapaticida conviene usar?',
        'a' => 'Depende de la carga de garrapatas, la infraestructura disponible (baño, aspersión) y '
             . 'la categoría de animales. Contanos tu situación por WhatsApp y te cotizamos sin costo.',
    ],
    [
        'q' => '¿Por qué hay que rotar el garrapaticida?',
        'a' => 'Usar siempre la misma familia química favorece que aparezcan garrapatas resistentes. '
             . 'Rotar entre familias distintas, respetando la etiqueta de cada producto, ayuda a '
             . 'sostener la eficacia del control con el tiempo.',
    ],
    [
        'q' => '¿Cuánto cuesta el garrapaticida?',
        'a' => 'El precio depende de la marca, la presentación y la cantidad. Mandanos qué necesitás '
             . 'y te respondemos con el precio y el costo de envío hasta tu localidad, sin compromiso.',
    ],
];

require ROOT_DIR . '/templates/article.php';
