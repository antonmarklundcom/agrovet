# Roadmap: agroveterinaria.com.py

## Strategy (from research/kwp.csv)

- **Mostly products.** Searches for farm services are tiny (10–50 a month each). Search
  volume is in product categories and in "agroveterinaria" itself.
- **Pet vet searches are the biggest group** (veterinario cerca de mi 14.800,
  veterinaria 8.100), but "cerca de mí" searches are answered by the Google Maps local
  pack. The `/veterinaria/` pages capture the rest now. Winning Maps needs a partner vet
  with a Google Business Profile (the `gbp-optimizer` skill covers that step).
- **Leads now, sales later.** Every page ends in a WhatsApp message that names the
  product, plus a VenderCRM lead tagged by category. When a partner is signed, the
  tags route leads to them. Tier A leads (bulk farm inputs) are worth the most.

## v1 pages (this build)

| Page | Main keyword (searches a month) |
|---|---|
| `/` | agroveterinaria 2.400 · agropecuaria 1.300 · agroveterinaria cerca de mi 1.000 |
| `/productos/curabichera/` | curabichera / cura bichera / cura bicheras 1.300 each |
| `/productos/antiparasitarios-para-perros/` | antiparasitario para perros 1.000 |
| `/productos/antiparasitarios-para-gatos/` | antiparasitario para gatos 390 |
| `/productos/antiparasitarios-para-ganado/` | antiparasitario para cerdos 110 · vacas 70 |
| `/productos/ivermectina-veterinaria/` | ivomec / invectina / ivermin para perros 480 each |
| `/productos/antibioticos-veterinarios/` | antibióticos para perros 210 · terramicina 170 |
| `/productos/sal-mineral-para-ganado/` | sal mineral para ganado 170 · sal mineral 140 |
| `/productos/balanceado-para-animales/` | balanceado 210 · para cerdo 110 · gallina ponedora 90 |
| `/productos/alimento-para-perros-y-gatos/` | comida para perros 480 · balanceado para perros 260 |
| `/productos/alambre/` | alambre 720 · púas 480 · dulce 390 |
| `/productos/tejido-de-alambre/` | tejido de alambre 1.300 · precio 320 |
| `/productos/glifosato/` | glifosato 1.000 |
| `/productos/herbicidas/` | herbicida 590 · mata yuyo 390 · tordon 260 |
| `/productos/fertilizantes/` | fertilizante 720 · humus 320 · sulfato de amonio 320 |
| `/productos/semillas/` | semillas 720 |
| `/productos/bebederos-para-animales/` | bebederos para gallinas 170 |
| `/veterinaria/` | veterinaria 8.100 · clínica veterinaria 1.000 · 24 horas 1.600 |
| `/veterinaria/a-domicilio/` | veterinario a domicilio 50 (+ long tail) |
| `/veterinaria/grandes-animales/` | veterinario rural · asesoramiento ganadero |
| 6 guides | ivermectina para qué sirve 1.300 (animals only), curabichera, desparasitar, alambre, malezas, sal mineral |
| 2 calculators | alambrado (metres and rolls), fertilizante (bags per hectare) |

## Next

1. **Keyword Planner round 2** for groups the first export did not cover: flea and tick
   products for pets, rat poison and insecticides, garrapaticida, vaccines, horses,
   poultry, pasture seeds by name. Seeds are in the chat.
2. **Images:** Higgsfield (model and settings chosen by Anton). Every product page has
   an image slot waiting. Also replace `assets/img/og-default.png`.
3. **Homepage v2:** the AGRO FIELD layout from the old recon (split hero, order list,
   cold-chain section).
4. **Order list** ("armá tu pedido"): pick products and quantities, send one WhatsApp
   message and one CRM lead. Build it in php-site-template so other store sites get it.
5. **Department pages** for the top towns (San Pedro 1.000, Asunción 390, San Lorenzo 260),
   but only once there is real delivery or partner coverage to describe. Thin
   location pages hurt.
6. **Species hubs** (`/bovinos/`, `/mascotas/`, `/aves/`, `/porcinos/`, `/equinos/`) using
   the segment template.
7. **Blog:** seasonal topics (bichera season, dry-season supplements, vaccination campaigns).
8. **Off-site:** Google Search Console, a sitemap submission, and a Google Business Profile
   once a partner with an address exists.
9. **Sales:** once lead volume proves demand, add a catalogue with prices and online
   payment as a separate shop app (e.g. `tienda.agroveterinaria.com.py`).
