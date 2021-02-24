
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <section class="content">

 <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"style ="font-size:40px; text-decoration: underline;"></style><?php echo $region->r_name;?></h3>
              
                <a class="btn btn-primary pull-right" href="<?php echo base_url('index.php/marketcontroller/manageregion');?>">Back List</a>
                <a class="btn btn-primary pull-right" href="<?php echo base_url('marketcontroller/dashboard')?>"><i class="fa fa-home"></i></a>
                <a href="<?php echo base_url('marketcontroller/report/'.$region->id)?>"" class="btn btn-success pull-right"><i class="fa  fa-file-pdf-o"> PDF</i></a>
                <a href="#" class="btn btn-warning pull-right"><i class="fa   fa-file-excel-o">Ecxel</i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody style="font-family: serif;">
                <tr>
                  <th style="width: 200px">ID</th>
                  <td><?php echo $region->id;?></td>
                </tr>
                <tr>
                  <th style="width: 100px">Region name</th>
                  <td><?php echo $region->r_name;?></td>                  
                </tr>
                <tr>
                  <th style="width: 100px">description</th>
                  <td><?php echo $region->description;?></td>
                </tr>        
              </tbody></table>
            </div>

          </div>

        </div>
        
         

    </section>

 
  </div>
      <!-- /.row -->
</section> 