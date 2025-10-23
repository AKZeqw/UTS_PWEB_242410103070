# 🛒 Toko Barang - Sistem Manajemen Barang Toko Sederhana (Tanpa Database)

Proyek ini adalah aplikasi web sederhana yang dibangun menggunakan framework Laravel 🚀 untuk menampilkan data barang di toko. Aplikasi ini **tidak menggunakan database** untuk fungsi intinya; data pengguna dan barang dikelola secara *hardcoded* dalam kode. Fitur yang tersedia meliputi login, dashboard, tampilan data barang, dan profil pengguna.

## ✨ Fitur Utama

* 🔑 **Login Pengguna:** Sistem autentikasi sederhana (tanpa database). Gunakan kredensial berikut:
    * Username: `admin`
    * Password: `admin`
* 📊 **Dashboard:** Halaman utama setelah login, menampilkan ringkasan data statis (total barang, kategori, stok).
* 📦 **Pengelolaan Barang:** Menampilkan daftar barang yang sudah ditentukan dalam kode (nama, kategori, stok, harga) dalam bentuk tabel. **Data ini tidak berasal dari database.**
* 👤 **Profil Pengguna:** Halaman untuk menampilkan informasi profil statis pengguna yang sedang login.
* 🚪 **Logout:** Fungsi untuk keluar dari aplikasi.

## ⚙️ Persyaratan Sistem

* 🐘 PHP ^8.2
* 🎼 Composer
* 🟢 Node.js & NPM (untuk build aset frontend)

## 🛠️ Instalasi & Setup

1.  **Clone repository:**
    ```bash
    git clone <URL_REPOSITORY_ANDA>
    cd <NAMA_DIREKTORI_PROYEK>
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
    *(Tidak perlu konfigurasi database karena aplikasi tidak menggunakannya).*

4.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
    *(Perintah `php artisan migrate` **tidak diperlukan** karena tidak ada database yang digunakan).*

5.  **Install dependensi Node.js:**
    ```bash
    npm install
    ```

6.  **Build aset frontend (CSS/JS):**
    ```bash
    npm run build
    ```

7.  **Jalankan server development:**
    ```bash
    php artisan serve
    ```

8.  **Akses Aplikasi:**
    🌐 Buka browser dan kunjungi `http://localhost:8000` (atau URL yang ditampilkan oleh `php artisan serve`).

## 🚀 Penggunaan

* Masuk menggunakan kredensial:
    * 👤 Username: `admin`
    * 🔒 Password: `admin`
* Jelajahi fitur Dashboard, Pengelolaan Barang, dan Profil melalui navbar. Ingat bahwa data barang bersifat statis dan didefinisikan di `app/Http/Controllers/PageController.php`.

## 🏗️ Dibangun Dengan

* <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="20" alt="Laravel Logo"> [Laravel](https://laravel.com/) - Framework PHP
* <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" width="20" alt="Bootstrap Logo"> [Bootstrap](https://getbootstrap.com/) - Framework CSS (via CDN)
* <img src="https://fontawesome.com/favicon.ico" width="16" alt="Font Awesome Logo"> [Font Awesome](https://fontawesome.com/) - Ikon (via CDN)
* <img src="https://sweetalert2.github.io/images/favicon.png" width="16" alt="SweetAlert2 Logo"> [SweetAlert2](https://sweetalert2.github.io/) - Notifikasi popup (via CDN)

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
