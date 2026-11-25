<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php foreach ($baris as $b) : ?>
<?= esc($b) ?><br />
<?php endforeach; ?>
<?php if (! empty($akhir)) : ?>
<?= esc($akhir) ?>
<?php endif; ?>
<?= $this->endSection() ?>
