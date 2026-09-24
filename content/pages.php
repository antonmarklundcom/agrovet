<?php
/**
 * The static (non-service) pages, keyed by path. Services live in
 * content/services.php, tools in content/tools.php, guides in content/guias.php,
 * segment pages in content/segmentos.php; this is everything else with a URL.
 *
 *   title        string  <title> without the ' | <site name>' suffix
 *   description  string  120–155 chars, unique across the whole site
 *   h1           string  visible heading
 *   lead         string  one-line intro under the H1
 *   sections     array   optional prose blocks for templates/page.php:
 *                        [['h2' => ..., 'body' => [paragraph, ...]], ...]
 *   stub         bool    true while the page is still a placeholder: it renders
 *                        through templates/page-stub.php, is marked noindex and
 *                        stays out of sitemap.php. The phase that writes the
 *                        page sets this to false.
 *   noindex      bool    the page exists but is not a URL of its own (/404).
 *                        Excluded from sitemap.php and from the route contract.
 *   changefreq   string  sitemap hint
 *   priority     string  sitemap hint
 *
 * Every entry here needs a route file (<path>/index.php) except '/404', which
 * is served by 404.php.
 */

declare(strict_types=1);

return [
    '/' => [
        // Carries the site name, so seo_title() adds no suffix.
        'title'       => 'Agroveterinaria online en Paraguay, envío al país',
        'description' => 'Agroveterinaria online: curabicheras, antiparasitarios, sal mineral, '
                       . 'balanceados, alambres y herbicidas. Cotización sin costo y envío a todo Paraguay.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '1.0',
    ],

    '/productos/' => [
        'title'       => 'Productos veterinarios y agropecuarios',
        'description' => 'Productos veterinarios y agropecuarios por categoría: sanidad animal, '
                       . 'nutrición, alambres, herbicidas y fertilizantes. Cotizá por WhatsApp.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '0.9',
    ],

    '/herramientas/' => [
        'title'       => 'Calculadoras para el campo',
        'description' => 'Calculadoras gratuitas para el campo: cuánto alambre necesitás para un '
                       . 'alambrado y cuántas bolsas de fertilizante por hectárea.',
        'h1'          => 'Calculadoras para el campo',
        'lead'        => 'Hacé la cuenta antes de pedir: metros, rollos y bolsas, en segundos.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    '/guias/' => [
        'title'       => 'Guías de sanidad animal y campo',
        'description' => 'Guías prácticas para productores y dueños de mascotas: curabicheras, '
                       . 'desparasitación, ivermectina, alambrados y control de malezas.',
        'h1'          => 'Guías de sanidad animal y campo',
        'lead'        => 'Respuestas claras a las preguntas que más nos hacen, sin reemplazar al veterinario.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    '/contacto/' => [
        'title'       => 'Contacto y cotizaciones',
        'description' => 'Pedí tu cotización de productos veterinarios y agropecuarios por WhatsApp '
                       . 'o por formulario. Respondemos con precio y costo de envío.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.8',
    ],

    '/blog/' => [
        'title'       => 'Blog de sanidad animal y campo',
        'description' => 'Notas de temporada para productores y dueños de mascotas: bicheras, '
                       . 'garrapatas, época seca y vacunación, con qué tener a mano en cada caso.',
        'h1'          => 'Blog de sanidad animal y campo',
        'lead'        => 'Qué preparar en cada temporada del año, para el campo y para tus animales.',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '0.6',
    ],

    '/envios/' => [
        'title'       => 'Envíos a todo Paraguay',
        'description' => 'Cómo funcionan los envíos de productos veterinarios y agropecuarios a los 17 '
                       . 'departamentos y Asunción: cotización, pago y despacho.',
        'h1'          => 'Envíos a todo Paraguay',
        'lead'        => 'Somos una agroveterinaria online: cotizamos por WhatsApp y despachamos a tu localidad.',
        'sections'    => [
            [
                'h2'   => 'Cómo funciona el envío',
                'body' => [
                    'Mandanos la lista de productos y la localidad de entrega. En la cotización te '
                        . 'pasamos el precio de cada producto y el costo de envío por separado, así sabés '
                        . 'cuánto pagás en total antes de confirmar.',
                    'Despachamos por transportadora o encomienda al punto que acordemos: tu casa, tu '
                        . 'estancia, la terminal o la agencia más cercana. El plazo depende de la '
                        . 'distancia y te lo confirmamos en la cotización.',
                ],
            ],
            [
                'h2'   => 'A dónde enviamos',
                'body' => [
                    'Región Oriental: Concepción, San Pedro, Cordillera, Guairá, Caaguazú, Caazapá, '
                        . 'Itapúa, Misiones, Paraguarí, Alto Paraná, Central, Ñeembucú, Amambay y '
                        . 'Canindeyú, además de Asunción.',
                    'Región Occidental (Chaco): Presidente Hayes, Boquerón y Alto Paraguay. En las '
                        . 'zonas más alejadas coordinamos el punto de entrega según el transporte '
                        . 'disponible.',
                ],
            ],
            [
                'h2'   => 'Productos que requieren cuidado en el envío',
                'body' => [
                    'Las vacunas y algunos medicamentos necesitan cadena de frío: solo los enviamos '
                        . 'cuando el transporte hasta tu localidad la puede mantener, y te lo avisamos en '
                        . 'la cotización. Los medicamentos de venta bajo receta se despachan contra receta '
                        . 'de un veterinario matriculado.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    '/privacidad/' => [
        'title'       => 'Política de privacidad',
        'description' => 'Cómo tratamos los datos que nos dejás en el formulario o por WhatsApp, y '
                       . 'cómo pedir su acceso, corrección o eliminación.',
        'h1'          => 'Política de privacidad',
        'lead'        => 'Cómo tratamos los datos personales que nos confiás.',
        'sections'    => [
            [
                'h2'   => 'Qué datos recogemos',
                'body' => [
                    'Recogemos únicamente los datos que escribís en el formulario de cotización '
                        . '(nombre, teléfono, correo, localidad y el detalle del pedido) o que nos '
                        . 'mandás por WhatsApp, más los parámetros de campaña que trae el enlace por '
                        . 'el que llegaste al sitio.',
                ],
            ],
            [
                'h2'   => 'Para qué los usamos',
                'body' => [
                    'Usamos tus datos para responderte, preparar la cotización y coordinar el envío. '
                        . 'Para cumplir un pedido podemos compartir los datos necesarios con el '
                        . 'proveedor, el veterinario o la transportadora que lo atiende. No vendemos '
                        . 'tus datos ni los usamos para fines ajenos a tu consulta.',
                ],
            ],
            [
                'h2'   => 'Tus derechos',
                'body' => [
                    'Podés pedir en cualquier momento el acceso, la corrección o la eliminación de '
                        . 'tus datos escribiéndonos por WhatsApp al mismo número desde el que nos '
                        . 'contactaste.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    '/terminos/' => [
        'title'       => 'Términos de uso',
        'description' => 'Condiciones de uso del sitio y de las cotizaciones: precios, disponibilidad, '
                       . 'envíos y venta de medicamentos veterinarios bajo receta.',
        'h1'          => 'Términos de uso',
        'lead'        => 'Condiciones bajo las que cotizamos y vendemos.',
        'sections'    => [
            [
                'h2'   => 'Cotizaciones',
                'body' => [
                    'Los precios y la disponibilidad se confirman en cada cotización y valen por el '
                        . 'plazo que se indique en ella. Una cotización no obliga a comprar.',
                ],
            ],
            [
                'h2'   => 'Medicamentos veterinarios',
                'body' => [
                    'Los productos de venta bajo receta veterinaria se despachan solo contra receta '
                        . 'de un profesional matriculado. La información de este sitio es general: '
                        . 'la dosis y el uso de cada producto los indica su etiqueta y tu veterinario. '
                        . 'Ningún producto veterinario es apto para uso en personas.',
                ],
            ],
            [
                'h2'   => 'Envíos',
                'body' => [
                    'El costo y el plazo de envío se informan en la cotización según la localidad de '
                        . 'destino y el medio de transporte acordado.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    '/404' => [
        'title'       => 'Página no encontrada',
        'description' => 'No encontramos la página que buscabas. Mirá nuestras categorías de productos '
                       . 'o escribinos y te ayudamos a encontrar lo que necesitás.',
        'h1'          => 'No encontramos esta página',
        'lead'        => '',
        'stub'        => false,
        'noindex'     => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.1',
    ],
];
