# KELOMPOK 6 — luxury storefront for GitHub Pages

The live-friendly storefront is `index.html` and works as a static site on GitHub Pages. It includes a responsive product catalog, category filters, search, sorting, product quick view, cart, and WhatsApp checkout handoff.

## Publish on GitHub Pages
In the repository, open **Settings → Pages**, choose **Deploy from a branch**, select `main` and `/ (root)`, then save. Wait for the Pages build and visit the published URL. `index.html` is the static entry point; the PHP files in this repository are not executed by GitHub Pages.

## Add products and change prices
Open the storefront and choose **MANAGE COLLECTION** below the product grid. Add, edit, or remove products. The catalog editor saves changes in the current browser's local storage, so it is useful for preview and product edits on that device. Click **EXPORT CATALOG JSON** to download the edited catalog. To publish those changes to all visitors, replace the contents of `assets/data/products.json` (or ask a developer to update `STARTER_CATALOG` in `assets/js/storefront.js`) and commit the updated catalog to the repository. The site currently uses starter products defined in that JavaScript file.

Because GitHub Pages is static, it cannot securely accept an admin login or save edits to a shared database. Local browser edits are not shared across devices and can be cleared by browser storage cleanup. Do not enter private customer information in this site.

## Checkout
The bag opens a WhatsApp order draft. Enter the store's WhatsApp number with country code when prompted (for Indonesia, for example `628...`). The customer must send the prepared message to place the order. The site does not process payments, shipping, inventory reservations, or persist orders. Configure a real PHP/MySQL host or commerce platform for secure shared catalog management and actual order processing.

## Design notes
Editorial serif and clean sans-serif typography, ivory/black/champagne palette, responsive layouts, and remote Unsplash demo product photography are used. Replace sample product names, prices, descriptions, and image URLs with your real catalog. Product image URLs must be publicly reachable over HTTPS.

The PHP/MySQL implementation and SQL schema are retained for deployment on a PHP host, but GitHub Pages only serves the static `index.html` experience.
