<?php
/**
 * Vet-coordination page. We do not have our own clinic, own vets, 24 h
 * availability or an address: we take symptoms + location by WhatsApp and
 * answer with the vet-attention options available in that zone. Keywords:
 * veterinaria (8.100), veterinario (8.100), veterinario cerca de mi (14.800),
 * clínica veterinaria (1.000), veterinario 24 horas (720+480+480), consulta
 * veterinaria (260), veterinaria cerca (260), hospital veterinario (170),
 * veterinario urgencias (70).
 */

declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/veterinaria/',
    'title'           => 'Veterinaria',
    'navLabel'        => 'Veterinaria',
    'cluster'         => 'veterinaria',
    'parent'          => null,
    'seoTitle'        => 'Veterinaria cerca de tu zona por WhatsApp',
    'metaDescription' => 'Contanos qué le pasa a tu animal y en qué zona estás: te respondemos por '
                       . 'WhatsApp con las opciones de veterinaria disponibles cerca tuyo, sin costo.',
    'hero' => [
        'eyebrow' => 'Atención veterinaria',
        'h1'      => 'Veterinaria: te conectamos con atención cerca de tu zona',
        'h2'      => 'Contanos los síntomas y dónde estás; te respondemos por WhatsApp con las '
                    . 'opciones de veterinario cerca de vos.',
        'lead'    => 'Cuando el animal no come, está decaído o tiene una herida, perder tiempo '
                   . 'buscando es lo que menos conviene. Mandanos qué le pasa y tu localidad y te '
                   . 'pasamos por WhatsApp las opciones de atención veterinaria en tu zona, sin costo.',
    ],
    'includes' => [
        'Recepción de tu consulta por WhatsApp, con síntomas y ubicación',
        'Orientación sobre qué tipo de atención veterinaria corresponde',
        'Opciones de consulta veterinaria disponibles en tu zona',
        'Seguimiento del caso hasta que quede conectado con atención',
    ],
    'excludes' => [
        'Si es una emergencia grave, acudí a la clínica veterinaria más cercana ahora mismo, '
            . 'no esperes la respuesta por WhatsApp',
        'No somos una clínica veterinaria ni tenemos veterinarios propios ni guardia 24 horas: '
            . 'coordinamos con opciones de atención en tu zona',
        'No damos diagnóstico ni indicamos tratamiento por WhatsApp; eso lo define el '
            . 'veterinario que te atienda',
    ],
    'weNeed' => [
        'Qué le está pasando al animal (síntomas, desde cuándo)',
        'Especie y edad aproximada',
        'La localidad o zona donde estás',
        'Un número de WhatsApp para responderte',
    ],
    'sections' => [
        [
            'h2'   => 'Señales de que tu mascota necesita un veterinario ya',
            'body' => [
                'Hay señales que no conviene dejar pasar: que el animal no coma o no tome agua, '
                    . 'vómitos repetidos, decaimiento marcado, heridas abiertas o que no dejan de '
                    . 'sangrar, y un parto que se complica y no avanza. En cualquiera de estos casos '
                    . 'el tiempo importa.',
                'Otras veces la necesidad es menos urgente pero igual real: una vacuna que venció, '
                    . 'un chequeo antes de un viaje, una cojera que no mejora. Para cualquiera de los '
                    . 'dos casos, contanos la situación y te orientamos con las opciones disponibles '
                    . 'en tu zona.',
            ],
            'items' => [
                ['title' => 'No come o está decaído', 'text' => 'Si pasan más de uno o dos días sin comer, conviene consultar sin esperar.'],
                ['title' => 'Vómitos o diarrea', 'text' => 'Si se repiten o el animal se deshidrata, buscá atención veterinaria pronto.'],
                ['title' => 'Herida o parto complicado', 'text' => 'Sangrado que no para o un parto trabado son motivo de urgencia.'],
            ],
        ],
        [
            'h2'   => 'Cómo te conectamos con un veterinario cerca de vos',
            'body' => [
                'No tenemos clínica ni veterinarios propios: coordinamos. Nos escribís por WhatsApp '
                    . 'contando qué le pasa al animal y en qué localidad estás, y buscamos las '
                    . 'opciones de atención veterinaria disponibles en esa zona, ya sea consulta, '
                    . 'clínica veterinaria u hospital veterinario según lo que necesites.',
                'Te respondemos con esas opciones para que elijas y coordines la atención vos '
                    . 'mismo. Si mientras tanto el cuadro empeora, no esperes: llevá al animal a la '
                    . 'clínica veterinaria más cercana.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Un solo mensaje', 'text' => 'Contás los síntomas y tu zona una sola vez, por WhatsApp.'],
        ['title' => 'Opciones de tu zona', 'text' => 'Te pasamos la atención veterinaria disponible cerca tuyo.'],
        ['title' => 'Sin costo', 'text' => 'Responder tu consulta y orientarte no tiene cargo.'],
    ],
    'faq' => [
        [
            'q' => '¿Tienen veterinario 24 horas?',
            'a' => 'No tenemos guardia propia. Te contamos qué opciones de atención veterinaria '
                 . 'urgente hay disponibles en tu zona según el horario en que nos escribas. Si es '
                 . 'grave, andá directamente a la clínica veterinaria más cercana.',
        ],
        [
            'q' => '¿Cómo encuentro un veterinario cerca de mí?',
            'a' => 'Mandanos por WhatsApp qué le pasa al animal y tu localidad, y te respondemos con '
                 . 'las opciones de veterinario cerca de tu zona.',
        ],
        [
            'q' => '¿Tienen clínica veterinaria propia?',
            'a' => 'No. Coordinamos con las opciones de atención veterinaria disponibles en cada '
                 . 'zona; no somos dueños de una clínica ni de un hospital veterinario.',
        ],
        [
            'q' => '¿Cuánto cuesta la consulta veterinaria?',
            'a' => 'Eso lo define cada opción de atención según el caso. Contanos qué necesitás y te '
                 . 'orientamos primero sin costo.',
        ],
        [
            'q' => '¿Qué hago si es una urgencia ahora mismo?',
            'a' => 'Si es una emergencia grave, no esperes: llevá al animal a la clínica veterinaria '
                 . 'más cercana ya mismo. Escribinos igual si necesitás orientación mientras tanto.',
        ],
    ],
    'cta'       => ['label' => 'Buscar atención veterinaria', 'whatsappText' => ''],
    'related'   => ['veterinario-a-domicilio', 'veterinario-rural', 'antiparasitarios-para-perros'],
    'guides'    => ['cada-cuanto-desparasitar'],
    'articles'  => [],
    'toolLinks' => [],
];
