<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
class login extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->library('session');
         $this->load->helper('url');
         $this->load->model('home_model');
        }

     public function index()
    { 
          $this->load->view('login_view');
    }
       
        function loginform()
    { 
         if(isset($_POST['login']) && $_POST['login']!='')
          { 
          $data=$this->home_model->loginvalidate();
          if($data)
          {
            redirect(base_url().'index.php/Welcome/index');
          }
         else
         {
            redirect(base_url().'index.php');
         }
         }
        }

}
?>
