<?php 

namespace App\Libraries;
class CustomLib {
    public function nama_saya() {
        return 'Hello, nama saya, John Doe';
    }

    public function nama_kamu($nama) {
        return 'Hello, nama kamu adalah '.$nama;
    }
}
?>