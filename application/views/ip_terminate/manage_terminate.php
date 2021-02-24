<div class="content-wrapper">
      <div class="box">
            <div class="row">
                  <div class="col col-md-12">
                        <?php
                        if ($this->session->flashdata('success_msg')) {
                              ?>
                              <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                              </div>
                              <?php
                        }
                        if ($this->session->flashdata('error_msg')) {
                              ?>
                              <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                              </div>
                              <?php
                        }
                        ?>
                  </div>
            </div>

      </div>
      <div class="box-header">
            <h3 class="box-title"><b>WoredaNet Service Terminate Form</b></h3>
      </div>

      
<!-- /.modal -->
<!-- /.box-header -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Ref No</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">WoredaNet Service Type</th>
                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">IP ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site LAN IP</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Service Number</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site ICT Contact</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site Address</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Opretor</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th>  </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 0;
                  foreach ($this->str->getterminate1() as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->refno; ?></td>
                              <td><?php echo $row->service_type; ?></td>
                              <td><?php echo $row->ipid; ?></td>
                              
                              <td><?php echo $row->lanip; ?></td>
                               <td><?php echo $row->servicenumber; ?></td> 
                              <td><?php echo $row->site_ict; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                               <td><?php echo $row->kebele; ?></td> 
                              <td><?php echo $row->operator; ?></td>

                              <td>
                              <a class="btn btn-xs btn-danger" href="<?php echo base_url('structure/terminate_status/'.$row->id)?>"onclick="return confirm('Are you sure To Terminated This WoredaNet ??')"><i <?php if($row->terminate_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->terminate_status == 1 ) { ?> class="fa fa-cloud-upload"> Reject </i> <i <?php } if($row->terminate_status == 2 ) { ?> class="fa fa-thumbs-o-down"><?php } ?>Terminated</i> </a>
                  
 <a type="button" class="btn btn-xs btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">Make FreeIP</a>

                              </td>
                              
                        </tr>

                                   <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Are you sure to send to Free Ip</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/free_status/'.$row->id); ?>" method="post">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Date</label>
                                                                        <input type="date" value="<?php echo $row->date?>" placeholder="-- Enter Date --" name="date" class="form-control">
                                                                  </div>
                                                                  
                                                                  
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">IP ID</label>
                                                      <input type="text" name="ipid" value="<?php echo $row->ipid?>" id="ipid" readonly class="form-control">
                                                       <span id="email_result"></span> 
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">LAN IP </label>
                                                      <input type="text" id="ipid" readonly name="lanip" value="<?php echo $row->lanip?>" class="form-control">
                                                       <span id="lanip_result"></span> 
                                                      </div>
                                                      </div>
                                      <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-save">  Send</i></button>
                          </div>
                                                      
                                          </form>
                                    </div>
                                    <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                        </div>
                  </div>
      </div>    

                 
      <!-- /.modal -->

<?php }
?>


</tbody>

<!--<tfoot>
      <tr>
            <th colspan="3">Total</th>
            <th id=""><?php echo $row->sex; ?></th>
      </tr>
</tfoot>-->
</table>
</div>
</div>

<script>
      $(document).ready(function () {
            $('#example').DataTable({
                  dom: 'lBfrtip',
                  buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                  ]
            });
      });
</script>
<script>  
 $(document).ready(function(){  
      $('#ipid').change(function(){  
           var ipid = $('#ipid').val();  
           if(ipid != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/check_email_avalibility",  
                     method:"POST",  
                     data:{ipid:ipid},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  


<script>  
 $(document).ready(function(){  
      $('#lanip').change(function(){  
           var lanip = $('#lanip').val();  
           if(lanip != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/check_lanip_avalibility",  
                     method:"POST",  
                     data:{lanip:lanip},  
                     success:function(data){  
                          $('#lanip_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  

