<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
{

function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('Post_M');

}


public function skeyword(){
  $key = $this->input->post('title');
  $data['posts'] = $this->Post_M->search($key);
  $this->load->view('skeyview', $data);
}


public function index(){
  $data['posts']=$this->Post_M->get_posts();
  $this->load->view('postview', $data);
}

public function add()
{
  if(!empty($_POST))
  {
    $title = $this->input->post('title');
    $descs = $this->input->post('descs');
  
  if($title)
  {
   $this->load->model('Post_M');
   $data = array(
    'title' => $title,
    'descs' => $descs
   );
   $id = $this->Post_M->insert($data);
   redirect('post');
  }
  else{
    redirect('post');
  }
 }
 $this->load->view('insert/post');

}


public function delete($id){
  $this->Post_M->delete_id($id);
  redirect('post');
}

public function postedit($id)
{
  $data['posts'] = $this->Post_M->edit_id($id);
  $this->load->view('postedit', $data);
}





public function update()
{
  
  $id = $this->input->post('id');
  $data =  array(
    'title' => $this->input->post('title'),
    'descs' => $this->input->post('descs')
  );

  $this->db->where('id', $id);
  $this->db->update('post', $data);
  redirect('post');
}








}// end class

?>