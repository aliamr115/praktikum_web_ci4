<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<form class="form" enctype="multipart/form-data" action="<?= site_url('modul6/simpan') ?>" method="post">
    <?= csrf_field() ?>

    <div class="field">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
    </div>

    <div class="field">
        <label for="tempat">Tempat</label>
        <input type="text" id="tempat" name="tempat">
    </div>

    <div class="field">
        <label for="tgl">Tanggal lahir</label>
        <input type="date" id="tgl" name="tgl">
    </div>

    <fieldset class="field">
        <legend class="legend">Jenis kelamin</legend>
        <div class="choices">
            <label><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</label>
            <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
        </div>
    </fieldset>

    <div class="field">
        <label for="agama">Agama</label>
        <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Khonghuchu">Khonghuchu</option>
        </select>
    </div>

    <div class="field">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"></textarea>
    </div>

    <fieldset class="field">
        <legend class="legend">Hobi</legend>
        <div class="choices">
            <label><input type="checkbox" name="hobi1" value="berenang"> Berenang</label>
            <label><input type="checkbox" name="hobi2" value="berlari"> Berlari</label>
            <label><input type="checkbox" name="hobi3" value="membaca"> Membaca</label>
            <label><input type="checkbox" name="hobi4" value="Lainnya"> Lainnya</label>
        </div>
    </fieldset>

    <div class="field">
        <label for="file">Masukkan Foto</label>
        <input type="file" id="file" name="file" accept="image/*">
    </div>

    <div class="actions">
        <input class="btn btn-primary" type="submit" value="Kirim">
        <a class="btn btn-line" href="<?= site_url('logout') ?>">Logout</a>
    </div>
</form>
<?= $this->endSection() ?>
