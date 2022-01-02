
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Structure_model
 *
 * @author HP
 */
class Structure_model extends CI_Model {

      //put your code here
    public function insert($data = array()){
        if(!array_key_exists("created",$data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified",$data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }

public function editcabine($id)
  {
    $this->db->where('cab_id',$id);
     $this->db->join('woreda', 'woreda.woreda_id = cabine.woreda_id', 'left');
            $this->db->join('zone', 'zone.zid = cabine.zon_id', 'left');
            $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
            $this->db->join('haalamaati', 'haalamaati.id = cabine.haalamaati', 'left');

    $query=$this->db->get('cabine');
    if($query)
    {
      return $query->row();
    }
    else
    {
      return false;
    }
  } 
public function editcabine2($id)
  {
    $this->db->where('c_id',$id);

            $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
            $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
            $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
            // $this->db->join('haalamaati', 'haalamaati.id = cabine2.haalamaati', 'left');
            $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
            $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
            $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
            $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
            $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
            $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            
            $this->db->join('level', 'level.l_id = cabine2.level', 'left');
            $this->db->join('qabxi', 'qabxi.q_id = cabine2.qabxi', 'left');
           


    $query=$this->db->get('cabine2');
    if($query)
    {
      return $query->row();
    }
    else
    {
      return false;
    }
  } 

public function deletecabineprofile($id) {
            $this->db->where('cab_id', $id);
            $query = $this->db->delete('cabine');
            if ($query) {
                  return true;
            } else {
                  return FALSE;
            }
      }public function deletecomment($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('ipcomment');
            if ($query) {
                  return true;
            } else {
                  return FALSE;
            }
      }
public function deletecabineprofile2($id) {
            $this->db->where('c_id', $id);
            $query = $this->db->delete('cabine2');
            if ($query) {
                  return true;
            } else {
                  return FALSE;
            }
      }

 public function getcab() {
            $this->db->select('*');
            $this->db->from('cabine2');
             $this->db->where('requst_status',2);
            
            $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
            $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
            $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
            $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
            $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
           $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return false;
            }
      }

public function getuniversity(){

    $this->db->select('*');
    $this->db->from('university');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
 public function getwored(){

    $this->db->select('*');
    $this->db->from('woreda');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
  public function getqabxi(){

    $this->db->select('*');
    $this->db->from('qabxi');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
  public function getlevel(){

    $this->db->select('*');
    $this->db->from('level');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
  public function getsector(){

    $this->db->select('*');
    $this->db->from('sektera');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
 public function getsadarka(){

    $this->db->select('*');
    $this->db->from('sadarka');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
 public function getmudama(){

    $this->db->select('*');
    $this->db->from('title');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
  public function getcabineprofile(){

    $this->db->select('*');
    $this->db->from('cabine');
    $this->db->join('woreda', 'woreda.woreda_id = cabine.woreda_id', 'left');
    $this->db->join('zone', 'zone.zid = cabine.zon_id', 'left');
    $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
          
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  } 


 public function getempcabineprofile($user)
      {
            $this->db->select('*');
            $this->db->order_by('cab_id' , 'DESC');
            $this->db->from('cabine');
    $this->db->join('woreda', 'woreda.woreda_id = cabine.woreda_id', 'left');
    $this->db->join('zone', 'zone.zid = cabine.zon_id', 'left');
    $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
 
            $this->db->where('created_by1',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

public function gethogganaa_aanaa($ana)
      {
            $this->db->select('*');
             $this->db->where('requst_status',2);
              $this->db->order_by('c_id' , 'DESC');
             $this->db->from('cabine2');
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
    $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
     
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
   $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
  $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            $this->db->where('woreda',$ana);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
           

            
      }
    public function gethogganaa_godina($god)
      {
            $this->db->select('*');
             $this->db->where('requst_status',2);
              $this->db->order_by('c_id' , 'DESC');
             $this->db->from('cabine2');
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');

   $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
  $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            $this->db->where('zone_id',$god);
            $this->db->where('woreda_name', "Zone Admin");
            // $this->db->where('zname !=', 'Zone Admin');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
    public function getzonecabineprofile2($zon)
      {
            $this->db->select('*');
             // $this->db->where('requst_status',2);
              $this->db->order_by('c_id' , 'DESC');
             $this->db->from('cabine2');
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');

   $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
  $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            $this->db->where('zone_id',$zon);
            $this->db->where('woreda_name !=',"Zone Admin");
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
       public function getregioncabineprofile2($zon)
      {
            $this->db->select('*');
             // $this->db->where('requst_status',2);
              $this->db->order_by('c_id' , 'DESC');
             $this->db->from('cabine2');
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');


   $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
  $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
            // $this->db->where('zone_id',$zon);
            $this->db->where('woreda_name',"Zone Admin");
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
      public function getempcabineprofile2($user)
      {
            $this->db->select('*');
            $this->db->order_by('c_id' , 'DESC');
             $this->db->from('cabine2');
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
     $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
 
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

  public function getcabineprofile2(){

    $this->db->select('*');
    $this->db->from('cabine2');

    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
            $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
     $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
 $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
     $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
     $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
          
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }

  public function profileinfo($id){

    $this->db->where('c_id',$id);
    $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id');
    $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
    $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
    $this->db->join('gender', 'gender.gender_id = cabine.sala_id', 'left');
    $this->db->join('haalamaati', 'haalamaati.id = cabine.haalamaati', 'left');
    $this->db->join('years', 'years.id = cabine2.muxannoo', 'left');
    $this->db->join('year', 'year.y_id = cabine2.muxano_hog', 'left');
    $this->db->join('university', 'university.u_id = cabine2.university_id', 'left');
    $this->db->join('sektera', 'sektera.s_id = cabine2.sector', 'left');
    $this->db->join('title', 'title.t_id = cabine2.mudama_amma', 'left');
    $this->db->join('sadarka', 'sadarka.sd_id = cabine2.sadarkaB', 'left');
    $this->db->join('level', 'level.l_id = cabine2.level', 'left');
    $this->db->join('qabxi', 'qabxi.q_id = cabine2.qabxi', 'left');
           
   
      $query=$this->db->get('cabine2');
      if($query)
      {
        return $query->row();
      }
      else
      {
        return false;
      }

  }
  public function getmaqa(){

    $this->db->select('*');
    $this->db->order_by('cab_id' , 'DESC');
    $this->db->from('cabine');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
 public function getmuxano(){

    $this->db->select('*');
    // $this->db->order_by('id' , 'DESC');
    $this->db->from('years');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }

  public function getmuxano1(){

    $this->db->select('*');
    // $this->db->order_by('id' , 'DESC');
    $this->db->from('year');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }

 
  public function gets_barnoota(){

    $this->db->select('*');
    $this->db->from('education');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }
  public function gethaalamaati(){

    $this->db->select('*');
    $this->db->from('haalamaati');
    $query = $this->db->get();
    if($query)
    {
      return $query->result();
    }
  }




public function Delete_request($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('user_request');
            if ($query) {
                  return true;
            } else {
                  return FALSE;
            }
      }
function downloadcc($params = array()){
        $this->db->select('*');
        $this->db->from('carboncopy');
        // $this->db->where('status','0');
        $this->db->order_by('id','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

 public function Deletetl($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('terminate_letter');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }

function downloadtl($params = array()){
        $this->db->select('*');
        $this->db->from('terminate_letter');
        // $this->db->where('status','0');
        $this->db->order_by('id','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

function downloadus($params = array()){
        $this->db->select('*');
        $this->db->from('user_request');
        // $this->db->where('status','0');
        $this->db->order_by('id','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }




public function updateprofile($username)
      {
            $data=array(

            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
           
            
            
                  );
            $this->db->where('username',$this->session->userdata('username'));
      $query=$this->db->update('useraccount',$data);
      if($query)
      {
            return true;
      }
      else
      {
            return false;
      }
            }












    function login($user,$pass){

  $this->db->select('*');
  $this->db->from('useraccount');
  $this->db->where('username',$user); 
  $this->db->where('password',$pass);
  $this->db->limit(1);

  $query = $this->db->get();

  if($query->num_rows()==1){
    return $query->result();
  }
  else{
    return false;
  }
  }

public function showtletter($id)
  {
    $this->db->where('id',$id);
    
      $query=$this->db->get('terminate_show');
      if($query)
      {
        return $query->row();
      }
      else
      {
        return false;
      }
  }
  public function showmletter($id)
  {
    $this->db->where('id',$id);
    
      $query=$this->db->get('migrate_lshow');
      if($query)
      {
        return $query->row();
      }
      else
      {
        return false;
      }
  }
 
  
      public function getZone() {
            $this->db->select('*');
            $this->db->from('zone');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return false;
            }
      }

      public function Add_zone() {
            $data = array(
                'zname' => $this->input->post('zone_name'),
                'region_id' => 1,
                'zone_description' => $this->input->post('zone_description'),
                'zone_code' => $this->input->post('zone_code'),
            );
            $query = $this->db->insert('zone', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

      public function Delete_Zone($id) {
            $this->db->where('zid', $id);
            $query = $this->db->delete('zone');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }
  public function Delete_tletter($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('terminate_show');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }  public function Delete_mletter($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('migrate_lshow');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      } public function Delete_letter($id) {
            $this->db->where('id', $id);
            $query = $this->db->delete('osticaletters');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }

      public function Edit_zone($id) {
            $data = array(
                'zname' => $this->input->post('zone_name'),
                'region_id' => 1,
                'zone_description' => $this->input->post('zone_description'),
                'zone_code' => $this->input->post('zone_code'),
            );
            $this->db->where('zid', $id);
            $query = $this->db->update('zone', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

public function Edit_requestcomment($id) {
            $data = array(
                'directorcom' => $this->input->post('directorcom'),
                
            );
            $this->db->where('id', $id);
            $query = $this->db->update('user_request', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }
      public function getWoreda() {
            $this->db->select('*');
            $this->db->from('woreda');
            $this->db->join('zone', 'zone.zid = woreda.zone_id_woreda', 'left');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return false;
            }
      }

      public function Add_woreda() {
            $data = array(
                'woreda_name' => $this->input->post('woreda_name'),
                'region_id' => 1,
                'woreda_code' => $this->input->post('woreda_code'),
                'zone_id_woreda' => $this->input->post('zone_id'),
                'woreda_description' => $this->input->post('woreda_description'),
            );
            $query = $this->db->insert('woreda', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

      public function Delete_Woreda($id) {
            $this->db->where('woreda_id', $id);
            $query = $this->db->delete('woreda');
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }

      public function Edit_Woreda($id) {

            $data = array(
                'woreda_name' => $this->input->post('woreda_name'),
                'region_id' => 1,
                'woreda_code' => $this->input->post('woreda_code'),
                'zone_id_woreda' => $this->input->post('zone_ids'),
                'woreda_description' => $this->input->post('woreda_description'),
            );
            $this->db->where('woreda_id', $id);
            $query = $this->db->update('woreda', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

      function getRole() {
            $this->db->select('*');
            $this->db->from('role');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }

      public function Add_Role() {
            $data = array(
                'role_name' => $this->input->post('role_name'),
                'description' => $this->input->post('description'),
            );
            $query = $this->db->insert('role', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

      public function Edit_Role($id) {
            $data = array(
                'role_name' => $this->input->post('role_name'),
                'description' => $this->input->post('description'),
            );
            $this->db->where('role_id', $id);
            $query = $this->db->update('role', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return false;
            }
      }

      public function Delete_Role($id) {
            $this->db->where('role_id', $id);
            $query = $this->db->delete('role');
            if ($query) {
                  return true;
            } else {
                  return FALSE;
            }
      }

      public function getUser() {

            $this->db->join('zone', 'zone.zid = useraccount.zone_id', 'left');
            $this->db->join('woreda', 'woreda.woreda_id = useraccount.woreda_id', 'left');
            $this->db->join('role', 'role.role_id = useraccount.role_id', 'left');

            $this->db->select('*');
            $this->db->from('useraccount');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }


      public function getprofile($username)
  {
    $this->db->where('username',$this->session->userdata('username'));
    $this->db->join('zone', 'zone.zid = useraccount.zone_id', 'left');
   $this->db->join('woreda', 'woreda.woreda_id = useraccount.woreda_id', 'left');
  $this->db->join('role', 'role.role_id = useraccount.role_id', 'left');
  $this->db->join('gender','gender.gender_id = useraccount.gender_id','left');

    $this->db->from('useraccount');
     $query=$this->db->get();
    
    if($query)
    {
      return $query->row();
    }
    else
    {
      return false;
    }
    
  }

      public function Acivate_user($id) {
//            echo $id;
//            die();
            $data = array(
                'status' => 1
            );
            $this->db->where('id', $id);
            $query = $this->db->update('useraccount', $data);
            if ($query) {
                  return true;
            } else {
                  return fasle;
                  ;
            }
      }

      public function Deacivate_user($id) {
            $data = array(
                'status' => 0
            );
            $this->db->where('id', $id);
            $query = $this->db->update('useraccount', $data);
            if ($query) {
                  return true;
            } else {
                  return fasle;
                  ;
            }
      }

      public function Delete_user($id) {

            $this->db->where('id', $id);
            $query = $this->db->delete('useraccount');
            if ($query) {
                  return true;
            } else {
                  return fasle;
                  ;
            }
      }

      public function getWoredaUser() {
            $this->db->select('*');
//            $this->db->where('zone_id',1);
            $query = $this->db->get('woreda');
            if ($query) {
                  return $query->result();
            }
      }

      public function getGender() {
            $this->db->select('*');
            $this->db->from('gender');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }

      public function Edit_User($id) {
            $data = array(
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'middle_name' => $this->input->post('middle_name'),
//                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'gender_id' => $this->input->post('sex'),
                'phoneno' => $this->input->post('phoneno'),
                'dob' => $this->input->post('dob'),
                'email' => $this->input->post('email'),
                'region_id' => 1,
                'woreda_id' => $this->input->post('woreda'),
                'zone_id' => $this->input->post('zone'),
                'role_id' => $this->input->post('role'),
//                
            );
            $this->db->where('id', $id);
            $query = $this->db->update('useraccount', $data);
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }


        function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('research');
        // $this->db->where('status','0');
        $this->db->order_by('created_at','desc');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

      // public function File_upload() {
      //       $data = array(
      //           'file_name' => $this->upload->file_name,
      //           'title' => $this->input->post('title'),
      //           'subject' => $this->input->post('subject'),
      //           'detail' => $this->input->post('detail'),
      //       );
      //       $query = $this->db->insert('research', $data);
      //       if ($query) {
      //             return TRUE;
      //       } else {
      //             return FALSE;
      //       }
      // }

      public function getResearchDocument() {
           $this->db->order_by('id' , 'DESC');
            
            $this->db->from('research');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }

      public function Save_Abuse_Cases() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'abusetype_id' => $this->input->post('abusetype'),
                'sex' => $this->input->post('sex'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('abuse_case', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
      public function getAbuseCases()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('abuse_case');
            $this->db->join('region','region.r_id = abuse_case.region_id','left');
            $this->db->join('zone','zone.zid = abuse_case.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = abuse_case.woreda','left');
            $this->db->join('abuse_type','abuse_type.ab_id = abuse_case.abusetype_id','left');
            $this->db->join('age','age.ag_id = abuse_case.age_id','left');
            $this->db->join('gender','gender.gender_id = abuse_case.sex','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
      
      public function Edit_Abuse_Cases($id) {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'abusetype_id' => $this->input->post('abusetype'),
                'sex' => $this->input->post('sex'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $this->db->where('id',$id);
            $query = $this->db->update('abuse_case', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
      public function Delete_abusecase($id)
      {
            $this->db->where('id',$id);
            $query=$this->db->delete('abuse_case');
            if($query)
            {
                  return TRUE;
            }
            else{
                  return FALSE;
            }
      }
      public function getAbuseType()
      {
            $this->db->select('*');
            $this->db->from('abuse_type');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }



     public function Save_htp() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'htptype_id' => $this->input->post('htptype_id'),
                'sex' => $this->input->post('sex'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                // 'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('htp', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
      public function gethtp()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('htp');
            $this->db->join('region','region.r_id = htp.region_id','left');
            $this->db->join('zone','zone.zid = htp.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = htp.woreda','left');
            $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            $this->db->join('age','age.ag_id = htp.age_id','left');
            $this->db->join('gender','gender.gender_id = htp.sex','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function Save_htp1() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'htptype_id' => $this->input->post('htptype_id'),
                'sex' => $this->input->post('sex'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                // 'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('htp', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function gethtp1($user)
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('htp');
            $this->db->join('region','region.r_id = htp.region_id','left');
            $this->db->join('zone','zone.zid = htp.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = htp.woreda','left');
            $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            $this->db->join('age','age.ag_id = htp.age_id','left');
            $this->db->join('gender','gender.gender_id = htp.sex','left');
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
      
      public function Edit_htp($id) {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'htptype_id' => $this->input->post('htptype_id'),
                'sex' => $this->input->post('sex'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                // 'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $this->db->where('id',$id);
            $query = $this->db->update('htp', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
      public function Delete_htp($id)
      {
            $this->db->where('id',$id);
            $query=$this->db->delete('htp');
            if($query)
            {
                  return TRUE;
            }
            else{
                  return FALSE;
            }
      }
      public function gethtptype()
      {
            $this->db->select('*');
            $this->db->from('htp_type');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }

      public function getAge()
      {
            $this->db->select('*');
            $this->db->from('age');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }




      //child frendly info

      

      
      



      



      public function save_request() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'torequest' => $this->input->post('torequest'),
                'reqdesc' => $this->input->post('reqdesc'),
                'date' => $this->input->post('date'),
                'orgname' => $this->input->post('orgname'),
                // 'age_id' => $this->input->post('age_id'),
                // 'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('user_request', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
 public function save_terminateletter() {
           
            $data = array(
                
                'date' => $this->input->post('date'),
                'service_no' => $this->input->post('service_no'),
               
               
            );
            $query = $this->db->insert('terminate_show', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function save_newrequest() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                // 'orgname' => $this->input->post('orgname'),
                'reqdesc' => $this->input->post('reqdesc'),
                'date' => $this->input->post('date'),
                'age_id' => $this->input->post('age_id'),
                // 'low' => $this->input->post('low'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
                'post_status' => 1,
                
            );
            $query = $this->db->insert('user_request', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function getuserrequest($user)
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('user_request');
            $this->db->join('region','region.r_id = user_request.region_id','left');
            $this->db->join('zone','zone.zid = user_request.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = user_request.woreda','left');
            // $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            // $this->db->join('age','age.ag_id = htp.age_id','left');
            // $this->db->join('gender','gender.gender_id = htp.sex','left');
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
      // public function getuserrequest3($user)
      // {
      //        $this->db->select('*');
      //       $this->db->order_by('id' , 'DESC');
      //       $this->db->from('user_request');
      //       $this->db->join('region','region.r_id = user_request.region_id','left');
      //       $this->db->join('zone','zone.zid = user_request.zone_id','left');
      //       $this->db->join('woreda','woreda.woreda_id = user_request.woreda','left');
      //       $query= $this->db->get();
      //       if($query)
      //       {
      //             return $query->result();
      //       }
      //       else{
      //             return FALSE;
      //       }
            
            
      // }

      public function getuserrequest1()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('user_request');
            $this->db->where('requst_status3',2);
            $this->db->join('region','region.r_id = user_request.region_id','left');
            $this->db->join('zone','zone.zid = user_request.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = user_request.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
       public function getuserrequest3()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
             $zone = $this->session->userdata('zone');
             $this->db->where('zone_id', $zone);
            $this->db->from('user_request');
          
            $this->db->join('region','region.r_id = user_request.region_id','left');
            $this->db->join('zone','zone.zid = user_request.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = user_request.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function save_carbonCopy() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'orgname' => $this->input->post('orgname'),
                'ipid' => $this->input->post('ipid'),
                'lanip' => $this->input->post('lanip'),
                'wanip' => $this->input->post('wanip'),
                'date' => $this->input->post('date'),
                'servicenumber' => $this->input->post('servicenumber'),
                'ethiocontact' => $this->input->post('ethiocontact'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('carboncopy', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

     

      public function Edit_carboncopy($id) {
            $data = array(
                'orgname' => $this->input->post('orgname'),
                'ipid' => $this->input->post('ipid'),

                'lanip' => $this->input->post('lanip'),
                'wanip' => $this->input->post('wanip'),
                'date' => $this->input->post('date'),
                'servicenumber' => $this->input->post('servicenumber'),
                'ethiocontact' => $this->input->post('ethiocontact'),
               
                'region_id' => 1,
                'kebele' => $this->input->post('kebele'),
//                
            );
            $this->db->where('id', $id);
            $query = $this->db->update('carboncopy', $data);
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }

      public function Delete_carboncopy($id)
      {
            $this->db->where('id',$id);
            $query=$this->db->delete('carboncopy');
            if($query)
            {
                  return TRUE;
            }
            else{
                  return FALSE;
            }
      }

       public function getcarboncopy($user)
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('carboncopy');
            $this->db->join('region','region.r_id = carboncopy.region_id','left');
            $this->db->join('zone','zone.zid = carboncopy.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = carboncopy.woreda','left');
            // $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            // $this->db->join('age','age.ag_id = htp.age_id','left');
            // $this->db->join('gender','gender.gender_id = htp.sex','left');
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
          }

            public function getcarboncopy1()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('carboncopy');
            $this->db->join('region','region.r_id = carboncopy.region_id','left');
            $this->db->join('zone','zone.zid = carboncopy.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = carboncopy.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
            
            



public function postcarbon($post)
  {
    $data=array(

      
      
      'post_status'=>1,

      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('carboncopy',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }
  public function requst_status($post)
  {
    $data=array(

      
      'requst_status'=>0,
      'requst_status'=>1,
      'requst_status'=>2,
      
    );
    $this->db->where('c_id',$post);
    $query=$this->db->update('cabine2',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }

public function requst_status1($post)
  {
    $data=array(

      
      'requst_status1'=>0,
      'requst_status1'=>1,
      'requst_status1'=>2,
      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('user_request',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }
  public function requst_status3($post)
  {
    $data=array(

      
      'requst_status3'=>0,
      'requst_status3'=>1,
      'requst_status3'=>2,
      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('user_request',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }
  public function post_status($post)
  {
    $data=array(

      
      'post_status'=>0,
      'post_status'=>1,
      'post_status'=>2,
      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('migrate_letter',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }
 public function ip_status($post)
  {
    $data=array(

      
      'free_status'=>0,
      'free_status'=>1,
      'free_status'=>2,
      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('freeip',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }

public function terminate_status($post)
  {
    $data=array(

      
      'terminate_status'=>0,
      'terminate_status'=>1,
      'terminate_status'=>2,
      
    );
    $this->db->where('id',$post);
    $query=$this->db->update('terminate_letter',$data);
    if($query)
    {
      return true;
    }
    else
    {
      return false;
    }

  }



  

  public function getpostcarbon()
  {
             $this->db->select('*');
  
            $this->db->where('post_status',1);
            $this->db->order_by('id' , 'DESC');
            $this->db->from('carboncopy');
            $this->db->join('region','region.r_id = carboncopy.region_id','left');
            $this->db->join('zone','zone.zid = carboncopy.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = carboncopy.woreda','left');
           $qeury=$this->db->get();

    if($qeury)
    {
      return $qeury->result();
    }
    else
    {
      return false;
    }
  }


    public function save_terminate() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'refno' => $this->input->post('refno'),
                'service_type' => $this->input->post('service_type'),
                'date' => $this->input->post('date'),
                'ipid' => $this->input->post('ipid'),

                'lanip' => $this->input->post('lanip'),
                'servicenumber' => $this->input->post('servicenumber'),
                'site_ict' => $this->input->post('site_ict'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                 'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
                // 'post_status' => 1,
                
            );
            $query = $this->db->insert('terminate_letter', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function getterminate($user)
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('terminate_letter');
            $this->db->join('region','region.r_id = terminate_letter.region_id','left');
            $this->db->join('zone','zone.zid = terminate_letter.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = terminate_letter.woreda','left');
            // $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            // $this->db->join('age','age.ag_id = htp.age_id','left');
            // $this->db->join('gender','gender.gender_id = htp.sex','left');
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function getterminate1()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('terminate_letter');
            $this->db->join('region','region.r_id = terminate_letter.region_id','left');
            $this->db->join('zone','zone.zid = terminate_letter.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = terminate_letter.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

 public function getterminate2()
      {
            $this->db->select('*');
            $this->db->where('terminate_status',2);
            $this->db->order_by('id' , 'DESC');
            $this->db->from('terminate_letter');
            $this->db->join('region','region.r_id = terminate_letter.region_id','left');
            $this->db->join('zone','zone.zid = terminate_letter.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = terminate_letter.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function getfreelanip()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('freeip');
            
           $this->db->where('free_status',0);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }
 public function getfreeipreport()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('freeip');
            
           $this->db->where('free_status',0);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }


      public function save_migrate() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'refno' => $this->input->post('refno'),
                'service_type' => $this->input->post('service_type'),
                'date' => $this->input->post('date'),
                'ipid' => $this->input->post('ipid'),
                'lanip' => $this->input->post('lanip'),
                'sitecurrent' => $this->input->post('sitecurrent'),
                'sitetomove' => $this->input->post('sitetomove'),
                'servicenumber' => $this->input->post('servicenumber'),
                'site_ict' => $this->input->post('site_ict'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                // 'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
                'post_status' => 1,
                
            );
            $query = $this->db->insert('migrate_letter', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function getmigrate($user)
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('migrate_letter');
            $this->db->join('region','region.r_id = migrate_letter.region_id','left');
            $this->db->join('zone','zone.zid = migrate_letter.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = migrate_letter.woreda','left');
            // $this->db->join('htp_type','htp_type.htp_id = htp.htptype_id','left');
            // $this->db->join('age','age.ag_id = htp.age_id','left');
            // $this->db->join('gender','gender.gender_id = htp.sex','left');
            $this->db->where('created_by',$user);
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function getmigrate1()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('migrate_letter');
            $this->db->join('region','region.r_id = migrate_letter.region_id','left');
            $this->db->join('zone','zone.zid = migrate_letter.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = migrate_letter.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

      public function save_freeip() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'lanip' => $this->input->post('lanip'),
                'ipid' => $this->input->post('ipid'),
                'date' => $this->input->post('date'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                // 'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('freeip', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }
      public function getIpinfo(){
            $this->db->select('*');
            $this->db->from('carboncopy');
            $query = $this->db->get();
            if($query)
            {
                  return $query->row();
            }
            else{
                  return false;
            }
      }


public function free_status($post)
  {
   
   $data = array(
                'lanip' => $this->input->post('lanip'),
                'ipid' => $this->input->post('ipid'),
                'date' => $this->input->post('date'),
                
                'region_id' => 1,
                // 'kebele' => $this->input->post('kebele'),
//                
            );
            $this->db->where('id', $id);
            $query = $this->db->insert('freeip', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }


      public function Edit_freeip($id) {
            $data = array(
                'lanip' => $this->input->post('lanip'),
                'ipid' => $this->input->post('ipid'),
                'date' => $this->input->post('date'),
                
                'region_id' => 1,
                // 'kebele' => $this->input->post('kebele'),
//                
            );
            $this->db->where('id', $id);
            $query = $this->db->update('freeip', $data);
            if ($query) {
                  return true;
            } else {
                  return false;
            }
      }



      public function Delete_freeip($id)
      {
            $this->db->where('id',$id);
            $query=$this->db->delete('freeip');
            if($query)
            {
                  return TRUE;
            }
            else{
                  return FALSE;
            }
      }public function Delete_freeip1($ipid)
      {
            $this->db->where('ipid',$ipid);
            $query=$this->db->delete('freeip');
            if($query)
            {
                  return TRUE;
            }
            else{
                  return FALSE;
            }
      }

      public function getfreeip()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('freeip');
           $this->db->where('free_status',0);
            
            $this->db->join('region','region.r_id = freeip.region_id','left');
            $this->db->join('zone','zone.zid = freeip.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = freeip.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

public function showletter($id)
  {
    $this->db->where('osticaletters.id',$id);
      $this->db->from('osticaletters');
    $this->db->join('freeip','freeip.id = osticaletters.lanip');
    $query=$this->db->get();
    
    if($query)
    {
      return $query->row();
    }
    else
    {
      return false;
    }
    
  }

      
      public function save_osticaletters() {
           
            $data = array(
                
                'service_type' => $this->input->post('service_type'),
                'date' => $this->input->post('date'),
                'lanip' => $this->input->post('lanip'),
                // 'ipid' => $this->input->post('ipid'),
                'band_width' => $this->input->post('band_width'),
                'site_ict' => $this->input->post('site_ict'),
                'sitephone' => $this->input->post('sitephone'),
                'organization' => $this->input->post('organization'),
                'osticafinance' => $this->input->post('osticafinance'),
                'osticaphone' => $this->input->post('osticaphone'),
               'zname' => $this->input->post('zname'),
                'wname' => $this->input->post('wname'),
                // 'region_id' => 1,
                 'kebele' => $this->input->post('kebele'),
                // 'operator' => $LoggedUser,
                // 'created_by' => $username,
                // 'post_status' => 1,
                
            );
            echo $this->input->post('lanip');

            $query = $this->db->insert('osticaletters', $data);
            if ($query) {
                  $letterip =  $this->input->post('lanip');

                   $data1 = array(
                    'free_status'=>2

                   );
                   $this->db->where('freeip.id',$letterip);

                    $query1 = $this->db->update('freeip',$data1);

                              if ($query1) {
                                  return TRUE;


                             } else {
                                   return FALSE;
                                 }

                  } else {
                        return FALSE;
                  }
                  return TRUE;

      } 
      public function save_mletter() {
           
            $data = array(
                
                'oldservice_type' => $this->input->post('oldservice_type'),
                'newservice_type' => $this->input->post('newservice_type'),
                'date' => $this->input->post('date'),
                'lanip' => $this->input->post('lanip'),
                'servicenumber' => $this->input->post('servicenumber'),
                'band_width' => $this->input->post('band_width'),
                'site_ict' => $this->input->post('site_ict'),
                'sitephone' => $this->input->post('sitephone'),
                'organization' => $this->input->post('organization'),
                'osticafinance' => $this->input->post('osticafinance'),
                'osticaphone' => $this->input->post('osticaphone'),
               'zname' => $this->input->post('zname'),
                'wname' => $this->input->post('wname'),
                // 'region_id' => 1,
                 // 'kebele' => $this->input->post('kebele'),
                // 'operator' => $LoggedUser,
                // 'created_by' => $username,
                // 'post_status' => 1,
                
            );
            $query = $this->db->insert('migrate_lshow', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

      public function getmletter()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');

            $this->db->from('migrate_lshow');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }public function getnewletters()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('osticaletters');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }
       public function getterminateletter()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('terminate_show');
            $query=$this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
      }

      public function save_ipcomment() {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
                'fname' => $this->input->post('fname'),
                'email' => $this->input->post('email'),
                'date' => $this->input->post('date'),
                'subject' => $this->input->post('subject'),
                'text' => $this->input->post('text'),
                'zone_id' => $zone,
                'woreda' => $woreda,
                'region_id' => 1,
                // 'kebele' => $this->input->post('kebele'),
                'operator' => $LoggedUser,
                'created_by' => $username,
            );
            $query = $this->db->insert('ipcomment', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

           public function getipcomment()
      {
            $this->db->select('*');
            $this->db->order_by('id' , 'DESC');
            $this->db->from('ipcomment');
            $this->db->join('region','region.r_id = ipcomment.region_id','left');
            $this->db->join('zone','zone.zid = ipcomment.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = ipcomment.woreda','left');
            $query= $this->db->get();
            if($query)
            {
                  return $query->result();
            }
            else{
                  return FALSE;
            }
            
            
      }

}
