<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ItemModel extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table_name = 'post';
    }
    
     public function getItems() {
        $sql = "select it.ID,it.name,it.description,it.price,it.Quantity,im.ImageID,im.MainImage from tblitems it inner join images im on it.ImageID=im.ImageID";
        $query = $this->db->query($sql);
        return $query->result_array();
     }
    
     public function getItemsById($id)
     {
          $this->db->select('*');
          $this->db->from('tblitems');
          $this->db->where('ID',$id);
          $query=$this->db->get();
          return $query->result_array();
     }
    public function getDetails($id) {
        $sql = "select it.ID,it.name,it.description,it.price,it.Quantity,im.ImageID,im.MainImage,im.Image1,im.Image2,im.Image3 from tblitems it inner join images im on it.ImageID=im.ImageID where"
                . " it.ID=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
//        $query=$this->db->from($this->table_name)->query($sql,array( 'shilmy'));
//        return $this->query($sql,array( 'shilmy'));
    }   
 
    public function getSpecification($id)
    {
        $sql="select * from tblSpecification s inner join tblitems i on s.ID=i.SpecificationID "
                . " where i.ID=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
        
    }        
    
    public function getFeatures($id)
    {
        $sql="select * from tblFeatures s inner join tblitems i on s.ID=i.FeatureID "
                . " where i.ID=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();  
    }   
    
    public function getSearch($id)
    {
        $this->db->select();
        $this->db->from('tblitems');
        $this->db->join('images', 'tblitems.ImageID = images.ImageID');
        $this->db->like("name",$id);
        $query=$this->db->get();
        
//        $sql = "select it.ID,it.name,it.description,it.price,it.Quantity,im.ImageID,im.MainImage from tblitems it inner join images im on it.ImageID=im.ImageID";
//        $this->db->like('name',$id);
//        $query = $this->db->query($sql,array($id));
        return $query->result_array();
        
    }
}