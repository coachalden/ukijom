<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Konsep Web Saya

Web yang saya buat ini adalah sebuah buku nota digital


### Fitur Yang Tersedia


- Halaman user (home)
- Authentication(register,login)
- Multi user(Admin : mengelola crud,database) (User)

## Akun Default Untuk Pengujian

-Admin:
    Email : admin@gmail.com
    pasword : admin12

 -User:
     Email : user@gmail.com
     pasword : user12
     


### ERD
![ERD](https://raw.githubusercontent.com/coachalden/ukijom/refs/heads/main/erd.png)

### UML
![fotouml](https://raw.githubusercontent.com/coachalden/ukijom/refs/heads/main/uml.jpg)


Tabel Failed_Jobs,
Personal_access_tokens,
Password_reset_tokens,migration di abaikan saja karena bawaan laravel
## Teknologi Yang Digunakan
Laravel 10
Bootstrap 5

## Syarat Instalasi
-PHP 8.2.0 & Web Server Apache
-Database (MariaDB)
-Web Browser (Chrome)

## Instalasi

1.Clone repositori
git clone https://github.com/coachalden/ukijom.git

2.Konfigurasi Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projectukk
DB_USERNAME=root
DB_PASSWORD=

3.Melakukan Migrasi
php artisan migrate

4.Mulai Situs Web
php artisan serve

Dibuat oleh coachAden
