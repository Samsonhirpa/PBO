<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Structure
 *
 * @author HP
 */
class Structure extends CI_Controller {

      public function __construct() {
            parent::__construct();
            $this->load->model('Structure_model', 'str');
            $this->load->model('bddddomodel', 'b');
            $this->load->model('usermodel', 'm');
      }
 public function login() {
            $this->load->view('layout/header');
            // $this->load->view('layout/topindex');
            // $this->load->view('layout/login');
            $this->load->view('iplogin');
            //redirect('usercontroller/dashboard');
      }

      public function logout() {

            $this->session->unset_userdata('username');
            redirect('Structure/login');
      }

  public function checkuser() {


            $user = $this->input->post('username');
            $pass = $this->input->post('password');

            $ceklogin = $this->str->login($user, $pass);

            if ($ceklogin) {
                  foreach ($ceklogin as $row)
                        ;
                  $this->session->set_userdata('username', $row->username);
                  $this->session->set_userdata('level_id', $row->level);
                  $this->session->set_userdata('role', $row->role_id);
                  $this->session->set_userdata('woreda', $row->woreda_id);
                  $this->session->set_userdata('zone', $row->zone_id);
                  $this->session->set_userdata('region', $row->region_id);
                  $this->session->set_userdata('email', $row->email);
                  $this->session->set_userdata('phone', $row->phoneno);
                  $this->session->set_userdata('full_name', $row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name);
                  // $this->session->set_userdata('site_id',$row->site_id);

                  if ($this->session->userdata('role') == 1) {
                        redirect('Structure/dashboard');
                  } elseif ($this->session->userdata('role') == 3) {
                        redirect('Structure/dashboard');
                  } elseif ($this->session->userdata('role') == 2) {
                        redirect('Structure/dashboard');
                  }
            } else {
                  redirect('Structure/login');
            }
      }

public function dashboard() {
            
            if ($this->session->userdata('username')) {
                  $this->load->view('layout/header');
                  $this->load->view('layout/topmenu');
                  $this->load->view('layout/sidemenu');
                  $this->load->view('dashboard.php');
                  $this->load->view('layout/footer');
            } else {
                  redirect('BDDDDOcontroller');
            }
      }

        public function add_employee() {
            if ($this->session->userdata('username')) {
                  $this->load->view('layout/header');
                  $this->load->view('layout/topmenu');
                  $this->load->view('layout/sidemenu');
                  $this->load->view('add_employee/add_employee');
                  $this->load->view('layout/footer');
            } else {
                  redirect('Structure');
            }
      }

      public function saveemployee() {
            $result = $this->b->saveemployee();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Registerd');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Registerd Please try again');
            }
            redirect('Structure/User_list');
      }


public function showletter($id)
{
      if($this->session->userdata('username')){
      $data['osticaletters']=$this->str->showletter($id);
      $this->load->view('layout/header');
      $this->load->view('layout/topmenu');
      $this->load->view('layout/sidemenu');
      $this->load->view('ip_lattermange/lettershow',$data);
      $this->load->view('layout/footer');
}
      else
      {
            redirect('Structure/');
      }
}
public function showtletter($id)
{
      if($this->session->userdata('username')){
      $data['terminate_show']=$this->str->showtletter($id);
      $this->load->view('layout/header');
      $this->load->view('layout/topmenu');
      $this->load->view('layout/sidemenu');
      $this->load->view('ip_lattermange/terminateshow',$data);
      $this->load->view('layout/footer');
}
      else
      {
            redirect('Structure/');
      }
}public function showmletter($id)
{
      if($this->session->userdata('username')){
      $data['migrate_lshow']=$this->str->showmletter($id);
      $this->load->view('layout/header');
      $this->load->view('layout/topmenu');
      $this->load->view('layout/sidemenu');
      $this->load->view('ip_lattermange/migrateshow',$data);
      $this->load->view('layout/footer');
}
      else
      {
            redirect('Structure/');
      }
}

public function lettershow()
{
      if($this->session->userdata('username')){
      $this->load->view('layout/header');
      $this->load->view('layout/topmenu');
      $this->load->view('layout/sidemenu');
      $this->load->view('ip_lattermange/lettershow');
      $this->load->view('layout/footer');
}
      else
      {
            redirect('structure/');
      }
}


public function custom_view(){
$this->load->view('custom_view', array('error' => ' ' ));
}
public function do_upload(){
$config = array(
'upload_path' => "./uploads/",
'allowed_types' => "gif|jpg|png|jpeg|pdf",
'overwrite' => TRUE,
'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
'max_height' => "768",
'max_width' => "1024"
);
$this->load->library('upload', $config);
if($this->upload->do_upload())
{
$data = array('upload_data' => $this->upload->data());
$this->load->view('upload_success',$data);
}
else
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('custom_view', $error);
}
}


      public function Role() {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('structure/role');
            $this->load->view('layout/footer');
      }

      public function Zone() {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('structure/zone');
            $this->load->view('layout/footer');
      }

      public function Add_zone() {
            $result = $this->str->Add_zone();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Registred');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Add try Again');
            }
            redirect('Structure/Zone');
      }

      public function Delete_Zone($id) {
            $result = $this->str->Delete_Zone($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/Zone');
      }
       public function Delete_letter($id) {
            $result = $this->str->Delete_letter($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/newletters');
      } public function Delete_mletter($id) {
            $result = $this->str->Delete_mletter($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/m_letter');
      }
public function Delete_tletter($id) {
            $result = $this->str->Delete_tletter($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/t_letter');
      }


      public function Edit_zone($id) {
            $result = $this->str->Edit_zone($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Edited');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Edit try Again');
            }
            redirect('Structure/Zone');
      }

      public function Woreda() {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('structure/woreda');
            $this->load->view('layout/footer');
      }

      public function User_list() {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('structure/user_list');
            $this->load->view('layout/footer');
      }

      public function profile($username)
{
      if($this->session->userdata('username')){
      $data['useraccount']=$this->str->getprofile($username);
      $this->load->view('layout/header');
      $this->load->view('layout/topmenu');
      $this->load->view('layout/sidemenu');
      $this->load->view('structure/profile',$data);
      $this->load->view('layout/footer');
}
      else
      {
            redirect('structure/');
      }
}

      public function ReserchDocument() {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('research/manage_Research_document');
            $this->load->view('layout/footer');
      }

      public function Add_woreda() {
            $result = $this->str->Add_woreda();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Add try Again');
            }
            redirect('Structure/Woreda');
      }

      public function Delete_Woreda($id) {
            $result = $this->str->Delete_Woreda($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/Woreda');
      }

      public function Edit_Woreda($id) {
            $result = $this->str->Edit_Woreda($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Edited');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Edit try Again');
            }
            redirect('Structure/Woreda');
      }

      public function Acivate_user($id) {
            $result = $this->str->Acivate_user($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Activated Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Activate try Again');
            }
            redirect('Structure/User_list');
      }

      public function Deacivate_user($id) {
            $result = $this->str->Deacivate_user($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deactivated Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Deactivated try Again');
            }
            redirect('Structure/User_list');
      }

      public function Delete_user($id) {
            $result = $this->str->Delete_user($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/User_list');
      }

      public function Edit_User($id) {
            $result = $this->str->Edit_User($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Updated try Again');
            }
            redirect('Structure/User_list');
      }

      public function Add_Role() {
            $result = $this->str->Add_Role();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Add try Again');
            }
            redirect('Structure/Role');
      }

      public function Edit_Role($id) {
            $result = $this->str->Edit_Role($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Update try Again');
            }
            redirect('Structure/Role');
      }

      public function Delete_Role($id) {
            $result = $this->str->Delete_Role($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted Users');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed to Delete try Again');
            }
            redirect('Structure/Role');
      }

      public function File_upload() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('attachment')),
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('attachment'))
        {
            $this->db->insert('research',array('file_name'=>$this->upload->file_name,
                               'detail'=>$this->input->post('detail'),
                               'title'=>$this->input->post('title'),
                               'subject'=>$this->input->post('subject'),
                               'created_by'=>$this->session->userdata('username'),
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/ReserchDocument');
      }

    
    public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->str->getRows(array('id' => $id));
            
            //file path
            $file = 'uploads/'.$fileInfo['file_name'];
            
            //download file from directory
            force_download($file, NULL);
        }
    }


public function add_request() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/add_request');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function save_newrequest() {
            $result = $this->str->save_newrequest();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/manage_userrequest1');
      }
  
 public function manage_userrequest() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/manage_userrequest');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_userrequest1() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/manage_userrequest1');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}
public function manage_userrequest2() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/manage_userrequest2');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}


      public function save_request() {
            $result = $this->str->save_request();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/manage_userrequest');
      }
      public function Edit_request($id) {
            $result = $this->str->Edit_request($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Update Please Try Again');
            }
            redirect('structure/manage_userrequest');
      }
      public function Delete_request($id) {
            $result = $this->str->Delete_request($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Deleted Please Try Again');
            }
            redirect('structure/manage_userrequest');
      }

   
    public function manage_carbonCopy() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/carbonCopy');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_carbonCopy1() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/mange_carboncopy');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/manage_carbonCopy1');
      }
}


      public function save_carbonCopy() {
            $result = $this->str->save_carbonCopy();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/manage_carbonCopy');
      }

      public function Edit_carboncopy($id) {
            $result = $this->str->Edit_carboncopy($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Update Please Try Again');
            }
            redirect('structure/manage_carbonCopy1');
      }

      public function Delete_carboncop($id) {
            $result = $this->str->Delete_carboncopy($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Deleted Please Try Again');
            }
            redirect('structure/manage_carbonCopy');
      }
       public function Delete_carboncopy($id) {
            $result = $this->str->Delete_carboncopy($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Deleted Please Try Again');
            }
            redirect('structure/manage_carbonCopy1');
      }


      public function postcarbon($post)
      {
      $result =   $this->str->postcarbon($post);
      if($result)
      {
            redirect('structure/manage_carbonCopy1');
      }

      }

       public function requst_status($post)
      {
      $result =   $this->str->requst_status($post);
      if($result)
      {
            redirect('structure/manage_userrequest2');
      }

      }
       public function requst_status1($post)
      {
      $result =   $this->str->requst_status1($post);
      if($result)
      {
            redirect('structure/manage_userrequest1');
      }

      }

         public function post_status($post)
      {
      $result =   $this->str->post_status($post);
      if($result)
      {
            redirect('structure/manage_migrate');
      }

      }public function ip_status($post)
      {
      $result =   $this->str->ip_status($post);
      if($result)
      {
            redirect('structure/manage_freeip');
      }

      }

      public function terminate_status($post)
      {
      $result =   $this->str->terminate_status($post);
      if($result)
      {
            redirect('structure/manage_terminate');
      }

      }
       
   public function getcarboninfo()
   {
           $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('post/postcarbon');
            $this->load->view('layout/footer');
   }

   public function t_letter() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_lattermange/terminaterequest');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
} public function m_letter() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_lattermange/migraterequest');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_terminate() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_terminate/manage_terminate');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_terminate2() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_terminate/manage_terminate2');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

   public function save_mletter() {
            $result = $this->str->save_mletter();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/m_letter');
      }public function save_terminateletter() {
            $result = $this->str->save_terminateletter();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/t_letter');
      }
public function save_terminate() {
            $result = $this->str->save_terminate();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/terminate_letter');
      }

      public function migrate_letter() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_migrate/migrate_letter');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_migrate() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_migrate/manage_migrate');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

   public function save_migrate() {
            $result = $this->str->save_migrate();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/migrate_letter');
      }

      public function manage_freeip() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('freeIp/addfree_ip');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

   public function save_freeip() {
            $result = $this->str->save_freeip();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/manage_freeip');
      }
public function free_status($id) {
            $result = $this->str->free_status($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Send Please Check Duplication and Try Again');
            }
            redirect('structure/manage_freeip');
      }
      public function Edit_freeip($id) {
            $result = $this->str->Edit_freeip($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Updated');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Update Please Try Again');
            }
            redirect('structure/manage_freeip');
      }

      public function Delete_freeip($id) {
            $result = $this->str->Delete_freeip($id);
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Deleted');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Deleted Please Try Again');
            }
            redirect('structure/manage_freeip');
      }

      public function newletters() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_lattermange/newrequest_lettar');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

   public function save_osticaletters() {
            $result = $this->str->save_osticaletters();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/newletters');
      }

      public function ipcomment() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/ipcomment');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function manage_ipcomment() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/manage_ipcomment');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

public function save_ipcomment() {
            $result = $this->str->save_ipcomment();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('structure/ipcomment');
      }

      public function manage_carbon1() {

           if($this->session->userdata('username')){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('ip_manage/manage_carbon1');
            $this->load->view('layout/footer');
      }
      else
      {
            redirect('structure/');
      }
}

}
