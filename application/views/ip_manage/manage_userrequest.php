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
            <h3 class="box-title"><b>Request Send Form</b></h3>
      </div>

      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add Request</i>
      </button>
      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Request</h4>
                        </div>
                        <div class="modal-body">
                           <form action="<?php echo base_url('Structure/File_upload') ?>" method="Post" enctype="multipart/form-data">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-12">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="exampleInputPassword1">Name Of Organization</label>
                                                      <input type="text" name="orgname" placeholder="-- Enter Name Of Organization" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Type of Request</label>
                                                      <input type="text" name="torequest" placeholder="-- Enter Request" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Request Description</label>
                                                      <input type="text" name="reqdesc" placeholder="-- Enter Description" class="form-control">
                                                      </div>
                                                      
                                                      <label for="exampleInputPassword1">Site Address</label>
                                                      <input type="text" name="kebele" placeholder="-- Enter Site Name" class="form-control">

                                                  <div class="form-group">
                                                
                                                <div class="btn btn-default btn-file">
                                                      <i class="fa fa-paperclip"></i> letter Attachment
                                                      <input type="file" name="attachment">
                                                </div>
                                                <p class="help-block">Max. 32MB</p>
                                          </div>
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
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">No</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organization</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Type of Request</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Description</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Document </th>

                        <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Gender</th> -->
                        <!--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Region</th>-->
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site Address</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Opretor</th>
                         
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">Status</th></tr>
                       
            </thead>
            <tbody>
                  <?php
                  $no = 0;

                  foreach ($this->str->getuserrequest($this->session->userdata('username')) as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->orgname; ?></td>
                              <td><?php echo $row->torequest; ?></td>
                              <td><?php echo $row->reqdesc; ?></td>
                              <!-- <td><?php echo $row->gender_name; ?></td> -->
                              <!--<td><?php echo $row->r_name; ?></td>-->
                                <td><?php echo $row->file_name; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                              <td><?php echo $row->kebele; ?></td>
                              <td><?php echo $row->operator; ?></td>

                              <td>
                                  <a href="<?php echo base_url('Structure/download/'.$row->id)?>" class="btn btn-xs btn-primary"><i class="fa fa-download"></i></a>
                                     <a type="button" class="btn btn-xs btn-success"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-xs btn-danger" href="<?php echo base_url('Structure/Deleterequest/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash"></i></a>

                                 </td>
                                 <td>
                                    <a class="btn btn-xs btn-warning"><i <?php if($row->requst_status1 == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->requst_status1 == 1 ) { ?> class="fa fa-cloud-upload"> Reject </i> <i <?php } if($row->requst_status1 == 2 ) { ?> class="fa fa-thumbs-o-down"><?php } ?>Approved</i> </a>
                                   
                              </td>
                               
                              

                        </tr>

                                         <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header" style="background: green;">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Edit Request</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/Edit_request/'.$row->id); ?>" method="Post" enctype="multipart/form-data">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Date</label>
                                                                        <input type="date" value="<?php echo $row->date?>"  name="date" class="form-control">
                                                                  </div>
                                                                    <div class="form-group">
                                                      <label for="exampleInputPassword1">Name Of Organization</label>
                                                      <input type="text" name="orgname" value="<?php echo $row->orgname?>" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Type of Request</label>
                                                      <input type="text" name="torequest" value="<?php echo $row->torequest?>" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Request Description</label>
                                                      <input type="text" name="reqdesc" value="<?php echo $row->reqdesc?>" class="form-control">
                                                      </div>
                                                      
                                                      <label for="exampleInputPassword1">Site Address</label>
                                                      <input type="text" name="kebele" value="<?php echo $row->kebele?>"class="form-control">

                                                  <div class="form-group">
                                                
                                                <div class="btn btn-default btn-file">
                                                      <i class="fa fa-paperclip"></i> letter Attachment
                                                      <input type="file" name="attachment">
                                                </div>
                                                <p class="help-block">Max. 32MB</p>
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
                     url:"<?php echo base_url(); ?>main/check_terminateid_avalibility",  
                     method:"POST",  
                     data:{ipid:ipid},  
                     success:function(data){  
                          $('#carbonid_result').html(data);  
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
                     url:"<?php echo base_url(); ?>main/check_terminatelan_avalibility",  
                     method:"POST",  
                     data:{lanip:lanip},  
                     success:function(data){  
                          $('#carbonlan_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  
