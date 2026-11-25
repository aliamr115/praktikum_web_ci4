<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

/** MODUL 4 PERULANGAN */
class Modul4 extends BaseController
{
    /**
     * mod4_perulangan.php ... mod4_perulangan7.php
     * Setiap baris output dikumpulkan lebih dulu, lalu ditampilkan di view.
     */
    public function perulangan(int $nomor = 1): string
    {
        $baris = [];
        $akhir = '';

        switch ($nomor) {
            case 1: // while
                $bil = 1;
                while ($bil <= 3) {
                    $baris[] = "Nilai Sekarang adalah $bil";
                    $bil++;
                }
                break;

            case 2: // while + nilai akhir  (di file asli: $cill++ -> loop tak berhenti; diperbaiki jadi $bil++)
                $bil = 1;
                while ($bil <= 3) {
                    $baris[] = (string) $bil;
                    $bil++;
                }
                $akhir = 'Nilai bilangan sekarang adalah:' . $bil;
                break;

            case 3: // kelipatan 10 (while)
            case 4:
                $bil = 5;
                while ($bil <= 100) {
                    if ($bil % 10 === 0) {
                        $baris[] = (string) $bil;
                    }
                    $bil++;
                }
                break;

            case 5: // for
                $bilangan = 0;
                for ($a = 1; $a <= 5; $a++) {
                    $baris[]  = "Bilangan Sekarang adalah $bilangan";
                    $bilangan = $bilangan + $a;
                }
                break;

            case 6: // nested for  (di file asli: "a++" tanpa $ ; diperbaiki jadi $a++)
                for ($a = 1; $a <= 3; $a++) {
                    for ($b = 1; $b <= 2; $b++) {
                        $baris[] = 'Nilai a = ' . $a . ' Nilai b = ' . $b;
                    }
                }
                break;

            case 7: // do ... while
                $d = 1;
                do {
                    $baris[] = "Perulangan ke-$d";
                    $d++;
                } while ($d <= 5);
                break;

            default:
                throw PageNotFoundException::forPageNotFound();
        }

        return view('modul4/perulangan', [
            'title' => 'Perulangan - Praktikum ' . $nomor,
            'baris' => $baris,
            'akhir' => $akhir,
        ]);
    }

    /** mod4_tugas1.php */
    public function tugas(): string
    {
        // 1. Kelipatan 10 antara 5 sampai 100
        $kelipatan10 = [];
        for ($bil = 5; $bil <= 100; $bil++) {
            if ($bil % 10 === 0) {
                $kelipatan10[] = $bil;
            }
        }

        // 2. Jumlah bilangan 2 sampai 50
        $penjumlahan = [];
        $bil         = 2;
        $total       = 0;
        while ($bil <= 50) {
            $sebelumnya    = $total;
            $total         = $total + $bil;
            $penjumlahan[] = "$sebelumnya + $bil = $total";
            $bil++;
        }

        // 3. Kelipatan 6 dari 3 sampai 127
        $kelipatan6 = [];
        $bil        = 3;
        $banyak     = 0;
        while ($bil <= 127) {
            if ($bil % 6 === 0) {
                $banyak++;
                $kelipatan6[] = "Kelipatan ke-$banyak = $bil";
            }
            $bil++;
        }

        return view('modul4/tugas', [
            'title'       => 'Tugas Modul 4',
            'kelipatan10' => $kelipatan10,
            'penjumlahan' => $penjumlahan,
            'kelipatan6'  => $kelipatan6,
            'banyak'      => $banyak,
        ]);
    }
}
