<?= $this->extend('layouts/plain') ?>

<?= $this->section('content') ?>
<?php foreach ($blocks as $b) : ?>
<?php $jenis = $b[0]; ?>
<?php if ($jenis === 'text') : ?>
<?= esc($b[1]) ?><br />
<?php elseif ($jenis === 'strong') : ?>
<strong><?= esc($b[1]) ?></strong><br />
<?php elseif ($jenis === 'h2') : ?>
<h2><?= esc($b[1]) ?></h2>
<?php elseif ($jenis === 'h3') : ?>
<h3><?= esc($b[1]) ?></h3>
<?php elseif ($jenis === 'lines') : ?>
<?php foreach ($b[1] as $baris) : ?>
<?= esc($baris) ?><br />
<?php endforeach; ?>
<?php elseif ($jenis === 'assoc') : ?>
<?php $sep = $b[2] ?? ': '; ?>
<?php foreach ($b[1] as $kunci => $nilai) : ?>
<?= esc($kunci) . $sep . esc($nilai) ?><br />
<?php endforeach; ?>
<?php elseif ($jenis === 'print_r') : ?>
<?= esc(print_r($b[1], true)) ?><br><br>
<?php elseif ($jenis === 'br') : ?>
<br />
<?php elseif ($jenis === 'hr') : ?>
<hr>
<?php endif; ?>
<?php endforeach; ?>
<?= $this->endSection() ?>
