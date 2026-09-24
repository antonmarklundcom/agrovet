# Deploy agroveterinaria.com.py to Hostinger

The site is plain PHP 8.2 with no database and no build step: the files in the repo are
the site. There are two ways to put it online. **Use A.** B is the fallback.

## A. Git integration (recommended: every merge to `main` goes live by itself)

1. hPanel → **Websites** → agroveterinaria.com.py → **Manage** → **Advanced** → **GIT**.
2. `public_html` must be empty: delete Hostinger's default `index.php` / `default.php`
   in **File Manager** first, or the Git deploy is refused.
3. The repo is private, so Hostinger needs read access:
   - on the GIT page, copy the **SSH key** Hostinger shows;
   - GitHub → `antonmarklundcom/agrovet` → **Settings** → **Deploy keys** → **Add deploy key**,
     paste it, leave "Allow write access" **off**.
4. Back on the GIT page, **Create a new repository**:
   - Repository: `git@github.com:antonmarklundcom/agrovet.git`
   - Branch: `main`
   - Directory: leave **empty** (installs into `public_html`)
5. Click **Deploy**, then open **Auto deployment** and copy the webhook URL:
   GitHub → repo **Settings** → **Webhooks** → **Add webhook** → paste as Payload URL →
   "Just the push event" → **Add**. From now on a merge to `main` redeploys in seconds.

Everything that is not the site (`docs/`, `research/`, `tests/`, `deploy/`, `*.md`, `*.csv`,
`router.php`, …) is in the repo but `.htaccess` answers 404 for it.

## B. Zip upload (manual, one-off)

1. Build the zip: `./deploy/make-zip.sh` → `dist/agroveterinaria-<date>.zip`. It contains only
   the site files.
2. hPanel → **File Manager** → `public_html` → **Upload** the zip → right-click → **Extract**
   into `public_html` (not into a subfolder). Delete the zip afterwards.
3. Every later change means uploading a new zip. That is why A is better.

## After either method (both are required)

1. **SSL**: hPanel → **Security** → **SSL** → install the free certificate for
   `agroveterinaria.com.py` and `www.agroveterinaria.com.py`. `.htaccess` already sends
   `www` and `http` to `https://agroveterinaria.com.py` with a 301.
2. **`config.php`**: File Manager → `public_html` → copy `config.example.php` to
   `config.php` and fill it in. It is git-ignored, so deploys never overwrite it.
   - `SITE_URL` → `https://agroveterinaria.com.py`
   - `VENDERCRM_URL`, `VENDERCRM_API_KEY` → leads land in VenderCRM
   - `RESEND_API_KEY`, `LEAD_NOTIFY_TO`, `LEAD_FROM` → an email per lead
   - `GA4_ID` (and `ADS_ID` if you run Google Ads)

   Without the CRM and email keys, form leads are only written to `logs/leads.log`.
   WhatsApp works either way.
3. **Smoke test**: open `/`, one product page, `/herramientas/arma-tu-pedido/`, `/sitemap.xml`,
   and `/research/kwp.csv` (this one must be a 404). Send one test form and one WhatsApp message.
4. **Google Search Console**: add the domain property, verify it with the DNS TXT record
   (hPanel → Domains → DNS), then submit `https://agroveterinaria.com.py/sitemap.xml` and
   request indexing for `/`, `/productos/` and the top product pages.
