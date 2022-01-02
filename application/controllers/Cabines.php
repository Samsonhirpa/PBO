<?php

class Cabines extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Cabines_model', 'cab');
        $this->load->model('Structure_model', 'str');
            $this->load->model('bddddomodel', 'b');
            $this->load->model('usermodel', 'm');
             // $this->load->library('Pdf_report');
		
	}

public function index()
      {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('layout/content');
            $this->load->view('layout/footer.php');
        }
public function userlist()
      {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('user/list_user');
            $this->load->view('layout/footer.php');
        }

        public function addcabines()
      {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('cabine/addcab');
            $this->load->view('layout/footer.php');
        }
       
public function managecabine(){
		
			 $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('Gabaasa/hogganaa');
            $this->load->view('layout/footer.php');
		}
		

public function savecabines3($id) {
            $result = $this->cab->savecabines();
            if ($result) {
                  $this->session->set_flashdata('success_msg', 'Successfully Added');
            } else {
                  $this->session->set_flashdata('error_msg', 'Failed To Add Please Try Again');
            }
            redirect('Cabines/managecabine');
      }



           public function Add_document(){
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('cabine/addcabines');
            $this->load->view('layout/footer.php');

}



  



// public function savecabines() {

//             $config = array(
//                 'upload_path' => './upload/',
//                 'allowed_types' => 'pdf|jpg|png',
//                 'max_size' => 0,
//                 'file_name' => url_title($this->input->post('attachment')),
//             );
//             $username= $this->session->userdata('username');
//             $LoggedUser = $this->session->userdata('full_name');
//             $zone = $this->session->userdata('zone');
//             $woreda = $this->session->userdata('woreda');
//             $phone = $this->session->userdata('phone');
//             $email = $this->session->userdata('email');
            
//             $this->load->library('upload', $config);
//             if($this->upload->do_upload('attachment'))
//         {
           
//            $data= array(
//                 'file_name'=>$this->upload->file_name,
//                 'maqa' => $this->input->post('maqa'),
//                 'sala_id' => $this->input->post('sala_id'),
//                 'umuri' => $this->input->post('umuri'),
//                 'bilbila' => $this->input->post('bilbila'),
//                 'email' => $this->input->post('email'),
//                 'dhalotaG_id' => $this->input->post('dhalotaG_id'),
//                 'dhalotaA_id' => $this->input->post('dhalotaA_id'),
//                 'haalamaati' => $this->input->post('haalamaati'),
//                 'bayinaM' => $this->input->post('bayinaM'),
//                 'bayinaF' => $this->input->post('bayinaF'),
//                   'zone_id' => $zone,
//             'woreda' => $woreda,
      
           
//             'operator' => $LoggedUser,
                  
//                  );
//            $query = $this->db->insert('cabine',$data);
//            if($query){
//     $last_id =$this->db->select('cab_id')->from('cabine')->order_by('cab_id','asc')->limit(1)->get()->row();

//             $last_inserted=$last_id->id;
//             echo $last_inserted;
//            redirect('Cabines/Add_document/'.$last_inserted);
//         }
//         }
//         redirect('Cabines/addcabines');
//       }

public function savecabines() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('attachment')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('attachment'))
        {
            $this->db->insert('cabine',array(
                'file_name'=>$this->upload->file_name,
                'maqa' => $this->input->post('maqa'),
                'sala_id' => $this->input->post('sala_id'),
                'umuri' => $this->input->post('umuri'),
                'bilbila' => $this->input->post('bilbila'),
                'email' => $this->input->post('email'),
                'dhalotaG_id' => $this->input->post('dhalotaG_id'),
                'dhalotaA_id' => $this->input->post('dhalotaA_id'),
                'haalamaati' => $this->input->post('haalamaati'),
                'bayinaM' => $this->input->post('bayinaM'),
                'bayinaF' => $this->input->post('bayinaF'),
                  'zon_id' => $zone,
            'woreda_id' => $woreda,
      
           
            'operator' => $LoggedUser,
            'created_by1' => $username,
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/addcabines2');
      }


public function savecabines2() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('cv')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('cv'))
        {
            $this->db->insert('cabine2',array(
                'cv'=>$this->upload->file_name,
                'maqa_id' => $this->input->post('maqa_id'),
                'sector' => $this->input->post('sector'),
                'mudama_amma' => $this->input->post('mudama_amma'),
                'muxannoowan' => $this->input->post('muxannoowan'),
                'muxannoo' => $this->input->post('muxannoo'),
                'sadarkaB' => $this->input->post('sadarkaB'),
                'gosaB' => $this->input->post('gosaB'),
                 'university_id' => $this->input->post('university_id'),
                'gpa' => $this->input->post('gpa'),
                'carrabarumsa' => $this->input->post('carrabarumsa'),
                'baraqabso' => $this->input->post('baraqabso'),
                'barabadhasa' => $this->input->post('barabadhasa'),
                'hojibadhasa' => $this->input->post('hojibadhasa'),
                'qamabadhase' => $this->input->post('qamabadhase'),
                'barakafama' => $this->input->post('barakafama'),
                'dhimakahef' => $this->input->post('dhimakahef'),
                'ciminaijo' => $this->input->post('ciminaijo'),
                'hanqinaijo' => $this->input->post('hanqinaijo'),
                'level' => $this->input->post('level'),
                'muxano_hog' => $this->input->post('muxano_hog'),
                'qabxi' => $this->input->post('qabxi'),
                'bakalenji' => $this->input->post('bakalenji'),
                'baralenji' => $this->input->post('baralenji'),
                'gosalenji' => $this->input->post('gosalenji'),
                'marsa' => $this->input->post('marsa'),
                'kaffalti' => $this->input->post('kaffalti'),
                
            'zone_id' => $zone,
            'woreda' => $woreda,
      'operator' => $LoggedUser,
            'created_by' => $username,
          
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Cabines/managecabine');
      }

public function saveempcabines() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('attachment')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('attachment'))
        {
            $this->db->insert('cabine',array(
                'file_name'=>$this->upload->file_name,
                'maqa' => $this->input->post('maqa'),
                'sala_id' => $this->input->post('sala_id'),
                'umuri' => $this->input->post('umuri'),
                'bilbila' => $this->input->post('bilbila'),
                'email' => $this->input->post('email'),
                'dhalotaG_id' => $this->input->post('dhalotaG_id'),
                'dhalotaA_id' => $this->input->post('dhalotaA_id'),
                'haalamaati' => $this->input->post('haalamaati'),
                'bayinaM' => $this->input->post('bayinaM'),
                'bayinaF' => $this->input->post('bayinaF'),
                  'zon_id' => $zone,
            'woreda_id' => $woreda,
      
           
            'operator' => $LoggedUser,
            'created_by1' => $username,
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/empaddcabines2');
      }


public function saveempcabines2() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('cv')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('cv'))
        {
            $this->db->insert('cabine2',array(
                'cv'=>$this->upload->file_name,
                'maqa_id' => $this->input->post('maqa_id'),
                'sector' => $this->input->post('sector'),
                'mudama_amma' => $this->input->post('mudama_amma'),
                'muxannoowan' => $this->input->post('muxannoowan'),
                'muxannoo' => $this->input->post('muxannoo'),
                'sadarkaB' => $this->input->post('sadarkaB'),
                'gosaB' => $this->input->post('gosaB'),
                 'university_id' => $this->input->post('university_id'),
                'gpa' => $this->input->post('gpa'),
                'carrabarumsa' => $this->input->post('carrabarumsa'),
                'baraqabso' => $this->input->post('baraqabso'),
                'barabadhasa' => $this->input->post('barabadhasa'),
                'hojibadhasa' => $this->input->post('hojibadhasa'),
                'qamabadhase' => $this->input->post('qamabadhase'),
                'barakafama' => $this->input->post('barakafama'),
                'dhimakahef' => $this->input->post('dhimakahef'),
                'ciminaijo' => $this->input->post('ciminaijo'),
                'hanqinaijo' => $this->input->post('hanqinaijo'),
                'level' => $this->input->post('level'),
                'muxano_hog' => $this->input->post('muxano_hog'),
                'qabxi' => $this->input->post('qabxi'),
                'bakalenji' => $this->input->post('bakalenji'),
                'baralenji' => $this->input->post('baralenji'),
                'gosalenji' => $this->input->post('gosalenji'),
                'marsa' => $this->input->post('marsa'),
                'kaffalti' => $this->input->post('kaffalti'),
                
            'zone_id' => $zone,
            'woreda' => $woreda,
      'operator' => $LoggedUser,
            'created_by' => $username,
          
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/empmanage2');
      }

public function savezonecabines() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('attachment')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('attachment'))
        {
            $this->db->insert('cabine',array(
                'file_name'=>$this->upload->file_name,
                'maqa' => $this->input->post('maqa'),
                'sala_id' => $this->input->post('sala_id'),
                'umuri' => $this->input->post('umuri'),
                'bilbila' => $this->input->post('bilbila'),
                'email' => $this->input->post('email'),
                'dhalotaG_id' => $this->input->post('dhalotaG_id'),
                'dhalotaA_id' => $this->input->post('dhalotaA_id'),
                'haalamaati' => $this->input->post('haalamaati'),
                'bayinaM' => $this->input->post('bayinaM'),
                'bayinaF' => $this->input->post('bayinaF'),
                  'zon_id' => $zone,
            'woreda_id' => $woreda,
      
           
            'operator' => $LoggedUser,
            'created_by1' => $username,
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/zoneaddcabines2');
      }


public function savezonecabines2() {
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'pdf|jpg|doc|png|docx',
                'max_size' => 0,
                'file_name' => url_title($this->input->post('cv')),
            );
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
            $this->load->library('upload', $config);
            if($this->upload->do_upload('cv'))
        {
            $this->db->insert('cabine2',array(
                'cv'=>$this->upload->file_name,
                'maqa_id' => $this->input->post('maqa_id'),
                'sector' => $this->input->post('sector'),
                'mudama_amma' => $this->input->post('mudama_amma'),
                'muxannoowan' => $this->input->post('muxannoowan'),
                'muxannoo' => $this->input->post('muxannoo'),
                'sadarkaB' => $this->input->post('sadarkaB'),
                'gosaB' => $this->input->post('gosaB'),
                 'university_id' => $this->input->post('university_id'),
                'gpa' => $this->input->post('gpa'),
                'carrabarumsa' => $this->input->post('carrabarumsa'),
                'baraqabso' => $this->input->post('baraqabso'),
                'barabadhasa' => $this->input->post('barabadhasa'),
                'hojibadhasa' => $this->input->post('hojibadhasa'),
                'qamabadhase' => $this->input->post('qamabadhase'),
                'barakafama' => $this->input->post('barakafama'),
                'dhimakahef' => $this->input->post('dhimakahef'),
                'ciminaijo' => $this->input->post('ciminaijo'),
                'hanqinaijo' => $this->input->post('hanqinaijo'),
                'level' => $this->input->post('level'),
                'muxano_hog' => $this->input->post('muxano_hog'),
                'qabxi' => $this->input->post('qabxi'),
                'bakalenji' => $this->input->post('bakalenji'),
                'baralenji' => $this->input->post('baralenji'),
                'gosalenji' => $this->input->post('gosalenji'),
                'marsa' => $this->input->post('marsa'),
                'kaffalti' => $this->input->post('kaffalti'),
                
            'zone_id' => $zone,
            'woreda' => $woreda,
      'operator' => $LoggedUser,
            'created_by' => $username,
          
          
                                   ));
            $this->session->set_flashdata('msg',"success");
        }
        redirect('Structure/zonemanage2');
      }











}