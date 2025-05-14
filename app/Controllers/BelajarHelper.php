<?php 
namespace App\Controllers;

class BelajarHelper extends BaseController {
    public function index() {
        helper('form');
        return view('v_belajar_helper');
    }

    public function helper() {
        helper('belajar');
        helper('number');
        $amount = number_to_currency(10000000, 'IDR', 'id_ID', 2);
        echo belajar($amount);
    }

    public function convert() {
        helper('tanggal');
        $data = date('Y-m-d');
        echo tanggal($data);
    }
}

?>