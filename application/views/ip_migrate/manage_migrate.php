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
                  foreach ($this->str->getmigrate1() as $row ) {
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
                                    <a class="btn btn-xs btn-warning" href="<?php echo base_url('structure/post_status/'.$row->id)?>"onclick="return confirm('Are you sure To Approve This Request ??')"><i <?php if($row->post_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->post_status == 1 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->post_status == 2 ) { ?> class="fa fa-thumbs-o-up"><?php } ?>Approved</i> </a>
                  
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
