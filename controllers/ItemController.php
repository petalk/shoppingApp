
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemController extends CI_Controller {


	public function index()
	{   
                
		$this->load->view('index.php');
                $this->load->helper('url');
                       
	}
        
        public function gettop1()
        {
            $this->load->view('');
            
        }        
        
        public function getItems() {
        $this->load->model(array('ItemModel'));
        $data = $this->ItemModel->getItems();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
//         
         public function getItemsByID($id) {
            $this->load->model(array('ItemModel'));
            $data = $this->ItemModel->getItemsById($id);
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
        
        public function getDetail($id){
        $this->load->model(array('ItemModel'));
        $data = $this->ItemModel->getDetails($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
        
        public function getSpecification($id){
        $this->load->model(array('ItemModel'));
        $data = $this->ItemModel->getSpecification($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
        
        public function getFeatures($id){
        $this->load->model(array('ItemModel'));
        $data = $this->ItemModel->getFeatures($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
        
        public function getSearch($id)
        {
        $this->load->model(array('ItemModel'));
        $data = $this->ItemModel->getSearch($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
      
}

