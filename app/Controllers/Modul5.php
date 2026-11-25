<?php

namespace App\Controllers;

/**
 * MODUL 5 ARRAY  (file asli: mod6_array1.php, mod6_array2.php, mod6_array3.php, mod6_tugas.php)
 *
 * Output dirangkai sebagai "blok" ($blocks) lalu dirender oleh view modul5/array.
 * Jenis blok: text, strong, h2, h3, lines, assoc, print_r, br, hr
 */
class Modul5 extends BaseController
{
    /** mod6_array1.php */
    public function array1(): string
    {
        $kelompok1 = ['Andi', 'Budi', 'Chika', 'David', 'Erna'];

        $kelompok2   = [];
        $kelompok2[] = 'Fera';
        $kelompok2[] = 'Gani';
        $kelompok2[] = 'Hery';
        $kelompok2[] = 'Intan';
        $kelompok2[] = 'Jaka';

        $blocks = [
            ['text', 'Nama Kelompok 1 :'],
            ['lines', array_map(static fn ($n) => ' + ' . $n, $kelompok1)],
            ['br'], ['br'],
            ['text', 'Nama Kelompok 2 :'],
            ['lines', array_map(static fn ($n) => ' + ' . $n, $kelompok2)],
        ];

        return view('modul5/array', ['title' => 'Array - Praktikum 1', 'blocks' => $blocks]);
    }

    /** mod6_array2.php */
    public function array2(): string
    {
        $array1 = ['Arman', 'Bayu', 'Feri'];
        $blocks = [['text', 'array awal ialah:'], ['lines', $this->dataKe($array1)]];

        array_push($array1, 'Herni', 'Gita', 'Dewi');
        $blocks[] = ['br'];
        $blocks[] = ['text', 'Setelah ditambahkan "Herni, Gita & Dewi" menggunakan fungsi array_push():'];
        $blocks[] = ['lines', $this->dataKe($array1)];

        array_shift($array1);
        $blocks[] = ['br'];
        $blocks[] = ['text', 'Setelah bagian awal array dihapus menggunakan fungsi array_shift():'];
        $blocks[] = ['lines', $this->dataKe($array1)];

        sort($array1);
        $blocks[] = ['br'];
        $blocks[] = ['text', 'Dat setelah isi array diurutkan menggunakan fungsi sort()::'];
        $blocks[] = ['lines', $this->dataKe($array1)];

        return view('modul5/array', ['title' => 'Array - Praktikum 2', 'blocks' => $blocks]);
    }

    /** mod6_array3.php */
    public function array3(): string
    {
        $pegawai = ['lina', 'arni', 'jona', 'punjabi', 'marcus', 'marlin'];

        $blocks = [
            ['strong', 'Sebelum diurutkan'],
            ['assoc', $pegawai],
        ];

        sort($pegawai);
        $blocks[] = ['strong', 'Setelah diurutkan'];
        $blocks[] = ['assoc', $pegawai];

        return view('modul5/array', ['title' => 'Array - Praktikum 3', 'blocks' => $blocks]);
    }

    /** mod6_tugas.php */
    public function tugas(): string
    {
        $mahasiswa = [
            'M001' => 'Andi',
            'M002' => 'Budi',
            'M003' => 'Chika',
            'M004' => 'Dewi',
            'M005' => 'Erna',
        ];

        $blocks = [
            ['h3', 'Array Asosiatif Awal'],
            ['assoc', $mahasiswa, ' : '],
        ];

        $temp = $mahasiswa;
        sort($temp);
        $blocks[] = ['h3', 'sort()'];
        $blocks[] = ['print_r', $temp];

        $temp = $mahasiswa;
        rsort($temp);
        $blocks[] = ['h3', 'rsort()'];
        $blocks[] = ['print_r', $temp];

        $temp = $mahasiswa;
        asort($temp);
        $blocks[] = ['h3', 'asort()'];
        $blocks[] = ['assoc', $temp, ' : '];

        $temp = $mahasiswa;
        arsort($temp);
        $blocks[] = ['h3', 'arsort()'];
        $blocks[] = ['assoc', $temp, ' : '];

        $temp = $mahasiswa;
        ksort($temp);
        $blocks[] = ['h3', 'ksort()'];
        $blocks[] = ['assoc', $temp, ' : '];

        $temp = $mahasiswa;
        krsort($temp);
        $blocks[] = ['h3', 'krsort()'];
        $blocks[] = ['assoc', $temp, ' : '];

        $blocks[] = ['hr'];
        $blocks[] = ['h2', 'Implementasi 5 Fungsi Array'];

        $data = ['Andi', 'Budi', 'Chika'];

        array_push($data, 'Dewi', 'Erna');
        $blocks[] = ['h3', '1. array_push()'];
        $blocks[] = ['print_r', $data];

        array_pop($data);
        $blocks[] = ['h3', '2. array_pop()'];
        $blocks[] = ['print_r', $data];

        array_unshift($data, 'Zaki');
        $blocks[] = ['h3', '3. array_unshift()'];
        $blocks[] = ['print_r', $data];

        array_shift($data);
        $blocks[] = ['h3', '4. array_shift()'];
        $blocks[] = ['print_r', $data];

        $balik = array_reverse($data);
        $blocks[] = ['h3', '5. array_reverse()'];
        $blocks[] = ['print_r', $balik];

        return view('modul5/array', ['title' => 'Tugas Modul 5', 'blocks' => $blocks]);
    }

    /** @return list<string> */
    private function dataKe(array $arr): array
    {
        $out = [];
        for ($i = 0; $i < count($arr); $i++) {
            $out[] = 'data ke-' . $i . ' : ' . $arr[$i];
        }

        return $out;
    }
}
