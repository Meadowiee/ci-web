<?php 

namespace App\Models;

use CodeIgniter\Model;

class SalamModel extends Model {
    function setNama($nama) {
        echo 'Selamat datang di aplikasi CodeIgniter 4 <br>';
        echo "Halo, $nama! Semoga harimu menyenangkan";
    }
}
?>