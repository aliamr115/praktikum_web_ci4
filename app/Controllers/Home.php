<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Halaman utama - isi dari index.php (Bootstrap: navbar, carousel,
     * About Me, Portofolio, footer).
     */
    public function index(): string
    {
        return view('home', [
            'title'  => 'AmrWeb - Alia Masrukhatur Rizkiyah',
            'onHome' => true,
        ]);
    }

    /** home.html (versi klasik dengan css/style.css) */
    public function classicHome(): string
    {
        return view('classic/home', ['title' => 'Home']);
    }

    /** portofolio.html */
    public function classicPortofolio(): string
    {
        return view('classic/portofolio', ['title' => 'Portofolio Tugas']);
    }
}
