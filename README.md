<p align="center"> 
  <img width="500" alt="logo_trashify (1)" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/6a2dd02f-fb0d-4921-b74d-8f1daf63beca">
</p>

# Pembimbing Lapangan : Sirojam Munir, SE. 
# Dosen Pembimbing    : Eka Mistiko Rini, S.Kom., M.Kom
# TIM MKI
1. 362155401078 - Wahyu Eka Saputra
2. 362155401085 - Rio Adjie Wiguna
3. 362155401092 - Ken Affila Syach Maulana
<br><br>

#  💻 Tentang Aplikasi CekMeter Air PUDAM Banyuwangi berbasis Web

<p align="center"> 
  <img width="500" alt="trashify" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/25f75634-e217-48e1-8a60-09cd9eb86e09">
</p

**📝 Gambaran Umum Aplikasi 📸**
<br>
<p align="center"><img alt="desain umum" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/2adec1e8-4b36-421a-967c-ab257e126af6"></p><br>
1. Admin: Admin menggunakan komputer untuk mengelola data-data yang dibutuhkan dan data tersebut akan disimpan dalam database. Data yang dikelola oleh admin meliputi data pelanggan, data petugas lapangan, data merk meter air dan log data (riwayat cek meter air pelanggan).
2. Database: Database berfungsi sebagai pusat penyimpanan semua data yang dibutuhkan. Data ini dapat diakses dan dikelola oleh admin.
3. Petugas Lapangan (Staff Baca Meter): Petugas lapangan mengunjungi rumah pelanggan untuk melakukan pengecekan meteran air.
4. Aplikasi CekMerk Meter Air (di perangkat mobile): Petugas lapangan menggunakan aplikasi "CekMerk Meter Air" untuk mengecek nomor sp pelanggan lalu mengisi form yang dibutuhkan meliputi merk meter air, foto meter air, kondisi meter air, keterangan kondisi meter air lalu submit maka data akan dikirim ke server dan disimpan dalam database.
5. Interaksi Aplikasi dengan Database: Data yang disubmit oleh petugas lapangan akan disimpan di database. Informasi ini kemudian dapat diakses kembali oleh admin melalui komputer untuk keperluan monitoring dan pelaporan pada perusahaan.

<br>

**🖥️ Spesifikasi Aplikasi**
<p align="center"><img alt="desain umum" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/2adec1e8-4b36-421a-967c-ab257e126af6"></p><br>


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
   <p align="center"><img alt="login" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/8c4b9d5a-2f6d-4068-ab55-195c591650f6"></p><br>
   <p align="center"><img alt="register" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/71ea16ce-b1b8-4d65-ba76-1497202e587b"></p><br>

2. **Dashboard**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>

3. **Menu Log Data**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>
   
4. **Menu Pelanggan**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>

5. **Menu Merk Meter**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>

6. **Menu Petugas Lapang**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>

7. **Menu Profil**
   <p align="center"><img alt="dashboard" src="https://github.com/pbl-persero-batam/pbl-manrisk-perserobatam/assets/92602362/a9884a68-4023-48ce-862e-698865e34614"></p><br>
   
# 🪟 RestAPI
RestApi yang dibuat meliputi data user, log data, pelanggan, merk meter, dan petugas lapangan dengan endpoint seperti pada tabel dibawah ini dan dapat diakses melalui link: 
https://documenter.getpostman.com/view/24205913/2sAXjGbDcU#d956d835-ec33-4529-ad62-9691d484f4c8

### Endpoint API
Link URL : http://127.0.0.1:8000/api/auth/{endpoint}

| No | Method | Endpoint                    | Body (JSON)                          | Keterangan                         |
|----|--------|------------------------|-------------------------------------|------------------------------------|
| User Login        |
| 1  | POST    | `/login`| `{"email": "email", "password": "password"}`| Masukan Email dan Password untuk Login maka akan diberikan data dan token        |
| Data Merk Meter        |
| 1  | GET    | `/api/merkmeters`      |                                     | Ambil semua data merk meter        |
| 2  | POST   | `/api/merkmeters`      | `{ "nama_merk": "Merk A", "deskripsi": "" }` | Tambah data baru merk meter        |
| 3  | GET    | `/api/merkmeters/{id}` |                                     | Ambil detail data merk meter by ID |
| 4  | PUT    | `/api/merkmeters/{id}` | `{ "nama_merk": "Merk B", "deskripsi": "" }` | Update data merk meter by ID       |
| 5  | DELETE | `/api/merkmeters/{id}` |                                     | Hapus data merk meter by ID        |

