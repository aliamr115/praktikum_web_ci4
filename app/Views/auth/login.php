<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> - AmrWeb</title>
    <?= $this->include('partials/assets') ?>
</head>
<body class="auth">

<div class="auth-card">
    <a class="brand" href="<?= site_url('/') ?>"><span class="brand-mark" aria-hidden="true"></span>AmrWeb</a>

    <h1>Login</h1>
    <p class="muted">Masuk untuk melanjutkan.</p>

    <?php if (! empty($error)) : ?>
        <div class="notice notice-error" role="alert"><?= esc($error) ?></div>
    <?php endif; ?>

    <form class="form" method="POST" action="<?= site_url('login') ?>">
        <?= csrf_field() ?>

        <div class="field">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan Username" autocomplete="off" required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password" autocomplete="new-password" required>
        </div>

        <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
    </form>

    <p class="back"><a href="<?= site_url('/') ?>">Kembali ke beranda</a></p>
</div>

</body>
</html>
