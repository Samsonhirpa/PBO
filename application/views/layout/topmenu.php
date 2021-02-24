<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('BDDDDOcontroller/dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S&N-ICT-Solution</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">IP MANAGEMENT</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


    <div class="col col-xs-8">
  <li class="dropdown btn btn-default" style="list-style:none; margin-top: 20px;margin-right: 300px;margin-left: 135px; padding: 5px;">
     <a href="" class="dropdown-toggle"data-toggle="dropdown"><img src="<?php echo base_url('img/oro.png');?>">  Eglish     <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li class="acitve"><a href="<?php echo base_url('Language/english')?>"><img src="<?php echo base_url('img/english.png');?>">  Eglish </a></li>
        <li><a href="<?php echo base_url('Language/oromo')?>"><img src="<?php echo base_url('img/oro.png');?>"> Afaan Oromo</a></li>
        <li><a href="<?php echo base_url('Language/amharic')?>"><img src="<?php echo base_url('img/oro.png');?>"> Amharic</a></li>
      </ul>
   </li>
</div>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
     

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $this->session->userdata('username');?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                   <?php echo $this->session->userdata('username');?> - Web Developer
                  <small>you are . <?php echo $this->session->userdata('level');?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              
              <!-- Menu Footer-->
               
  
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('structure/profile/'.$this->session->userdata('username'))?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                
                <div class="pull-right">
                  <a href="<?php echo base_url('structure/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>

              
 
            </ul>
          </li>
          <!--g Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>