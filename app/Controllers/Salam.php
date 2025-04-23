<?php 

namespace App\Controllers;

use App\Models\SalamModel;

class Salam extends BaseController {
    public function index() {
        return view('salam');
    }

    public function nama($user) {
        $model = new SalamModel();
        $model->setNama($user);
    }
}
?>