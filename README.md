# PBKK-Tugas-2

## Local Setup

```
cd PBKK-Tugas-2
composer install
npm install
php artisan migrate
composer run dev
```

# Feature

ini adalah lanjutan dari tugas 1 kemarin dengan ditambahkan beberapa hal sebagai berikut:

## Perbaikan Routing

Jadi routing di week 2 ini banyak yang diperbaiki, bisa dilihat di `web.php` dimana dirapihkan untuk page /agent/{tema?} (yang menampilkan penjelasan General Assistant Manager) dan /agent/fp yang redirect ke penjelasan final project.

Selain itu, dibuat juga untuk pengelompokan dengan prefix dashboard yang bisa ke /about/ (profil departemen) atau ke /mahasiswa/{nrp} yang mengarah ke profil mahasiswa. Ini dilengkap dengan regex sebagai pemenuhan `challenge 1`. Ini juga dilengkap dengan fallback dan page error 404 sebagai pemenuhan `challenge 3`

Terakhir, tugas ini mengganti  yang awalnya kalkulator biasa menjadi kalkulator IP.

Berikut beberapa screenshot:

- Screeshot /home/ yang baru

- Screenshot
