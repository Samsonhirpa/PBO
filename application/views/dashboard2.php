<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- <section class="content-header">
      <h1>
        Widgets
        <small>Preview page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Widgets</li>
      </ol>
    </section> -->

    <section class="content">
      <!-- Small boxes (Stat box) -->
       

      <!-- =========================================================== -->

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user-plus"> </i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Population</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                
                  <button type="button" class="btn btn-default">  <a href="<?php echo base_url() ?>Structure/manage_population">Click to View</a></button>
                  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-folder-open-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Research</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <button type="button" class="btn btn-default">  <a href="<?php echo base_url() ?>Structure/manage_event">Click to View</a></button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Events</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <button type="button" class="btn btn-default">  <a href="<?php echo base_url() ?>Structure/manage_population">Click to View</a></button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-folder-open-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">All Report</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <button type="button" class="btn btn-default">  <a href="<?php echo base_url() ?>Report/AllReport_info">Click to View</a></button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
      <!-- Main row -->
      
          <!-- /.nav-tabs-custom -->

         <div class="row">
        <div class="col-md-9">
        <!-- <section class="col-lg-7 connectedSortable"> --> 
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
              <li class="pull-left header"><img style="height: 100px;" src="<?php echo base_url();?>dist/img/oromia women.png" class="img-circle" alt="User Image"><b><i>Biiroo Dhimma Dubartootaa, Daa'immanii fi Dargaggoota Oromiyaa</i></b><img style="height: 100px;" src="<?php echo base_url();?>dist/img/oro logo.png" class="img-circle" alt="User Image"></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div> -->
            </div>
            </div>
         
         <!-- </section> -->
          </div>
        </div> 
            
            
                
        

        </section>
</div>