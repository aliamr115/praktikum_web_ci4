<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
Nilai variabel a adalah = <?= esc($a) ?> <br>
Nilai variabel b adalah = <?= esc($b) ?> <br>
Nilai variabel komentar adalah = <?= esc($komentar) ?><br>
Hasil penjumlahan a dan b adalah = <?= esc($tambah) ?> <br>
Hasil pengurangan a dan b adalah = <?= esc($kurang) ?> <br>
Hasil perkalian a dan b adalah = <?= esc($kali) ?> <br>
Hasil pembagian a dan b adalah = <?= esc($bagi) ?> <br>
<p>
<?= esc($garis) ?><br>
<?= esc($komentar) ?> Di Lab <?= esc($nama) ?><br>Selamat Belajar Pemrograman Web<br>
<?= esc($garis) ?><br>
<?= $this->endSection() ?>
