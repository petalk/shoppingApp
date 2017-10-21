<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingController extends CI_Controller {

    
            
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('ItemModel');
        $this->load->library('session');
        $this->load->helper('form');

    }

    public function index()
    {
        $data['count']=$this->cart->total_items();
        //gets the number of items in the cart             
        $data['products']=$this->ItemModel->getItems();
        $this->load->view('header.php',$data);
        $this->load->view('Shopping/Shopping.php',$data);
    }
    
    public function add()
    {  
        $_SESSION['count'] = !isset($_SESSION['count']) ? 0 : $_SESSION['count'];
        $session['count']++;
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

                $this->session->set_flashdata('count',$this->cart->total_items());
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
