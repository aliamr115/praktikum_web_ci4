<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
NIM : <?= esc($nim) ?><br>
Nama : <?= esc($nama) ?><br>
Alamat : <?= esc($alamat) ?><br>
Nilai : <?= esc($nilai) ?><br>
<?= $this->endSection() ?>
