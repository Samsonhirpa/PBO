 <div class="content-wrapper">
<div class="page-content">
  

<div class="container-fluid">
      <h3 class="box-title"><i class="fa fa-plus-square">Odeeffannoo Hoggantootaa </i></h3>


<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><a href="<?php echo base_url('Structure/empaddcabines2') ?>" class="btn btn-primary"><i class="fa fa-plus-square">Odeeffannoo Haaraa Dabalii  </i></a></h3>
          </div>
          <div class="box-body">
           

 <div class="row">
                  <div class="col col-md-12">
                    <?php
                        if($this->session->flashdata('success_msg'))
                        {
                          ?>
                          <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success_msg');?>
                          </div>
                          <?php
                        }
                        if($this->session->flashdata('error_msg'))
                        {
                          ?>
                          <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error_msg');?>
                          </div>
                          <?php
                        }
                    ?>
                  </div>
                </div>


   
  </div>
      <div class="row">
        <div class="col-md-12">
          <div class="overview-wrap">
            
          
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive table--no-card m-b-30">


 
<div class="box-body">


      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead  class="thead-success">
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">NO</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Maqaa Guutuu</th>
                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organization</th> -->
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Muudama</th>
                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Sektara</th>
                    
                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Muuxannoo</th>
<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Gosa Barnoota</th>

                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Godina</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Aanaa</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Haala</th>
                        <!--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Suuraa</th>
 -->
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th>  </tr>
            </thead>


                 <tbody>
                  <?php
                  $no = 0;

foreach ($this->str->getempcabineprofile2($this->session->userdata('username')) as $row ) {
                        $no++;
                        ?>

                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->maqa; ?></td>
                               <td><?php echo $row->t_name ; ?></td> 
                              <td><?php echo $row->s_name ; ?></td> 
                              <td><?php echo $row->years_name ; ?></td> 
                              <td><?php echo $row->sd_name ; ?></td> 
                               <td><?php echo $row->zname; ?></td>
                                    <td><?php echo $row->woreda_name; ?></td>
                              <td>
                                
                                    <a class="btn btn-xs alert-success"  ><i <?php if($row->requst_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->requst_status == 1 ) { ?> class="fa fa-cloud-upload"> Reject </i> <i <?php } if($row->requst_status == 2 ) { ?> class="fa fa-thumbs-o-up"><?php } ?>Approved</i> </a>


                              </td>
                             <td>
                    <a class="btn btn-sm btn-info"href="<?php echo base_url('Structure/empeditcabine2/'.$row->c_id)?>"><i class="fa fa-wrench"></i></a>
                 <a class="btn btn-sm btn-success" href="<?php echo base_url('Structure/profileinfo/'.$row->c_id)?>"><i class="fa fa-windows"></i></a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('Structure/deletecabineprofile2/'.$row->c_id)?>"onclick="return confirm('Are you sure To Delete This Information ??')"><i class="fa fa-trash"></i></a>
                    


                    </td>

                               <?php }

                ?>
                              
                   </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 
<script type="text/javascript">
         $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
     </script>

 