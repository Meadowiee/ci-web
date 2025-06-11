<?php

namespace App\Modules\Produk\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Modules\Produk\Models\ProdukModel;

class Produk extends ResourceController
{
    protected $model;
    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    public function index()
    {
        $data = $this->model->getAllData();
        return $this->respond($data);
    }
    
    public function show($id = null) {
        $data = $this->model->getDataById($id);
        if ($data) return $this->respond($data);
        return $this->failNotFound('Produk dengan ID tersebut tidak ditemukan');
    }

    public function create() {
        $data = $this->request->getJSON(true);
        if($this->model->insert($data)) {
            return $this->respondCreated($data);
        }
        return $this->failValidationErrors('Gagal menambahkan data');
    }

    public function update($id = null) {
        $data = $this->request->getJSON(true);
        if($this->model->update($id, $data)) {
            return $this->respond(['status' => 'updated', 'data' => $data]);
        }
        return $this->failValidationErrors('Gagal memperbarui data');
    }
}
