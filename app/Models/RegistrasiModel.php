<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model {
    public function getSource() {
        $source = array (
            array (
                'name' => 'Paijo',
                'email' => 'paijo@gmail.com',
                'status' => 'Active',
                'regDate' => '2023-09-01',
            ),
            array (
                'name' => 'Shafina',
                'email' => 'shafinaardeia@gmail.com',
                'status' => 'Active',
                'regDate' => '2022-06-23',
            ),
            array (
                'name' => 'Daisy',
                'email' => 'daisy-meadow@gmail.com',
                'status' => 'Inactive',
                'regDate' => '2022-06-01',
            )
        );
        return $source;
    }
}
?>