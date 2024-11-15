**DATA BARANG**

Proyek: Sistem Manajemen Data Barang Skincare
Versi: 1.0
Tanggal: 14 November 2024

*Tujuan Proyek*
Objektif: Proyek ini bertujuan untuk menyediakan sistem pengelolaan produk skincare yang memungkinkan admin untuk mengelola data produk (nama, harga, stok) dengan efisien. Sistem ini memungkinkan admin untuk memperbarui data barang (produk skincare) yang tersedia dalam stok, serta memberikan deskripsi lengkap tentang produk.

*Fitur Utama*
Untuk Admin:
    Login Admin: Admin dapat masuk ke sistem untuk mengelola data produk skincare, memperbarui stok, dan mengedit informasi produk.
    - Admin dapat masuk ke sistem menggunakan email dan password.
    - Setelah login, admin dapat mengakses dashboard untuk mengelola produk skincare (nama produk, harga, stok, dan deskripsi).

    CRUD Produk (Create, Read, Update, Delete):
    Admin dapat mengelola produk skincare dengan fitur CRUD. Ini mencakup kemampuan untuk menambah produk baru, melihat informasi produk yang ada, mengedit produk yang sudah ada, dan menghapus produk dari sistem.
    - Create (Tambah Produk): Admin dapat menambah produk skincare baru ke dalam sistem dengan menentukan nama produk, harga, stok, dan deskripsi.
    - Read (Lihat Produk): Admin dapat melihat daftar produk skincare yang tersedia beserta detailnya (nama, harga, stok, dan deskripsi).
    - Update (Ubah Produk): Admin dapat memperbarui informasi produk skincare yang sudah ada, termasuk harga, stok, dan deskripsi produk.
    - Delete (Hapus Produk): Admin dapat menghapus produk skincare yang sudah tidak tersedia atau tidak diinginkan dari sistem.

*Persyaratan Fungsional*
- Login Admin: Admin dapat login ke aplikasi untuk mengelola data produk skincare yang tersedia.
- Manajemen Produk: Admin dapat menambah, mengedit, atau menghapus produk skincare yang tersedia di toko.
- Pencatatan Produk: Admin mencatat data produk skincare, termasuk nama, harga, stok, dan deskripsi produk.
- Pengelolaan Stok: Admin dapat menghitung jumlah stok produk yang tersedia dan memperbarui jumlah stok setiap kali ada perubahan.
- Penyusunan Laporan: Admin dapat menghasilkan laporan mengenai produk skincare yang tersedia dan jumlah stok yang ada.

*Persyaratan Non-Fungsional*
- Kegunaan: Admin dapat dengan mudah mengelola produk skincare, memperbarui informasi produk, serta melihat stok produk secara efisien.
- Keamanan: Semua perubahan data produk hanya dapat diakses oleh admin yang terautentikasi dengan benar.
- Kinerja: Proses pencatatan dan pembaruan data produk harus dilakukan dengan cepat dan tidak mengganggu kinerja sistem.
- Ketepatan Laporan: Laporan produk yang dihasilkan harus akurat dan dapat disusun kapan saja berdasarkan stok produk yang ada.

*Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan*
1. Model
    Model 1: Produk Skincare
    Model ini menyimpan informasi produk skincare seperti nama, harga, stok, dan deskripsi produk.
    - Produk: Menyimpan data produk skincare yang tersedia.
    - id: BIGINT UNSIGNED (Primary Key) – ID unik untuk setiap produk skincare.
    - name: VARCHAR(255) – Nama produk (misalnya, "Pelembab Wajah").
    - price: DECIMAL(10,2) – Harga produk.
    - stock: INT(11) – Jumlah stok produk skincare yang tersedia.
    - description: TEXT – Deskripsi produk.
    - created_at: TIMESTAMP – Waktu data produk ditambahkan.
    - updated_at: TIMESTAMP – Waktu data produk diperbarui.
    Model 2: Admin
    Model ini menyimpan informasi tentang admin yang mengelola data produk skincare.
    - id: BIGINT UNSIGNED (Primary Key) – ID unik untuk setiap admin.
    - email: VARCHAR(255) – Email admin untuk login.
    - password: VARCHAR(255) – Password untuk autentikasi admin.
    - role: ENUM('admin') – Peran pengguna, di sini hanya ada satu peran yaitu "admin".
    - created_at: TIMESTAMP – Waktu akun admin dibuat.
    - updated_at: TIMESTAMP – Waktu akun admin diperbarui.
2. Struktur Tabel
- Tabel Produk (Products Table)
CREATE TABLE products (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT(11) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
- Tabel Admin (Admin Table)
CREATE TABLE admin (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
3. Resource
    Untuk Admin:
    - Dashboard Admin: Ringkasan produk skincare yang ada dan jumlah stok masing-masing produk.
    -  Pengelolaan Produk: Admin dapat menambah, mengubah, atau menghapus produk skincare yang ada.
    - Laporan Produk: Admin dapat menghasilkan laporan mengenai produk skincare yang tersedia dan jumlah stok yang ada.

     Untuk Sistem:
    - Sistem Pengelolaan Stok: Menyediakan tampilan stok produk yang ada dan memungkinkan pembaruan stok produk.
4. Seeder
id	name	             price  	stock	description
1	Pelembab Wajah  	150000.00	50  	Pelembab wajah untuk kulit kering
2	Serum Vitamin C    	200000.00	30	    Serum dengan vitamin C untuk mencerahkan
3	Sunscreen SPF 50+	100000.00	40	    Sunscreen untuk perlindungan kulit dari sinar UV

