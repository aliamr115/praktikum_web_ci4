<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php if (! empty($pesan)) : ?>
    <div class="notice <?= str_contains($pesan, 'berhasil') ? 'notice-ok' : 'notice-error' ?>" role="status"><?= esc($pesan) ?></div>
<?php endif; ?>

<?php if ($upload !== '') : ?>
    <img class="result-photo" src="<?= base_url($upload) ?>" alt="Foto yang diunggah">
<?php endif; ?>

<dl class="facts one">
    <div><dt>Nama</dt><dd><?= esc($nama) ?></dd></div>
    <div><dt>Tempat Lahir</dt><dd><?= esc($tempat) ?></dd></div>
    <div><dt>Tanggal Lahir</dt><dd><?= esc($tgl) ?></dd></div>
    <div><dt>Jenis Kelamin</dt><dd><?= esc($jk) ?></dd></div>
    <div><dt>Agama</dt><dd><?= esc($agama) ?></dd></div>
    <div><dt>Alamat</dt><dd><?= esc($alamat) ?></dd></div>
    <div>
        <dt>Hobi</dt>
        <dd>
            <?php if (count($hobi) === 0) : ?>
                Tidak ada
            <?php else : ?>
                <?= esc(implode(', ', $hobi)) ?>
            <?php endif; ?>
        </dd>
    </div>
</dl>

<a class="btn btn-line btn-sm" href="<?= site_url('modul6/tugas') ?>">Kembali ke form</a>
<?= $this->endSection() ?>
