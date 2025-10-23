# 🛒 Toko Barang - Sistem Manajemen Barang Toko Sederhana

Proyek ini adalah aplikasi web sederhana yang dibangun menggunakan framework Laravel 🚀 untuk mengelola barang di toko. Aplikasi ini menyediakan fungsionalitas dasar seperti login, dashboard, pengelolaan data barang, dan tampilan profil pengguna.

## ✨ Fitur Utama

* 🔑 **Login Pengguna:** Sistem autentikasi sederhana untuk masuk ke aplikasi. (Username: `admin`, Password: `admin`)
* 📊 **Dashboard:** Halaman utama setelah login, menampilkan ringkasan data seperti total barang, jumlah kategori, dan total stok.
* 📦 **Pengelolaan Barang:** Menampilkan daftar barang yang ada di toko beserta detailnya (nama, kategori, stok, harga) dalam bentuk tabel.
* 👤 **Profil Pengguna:** Halaman untuk menampilkan informasi profil pengguna yang sedang login.
* 🚪 **Logout:** Fungsi untuk keluar dari aplikasi.

## ⚙️ Persyaratan Sistem

* 🐘 PHP ^8.2
* 🎼 Composer
* 🟢 Node.js & NPM

## 🛠️ Instalasi & Setup

1.  **Clone repository:**
    ```bash
    git clone https://github.com/AKZeqw/UTS_PWEB_242410103070.git
    cd UTS_PWEB_242410103070
    ```

2.  **Install dependensi PHP:**
    ```bash
    composer install
    ```

3.  **Setup file environment:**
    Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```
    ✍️ Sesuaikan konfigurasi database dan variabel environment lainnya jika diperlukan di dalam file `.env`.

4.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5.  **Jalankan migrasi database:**
    Perintah ini akan membuat tabel-tabel yang diperlukan (users, cache, jobs, dll.).
    ```bash
    php artisan migrate
    ```
    *(📝 Catatan: Pastikan file database SQLite (`database/database.sqlite`) dapat dibuat atau sudah ada jika menggunakan SQLite).*

6.  **Install dependensi Node.js:**
    ```bash
    npm install
    ```

7.  **Build aset frontend (CSS/JS):**
    ```bash
    npm run build
    ```

8.  **Jalankan server development:**
    Gunakan perintah `serve` dari Artisan atau script `dev` dari `composer.json`.
    ```bash
    php artisan serve
    ```
    atau (jika ingin menjalankan semua proses development sekaligus):
    ```bash
    composer run dev
    ```

9.  **Akses Aplikasi:**
    🌐 Buka browser dan kunjungi `http://localhost:8000` (atau URL yang ditampilkan oleh `php artisan serve`).

## 🚀 Penggunaan

* Masuk menggunakan kredensial default:
    * 👤 Username: `admin`
    * 🔒 Password: `admin`
* Jelajahi fitur Dashboard, Pengelolaan Barang, dan Profil melalui navbar.

## 🏗️ Dibangun Dengan

* <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="20" alt="Laravel Logo"> [Laravel](https://laravel.com/) - Framework PHP
* <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" width="20" alt="Bootstrap Logo"> [Bootstrap](https://getbootstrap.com/) - Framework CSS (via CDN)
* <img src="https://fontawesome.com/favicon.ico" width="16" alt="Font Awesome Logo"> [Font Awesome](https://fontawesome.com/) - Ikon (via CDN)
* <img src="https://sweetalert2.github.io/images/favicon.png" width="16" alt="SweetAlert2 Logo"> [SweetAlert2](https://sweetalert2.github.io/) - Notifikasi popup (via CDN)

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
