<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php if (! empty($pesan)) : ?>
    <div class="notice notice-error" role="alert"><?= esc($pesan) ?></div>
<?php endif; ?>

<form class="form" name="session" method="POST" action="<?= site_url('modul9/login') ?>">
    <?= csrf_field() ?>
    <div class="field">
        <label for="nama">User Name</label>
        <input type="text" id="nama" name="nama">
    </div>
    <div class="field">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass">
    </div>
    <div class="actions">
        <input class="btn btn-primary" type="submit" name="Login" value="Login">
    </div>
</form>
<?= $this->endSection() ?>
