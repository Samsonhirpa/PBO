<?php

class Cabines_model extends CI_Model
{


public function getGender(){

        $this->db->select('*');
        $this->db->from('gender');
        $query = $this->db->get();
        if($query)
        {
            return $query->result();
        }
    }
public function getzone(){

		$this->db->select('*');
		$this->db->from('zone');
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
    public function getcabine(){
 $this->db->join('zone', 'zone.zid = cabine.zone_id', 'left');
            $this->db->join('woreda', 'woreda.woreda_id = cabine.woreda', 'left');
        $this->db->select('*');
        $this->db->from('cabine');
        $query = $this->db->get();
        if($query)
        {
            return $query->result();
        }
    }

public function getcabine2(){
        $this->db->select('*');
        $this->db->from('cabine2');
       $this->db->join('zone', 'zone.zid = cabine2.zone_id', 'left');
        $this->db->join('woreda', 'woreda.woreda_id = cabine2.woreda', 'left');
        $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id', 'left');
        // $this->db->join('cabine', 'cabine.cab_id = cabine2.maqa_id', 'left');
        $query=$this->db->get();
                if($query)
                {
                    return $query->result();
                }
                else
                {
                    return false;
                }
            }
     public function getusers(){

        $this->db->select('*');
        $this->db->from('user');
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

public function savecabines($id) {
            $username= $this->session->userdata('username');
            $LoggedUser = $this->session->userdata('full_name');
            $zone = $this->session->userdata('zone');
            $woreda = $this->session->userdata('woreda');
            $phone = $this->session->userdata('phone');
            $email = $this->session->userdata('email');
//            $woreda = $this->session->userdata('woreda');

            $data = array(
               
                'mudama_amma' => $this->input->post('mudama_amma'),
                 'muxannoo' => $this->input->post('muxannoo'),
                'muxannoowan' => $this->input->post('muxannoowan'),
                // 'suura' => $this->input->post('suura'),
                'sadarkaB' => $this->input->post('sadarkaB'),
                'gosaB' => $this->input->post('gosaB'),
                'carrabarumsa' => $this->input->post('carrabarumsa'),
                'baraqabso' => $this->input->post('baraqabso'),
                'barabadhasa' => $this->input->post('barabadhasa'),
                'hojibadhasa' => $this->input->post('hojibadhasa'),
                'qamabadhase' => $this->input->post('qamabadhase'),
                'barakafama' => $this->input->post('barakafama'),
                'dhimakahef' => $this->input->post('dhimakahef'),
                'ciminaijo' => $this->input->post('ciminaijo'),
                'hanqinaijo' => $this->input->post('hanqinaijo'),
                'zone_id' => $zone,
                'woreda' => $woreda,
              
                'operator' => $LoggedUser,
             
            );
           

 $this->db->where('id',$last_inserted);
            $query = $this->db->update('cabine', $data);
            if ($query) {
                  return TRUE;
            } else {
                  return FALSE;
            }
      }

         



}