<?php

namespace App\Controllers;

/** MODUL 3 STRUKTUR DASAR PHP */
class Modul3 extends BaseController
{
    /** pertama.php */
    public function pertama(): string
    {
        return view('modul3/pertama', ['title' => 'Belajar PHP']);
    }

    /** biodata.php */
    public function biodata(): string
    {
        return view('modul3/biodata', [
            'title'  => 'Biodata',
            'nim'    => '202457201010',
            'nama'   => 'Alia Masrukhatur Rizkiyah',
            'alamat' => 'Ngepeh',
            'nilai'  => 100,
        ]);
    }

    /** ketiga.php */
    public function ketiga(): string
    {
        $a          = '5';
        $b          = '2.5';
        $komentar   = 'Selamat Datang';
        $tambah     = $a + $b;
        $kurang     = $a - $b;
        $kali       = $a * $b;
        $bagi       = $a / $b;
        $nama       = 'ITM';
        $garis      = '==============================';

        return view('modul3/ketiga', compact(
            'a', 'b', 'komentar', 'tambah', 'kurang', 'kali', 'bagi', 'nama', 'garis'
        ) + ['title' => 'Variabel & Operator']);
    }

    /** mod3_tugas1.php */
    public function tugas(): string
    {
        // Tugas 1: saldo tabungan
        $saldoAwal  = 2000000;
        $bunga      = 0.03;
        $bulan      = 11;
        $saldoAkhir = $saldoAwal + ($saldoAwal * $bulan * $bunga);

        // Tugas 2: kerucut
        $r  = 7;
        $s  = 15;
        $pi = 3.14;

        $luasAlas       = $pi * $r * $r;
        $luasPermukaan  = ($pi * $r * $r) + ($pi * $r * $s);

        return view('modul3/tugas', compact(
            'bulan', 'saldoAkhir', 'r', 's', 'luasAlas', 'luasPermukaan'
        ) + ['title' => 'Tugas Modul 3']);
    }
}
