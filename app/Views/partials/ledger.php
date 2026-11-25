<?php
$modul = [
    ['no' => 1, 'judul' => 'HTML', 'ket' => 'Heading, daftar, gambar, dan tabel', 'link' => [
        ['Praktikum 1: Biodata Diri', 'modul1/praktikum1'],
        ['Praktikum 2: Resep Telur Goreng', 'modul1/praktikum2'],
        ['Praktikum 3: Tabel Barang', 'modul1/praktikum3'],
    ]],
    ['no' => 2, 'judul' => 'CSS', 'ket' => 'Box model dan positioning', 'link' => [
        ['Praktikum 1: Margin, Padding, Border dan Background', 'modul2/praktikum1'],
        ['Praktikum 2: Positioning', 'modul2/praktikum2'],
        ['Praktikum 3: Membuat Website Pribadi', 'home'],
    ]],
    ['no' => 3, 'judul' => 'Struktur Dasar PHP', 'ket' => 'Variabel, operator, dan perhitungan', 'link' => [
        ['Praktikum 1: Pertama', 'modul3/pertama'],
        ['Praktikum 2: Biodata', 'modul3/biodata'],
        ['Praktikum 3: Ketiga', 'modul3/ketiga'],
        ['Praktikum 4: Tugas', 'modul3/tugas'],
    ]],
    ['no' => 4, 'judul' => 'Perulangan', 'ket' => 'while, for, dan do-while', 'link' => [
        ['Praktikum 1', 'modul4/perulangan/1'],
        ['Praktikum 2', 'modul4/perulangan/2'],
        ['Praktikum 3', 'modul4/perulangan/3'],
        ['Praktikum 4', 'modul4/perulangan/4'],
        ['Praktikum 5', 'modul4/perulangan/5'],
        ['Praktikum 6', 'modul4/perulangan/6'],
        ['Praktikum 7', 'modul4/perulangan/7'],
        ['Tugas Modul 4', 'modul4/tugas'],
    ]],
    ['no' => 5, 'judul' => 'Array', 'ket' => 'Fungsi array dan pengurutan data', 'link' => [
        ['Praktikum 1', 'modul5/array1'],
        ['Praktikum 2', 'modul5/array2'],
        ['Praktikum 3', 'modul5/array3'],
        ['Tugas Modul 5', 'modul5/tugas'],
    ]],
    ['no' => 6, 'judul' => 'Form Text', 'ket' => 'Form input, login, dan unggah foto', 'link' => [
        ['Praktikum 1', 'modul6/form-text'],
        ['Praktikum 2', 'modul6/proses-text'],
        ['Praktikum 3', 'login'],
        ['Tugas Modul 6', 'modul6/tugas'],
    ]],
    ['no' => 9, 'judul' => 'Session dan Cookie', 'ket' => 'Menyimpan status pengunjung', 'link' => [
        ['Cookie', 'modul9/cookie'],
        ['Session', 'modul9/login'],
        ['Tugas Modul 9', 'modul9/tugas1'],
    ]],
    ['no' => 10, 'judul' => 'Database', 'ket' => 'MySQL: tambah, ubah, dan hapus data', 'link' => [
        ['Data User', 'modul10/users'],
        ['Buat Database', 'modul10/kampus/buat-database'],
        ['Buat Tabel', 'modul10/kampus/buat-tabel'],
        ['Tampil Data', 'modul10/kampus/tampil'],
        ['Tugas Modul 10', 'modul10/kampus/tugas'],
    ]],
];
?>
<ol class="ledger">
    <?php foreach ($modul as $m) : ?>
        <li class="mod">
            <span class="mod-no" aria-hidden="true"><?= $m['no'] ?></span>
            <div>
                <h3><span class="sr-only">Modul <?= $m['no'] ?> </span><?= esc($m['judul']) ?></h3>
                <p><?= esc($m['ket']) ?></p>
            </div>
            <ul class="chips">
                <?php foreach ($m['link'] as [$label, $rute]) : ?>
                    <li><a href="<?= site_url($rute) ?>"><?= esc($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ol>
