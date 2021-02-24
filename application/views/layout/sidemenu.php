
<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                  <div class="pull-left image">
                        <img style="height: 50px; width: 500px;" src="<?php echo base_url(); ?>dist/img/logo.png" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                        <p><?php
                              $role = $this->session->userdata('role');
                              $role_name = $this->db->select('*')->from('role')->where('role_id', $role)->get()->row();

                              echo $role_name->role_name;
                              ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                              </button>
                        </span>
                  </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php
            if ($this->session->userdata('role') == 1) {
                  ?>

                  <ul class="sidebar-menu" data-widget="tree">

                        <li class="active treeview">
                              <a href="<?php echo base_url('BDDDDOcontroller/dashboard'); ?>">
                                    <i class="fa fa-dashboard"></i> <span></i>Dashboard</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                        </li>  

                       <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-users"></i> <span>User Management</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/User_list') ?>"><i class="fa fa-list-alt"></i>User List</a></li>
                                    <li><a href="<?php echo base_url('BDDDDOcontroller/add_employee') ?>"><i class="fa fa-user-plus"></i>Add User</a></li>
                                   <!--  <li><a href="<?php echo base_url('Structure/Woreda') ?>"><i class="fa fa-link"></i> Add Role</a></li> -->
                                    <!-- <li><a href="<?php echo base_url('Structure/System_info') ?>"><i class="fa fa-file-pdf-o"></i> All User Report</a></li> -->
                              </ul>
                        </li>
                        <li><a href="<?php echo base_url('Structure/manage_freeip') ?>"><i class="fa fa-tasks"></i>Free Ip</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_userrequest1"><i class="fa fa-laptop"></i>Manage User Request</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_carbonCopy1"><i class="fa fa-laptop"></i>Manage Carbon Copy</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_terminate"><i class="fa fa-laptop"></i>Manage Service Terminate</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_migrate"><i class="fa fa-laptop"></i>Manage Service Migrate</a></li> 
                        <!-- <li><a href="<?php echo base_url() ?>Structure/manage_training"><i class="fa fa-laptop"></i>All Ip Info</a></li> -->
                        <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-list-alt"></i> <span>Letter to Ethio-telecom</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                     <li><a href="<?php echo base_url() ?>Structure/newletters"><i class="fa fa-laptop"></i>New request letter</a></li> 
                                    <li><a href="<?php echo base_url('Structure/t_letter') ?>"><i class="fa fa-list-alt"></i>Terminate letter</a></li>
                                    <li><a href="<?php echo base_url('Structure/m_letter') ?>"><i class="fa fa-user-o"></i>Migrate letter</a></li>
                                  
                              </ul>
                        </li>
                        
                       
                        <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-user-plus"></i> <span>General Reports</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/getcarboninfo') ?>"><i class="fa fa-list-alt"></i>WoredaNet on Service</a></li>
                                     
                                    <li><a href="<?php echo base_url('Structure/manage_terminate2') ?>"><i class="fa fa-user-o"></i>Terminated Services </a></li>
                                    <li><a href="<?php echo base_url('Structure/manage_migrate') ?>"><i class="fa fa-link"></i>Migrate Services</a></li>
                                   
                              </ul>
                        </li>
                        
                          
                        
                        <!--<li><a href="<?php echo base_url('auth/index') ?>"><i class="fa fa-laptop"></i>Users</a></li>-->
      <!--                        <li><a href="<?php echo base_url() ?>BDDDDOcontroller/uploadresearch"><i class="fa fa-laptop"></i>Upload Research</a></li> -->
                        <!-- <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>sereach abuse case</span>

                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('BDDDDOcontroller/allabusecase'); ?>"><i class="fa fa-user-plus"></i>all age</a></li>
                                    <li><a href="<?php echo base_url('usercontroller/manage_schedule') ?>"><i class="fa fa-circle-o"></i>Manage Checkups</a></li>

                              </ul>
                        </li>  -->
                        
                        
                        <!-- <li><a href="<?php echo base_url('Structure/ReserchDocument') ?>"><i class="fa fa-folder-open-o"></i>Research Upload</a></li> --> 

                        <!-- <li><a href="<?php echo base_url() ?>BDDDDOcontroller/uploadresearch"><i class="fa fa-laptop"></i>Comment</a></li> -->
                        <!-- <li><a href="<?php echo base_url() ?>BDDDDOcontroller/manage_population"><i class="fa fa-laptop"></i>Total Population</a></li> -->
                        
                         <!-- <li><a href="<?php echo base_url() ?>Report/ipreport_info"><i class="fa fa-laptop"></i>Ip Report</a></li> -->
                         <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-gears"></i> <span>Setting</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/Zone') ?>"><i class="fa  fa-plus"></i> Zone </a></li>
                                    <li><a href="<?php echo base_url('Structure/Woreda') ?>"><i class="fa fa-link"></i> Woreda</a></li>
                                   <!--  <li><a href="<?php echo base_url('Structure/System_info') ?>"><i class="fa fa-info"></i> System Information</a></li> -->
                              </ul>
                        </li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_ipcomment"><i class="fa fa-laptop"></i>Comment</a></li>
                        <!-- <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>All Repport</span>

                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Report/AllReport'); ?>"><i class="fa fa-file-pdf-o"></i>Report</a></li>
                                    <li><a href="<?php echo base_url('Report/ChildfrendReport'); ?>"><i class="fa fa-user-plus"></i>Child Frendly Reports</a></li>
                                    <li><a href="<?php echo base_url('usercontroller/manage_schedule') ?>"><i class="fa fa-circle-o"></i>Manage Checkups</a></li>

                              </ul>
                        </li>   -->

                        <!-- try -->


                        <?php
                  } else if ($this->session->userdata('role') == 3) {
                        ?>
                        <ul class="sidebar-menu" data-widget="tree">

                              <li class="active treeview">
                                    <a href="<?php echo base_url('marketcontroller/admindashboard'); ?>">
                                          <i class="fa fa-dashboard"></i>Dashboard

                                          <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                    </a>
                              </li>
                              <li><a href="<?php echo base_url('structure/manage_userrequest'); ?>"><i class="fa fa-circle-o"></i>Send New Request</a></li>
                              <li><a href="<?php echo base_url('structure/manage_carbonCopy'); ?>"><i class="fa fa-circle-o"></i>Carbon copy of Request</a></li>
                              <li><a href="<?php echo base_url('structure/terminate_letter'); ?>"><i class="fa fa-circle-o"></i>Service Terminate</a></li>
                              <li><a href="<?php echo base_url('structure/migrate_letter'); ?>"><i class="fa fa-circle-o"></i>Service to Migrate</a></li>
                              <li><a href="<?php echo base_url('structure/ipcomment'); ?>"><i class="fa fa-circle-o"></i>Comment</a></li>



                        </ul>


                        ?>

                        <?php
                  } else if ($this->session->userdata('role') == 2) {
                        ?>
                        <ul class="sidebar-menu" data-widget="tree">

                              <li class="active treeview">
                                    <a href="<?php echo base_url('Structure/admindashboard'); ?>">
                                          <i class="fa fa-dashboard"></i> <span></i>Dashbord</span>
                                          <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                    </a>
                              </li>
                              <li><a href="<?php echo base_url() ?>Structure/manage_freeip"><i class="fa fa-laptop"></i>Free Ip</a></li>
                              <li><a href="<?php echo base_url() ?>Structure/manage_userrequest2"><i class="fa fa-laptop"></i>Manage User Requests</a></li>

<li class="treeview">
                              <a href="#">
                                    <i class="fa fa-gears"></i> <span>General Reports</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                              
                        <li><a href="<?php echo base_url() ?>Structure/getcarboninfo"><i class="fa fa-laptop"></i>WoredaNet on Service</a></li>
                        
                        <li><a href="<?php echo base_url() ?>Structure/manage_terminate2"><i class="fa fa-laptop"></i> Terminated Services</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_migrate"><i class="fa fa-laptop"></i>Migrated Services</a></li> 
                        <li><a href="<?php echo base_url() ?>Structure/newletters"><i class="fa fa-laptop"></i>Latter Management</a></li> 
                        
                        
                        </ul>
</li>

                              
                        <li><a href="<?php echo base_url() ?>Structure/manage_ipcomment"><i class="fa fa-laptop"></i>Comment</a></li>

                              <!-- <li><a href="<?php echo base_url('marketcontroller/mange_usercom'); ?>"><i class="fa fa-circle-o"></i><?php echo $this->lang->line('feedback_menu'); ?></a></li> -->

                        </ul>
<?php } ?>
                  </aside>