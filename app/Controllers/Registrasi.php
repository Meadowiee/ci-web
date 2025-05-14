<?php
namespace App\Controllers;

use App\Models\RegistrasiModel;

class Registrasi extends BaseController {
    public function index() {
        $model = new RegistrasiModel();
        $data = [
            'source' => $model->getSource(),
        ];
        return view('v_registrasi', $data);
    }
}
?>