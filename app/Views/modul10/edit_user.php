<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<form class="form" action="<?= site_url('modul10/users/update') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id_user" value="<?= esc($row['id_user'], 'attr') ?>">
    <div class="field">
        <span class="legend">id</span>
        <span><?= esc($row['id_user']) ?></span>
    </div>
    <div class="field">
        <label for="username">username</label>
        <input type="text" id="username" name="username" value="<?= esc($row['username'], 'attr') ?>">
    </div>
    <div class="field">
        <label for="password">password</label>
        <input type="text" id="password" name="password" value="<?= esc($row['password'], 'attr') ?>">
    </div>
    <div class="actions">
        <input class="btn btn-primary" type="submit" value="simpan">
        <a class="btn btn-line" href="<?= site_url('modul10/users') ?>">Batal</a>
    </div>
</form>
<?= $this->endSection() ?>
