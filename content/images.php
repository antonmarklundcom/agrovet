<?php
/**
 * Image plan: one entry per page image, keyed by content type and record slug.
 * 'slug' is the webimg file stem in assets/img/ (<slug>-640|1280|1920.avif|webp),
 * 'alt' the Spanish alt text. A planned image whose files are not on disk yet
 * renders nothing (image_for() in lib/helpers.php). docs/imagery-manifest.json
 * holds the prompts and generation record.
 */

declare(strict_types=1);

return [
    'home' => [
        'band' => ['slug' => 'ganado-brahman-corral-atardecer-paraguay', 'alt' => 'Ganado brahman en un corral de madera al atardecer en una estancia de Paraguay, con polvo en el aire.'],
        'about_tall' => ['slug' => 'pedido-whatsapp-productos-veterinarios', 'alt' => 'Productor revisando en el celular un pedido de productos veterinarios junto a la manga del corral.'],
        'about_square' => ['slug' => 'envio-productos-agropecuarios-camioneta', 'alt' => 'Camioneta con bolsas y cajas de productos agropecuarios en un camino de tierra roja en Paraguay.'],
    ],
    'services' => [
        'curabichera' => ['slug' => 'curabichera-aerosol-herida-ternero', 'alt' => 'Aplicación de curabichera en aerosol sobre una herida en la pata de un ternero en el corral.'],
        'antiparasitarios-para-perros' => ['slug' => 'antiparasitario-para-perros-pipeta', 'alt' => 'Dueño aplicando un antiparasitario en pipeta en el cuello de un perro mestizo en el patio.'],
        'antiparasitarios-para-gatos' => ['slug' => 'antiparasitario-para-gatos-en-casa', 'alt' => 'Gato doméstico tranquilo en brazos de su dueña antes de recibir un antiparasitario en casa.'],
        'antiparasitarios-para-ganado' => ['slug' => 'antiparasitario-para-ganado-pour-on-manga', 'alt' => 'Aplicación de antiparasitario pour-on sobre el lomo de un novillo en la manga de una estancia.'],
        'ivermectina' => ['slug' => 'ivermectina-veterinaria-frasco-inyectable', 'alt' => 'Frasco de ivermectina de uso veterinario y jeringa sobre una mesa de trabajo en el campo.'],
        'antibioticos-veterinarios' => ['slug' => 'antibioticos-veterinarios-frascos-consultorio', 'alt' => 'Frascos de antibióticos veterinarios en la mesa de un consultorio rural junto a una receta.'],
        'sal-mineral' => ['slug' => 'sal-mineral-para-ganado-comedero', 'alt' => 'Vacas comiendo sal mineral en un comedero techado de madera en una estancia de Paraguay.'],
        'balanceados' => ['slug' => 'balanceado-para-cerdos-y-gallinas', 'alt' => 'Balanceado para animales servido en comederos de un galpón con cerdos y gallinas.'],
        'alimento-para-mascotas' => ['slug' => 'alimento-para-perros-y-gatos-comedero', 'alt' => 'Perro y gato comiendo alimento balanceado en sus platos en la cocina de una casa.'],
        'alambre' => ['slug' => 'alambre-de-puas-rollo-alambrado', 'alt' => 'Rollo de alambre de púas junto a postes de un alambrado nuevo en un campo de Paraguay.'],
        'tejido-de-alambre' => ['slug' => 'tejido-de-alambre-romboidal-cerco', 'alt' => 'Tejido de alambre romboidal instalado como cerco perimetral en una chacra.'],
        'glifosato' => ['slug' => 'glifosato-bidon-pulverizacion-campo', 'alt' => 'Productor con equipo de protección preparando un bidón de glifosato para pulverizar el campo.'],
        'herbicidas' => ['slug' => 'herbicida-control-malezas-pastura', 'alt' => 'Pulverización de herbicida selectivo para controlar malezas de hoja ancha en una pastura.'],
        'fertilizantes' => ['slug' => 'fertilizante-granulado-bolsas-campo', 'alt' => 'Fertilizante granulado en la mano de un productor junto a bolsas en el campo.'],
        'semillas' => ['slug' => 'semillas-de-pasturas-siembra-campo', 'alt' => 'Semillas de pasturas en la mano de un productor antes de la siembra en Paraguay.'],
        'bebederos' => ['slug' => 'bebederos-para-gallinas-galpon', 'alt' => 'Gallinas tomando agua de bebederos plásticos en un galpón de campo.'],
        'veterinaria' => ['slug' => 'atencion-veterinaria-perro-consultorio', 'alt' => 'Veterinaria revisando a un perro sobre la camilla de un consultorio.'],
        'veterinario-a-domicilio' => ['slug' => 'veterinario-a-domicilio-revisando-gato', 'alt' => 'Veterinario a domicilio revisando a un gato en el living de una casa.'],
        'veterinario-rural' => ['slug' => 'veterinario-rural-revisando-vaca', 'alt' => 'Veterinario rural revisando una vaca en la manga de una estancia en Paraguay.'],
        'antipulgas' => ['slug' => 'antipulgas-para-perros-collar', 'alt' => 'Perro con collar antipulgas descansando en el pasto del patio.'],
        'garrapaticidas' => ['slug' => 'garrapaticida-bano-bovinos-aspersion', 'alt' => 'Aplicación de garrapaticida por aspersión a bovinos en la manga de una estancia.'],
        'vacunas-ganado' => ['slug' => 'vacunas-para-ganado-conservadora-frio', 'alt' => 'Vacunas para ganado conservadas en una conservadora con hielo junto al corral.'],
        'vitaminas' => ['slug' => 'vitaminas-para-animales-frascos-jeringa', 'alt' => 'Frascos de vitaminas para animales y una jeringa sobre un banco de madera en el galpón.'],
        'jeringas' => ['slug' => 'jeringas-veterinarias-pistola-dosificadora', 'alt' => 'Jeringas veterinarias, pistola dosificadora y agujas ordenadas sobre una mesa de trabajo.'],
        'raticidas' => ['slug' => 'raticida-cebadero-deposito-granos', 'alt' => 'Cebadero de raticida colocado junto a la pared de un depósito de granos.'],
        'insecticidas' => ['slug' => 'hormiguicida-hormigas-cortadoras-huerta', 'alt' => 'Hormigas cortadoras llevando hojas en una huerta, junto a cebo hormiguicida.'],
        'fumigadoras' => ['slug' => 'mochila-fumigadora-productor-huerta', 'alt' => 'Productor usando una mochila fumigadora manual en una huerta.'],
    ],
    'segmentos' => [
        'bovinos' => ['slug' => 'productos-veterinarios-para-bovinos-estancia', 'alt' => 'Rodeo de bovinos en una pastura de una estancia ganadera de Paraguay.'],
        'mascotas' => ['slug' => 'productos-para-perros-y-gatos-hogar', 'alt' => 'Perro y gato descansando juntos en el patio de una casa en Paraguay.'],
        'aves' => ['slug' => 'productos-para-gallinas-ponedoras-galpon', 'alt' => 'Gallinas ponedoras en un galpón de campo con nidos de madera.'],
        'porcinos' => ['slug' => 'productos-para-cerdos-chiquero', 'alt' => 'Cerdos en un chiquero limpio con comedero y bebedero en una chacra.'],
        'equinos' => ['slug' => 'productos-para-caballos-estancia', 'alt' => 'Caballo criollo atado a un palenque en una estancia de Paraguay.'],
        'envio-san-pedro' => ['slug' => 'agroveterinaria-envio-san-pedro-camino', 'alt' => 'Camino de tierra roja entre pasturas en el departamento de San Pedro, Paraguay.'],
        'envio-asuncion' => ['slug' => 'agroveterinaria-envio-asuncion-ciudad', 'alt' => 'Entrega de un paquete de productos para mascotas en una calle arbolada de Asunción.'],
        'envio-san-lorenzo' => ['slug' => 'agroveterinaria-envio-san-lorenzo-patio', 'alt' => 'Patio de una casa en San Lorenzo con huerta y gallinas, destino de un envío.'],
    ],
    'guias' => [
        'como-usar-curabichera' => ['slug' => 'como-usar-curabichera-ombligo-ternero', 'alt' => 'Curación del ombligo de un ternero recién nacido con curabichera en el campo.'],
        'cada-cuanto-desparasitar' => ['slug' => 'cada-cuanto-desparasitar-perro-cachorro', 'alt' => 'Cachorro recibiendo un antiparasitario oral en casa.'],
        'ivermectina-en-animales' => ['slug' => 'ivermectina-en-animales-bovino-inyeccion', 'alt' => 'Aplicación subcutánea de un antiparasitario inyectable a un bovino en la manga.'],
        'cuanto-alambre-necesito' => ['slug' => 'cuanto-alambre-necesito-alambrado-potrero', 'alt' => 'Alambrado nuevo de varios hilos alrededor de un potrero en Paraguay.'],
        'control-de-malezas-en-pasturas' => ['slug' => 'control-de-malezas-en-pasturas-hoja-ancha', 'alt' => 'Malezas de hoja ancha creciendo en una pastura de Paraguay.'],
        'sal-mineral-para-ganado' => ['slug' => 'sal-mineral-para-ganado-epoca-seca', 'alt' => 'Vacas junto a un saladero en época seca en el Chaco paraguayo.'],
        'sulfato-de-amonio' => ['slug' => 'sulfato-de-amonio-fertilizante-cristales', 'alt' => 'Cristales blancos de sulfato de amonio en la palma de una mano sobre el suelo.'],
        'humus-de-lombriz' => ['slug' => 'humus-de-lombriz-abono-organico-huerta', 'alt' => 'Humus de lombriz oscuro en las manos junto a plantines de la huerta.'],
        'nitrato-de-calcio' => ['slug' => 'nitrato-de-calcio-tomates-huerta', 'alt' => 'Plantas de tomate con frutos en una huerta regada por goteo.'],
        'tordon-herbicida' => ['slug' => 'herbicida-tordon-pastura-malezas', 'alt' => 'Pastura con arbustos y malezas de hoja ancha antes del control con herbicida.'],
        'alambre-dulce' => ['slug' => 'alambre-dulce-atando-varilla', 'alt' => 'Mano atando una varilla del alambrado con alambre dulce.'],
        'terramicina-veterinaria' => ['slug' => 'terramicina-veterinaria-oxitetraciclina-frasco', 'alt' => 'Frasco de antibiótico veterinario inyectable junto a una conservadora en el campo.'],
        'calendario-sanitario-bovino' => ['slug' => 'calendario-sanitario-bovino-vacunacion', 'alt' => 'Vacunación de terneros en la manga como parte del calendario sanitario bovino.'],
        'garrapata-en-bovinos' => ['slug' => 'garrapata-en-bovinos-control', 'alt' => 'Garrapatas adheridas a la piel de un bovino, detalle de la infestación.'],
        'pulgas-y-garrapatas-en-perros' => ['slug' => 'pulgas-y-garrapatas-en-perros-revision', 'alt' => 'Dueño revisando el pelaje de su perro en busca de pulgas y garrapatas.'],
        'doramectina' => ['slug' => 'doramectina-antiparasitario-bovinos', 'alt' => 'Novillos en el corral antes de una desparasitación con antiparasitario inyectable.'],
        'albendazol-veterinario' => ['slug' => 'albendazol-veterinario-dosificacion-oral', 'alt' => 'Dosificación oral de un antiparasitario a una oveja con pistola dosificadora.'],
        'como-eliminar-ratas' => ['slug' => 'como-eliminar-ratas-galpon-deposito', 'alt' => 'Depósito de granos ordenado con bolsas sobre tarimas para prevenir ratas.'],
        'hormigas-cortadoras' => ['slug' => 'como-eliminar-hormigas-cortadoras-nido', 'alt' => 'Nido de hormigas cortadoras en el suelo de una chacra.'],
    ],
];
