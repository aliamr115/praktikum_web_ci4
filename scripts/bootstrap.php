<?php

/**
 * Dijalankan otomatis setelah `composer install` / `composer update`.
 *
 * Menyalin file skeleton bawaan CodeIgniter 4 (app/Config/*, public/index.php,
 * spark, dsb.) dari vendor/codeigniter4/framework ke proyek ini,
 * HANYA jika file tersebut belum ada. File milik proyek tidak pernah ditimpa.
 */

$root = dirname(__DIR__);
$src  = $root . '/vendor/codeigniter4/framework';

if (! is_dir($src)) {
    fwrite(STDERR, "[bootstrap] vendor/codeigniter4/framework tidak ditemukan. Jalankan: composer install\n");
    exit(0);
}

function copyMissing(string $from, string $to): void
{
    if (is_dir($from)) {
        if (! is_dir($to)) {
            mkdir($to, 0775, true);
        }
        foreach (scandir($from) as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            copyMissing($from . '/' . $item, $to . '/' . $item);
        }
    } elseif (! file_exists($to)) {
        copy($from, $to);
    }
}

foreach (['app', 'public', 'writable'] as $dir) {
    if (is_dir("$src/$dir")) {
        copyMissing("$src/$dir", "$root/$dir");
    }
}

foreach (['spark', 'preload.php', 'env'] as $file) {
    if (is_file("$src/$file")) {
        copyMissing("$src/$file", "$root/$file");
    }
}

// Paths.php bawaan paket framework mengira folder "system" berada di samping "app".
// Lewat Composer, folder itu ada di vendor/codeigniter4/framework/system.
$paths = $root . '/app/Config/Paths.php';
if (is_file($paths)) {
    $isi  = file_get_contents($paths);
    $baru = str_replace("/../../system'", "/../../vendor/codeigniter4/framework/system'", $isi);
    if ($baru !== $isi) {
        file_put_contents($paths, $baru);
    }
}

echo "[bootstrap] Skeleton CodeIgniter 4 dilengkapi.\n";
