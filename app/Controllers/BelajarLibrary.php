<?php 
namespace App\Controllers;
use App\Libraries\CustomLib;

class BelajarLibrary extends BaseController {
    public function index() { 
        return view('v_belajar_library');
    }

    public function login() {
        $session = session();
        $rawData = [
            'username' => 'johndoe',
            'email' => 'johndow@gmail.com',
            'logged_in' => true
        ];
        $session->set($rawData);
        return view('v_belajar_library');
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/belajar-library');
    }

    public function cobaLib() {
        $obj = new CustomLib();
        echo $obj->nama_saya();
        echo '<br>';
        echo $obj->nama_kamu('Jane');
    }
}

?>