<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Komponen penting di laravel

- routes -> web.php, untuk mendeteksi penjaluran setiap url yg dituliskan
- resources -> view, tempat tampilan htmml yg muncul
- public, tempat menyimpan aset2 statis yg bisa diakses (kaya foto, css dll)
- .env -> tempat menentukan environment dari apl laravel kita


## Blade
sebuah komponen engine yang gak usah diinstall lagi. intinya sintax next levelnya PHP jadi bisa bikin berbagai sintax PHP lebih simpel. contoh manfaat :
- meringkas penulisan jadi cuma {{  }} --> kalo ngambil data biasa 
- kalo data yg ingin menyelamatkan tag2 nya juga pake {!!  !!}
- bisa bikin yield, dimana fungsi yg berulang2 bisa dibikin disatu tempat jadi gk usah bikin2 terus (contoh : navbar)
- partial, kita bisa memilih tmapilan mana yg mau muncul mana yg gak mau


## MVC laravel
komponen MVC ada Model, View dan Controller

## Database
file yang dipakai adalah file env
- pertama, lakukan migrate di terminal :
php artisan migrate
- jika ingin akses objek kedalam database (tabel) secara manual maka bisa menggunakan Eloquent object-relational mapper (ORM). tidak hanya itu eloquent juga bisa melakukan CRUD pada database
- proses pertama untuk memakai eloquent install apl tinker lewat terminal :
php artisan tinker
*untuk manggil2 di tinker :
Post::first() --> manggil data pertama
Post::pluck('title')--> manggil judulnya saja

## model post
mencoba mengisi database lewat post, tanpa manual
- pertama buat file modelnya, bisa pake terminal :
php artisan make:model -m

## relationship