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
            <h3 class="box-title"><b>WoredaNet Service to Migrate Form</b></h3>
      </div>

      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add Migrate Service</i>
      </button>
      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add WoredaNet Service Migrate Form</h4>
                        </div>
                        <div class="modal-body">
                              <form role="form" action="<?php echo base_url('Structure/save_migrate'); ?>" method="post">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-12">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Movement Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Ref No:-</label>
                                                      <input type="text" name="refno" placeholder="-- Enter Ref No" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Site Current Names</label>
                                                      <input type="text" name="sitecurrent" placeholder="-- Enter Site Current Names" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Site to move Names</label>
                                                      <input type="text" name="sitetomove" placeholder="-- Enter Site to move Names" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="exampleInputPassword1">WoredaNet Service Type </label>
                                                  <select class="form-control" name="service_type" required="">
                                                <option value="">-- Select  --</option>
                                                <option value="Optical Fiber">Optical Fiber</option>
                                                <option value="ADSL">ADSL</option>
                                                <option value="VSAT">VSAT</option>
                                                <option value="CDMA/E-Video">CDMA/E-Video</option>
                                                <option value="Public">Public</option>
                                                
                                            </select>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">IP id</label>
                                                      <input type="text" id="ipid" name="ipid" placeholder="-- Enter IP ID" class="form-control" required="">
                                                       <span id="email_result"></span> 
                                                      </div>
                                                      <label for="exampleInputPassword1">Site LAN IP Address </label>
                                                      <input type="text" name="lanip" placeholder="-- Enter LAN IP Address -- " class="form-control">

                                                      <label for="exampleInputPassword1">Service Number</label>
                                                      <input type="text" name="servicenumber" placeholder="-- Enter Service Number" class="form-control">

                                                      <label for="exampleInputPassword1">Site ICT Contact Persons </label>
                                                      <input type="text" name="site_ict" placeholder="-- Enter ICT Contact Persons" class="form-control">

                                                      <!-- <label for="exampleInputPassword1">Kebele</label>
                                                      <input type="text" name="kebele" placeholder="-- Enter Kebele" class="form-control">
 -->

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
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Ref No</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Site Current Address</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Site Moved Address</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">WoredaNet Service Type</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">IP ID</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site LAN IP</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Service Number</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site ICT Contact</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th> -->
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Opretor</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th> </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 0;

                  foreach ($this->str->getmigrate($this->session->userdata('username')) as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->refno; ?></td>
                              <td><?php echo $row->sitecurrent; ?></td>
                              <td><?php echo $row->sitetomove; ?></td>
                              <td><?php echo $row->service_type; ?></td>
                              <td><?php echo $row->ipid; ?></td>
                              <td><?php echo $row->lanip; ?></td>
                               <td><?php echo $row->servicenumber; ?></td> 
                              <td><?php echo $row->site_ict; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                              <!-- <td><?php echo $row->kebele; ?></td> --> 
                              <td><?php echo $row->operator; ?></td>

                              <td>
                                    <a class="btn btn-xs btn-warning"  ><i <?php if($row->post_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->post_status == 1 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->post_status == 2 ) { ?> class="fa fa-thumbs-o-up"><?php } ?>Approved</i> </a>
                              </td> 
                              
                        </tr>

                 
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
