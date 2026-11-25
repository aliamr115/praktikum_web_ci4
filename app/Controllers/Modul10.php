<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

/**
 * MODUL 10 DATABASE - CRUD tabel user (db_web)
 * (file asli: mod10_tampil_user.php, mod10_tambah_data.php, mod10_aksi_tambah_user.php,
 *  mod10_editUser.php, mod10_aksi_edit_user.php, mod10_aksi_hapus_user.php, mod10_koneksi.php)
 */
class Modul10 extends BaseController
{
    private UserModel $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    /** mod10_tampil_user.php */
    public function index(): string
    {
        $rows  = [];
        $galat = null;

        try {
            $rows = $this->users->findAll();
        } catch (DatabaseException $e) {
            $galat = 'Koneksi/tabel database bermasalah: ' . $e->getMessage()
                . ' (import database/db_web.sql terlebih dahulu)';
        }

        return view('modul10/tampil_user', [
            'title' => 'Data User',
            'rows'  => $rows,
            'pesan' => session()->getFlashdata('pesan'),
            'galat' => $galat,
        ]);
    }

    /** mod10_tambah_data.php */
    public function tambah(): string
    {
        return view('modul10/tambah_data', ['title' => 'Tambah Data']);
    }

    /** mod10_aksi_tambah_user.php */
    public function simpan()
    {
        $data = [
            'id_user'  => trim((string) $this->request->getPost('id_user')),
            'username' => (string) $this->request->getPost('username'),
            'password' => (string) $this->request->getPost('password'),
        ];

        $ok = false;
        if ($data['id_user'] !== '') {
            try {
                $ok = (bool) $this->users->insert($data, false);
            } catch (DatabaseException) {
                $ok = false;
            }
        }

        session()->setFlashdata('pesan', $ok ? 'Data Berhasil disimpan' : 'Data Gagal disimpan');

        return redirect()->to(site_url('modul10/users'));
    }

    /** mod10_editUser.php */
    public function edit(string $id = '')
    {
        $row = null;
        try {
            $row = $this->users->find($id);
        } catch (DatabaseException) {
            $row = null;
        }

        if (! $row) {
            session()->setFlashdata('pesan', 'Data tidak ditemukan');

            return redirect()->to(site_url('modul10/users'));
        }

        return view('modul10/edit_user', ['title' => 'Edit Data', 'row' => $row]);
    }

    /** mod10_aksi_edit_user.php */
    public function update()
    {
        $id = trim((string) $this->request->getPost('id_user'));
        $ok = false;

        if ($id !== '') {
            try {
                $ok = (bool) $this->users->update($id, [
                    'username' => (string) $this->request->getPost('username'),
                    'password' => (string) $this->request->getPost('password'),
                ]);
            } catch (DatabaseException) {
                $ok = false;
            }
        }

        session()->setFlashdata('pesan', $ok ? 'Data Berhasil disimpan' : 'Data Gagal disimpan');

        return redirect()->to(site_url('modul10/users'));
    }

    /** mod10_aksi_hapus_user.php */
    public function hapus(string $id = '')
    {
        $ok = false;

        if ($id !== '') {
            try {
                $this->users->delete($id);
                $ok = true;
            } catch (DatabaseException) {
                $ok = false;
            }
        }

        session()->setFlashdata('pesan', $ok ? 'Data Berhasil dihapus' : 'Data Gagal dihapus');

        return redirect()->to(site_url('modul10/users'));
    }
}
