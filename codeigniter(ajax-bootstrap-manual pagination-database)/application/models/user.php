<?php
include 'ChromePhp.php';

class user extends CI_Model
{
 
function loginvalidate()
{
    $this->load->database();
    $name=$this->input->post('name');ChromePhp::log($name);
    $pwd=$this->input->post('password');ChromePhp::log($pwd);     
   
    $this->db->select('*');
    $this->db->from('student');
    $this->db->where('name',$name);
    $this->db->where('password',$pwd);
    $query=$this->db->get();
    // $sql="SELECT * FROM student WHERE name='$name'"
     ChromePhp::log($query->num_rows);
    //echo $this->db->last_query(); die;
    if($query->num_rows==1)
    {
       $result=$query->result(); 
       // $se_data=array('username'=>$result[0]->name,
       //                'email'=>$result[0]->email);  
       // $this->session->set_userdata($se_data);
       return  $result;
    }
    else
    { return false; }
}
}
?>
