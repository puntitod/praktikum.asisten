<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginModel;

class AsistenController extends BaseController
{
    protected $asistenModel, $loginModel;

    public function __construct()
    {
        $this->asistenModel = new AsistenModel();
        $this->loginModel = new LoginModel();
    }

    public function index()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'Asisten',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];
            return view('/asisten/AsistenView', $data);
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/login'));
        }
    }

    public function simpan()
    {
        //memanggil helper untuk handling form
        helper('form');

        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'save',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];

            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/simpan', $data);
            }
            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'NIM', 'NAMA', "PRAKTIKUM",
                "IPK"
            ]);
            // Mengakses Model untuk menyimpan data
            $model = model(AsistenModel::class);
            $model->simpan($post);

            $session->setFlashdata('sukses', 'Data telah disimpan');
            return redirect()->to(base_url('/asisten'));
            // return view('/asisten/AsistenView', $data);
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk menambah data!');
            return redirect()->to(base_url('asisten/login'));
        }
    }


    public function delete()
    {
        helper('form');

        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'delete',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];

            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/delete', $data);
            }

            // Mengambil data yang disubmit dari form
            $NIM = $this->request->getPost(['NIM']);
            $this->asistenModel->hapus($NIM);
            $session->setFlashdata('sukses', 'Data telah dihapus');
            return redirect()->to(base_url('/asisten'));
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk menghapus data!');
            return redirect()->to(base_url('/asisten/login'));
        }
    }

    public function update()
    {

        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'update',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];

            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/update', $data);
            }

            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'NIM', 'NAMA', "PRAKTIKUM",
                "IPK"
            ]);

            $this->asistenModel->ubah($post);
            $session->setFlashdata('sukses', 'Data telah diupdate');
            return redirect()->to(base_url('/asisten'));
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengupdate data!');
            return redirect()->to(base_url('asisten/login'));
        }
    }

    public function search()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'title' => 'search',
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];
            if (!$this->request->is('post')) {
                return view('/asisten/search', $data);
            }

            $NIM = $this->request->getPost(['key']);
            $asisten = $this->asistenModel->ambil($NIM['key']);

            $data = ['hasil' => $asisten, 'title' => 'Search | Web Nata'];
            return view('asisten/search', $data);
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mencari data!');
            return redirect()->to(base_url('asisten/login'));
        }
    }

    public function login()
    {
        $session = session();
        if ($session->has('username')) {
            return redirect()->to(base_url('asisten'));
        }
        $data = [
            'title' => 'Login | Web Nata'
        ];
        return view('asisten/login', $data);
    }


    public function cekLogin()
    {
        $post = $this->request->getPost(['username', 'password']);
        $cek = $this->loginModel->cekLogin($post);
        if ($cek > 0) {
            $session = session();
            $session->set('username', $post['username']);
            return redirect()->to(base_url('asisten'));
        } else {
            session()->setFlashdata('salah', 'Username atau password salah!');
            return redirect()->to(base_url('asisten/login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('asisten/login'));
    }
}
