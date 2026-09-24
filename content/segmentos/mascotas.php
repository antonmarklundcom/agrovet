<?php
/**
 * Segment page: mascotas (perros y gatos). Copies the register and structure
 * of content/services/curabichera.php, at ~70% of its length, per
 * templates/segment.php and docs/build/brief.md Round 2.
 */

declare(strict_types=1);

return [
    'order'           => 20,
    'path'            => '/mascotas/',
    'navLabel'        => 'Mascotas',
    'seoTitle'        => 'Productos para perros y gatos: envío',
    'metaDescription' => 'Alimento, antiparasitarios y antibióticos veterinarios para perros y gatos. '
                       . 'Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Perros y gatos',
        'h1'      => 'Productos para perros y gatos',
        'lead'    => 'Alimento, antiparasitarios internos y externos, y antibióticos con receta: '
                   . 'contanos qué necesita tu mascota y te cotizamos sin costo, con el envío hasta '
                   . 'tu casa.',
    ],
    'leadSlug' => 'alimento-para-mascotas',
    'bundle'   => [
        'antiparasitarios-para-perros', 'antiparasitarios-para-gatos', 'alimento-para-mascotas',
        'antibioticos-veterinarios', 'veterinaria', 'veterinario-a-domicilio',
    ],
    'traps' => [
        [
            'title' => 'Cambiar de alimento de golpe',
            'text'  => 'Pasar de un alimento a otro sin transición seguido causa diarrea y rechazo; '
                     . 'conviene mezclar el nuevo con el anterior durante varios días.',
        ],
        [
            'title' => 'Desparasitar sin plan fijo',
            'text'  => 'Saltear la desparasitación interna y externa en cachorros o cuando hay pulgas '
                     . 'visibles deja que la carga parasitaria vuelva más fuerte; seguí el esquema que '
                     . 'te indique el veterinario.',
        ],
        [
            'title' => 'Dar antibiótico sin receta ni esquema completo',
            'text'  => 'Cortar el antibiótico antes de tiempo porque la mascota "ya mejoró" es la '
                     . 'forma más común de que la infección vuelva peor; los antibióticos veterinarios '
                     . 'se venden bajo receta y se completan según indicación.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Qué pedir según la etapa de tu mascota',
            'body' => [
                'Un cachorro necesita alimento específico y un esquema de desparasitación más '
                    . 'seguido; un adulto sano se mantiene con alimento de mantenimiento y '
                    . 'antiparasitarios periódicos; un animal con receta veterinaria necesita el '
                    . 'antibiótico o tratamiento puntual que indicó el profesional.',
                'Si es una emergencia grave, acudí a la clínica veterinaria más cercana: nosotros '
                    . 'cotizamos y enviamos los productos, no reemplazamos la consulta presencial '
                    . 'cuando hace falta.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Especie y edad de tu mascota (perro o gato, cachorro o adulto)',
        'Peso aproximado, para el alimento o la dosis según etiqueta',
        'Si el antibiótico tiene receta veterinaria',
        'La dirección o localidad para el envío',
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta el alimento para mi mascota?',
            'a' => 'Depende de la marca, la presentación y la cantidad. Mandanos el peso y la edad de '
                 . 'tu mascota por WhatsApp y te respondemos con precio y envío, sin compromiso.',
        ],
        [
            'q' => '¿Venden antibióticos sin receta?',
            'a' => 'No, los antibióticos veterinarios se venden bajo receta veterinaria. Mandanos la '
                 . 'receta o la indicación del profesional y te cotizamos el producto.',
        ],
        [
            'q' => '¿Tienen antiparasitarios para gatos también?',
            'a' => 'Sí, cotizamos antiparasitarios internos y externos tanto para perros como para '
                 . 'gatos; contanos la especie y el peso al pedir la cotización.',
        ],
        [
            'q' => '¿Hacen envíos a domicilio en todo el país?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos en la cotización.',
        ],
        [
            'q' => '¿Qué hago si es una urgencia con mi mascota?',
            'a' => 'Si es una emergencia grave, acudí a la clínica veterinaria más cercana. Para '
                 . 'reposición de productos y tratamientos ya indicados, mandanos el pedido por '
                 . 'WhatsApp.',
        ],
    ],
];
