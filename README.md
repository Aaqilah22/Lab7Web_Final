|Keterangan|Terlampir|
|:---------|:--------|
|Nama|Aaqilah Aathirah Sutisna|
|NIM|312310621|
|Kelas|TI.23.A6|
|Mata Kuliah|Pemograman Web 2|

# PRAKTIKUM
|Praktikum|	Judul Praktikum |
|:-------:|:---------------:|
|1|	PHP Framework (Codeigniter)|	
|2|Framework Lanjutan (CRUD)|
|3|	View Layout & View Cell|
|4|	Framework Lanjutan (Modul Login)|
|5| Pignation Dan Pencarian|	
|6|	Upload File Gambar|
|7|	Relasi Tabel dan Query Builder|	
|8|AJAX|	
|9|	Implementasi AJAX Pignation dan Search|	
|10| Testing API dengan Postman|	
|11| Vue.js	|

# 🛠️ Fronted and Backend
## 💻 Fronted
Frontend adalah bagian tampilan yang dilihat dan digunakan langsung oleh pengguna (user interface). Semua yang ditampilkan di browser berasal dari frontend.
| Teknologi    | Fungsi |
| ------------ | -------|
| **HTML**     | Membuat struktur halaman (tabel, form, tombol)|
| **CSS**      | Mengatur tampilan/layout halaman (warna, ukuran, gaya)|
| **Vue.js 3** | Framework JavaScript untuk membuat tampilan interaktif dan dinamis |
| **Axios**    | Mengambil/mengirim data dari/ke backend melalui API (REST)|

## 🖥️ Backend
Backend adalah bagian logika sistem di server — menangani data, proses, database, dan komunikasi antara frontend dan penyimpanan.
| Teknologi               | Fungsi |
| ----------------------- | -------|
| **CodeIgniter 4 (CI4)** | Framework PHP untuk membuat RESTful API|
| **PHP 7+**              | Bahasa server-side untuk mengelola permintaan frontend |
| **MySQL**               | Menyimpan data artikel (judul, isi, status)|
| **XAMPP**               | Menjalankan server Apache dan database MySQL lokal |

## 🔁 Hubungan Frontend ↔ Backend
| Frontend (VueJS)        | Backend (CI4 + MySQL)     |
| ----------------------- | ------------------------- |
| Kirim data via Axios    | Terima request dan proses |
| Tampilkan data di tabel | Kirim data JSON dari DB   |
| Form kirim artikel baru | Simpan ke tabel `artikel` |
| Klik "hapus"            | Hapus artikel dari DB     |
**Frontend** hanya menampilkan dan mengirim, sedangkan **Backend** yang mengolah data, mengakses database, dan menjawab permintaan.

# Alat Pengembangan dan Pengujian
Menggunakan **Postman** dengan metode HTTP (GET, PUT, POST, DELETE) pada REST API.

## GET (Mengambil Data)
<img width="1920" height="1200" alt="Screenshot 2025-06-26 120324" src="https://github.com/user-attachments/assets/69eb5187-a4d3-488f-9133-6f65b0556173" />

<img width="1920" height="1200" alt="Screenshot 2025-06-26 120357" src="https://github.com/user-attachments/assets/d4f954fa-73c8-46c3-a48b-67f04b7237e1" />

## PUT (Memperbarui Data)
<img width="1920" height="1200" alt="Screenshot 2025-06-26 122203" src="https://github.com/user-attachments/assets/edf90e34-ae73-4b86-9f36-c83b7fbd30bf" />

## DELETE (Menghapus Data)
<img width="1920" height="1200" alt="Screenshot 2025-06-26 122308" src="https://github.com/user-attachments/assets/a66a7e78-2dab-40dc-8f91-3f9e107f1062" />

Postman adalah alat bantu yang sangat penting dalam pengembangan aplikasi berbasis API. Dengan Postman, pengembang dapat mengirim permintaan HTTP, mengelola data request dan response, serta melakukan pengujian secara manual maupun otomatis terhadap API yang dibangun. Postman mendukung berbagai metode seperti GET, POST, PUT, dan DELETE, sehingga sangat cocok untuk melakukan pengujian fitur CRUD pada backend, misalnya yang dibangun dengan CodeIgniter.
Postman juga sangat berguna dalam proses debugging, terutama saat frontend (seperti VueJS) tidak menampilkan data—Postman membantu mengecek apakah masalahnya ada di API atau di sisi frontend. Dengan kemampuannya menyimpan koleksi, menulis skrip pengujian, dan melakukan simulasi tanpa UI, Postman menjadi alat yang efisien untuk semua tahapan pengembangan API modern.

# Kegunaan Aplikasi Artikel
## ✅ Kegunaan Aplikasi Artikel
Aplikasi artikel merupakan solusi digital yang memudahkan pengguna dalam **mengelola dan mempublikasikan konten** secara dinamis. Dengan fitur-fitur seperti **menambah, menampilkan, mengedit, dan menghapus artikel**, aplikasi ini memberikan kemudahan dalam mengatur informasi tanpa perlu menyentuh kode program secara langsung.
Selain sebagai sarana manajemen konten, aplikasi artikel juga menjadi media pembelajaran yang efektif untuk memahami konsep **CRUD (Create, Read, Update, Delete)**, **komunikasi API**, dan **integrasi antara frontend (VueJS) dan backend (CodeIgniter 4)**. Aplikasi ini sangat cocok digunakan untuk proyek pribadi, blog sederhana, sistem berita, maupun latihan praktikum pemrograman web.
Dengan demikian, aplikasi artikel tidak hanya berguna secara fungsional, tetapi juga bermanfaat secara edukatif dalam membangun pemahaman tentang arsitektur web modern.

## Fitur-fitur
**HOME**
<img width="1920" height="1200" alt="Screenshot 2025-06-25 115753" src="https://github.com/user-attachments/assets/f79f243e-d04c-4a38-808b-ba45a4f1f08b" />

**ARTIKEL**
<img width="1719" height="1037" alt="Screenshot 2025-06-27 131648" src="https://github.com/user-attachments/assets/3453f09c-34cd-47d8-8eb4-be3e6b110e41" />

**KONTAK**
<img width="1557" height="846" alt="image" src="https://github.com/user-attachments/assets/02b0ac6b-2fc8-406a-bda7-beb7c4c41dbb" />

**ABOUT**
<img width="1587" height="820" alt="image" src="https://github.com/user-attachments/assets/5314931a-21a2-4af1-a812-692649bb687d" />

**LOGIN**
<img width="1712" height="512" alt="Screenshot 2025-06-27 132104" src="https://github.com/user-attachments/assets/1c472a98-cfa7-4a5e-a581-7a4ff1cff090" />

**KATEGORI**
<img width="1920" height="1200" alt="Screenshot 2025-06-26 113500" src="https://github.com/user-attachments/assets/bfc767d1-2247-4201-a04e-dc7c866450ce" />

**TAMBAH ARTIKEL**
<img width="1920" height="1200" alt="Screenshot 2025-06-25 124236" src="https://github.com/user-attachments/assets/95555cf5-6186-4282-a8e7-2be71f90f688" />
