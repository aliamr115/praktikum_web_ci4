<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php if (! empty($loginUser)) : ?>

    <div class="notice notice-ok">Selamat Datang, Username: <strong><?= esc($loginUser) ?></strong></div>
    <h2>Anda telah berhasil login</h2>
    <ul class="chips spaced">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
    </ul>
    <a class="btn btn-line btn-sm" href="<?= site_url('modul9/tugas1/logout') ?>">Logout</a>

<?php else : ?>

    <?php if (! empty($error)) : ?>
        <div class="notice notice-error" role="alert"><?= esc($error) ?></div>
    <?php endif; ?>

    <form class="form" method="POST" action="<?= site_url('modul9/tugas1') ?>">
        <?= csrf_field() ?>
        <div class="field">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        <div class="actions">
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
        </div>
    </form>

<?php endif; ?>
<?= $this->endSection() ?>
