<?php 

namespace App\Controllers;

// use App\Models\BelajarModel;

class Belajar extends BaseController {
    public function index() {
        return view('belajar');
    }

    public function kali($a, $b) {
        $hasil = $a * $b;
        echo('Hasil kali dari ' . $a . ' * ' . $b . ' = ' . $hasil);
    }

    public function bagi($a, $b) {
        $hasil = $a / $b;
        echo('Hasil bagi dari ' . $a . ' / ' . $b . ' = ' . $hasil);
    }

    public function pesan() {
        $data = [
            'title' => 'Belajar Codeigniter,',
            'pesan' => 'Saya sedang belajar view pada codeigniter'
        ];
        return view('belajar', $data);
    }
}