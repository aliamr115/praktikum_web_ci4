<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'AmrWeb') ?> - AmrWeb</title>
    <?= $this->include('partials/assets') ?>
    <?php if (! empty($legacy)) : ?>
        <link rel="stylesheet" href="<?= base_url('css/legacy.css') ?>">
    <?php endif; ?>
    <?= $this->renderSection('head') ?>
</head>
<body>
<?= $this->include('partials/topbar') ?>

<main class="page wide">
    <h1 class="page-title"><?= esc($title ?? '') ?></h1>
    <div class="output prose<?= ! empty($legacy) ? ' demo' : '' ?>">
<?= $this->renderSection('content') ?>
    </div>
    <p class="back"><a class="btn btn-line btn-sm" href="<?= site_url('/') ?>#portofolio">Kembali ke Portofolio</a></p>
</main>

<?php if ($footer ?? true) : ?>
<?= $this->include('partials/footer_mini') ?>
<?php else : ?>
<script src="<?= base_url('js/site.js') ?>" defer></script>
<?php endif; ?>
</body>
</html>
