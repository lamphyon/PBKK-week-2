# PBKK-Tugas-2

## Local Setup

Jalankan perintah berikut untuk menjalankan project secara lokal:

```bash
cd PBKK-Tugas-2
composer install
npm install
php artisan migrate
composer run dev
```

## Features

Tugas ini merupakan lanjutan dari **PBKK Tugas 1** dengan beberapa perbaikan dan penambahan fitur.

### 1. Perbaikan

Beberapa perubahan yang dilakukan:

* `/agent/{tema?}` digunakan untuk menampilkan penjelasan mengenai **General Assistant Manager**.
* `/agent/fp` digunakan untuk menampilkan penjelasan mengenai **Final Project**.
* Routing dashboard dikelompokkan menggunakan prefix `/dashboard`.
* `/dashboard/about` digunakan untuk menampilkan profil departemen.
* `/dashboard/mahasiswa/{nrp}` digunakan untuk menampilkan profil mahasiswa berdasarkan NRP.
* Route mahasiswa dilengkapi dengan **regex constraint** untuk memenuhi **Challenge 1**.
* Ditambahkan **fallback route** dan halaman error **404** untuk memenuhi **Challenge 3**.
* Kalkulator pada tugas sebelumnya diubah dari kalkulator aritmatika menjadi **kalkulator IP** untuk memenuhi **Challenge 2**

### 2. Screenshot

#### Halaman `/home`

<img width="1917" height="960" alt="Screenshot 2026-09-13 222657" src="https://github.com/user-attachments/assets/1fc5eb64-7b64-41ec-9f65-96adbfd00ae3" />

#### Halaman `/agent`

<img width="1917" height="977" alt="Screenshot 2026-09-13 222715" src="https://github.com/user-attachments/assets/614e352c-058d-4518-bcf2-12dc586081fa" />

#### Halaman `/agent/fp` (diarahkan ke penjelasan final project)

<img width="1917" height="967" alt="Screenshot 2026-09-13 222752" src="https://github.com/user-attachments/assets/77774066-c0e3-4c2f-a13d-3f6a4dc8849e" />

#### Halaman `/dashboard/mahasiswa/{nrp}`

<img width="1917" height="967" alt="Screenshot 2026-09-13 222536" src="https://github.com/user-attachments/assets/e733f727-865b-4923-a734-993867627ac4" />

#### Halaman Error 404

<img width="1917" height="957" alt="image" src="https://github.com/user-attachments/assets/758927c6-f718-49d1-a90f-49fcfc7e668c" />

#### Kalkulator IP

<img width="1917" height="966" alt="image" src="https://github.com/user-attachments/assets/dc597875-505f-4d33-8d44-62487c7c572d" />

<img width="1917" height="970" alt="Screenshot 2026-09-13 222618" src="https://github.com/user-attachments/assets/4459c4f8-e83f-4db3-bf4f-edd7e361670f" />

![Screenshot Kalkulator IP](screenshots/kalkulator-ip.png)
