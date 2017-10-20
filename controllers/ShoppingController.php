<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingController extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('ItemModel');
        $this->load->library('session');
        $this->load->helper('form');
//      
    }
    
    public function index()
    {
        $data['products']=$this->ItemModel->getItems();
        $this->load->view('header.php');
        $this->load->view('Shopping/Shopping.php',$data);
    }
    
    public function add()
    {
        
//        $count=$count+1;
        $id=$this->input->post('itemID');
        $item=$this->ItemModel->getItemsById($id);
        
        if($item != NULL)
        {
                 $insert_data = array(
                'id' => $item[0]['ID'],
                'name' => $item[0]['name'],
                'price' =>$item[0]['price'],
                'qty' => 1
                );
        //       
                $this->session->set_flashdata('count',$id);
                $this->cart->insert($insert_data);
                redirect('ShoppingController');   
            
        }
        
              
    }
    
    public function emptyCart()
    {
        $this->cart->destroy();
        redirect('ShoppingController');
    }        
}
