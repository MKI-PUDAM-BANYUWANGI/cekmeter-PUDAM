<p align="center"> 
  <img width="500" alt="logo CekMeter" src="https://github.com/user-attachments/assets/eaf67e50-c8d0-4ada-8099-4267b6819b45">
</p>
 
# Dosen Pembimbing    : Eka Mistiko Rini, S.Kom., M.Kom
# Pembimbing Lapangan : Sirojam Munir, SE.
# TIM MKI
1. 362155401078 - Wahyu Eka Saputra
2. 362155401085 - Rio Adjie Wiguna
3. 362155401092 - Ken Affila Syach Maulana
<br><br>

#  💻 Tentang Aplikasi CekMeter Air PUDAM Banyuwangi berbasis Web
Aplikasi CekMeter Air PUDAM Banyuwangi berbasis Web ini dibuat untuk membantu petugas baca meter PUDAM Banyuwangi dalam mendata Merk Meter dan Kondisi dari Meteran Air di Rumah Pelanggan

## 📸 Gambaran Umum Aplikasi 

<p align="center"><img alt="gambaran umum" src="https://github.com/user-attachments/assets/ceb82e16-1f21-4dc2-9885-27bf3ca5ccb2"></p><br>

1. Admin: Admin menggunakan komputer untuk mengelola data-data yang dibutuhkan dan data tersebut akan disimpan dalam database. Data yang dikelola oleh admin meliputi data pelanggan, data petugas lapangan, data merk meter air dan log data (riwayat cek meter air pelanggan).
2. Database: Database berfungsi sebagai pusat penyimpanan semua data yang dibutuhkan. Data ini dapat diakses dan dikelola oleh admin.
3. Petugas Lapangan (Staff Baca Meter): Petugas lapangan mengunjungi rumah pelanggan untuk melakukan pengecekan meteran air.
4. Aplikasi CekMerk Meter Air (di perangkat mobile): Petugas lapangan menggunakan aplikasi "CekMerk Meter Air" untuk mengecek nomor sp pelanggan lalu mengisi form yang dibutuhkan meliputi merk meter air, foto meter air, kondisi meter air, keterangan kondisi meter air lalu submit maka data akan dikirim ke server dan disimpan dalam database.
5. Interaksi Aplikasi dengan Database: Data yang disubmit oleh petugas lapangan akan disimpan di database. Informasi ini kemudian dapat diakses kembali oleh admin melalui komputer untuk keperluan monitoring dan pelaporan pada perusahaan.

<br>

## 📝 Spesifikasi Aplikasi
**Use Case Diagram**
<p align="center"><img alt="use case" src="https://github.com/user-attachments/assets/aaa898e6-94bd-4baf-9cf3-2109cdca188a"></p><br

**Entity Relationship Diagram**
<p align="center"><img alt="erd" src="https://github.com/user-attachments/assets/ade48382-32d5-4949-85f4-a3e0e80997a4"></p><br>


# 📃 Cara Install Aplikasi dengan Framework Laravel

## ▶️ Spesifikasi Laravel

- PHP ^10.x.x
- PHP Composer
- Database MySQL
- Sweet Allert

## ▶️ Instalasi Aplikasi

1. Clone atau download source code di Github
   - Melalui Terminal, clone repository `git clone https://github.com/MKI-PUDAM-BANYUWANGI/cekmeter-PUDAM.git`
   - Jika tidak menggunakan terminal dapat **Download Zip** dan _extract_ ke direktori web server (example: xampp/htdocs)
2. `cd cekmeter-PUDAM`
3. `composer install`
4. `cp .env.example .env`
   - Jika tidak menggunakan GIT,  rename file `.env.example` ke `.env`
5. Dari terminal `php artisan key:generate`
6. Create **database from mysql** untuk aplikasi web ini
7. **Setting database** dari file `.env`
8. `php artisan migrate`
9. `php artisan db:seed`
10. Install Sweet Allert agar dapat digunakan dengan ketik di terminal `composer require realrashid/sweet-alert`
10. Jalankan `php artisan serve` untuk memulai web
11. Instalasi Selesai
<br>

# 📲 Fitur
1. **Login**
   <p align="center"><img alt="login" src="https://github.com/user-attachments/assets/62b6c7f4-58cc-465e-b998-c7df2c91aae9"></p><br>

2. **Dashboard**
   <p align="center"><img alt="dashboard" src="https://github.com/user-attachments/assets/5ca87275-3412-4f07-91c8-1a383c4bae6f"></p><br>

3. **Menu Log Data**
   <p align="center"><img alt="logdata" src="https://github.com/user-attachments/assets/89a120fc-0d85-4d09-a9c2-6b5a1c31e888"></p><br>
   <strong>Halaman Tambah Log Data</strong>
   <p align="center"><img alt="tambah logdata" src="https://github.com/user-attachments/assets/dfc6fb8a-a6da-476a-a521-ce00bb373ade"></p><br>
   <strong>Halaman Edit Log Data</strong>
   <p align="center"><img alt="edit logdata" src="https://github.com/user-attachments/assets/7040da98-ef7c-487f-8eb4-28e88e0a7770"></p><br>
   
4. **Menu Pelanggan**
   <p align="center"><img alt="pelanggan" src="https://github.com/user-attachments/assets/56799b2b-9321-4fa4-bb9c-869e2a1e5a78"></p><br>
   <strong>Halaman Tambah Data Pelanggan</strong>
   <p align="center"><img alt="tambah pelanggan" src="https://github.com/user-attachments/assets/4539e642-83da-449e-bf81-0dfa4ef8e79b"></p><br>
   <strong>Halaman Edit Data Pelanggan</strong>
   <p align="center"><img alt="edit pelanggan" src="https://github.com/user-attachments/assets/6c636633-f3ed-4458-b590-fab875dc4f4f"></p><br>
   
5. **Menu Merk Meter**
   <p align="center"><img alt="merk meter" src="https://github.com/user-attachments/assets/4c8ee284-8a9c-45dd-acf3-9dc1cf9e4195"></p><br>
   <strong>Halaman Tambah Merk Meter</strong>
   <p align="center"><img alt="tambah merk meter" src="https://github.com/user-attachments/assets/90f8dfc5-79ef-4846-b689-24c724e0cd1e"></p><br>
   <strong>Halaman Edit Merk Meter</strong>
   <p align="center"><img alt="edit merk meter" src="https://github.com/user-attachments/assets/d9bae76d-8045-47e3-b77d-bde380d4517c"></p><br>
   
6. **Menu Petugas Lapang**
   <p align="center"><img alt="petugas" src="https://github.com/user-attachments/assets/fe55f5e8-0958-42c4-b40f-ee46a53d8f10"></p><br>
   <strong>Halaman Tambah Petugas Lapang</strong>
   <p align="center"><img alt="tambah petugas" src="https://github.com/user-attachments/assets/ffd573c7-1192-4c77-8654-e3d8ead1a362"></p><br>
   <strong>Halaman Edit Petugas Lapang</strong>
   <p align="center"><img alt="edit petugas" src="https://github.com/user-attachments/assets/19c7cb89-3692-4412-ab39-d5acf2142497"></p><br>

7. **Menu Profil**
   <p align="center"><img alt="logdata" src="https://github.com/user-attachments/assets/16be54b9-10aa-4511-87a6-2485c889d7e7"></p>
   <p align="center"><img alt="logdata" src="https://github.com/user-attachments/assets/93a07131-4397-4574-af4b-f04cabe5b4f1"></p><br>
   
# 🪟 RestAPI
RestApi yang dibuat meliputi data user, log data, pelanggan, merk meter, dan petugas lapangan dengan endpoint seperti pada tabel dibawah ini dan dapat diakses melalui link: 
https://documenter.getpostman.com/view/24205913/2sAXjGbDcU#d956d835-ec33-4529-ad62-9691d484f4c8

### Endpoint API
Link URL : http://127.0.0.1:8000/api/auth/{endpoint}

| No | Method | Endpoint                    | Body (JSON)                          | Keterangan                         |
|----|--------|------------------------|-------------------------------------|------------------------------------|
| User Login                           |                                     |                                           |
| 1  | POST    | `/login`| `{"email": "email", "password": "password"}`| Masukan Email dan Password untuk Login maka akan diberikan data dan token        |
| Data Pelanggan                           | Menggunakan Bearer Token Untuk dapat diakses |                                           |
| 1  | GET    | `/pelanggan`      |                                     | Ambil semua data Pelanggan        |
| 2  | POST   | `/pelanggan`      | `{"kode_wilayah": "kode", "no_sp_lain": "nomor", "nama_pelanggan": "nama", "alamat": "alamat"}` | Tambah data baru Pelanggan        |
| 3  | GET    | `/pelanggan/{no_sp}` |                                     | Ambil detail data Pelanggan berdasarkan no_sp pelanggan |
| 4  | PUT    | `/pelanggan/{no_sp}` | `{"kode_wilayah": "kode", "no_sp_lain": "nomor sp", "nama_pelanggan": "ubah nama", "alamat": "ubah alamat"}` | Update data berdasarkan no_sp pelanggan |
| 5  | POST    | `/pelanggan/search` | `{"no_sp": "nomor sp"}` | Cari data pelanggan |
| 6  | DELETE | `/pelanggan/{no_sp}` |                                     | Hapus data data Pelanggan berdasarkan no_sp        |
| Data Merk Meter        | Menggunakan Bearer Token Untuk dapat diakses |                                           |
| 1  | GET    | `/merk-meter`      |                                     | Ambil semua data merk meter        |
| 2  | POST   | `/merk-meter`      | `{ "nama_merk": "Merk A", "deskripsi": "" }` | Tambah data baru merk meter        |
| 3  | GET    | `/merk-meter/{id}` |                                     | Ambil detail data merk meter by ID |
| 4  | PUT    | `/merk-meter/{id}` | `{ "nama_merk": "Merk B", "deskripsi": "" }` | Update data merk meter by ID       |
| 5  | DELETE | `/merk-meter/{id}` |                                     | Hapus data merk meter by ID        |
| Data Petugas Lapangan        | Menggunakan Bearer Token Untuk dapat diakses |                                           |
| 1  | GET    | `/staff`      |                                     | Ambil semua data petugas        |
| 2  | POST   | `/staff`      | `{"nip" : "nip A", "nama_staff" : "nama A", "no_telepon" : "no telp", "kode_wilayah" : "kode", "password" : "password"}` | Tambah data baru petugas        |
| 3  | GET    | `/staff/{nip}` |                                     | Ambil detail data petugas berdasarkan nip |
| 4  | PUT    | `/staff/{nip}` | `{"nip" : "nip B", "nama_staff" : "nama B", "no_telepon" : "no telp B", "kode_wilayah" : "kode", "password" : "password B"}` | Update data petugas berdasarkan nip       |
| 5  | DELETE | `/staff/{nip}` |                                     | Hapus data petugas berdasarkan nip        |
| Log Data        | Menggunakan Bearer Token Untuk dapat diakses |                                           |
| 1  | GET    | `/log-data`      |                                     | Ambil semua log data (riwayat cek meter air)        |
| 2  | POST   | `/log-data`      | `{"petugas_id" : "nip A", "no_sp" : "no_sp A", "merk_meter_id" : "merk meter A", "kondisi_meter" : "kondisi A", "ket_kondisi" : "", "foto_meter" : "input A"}` | Tambah log data baru        |
| 3  | GET    | `/log-data/{id}` |                                     | Ambil detail log data by ID |
| 4  | PUT    | `/log-data/{id}` | `{"petugas_id" : "nip B", "no_sp" : "no_sp B", "merk_meter_id" : "merk meter B", "kondisi_meter" : "kondisi B", "ket_kondisi" : "", "foto_meter" : "input B"}` | Update log data by ID       |
| 5  | DELETE | `/log-data/{id}` |                                     | Hapus log data by ID        |

