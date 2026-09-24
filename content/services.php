<?php
/**
 * The service pages, keyed by slug. THIS SHAPE IS THE CONTRACT: a site fills the
 * empty keys and may add optional ones, but never renames or removes a key.
 * README.md ("Content model") documents it.
 *
 *   path             string   URL, always with a trailing slash. On a rebuild,
 *                             an existing URL is frozen for SEO — never change one.
 *   title            string   the page's own concept, used as the H1 fallback
 *   navLabel         string   short label for the mega-menu and the footer
 *   cluster          string   key into ui('clusters')
 *   parent           ?string  slug of the sub-hub this page sits under, if any
 *   seoTitle         string   <title> without the ' | <site name>' suffix,
 *                             <= 42 chars so the full title stays under 60
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, h2, lead
 *   includes         string[] the "qué incluye" checklist
 *   excludes         string[] the "qué no incluye" checklist (optional)
 *   weNeed           string[] the "qué necesitamos de usted" checklist (optional)
 *   sections         array    [['h2' => ..., 'body' => [paragraph, ...],
 *                              'items' => [['title' => ..., 'text' => ...]]], ...]
 *   benefits         array    [['title' => ..., 'text' => ...], ...]
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   cta              array    label (the button text)
 *   related          string[] sibling service slugs shown as cards
 *   guides           string[] guide slugs (content/guias.php)
 *   articles         string[] article slugs (content/blog.php)
 *   toolLinks        array    [['path' => ..., 'label' => ..., 'text' => ...], ...]
 *   example          bool     present ONLY on the seed record below. Deleting
 *                             every 'example' => true entry across content/ is
 *                             step 3 of "Start a new site (T0)" in README.md.
 *
 * Every service slug also needs a record in content/lead-values.php — verify.sh
 * fails the build when one is missing, because a service page whose form is not
 * in the lead value model quietly sends untagged leads.
 */

declare(strict_types=1);

/* Product categories and vet services live under /productos/ and /veterinaria/. One file per record in content/services/<slug>.php, returning that
   record; the file name is the slug. Records sort by their optional 'order'
   key (default 100), then by slug — so parallel writers never touch one file. */
$records = [];
foreach (glob(__DIR__ . '/services/*.php') ?: [] as $file) {
    $records[basename($file, '.php')] = require $file;
}
/* Group by cluster first (the order content/ui.php lists them), so the home grid
   and the footer read category by category like the mega-menu does. */
$clusterRank = array_flip(array_keys(content('ui')['clusters']));
uksort($records, static fn (string $a, string $b): int =>
    [$clusterRank[$records[$a]['cluster']] ?? 99, ($records[$a]['order'] ?? 100), $a]
    <=> [$clusterRank[$records[$b]['cluster']] ?? 99, ($records[$b]['order'] ?? 100), $b]);

return $records;
