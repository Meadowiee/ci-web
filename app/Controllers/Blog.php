<?php 

namespace App\Controllers;

class Blog extends BaseController {
    public function index() {
        // echo 'morningss!';
        return view('v_blog');
    }
}
?>