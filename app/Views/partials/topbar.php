<?php
// Di halaman utama tautan cukup "#bagian"; di halaman lain diarahkan ke beranda.
$prefix = empty($onHome) ? site_url('/') : '';
$masuk  = (bool) session()->get('login');
?>
<header class="topbar">
    <div class="wrap">
        <a class="brand" href="<?= site_url('/') ?>"><span class="brand-mark" aria-hidden="true"></span>AmrWeb</a>

        <button class="nav-toggle" type="button" aria-label="Buka menu" aria-controls="nav" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="nav" id="nav" aria-label="Menu utama">
            <a href="<?= $prefix ?>#home">Home</a>
            <a href="<?= $prefix ?>#profil">About Me</a>
            <a href="<?= $prefix ?>#portofolio">Portofolio</a>
            <a href="<?= $prefix ?>#contact">Contact</a>
            <?php if ($masuk) : ?>
                <a class="btn btn-dark btn-sm" href="<?= site_url('logout') ?>">Logout</a>
            <?php else : ?>
                <a class="btn btn-dark btn-sm" href="<?= site_url('login') ?>">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
