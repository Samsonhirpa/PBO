
<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                  <div class="pull-left image">
                        <img style="height: 50px; width: 500px;" src="<?php echo base_url(); ?>dist/img/oro.PNG" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                        <p><?php
                              $role = $this->session->userdata('role');
                              $role_name = $this->db->select('*')->from('role')->where('role_id', $role)->get()->row();

                              echo $role_name->role_name;
                              ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i>  Oromiyaa </a>
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
                                    <i class="fa fa-users"></i> <span>Fayyadamtoota Sistemaa</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/User_list') ?>"><i class="fa fa-list-alt"></i>Fayyadamtoota To'achuu</a></li>
                                    <li><a href="<?php echo base_url('BDDDDOcontroller/add_employee') ?>"><i class="fa fa-user-plus"></i>Fayyadamaa Haaraa dabali</a></li>
                                  </ul>
                        </li>
                            <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Odeeffannoo Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/managecabine') ?>"><i class="fa fa-list-alt"></i>Hogganaa To'achuu</a></li>
                                    <li><a href="<?php echo base_url('Structure/addcabines') ?>"><i class="fa fa-user-plus"></i>Hogganaa Haaraa dabali</a></li>
                                  </ul>

                        </li> 
                         <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Ramaddii Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/managecabine2') ?>"><i class="fa fa-list-alt"></i>Ramaddii To'achuu</a></li>
                                    <li><a href="<?php echo base_url('Structure/addcabines2') ?>"><i class="fa fa-user-plus"></i>Ramaddii Haaraa </a></li>
                                  </ul>

                        </li> 
                          <li><a href="<?php echo base_url() ?>Structure/manage_ramadi1"><i class="fa fa-laptop"></i>Ramaddii Godina To'achuu</a></li>
                        <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-user-plus"></i> <span>Gabaasa</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                              <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/alluserinfo') ?>"><i class="fa fa-list-alt"></i>Gabaasa Fayyadmtootaa</a></li>
                                     
                                    <li><a href="<?php echo base_url('Structure/allinfo') ?>"><i class="fa fa-user-o"></i> Hoggantootaa Oromiyaa</a></li>
                                  
                     
                  </ul>
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
                                  </ul>
                        </li>

                        <li><a href="<?php echo base_url() ?>Structure/manage_ipcomment"><i class="fa fa-laptop"></i>Yaadota</a></li>
                       
                        <?php
                  } else if ($this->session->userdata('role') == 4) {
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
                             
                             <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Odeeffanoo Hogganaa</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                 <li><a href="<?php echo base_url('Structure/zoneaddcabines') ?>"><i class="fa fa-user-plus"></i>Hogganaa Haaraa dabali</a></li>
                                    <li><a href="<?php echo base_url('Structure/zonemanagecabine') ?>"><i class="fa fa-list-alt"></i>Odeeffannoo To'achuu</a></li>
                                   
                                  </ul>

                        </li> 
                         <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Ramaddii Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Structure/zoneaddcabines2') ?>"><i class="fa fa-user-plus"></i>Ramaddii Haaraa</a></li>
                                    <li><a href="<?php echo base_url('Structure/zonemanage2') ?>"><i class="fa fa-list-alt"></i>Ramaddii To'achuu</a></li>
                                    
                                  </ul>

                        </li>
                              
                        <li><a href="<?php echo base_url() ?>Structure/manage_ramadi"><i class="fa fa-laptop"></i>Ramaddii To'achuu</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/hoggantoota_godina"><i class="fa fa-laptop"></i>Hoggantoota Godina Hunda</a></li>
                        <li><a href="<?php echo base_url() ?>Structure/manage_ipcomment"><i class="fa fa-laptop"></i>Comment</a></li>

                             
                        </ul>


                        ?>
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


<li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Odeeffannoo Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                 <li><a href="<?php echo base_url('Structure/empaddcabines') ?>"><i class="fa fa-user-plus"></i>Hogganaa Haaraa dabali</a></li>
                                    <li><a href="<?php echo base_url('Structure/empmanagecabine') ?>"><i class="fa fa-list-alt"></i>Odeeffannoo To'achuu</a></li>
                                   
                                  </ul>

                        </li> 
                         <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Ramaddii Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                     <li><a href="<?php echo base_url('Structure/empaddcabines2') ?>"><i class="fa fa-user-plus"></i>Ramaddii Haara</a></li>
                                    <li><a href="<?php echo base_url('Structure/empmanage2') ?>"><i class="fa fa-list-alt"></i>Ramaddii To'achuu</a></li>
                                   
                                  </ul>

                        </li>


                              <li><a href="<?php echo base_url('structure/hoggantoota_aanaa'); ?>"><i class="fa fa-circle-o"></i>Hoggantoota Aanaa</a></li>

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


                              <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Odeeffannoo Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/empaddcabines') ?>"><i class="fa fa-user-plus"></i>Hogganaa Haaraa dabali</a></li>
                                    <li><a href="<?php echo base_url('Structure/empmanagecabine') ?>"><i class="fa fa-list-alt"></i>Hogganaa To'achuu</a></li>

                                  </ul>

                        </li> 
                         <li class="treeview">
                              <a href="#">
                                    <i class="fa fa-link"></i> <span>Ramaddii Hoggantoota</span>
                                    <span class="pull-right-container">
                                          <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                              </a>
                               <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('Structure/addcabines2') ?>"><i class="fa fa-user-plus"></i>Ramaddii Haaraa </a></li>
                                    <li><a href="<?php echo base_url('Structure/managecabine2') ?>"><i class="fa fa-list-alt"></i>Ramaddii To'achuu</a></li>

                                  </ul>

                        </li>
                              
                        <li><a href="<?php echo base_url() ?>Structure/manage_ipcomment"><i class="fa fa-laptop"></i>Comment</a></li>

                              <!-- <li><a href="<?php echo base_url('marketcontroller/mange_usercom'); ?>"><i class="fa fa-circle-o"></i><?php echo $this->lang->line('feedback_menu'); ?></a></li> -->

                        </ul>
<?php } ?>
                  </aside>