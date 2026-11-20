# KELOMPOK 6 — Luxury storefront

PHP 8+ / MySQL e-commerce starter designed for PHP shared hosting such as InfinityFree. GitHub Pages does not execute PHP; this repository's PHP app must be uploaded to a PHP host.

## Install
1. Create a MySQL database in your hosting panel. Import `database.sql` using phpMyAdmin. If the host does not allow `CREATE DATABASE` / `USE`, remove those first two SQL lines before importing into the database you selected.
2. Copy `config.example.php` to `config.php`, then enter the exact database host/name/user/password from the hosting panel. Do not commit `config.php`.
3. Upload the project files to the hosting account's `htdocs` directory. Ensure PHP can write to `uploads/products`, `uploads/categories`, and `uploads/banners` (the app creates these folders as needed).
4. Visit `/install.php` once and create an administrator password with at least 12 characters.
5. Immediately delete `install.php` using the host file manager.
6. Sign in at `/admin/login.php`, add categories and products, and configure the homepage/store settings.

## Features implemented
Responsive storefront, catalog search/filter/sort/pagination, product pages, session cart with server-side prices, transactional checkout and stock deduction, order confirmation and admin order management, secure password hashing, CSRF checks, product/category/hero uploads (JPG/PNG/WEBP, 5 MB), settings and homepage CMS, dashboard counters, and PDO prepared statements.

No payment gateway or shipping carrier integration is included: orders remain awaiting payment; coordinate payment with the customer outside the site. No customer accounts, variants, extra product gallery, or automated email are included. Admin can change order status. Revenue counts Paid/Processing/Shipped/Completed orders.

## Security and operations
Use HTTPS. Keep `config.php` private and remove `install.php` after setup. PHP and MySQL versions/features vary across shared hosts. Restrict `uploads` from script execution where `.htaccess` is honored. Back up the database and uploaded files. This project has not been run against the user's InfinityFree account or subjected to a complete deployment test; configure and test on staging first.
