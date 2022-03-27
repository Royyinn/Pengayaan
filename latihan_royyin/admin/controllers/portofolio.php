<?php 

class Portofolio extends Controller
{
    public function index(){
        //tampung method getProfile() dari PortofolioModel.php di $data['profile]
        $data['profile'] = $this->model('PortofolioModel')->getProfile();

        //tampung method getAbout() dari PortofolioModel.php di $data['about]
        $data['about'] = $this->model('PortofolioModel')->getAbout();

        //tampung method getProject() dari PortofolioModel.php di $data['project]
        $data['project'] = $this->model('PortofolioModel')->getProject();

               
        //kirim parameter $data ke file index.php yang ada di folder views/portofolio
        $this->view('portofolio/index',$data);
    }

    public function pesan()
    {
        if ($this->model('PortofolioModel')->tampungPesan($_POST) > 0) {
            echo "
            <script>
            alert('Data Berhasil Dikirim')
            window.location.href='http://localhost/latihan_royyin/public/'
            </script>
            ";
        }else{
            echo "gagal terkirim
            window.location.href='http://localhost/latihan_royyin/public/'
            ";
        }
    }

}