<?php
/**
 * Vet-coordination page for house-call requests. We do not have our own
 * mobile vets or fixed availability: we take symptoms + address by WhatsApp
 * and answer with the house-call options available in that zone. Keywords:
 * veterinario a domicilio (50), veterinario a domicilio cerca de mi, atención
 * veterinaria a domicilio, veterinaria móvil, consulta veterinaria a
 * domicilio, vacunación y desparasitación a domicilio, ecografía veterinaria.
 */

declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/veterinaria/a-domicilio/',
    'title'           => 'Veterinario a domicilio',
    'navLabel'        => 'A domicilio',
    'cluster'         => 'veterinaria',
    'parent'          => 'veterinaria',
    'seoTitle'        => 'Veterinario a domicilio por WhatsApp',
    'metaDescription' => 'Contanos qué necesita tu mascota y tu dirección: te respondemos por WhatsApp '
                       . 'con opciones de veterinario a domicilio en tu zona, sin costo ni compromiso.',
    'hero' => [
        'eyebrow' => 'Atención veterinaria',
        'h1'      => 'Veterinario a domicilio en tu zona',
        'h2'      => 'Consulta, vacunación, desparasitación o ecografía sin sacar al animal de casa.',
        'lead'    => 'Hay perros y gatos mayores, o simplemente nerviosos, a los que el traslado les '
                   . 'genera mucho estrés. Contanos qué necesita tu mascota y dónde estás, y te '
                   . 'respondemos por WhatsApp con las opciones de veterinario a domicilio '
                   . 'disponibles cerca tuyo.',
    ],
    'includes' => [
        'Recepción de tu pedido por WhatsApp, con motivo y dirección',
        'Opciones de atención veterinaria a domicilio disponibles en tu zona',
        'Consultas de rutina, vacunación y desparasitación a domicilio',
        'Coordinación de estudios como ecografía cuando la zona lo permite',
    ],
    'excludes' => [
        'Si es una emergencia grave, acudí a la clínica veterinaria más cercana; no esperes un '
            . 'turno a domicilio',
        'No tenemos veterinarios propios ni una veterinaria móvil fija: coordinamos con las '
            . 'opciones disponibles en cada zona',
        'La disponibilidad de horario y de estudios como la ecografía depende de la zona y se '
            . 'confirma al coordinar',
    ],
    'weNeed' => [
        'Qué necesita el animal (consulta, vacuna, desparasitación, ecografía)',
        'Especie, raza y edad aproximada',
        'La dirección o zona donde vivís',
        'Un número de WhatsApp para coordinar el horario',
    ],
    'sections' => [
        [
            'h2'   => 'Cuándo conviene una consulta veterinaria a domicilio',
            'body' => [
                'El traslado es el problema principal para muchos animales: gatos que se esconden '
                    . 'en cuanto ven el bolso, perros mayores con dolor articular que sufren la '
                    . 'subida al auto, o mascotas que se ponen agresivas de puros nervios en la '
                    . 'sala de espera. En esos casos, una atención veterinaria a domicilio evita '
                    . 'todo ese estrés.',
                'También sirve para lo de rutina: vacunación y desparasitación a domicilio para '
                    . 'varios animales de la casa en una sola visita, o un control de un animal '
                    . 'mayor que ya no conviene mover. Contanos el motivo y vemos qué opciones hay '
                    . 'cerca tuyo.',
            ],
            'items' => [
                ['title' => 'Gatos y perros mayores', 'text' => 'El traslado les genera dolor o estrés innecesario para una consulta simple.'],
                ['title' => 'Vacunación y desparasitación', 'text' => 'Se puede coordinar para todos los animales de la casa en una visita.'],
                ['title' => 'Animales agresivos por miedo', 'text' => 'En su ambiente muchos se dejan revisar mejor que en una sala de espera.'],
            ],
        ],
        [
            'h2'   => 'Cómo coordinamos el veterinario a domicilio',
            'body' => [
                'No tenemos una veterinaria móvil propia: nos escribís por WhatsApp con el motivo de '
                    . 'la consulta y tu dirección, y buscamos las opciones de veterinario a domicilio '
                    . 'que trabajan en esa zona, incluyendo estudios como la ecografía cuando están '
                    . 'disponibles ahí.',
                'Te devolvemos esas opciones para que elijas y coordines el horario. Si la situación '
                    . 'es grave, un domicilio puede tardar más que llevar al animal directamente a '
                    . 'una clínica veterinaria, así que en ese caso priorizá eso.',
            ],
            'items' => [],
        ],
    ],
    'benefits' => [
        ['title' => 'Sin traslado', 'text' => 'El animal se queda en su ambiente, sin el estrés del viaje.'],
        ['title' => 'Opciones de tu zona', 'text' => 'Te pasamos quién atiende a domicilio cerca tuyo.'],
        ['title' => 'Sin costo la consulta', 'text' => 'Contarnos qué necesitás y orientarte no tiene cargo.'],
    ],
    'faq' => [
        [
            'q' => '¿Hacen ecografía a domicilio?',
            'a' => 'Depende de la zona: algunas opciones de veterinario a domicilio la ofrecen y '
                 . 'otras no. Contanos dónde estás y te decimos si hay disponibilidad cerca tuyo.',
        ],
        [
            'q' => '¿Puedo pedir vacunación y desparasitación a domicilio para varios animales?',
            'a' => 'Sí, contanos cuántos animales y qué necesita cada uno; coordinamos una visita '
                 . 'que cubra a todos.',
        ],
        [
            'q' => '¿Cuánto cuesta el veterinario a domicilio?',
            'a' => 'El costo lo define la opción que te atienda, según la zona y el servicio. '
                 . 'Contanos qué necesitás y te orientamos primero sin costo.',
        ],
        [
            'q' => '¿Tienen veterinaria móvil propia?',
            'a' => 'No, coordinamos con veterinarios que atienden a domicilio en distintas zonas; '
                 . 'no somos dueños de una veterinaria móvil.',
        ],
        [
            'q' => '¿Y si mi mascota tiene una urgencia?',
            'a' => 'Si es grave, no esperes un turno a domicilio: llevala directamente a la clínica '
                 . 'veterinaria más cercana.',
        ],
    ],
    'cta'       => ['label' => 'Pedir veterinario a domicilio', 'whatsappText' => ''],
    'related'   => ['veterinaria', 'antiparasitarios-para-perros', 'antiparasitarios-para-gatos'],
    'guides'    => ['cada-cuanto-desparasitar', 'vacuna-antirrabica'],
    'articles'  => [],
    'toolLinks' => [],
];
