<?php
declare(strict_types=1);

return [
    'order'           => 50,
    'path'            => '/productos/semillas/',
    'title'           => 'Semillas',
    'navLabel'        => 'Semillas',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Semillas de brachiaria y pasturas',
    'metaDescription' => 'Semillas de brachiaria, mombaza, gatton panic, maíz y sorgo forrajero, y '
                       . 'semillas de huerta. Cotizá por WhatsApp sin costo y recibilas en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Insumos de campo',
        'h1'      => 'Semillas de pasturas para ganadería',
        'h2'      => 'Brachiaria, mombaza, gatton panic, maíz y sorgo forrajero, y semillas de huerta.',
        'lead'    => 'Una pastura bien implantada es la base de la alimentación del rodeo durante el '
                   . 'año. Contanos qué pastura o cultivo forrajero necesitás y cuántos kilos, y te '
                   . 'cotizamos sin costo, con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Semillas de brachiaria para pasturas de campo alto',
        'Semillas de mombaza y tanzania (Megathyrsus maximus) para pasturas de alta producción',
        'Semillas de gatton panic para zonas más secas',
        'Semillas de maíz y sorgo forrajero para verdeo y reserva',
        'Semillas de huerta para autoconsumo y producción chica',
    ],
    'excludes' => [
        'Antes de comprar, revisá en la etiqueta el porcentaje de germinación y el valor cultural',
        'La cantidad de kilos por hectárea depende de la especie y del estado del suelo: consultá al agrónomo',
        'La época de siembra varía según la zona y la especie',
    ],
    'weNeed' => [
        'Qué especie o pastura buscás',
        'Cuántos kilos o bolsas necesitás',
        'Para qué uso: implantación de pastura, verdeo o huerta',
        'La localidad a la que hay que enviarlas',
    ],
    'sections' => [
        [
            'h2'   => 'Qué pastura conviene según el campo',
            'body' => [
                'La brachiaria es una de las pasturas más usadas para ganadería en Paraguay por su '
                    . 'adaptación a distintos tipos de suelo y su buena cobertura. La mombaza y la '
                    . 'tanzania (ambas Megathyrsus maximus) son pasturas de mayor producción de '
                    . 'forraje, pensadas para campos con mejor fertilidad o con algo de manejo.',
                'El gatton panic es una alternativa para zonas más secas o suelos de menor '
                    . 'fertilidad, con buena persistencia. Para reserva o verdeo de corte se usan '
                    . 'semillas de maíz y sorgo forrajero, que dan un forraje de rápido crecimiento '
                    . 'para complementar la pastura de base.',
            ],
            'items' => [
                ['title' => 'Brachiaria', 'text' => 'Pastura de base, adaptada a distintos tipos de campo.'],
                ['title' => 'Mombaza y tanzania', 'text' => 'Mayor producción de forraje en campos con mejor fertilidad.'],
                ['title' => 'Maíz y sorgo forrajero', 'text' => 'Para verdeo de corte y reserva, como complemento de la pastura.'],
            ],
        ],
        [
            'h2'   => 'Qué revisar en la etiqueta antes de comprar',
            'body' => [
                'La etiqueta de la bolsa indica el porcentaje de germinación y el valor cultural de '
                    . 'la semilla, que es lo que en definitiva va a nacer en el campo. Una semilla '
                    . 'más barata pero con bajo valor cultural puede salir más cara por hectárea si '
                    . 'hay que resembrar.',
                'También conviene mirar la fecha de análisis y el lote. Ante la duda sobre la '
                    . 'cantidad de kilos por hectárea o la época de siembra para tu zona, consultá al '
                    . 'agrónomo antes de sembrar.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Semillas, sal mineral y balanceados en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan las semillas de pastura?',
            'a' => 'El precio depende de la especie, la marca y la cantidad de kilos. Mandanos por '
                 . 'WhatsApp qué necesitás y te respondemos con el precio y el costo de envío hasta '
                 . 'tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué diferencia hay entre mombaza y brachiaria?',
            'a' => 'La brachiaria es más rústica y se adapta a distintos tipos de suelo. La mombaza '
                 . '(Megathyrsus maximus) produce más forraje pero pide campos con mejor fertilidad '
                 . 'o algo de manejo para rendir bien.',
        ],
        [
            'q' => '¿Cómo sé si la semilla es de buena calidad?',
            'a' => 'Revisá en la etiqueta el porcentaje de germinación y el valor cultural, además '
                 . 'de la fecha de análisis. Son los datos que indican cuánto de lo que comprás va a '
                 . 'nacer realmente en el campo.',
        ],
        [
            'q' => '¿Tienen semillas de sorgo forrajero para verdeo?',
            'a' => 'Sí, manejamos semillas de maíz y sorgo forrajero para verdeo de corte y reserva. '
                 . 'Contanos la cantidad de hectáreas y te cotizamos según los kilos que necesites.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar semillas', 'whatsappText' => ''],
    'related'   => ['sal-mineral', 'fertilizantes', 'balanceados'],
    'guides'    => ['brachiaria-brizantha'],
    'articles'  => [],
    'toolLinks' => [
        [
            'path'  => '/herramientas/calculadora-de-fertilizante/',
            'label' => 'Calculadora de fertilizante',
            'text'  => 'Estimá las bolsas de fertilizante que necesitás por hectárea para tu pastura.',
        ],
    ],
];
