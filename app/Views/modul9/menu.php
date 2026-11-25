<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<div class="notice notice-ok">Anda login sebagai <strong><?= esc($nama) ?></strong></div>
<p>Berikut ini menu navigasi anda</p>
<ul class="chips spaced">
    <li><a href="<?= site_url('modul9/menu/1') ?>">Menu 1</a></li>
    <li><a href="<?= site_url('modul9/menu/2') ?>">Menu 2</a></li>
    <li><a href="<?= site_url('modul9/menu/3') ?>">Menu 3</a></li>
</ul>
<a class="btn btn-line btn-sm" href="<?= site_url('modul9/logout') ?>">Logout</a>
<?= $this->endSection() ?>
