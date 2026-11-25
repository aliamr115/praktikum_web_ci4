<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<div class="notice"><?= esc($pesan) ?></div>
<p class="muted">Muat ulang halaman ini dalam 10 detik untuk melihat pesan kunjungan kembali.</p>
<?= $this->endSection() ?>
