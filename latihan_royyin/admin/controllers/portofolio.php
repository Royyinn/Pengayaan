<?php 

class portofolio extends Controller{
    public function index(){
        //kirim parameter ke method model() yang ada di core/controler.php
        $data['profile'] = $this->model('PortofolioModel');
        
        $this->view('portofolio/index');
    }
}