# ePOS - Laravel 5.8

## Instalasi

-   Clone project dari `repo` ini atau bisa juga download dengan berkas `zip` lalu ekstrak
-   Masuk ke dalam folder hasil download
-   Buka `terminal` (Linux, Unix) / `cmd` (Windows) ketikkan perintah di bawah ini :

    ```
    composer install
    ```

    Biarkan proses nya berjalan hingga selesai.

-   Copy file `.env.example` menjadi `.env` dengan perintah :

    ```
    cp .env.example .env
    ```

-   Lalu buka file `.env` setting pengaturan database sesuai dengan pengaturan database di pc / laptop

-   Lalu ketikkan perintah berikut :

    ```
    php artisan key:generate
    ```

-   Lalu jalankan perintah untuk generate seluruh database :

    ```
    php artisan migrate
    ```

    Catatan :

    Jika database sudah pernah di migrate maka jalankan :

    ```
    php artisan migrate:fresh
    ```

    untuk menghapus seluruh database yang sudah ada dan diganti dengan database yang ada di file `database/migrations`

-   Lalu import dummy database untuk kategori dengan perintah :

    ```
    php artisan db:seed
    ```

-   Jalankan server dengan perintah :

    ```
    php artisan serve
    ```

## Fitur yang tersedia

### Admin Panel

1. Management Category
2. Management Product

### Shop / User

1. Show Home Page
2. Show Detail Product
