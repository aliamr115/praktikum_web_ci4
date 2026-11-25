<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ---------------------------------------------------------------
// HALAMAN UTAMA  (dulu: index.php)
// ---------------------------------------------------------------
$routes->get('/', 'Home::index');

// ---------------------------------------------------------------
// SITUS "KLASIK" (dulu: home.html, prak1_alia.html, portofolio.html)
// ---------------------------------------------------------------
$routes->get('home', 'Home::classicHome');
$routes->get('profile', 'Modul1::praktikum1');
$routes->get('portofolio', 'Home::classicPortofolio');

// ---------------------------------------------------------------
// MODUL 1 - HTML
// ---------------------------------------------------------------
$routes->get('modul1/praktikum1', 'Modul1::praktikum1');   // prak1_alia.html
$routes->get('modul1/praktikum2', 'Modul1::praktikum2');   // prak2_alia.html
$routes->get('modul1/praktikum3', 'Modul1::praktikum3');   // prak3_alia.html
$routes->get('modul1/tugas1', 'Modul1::tugas1');           // tugas1_Alia.html

// ---------------------------------------------------------------
// MODUL 2 - CSS
// ---------------------------------------------------------------
$routes->get('modul2/praktikum1', 'Modul2::praktikum1');   // mod2_prak1.html
$routes->get('modul2/praktikum2', 'Modul2::praktikum2');   // mod2_prak2.html

// ---------------------------------------------------------------
// MODUL 3 - STRUKTUR DASAR PHP
// ---------------------------------------------------------------
$routes->get('modul3/pertama', 'Modul3::pertama');         // pertama.php
$routes->get('modul3/biodata', 'Modul3::biodata');         // biodata.php
$routes->get('modul3/ketiga', 'Modul3::ketiga');           // ketiga.php
$routes->get('modul3/tugas', 'Modul3::tugas');             // mod3_tugas1.php

// ---------------------------------------------------------------
// MODUL 4 - PERULANGAN
// ---------------------------------------------------------------
$routes->get('modul4/perulangan/(:num)', 'Modul4::perulangan/$1'); // mod4_perulangan.php ... mod4_perulangan7.php
$routes->get('modul4/tugas', 'Modul4::tugas');                     // mod4_tugas1.php

// ---------------------------------------------------------------
// MODUL 5 - ARRAY  (dulu: mod6_*.php)
// ---------------------------------------------------------------
$routes->get('modul5/array1', 'Modul5::array1');           // mod6_array1.php
$routes->get('modul5/array2', 'Modul5::array2');           // mod6_array2.php
$routes->get('modul5/array3', 'Modul5::array3');           // mod6_array3.php
$routes->get('modul5/tugas', 'Modul5::tugas');             // mod6_tugas.php

// ---------------------------------------------------------------
// MODUL 6 - FORM  (dulu: mod7_*.php, modul7.php, simpan.php)
// ---------------------------------------------------------------
$routes->get('modul6/form-text', 'Modul6::formText');          // mod7_form_text.php
$routes->match(['get', 'post'], 'modul6/proses-text', 'Modul6::prosesText'); // mod7_proses_text.php
$routes->get('modul6/tugas', 'Modul6::tugas');                 // modul7.php
$routes->match(['get', 'post'], 'modul6/simpan', 'Modul6::simpan'); // simpan.php

// Login utama (mod7_tugas2_formLogin.php / login.php) & logout
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

// ---------------------------------------------------------------
// MODUL 9 - SESSION & COOKIE
// ---------------------------------------------------------------
$routes->get('modul9/cookie', 'Modul9::cookie');                         // mod9_cookie.php
$routes->match(['get', 'post'], 'modul9/login', 'Modul9::login');        // mod9_proses_login.php
$routes->get('modul9/submit', 'Modul9::submit');                         // mod9_submit_formlogin.php
$routes->get('modul9/menu/(:num)', 'Modul9::menu/$1');                   // mod9_menu1..3.php
$routes->get('modul9/logout', 'Modul9::logout');
$routes->match(['get', 'post'], 'modul9/tugas1', 'Modul9::tugas1');      // mod9_tugas1.php
$routes->get('modul9/tugas1/logout', 'Modul9::tugas1Logout');

// ---------------------------------------------------------------
// MODUL 10 - DATABASE
// ---------------------------------------------------------------
// CRUD tabel user (db_web)
$routes->get('modul10/users', 'Modul10::index');                         // mod10_tampil_user.php
$routes->get('modul10/users/tambah', 'Modul10::tambah');                 // mod10_tambah_data.php
$routes->post('modul10/users/simpan', 'Modul10::simpan');                // mod10_aksi_tambah_user.php
$routes->get('modul10/users/edit/(:segment)', 'Modul10::edit/$1');       // mod10_editUser.php
$routes->post('modul10/users/update', 'Modul10::update');                // mod10_aksi_edit_user.php
$routes->get('modul10/users/hapus/(:segment)', 'Modul10::hapus/$1');     // mod10_aksi_hapus_user.php

// Praktikum koneksi MySQL (db_kampus)
$routes->get('modul10/kampus/buat-database', 'Modul10Kampus::buatDatabase'); // mod10_koneksi_db.php
$routes->get('modul10/kampus/buat-tabel', 'Modul10Kampus::buatTabel');       // mod10_buat_tabel.php
$routes->get('modul10/kampus/tampil', 'Modul10Kampus::tampil');              // mod10_tampil.php
$routes->get('modul10/kampus/tugas', 'Modul10Kampus::tugas');                // mod10_tugas.php
$routes->get('modul10/kampus/update-data', 'Modul10Kampus::updateData');     // mod10_update_data.php
$routes->get('modul10/kampus/delete', 'Modul10Kampus::delete');              // mod10_delete.php
