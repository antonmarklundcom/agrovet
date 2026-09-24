<?php
/**
 * Product page for herbicidas. Selective and total, "mata yuyo" colloquial term.
 * Keywords: herbicida (590), mata yuyo (390), tordon herbicida (260), dicamba
 * herbicida (110), herbicida 2 4 d (90), herbicida para hoja ancha/fina (90/70),
 * herbicida para pasto (50), basagran (70), dual gold (50).
 */

declare(strict_types=1);

return [
    'order'           => 31,
    'path'            => '/productos/herbicidas/',
    'title'           => 'Herbicidas',
    'navLabel'        => 'Herbicidas',
    'cluster'         => 'campo',
    'parent'          => null,
    'seoTitle'        => 'Herbicidas: mata yuyo y envío a Paraguay',
    'metaDescription' => 'Herbicidas selectivos y totales para pasturas, cultivos y callejones: mata '
                       . 'yuyo, hoja ancha, hoja fina. Cotizá por WhatsApp con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Herbicidas',
        'h1'      => 'Herbicidas para pasturas, cultivos y callejones',
        'h2'      => 'Selectivos y totales, para hoja ancha, hoja fina o mata yuyo en general, con envío a todo el país.',
        'lead'    => 'Cada maleza pide un herbicida distinto: no es lo mismo bajar un yuyo en medio de la '
                   . 'pastura que limpiar un callejón entero. Contanos qué maleza tenés y dónde, y te '
                   . 'cotizamos el producto que corresponde, sin costo y sin compromiso.',
    ],
    'includes' => [
        'Herbicidas selectivos para usar dentro de la pastura sin dañar el pasto',
        'Herbicidas totales (no selectivos) para callejones, alambrados y barbecho',
        'Productos para hoja ancha, para hoja fina o de amplio espectro',
        'Cotización con el costo de envío hasta tu localidad',
    ],
    'excludes' => [
        'Leé siempre la etiqueta antes de aplicar: producto, mezcla y tiempo de reingreso al lote',
        'Usá el equipo de protección que indica la etiqueta (guantes, antiparras, protección respiratoria)',
        'Aplicá dentro de lo registrado por el SENAVE para el cultivo o la pastura',
        'No damos dosis por hectárea: seguí siempre la que indica la etiqueta del producto',
    ],
    'weNeed' => [
        'Qué maleza querés controlar (mata yuyo, hoja ancha, hoja fina, gramínea)',
        'Dónde la tenés: dentro de la pastura, en un cultivo o en callejón/patio',
        'Si buscás un producto puntual o el que le convenga a tu caso',
        'La localidad a la que hay que enviarlo',
    ],
    'sections' => [
        [
            'h2'   => 'Herbicida selectivo o total: cuál conviene según dónde apliques',
            'body' => [
                'Un herbicida selectivo controla ciertas malezas (por ejemplo hoja ancha) sin afectar el '
                    . 'pasto, por eso es el que se usa para el control de malezas en pasturas ya '
                    . 'implantadas. Un herbicida total, como el glifosato, seca todo lo verde que toca, '
                    . 'así que se reserva para callejones, alambrados o el barbecho antes de sembrar.',
                'En el campo se habla de "mata yuyo" para cualquiera de los dos, según el caso: a veces es '
                    . 'un producto selectivo para sacar el yuyo de la pastura sin tocar el pasto, y a veces '
                    . 'es un total para limpiar donde no importa dejar nada verde. Contanos la situación y '
                    . 'te orientamos sobre cuál corresponde.',
            ],
            'items' => [
                ['title' => 'Hoja ancha', 'text' => 'Yuyos de hoja ancha dentro de la pastura, sin afectar el pasto de hoja fina.'],
                ['title' => 'Hoja fina', 'text' => 'Gramíneas invasoras que compiten con la pastura implantada.'],
                ['title' => 'Total / no selectivo', 'text' => 'Control completo en callejones, alambrados y antes de la siembra.'],
            ],
        ],
        [
            'h2'   => 'Si buscás un producto puntual',
            'body' => [
                'Si ya sabés qué producto necesitás, contanos el nombre y vemos qué te podemos conseguir. '
                    . 'Se consultan seguido productos como Tordon (picloram + 2,4-D) para malezas leñosas '
                    . 'y renovales, Dicamba y 2,4-D para hoja ancha en pasturas, Basagran para hoja ancha '
                    . 'en algunos cultivos, y Dual Gold como herbicida residual preemergente.',
                'No garantizamos stock de una marca puntual: te confirmamos disponibilidad y precio en la '
                    . 'cotización. Si el producto es de uso restringido, seguí siempre lo que indica su '
                    . 'etiqueta y el registro del SENAVE.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Herbicidas junto con glifosato, fertilizante o semillas en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos a la localidad que nos indiques, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta un herbicida?',
            'a' => 'El precio depende del producto, la concentración, la marca y la cantidad. Mandanos '
                 . 'por WhatsApp qué maleza querés controlar y dónde, y te respondemos con el precio y el '
                 . 'envío hasta tu localidad, sin compromiso.',
        ],
        [
            'q' => '¿Qué herbicida se usa para "mata yuyo" en la pastura?',
            'a' => 'Depende de la maleza y de si es hoja ancha u hoja fina; en general se usa un '
                 . 'selectivo que no dañe el pasto. Contanos qué yuyo tenés y te orientamos sobre qué '
                 . 'producto corresponde.',
        ],
        [
            'q' => '¿Cuál es la diferencia con el glifosato?',
            'a' => 'El glifosato es un herbicida total: seca cualquier planta verde, incluido el pasto. '
                 . 'Los herbicidas selectivos controlan cierto tipo de maleza sin afectar la pastura. '
                 . 'Mirá también nuestra página de glifosato.',
        ],
        [
            'q' => '¿Tienen Tordon, Dicamba o 2,4-D?',
            'a' => 'Consultanos y vemos qué presentación te podemos conseguir; no garantizamos stock de '
                 . 'una marca puntual, pero te confirmamos disponibilidad y precio en la cotización.',
        ],
        [
            'q' => '¿Hacen envíos al interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te los '
                 . 'pasamos en la cotización.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar herbicida', 'whatsappText' => ''],
    'related'   => ['glifosato', 'fertilizantes', 'semillas'],
    'guides'    => ['control-de-malezas-en-pasturas', 'tordon-herbicida'],
    'articles'  => [],
    'toolLinks' => [],
];
