<?php 
class Contoh3 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }
    public function penjumlahan($n1 , $n2)
    {
        $this->load->model('Model_Contoh2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_Contoh2->jumlah($n1, $n2);

        $this->load->view('View-Contoh3', $data);
    }
}
