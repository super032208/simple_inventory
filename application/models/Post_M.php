<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_M extends CI_Model{
public function __construct()
{
  parent::__construct();
  $this->load->database();
    }
 public function get_posts(){
   $this->db->from('post');
   $query = $this->db->get();
   return $query->result();
 }


 public function insert($data){
   $this->db->insert('post', $data);
   return $id = $this->db->insert_id();
 }

 public function delete_id($id)
 {
   $this->db->where('id', $id);
   $this->db->delete('post');
 }

 public function edit_id($id)
 {
   $this->db->from('post');
   $this->db->where('id', $id);
   $query = $this->db->get();
   return $query->row();
 }

 public function search($key)
 {
  
   $this->db->like('title', $key);
   $query = $this->db->get('post');
   return $query->result();

 }

 



 
}

?>