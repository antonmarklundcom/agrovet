<?php
declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/productos/sal-mineral-para-ganado/',
    'title'           => 'Sal mineral',
    'navLabel'        => 'Sal mineral',
    'cluster'         => 'nutricion',
    'parent'          => null,
    'seoTitle'        => 'Sal mineral para ganado en Paraguay',
    'metaDescription' => 'Sal mineral y sal proteica para ganado, con fósforo para pasturas pobres. '
                       . 'Cotizá por WhatsApp sin costo y recibila en todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Nutrición animal',
        'h1'      => 'Sal mineral para ganado',
        'h2'      => 'Sal mineral o sal proteica, en bolsa o a granel, con envío a todo Paraguay.',
        'lead'    => 'Una pastura que se ve verde no siempre alcanza en minerales: el fósforo es el '
                   . 'primero en faltar, sobre todo en el Chaco y en la época seca. Mandanos qué '
                   . 'categoría de animal tenés y cuántos kilos necesitás, y te cotizamos sin costo '
                   . 'con el envío hasta tu localidad.',
    ],
    'includes' => [
        'Sal mineral para mantenimiento de rodeo',
        'Sal proteica para bovinos en épocas de escasez de pasto',
        'Presentaciones en bolsa o a granel según el volumen del establecimiento',
        'Sal mineral para vacas de cría, engorde o tambo',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'La sal mineral es un suplemento, no reemplaza el tratamiento veterinario ante síntomas '
            . 'de carencia severa (huesos frágiles, infertilidad, retraso de crecimiento)',
        'Guardala bajo techo: la lluvia lava los minerales y el animal deja de consumirla bien',
        'Usá comederos o saleros protegidos de la lluvia y el barro',
        'Ante señales de carencia marcada, consultá al veterinario antes de cambiar el plan mineral',
    ],
    'weNeed' => [
        'Si buscás sal mineral o sal proteica',
        'La categoría de animal: cría, engorde, tambo o recría',
        'Si la necesitás en bolsa o a granel',
        'La localidad a la que hay que enviarla',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué falta fósforo en las pasturas paraguayas',
            'body' => [
                'Muchos suelos de pastura en Paraguay, y en particular en el Chaco, son naturalmente '
                    . 'pobres en fósforo. En época seca, cuando el pasto crece menos y pierde calidad, '
                    . 'esa carencia se nota más: vacas que pierden condición corporal, terneros que no '
                    . 'crecen al ritmo esperado y problemas de fertilidad en el rodeo.',
                'La sal mineral corrige esa base todo el año. En los meses de menos pasto, sumar una '
                    . 'sal proteica ayuda a sostener el consumo de forraje seco y a que la vaca no '
                    . 'pierda peso de golpe. Son dos herramientas distintas para dos momentos distintos '
                    . 'del año.',
            ],
            'items' => [
                ['title' => 'Chaco y época seca', 'text' => 'Los suelos con menos fósforo son donde la sal mineral hace más diferencia.'],
                ['title' => 'Vacas de cría', 'text' => 'La carencia mineral golpea primero la fertilidad y el peso al destete.'],
                ['title' => 'Vacas flacas', 'text' => 'Cuando el pasto seco no alcanza, la sal proteica sostiene el consumo.'],
            ],
        ],
        [
            'h2'   => 'Sal mineral o sal proteica: cuál conviene',
            'body' => [
                'La sal mineral aporta los minerales de base (fósforo, calcio, sodio, entre otros) '
                    . 'para el mantenimiento del rodeo durante todo el año, con buena disponibilidad '
                    . 'de pasto. Se ofrece a libre consumo en comederos bajo techo.',
                'La sal proteica suma una fuente de proteína al mineral, pensada para los meses de '
                    . 'escasez, cuando el pasto seco o de baja calidad no cubre las necesidades del '
                    . 'animal. Se usa como complemento del forraje disponible, no como reemplazo. '
                    . 'Para elegir entre una y otra, contanos la época del año y la condición del '
                    . 'rodeo y te orientamos en la cotización.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Sal mineral, curabichera y antiparasitarios en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta la sal mineral para ganado?',
            'a' => 'El precio depende de la presentación, la marca y la cantidad. Mandanos por '
                 . 'WhatsApp la categoría de animal y los kilos que necesitás, y te respondemos con '
                 . 'el precio y el costo de envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Cuál es la diferencia entre sal mineral y sal proteica?',
            'a' => 'La sal mineral cubre los minerales de mantenimiento todo el año. La sal proteica '
                 . 'suma proteína y se usa en los meses de menos pasto, para que el animal no pierda '
                 . 'condición cuando el forraje disponible es escaso.',
        ],
        [
            'q' => '¿Sirve para vacas flacas o con poca condición corporal?',
            'a' => 'La sal proteica ayuda a sostener el consumo cuando el pasto es escaso o seco, pero '
                 . 'si la pérdida de peso es marcada o hay otros síntomas, consultá al veterinario '
                 . 'antes de armar el plan de suplementación.',
        ],
        [
            'q' => '¿Cuánta sal mineral necesita cada animal?',
            'a' => 'La cantidad recomendada figura en la etiqueta de cada producto y varía según la '
                 . 'marca y la categoría del animal. Seguila como guía general y consultá a tu '
                 . 'veterinario para ajustar el plan de tu establecimiento.',
        ],
        [
            'q' => '¿Cómo hay que ofrecerla para que no se pierda?',
            'a' => 'Conviene usar comederos o saleros bajo techo, protegidos de la lluvia directa; '
                 . 'la humedad lava los minerales y el animal la consume peor o deja de comerla.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar sal mineral', 'whatsappText' => ''],
    'related'   => ['balanceados', 'antiparasitarios-para-ganado', 'curabichera'],
    'guides'    => ['sal-mineral-para-ganado'],
    'articles'  => ['epoca-seca-sal-mineral'],
    'toolLinks' => [],
];
