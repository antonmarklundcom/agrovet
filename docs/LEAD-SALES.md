# Selling agroveterinaria.com.py leads to partners

The site already sorts every lead: each WhatsApp message names the product, and each form
lead lands in VenderCRM with a **tier** (A/B/C), a **category tag** (`sal-mineral`,
`garrapaticidas`, `alimento-para-mascotas`, `veterinario-rural`, …) and the customer's
**town**. A partner business then gets only the leads it can fulfil.

## 1. Who buys which leads

| Partner type | Categories (CRM tags) | Where to find them |
|---|---|---|
| Agroveterinaria with delivery | sanidad: curabichera, antiparasitarios, garrapaticidas, ivermectina, vitaminas, jeringas | Google Maps "agroveterinaria" per department capital; Facebook pages |
| Feed / salt distributor | sal-mineral, balanceados, bebederos | Distributors listed by feed mills; ask the agroveterinarias who supplies them |
| Fencing / hardware store (ferretería agrícola) | alambre, tejido-de-alambre, calculadora-alambrado | Ferreterías in San Pedro, Caaguazú, Concepción, Chaco towns |
| Agrochemical seller (SENAVE-registered) | glifosato, herbicidas, fertilizantes, semillas, insecticidas, fumigadoras | Agro-input shops, cooperative stores |
| Pet shop / pet-food distributor | alimento-para-mascotas, antipulgas, antiparasitarios-para-perros/gatos | Pet shops in Asunción and Central |
| Vets (clinic or rural) | veterinaria, veterinario-a-domicilio, veterinario-rural, vacunas-ganado | Vet clinics per city; Colegio de Veterinarios listings |

One partner per **category × department** keeps it exclusive, and exclusivity is what they
pay for.

## 2. Pricing models (start with 1, move to 2 or 3)

1. **Free trial, 2–4 weeks.** Send every matching lead for free, ask the partner to tell you
   which ones bought. This proves value and gives you the conversion rate you need for pricing.
2. **Pay per lead by tier.** Price each tier from the trial data: price ≈ partner's average
   gross margin per sale × conversion rate × 30–50 %. Tier A (bulk farm inputs) pays most.
3. **Monthly exclusivity fee** per category and department, once volume is steady. It is
   predictable for both sides and needs no per-lead counting.
4. **Commission on sales** (e.g. a % of the invoice). It pays best, but it depends on the
   partner reporting honestly. Use it only with partners you can audit (shared order list).

The `tierValues` in `content/lead-values.php` are Google Ads bidding signals, not prices. Set
partner prices from real trial data, never from those numbers.

## 3. How leads reach the partner

- **Now (manual):** VenderCRM → filter by tag + town → forward the WhatsApp contact to the
  partner. Answer the customer first ("te pasamos con nuestro proveedor en {zona}, te escribe hoy").
- **Later (automatic):** a VenderCRM pipeline per partner, with an automation on
  `fields.etiqueta` + department that assigns the deal and notifies the partner by WhatsApp or email.

## 4. The partner agreement (one page is enough)

- Categories and departments covered; exclusivity yes/no.
- Response time: contact the customer within 2 working hours.
- Price and payment: per lead / monthly / commission, invoiced monthly.
- Quality: legal products only; SENACSA/SENAVE registration where it applies; prescription
  drugs only against a vet prescription; honest prices.
- A lead counts as delivered when forwarded, not when sold (unless commission-based).
- Either side can end it with 15 days' notice. Leads stay the site's, not the partner's.

## 5. Opening message (WhatsApp to a prospect partner)

> Hola, soy Anton de agroveterinaria.com.py. Recibimos pedidos de {categoría} de productores
> de {departamento} que buscan en Google. No vendemos stock: pasamos cada pedido a un solo
> proveedor por zona. ¿Te interesa recibirlos gratis durante dos semanas para probar? Si te
> sirven, después acordamos un precio por pedido.

## 6. What makes leads worth more (already built or planned)

- Every WhatsApp prefill names the product; the order list sends quantities and the town.
- Next: ask for number of animals or hectares in the form (roadmap item), which lets partners
  price the lead.
- Reviews from the partner's real deliveries (see `docs/REVIEWS.md`) raise conversion, and
  therefore what each lead is worth.
