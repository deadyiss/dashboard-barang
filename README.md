# Dashboard Barang

Dashboard ini adalah aplikasi inventaris sederhana berbasis PHP dengan template SB Admin 2.

Isi utama:

- Halaman dashboard untuk ringkasan dan navigasi.
- Manajemen data barang: tambah, edit, hapus.
- Cetak laporan barang ke PDF menggunakan `Html2Pdf`.
- Halaman login hanya sebagai tampilan (belum ada autentikasi backend lengkap).
- Routing sederhana melalui `routes.php`.

Cara deploy:

1. Pastikan PHP terpasang di sistem.
2. Membuat user MySQL
   ```bash
   CREATE USER IF NOT EXISTS 'webuser'@'127.0.0.1' IDENTIFIED BY 'web123';
   GRANT ALL PRIVILEGES ON db_praktikum_php.* TO 'webuser'@'127.0.0.1';
   FLUSH PRIVILEGES;
   ```
3. Jalankan server PHP dari folder proyek ini:
   ```bash
   php -S localhost:8000
   ```
4. Akses aplikasi di browser:
   ```
   http://localhost:8000
   ```

Catatan tambahan:

- Tombol `Cetak PDF` membuka `pages/barang/cetak.php`.
- PDF saat ini ditampilkan di browser secara inline.
- Login belum terhubung ke sistem autentikasi nyata.

