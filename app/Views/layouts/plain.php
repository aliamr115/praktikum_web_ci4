<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Praktikum Web') ?> - AmrWeb</title>
    <?= $this->include('partials/assets') ?>
</head>
<body>
<?= $this->include('partials/topbar') ?>

<main class="page">
    <h1 class="page-title"><?= esc($title ?? '') ?></h1>
    <div class="output">
<?= $this->renderSection('content') ?>
    </div>
    <p class="back"><a class="btn btn-line btn-sm" href="<?= site_url('/') ?>#portofolio">Kembali ke Portofolio</a></p>
</main>

<?= $this->include('partials/footer_mini') ?>
</body>
</html>
