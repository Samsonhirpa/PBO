
 
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
              <li><a href="#timeline" data-toggle="tab">Mullataaf Ergama</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                
                <!-- /.post -->

                  <div class="row">
<?php
$cabinota=$this->db->count_all_results('cabine'); ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $cabinota?><sup style="font-size: 20px">%</sup></h3>

              <p>Hoggantoota Galma'aan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="href="<?php echo base_url('Structure/managecabine') ?>"" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->
       <?php
$doc=$this->db->count_all_results('cabine2'); ?>
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green" href="<?php echo base_url('Structure/managecabine2') ?>">
            <div class="inner">
              <h3><?php echo $doc?><sup style="font-size: 20px">%</sup></h3>

              <p>Dokumeentoota</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url('Structure/managecabine2') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
  <?php
$user=$this->db->count_all_results('useraccount'); ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $user?></h3>

              <p>Ogeessota Sisteemaa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Structure/User_list') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
          <?php
$yada=$this->db->count_all_results('ipcomment'); ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $yada?></h3>

              <p>Yaadota Ka'an</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('Structure/manage_ipcomment') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>
       </div>
     </div>
                <!-- Post -->
                <div class="post">
       <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <!-- <img class="img-responsive" src="<?php echo base_url();?>/dist/img/oro.PNG" alt="Photo"> -->
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                         <!--  <img class="img-responsive" src="<?php echo base_url();?>/dist/img/flag.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/abiy2.jpg" alt="Photo"> -->
                        </div>
                    
                        <div class="col-sm-6">
                         <!--  <img class="img-responsive" src="<?php echo base_url();?>/dist/img/abiy1.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>/dist/img/drab.jpg" alt="Photo">
                     -->    </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  
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
                     

                      <h3 class="timeline-header"><a href="#">Mullata</a> </h3>

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
                      
 <h3 class="timeline-header"><a href="#">Ergama</a> </h3>
<div class="timeline-body">
                   Oromia’s ICT policy is one of the fundamental components of the region’s socio-economic development goals and objectives.
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-wifi bg-yellow"></i>

                    <div class="timeline-item">
                    

                      <h3 class="timeline-header"><a href="#">Kaayyoo</a> </h3>

                      <div class="timeline-body">
                        <b>Network infrastructure</b> refers to all of the resources of a network that make network or internet connectivity, management, business operations and communication possible. Network infrastructure comprises hardware and software, systems and devices, and it enables computing and communication between users, services, applications and processes.<br>
                        Anything involved in the network, from servers to wireless routers, comes together to make up a system’s network infrastructure. Network infrastructure allows for effective communication and service between users, applications, services, devices and so forth.
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
              <h3 class="box-title">Paartii Badhaadhinaa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Waa'ee Keenya</strong>

              <p class="text-muted">
               Paartiin Badhaadhinaa ........
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Teessoo</strong>

              <p class="text-muted">Magaalaa Finfinnee,Itiyoophiyaa</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>Gosoota Hogganaa</strong>

              <p>
                <span class="label label-danger">Hoggantoota Naannoo</span>
                <span class="label label-success">Hoggantoota Godina</span>
                <span class="label label-info">Hoggantoota Aanaa</span>
                </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Ethiopia</strong>

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
