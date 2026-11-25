# Praktikum Web (AmrWeb) — versi CodeIgniter 4

Website portofolio **Alia Masrukhatur Rizkiyah** yang dipindahkan dari PHP native ke **CodeIgniter 4**.
Halaman utama (`/`) berasal dari `index.php` lama: navbar, carousel, About Me, kartu Portofolio (Modul 1–6), dan footer — semua dipertahankan.

## Kebutuhan
- PHP **8.1+** dengan ekstensi `intl`, `mbstring`, `mysqlnd`
- Composer
- MySQL/MariaDB (hanya untuk Modul 10)

## Instalasi
```bash
composer install          # mengunduh CI4 + otomatis melengkapi skeleton (app/Config, public/index.php, spark)
php spark serve           # buka http://localhost:8080
```
`composer install` menjalankan `scripts/bootstrap.php`, yang menyalin file bawaan CI4 yang belum ada
(tidak pernah menimpa file proyek ini).

**Pakai XAMPP/Laragon?** Letakkan folder ini di `htdocs`, lalu ubah di `.env`:
```
app.baseURL = 'http://localhost/praktikum_web_ci4/public/'
```

## Database (Modul 10)
1. Import `database/db_web.sql` → CRUD user di `/modul10/users`.
2. Import `database/db_kampus.sql` (atau buka `/modul10/kampus/buat-database` lalu `/modul10/kampus/buat-tabel`).
3. Sesuaikan user/password MySQL di `.env` bila perlu.

## Login
- Login utama (`/login`): `admin` / `12345`
- Modul 9 sesi: `naufal` / `chocolatos3` (`/modul9/login`); Tugas 1: Ali/password1 … Emon/password5 (`/modul9/tugas1`)

## Peta file lama → URL baru

| File lama | URL baru |
|---|---|
| `index.php` | `/` |
| `home.html`, `index.html` | `/home` |
| `portofolio.html` | `/portofolio` |
| `prak1_alia.html` / `prak2_alia.html` / `prak3_alia.html` | `/modul1/praktikum1` / `2` / `3` (`/profile` = praktikum1) |
| `tugas1_Alia.html` | `/modul1/tugas1` |
| `mod2_prak1.html` / `mod2_prak2.html` | `/modul2/praktikum1` / `2` |
| `pertama.php` / `biodata.php` / `ketiga.php` / `mod3_tugas1.php` | `/modul3/pertama` / `biodata` / `ketiga` / `tugas` |
| `mod4_perulangan.php` … `mod4_perulangan7.php` | `/modul4/perulangan/1` … `/7` |
| `mod4_tugas1.php` | `/modul4/tugas` |
| `mod6_array1.php` … `mod6_array3.php`, `mod6_tugas.php` | `/modul5/array1` … `array3`, `/modul5/tugas` |
| `mod7_form_text.php` / `mod7_proses_text.php` | `/modul6/form-text` / `/modul6/proses-text` |
| `modul7.php` / `simpan.php` | `/modul6/tugas` / `/modul6/simpan` |
| `mod7_tugas2_formLogin.php`, `login.php` / `mod7_tugas2_logout.php` | `/login` / `/logout` |
| `mod9_cookie.php` | `/modul9/cookie` |
| `mod9_proses_login.php` / `mod9_submit_formlogin.php` | `/modul9/login` / `/modul9/submit` |
| `mod9_menu1-3.php` | `/modul9/menu/1` … `/3` |
| `mod9_tugas1.php` (+ `mod9_header.php`, `mod9_footer.php`) | `/modul9/tugas1` |
| `mod10_tampil_user.php`, `mod10_tambah_data.php`, `mod10_editUser.php`, `mod10_aksi_*.php` | `/modul10/users`, `/tambah`, `/edit/{id}`, simpan/update/hapus |
| `mod10_koneksi_db.php`, `mod10_buat_tabel.php`, `mod10_tampil.php`, `mod10_tugas.php`, `mod10_update_data.php`, `mod10_delete.php` | `/modul10/kampus/buat-database`, `buat-tabel`, `tampil`, `tugas`, `update-data`, `delete` |

## Desain
Tampilan sudah diperbarui total (tanpa Bootstrap, jadi tidak perlu internet kecuali untuk font Google):
- Satu stylesheet: `public/css/modern.css`; JavaScript kecil (menu mobile + carousel): `public/js/site.js`.
- Layout bersama: `app/Views/layouts/` (`classic.php`, `plain.php`) dan potongan di `app/Views/partials/`
  (`topbar`, `footer`, `ledger` = daftar modul yang dipakai di `/` dan `/portofolio`).
- Menambah modul baru di daftar portofolio: edit array `$modul` di `app/Views/partials/ledger.php`.
- Warna dan bentuk diatur lewat variabel di bagian `:root` pada `modern.css`.
- `public/css/style.css` (CSS lama) tidak dipakai lagi; aturan demo Modul 2 dipindah ke `public/css/legacy.css`.

## Struktur
```
app/Controllers   Home, Modul1 … Modul10, Modul10Kampus, Auth
app/Models        UserModel (tabel user, db_web)
app/Views         home.php (index.php lama), layouts/, classic/, modul3 … modul10, auth/
app/Config        Routes.php (semua rute)
public/           css/ (modern.css), js/, img/, image/ (folder upload), .htaccess
database/         db_web.sql, db_kampus.sql
```
