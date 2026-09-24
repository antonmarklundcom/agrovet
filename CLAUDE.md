# agroveterinaria.com.py

Built on php-site-template (static HTML + PHP, Hostinger shared hosting, no database).
README.md explains the template; this file lists what is specific to this site.

- **No business behind it yet.** It is a lead-generation site until an operating
  partner (store, distributor or vet) is signed. Never claim an address, store,
  stock, brand in stock, price, delivery time, experience, clients, reviews or
  registration. `content/site.php` keeps every such value `null`.
- **Offer:** free quote by WhatsApp (+595 992 279599) or form, shipping to all of
  Paraguay with the cost in the quote. No prices published.
- **Register:** Paraguayan Spanish with voseo ("mandanos", "cotizá").
- **Safety:** no dose or application-rate numbers; vet products never for people;
  antibiotics only with a prescription; vet pages point serious emergencies to
  the nearest clinic.
- **One file per record:** product/service pages live in `content/services/<slug>.php`,
  guides in `content/guias/<slug>.php`, tools in `content/tools/<slug>.php`,
  species hubs and delivery pages in `content/segmentos/<slug>.php`. The
  matching `content/<type>.php` globs them. Every service and tool slug needs a
  record in `content/lead-values.php`.
- **Images:** planned in `content/images.php` (slug + alt per record) and
  `docs/imagery-manifest.json` (prompts, generation record). Generate with Higgsfield
  `gpt_image_2_5` / `sunburst` / medium, convert with webimg into `assets/img/`
  (`--widths 640,1280`, 21:9 band `640,1280,1920`). A slot renders only once its files exist.
- **Blog:** index records in `content/blog/<slug>.php`, bodies in `blog/<slug>/index.php`.
- **Business docs:** `docs/DEPLOY.md`, `docs/LEAD-SALES.md`, `docs/REVIEWS.md`.
- **Hub:** products live under `/productos/` (`servicesHub` in `content/site.php`);
  vet services under `/veterinaria/`.
- **Keyword data:** `research/kwp.csv` (Google Keyword Planner, Paraguay, CPC in SEK).
  `docs/ROADMAP.md` maps keywords to pages and lists what comes next.
- **Gate:** `./verify.sh` must pass before every push. There is no GitHub Actions
  workflow on purpose (it costs Actions minutes); do not add one without Anton's yes.
