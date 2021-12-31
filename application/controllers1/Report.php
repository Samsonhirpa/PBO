<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Report
 *
 * @author HP
 */
class Report extends CI_Controller {
      //put your code here
      public function __construct() {
            parent::__construct();
            $this->load->model('Report_model','rpt');
            $this->load->model('Structure_model','str');
      }
      public function AllReport()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/report');
            $this->load->view('layout/footer');
             }
            else
      {
            redirect('Report');
      }
      }

      public function AllReport_info()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/all_report');
            $this->load->view('layout/footer');
             }
            else
      {
            redirect('Report');
      }
      }
      
      
      
      public function Generate_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/regional_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function ChildfrendReport()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/Childfrendreport');
            $this->load->view('layout/footer');
             }
            else
      {
            redirect('Report');
      }
      }

      public function childfriemdly_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/childfriemdly_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function ovcs_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/ovcs_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function disabled_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/disabled_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function Childcare_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/Childcare_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function htp_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/htp_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function onestop_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/onestop_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function cccService_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/cccService_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function post_placement_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/post_placement_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function css_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/css_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }
      
     public function pop_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('population/pop_repport');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }

      public function population_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('population/population_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }
      public function ff_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/ff_report');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }



      // ZONE LEVEL REPORT INFORMATION


      public function Zone_Report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/zone/zone_report');
            $this->load->view('layout/footer');
             }
            else
      {
            redirect('Report');
      }
      }



      public function Abusezone_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/zone/abuse_zonereport');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }



      // WOREDA LEVEL Report INFORMATION


      public function woreda_Report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/woreda/woreda_report');
            $this->load->view('layout/footer');
             }
            else
      {
            redirect('Report');
      }
      }



      public function Abuseworeda_report()
      {
            if ($this->session->userdata('username')) {
            $this->load->view('layout/header');
            $this->load->view('layout/topmenu');
            $this->load->view('layout/sidemenu');
            $this->load->view('report/woreda/abuse_woredareport');
            $this->load->view('layout/footer');
            }
            else
      {
            redirect('Report');
      }
      }
}
