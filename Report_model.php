<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Report_model
 *
 * @author HP
 */
class Report_model extends CI_Model {

      //put your code here
      public function getAbuseCasesReports($zone, $woreda, $abuse_type, $age_range) {
            $this->db->select('*');
            $this->db->from('abuse_case');
            
            // $this->db->where('zone_id', $zone);
            // $this->db->where('woreda', $woreda);
            // $this->db->where('abusetype_id', $abuse_type);
            // $this->db->where('age_id', $age_range);
            
             $this->db->join('region','region.r_id = abuse_case.region_id','left');
            $this->db->join('zone','zone.zid = abuse_case.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = abuse_case.woreda','left');
            $this->db->join('abuse_type','abuse_type.ab_id = abuse_case.abusetype_id','left');
            $this->db->join('age','age.ag_id = abuse_case.age_id','left');
            $this->db->join('gender','gender.gender_id = abuse_case.sex','left');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }

      public function getchildfrendlysReports($zone, $woreda, $abuse_type, $age_range) {
            $this->db->select('*');
            $this->db->from('child_friendly');
            
            // $this->db->where('zone_id', $zone);
            // $this->db->where('woreda', $woreda);
            // $this->db->where('abusetype_id', $abuse_type);
            // $this->db->where('age_id', $age_range);
            
            
            $this->db->join('region','region.r_id = child_friendly.region_id','left');
            $this->db->join('zone','zone.zid = child_friendly.zone_id','left');
            $this->db->join('woreda','woreda.woreda_id = child_friendly.woreda','left');
         $this->db->join('childfriendly_type','childfriendly_type.cf_id = child_friendly.childfriendlytype_id','left');
            $this->db->join('age','age.ag_id = child_friendly.age_id','left');
            $this->db->join('gender','gender.gender_id = child_friendly.sex','left');
            $query = $this->db->get();
            if ($query) {
                  return $query->result();
            } else {
                  return FALSE;
            }
      }
}