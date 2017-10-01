<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
// include 'ChromePhp.php';

class Welcome extends CI_Controller { 

	public function __construct() { 
		parent::__construct(); 
        $this->load->helper('url');
        $this->load->model('home_model');        
	} 
    
    public function index()

    {                   
	    $this->load->view('index.php');
    }
          
    public function insert(){

        $data['name']=$this->input->post('name');
        $data['password']=$this->input->post('password');
        $data['bith']=$this->input->post('bith');
        $data['adress']=$this->input->post('adress');
        $data['sex']=$this->input->post('sex');
        $this->home_model->insert($data);
    }

    public function update(){

        $data['id']=$this->input->post('id');
        $data['name']=$this->input->post('name');
        $data['password']=$this->input->post('password');
        $data['bith']=$this->input->post('bith');
        $data['adress']=$this->input->post('adress');
        $data['sex']=$this->input->post('sex');
        $this->home_model->update($data);

    }
          
    public function delete(){

        $id=$this->input->post('id');
        // ChromePhp::log($id);
        $this->home_model->delete($id);
    }

    public function showData(){

        $data['index']=$this->input->post('index');
        $data['start']=$this->input->post('start');
         // ChromePhp::log($data);
        $total=$this->home_model->get_length();
        $data=$this->home_model->showData($data);
        echo json_encode(
        array(
        'total' => $total,
        'data' => $data
        ));
    }

}
