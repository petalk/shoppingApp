<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class OrderModel extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function order($data)
    {
        $this->db->insert('tblorder',$data);
        $insert_id=$this->db->insert_id();
        return $insert_id;
    }
    
    public function orderDetail($data)
    {
        $this->db->insert('tblorderdetail',$data);
    }        
    
}