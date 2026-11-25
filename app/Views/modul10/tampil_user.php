<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php if (! empty($pesan)) : ?>
    <div class="notice <?= str_contains($pesan, 'Gagal') || str_contains($pesan, 'tidak') ? 'notice-error' : 'notice-ok' ?>" role="status"><?= esc($pesan) ?></div>
<?php endif; ?>
<?php if (! empty($galat)) : ?>
    <div class="notice notice-error" role="alert"><?= esc($galat) ?></div>
<?php endif; ?>

<p class="toolbar"><a class="btn btn-primary btn-sm" href="<?= site_url('modul10/users/tambah') ?>">Tambah Data</a></p>

<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>id_user</th>
                <th>username</th>
                <th>password</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($rows)) : ?>
                <tr><td colspan="4">Belum ada data. Pilih Tambah Data untuk mulai.</td></tr>
            <?php endif; ?>
            <?php foreach ($rows as $data) : ?>
                <tr>
                    <td><?= esc($data['id_user']) ?></td>
                    <td><?= esc($data['username']) ?></td>
                    <td><?= esc($data['password']) ?></td>
                    <td class="aksi">
                        <a href="<?= site_url('modul10/users/edit/' . rawurlencode($data['id_user'])) ?>">edit</a> |
                        <a class="link-danger" href="<?= site_url('modul10/users/hapus/' . rawurlencode($data['id_user'])) ?>" onclick="return confirm('Apakah Anda yakin menghapus data tersebut?')">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
