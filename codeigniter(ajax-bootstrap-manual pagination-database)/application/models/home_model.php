<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  include 'ChromePhp.php';

class home_model extends CI_Model {
 public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

    public function insert($data) {
        $sql = "INSERT INTO student (name, password, bith, adress, sex) VALUES ('$data[name]', '$data[password]', '$data[bith]', '$data[adress]', '$data[sex]')";
         $query = $this->db->query($sql);
	}

	public function update($data) {
        
        $sql = "UPDATE student SET name='$data[name]', password='$data[password]', bith='$data[bith]', adress='$data[adress]', sex='$data[sex]' WHERE id='$data[id]'";
         $query = $this->db->query($sql);
	}

    public function delete($id) {
        
        $sql = "DELETE FROM student WHERE id='$id'";
        $query = $this->db->query($sql);
    }

    public function showData($data) {
       
    $sql = "SELECT * FROM student LIMIT $data[index] OFFSET $data[start]";
        $query = $this->db->query($sql);
        return $result = $query->result();
    }

    public function get_length() {

        $sql = "SELECT * FROM student";
        $query = $this->db->query($sql);
        $total=$query->num_rows();
        return $total;  
    }

    function loginvalidate()
{
    $this->load->database();
    $name=$this->input->post('name');
    $pwd=$this->input->post('password');
    // ChromePhp::log($pwd);     
    $sql = "SELECT * FROM student WHERE name='$name' AND password='$pwd'";
    $query = $this->db->query($sql);
    $total=$query->num_rows();
     ChromePhp::log($total);
    //echo $this->db->last_query(); die;
    if($query->num_rows==1)
    {
       // $result=$query->result(); 
       // $se_data=array('username'=>$result[0]->name,
       //                'email'=>$result[0]->email);  
       // $this->session->set_userdata($se_data);
       return  true;
    }
    else
    { return false; }
}

}