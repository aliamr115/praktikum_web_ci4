<?php

namespace App\Controllers;

use CodeIgniter\Database\BaseConnection;
use Config\Database;

/**
 * MODUL 10 DATABASE - praktikum koneksi MySQL ke db_kampus
 * (file asli: mod10_koneksi_db.php, mod10_buat_tabel.php, mod10_tampil.php,
 *  mod10_tugas.php, mod10_update_data.php, mod10_delete.php)
 */
class Modul10Kampus extends BaseController
{
    /** Konfigurasi koneksi = default (.env) tetapi database diganti. */
    private function config(string $database): array
    {
        $cfg             = config('Database')->default;
        $cfg['database'] = $database;

        return $cfg;
    }

    private function kampus(): BaseConnection
    {
        return Database::connect($this->config('db_kampus'));
    }

    private function tampilHalaman(string $judul, string $html): string
    {
        return view('modul10/kampus', ['title' => $judul, 'html' => $html]);
    }

    /** mod10_koneksi_db.php - CREATE DATABASE db_kampus */
    public function buatDatabase(): string
    {
        try {
            $forge = Database::forge($this->config(''));
            $forge->createDatabase('db_kampus', true);
            $html = 'Database Berhasil dibuat';
        } catch (\Throwable $e) {
            $html = 'Gagal membuat database :' . esc($e->getMessage());
        }

        return $this->tampilHalaman('Buat Database', $html);
    }

    /** mod10_buat_tabel.php - CREATE TABLE user (id_user, nama, alamat, telp) */
    public function buatTabel(): string
    {
        try {
            $forge = Database::forge($this->config('db_kampus'));
            $forge->addField([
                'id_user' => ['type' => 'VARCHAR', 'constraint' => 20],
                'nama'    => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
                'alamat'  => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
                'telp'    => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
            ]);
            $forge->addKey('id_user', true);
            $forge->createTable('user', true);
            $html = 'Tabel berhasil dibuat';
        } catch (\Throwable $e) {
            $html = 'Tabel gagal dibuat : ' . esc($e->getMessage());
        }

        return $this->tampilHalaman('Buat Tabel', $html);
    }

    /** mod10_tampil.php */
    public function tampil(): string
    {
        return $this->tampilHalaman('Data User (db_kampus)', $this->daftarUser('ID: '));
    }

    /** mod10_tugas.php */
    public function tugas(): string
    {
        return $this->tampilHalaman('Tugas Modul 10', $this->daftarUser('ID : '));
    }

    /** mod10_update_data.php */
    public function updateData(): string
    {
        try {
            $db = $this->kampus();
            $db->initialize();
            $html = 'Koneksi Berhasil <br/>';

            $id     = '202457201010';
            $nama   = 'Alia Masrukhatur Rizkiyah';
            $telp   = '083812344321';
            $alamat = 'Ngepeh - Loceret - Nganjuk';

            $db->table('user')->where('id_user', $id)->update([
                'nama'   => $nama,
                'telp'   => $telp,
                'alamat' => $alamat,
            ]);

            $html .= 'Data berhasil diupdate <br/>';
            $html .= 'ID : ' . esc($id) . ' <br/>';
            $html .= 'Nama Baru : ' . esc($nama) . ' <br/>';
        } catch (\Throwable $e) {
            $html = 'Data gagal diupdate : ' . esc($e->getMessage()) . '<br/>';
        }

        return $this->tampilHalaman('Update Data', $html);
    }

    /** mod10_delete.php - DELETE FROM user WHERE id_user='' */
    public function delete(): string
    {
        try {
            $db = $this->kampus();
            $db->initialize();
            $html = 'Koneksi Berhasil <br/>';

            $db->table('user')->where('id_user', '')->delete();
            $html .= 'Data berhasil dihapus!';
        } catch (\Throwable $e) {
            $html = 'Data gagal dihapus: ' . esc($e->getMessage());
        }

        return $this->tampilHalaman('Hapus Data', $html);
    }

    /** Dipakai oleh tampil() dan tugas(): SELECT id_user, nama, alamat, telp FROM user */
    private function daftarUser(string $labelId): string
    {
        try {
            $db = $this->kampus();
            $db->initialize();
            $html = 'Koneksi Berhasil <br/>';

            $rows = $db->table('user')->select('id_user, nama, alamat, telp')->get()->getResultArray();
            foreach ($rows as $data) {
                $html .= $labelId . esc($data['id_user']) . '<br/>';
                $html .= 'Nama : ' . esc($data['nama']) . '<br/>';
                $html .= 'Alamat : ' . esc($data['alamat']) . '<br/>';
                $html .= 'Telp : ' . esc($data['telp']) . '<br/><hr/>';
                $html .= '<br/>';
            }
        } catch (\Throwable $e) {
            $html = 'Koneksi gagal: ' . esc($e->getMessage());
        }

        return $html;
    }
}
