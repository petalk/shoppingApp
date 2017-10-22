<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ItemModel extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function order($data)
    {
        $id=$this->db->insert_id($data);
    }

}