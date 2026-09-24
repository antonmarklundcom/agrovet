# Content brief — agroveterinaria.com.py (v1 build)

You are writing content for a PHP brochure site (no framework) in `/home/user/agrovet`.
Content is data: each page is one PHP file returning an array. Templates already exist.
**Do not edit anything outside the files you are told you own. Do not git commit or push.**

## The business (read carefully — it constrains every sentence)

- agroveterinaria.com.py is an **online** agroveterinaria for all of Paraguay: people send a
  product list by WhatsApp or form, get a free quote with the shipping cost, and confirm if it
  suits them. There is **no physical store, no address, no named vet yet**.
- So never claim: an address, a store, stock levels, specific brands in stock, prices, delivery
  times, years of experience, number of clients, testimonials, certifications, SENACSA
  registration, "the best/cheapest", or a named professional.
- Allowed promises: free quote without commitment ("cotización sin costo y sin compromiso"),
  shipping to all of Paraguay with cost given in the quote, answer by WhatsApp, prescription
  products only with a vet's prescription.
- Price keywords: we do NOT publish prices. Answer "¿cuánto cuesta…?" with "depende de
  presentación, marca y cantidad; mandanos… y te respondemos con precio y envío".

## Register and style

- Paraguayan Spanish with **voseo**: "mandanos", "contanos", "cotizá", "tenés", "querés".
- Proof by specificity: concrete situations from the field (ombligo del ternero, manga,
  castración, verano, sequía, pasturas, galpón), not adjectives. No superlatives, no emojis.
- Structure: the problem/risk → how it works → what we offer → how to quote.

## Health and safety rules (non-negotiable)

- **No dose numbers** (mg/kg, ml per animal, litres per hectare, days of withdrawal). Write
  "según la etiqueta" / "consultá a tu veterinario" / "respetá el tiempo de retiro que indica la
  etiqueta". Product classes and active-ingredient *names* are fine when you are sure they are
  correct (e.g. ivermectina, doramectina, albendazol, fipronil, glifosato, 2,4-D, picloram,
  urea, NPK 15-15-15); if unsure, leave it out.
- Veterinary products are **never for people**. Ivermectina pages say so explicitly and never
  answer human-use questions.
- Antibiotics: "venta bajo receta veterinaria".
- Herbicides: mention reading the label, protective equipment, and registered use (SENAVE) in
  general terms; no application rates.
- Vet pages: "si es una emergencia grave, acudí a la clínica veterinaria más cercana".

## The exemplar — copy it

`content/services/curabichera.php` is the finished model. Copy its **exact key set**, its
register, its length (±30 %) and structure: `order, path, title, navLabel, cluster, parent,
seoTitle, metaDescription, hero{eyebrow,h1,h2,lead}, includes[], excludes[], weNeed[],
sections[{h2,body[],items[{title,text}]}], benefits[{title,text}], faq[{q,a}],
cta{label,whatsappText:''}, related[], guides[], articles[], toolLinks[{path,label,text}]`.

- `excludes` renders under the heading "Importante": use it for safety/receta/label notes.
- `weNeed` renders under "Para cotizarte, contanos".
- 2 sections (the second may have `items => []`), 3 benefits, 4–5 FAQ.
- `seoTitle` **≤ 42 characters** (count them; accents count as 1). Put the primary keyword
  first; add "precio" when that keyword is searched with "precio". The site appends
  " | Agroveterinaria".
- `metaDescription` **120–155 characters**, unique, contains the primary keyword, ends with a
  reason to click (cotización sin costo / envío a todo Paraguay).
- `hero.h1` contains the primary keyword naturally. Use secondary keywords in h2s, FAQ questions
  and body copy where they read naturally — never stuffed.

## Valid link targets (use only these)

Product/service slugs (for `related`, 2–3 each):
curabichera, antiparasitarios-para-perros, antiparasitarios-para-gatos,
antiparasitarios-para-ganado, ivermectina, antibioticos-veterinarios, sal-mineral, balanceados,
alimento-para-mascotas, alambre, tejido-de-alambre, glifosato, herbicidas, fertilizantes,
semillas, bebederos, veterinaria, veterinario-a-domicilio, veterinario-rural, antipulgas,
garrapaticidas, vacunas-ganado, vitaminas, jeringas, raticidas, insecticidas, fumigadoras

Guide slugs (for `guides`, 0–1 each): como-usar-curabichera, cada-cuanto-desparasitar,
ivermectina-en-animales, cuanto-alambre-necesito, control-de-malezas-en-pasturas,
sal-mineral-para-ganado, sulfato-de-amonio, humus-de-lombriz, nitrato-de-calcio,
tordon-herbicida, alambre-dulce, terramicina-veterinaria, calendario-sanitario-bovino, garrapata-en-bovinos,
pulgas-y-garrapatas-en-perros, doramectina, albendazol-veterinario, como-eliminar-ratas, hormigas-cortadoras

Tool links (for `toolLinks`, only where relevant):
`/herramientas/calculadora-de-alambrado/` (metros y rollos de alambre para un alambrado),
`/herramientas/calculadora-de-fertilizante/` (bolsas de fertilizante por hectárea).

## Self-check before you report

1. `php -l` every file you wrote.
2. Start `php -S 127.0.0.1:<your port> router.php` in `/home/user/agrovet` (background), curl
   each of your routes: HTTP 200, `<title>` ≤ 60 characters, exactly one `<h1>`, and no
   "Warning", "Notice", "Deprecated" or "Fatal" in the HTML. Kill the server afterwards.
   (Other writers work in parallel; a related slug whose file is not there yet is fine.)
3. Report: files written, each seoTitle with its length, and any deviation from this brief.

---

## Round 2 — segment pages (species hubs and delivery pages)

Segment records live in `content/segmentos/<slug>.php`, one file each, returning ONE record
(route files already exist). Rendered by `templates/segment.php` (read it). Exact key set:

`order, path, navLabel, seoTitle (≤ 42 chars), metaDescription (120–155), hero{eyebrow,h1,lead},
leadSlug, bundle[], traps[{title,text}], sections[{h2,body[],items[{title,text}]}], weNeed[], faq[{q,a}]`

- `leadSlug`: ONE product slug from the valid list — the most valuable product for this page.
  The page's WhatsApp text, form and CRM tag come from it.
- `bundle`: 4–8 product slugs from the valid list, shown as cards ("Lo que te conviene tener a mano").
- `traps`: 3–4 costly mistakes for this audience (renders under "Los errores que más cuestan").
  No statistics.
- `sections`: 1–2 blocks. `weNeed`: 3–4 items ("Para cotizarte, contanos"). `faq`: 4–5.
- Same register, business rules and safety rules as above. Length about 70 % of a product page.
