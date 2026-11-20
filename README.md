# KELOMPOK 6 — storefront untuk iPhone/Safari

Storefront statis berada di `index.html` dan berjalan di GitHub Pages. Tampilan dibuat mobile-first dengan katalog 2 kolom seperti contoh, produk pakaian, filter kategori, urutan harga, pencarian, detail produk, keranjang, dan tombol checkout WhatsApp.

## WhatsApp
Checkout menggunakan nomor toko **+62 819-5711-0305**. Setelah pelanggan memasukkan produk ke keranjang, pilih BAG → CHECK OUT VIA WHATSAPP. Pesan pesanan otomatis disiapkan lalu WhatsApp dibuka untuk dikirim.

## Menambah produk / mengubah harga
Tekan **KELOLA PRODUK** di bawah katalog. Tambah, ubah nama/harga/foto, atau hapus produk. Perubahan disimpan di penyimpanan browser Safari/perangkat yang dipakai. Untuk menampilkan perubahan kepada semua pengunjung, ekspor JSON dan minta pemilik repository memperbarui katalog di `assets/js/storefront.js`, lalu commit ke GitHub. Situs statis tidak memiliki admin/database online bersama; edit lokal tidak otomatis terlihat pada perangkat lain.

## GitHub Pages
Atur **Settings → Pages → Deploy from a branch → main → /(root)**. Tunggu proses publish dan buka `https://dwwt7p757c-design.github.io/kelompokk6/`. File PHP di repository hanya berfungsi pada hosting PHP/MySQL; GitHub Pages menyajikan versi HTML statis.

Produk dan gambar saat ini adalah contoh. Ubah informasi, harga, dan tautan gambar melalui pengelola produk. Gambar harus menggunakan URL publik HTTPS. Pembayaran, stok bersama, dan pencatatan order belum tersedia pada versi Pages.
