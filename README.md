# 🎮 Game CRUD - Laravel

Aplikasi sederhana CRUD (Create, Read, Update, Delete) untuk mengelola data game menggunakan Laravel.

---

## 📖 Deskripsi

Project ini dibuat untuk mempelajari dasar penggunaan Laravel, khususnya:

* Routing
* Controller
* Model & Migration
* Blade Template
* CRUD Operation

---

## 🚀 Fitur

* Menampilkan daftar game
* Menambahkan data game
* Mengedit data game
* Menghapus data game

---

## 🛠️ Teknologi yang Digunakan

* Laravel 8
* PHP
* MySQL
* Blade Template Engine

---

## ⚙️ Prosedur Instalasi

Ikuti langkah berikut untuk menjalankan project secara lokal:

### 1. Clone Repository

```bash
git clone https://github.com/username/game-crud.git
cd game-crud
```

### 2. Install Dependency

```bash
composer install
```

### 3. Copy File Environment

```bash
cp .env.example .env
```

### 4. Konfigurasi Database

Buka file `.env`, lalu sesuaikan:

```env
DB_DATABASE=game_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Jalankan Migrasi

```bash
php artisan migrate
```

---

## ▶️ Menjalankan Aplikasi

```bash
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000/games
```

---

## 📂 Struktur Folder Penting

```
app/
 ├── Models/Game.php
 ├── Http/Controllers/GameController.php

resources/views/games/
 ├── index.blade.php
 ├── create.blade.php
 ├── edit.blade.php

routes/
 └── web.php
```

---

## 🔗 Endpoint CRUD

| Method | Endpoint         | Deskripsi              |
| ------ | ---------------- | ---------------------- |
| GET    | /games           | Menampilkan semua data |
| GET    | /games/create    | Form tambah data       |
| POST   | /games           | Menyimpan data         |
| GET    | /games/{id}/edit | Form edit              |
| PUT    | /games/{id}      | Update data            |
| DELETE | /games/{id}      | Hapus data             |

---

## ⚠️ Catatan

* Pastikan Composer sudah terinstall
* Pastikan database sudah dibuat
* Jalankan XAMPP/Laragon sebelum migrate

---

## 👨‍💻 Author

* Nama: M. AZRIL RAYZICHO SORONGAN
* Nim : 240180103
* GitHub: https://github.com/azrilryzcho

---

## 📌 Lisensi

Project ini digunakan untuk pembelajaran dan bebas digunakan.
