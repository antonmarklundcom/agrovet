<?php
/**
 * Product page: vacunas para ganado. Keywords: vacunas para ganado,
 * clostridiales, carbunclo, rabia paresiante, vacunas reproductivas.
 */

declare(strict_types=1);

return [
    'order'           => 35,
    'path'            => '/productos/vacunas-para-ganado/',
    'title'           => 'Vacunas para ganado',
    'navLabel'        => 'Vacunas',
    'cluster'         => 'sanidad',
    'parent'          => null,
    'seoTitle'        => 'Vacunas para ganado: envío al país',
    'metaDescription' => 'Vacunas clostridiales, carbunclo, rabia paresiante y reproductivas para '
                       . 'ganado. Cotizá por WhatsApp sin costo, con cadena de frío hasta tu localidad.',
    'hero' => [
        'eyebrow' => 'Sanidad animal',
        'h1'      => 'Vacunas para ganado',
        'h2'      => 'Clostridiales, carbunclo, rabia paresiante y reproductivas, aplicadas por tu veterinario.',
        'lead'    => 'Un calendario sanitario ordenado evita pérdidas que ninguna otra inversión '
                   . 'recupera. Contanos qué vacunas necesitás y para cuántos animales, y te '
                   . 'cotizamos sin costo, siempre que la cadena de frío llegue hasta tu localidad.',
    ],
    'includes' => [
        'Vacunas clostridiales (mancha, gangrena y otras clostridiosis)',
        'Vacuna contra el carbunclo',
        'Vacuna antirrábica para rabia paresiante',
        'Vacunas reproductivas según el plan sanitario del establecimiento',
        'Cotización con el costo de envío hasta tu localidad, sujeto a cadena de frío',
    ],
    'excludes' => [
        'Solo enviamos vacunas cuando se puede sostener la cadena de frío hasta tu localidad; '
            . 'contanos la zona para confirmarlo antes de cotizar',
        'La aplicación debe hacerla tu veterinario, respetando el calendario y la etiqueta de cada producto',
        'Aftosa y brucelosis se manejan dentro de los programas oficiales del SENACSA; consultá '
            . 'con tu veterinario o la oficina zonal para esas campañas',
    ],
    'weNeed' => [
        'Qué vacunas necesitás (clostridiales, carbunclo, rabia, reproductivas)',
        'Cuántos animales hay que vacunar',
        'La localidad del establecimiento, para confirmar la cadena de frío',
        'Si tu veterinario ya definió el calendario o necesitás orientación',
    ],
    'sections' => [
        [
            'h2'   => 'Por qué el calendario sanitario no espera',
            'body' => [
                'Las enfermedades clostridiales, como la mancha y la gangrena, matan rápido y casi '
                    . 'siempre en los animales de mejor estado, porque se desarrollan en tejido '
                    . 'muscular sano. El carbunclo tiene el mismo perfil: aparece de golpe y el '
                    . 'margen para actuar es mínimo. La rabia paresiante, transmitida por el '
                    . 'murciélago hematófago, es otro riesgo constante en muchas zonas del país.',
                'Las vacunas reproductivas, por su parte, sostienen la fertilidad del rodeo y '
                    . 'bajan los abortos. Un plan armado con tu veterinario, según la zona y la '
                    . 'categoría de animales, rinde mucho más que vacunar sin calendario.',
            ],
            'items' => [
                ['title' => 'Terneros y recría', 'text' => 'Base clostridial temprana, según el plan de tu veterinario.'],
                ['title' => 'Rodeo de cría', 'text' => 'Vacunas reproductivas en las ventanas que marca el ciclo.'],
                ['title' => 'Zonas con murciélago', 'text' => 'Antirrábica programada contra la rabia paresiante.'],
            ],
        ],
        [
            'h2'   => 'Por qué la cadena de frío es innegociable',
            'body' => [
                'Una vacuna que perdió la cadena de frío puede quedar sin efecto aunque se aplique '
                    . 'igual, y ahí el gasto y el riesgo quedan sin la protección esperada. Por eso '
                    . 'solo despachamos vacunas cuando podemos sostener el frío hasta tu localidad; '
                    . 'si la zona no lo permite, te lo decimos antes de cotizar en lugar de mandar '
                    . 'algo que puede llegar comprometido.',
                'Aftosa y brucelosis se trabajan dentro de los programas oficiales del SENACSA, con '
                    . 'sus propios calendarios y controles; para esas campañas la referencia es tu '
                    . 'veterinario o la oficina zonal correspondiente.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Todo en un mensaje', 'text' => 'Vacunas, sal mineral y vitaminas en la misma cotización.'],
        ['title' => 'Envío a todo el país', 'text' => 'Despachamos donde la cadena de frío lo permita, del Chaco a Itapúa.'],
        ['title' => 'Sin compromiso', 'text' => 'Te pasamos precio y envío; comprás solo si te sirve.'],
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuestan las vacunas para ganado?',
            'a' => 'Depende de la vacuna, el laboratorio y la cantidad de dosis. Mandanos esos datos '
                 . 'por WhatsApp y te respondemos con el precio y el costo de envío hasta tu '
                 . 'localidad, sin compromiso.',
        ],
        [
            'q' => '¿Envían vacunas a todo Paraguay?',
            'a' => 'Enviamos donde se pueda sostener la cadena de frío hasta el destino. Contanos '
                 . 'tu localidad y te confirmamos si el envío es posible antes de avanzar con la '
                 . 'cotización.',
        ],
        [
            'q' => '¿Quién aplica las vacunas?',
            'a' => 'Las vacunas las tiene que aplicar tu veterinario, siguiendo el calendario '
                 . 'sanitario y la etiqueta de cada producto. Nosotros te cotizamos y enviamos las '
                 . 'dosis, no reemplazamos la atención veterinaria.',
        ],
        [
            'q' => '¿Ustedes gestionan las campañas de aftosa y brucelosis?',
            'a' => 'No, esas campañas dependen de los programas oficiales del SENACSA. Nosotros '
                 . 'cotizamos vacunas clostridiales, carbunclo, rabia paresiante y reproductivas '
                 . 'para tu plan sanitario particular.',
        ],
        [
            'q' => '¿Qué necesito para pedir una cotización?',
            'a' => 'Decinos qué vacunas necesitás, para cuántos animales y en qué localidad está el '
                 . 'establecimiento, y te respondemos con precio y envío según la cadena de frío.',
        ],
    ],
    'cta'       => ['label' => 'Cotizar vacunas', 'whatsappText' => ''],
    'related'   => ['antiparasitarios-para-ganado', 'sal-mineral', 'veterinario-rural'],
    'guides'    => ['calendario-sanitario-bovino'],
    'articles'  => ['preparar-hacienda-para-vacunacion'],
    'toolLinks' => [],
];
