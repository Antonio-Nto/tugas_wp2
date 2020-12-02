<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Web extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
    public function inuser()
    {
        $data['judul'] = "Halaman Input User";
        $data['user'] = $this->ModelUser->getUser()->result_array();
        $this->load->view('v_header',$data);
        $this->load->view('v_user',$data);
        $this->load->view('v_footer',$data);
    }
    public function outuser()
    {
        $data ['judul'] = "Halaman Output User"; 
        $data ['user'] = $this->input->post('user');
        $data ['pass'] = $this->input->post('pass');
        $this->load->view('v_header',$data);
        $this->load->view('v_out_user',$data);
        $this->load->view('v_footer',$data);
    }
}
