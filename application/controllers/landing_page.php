<?php

class Landing_page extends CI_Controller
{

    public function index()
    {
        $this->load->view('Landing_page');
    }

    public function form_pelanggan(){
    	$this->load->view('form_pelanggan');
    }
}
