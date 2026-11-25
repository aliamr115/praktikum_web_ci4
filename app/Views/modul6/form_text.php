<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<form class="form" id="form_text" name="form_text" method="POST" action="<?= site_url('modul6/proses-text') ?>">
    <?= csrf_field() ?>
    <div class="field">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">
    </div>
    <div class="field">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div class="actions">
        <input class="btn btn-primary" type="submit" name="Button" id="Button" value="Tampil">
    </div>
</form>
<?= $this->endSection() ?>
