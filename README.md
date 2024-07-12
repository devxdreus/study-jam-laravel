# Study Jam Laravel

## Deskripsi

Selamat datang di project Study Jam Laravel! Dalam study jam ini, kita akan belajar bersama untuk membangun sebuah website blog menggunakan Laravel. Study jam ini terdiri dari empat sesi pertemuan yang akan membahas topik-topik penting dalam pengembangan aplikasi web dengan Laravel.

## Daftar Pertemuan

1. **Introduction to Laravel**

    - Pengenalan Laravel dan instalasinya
    - Struktur dasar project Laravel
    - Routing dan Controller dasar

2. **Database & Eloquent**

    - Konfigurasi database di Laravel
    - Pengenalan Eloquent ORM
    - Membuat dan mengelola migrasi, seeding, dan model

3. **REST API**

    - Membuat RESTful API dengan Laravel
    - Menangani permintaan HTTP (GET, POST, PUT, DELETE)
    - Validasi data dan error handling

4. **Authentication & Authorization**
    - Pengenalan sistem otentikasi di Laravel
    - Implementasi registrasi dan login pengguna
    - Manajemen otorisasi dan middleware

## Teknologi yang Digunakan

-   **Laravel:** Framework PHP untuk pengembangan web yang elegan dan ekspresif.
-   **MySQL:** Sistem manajemen basis data relasional untuk penyimpanan data.
-   **Composer:** Manajer dependensi untuk PHP.
-   **PHP:** Bahasa pemrograman yang digunakan untuk pengembangan aplikasi web.

## Persyaratan

-   **PHP >= 7.3**
-   **Composer**
-   **MySQL**
-   **Node.js & NPM (opsional, untuk pengelolaan aset front-end)**

## Instalasi

1. Clone repositori ini:

    ```bash
    git clone https://github.com/username/study-jam-laravel.git
    ```

2. Masuk ke direktori project:

    ```bash
    cd study-jam-laravel
    ```

3. Instal dependensi dengan Composer:

    ```bash
    composer install
    ```

4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:

    ```bash
    cp .env.example .env
    ```

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Migrasikan database:

    ```bash
    php artisan migrate --seed
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Struktur project

-   `app/` - Berisi kode sumber aplikasi
-   `database/` - Berisi migrasi dan seeder database
-   `routes/` - Berisi file routing aplikasi
-   `resources/` - Berisi view dan aset front-end

---

project ini dibuat oleh **M. Andri Firdaus** sebagai bagian dari kegiatan **Dicoding dan GDSC ULM**.
Terima kasih telah bergabung dalam Study Jam Laravel ini. Selamat belajar dan semoga bermanfaat!
