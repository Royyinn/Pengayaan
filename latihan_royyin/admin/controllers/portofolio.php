<?php 

class portofolio extends Controller
{
    public function index(){
        //tampung method getProfile() dari PortofolioModel.php di $data
        $data['profile'] = $this->model('PortofolioModel')->getProfile();
        
        //kirim parameter $data ke file index.php yang ada di folder views/portofolio
        $this->view('portofolio/index',$data);
    }
}