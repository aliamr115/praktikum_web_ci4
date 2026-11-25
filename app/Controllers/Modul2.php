<?php

namespace App\Controllers;

/** MODUL 2 CSS */
class Modul2 extends BaseController
{
    public function praktikum1(): string
    {
        return view('classic/mod2_prak1', ['title' => 'Margin, Padding, Border dan Background', 'legacy' => true]);
    }

    public function praktikum2(): string
    {
        return view('classic/mod2_prak2', ['title' => 'Positioning', 'legacy' => true]);
    }
}
