<?php

namespace App\Controllers;

/**
 * MODUL 6 FORM  (file asli: mod7_form_text.php, mod7_proses_text.php, modul7.php, simpan.php)
 */
class Modul6 extends BaseController
{
    /** mod7_form_text.php */
    public function formText(): string
    {
        return view('modul6/form_text', ['title' => 'Form Input Text']);
    }

    /** mod7_proses_text.php */
    public function prosesText()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return redirect()->to(site_url('modul6/form-text'));
        }

        return view('modul6/proses_text', [
            'title' => 'Hasil Input Text',
            'nim'   => (string) $this->request->getPost('nim'),
            'nama'  => (string) $this->request->getPost('nama'),
        ]);
    }

    /** modul7.php - form biodata + upload foto */
    public function tugas(): string
    {
        return view('modul6/tugas', ['title' => 'Form Input Text']);
    }

    /** simpan.php - menampilkan hasil input + upload foto ke public/image */
    public function simpan()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return redirect()->to(site_url('modul6/tugas'));
        }

        $nama   = (string) ($this->request->getPost('nama') ?? '');
        $tempat = (string) ($this->request->getPost('tempat') ?? '');
        $tgl    = (string) ($this->request->getPost('tgl') ?? '');
        $jk     = (string) ($this->request->getPost('jk') ?? '');
        $agama  = (string) ($this->request->getPost('agama') ?? '');
        $alamat = (string) ($this->request->getPost('alamat') ?? '');

        $hobi = [];
        foreach (['hobi1', 'hobi2', 'hobi3', 'hobi4'] as $key) {
            $nilai = $this->request->getPost($key);
            if ($nilai !== null && $nilai !== '') {
                $hobi[] = (string) $nilai;
            }
        }

        // ---- upload foto (hanya gambar) ----
        $dir    = FCPATH . 'image';
        $upload = '';
        $pesan  = null;

        if (! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        $file = $this->request->getFile('file');
        if ($file !== null && $file->isValid() && ! $file->hasMoved()) {
            $ext      = strtolower($file->getClientExtension());
            $diizinkan = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

            if (in_array($ext, $diizinkan, true) && str_starts_with((string) $file->getMimeType(), 'image/')) {
                $bersih = preg_replace('/[^A-Za-z0-9._-]/', '_', pathinfo($file->getClientName(), PATHINFO_FILENAME));
                $bersih = ($bersih === '' || $bersih === null) ? 'foto' : $bersih;

                try {
                    // overwrite = false -> nama otomatis diberi akhiran jika sudah ada
                    $file->move($dir, $bersih . '.' . $ext, false);
                    $upload = 'image/' . $file->getName();
                    $pesan  = 'File berhasil diupload';
                } catch (\Throwable) {
                    $pesan = 'File gagal diupload';
                }
            } else {
                $pesan = 'File gagal diupload (hanya gambar JPG, PNG, GIF, atau WEBP)';
            }
        }

        return view('modul6/simpan', [
            'title'  => 'Hasil Input Data',
            'nama'   => $nama,
            'tempat' => $tempat,
            'tgl'    => $tgl,
            'jk'     => $jk,
            'agama'  => $agama,
            'alamat' => $alamat,
            'hobi'   => $hobi,
            'upload' => $upload,
            'pesan'  => $pesan,
        ]);
    }
}
