<?php 
namespace App\Controllers;

class Template extends BaseController {
    public function index() { 
        $data = [
            'title' => 'Dashboard',
            'content' => 'v_dashboard',
        ];
        return view('v_templates', $data);
    }
}
?>