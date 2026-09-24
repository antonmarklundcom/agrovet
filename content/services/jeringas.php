<?php
/**
 * Product page: jeringas veterinarias. Keywords: jeringas descartables,
 * jeringas automáticas / revólver, pistolas dosificadoras orales,
 * aplicadores pour-on, agujas por calibre.
 */

declare(strict_types=1);

return [
    'order'           => 45,
    'path'            => '/productos/jeringas-veterinarias/',
    'title'           => 'Jeringas veterinarias',
    'navLabel'        => 'Jeringas y dosificadores',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Jeringas veterinarias y dosificadores',
    'metaDescription' => 'Jeringas descartables y automáticas, pistolas dosificadoras y aplicadores '
                       . 'pour-on. Cotizá por WhatsApp sin costo y recibilo en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Jeringas veterinarias y dosificadores',
        'h2'      => 'Descartables, automáticas (revólver), pistolas orales y aplicadores pour-on.',
        'lead'    => 'Vacunar o desparasitar un lote grande con la herramienta equivocada duplica '
                   . 'el trabajo y las agujas gastadas suman riesgo sanitario. Contanos qué manejo '
                   . 'hacés y te cotizamos sin costo con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Jeringas descartables por mililitraje',
        'Jeringas automáticas (revólver) para aplicar varias dosis seguidas',
        'Pistolas dosificadoras orales para desparasitantes y otros líquidos',
        'Aplicadores pour-on para tratamientos de derrame sobre el lomo',
        'Agujas por calibre, según el producto y la vía de aplicación',
    ],
    'excludes' => [
        'Cambiá la aguja entre animales para no transmitir enfermedades por la sangre',
        'Elegí el calibre de aguja según el producto y la vía que indica la etiqueta',
        'Descartá las agujas usadas de forma segura, nunca sueltas en el corral o el galpón',
    ],
    'weNeed' => [
        'Si necesitás jeringas descartables, automáticas, pistola oral o aplicador pour-on',
        'El mililitraje o la capacidad que buscás',
        'Cuántas unidades necesitás',
        'La localidad a la que hay que enviarlas',
    ],
    'sections' => [
        [
            'h2'   => 'Elegir la herramienta según el trabajo de manga',
            'body' => [
                'Para vacunar unos pocos animales, una jeringa descartable alcanza. Pero cuando el '
                    . 'lote es grande, cambiar de jeringa animal por animal frena todo el trabajo de '
                    . 'manga. Ahí es donde la jeringa automática (revólver), que recarga sola desde '
                    . 'un frasco o mochila, ahorra tiempo real.',
                'Para desparasitantes orales, la pistola dosificadora permite fijar la cantidad y '
                    . 'repetirla en cada animal sin volver a medir. Los tratamientos pour-on, en '
                    . 'cambio, se aplican con un aplicador de derrame que reparte el producto sobre '
                    . 'el lomo en una pasada.',
            ],
            'items' => [
                ['title' => 'Lotes chicos', 'text' => 'Jeringa descartable, simple y suficiente.'],
                ['title' => 'Trabajo de manga', 'text' => 'Jeringa automática (revólver) para no perder tiempo recargando.'],
                ['title' => 'Desparasitación oral', 'text' => 'Pistola dosificadora para repetir la misma cantidad en cada animal.'],
            ],
        ],
        [
            'h2'   => 'Agujas y limpieza: lo que evita problemas después',
            'body' => [
                'El calibre de la aguja depende del producto (más espeso necesita aguja más gruesa) '
                    . 'y de la vía de aplicación que indica la etiqueta. Usar una aguja fina para un '
                    . 'producto viscoso puede espumar la dosis y afectar la aplicación correcta.',
                'Cambiar la aguja entre animales es la medida más simple para no transmitir '
                    . 'enfermedades por vía sanguínea en el trabajo de manga. Sumado a eso, limpiar '
                    . 'la jeringa después de cada uso y guardarla protegida del polvo alarga su vida '
                    . 'útil.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Jeringas, vacunas y antiparasitarios en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan las jeringas veterinarias?',
            'a' => 'Depende del tipo (descartable, automática, pistola oral o aplicador pour-on), '
                 . 'el mililitraje y la cantidad. Mandanos esos datos por WhatsApp y te respondemos '
                 . 'con el precio y el costo de envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué diferencia hay entre una jeringa descartable y una automática?',
            'a' => 'La descartable se usa una vez y se recarga a mano cada vez. La automática, '
                 . 'llamada revólver, se conecta a un frasco o mochila y recarga sola, lo que agiliza '
                 . 'mucho el trabajo con lotes grandes.',
        ],
        [
            'q' => '¿Para qué sirve la pistola dosificadora oral?',
            'a' => 'Sirve para aplicar desparasitantes u otros líquidos por boca, fijando la '
                 . 'cantidad exacta y repitiéndola en cada animal sin volver a medir cada vez.',
        ],
        [
            'q' => '¿Hay que cambiar la aguja entre animales?',
            'a' => 'Sí, siempre. Reutilizar la misma aguja entre animales distintos aumenta el '
                 . 'riesgo de transmitir enfermedades por vía sanguínea.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar jeringas', 'whatsappText' => ''],
    'related'   => ['vacunas-ganado', 'antiparasitarios-para-ganado', 'garrapaticidas'],
    'guides'    => [],
    'articles'  => [],
    'toolLinks' => [],
];
