<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<form class="form" action="<?= site_url('modul10/users/simpan') ?>" method="post">
    <?= csrf_field() ?>
    <div class="field">
        <label for="id_user">id</label>
        <input type="text" id="id_user" name="id_user">
    </div>
    <div class="field">
        <label for="username">username</label>
        <input type="text" id="username" name="username">
    </div>
    <div class="field">
        <label for="password">password</label>
        <input type="text" id="password" name="password">
    </div>
    <div class="actions">
        <input class="btn btn-primary" type="submit" value="simpan">
        <a class="btn btn-line" href="<?= site_url('modul10/users') ?>">Batal</a>
    </div>
</form>
<?= $this->endSection() ?>
