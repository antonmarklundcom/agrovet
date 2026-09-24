<?php
/**
 * Product page: garrapaticida para ganado. Keywords: garrapaticida para
 * ganado, garrapata bovina, baño garrapaticida, pour-on, endectocidas.
 */

declare(strict_types=1);

return [
    'order'           => 23,
    'path'            => '/productos/garrapaticida-para-ganado/',
    'title'           => 'Garrapaticida para ganado',
    'navLabel'        => 'Garrapaticidas',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Garrapaticida para ganado: envío al país',
    'metaDescription' => 'Garrapaticida en baño, pour-on e inyectable para la garrapata bovina. '
                       . 'Cotizá por WhatsApp sin costo y recibilo con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Garrapaticida para ganado',
        'h2'      => 'Baño de inmersión o aspersión, pour-on e inyectables, para cortar la garrapata bovina.',
        'lead'    => 'La garrapata baja producción, daña el cuero y puede traer tristeza parasitaria. '
                   . 'Contanos cuántos animales tenés y qué forma de aplicación manejás en el '
                   . 'establecimiento, y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Garrapaticidas para baño de inmersión o aspersión',
        'Pour-on de aplicación sobre el lomo del animal',
        'Inyectables (endectocidas) con acción sobre garrapata y otros parásitos',
        'Distintas familias químicas para rotar y evitar resistencia',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Respetá el tiempo de retiro que indica la etiqueta antes de faenar o vender leche',
        'Rotá familias químicas entre tratamientos para no favorecer garrapatas resistentes',
        'Ante mortandad, fiebre o síntomas de tristeza parasitaria en el rodeo, consultá al veterinario',
    ],
    'weNeed' => [
        'Cuántos animales hay que tratar',
        'Si trabajás con baño (inmersión o aspersión), pour-on o inyectable',
        'Qué producto usaste en el tratamiento anterior, para rotar la familia química',
        'La localidad del establecimiento, para calcular el envío',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué la garrapata bovina cuesta más de lo que parece',
            'body' => [
                'Cada garrapata que se prende le saca sangre al animal, y en una infestación alta '
                    . 'eso se traduce en menos kilos y menos leche. El cuero queda marcado por las '
                    . 'picaduras, lo que baja su valor, y la garrapata puede transmitir los agentes '
                    . 'de la tristeza parasitaria, un riesgo real sobre todo en animales que entran '
                    . 'a una zona con carga alta por primera vez.',
                'El control funciona mejor cuando se ajusta a la carga de garrapata del '
                    . 'establecimiento y no se repite siempre el mismo producto, porque el uso '
                    . 'continuo de una sola familia química termina generando resistencia.',
            ],
            'items' => [
                ['title' => 'Rodeo de cría', 'text' => 'Tratamientos programados según la carga de la época.'],
                ['title' => 'Animales de compra', 'text' => 'Revisar y tratar antes de mezclar con el rodeo propio.'],
                ['title' => 'Zonas de alta carga', 'text' => 'Rotar familias químicas para sostener la eficacia.'],
            ],
        ],
        [
            'h2'   => 'Baño, pour-on o inyectable: cómo elegir',
            'body' => [
                'El baño de inmersión o aspersión cubre todo el cuerpo del animal de una sola vez y '
                    . 'es habitual cuando se trata un lote grande por la manga. El pour-on se aplica '
                    . 'sobre el lomo, es más rápido por cabeza y evita mojar todo el corral, aunque '
                    . 'conviene revisar que llegue bien a orejas y entrepiernas.',
                'El inyectable (endectocida) trata garrapata junto con otros parásitos internos y '
                    . 'externos en una sola aplicación, útil cuando se combinan objetivos en el mismo '
                    . 'manejo. Seguí siempre la etiqueta para la dosis y el tiempo de retiro antes de '
                    . 'faenar o vender leche.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Garrapaticida, antiparasitarios y sal mineral en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el garrapaticida para ganado?',
            'a' => 'Depende del principio activo, la presentación (baño, pour-on o inyectable) y la '
                 . 'cantidad de animales. Mandanos esos datos por WhatsApp y te respondemos con el '
                 . 'precio y el costo de envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Por qué hay que rotar el garrapaticida?',
            'a' => 'Usar siempre la misma familia química favorece que sobrevivan las garrapatas '
                 . 'más resistentes a ese producto. Rotar entre familias distintas ayuda a sostener '
                 . 'la eficacia del tratamiento en el tiempo.',
        ],
        [
            'q' => '¿Baño, pour-on o inyectable, cuál conviene?',
            'a' => 'Depende del volumen de animales y de la infraestructura del establecimiento. '
                 . 'Contanos cómo trabajás habitualmente y te orientamos con las opciones que tenemos '
                 . 'para cotizar.',
        ],
        [
            'q' => '¿Qué es la tristeza parasitaria?',
            'a' => 'Es una enfermedad transmitida por la garrapata que puede afectar a animales que '
                 . 'no tuvieron contacto previo con zonas de alta carga. Ante fiebre, decaimiento o '
                 . 'mortandad en el rodeo, consultá al veterinario cuanto antes.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar garrapaticida', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-ganado', 'ivermectina', 'sal-mineral'],
    'guides'    => ['garrapata-en-bovinos'],
    'articles'  => ['temporada-de-garrapatas'],
    'toolLinks' => [],
];
