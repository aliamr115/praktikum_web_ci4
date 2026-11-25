<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<h4>1. Bilangan kelipatan 10 antara 5 sampai 100: </h4>
<?= esc(implode(' ', $kelipatan10)) ?> 

<h4>2. Jumlah bilangan dari 2 sampai 50 : </h4><br>
<?php foreach ($penjumlahan as $baris) : ?>
<?= esc($baris) ?> <br>
<?php endforeach; ?>

<br>3. Banyak bilangan kelipatan 6 dari 3 sampai 127 : <br>
<?php foreach ($kelipatan6 as $baris) : ?>
<?= esc($baris) ?> <br>
<?php endforeach; ?>
<br>Total banyak bilangan kelipatan 6 = <?= esc($banyak) ?>
<?= $this->endSection() ?>
