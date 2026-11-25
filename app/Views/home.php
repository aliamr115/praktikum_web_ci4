<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1d1b34">
    <title><?= esc($title) ?></title>
    <?= $this->include('partials/assets') ?>
</head>
<body>
<?= $this->include('partials/topbar') ?>

<main>

    <section id="home" class="hero">
        <div class="wrap hero-grid">

            <div>
                <h1>
                    <span>Alia</span>
                    <span>Masrukhatur</span>
                    <span>Rizkiyah</span>
                </h1>
                <p class="lead">
                    Mahasiswa Sistem Informasi yang belajar Web Development, Database,
                    dan Teknologi Informasi lewat tugas dan proyek perkuliahan.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#portofolio">Lihat portofolio</a>
                    <a class="btn btn-line" href="#contact">Contact Me</a>
                </div>
            </div>

            <div class="stage">
                <div class="carousel" data-carousel role="region" aria-roledescription="carousel" aria-label="Sorotan website">

                    <figure class="slide is-active" aria-hidden="false">
                        <img src="<?= base_url('img/home.png') ?>" alt="home">
                        <figcaption>
                            <p class="cap-title">Selamat Datang di Website Saya</p>
                            <p class="cap-text">Portfolio Mahasiswa Sistem Informasi</p>
                        </figcaption>
                    </figure>

                    <figure class="slide" aria-hidden="true">
                        <img src="<?= base_url('img/about.png') ?>" alt="about">
                        <figcaption>
                            <p class="cap-title">About Me</p>
                            <p class="cap-text">Mengenal lebih dekat Alia Masrukhatur Rizkiyah</p>
                        </figcaption>
                    </figure>

                    <figure class="slide" aria-hidden="true">
                        <img src="<?= base_url('img/portofolio.png') ?>" alt="portofolio">
                        <figcaption>
                            <p class="cap-title">Portfolio Tugas</p>
                            <p class="cap-text">Kumpulan tugas dan project selama perkuliahan</p>
                        </figcaption>
                    </figure>

                    <div class="car-dots">
                        <button class="dot" type="button" aria-label="Slide 1" aria-current="true"></button>
                        <button class="dot" type="button" aria-label="Slide 2" aria-current="false"></button>
                        <button class="dot" type="button" aria-label="Slide 3" aria-current="false"></button>
                    </div>

                    <div class="car-nav">
                        <button class="car-btn" type="button" data-prev aria-label="Previous">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
                        </button>
                        <button class="car-btn" type="button" data-next aria-label="Next">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="profil" class="section">
        <div class="wrap about-grid">

            <div class="portrait">
                <img src="<?= base_url('img/alia.jpeg') ?>" alt="Foto Saya" width="480" height="600">
            </div>

            <div class="about-text">
                <h2>About Me</h2>
                <p>
                    Halo! Saya <strong>Alia Masrukhatur Rizkiyah</strong>,
                    mahasiswa Sistem Informasi yang memiliki minat dalam
                    bidang Web Development, Database, dan Teknologi Informasi.
                    Saya senang mempelajari hal baru dan mengembangkan kemampuan
                    melalui berbagai proyek serta tugas perkuliahan.
                </p>

                <dl class="facts">
                    <div><dt>Nama</dt><dd>Alia Masrukhatur Rizkiyah</dd></div>
                    <div><dt>TTL</dt><dd>Bandar Agung, 05 November 2005</dd></div>
                    <div><dt>Jenis Kelamin</dt><dd>Perempuan</dd></div>
                    <div><dt>Agama</dt><dd>Islam</dd></div>
                    <div><dt>Alamat</dt><dd>Nganjuk</dd></div>
                    <div><dt>Status</dt><dd>Mahasiswa Sistem Informasi</dd></div>
                </dl>

                <a href="#contact" class="btn btn-primary">Contact Me</a>
            </div>

        </div>
    </section>

    <section id="portofolio" class="section band">
        <div class="wrap">
            <div class="section-head">
                <h2>Portofolio Tugas</h2>
                <p>Hasil praktikum dan tugas dari setiap modul. Pilih salah satu untuk membukanya.</p>
            </div>

            <?= $this->include('partials/ledger') ?>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div id="contact" class="contact">
                <div>
                    <h2>Contact Me</h2>
                    <p>Ada pertanyaan tentang tugas atau ingin berdiskusi? Hubungi saya lewat salah satu kontak ini.</p>
                </div>
                <ul class="contact-list">
                    <li>
                        <a href="mailto:aliamasrukhaturrizkiya@gmail.com">
                            <span class="ico"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></span>
                            aliamasrukhaturrizkiya@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:+6283832472440">
                            <span class="ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
                            083832472440
                        </a>
                    </li>
                    <li>
                        <span class="row">
                            <span class="ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
                            Nganjuk, Jawa Timur
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?= $this->include('partials/footer') ?>
</body>
</html>
