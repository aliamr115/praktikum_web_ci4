<?php

namespace App\Controllers;

/**
 * Login utama situs  (file asli: mod7_tugas2_formLogin.php, login.php, mod7_tugas2_logout.php)
 */
class Auth extends BaseController
{
    private const USER_ASLI = 'admin';
    private const PASS_ASLI = '12345';

    public function login()
    {
        $error = null;

        if (strtolower($this->request->getMethod()) === 'post' && $this->request->getPost('login') !== null) {
            $username = (string) $this->request->getPost('username');
            $password = (string) $this->request->getPost('password');

            if ($username === self::USER_ASLI && $password === self::PASS_ASLI) {
                session()->set('login', true);

                return redirect()->to(site_url('/'));
            }

            $error = 'Username atau password salah!';
        }

        return view('auth/login', ['title' => 'Login Form', 'error' => $error]);
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'));
    }
}
