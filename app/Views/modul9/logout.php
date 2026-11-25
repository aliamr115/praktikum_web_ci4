<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<div class="notice">Anda telah logout. Anda akan diarahkan ke halaman login dalam 3 detik...</div>
<a class="btn btn-line btn-sm" href="<?= site_url('modul9/login') ?>">Ke halaman login sekarang</a>
<?= $this->endSection() ?>
