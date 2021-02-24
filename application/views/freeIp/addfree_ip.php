 <!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
 </head>  
 <body>  
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
            <h3 class="box-title"><b>Free Ip Address on OSTCA DataBase</b></h3>
      </div>

      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add Free Ip</i>
      </button>
      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Free Ip</h4>
                        </div>
                        <div class="modal-body">
                              <form role="form" action="<?php echo base_url('Structure/save_freeip'); ?>" method="post">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-12">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                      <!-- <div class="form-group">
                                                      <label for="exampleInputPassword1">Name Of Organization</label>
                                                      <input type="text" name="orgname" placeholder="-- Enter Name Of Organization" class="form-control">
                                                      </div> -->
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">IP id</label>
                                                      <input type="text" id="ipid" name="ipid" placeholder="-- Enter IP ID" class="form-control" required="">
                                                       <span id="email_result"></span> 
                                                      </div>
<div class="form-group">
                                                            <label for="exampleInputPassword1">LAN IP</label>
                                                      <input type="text" id="lanip" name="lanip" placeholder="-- Enter LAN IP" class="form-control">
                                                      <span id="lanip_result"></span>
                                                      </div>

                                                      <!-- <div class="form-group">
                                                            <label for="exampleInputPassword1">WAN IP</label>
                                                      <input type="text" name="wanip" placeholder="-- Enter WAN IP" class="form-control">
                                                      </div>
                                                      
                                                      <label for="exampleInputPassword1">Service Number</label>
                                                      <input type="text" name="servicenumber" placeholder="-- Enter Service Number" class="form-control"> -->

                                                      <!-- <label for="exampleInputPassword1">Ethiotelecom Contact</label>
                                                      <input type="text" name="ethiocontact" placeholder="-- Enter Ethiotelecom Contact" class="form-control">

                                                      <label for="exampleInputPassword1">Site Address</label>
                                                      <input type="text" name="kebele" placeholder="-- Enter Kebele" class="form-control"> -->


                                                      <!-- <label for="exampleInputPassword1">Murtii Seera</label>
                                                <select class="form-control" name="low" required="">
                                                <option value="">-- Select  --</option>
                                                <option value="Argatera">Argatera</option>
                                                <option value="Hin Arganee">Hin Arganee</option>
                                                
                                            </select>
 -->


                                                </div>
                                          </div>

                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-save">   Save</i></button>
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
<!-- /.box-header -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead  class="thead-success">
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organization</th> -->
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IP ID</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">LAN IP</th> <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">IP Status</th>

                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th>  </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 0;
                  foreach ($this->str->getfreeip() as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->ipid; ?></td>
                              <td><?php echo $row->lanip; ?></td>
                             <td>
                                    <a class="btn btn-xs btn-warning" href="<?php echo base_url('structure/ip_status/'.$row->id)?>"onclick="return confirm('Is this IP ready to be used?')"><i <?php if($row->free_status == 0 ) { ?> class="fa fa-cloud-upload"> Free IP </i> <i <?php } if($row->free_status == 1 ) { ?> class="fa fa-cloud-upload"> Free IP </i> <i <?php } if($row->free_status == 2 ) { ?> class="fa fa-thumbs-o-up"><?php } ?>On Service</i> </a>
                  
                              </td>

                               <td>
                                    <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">
                              Edit
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo base_url('Structure/Delete_freeip/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash"></i> Delete </a>
                              </td> 
                              
                        </tr>

                  <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Edit Free Ip</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/Edit_freeip/'.$row->id); ?>" method="post">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Date</label>
                                                                        <input type="date" value="<?php echo $row->date?>" placeholder="-- Enter Date --" name="date" class="form-control">
                                                                  </div>
                                                                  
                                                                  
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">IP ID</label>
                                                      <input type="text" name="ipid" value="<?php echo $row->ipid?>" placeholder="-- Enter  IP ID" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">LAN IP </label>
                                                      <input type="text" name="lanip" value="<?php echo $row->lanip?>" placeholder="-- Enter LAN IP" class="form-control">
                                                      </div>
                                                      </div>
                                      <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-save">   Update</i></button>
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
