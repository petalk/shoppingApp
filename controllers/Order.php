<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->library('cart');     
        }
           
       //should be accessed only by - Detail.php 
       public function index()
       {
           $data['count']=$this->cart->total_items();   
           $data['productID']=$this->input->post('itemID');
           $data['quantity']=$this->input->post('quantity');
           $this->load->model('ItemModel');
           $data['product']=$this->ItemModel->getAllDetailById($data['productID']);
           
           if($data['product']!=null)    
           {    
               $this->load->view('header',$data);
               $this->load->view('Order/order.php',$data);
               $this->load->view('footer.php');
           }
           else{
               redirect('');
           }
       }        
        
    public function addOrder()
    {
        $productID=$this->input->post('productID');
        $qty=$this->input->post('quantity');
        $this->load->model(array('ItemModel','OrderModel'));
        $item = $this->ItemModel->getItemsById($productID);
        $data=array(
            'Date'=>date('y/m/d'),
            'userName'=>$this->input->post('userName'),
            'userMail'=>$this->input->post('userMail'),
            'userNumber'=>$this->input->post('userNumber'),
            'userAddress'=>$this->input->post('userAddress'),
            'UserTown'=>$this->input->post('userTown'),
            'UserDistrict'=>$this->input->post('userDistrict'),
            'Total'=>$item[0]['price']*$qty
        );
        
        $insert_id=$this->OrderModel->order($data);
        if ($insert_id){
            $data=array(
                'OrderID'=>$insert_id,
                'ProductID'=>$productID,
                'Price'=>$item[0]['price'],
                'Quantity'=>$qty,
                'Subtotal'=>$item[0]['price']*$qty,    
            );
            $this->OrderModel->orderDetail($data);
            $this->session->set_flashdata('orderStatus',"Order Added Sucessfully : "+$insert_id);
            redirect('Order');
        }
    }

}