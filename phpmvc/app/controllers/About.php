<?php 

class About extends Controller {
    public function index($nama = 'ilham', $perkerjaan = 'programer', $umur = '21')
    {
        $data['nama'] = $nama;
        $data['perkerjaan'] = $perkerjaan;
        $data['umur'] = $umur;
        $data['judul'] ='about me';
        
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page() 
    {
        $data['judul'] ='page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}