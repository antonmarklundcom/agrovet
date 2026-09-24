<?php
/**
 * Product page for glifosato. Total/no selectivo herbicide, sold by bidón.
 * Keywords: glifosato (1.000/mes), glifosato precio (70), herbicida glifosato (40).
 */

declare(strict_types=1);

return [
    'order'           => 30,
    'path'            => '/productos/glifosato/',
    'title'           => 'Glifosato',
    'navLabel'        => 'Glifosato',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Glifosato: precio y envío a Paraguay',
    'metaDescription' => 'Glifosato en bidón para control total de malezas en potreros, callejones y '
                       . 'lotes de siembra. Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Herbicidas',
        'h1'      => 'Glifosato para control total de malezas',
        'h2'      => 'Herbicida no selectivo en bidón, con presentaciones para el establecimiento y envío a todo el país.',
        'lead'    => 'Antes de sembrar, limpiar un callejón o preparar una picada, hace falta un herbicida '
                   . 'que baje todo lo verde. Contanos qué litraje de glifosato necesitás y te cotizamos '
                   . 'sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Glifosato en bidón de distintos litrajes',
        'Presentaciones para uso doméstico y para el lote grande',
        'Consulta sobre concentración y formulación disponible',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Es un herbicida no selectivo: seca toda planta verde que toque, no solo la maleza',
        'Leé siempre la etiqueta antes de aplicar: dosis, mezcla y tiempo de reingreso al lote',
        'Usá el equipo de protección que indica la etiqueta (guantes, antiparras, protección respiratoria)',
        'Aplicalo dentro de lo registrado por el SENAVE para el cultivo o uso previsto',
    ],
    'weNeed' => [
        'Cuántos litros o bidones necesitás',
        'Para qué vas a usarlo: lote de siembra, callejón, potrero o patio',
        'Si ya tenés una marca o formulación en mente',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Qué es el glifosato y cuándo se usa',
            'body' => [
                'El glifosato es un herbicida sistémico y no selectivo: lo absorbe la hoja y baja hasta la '
                    . 'raíz, por eso seca la planta completa y no solo la parte verde. Es la herramienta '
                    . 'más usada para dejar el lote limpio antes de la siembra directa, para el barbecho '
                    . 'químico y para controlar rebrotes en potreros que se van a resembrar.',
                'También se usa fuera del área de cultivo: callejones, alambrados, patios y galpones, '
                    . 'donde no importa afectar el pasto porque no se busca dejar cobertura verde. Al ser '
                    . 'no selectivo, no sirve para limpiar malezas dentro de una pastura en producción sin '
                    . 'dañar también el pasto.',
            ],
            'items' => [
                ['title' => 'Barbecho antes de sembrar', 'text' => 'Deja el lote limpio para que el cultivo arranque sin competencia de malezas.'],
                ['title' => 'Callejones y alambrados', 'text' => 'Control total donde no hace falta cuidar el pasto.'],
                ['title' => 'Rebrotes y lotes a resembrar', 'text' => 'Baja rebrotes de pasturas viejas antes de voltear el lote.'],
            ],
        ],
        [
            'h2'   => 'Presentaciones y cómo pedirlo',
            'body' => [
                'El glifosato se vende en bidón, en distintos litrajes según lo que necesites: desde un '
                    . 'bidón chico para el patio o el alambrado hasta presentaciones más grandes para el '
                    . 'lote de producción. El precio varía según la concentración, la marca y la cantidad, '
                    . 'por eso no lo publicamos: mandanos el dato y te lo pasamos junto con el envío.',
                'Si buscás un herbicida glifosato de una marca en particular, contanos y vemos qué '
                    . 'presentación te podemos conseguir. Siempre respetá lo que indica la etiqueta del '
                    . 'producto que finalmente recibís, porque la dosis y el uso registrado varían entre '
                    . 'formulaciones.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Glifosato junto con otros herbicidas o insumos del lote en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el glifosato?',
            'a' => 'El precio depende de la concentración, la marca y la cantidad de litros. Mandanos por '
                 . 'WhatsApp qué necesitás y te respondemos con el precio y el costo de envío hasta tu '
                 . 'localidad, sin compromiso.',
        ],
        [
            'q' => '¿El glifosato mata cualquier maleza?',
            'a' => 'Es un herbicida total: seca la mayoría de las plantas verdes que toca, hoja ancha y '
                 . 'hoja fina. Algunas malezas resistentes necesitan otro producto o una mezcla; '
                 . 'consultanos y te orientamos.',
        ],
        [
            'q' => '¿Sirve para limpiar una pastura en producción?',
            'a' => 'No, porque al ser no selectivo también seca el pasto. Para controlar malezas dentro '
                 . 'de una pastura en producción se usa un herbicida selectivo; mirá nuestra página de '
                 . 'herbicidas o la guía de control de malezas en pasturas.',
        ],
        [
            'q' => '¿En qué presentaciones viene?',
            'a' => 'Se vende en bidón, en distintos litrajes. Contanos cuánto necesitás y para qué uso, '
                 . 'y te cotizamos la presentación que corresponde.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar glifosato', 'whatsappText' => ''],
    'related'   => ['herbicidas', 'fertilizantes', 'semillas'],
    'guides'    => ['control-de-malezas-en-pasturas'],
    'articles'  => [],
    'toolLinks' => [],
];
