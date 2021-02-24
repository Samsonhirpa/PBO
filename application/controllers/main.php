
<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller { 


      public function __construct() {
            parent::__construct();
            $this->load->model('Structure_model', 'str');
            $this->load->model('bddddomodel', 'b');
            $this->load->model('main_model', 'm');
      }

      //functions  
      function email_availibility()  
      {  
          if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('freeIp/addfree_ip');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('main/');
      }
      }  
      function check_email_avalibility()  
      {  
           // if(!filter_var($_POST["ipid"], FILTER_VALIDATE_EMAIL))  
           // {  
           //      echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           // }  
           // else  
           // {  
                $this->load->model("main_model");  
                if($this->main_model->is_email_available($_POST["ipid"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ID Already registered</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ID Available</label>';  
                }  
      //      }  
      // }       
 }
 function check_lanip_avalibility()  
      {  
           // if(!filter_var($_POST["ipid"], FILTER_VALIDATE_EMAIL))  
           // {  
           //      echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           // }  
           // else  
           // {  
                $this->load->model("main_model");  
                if($this->main_model->is_lanip_available($_POST["lanip"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> LANIP Already registered</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> LANIP Available</label>';  
                }  
      //      }  
      // }       
 }



 function check_carbonid_avalibility()  
      {  
          
                $this->load->model("main_model");  
                if($this->main_model->check_carbonid_avalibility($_POST["ipid"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ID Already registered</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ID Available</label>';  
                }  
        
 }
 function check_carbonlan_avalibility()  
      {  
          
                $this->load->model("main_model");  
                if($this->main_model->check_carbonlan_avalibility($_POST["lanip"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> LANIP Already registered</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> This LANIP Available to be Used</label>';  
                }  
    
 }

  function check_terminateid_avalibility()  
      {  
          
                $this->load->model("main_model");  
                if($this->main_model->check_terminateid_avalibility($_POST["ipid"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> This ID Already Terminated</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> This ID can be Terminated</label>';  
                }  
        
 }
 function check_terminatelan_avalibility()  
      {  
          
                $this->load->model("main_model");  
                if($this->main_model->check_terminatelan_avalibility($_POST["lanip"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>  This LANIP Already Terminated</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> This LANIP can be Terminated</label>';  
                }  
    
      }


  public function getfreeip(){
    $this->m->getfreeip();

  }



 }  
 