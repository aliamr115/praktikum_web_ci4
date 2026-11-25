<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

/**
 * MODUL 9 SESSION & COOKIE
 * (file asli: mod9_cookie.php, mod9_proses_login.php, mod9_submit_formlogin.php,
 *  mod9_menu1-3.php, mod9_tugas1.php, mod9_header.php, mod9_footer.php)
 */
class Modul9 extends BaseController
{
    /** mod9_cookie.php */
    public function cookie()
    {
        $sudahAda = $this->request->getCookie('netter');
        $pesan    = $sudahAda
            ? 'Selamat Datang Kembali'
            : 'Selamat Datang, Ini Kunjungan Anda Pertama Kalinya';

        // cookie berlaku 10 detik (sama seperti time()+10 pada file asli)
        $this->response->setCookie('netter', '1', 10);

        return $this->response->setBody(view('modul9/cookie', ['title' => 'Cookies', 'pesan' => $pesan]));
    }

    /** mod9_proses_login.php */
    public function login()
    {
        $pesan = null;

        if (strtolower($this->request->getMethod()) === 'post' && $this->request->getPost('Login') !== null) {
            $nama = (string) $this->request->getPost('nama');
            $pass = (string) $this->request->getPost('pass');

            if ($nama === '' && $pass === '') {
                $pesan = 'User Name dan Password masih kosong';
            } elseif ($nama === 'naufal' && $pass === 'chocolatos3') {
                session()->set(['m9_login' => 1, 'm9_username' => $nama]);

                return redirect()->to(site_url('modul9/submit'));
            }
        }

        return view('modul9/login', ['title' => 'Session', 'pesan' => $pesan]);
    }

    /** mod9_submit_formlogin.php */
    public function submit()
    {
        if (! session()->get('m9_login')) {
            return redirect()->to(site_url('modul9/login'));
        }

        return view('modul9/submit', [
            'title' => 'Session',
            'nama'  => session()->get('m9_username'),
        ]);
    }

    /** mod9_menu1.php, mod9_menu2.php, mod9_menu3.php */
    public function menu(int $nomor = 1)
    {
        $judul = [1 => 'Ini Halaman Pertama', 2 => 'Ini Halaman Kedua', 3 => 'Ini Halaman Ketiga'];

        if (! isset($judul[$nomor])) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (! session()->get('m9_login')) {
            return redirect()->to(site_url('modul9/login'));
        }

        return view('modul9/menu', [
            'title' => $judul[$nomor],
            'judul' => $judul[$nomor],
            'nama'  => session()->get('m9_username'),
        ]);
    }

    /** ?aksi=logout pada mod9_menu*.php - sesi dihapus, kembali ke login setelah 3 detik */
    public function logout()
    {
        session()->remove(['m9_login', 'm9_username']);

        $this->response->setHeader('Refresh', '3; url=' . site_url('modul9/login'));

        return $this->response->setBody(view('modul9/logout', ['title' => 'Logout']));
    }

    /** mod9_tugas1.php */
    public function tugas1()
    {
        $users = [
            ['username' => 'Ali',     'password' => 'password1'],
            ['username' => 'Bona',    'password' => 'password2'],
            ['username' => 'Charlie', 'password' => 'password3'],
            ['username' => 'Dede',    'password' => 'password4'],
            ['username' => 'Emon',    'password' => 'password5'],
        ];

        $error = '';

        if (strtolower($this->request->getMethod()) === 'post' && $this->request->getPost('Login') !== null) {
            $inputUser = (string) $this->request->getPost('username');
            $inputPass = (string) $this->request->getPost('password');
            $sukses    = false;

            foreach ($users as $user) {
                if ($user['username'] === $inputUser && $user['password'] === $inputPass) {
                    $sukses = true;
                    break;
                }
            }

            if ($sukses) {
                session()->set('m9t1_user', $inputUser);
            } else {
                $error = 'Username atau Password salah!';
            }
        }

        return view('modul9/tugas1', [
            'title'     => 'Login Dengan Session',
            'loginUser' => session()->get('m9t1_user'),
            'error'     => $error,
        ]);
    }

    /** mod9_tugas1.php?action=logout */
    public function tugas1Logout()
    {
        session()->remove('m9t1_user');

        return redirect()->to(site_url('modul9/tugas1'));
    }
}
