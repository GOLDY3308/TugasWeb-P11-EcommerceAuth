Tugas Web E-Commerce - Autentikasi, Multi-Role & Policy

Proyek ini adalah tugas mata kuliah Pemrograman Web E-Commerce yang dibangun menggunakan **Laravel 11**. Fokus utama dari tugas ini adalah implementasi sistem Database Relasional, Autentikasi bawaan, *Role-Based Access Control* (RBAC), dan otorisasi menggunakan Policy.

Fitur Utama yang Dikerjakan
1. **Database & Eloquent (Bagian A):**
   - Pembuatan skema tabel terelasi: `users`, `categories`, `products`, `orders`, `order_items`, `carts`, dan `reviews`.
   - Implementasi Eloquent Model, *Relationships* (One-to-Many, dsb), dan Local Scope (`inStock`).
   - Menggunakan **Seeder** dan **Factory** untuk menghasilkan 50 data dummy produk dan 1 akun Admin utama.
2. **Authentication (Bagian B):**
   - Instalasi **Laravel Breeze** (Blade Stack + Alpine.js + Tailwind CSS) untuk fitur Login, Register, dan Logout.
   - Halaman utama (Welcome) otomatis dialihkan (*redirect*) ke halaman Login.
3. **Multi-Role & Middleware:**
   - Menambahkan custom `RoleMiddleware` untuk membedakan hak akses antara `admin` dan `user`.
   - Melindungi *route* `/admin/dashboard` (Halaman tabel Produk) agar hanya bisa diakses oleh Admin. User biasa akan mendapatkan error **403 Forbidden**.
4. **Resource Authorization (Policy):**
   - Membuat `ProductPolicy` agar aksi pengubahan (Update) dan penghapusan (Delete) produk hanya diizinkan untuk *role* Admin.

Teknologi yang Digunakan
- PHP 8.x
- Laravel 11
- MySQL (Laragon)
- Tailwind CSS
- Node.js (NPM)

Cara Instalasi & Menjalankan Proyek Lokal

Jika ingin menjalankan proyek ini di komputer lain, ikuti langkah berikut:

1. Clone repository ini:
   ```bash
   git clone [https://github.com/USERNAME_KAMU/TugasWeb-P11-EcommerceAuth.git](https://github.com/USERNAME_KAMU/TugasWeb-P11-EcommerceAuth.git)
Masuk ke direktori proyek:

cd TugasWeb-P11-EcommerceAuth
Install dependensi PHP dan Node.js:

composer install
npm install
Salin file .env dan generate key:

cp .env.example .env
php artisan key:generate
Sesuaikan konfigurasi database di file .env (misal: DB_DATABASE=TugasWeb-P11-EcommerceAuth).

Jalankan migrasi beserta seeder untuk memunculkan data dummy:

php artisan migrate --seed
Build tampilan antarmuka (CSS/JS):

npm run build
Nyalakan server lokal:

php artisan serve
Akun Testing (Seeder)
Gunakan kredensial berikut untuk menguji sistem Admin:

Email: admin@admin.com

Password: password

Role: admin

Untuk role user, silakan gunakan fitur Register di halaman awal aplikasi.

- Halaman Login: 
  ![Halaman Login](screenshots/dsahboard-login.png)

- Dashboard Admin:
  ![Dashboard Admin](screenshots/50-item.png)

- Testing Incognito (Error 403 User Biasa): 
  ![Error 403](screenshots/403.png)

  - Testing midware (rolemiddware): 
  ![rolemiddware](screenshots/rolemiddware.png)

  - Testing policy (reviewpolicy): 
  ![reviewpolicy](screenshots/reviewpolicy.png)
