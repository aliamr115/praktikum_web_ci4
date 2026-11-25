<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
Saldo akhir setelah <?= esc($bulan) ?> bulan adalah : Rp. <?= esc($saldoAkhir) ?>,-

<h3>Hasil Perhitungan Kerucut</h3>
Jari-jari (r): <?= esc($r) ?> <br>
Garis Pelukis (s): <?= esc($s) ?> <br>
--------------------------- <br>
Luas Alas Kerucut: <?= esc($luasAlas) ?><br>
Luas Permukaan Kerucut: <?= esc($luasPermukaan) ?>
<?= $this->endSection() ?>
