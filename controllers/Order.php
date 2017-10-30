<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->library('cart');     
        }
           
//	public function index($id)
//	{       
//                $data['count']=$this->cart->total_items();  
//                $data['productID']=$id;
//                $this->load->view('header',$data);
//		        $this->load->view('Order/order.php',$data);
//                $this->load->view('footer.php');
//                //$this->load->view('footer.php');
//        }
        
       public function index()
       {
           $data['count']=$this->cart->total_items();   
           //$data['productID']=$id;
           $this->load->view('header',$data);
           $this->load->view('Order/order.php',$data);
           $this->load->view('footer.php');  
       }        
        
    public function addOrder()
    {
        $productID=$this->input->post('productID');
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
            'Total'=>$item[0]['price']
        );
        
        $insert_id=$this->OrderModel->order($data);
        if ($insert_id){
            $data=array(
                'OrderID'=>$insert_id,
                'ProductID'=>$productID,
                'Price'=>$item[0]['price'],
                'Quantity'=>1,
                'Subtotal'=>$item[0]['price']*1,    
            );
            $this->OrderModel->orderDetail($data);
            $this->session->set_flashdata('orderStatus',"Order Added Sucessfully : "+$insert_id);
            redirect('Order');
        }
    }

}