<?php
/**
 * The lead value model. ONE record per source — every service slug, every tool
 * slug, every "¿qué necesita?" chip — plus the neutral default for pages that
 * are none of those.
 *
 * Nothing else on the site decides a tier, a conversion value or a WhatsApp
 * prefill: pages read this through lib/helpers.php's lead_value() and
 * whatsapp_text_for_page(), so retuning the model after a few weeks of GA4 data
 * is one edit here and no page changes.
 *
 * Record shape (every key required unless noted):
 *
 *   menuLabel     string   the short human name this source goes by in the
 *                          WhatsApp menu and in the CRM's `servicio` field. Page
 *                          titles are often frozen for SEO and too terse to read
 *                          as a menu option, which is why this exists
 *   need          string   key into ui('needs') — the chip this source maps to,
 *                          or a key in 'needLabels' below for sources with no
 *                          chip of their own
 *   tier          string   'A' | 'B' | 'C' — how much this source is worth
 *   whatsappText  string   the wa.me prefill. Names the service the visitor was
 *                          reading about — never a generic "consulta gratis"
 *   nextStep      string[] 2–3 lines shown after submit: what to have ready.
 *                          This is the second touch; it is worth reading
 *   crmTag        string   lands on the VenderCRM timeline as fields.etiqueta —
 *                          see the note on tags in enviar.php
 *   nextLink      ?array   optional ['path' => ..., 'label' => ...] tool or guide
 *                          offered alongside the thank-you text. The path must
 *                          resolve to a real route file; verify.sh checks it
 *
 * Adding a source: add a record keyed by its slug. Pages resolve by slug, so a
 * new guide or segment page joins the model by adding a key here.
 */

declare(strict_types=1);

/* The Google Ads conversion value per tier, in whole units of the market's
   currency (content/site.php 'market'). These are OPTIMISATION PROXIES, not
   revenue estimates: they exist so smart bidding favours a retainer lead over a
   calculator lead by roughly 10:1. Retune the ratio here, and re-scale the
   numbers when the site's market — and therefore its currency — changes. */
$tierValues = [
    'A' => 1000000,
    'B' => 400000,
    'C' => 100000,
];

/* Labels for `need` keys that are not one of the form chips, so the CRM reads a
   sentence instead of a raw key. */
$needLabels = [
    'recordatorio' => 'Recordatorio de reposición',
];

return [
    'tierValues' => $tierValues,
    'needLabels' => $needLabels,

    /* Which products the WhatsApp menu offers after the current page's own. */
    'whatsappMenu' => ['curabichera', 'sal-mineral', 'alambre', 'veterinaria'],

    'default' => [
        'menuLabel'    => 'Consulta general',
        'need'         => 'otro',
        'tier'         => 'C',
        'whatsappText' => 'Hola, quiero cotizar productos veterinarios o agropecuarios.',
        'nextStep'     => [
            'Te respondemos por WhatsApp con disponibilidad y precio.',
            'Mandanos la lista de productos, cantidades y tu localidad.',
        ],
        'crmTag'       => 'consulta-general',
        'nextLink'     => null,
    ],

    'services' => [
        'antipulgas' => [
            'menuLabel'    => 'Antipulgas para perros y gatos',
            'need'         => 'mascotas',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar antipulgas para perros y gatos.',
            'nextStep'     => [
                'Contanos el peso de tu mascota y si preferís pipeta, collar o comprimido.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'antipulgas',
            'nextLink'     => ['path' => '/guias/pulgas-y-garrapatas-en-perros/', 'label' => 'Pulgas y garrapatas en perros'],
        ],
        'garrapaticidas' => [
            'menuLabel'    => 'Garrapaticida para ganado',
            'need'         => 'sanidad',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar garrapaticida para ganado.',
            'nextStep'     => [
                'Contanos cuántas cabezas vas a tratar y si usás baño, pour-on o inyectable.',
                'Si sabés qué producto usaste la última vez, decinos: ayuda a rotar y evitar resistencia.',
            ],
            'crmTag'       => 'garrapaticidas',
            'nextLink'     => ['path' => '/guias/como-controlar-la-garrapata-en-bovinos/', 'label' => 'Cómo controlar la garrapata'],
        ],
        'vacunas-ganado' => [
            'menuLabel'    => 'Vacunas para ganado',
            'need'         => 'sanidad',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar vacunas para ganado.',
            'nextStep'     => [
                'Contanos la especie, cuántos animales y qué vacuna buscás.',
                'Decinos la localidad: las vacunas viajan con cadena de frío y lo confirmamos en la cotización.',
            ],
            'crmTag'       => 'vacunas-ganado',
            'nextLink'     => ['path' => '/guias/calendario-sanitario-bovino/', 'label' => 'Calendario sanitario bovino'],
        ],
        'vitaminas' => [
            'menuLabel'    => 'Vitaminas y suplementos',
            'need'         => 'sanidad',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar vitaminas y suplementos para animales.',
            'nextStep'     => [
                'Contanos la especie, cuántos animales y para qué los necesitás.',
                'Decinos a qué localidad hay que enviarlos.',
            ],
            'crmTag'       => 'vitaminas',
            'nextLink'     => null,
        ],
        'jeringas' => [
            'menuLabel'    => 'Jeringas y dosificadores',
            'need'         => 'sanidad',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar jeringas y pistolas dosificadoras.',
            'nextStep'     => [
                'Contanos qué tipo (descartable, automática, pistola pour-on) y cuántas.',
                'Decinos a qué localidad hay que enviarlas.',
            ],
            'crmTag'       => 'jeringas',
            'nextLink'     => null,
        ],
        'raticidas' => [
            'menuLabel'    => 'Raticidas',
            'need'         => 'campo',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar raticidas.',
            'nextStep'     => [
                'Contanos dónde los vas a usar (galpón, depósito, casa) y el tamaño aproximado.',
                'Decinos a qué localidad hay que enviarlos.',
            ],
            'crmTag'       => 'raticidas',
            'nextLink'     => ['path' => '/guias/como-eliminar-ratas-en-el-galpon/', 'label' => 'Cómo eliminar ratas del galpón'],
        ],
        'insecticidas' => [
            'menuLabel'    => 'Insecticidas y hormiguicidas',
            'need'         => 'campo',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar insecticidas y hormiguicidas.',
            'nextStep'     => [
                'Contanos qué plaga querés controlar (moscas, hormigas, garrapatas del ambiente) y dónde.',
                'Decinos a qué localidad hay que enviarlos.',
            ],
            'crmTag'       => 'insecticidas',
            'nextLink'     => ['path' => '/guias/como-eliminar-hormigas-cortadoras/', 'label' => 'Cómo controlar hormigas cortadoras'],
        ],
        'fumigadoras' => [
            'menuLabel'    => 'Mochilas fumigadoras',
            'need'         => 'campo',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar mochilas fumigadoras.',
            'nextStep'     => [
                'Contanos la capacidad que buscás y si la querés manual o a batería.',
                'Decinos a qué localidad hay que enviarla.',
            ],
            'crmTag'       => 'fumigadoras',
            'nextLink'     => null,
        ],
        'curabichera' => [
            'menuLabel'    => 'Curabichera',
            'need'         => 'sanidad',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar curabichera.',
            'nextStep'     => [
                'Contanos si la querés en aerosol, en polvo o en pasta, y cuántas unidades.',
                'Decinos a qué localidad hay que enviarla.',
            ],
            'crmTag'       => 'curabichera',
            'nextLink'     => ['path' => '/guias/como-usar-curabichera/', 'label' => 'Mientras tanto: cómo usar la curabichera'],
        ],
        'antiparasitarios-para-perros' => [
            'menuLabel'    => 'Antiparasitario para perros',
            'need'         => 'mascotas',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar antiparasitarios para perros.',
            'nextStep'     => [
                'Tené a mano el peso aproximado de tu perro y si es interno, externo o ambos.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'antiparasitarios-para-perros',
            'nextLink'     => ['path' => '/guias/cada-cuanto-desparasitar-perros-y-gatos/', 'label' => 'Cada cuánto desparasitar'],
        ],
        'antiparasitarios-para-gatos' => [
            'menuLabel'    => 'Antiparasitario para gatos',
            'need'         => 'mascotas',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar antiparasitarios para gatos.',
            'nextStep'     => [
                'Tené a mano el peso aproximado de tu gato.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'antiparasitarios-para-gatos',
            'nextLink'     => ['path' => '/guias/cada-cuanto-desparasitar-perros-y-gatos/', 'label' => 'Cada cuánto desparasitar'],
        ],
        'antiparasitarios-para-ganado' => [
            'menuLabel'    => 'Antiparasitario para ganado',
            'need'         => 'sanidad',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar antiparasitarios para ganado.',
            'nextStep'     => [
                'Contanos la especie y cuántas cabezas vas a tratar.',
                'Si tenés un producto de preferencia, mandanos el nombre o una foto.',
            ],
            'crmTag'       => 'antiparasitarios-para-ganado',
            'nextLink'     => null,
        ],
        'ivermectina' => [
            'menuLabel'    => 'Ivermectina veterinaria',
            'need'         => 'sanidad',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar ivermectina de uso veterinario.',
            'nextStep'     => [
                'Contanos la especie y cuántos animales vas a tratar.',
                'Decinos la presentación que buscás (inyectable, pour-on u oral).',
            ],
            'crmTag'       => 'ivermectina',
            'nextLink'     => ['path' => '/guias/ivermectina-en-animales/', 'label' => 'Qué es la ivermectina veterinaria'],
        ],
        'antibioticos-veterinarios' => [
            'menuLabel'    => 'Antibióticos veterinarios',
            'need'         => 'sanidad',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar antibióticos veterinarios.',
            'nextStep'     => [
                'Tené a mano la receta del veterinario: los antibióticos se venden solo con receta.',
                'Contanos la especie y la cantidad de animales.',
            ],
            'crmTag'       => 'antibioticos-veterinarios',
            'nextLink'     => null,
        ],
        'sal-mineral' => [
            'menuLabel'    => 'Sal mineral',
            'need'         => 'nutricion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar sal mineral para ganado.',
            'nextStep'     => [
                'Contanos cuántas cabezas tenés y si son de cría, recría o engorde.',
                'Decinos cuántas bolsas y a qué localidad hay que enviarlas.',
            ],
            'crmTag'       => 'sal-mineral',
            'nextLink'     => ['path' => '/guias/sal-mineral-para-ganado/', 'label' => 'Cuánta sal mineral consume el ganado'],
        ],
        'balanceados' => [
            'menuLabel'    => 'Balanceado para animales',
            'need'         => 'nutricion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar balanceado para animales.',
            'nextStep'     => [
                'Contanos la especie (cerdos, gallinas, bovinos) y la cantidad de bolsas.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'balanceados',
            'nextLink'     => null,
        ],
        'alimento-para-mascotas' => [
            'menuLabel'    => 'Alimento para perros y gatos',
            'need'         => 'mascotas',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar alimento para perros y gatos.',
            'nextStep'     => [
                'Decinos la marca o el tipo de alimento, y la edad y el tamaño de tu mascota.',
                'Contanos cuántas bolsas y a qué localidad.',
            ],
            'crmTag'       => 'alimento-para-mascotas',
            'nextLink'     => null,
        ],
        'alambre' => [
            'menuLabel'    => 'Alambre',
            'need'         => 'campo',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar alambre.',
            'nextStep'     => [
                'Contanos el tipo (púas, liso, galvanizado) y cuántos rollos o metros.',
                'Si todavía no sabés cuánto necesitás, usá la calculadora de alambrado.',
            ],
            'crmTag'       => 'alambre',
            'nextLink'     => ['path' => '/herramientas/calculadora-de-alambrado/', 'label' => 'Calculá cuánto alambre necesitás'],
        ],
        'tejido-de-alambre' => [
            'menuLabel'    => 'Tejido de alambre',
            'need'         => 'campo',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar tejido de alambre.',
            'nextStep'     => [
                'Contanos la altura del tejido y cuántos metros necesitás.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'tejido-de-alambre',
            'nextLink'     => null,
        ],
        'glifosato' => [
            'menuLabel'    => 'Glifosato',
            'need'         => 'campo',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar glifosato.',
            'nextStep'     => [
                'Contanos cuántos litros o cuántas hectáreas vas a aplicar.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'glifosato',
            'nextLink'     => ['path' => '/guias/control-de-malezas-en-pasturas/', 'label' => 'Control de malezas en pasturas'],
        ],
        'herbicidas' => [
            'menuLabel'    => 'Herbicidas',
            'need'         => 'campo',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar herbicidas.',
            'nextStep'     => [
                'Contanos qué malezas querés controlar y en qué cultivo o pastura.',
                'Decinos cuántas hectáreas y a qué localidad.',
            ],
            'crmTag'       => 'herbicidas',
            'nextLink'     => ['path' => '/guias/control-de-malezas-en-pasturas/', 'label' => 'Control de malezas en pasturas'],
        ],
        'fertilizantes' => [
            'menuLabel'    => 'Fertilizantes',
            'need'         => 'campo',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar fertilizantes.',
            'nextStep'     => [
                'Contanos el cultivo o la pastura y cuántas hectáreas.',
                'Si tenés un análisis de suelo, mandanos una foto.',
            ],
            'crmTag'       => 'fertilizantes',
            'nextLink'     => ['path' => '/herramientas/calculadora-de-fertilizante/', 'label' => 'Calculá cuántas bolsas necesitás'],
        ],
        'semillas' => [
            'menuLabel'    => 'Semillas',
            'need'         => 'campo',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar semillas.',
            'nextStep'     => [
                'Contanos qué especie o variedad buscás y cuántas hectáreas vas a sembrar.',
                'Decinos a qué localidad hay que enviarlas.',
            ],
            'crmTag'       => 'semillas',
            'nextLink'     => null,
        ],
        'bebederos' => [
            'menuLabel'    => 'Bebederos',
            'need'         => 'campo',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quiero cotizar bebederos para animales.',
            'nextStep'     => [
                'Contanos para qué animales y cuántos bebederos necesitás.',
                'Decinos a qué localidad hay que enviarlos.',
            ],
            'crmTag'       => 'bebederos',
            'nextLink'     => null,
        ],
        'veterinaria' => [
            'menuLabel'    => 'Atención veterinaria',
            'need'         => 'veterinario',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar atención veterinaria.',
            'nextStep'     => [
                'Contanos qué animal es, qué síntomas tiene y en qué ciudad estás.',
                'Si es una emergencia grave, acudí ya a la clínica veterinaria más cercana.',
            ],
            'crmTag'       => 'veterinaria',
            'nextLink'     => null,
        ],
        'veterinario-a-domicilio' => [
            'menuLabel'    => 'Veterinario a domicilio',
            'need'         => 'veterinario',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quiero cotizar un veterinario a domicilio.',
            'nextStep'     => [
                'Contanos qué animal es, qué necesita y tu dirección o barrio.',
                'Decinos qué días y horarios te quedan bien.',
            ],
            'crmTag'       => 'veterinario-a-domicilio',
            'nextLink'     => null,
        ],
        'veterinario-rural' => [
            'menuLabel'    => 'Veterinario para grandes animales',
            'need'         => 'veterinario',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar un veterinario para grandes animales.',
            'nextStep'     => [
                'Contanos la especie, cuántos animales y el trabajo (vacunación, revisión, sangrado, etc.).',
                'Decinos el departamento y la localidad del establecimiento.',
            ],
            'crmTag'       => 'veterinario-rural',
            'nextLink'     => null,
        ],
    ],

    'tools' => [
        'arma-tu-pedido' => [
            'menuLabel'    => 'Pedido armado',
            'need'         => 'otro',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quiero cotizar un pedido de productos.',
            'nextStep'     => [
                'Te respondemos por WhatsApp con disponibilidad, precio y envío de cada producto.',
                'Si falta algo en la lista, agregalo en el mismo chat.',
            ],
            'crmTag'       => 'arma-tu-pedido',
            'nextLink'     => null,
        ],
        'calculadora-alambrado' => [
            'menuLabel'    => 'Calculadora de alambrado',
            'need'         => 'campo',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora de alambrado y quiero cotizar el alambre.',
            'nextStep'     => [
                'Guardá el resultado: con los metros y los hilos te cotizamos los rollos.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'calculadora-alambrado',
            'nextLink'     => null,
        ],
        'calculadora-fertilizante' => [
            'menuLabel'    => 'Calculadora de fertilizante',
            'need'         => 'campo',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé la calculadora de fertilizante y quiero cotizar las bolsas.',
            'nextStep'     => [
                'Guardá el resultado: con las bolsas y el producto te cotizamos.',
                'Decinos a qué localidad hay que enviarlo.',
            ],
            'crmTag'       => 'calculadora-fertilizante',
            'nextLink'     => null,
        ],
    ],

    'needs' => [
        'sanidad'     => ['tier' => 'B', 'crmTag' => 'sanidad-animal',   'service' => 'antiparasitarios-para-ganado'],
        'nutricion'   => ['tier' => 'A', 'crmTag' => 'nutricion-animal', 'service' => 'sal-mineral'],
        'mascotas'    => ['tier' => 'C', 'crmTag' => 'mascotas',         'service' => 'antiparasitarios-para-perros'],
        'campo'       => ['tier' => 'A', 'crmTag' => 'campo',            'service' => 'alambre'],
        'veterinario' => ['tier' => 'B', 'crmTag' => 'veterinario',      'service' => 'veterinaria'],
        'otro'        => ['tier' => 'C', 'crmTag' => 'consulta-general', 'service' => null],
    ],
];
