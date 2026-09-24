<?php
/**
 * Every UI string on the site, in one file — the single-locale layer. Nothing
 * in partials/ or templates/ contains a visible word; they all read from here.
 *
 * Register: Paraguayan Spanish with voseo ("pedí", "escribinos"), the way a
 * producer or a pet owner writes on WhatsApp. Every content file follows it.
 *
 * Nothing here may name a month, a year, a price or a client: strings must stay
 * true without anyone remembering to edit them. The site has no storefront yet,
 * so no string claims an address, a stock level or a delivery time.
 */

declare(strict_types=1);

return [

    // Cluster labels, in the order the mega-menu and the products hub use them.
    'clusters' => [
        'sanidad'     => 'Sanidad animal',
        'nutricion'   => 'Nutrición animal',
        'campo'       => 'Campo y cultivos',
        'veterinaria' => 'Atención veterinaria',
    ],

    // One line under each cluster heading on the products hub.
    'cluster_leads' => [
        'sanidad'     => 'Antiparasitarios, curabicheras y medicamentos de uso veterinario, para ganado y mascotas.',
        'nutricion'   => 'Sal mineral, balanceados y alimento para perros y gatos.',
        'campo'       => 'Alambres, tejidos, herbicidas, fertilizantes, semillas y bebederos.',
        'veterinaria' => 'Consultas para mascotas y atención de grandes animales en el campo.',
    ],

    'nav' => [
        'home'         => 'Inicio',
        'services'     => 'Productos',
        'pricing'      => 'Precios',
        'tools'        => 'Calculadoras',
        'guides'       => 'Guías',
        'about'        => 'Nosotros',
        'blog'         => 'Blog',
        'contact'      => 'Contacto',
        'privacy'      => 'Privacidad',
        'terms'        => 'Términos',
        'menu'         => 'Menú',
        'close'        => 'Cerrar',
        'open_menu'    => 'Abrir el menú',
        'close_menu'   => 'Cerrar el menú',
        'skip'         => 'Ir al contenido principal',
        'firm'         => 'Agroveterinaria',
        'all_services' => 'Ver todos los productos',
    ],

    'cta' => [
        'quote'         => 'Pedir cotización',
        'whatsapp'      => 'WhatsApp',
        'whatsapp_long' => 'Cotizar por WhatsApp',
        'consult'       => 'Pedir cotización sin costo',
        'contact'       => 'Contactar',
        'see_included'  => 'Ver qué ofrecemos',
        'talk'          => 'Escribinos',
    ],

    // The WhatsApp menu. BUTTON LABELS only — the message itself always comes
    // from content/lead-values.php and names the product.
    'whatsapp' => [
        'menu_title' => '¿Qué querés cotizar?',
        'menu_note'  => 'Abrimos WhatsApp con el mensaje ya escrito. Podés cambiarlo antes de enviarlo.',
        'other'      => 'Otra consulta',
        'this_page'  => 'Lo que estás viendo',
        'open_menu'  => 'Abrir opciones de WhatsApp',
        'close_menu' => 'Cerrar',
    ],

    'home' => [
        'eyebrow'   => 'Envíos a todo Paraguay',
        'h1_lead'   => 'Agroveterinaria online: ',
        'h1_accent' => 'productos veterinarios y agropecuarios.',
        'lead'      => 'Curabicheras, antiparasitarios, sal mineral, balanceados, alambres, herbicidas '
                     . 'y fertilizantes. Mandanos tu lista por WhatsApp y te cotizamos sin costo, '
                     . 'con el envío hasta tu estancia, chacra o casa.',

        'services_eyebrow' => 'Productos',
        'services_title'   => 'Todo para el campo y tus animales',
        'services_lead'    => 'Elegí la categoría, contanos cantidades y te respondemos con precio y envío.',

        'unsure_title' => '¿No encontrás lo que buscás?',
        'unsure_text'  => 'Mandanos el nombre del producto o una foto de la etiqueta y lo buscamos por vos.',
    ],

    // The panel at the foot of the homepage hero: an ILLUSTRATION of a quote
    // request, labelled as such. No price, no stock, no delivery date.
    'panel' => [
        'title' => 'Tu pedido por WhatsApp',
        'badge' => 'Sin costo',
        'tiles' => [
            ['label' => 'Curabichera en aerosol', 'value' => '6 unidades'],
            ['label' => 'Sal mineral para ganado', 'value' => '20 bolsas'],
            ['label' => 'Alambre de púas',         'value' => '4 rollos'],
        ],
        'foot'  => 'Cotización y envío en un solo mensaje',
        'note'  => 'Ejemplo de pedido',
    ],

    // The "cómo trabajamos" band. Commitments about the process, never a claim
    // about size, years or stock.
    'about' => [
        'eyebrow' => 'Cómo funciona',
        'title'   => 'Una sola lista, una sola respuesta, con el envío incluido en la cuenta.',
        'text'    => 'En vez de recorrer agroveterinarias o llamar a cada proveedor, mandás lo que '
                   . 'necesitás en un mensaje. Te respondemos con disponibilidad, precio y costo de '
                   . 'envío hasta tu localidad, y vos decidís.',
        'credentials' => [
            'Cotización sin costo y sin compromiso',
            'Envíos a los 17 departamentos y Asunción',
            'Medicamentos de venta bajo receta, solo con receta',
        ],
        'badge_note'     => 'de experiencia',
        'badge_fallback' => 'Todo Paraguay',
    ],

    'process' => [
        'eyebrow' => 'Cómo comprás',
        'title'   => 'Del mensaje a tu campo en cuatro pasos.',
        'steps'   => [
            [
                'title' => 'Pedí',
                'text'  => 'Mandanos por WhatsApp o por el formulario qué productos y qué cantidades necesitás.',
            ],
            [
                'title' => 'Cotizamos',
                'text'  => 'Te respondemos con disponibilidad, precio y costo de envío hasta tu localidad.',
            ],
            [
                'title' => 'Confirmás',
                'text'  => 'Si te sirve, confirmás el pedido y acordamos la forma de pago.',
            ],
            [
                'title' => 'Enviamos',
                'text'  => 'Despachamos por transportadora o encomienda al punto que nos indiques.',
            ],
        ],
    ],

    // Rendered in place of the testimonials band while content/site.php has
    // none. Species, not clients: nothing to verify.
    'industries' => [
        'eyebrow' => 'Para quién',
        'title'   => 'Para ganaderos, productores y dueños de mascotas',
        'lead'    => 'Productos para cada especie y cada tarea del campo.',
        'items'   => [
            'Bovinos de carne y leche',
            'Porcinos',
            'Aves de postura y engorde',
            'Equinos',
            'Perros y gatos',
            'Chacras y huertas',
        ],
    ],

    'testimonials' => [
        'eyebrow' => 'Clientes',
        'title'   => 'Lo que dicen nuestros clientes',
    ],

    'services_hub' => [
        'eyebrow'      => 'Productos',
        'title'        => 'Productos veterinarios y agropecuarios, con envío a todo el país.',
        'lead'         => 'Elegí una categoría para ver qué ofrecemos, o mandanos tu lista completa y la cotizamos junta.',
        'unsure_title' => '¿No está en la lista?',
        'unsure_text'  => 'Mandanos el nombre comercial o una foto de la etiqueta y lo conseguimos.',
        'unsure_cta'   => 'Escribinos',
    ],

    'cta_band' => [
        'eyebrow' => 'Cotización sin costo',
        'title'   => 'Mandanos tu lista y te respondemos con precio y envío.',
        'lead'    => 'Sin compromiso. Podés pedir un solo producto o todo lo del mes.',
    ],

    'form' => [
        'legend'          => 'Pedir cotización',
        'name'            => 'Nombre',
        'company'         => 'Estancia, empresa o ciudad',
        'phone'           => 'WhatsApp o teléfono',
        'phone_hint'      => 'Ej.: 0981 123 456',
        'email'           => 'Correo (opcional)',
        'need'            => '¿Qué necesitás?',
        'message'         => 'Productos y cantidades',
        'message_hint'    => 'Ej.: 10 curabicheras, 20 bolsas de sal mineral, envío a Santaní…',
        'submit'          => 'Pedir cotización',
        'sending'         => 'Enviando…',
        'privacy_note'    => 'Usamos tus datos solo para responderte. Ver la política de privacidad.',
        'success_title'   => 'Recibimos tu pedido.',
        'success_text'    => 'Te respondemos por WhatsApp con la cotización. Si preferís, escribinos ahora.',
        'error_title'     => 'No pudimos enviar el formulario.',
        'error_text'      => 'Volvé a intentarlo en un momento o escribinos directamente.',
        'error_phone'     => 'Necesitamos un teléfono o WhatsApp válido para responderte.',
        'required'        => 'obligatorio',
        'thanks_next'     => 'Qué sigue',
        'thanks_whatsapp' => 'Si no querés esperar, escribinos ahora por WhatsApp.',
        'remind_title'    => 'Te avisamos cuándo toca la próxima dosis',
        'remind_text'     => 'Anotamos tu pedido y te escribimos por WhatsApp cuando se acerca la reposición.',
        'remind_phone'    => 'Tu WhatsApp',
        'remind_submit'   => 'Quiero el recordatorio',
        'remind_ok'       => 'Anotado. Te escribimos antes de la próxima reposición.',
    ],

    // The chip selector in the lead form. Every key needs a matching entry in
    // content/lead-values.php's 'needs'.
    'needs' => [
        'sanidad'     => 'Sanidad animal',
        'nutricion'   => 'Sal mineral o balanceado',
        'mascotas'    => 'Mascotas',
        'campo'       => 'Alambres, herbicidas o fertilizantes',
        'veterinario' => 'Atención veterinaria',
        'otro'        => 'Otro',
    ],

    'contact' => [
        'eyebrow' => 'Contacto',
        'title'   => 'Contanos qué necesitás.',
        'lead'    => 'Escribinos por WhatsApp o dejanos tus datos y te respondemos con la cotización.',
        'address' => 'Dirección',
        'hours'   => 'Horario',
        'phone'   => 'Teléfono',
        'email'   => 'Correo',
        'expect'  => 'Qué pasa después',
        'steps'   => [
            'Te respondemos por WhatsApp con disponibilidad y precio.',
            'Te pasamos el costo de envío hasta tu localidad.',
            'Confirmás solo si te sirve: la cotización no te compromete.',
        ],
    ],

    'service' => [
        'includes'     => 'Qué ofrecemos',
        'excludes'     => 'Importante',
        'we_need'      => 'Para cotizarte, contanos',
        'benefits'     => 'Por qué pedir acá',
        'faq'          => 'Preguntas frecuentes',
        'related'      => 'Productos relacionados',
        'guides'       => 'Guía relacionada',
        'articles'     => 'Artículo relacionado',
        'form_eyebrow' => 'Cotización',
        'form_lead'    => 'Dejanos tus datos y la lista de productos: te respondemos con precio y envío, '
                        . 'sin costo y sin compromiso.',
        'breadcrumb'   => 'Ruta de navegación',
    ],

    'segment' => [
        'traps_title'  => 'Los errores que más cuestan',
        'bundle_title' => 'Lo que te conviene tener a mano',
        'form_eyebrow' => 'Cotización',
        'form_lead'    => 'Contanos cuántos animales tenés y te armamos la cotización.',
    ],

    'tools' => [
        'reviewed_prefix' => 'Revisado el',
        'orientativo'     => 'Los resultados son orientativos: confirmá medidas y dosis con tu técnico o con la etiqueta del producto.',
        'calculate'       => 'Calcular',
        'result_title'    => 'Resultado',
        'use_result'      => 'Cotizar este resultado',
        'need_js'         => 'Esta calculadora necesita JavaScript activado en tu navegador.',
        'restart'         => 'Volver a empezar',
    ],

    'guide' => [
        'reviewed_prefix'       => 'Revisado el',
        'orientativo'           => 'Es una guía general. Para dosis y diagnóstico, seguí la etiqueta del producto y consultá a tu veterinario.',
        'delegate_eyebrow'      => 'Cotizar',
        'delegate_title'        => '¿Necesitás el producto?',
        'delegate_lead'         => 'Mandanos qué necesitás y cuántos animales o hectáreas tenés; te respondemos con precio y envío.',
        'delegate_form_heading' => 'Pedir cotización',
        'related'               => 'Otras guías',
    ],

    'article' => [
        'reading_time' => 'min de lectura',
        'updated'      => 'Actualizado el',
        'read_more'    => 'Leer el artículo',
    ],

    'hub' => [
        'empty' => 'Todavía no hay nada publicado en esta sección.',
    ],

    'pricing' => [
        'quote'     => 'A cotizar',
        'per_month' => 'por mes',
        'cta'       => 'Pedir cotización',
        'note'      => 'Los precios se confirman en cada cotización.',
    ],

    'placeholder' => [
        'notice' => 'Estamos preparando esta página.',
        'action' => 'Mientras tanto, escribinos y te respondemos por WhatsApp.',
    ],

    'error404' => [
        'title' => 'No encontramos esta página',
        'lead'  => 'Puede que el enlace haya cambiado. Estas son las categorías más buscadas.',
    ],

    'footer' => [
        'blurb'   => 'Productos veterinarios y agropecuarios con cotización sin costo y envío a todo Paraguay.',
        'rights'  => 'Todos los derechos reservados.',
        'contact' => 'Contacto',
    ],
];
