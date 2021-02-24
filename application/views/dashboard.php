
 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>/dist/img/logo.png" alt="User Image">
                        <span class="username">
                          <a href="#">Oromia Science, Technology and Information Communication Authority</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">WoredaNet Service Supervision & Support Database</span>
                  </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">OSTICA</a></li>
        <li class="active">WoredaNet</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Home</a></li>
              <li><a href="#timeline" data-toggle="tab">Infrastructure</a></li>
              <li><a href="#settings" data-toggle="tab">ICT POLICY</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                  <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user-plus"> </i></span>
<?php
$freecout=$this->db->count_all_results('freeip'); ?>
            <div class="info-box-content">
              <span class="info-box-text">Free IP</span>
             
              <span class="info-box-number"><?php echo $freecout?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                
                 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <?php
$onservicecout=$this->db->count_all_results('carboncopy'); ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-folder-open-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">On Service</span>
              <span class="info-box-number"><?php echo $onservicecout?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

       <?php
$migratecout=$this->db->count_all_results('migrate_letter'); ?>    

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Migrate</span>
              <span class="info-box-number"><?php echo $migratecout?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-folder-open-o"></i></span>
<?php 

$this->db->where('terminate_status =', 2);
$query = $this->db->get('terminate_letter');
$terminated= $query->num_rows();

?>
            <div class="info-box-content">
              <span class="info-box-text">Terminated LANIP</span>
              <span class="info-box-number"><?php echo $terminated;?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>/dist/img/logo.png" alt="User Image">
                        <span class="username">
                          <a href="#">OSTICA Network Infrastructure Development</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Oromia’s ICT policy is one of the fundamental components of the region’s socio-economic development goals and objectives.</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?php echo base_url();?>/dist/img/wore.jpg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/incc.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/hh.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/or.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/inff.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-wifi bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i>Network Info</span>

                      <h3 class="timeline-header"><a href="#">Network equipment and cables</a> </h3>

                      <div class="timeline-body">
                        <b>Cables and connectors.</b> These link together the computers, printers, servers and other equipment on your network.<br>
                        <b>A router.</b> This manages network traffic, ensuring devices can communicate with each other via both wired and wireless connections, and provides internet connectivity. <br>
                        <b>A wireless access point (optional).</b> This will extend your wireless network if the router is incapable of offering coverage in certain parts of the building.<br>
                        <b>An internet connection.</b> This could be a faster fibre connection or dedicated leased line.<br>
                        <b>A hardware firewall.</b> This creates a secure barrier between your network and the internet, blocking security threats. Networks sometimes include an on-site network server which runs central applications, acts as an email server and provides file storage
                      </div>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-wifi bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Woreda Net</span>

                      <h3 class="timeline-header no-border"><a href="#">OSTICA ICT Policy</a> Oromia’s ICT policy is one of the fundamental components of the region’s socio-economic development goals and objectives.
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-wifi bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-eye"></i> Network Infrastructure</span>

                      <h3 class="timeline-header"><a href="#">What Is Network Infrastructure ?</a> </h3>

                      <div class="timeline-body">
                        <b>Network infrastructure</b> refers to all of the resources of a network that make network or internet connectivity, management, business operations and communication possible. Network infrastructure comprises hardware and software, systems and devices, and it enables computing and communication between users, services, applications and processes.<br>
                        Anything involved in the network, from servers to wireless routers, comes together to make up a system’s network infrastructure. Network infrastructure allows for effective communication and service between users, applications, services, devices and so forth.
                      </div>
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <!-- <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li> -->
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-wifi bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-eye"></i> Photo</span>

                      <h3 class="timeline-header"><a href="#">Network Infrastructure</a>photos</h3>

                      <div class="timeline-body">
                        <img class="img-responsive" src="<?php echo base_url();?>/dist/img/inff.jpg" alt="Photo">
                          <br>
                          <!-- <img class="img-responsive" src="<?php echo base_url();?>/dist/img/.jpg" alt="Photo"> -->
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>/dist/img/logo.png" alt="User Image">
                        <span class="username">
                          <a href="#">THE STRATEGIC FOCUS OF ICT POLICY</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">ICT Infrastructure Strategies</span>
                  </div>
                  <!-- /.user-block -->
                  <p>Develop and implement a guideline for ICT Infrastructure master plan Develop, modernize and standardize ICT infrastructure and services.<br> Develop  regional high speed networks.<br> Provide ICT services to users at affordable prices.<br> Research and develop alternative and cost-effective sources of energy for use with ICT equipments and services.</p>
                  <p>
                    A computer network consists of two or more computers or other intelligent devices linked by communication media (e.g., cable or wireless media) to achieve successful communication. Computer networking is used in many aspects of our lives, and its applications are proliferating. For example, computer networks can be found in universities, secondary schools, and colleges, while in
                    the corporate world, networks link geographically separated offices. 
                  </p>

                  
                </div>
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>/dist/img/logo.png" alt="User Image">
                        <span class="username">
                          <a href="#">OSTICA Network Infrastructure Development</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Oromia’s ICT policy is one of the fundamental components of the region’s socio-economic development goals and objectives. Thus, the focus of the policy will be on the following areas that are considered strategic for the success of ICT development in the region.</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?php echo base_url();?>/dist/img/pol.jpeg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/incc.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/hh.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/or.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/inff.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <div class="col-md-3">

          <!-- Profile Image -->
          
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About OSTICA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Organization</strong>

              <p class="text-muted">
                Oromia Science, Technology and Information Communication Authority
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Addis Ababa Ethiopia</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>OSTICA WoredaNet Service Type</strong>

              <p>
                <span class="label label-danger">New Service</span>
                <span class="label label-success">Terminated Service</span>
                <span class="label label-info">Migrate Service</span>
                </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>What is WoredaNet</strong>

              <p>The primary objective of the Woreda-Net is to provide ICT services like Video-Conferencing, Mailing and Directory services, and Internet connectivity at the federal, regional and the lower levels of government and it is a terrestrial and satellite-based networ.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
