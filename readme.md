<p align="center"><img src="https://i.ibb.co/DD0MCrx/Edustar.png"></p>

<!-- <p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## EduStar

EduStar adalah sebuah platform Edukasi berbasis Cloud. Layanan yang diberikan EduStar antara lain:

- Content Management System (CMS) / Website Sekolah.
- Absensi Siswa, Guru & Staff (coming soon).
- SMS Gateway untuk pemberitahuan masal kepada Orang Tua Siswa, Siswa, Guru (coming soon).

## Instalasi

- Jalankan composer install
- Buat file .env atau dengan mencopy dari file .env.example
- Jalankan perintah php artisan key:generate
- Migrasi database dengan php artisan migrate
- Mengisi data pokok dengan cara menjalankan perintah php artisan edustar-cms:install

## Konfigurasi untuk mengintegrasi Laravel dengan Google Drive

Teman perlu mengkonfigurasi credentials dari Google Drive ke EduStar CMS yang terinstall di host teman.

-  [Getting your Root Folder ID](https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/3-getting-your-root-folder-id.md)
-  [Getting your Client ID and Secret](https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/1-getting-your-dlient-id-and-secret.md)
-  [Getting your Refresh Token](https://github.com/ivanvermeyen/laravel-google-drive-demo/blob/master/README/2-getting-your-refresh-token.md)

## Pengembang EduStar

Pengembang Awal EduStar adalah

- **[Antonio Saiful Islam](https://github.com/antoniosai)**
- **[Muhammad Iqbal](https://github.com/iqbalrevvin)**


## Lisensi

EduStar CMS adalah open-source project dengan lisensi [MIT license](https://opensource.org/licenses/MIT)
