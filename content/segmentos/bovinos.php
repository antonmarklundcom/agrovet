<?php
/**
 * Segment page: bovinos (ganado de carne y leche). Copies the register and
 * structure of content/services/curabichera.php, at ~70% of its length, per
 * templates/segment.php and docs/build/brief.md Round 2.
 */

declare(strict_types=1);

return [
    'order'           => 10,
    'path'            => '/bovinos/',
    'navLabel'        => 'Bovinos',
    'seoTitle'        => 'Productos para bovinos: envío al país',
    'metaDescription' => 'Sal mineral, antiparasitarios, curabichera y balanceados para ganado de '
                       . 'carne y leche. Cotizá por WhatsApp sin costo, con envío a todo Paraguay.',
    'hero' => [
        'eyebrow' => 'Ganado bovino',
        'h1'      => 'Productos veterinarios para bovinos (ganado de carne y leche)',
        'lead'    => 'Sal mineral, antiparasitarios, curabichera y balanceados en un mismo mensaje: '
                   . 'contanos qué necesitás para el rodeo y te cotizamos sin costo, con el envío '
                   . 'hasta tu establecimiento.',
    ],
    'leadSlug' => 'sal-mineral',
    'bundle'   => [
        'antiparasitarios-para-ganado', 'curabichera', 'ivermectina', 'sal-mineral',
        'balanceados', 'alambre', 'bebederos', 'veterinario-rural',
    ],
    'traps' => [
        [
            'title' => 'Dejar sin sal mineral en época seca',
            'text'  => 'Cuando la pastura está seca el pasto solo no cubre los minerales que el '
                     . 'ganado necesita, y la falta de sal mineral se nota en preñez y en peso antes '
                     . 'de que se note a simple vista.',
        ],
        [
            'title' => 'Curar tarde el ombligo del ternero',
            'text'  => 'El ombligo recién nacido es la puerta de entrada más común para la bichera y '
                     . 'las infecciones; curarlo al momento del nacimiento es más barato que tratar '
                     . 'la complicación después.',
        ],
        [
            'title' => 'Desparasitar sin criterio y generar resistencia',
            'text'  => 'Repetir siempre el mismo antiparasitario sin variar el principio activo '
                     . 'termina creando parásitos resistentes; el manejo del rodeo lo define tu '
                     . 'veterinario, no la góndola.',
        ],
        [
            'title' => 'No aislar un animal con bichera',
            'text'  => 'Una herida bichada sin curar atrae más moscas y expone al resto del rodeo; '
                     . 'revisar heridas de manga, castración y alambre a diario evita que un caso se '
                     . 'multiplique.',
        ],
    ],
    'sections' => [
        [
            'h2'   => 'Qué necesita el rodeo en cada etapa del año',
            'body' => [
                'En verano y sequía el foco es la sal mineral y el agua disponible en los bebederos; '
                    . 'en época de parición, el ombligo del ternero y la vigilancia de bichera; en '
                    . 'todo el año, un plan de desparasitación que tu veterinario ajuste según el '
                    . 'estado del rodeo y no repita siempre el mismo producto.',
                'Armamos la cotización con lo que ya tenés y lo que falta: antiparasitarios, '
                    . 'curabichera, sal mineral, balanceados y también alambre o bebederos si estás '
                    . 'mejorando la infraestructura del potrero.',
            ],
            'items' => [],
        ],
    ],
    'weNeed' => [
        'Cantidad de cabezas y categoría (cría, recría, engorde, tambo)',
        'Qué falta hoy: sal mineral, antiparasitario, curabichera o balanceado',
        'Si tenés indicación de tu veterinario para algún producto puntual',
        'La localidad a la que hay que enviar el pedido',
    ],
    'faq' => [
        [
            'q' => '¿Cuánto cuesta abastecer un rodeo por mes?',
            'a' => 'Depende de la cantidad de cabezas, la categoría y los productos que necesites. '
                 . 'Mandanos el detalle por WhatsApp y te respondemos con precio y costo de envío, '
                 . 'sin compromiso.',
        ],
        [
            'q' => '¿Puedo pedir todo junto en una sola cotización?',
            'a' => 'Sí, podés combinar sal mineral, antiparasitarios, curabichera y balanceados en un '
                 . 'mismo mensaje y te armamos la cotización completa con un solo envío.',
        ],
        [
            'q' => '¿Hacen envíos a establecimientos del interior?',
            'a' => 'Sí, enviamos a todo Paraguay. El costo y el plazo dependen de la localidad y te '
                 . 'los pasamos junto con el precio.',
        ],
        [
            'q' => '¿Qué antiparasitario le conviene a mi rodeo?',
            'a' => 'Depende del estado del animal y del historial de desparasitación; consultá a tu '
                 . 'veterinario para no repetir siempre el mismo principio activo y evitar resistencia.',
        ],
        [
            'q' => '¿Tienen productos para tambo además de cría y engorde?',
            'a' => 'Sí, cotizamos sal mineral y balanceados también para bovinos de leche; contanos la '
                 . 'categoría del rodeo al pedir la cotización.',
        ],
    ],
];
