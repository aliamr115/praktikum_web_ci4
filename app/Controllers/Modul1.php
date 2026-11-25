<?php

namespace App\Controllers;

/** MODUL 1 HTML */
class Modul1 extends BaseController
{
    public function praktikum1(): string
    {
        return view('classic/prak1', ['title' => 'Belajar Membuat Heading dan Paragraph']);
    }

    public function praktikum2(): string
    {
        return view('classic/prak2', ['title' => 'List']);
    }

    public function praktikum3(): string
    {
        return view('classic/prak3', ['title' => 'Image & Table']);
    }

    public function tugas1(): string
    {
        return view('classic/tugas1', ['title' => 'Tugas 1 Pemograman Web']);
    }
}
