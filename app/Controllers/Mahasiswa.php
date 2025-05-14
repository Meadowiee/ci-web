<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa'
        ];
        return view('v_templates', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Mahasiswa',
            'content' => 'v_mahasiswa_add'
        ];
        helper('form');
        return view('v_templates', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nim' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tanggalLahir' => 'required',
            'umur' => 'required|integer',
            'jurusan' => 'required',
        ];

        if ($this->validate($rules)) {
            echo 'Sukses data anda valid';
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'gender' => $this->request->getPost('gender'),
                'tanggalLahir' => $this->request->getPost('tanggalLahir'),
                'umur' => $this->request->getPost('umur'),
                'jurusan' => $this->request->getPost('jurusan'),
            ];
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        } else {
            echo $validation->listErrors();
        }
    }
}
