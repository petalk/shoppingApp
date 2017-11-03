<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->library('cart');
            $this->load->model(array('ItemModel'));
        }
	public function index()
	{       
                $data['count']=count($this->cart->contents());
                $data['items']=$this->ItemModel->getItems();
                $this->load->view('header',$data);
              
		$this->load->view('index.php',$data);
                $this->load->view('footer.php');
                
                //$this->load->view('footer.php');
	}
        public function detail($id)
        {   
                $data['count']=$this->cart->total_items();    
                $data["id"]=$id;
                $this->load->model(array('ItemModel'));
                $data["item"]=$this->ItemModel->getAllDetailById($id);
                $this->load->view('header',$data);
                $this->load->view('Detail/detail.php',$data);
                $this->load->view('footer.php');
        }   
        
        public function tester()
        {
            $data['items']=$this->ItemModel->getItems();
            $this->load->view('slick/slicker/index.php',$data);
        }
}
