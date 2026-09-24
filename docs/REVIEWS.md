# Reviews: collecting real ones (never invented)

The site is already built to show reviews: `partials/testimonials.php` renders the band on
the homepage automatically as soon as `content/site.php` → `testimonials` has at least one
entry. With no entries it shows the "Para quién" band instead. **Nothing is ever invented**:
a fake review is misleading advertising under Paraguay's consumer law (Ley 1334/98) and
breaks Google's review policies, and one discovered fake costs more trust than ten real ones earn.

## 1. Ask every customer, the day after delivery

Send this by WhatsApp from +595 992 279599 (copy, adjust the name):

> Hola {nombre}, ¿te llegó bien el pedido de {producto}? Si tenés un minuto, contanos en
> una o dos frases cómo te fue. Con tu permiso lo publicamos en agroveterinaria.com.py con
> tu nombre y tu ciudad (sin teléfono). ¡Gracias!

Only publish when the answer includes a clear yes to publishing. Save the WhatsApp
message as proof of consent: screenshot → Drive folder `agroveterinaria/opiniones/`.

## 2. Add it to the site

In `content/site.php`, add one entry per review:

```php
'testimonials' => [
    [
        'quote'    => 'Pedí sal mineral y curabichera un lunes y el miércoles ya estaba en Santaní.',
        'name'     => 'Ramón G.',          // first name + initial is enough
        'business' => 'Ganadero',          // or null
        'city'     => 'San Estanislao',    // or null
        'since'    => null,                // year, or null
    ],
],
```

The example above is a format example only. Do not publish it. Then run `./verify.sh`,
commit and merge; with Git deploy it goes live by itself. Three or more reviews make the
band look complete; one is fine to start.

## 3. Google reviews (once a partner has an address)

When a partner store or vet with a real address has a Google Business Profile, send its
review link (Google Business Profile → "Pedir reseñas") in the same WhatsApp message. Maps
ranking depends heavily on the number and recency of those reviews. Never pay for, swap or
write reviews.

## 4. Photos

Real photos from the first deliveries (a customer's corral with the products, a delivery
at the terminal), with permission, beat any generated image for trust. Send them to the
session with the `webimg-pipeline` skill ("When the images start on Anton's PC") and they
replace the generated ones under the same file names.
