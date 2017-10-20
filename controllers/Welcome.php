<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
         public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
        }
	public function index()
	{
                $this->load->view('header');
		$this->load->view('index.php');
//                $this->load->view('footer.php');
	}
        
        public function detail($id)
        {   
            $data["id"]=$id;
            $this->load->view('header');
            $this->load->view('Detail/detail.php',$data);
        }        
}
