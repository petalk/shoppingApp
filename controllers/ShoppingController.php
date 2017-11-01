<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingController extends CI_Controller {

    
            
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model(array('ItemModel','OrderModel'));
        $this->load->library(array('session','form_validation'));
        $this->load->helper('form');

    }

    public function index()
    {
        $data['count']=$this->cart->total_items();
        $data['products']=$this->ItemModel->getItems();
        $this->load->view('header.php',$data);
        $this->load->view('Shopping/Shopping.php',$data);
    }
    
    public function order()
    {
       $data['count']=$this->cart->total_items();   
           //$data['productID']=$id;
       $this->load->view('header',$data);
       $this->load->view('Order/order.php',$data);
       $this->load->view('footer.php');  
    }        
    public function add()
    {  
        $id=$this->input->post('itemID');
        $item=$this->ItemModel->getItemsById($id);
        
        if($item != NULL)
        {
                $insert_data = array(
                    'id' => $item[0]['ID'],
                    'name' => $item[0]['name'],
                    'price' =>$item[0]['price'],
                    'qty' => $this->input->post('quantity')
                );

                $this->session->set_flashdata('count',$this->cart->total_items());
                If($this->cart->insert($insert_data));
                {
                    $this->session->set_flashdata('cartQue','Added');
                }
                redirect('Welcome/detail/'.$id);   
        }      
    }

    public function remove_items($id)
    {
        $qty=0;
        $array=array('rowid' =>$id ,'qty'=>$qty );
        $this->cart->update($array);
        redirect('ShoppingController');
    }

    public function emptyCart()
    {
        $this->cart->destroy();
        redirect('ShoppingController');
    }
    
    public function check_out()
    {
        $this->form_validation->set_rules('userName','Name','required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('userMail','Email','required|valid_email|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('userAddress','Address','required|min_length[2]|max_length[250]');
        $this->form_validation->set_rules('userNumber','Mobile','required|numeric|min_length[10]|max_length[50]');
        $this->form_validation->set_rules('userTown','Town','required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('userDistrict','District','required|min_length[2]|max_length[50]');
        
        if($this->form_validation->run()== FALSE){
           $data['count']=$this->cart->total_items();   
           //$data['productID']=$id;
           $this->load->view('header',$data);
           $this->load->view('Order/order.php',$data);
           $this->load->view('footer.php');  
        }
        else{
            $data=array(
                'Date'=>date('y/m/d'),
                'userName'=>$this->input->post('userName'),
                'userMail'=>$this->input->post('userMail'),
                'userNumber'=>$this->input->post('userNumber'),
                'userAddress'=>$this->input->post('userAddress'),
                'UserTown'=>$this->input->post('userTown'),
                'UserDistrict'=>$this->input->post('userDistrict'),
                'Total'=>$this->cart->total()
            );

            $insert_id=$this->OrderModel->order($data);
            if ($insert_id){
                foreach($this->cart->contents() as $item)
                {   $data=array(
                        'OrderID'=>$insert_id,
                        'ProductID'=>$item['id'],
                        'Price'=>$item['price'],
                        'Quantity'=>$item['qty'],
                        'Subtotal'=>$item['price']*$item['qty']    
                    );
                    $this->OrderModel->orderDetail($data);
                }
                $this->session->set_flashdata('orderStatus',"Order Added Sucessfully : "+$insert_id);
            }
        }
    }     
}
