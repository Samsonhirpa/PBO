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
            <h3 class="box-title"><b>Manage Carbon copy to OSTCA</b></h3>
      </div>

      

<!-- /.modal -->
<!-- /.box-header -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organization</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IP ID</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">LAN IP</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">WAN IP</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Service Number</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 120.733px;" aria-label="Browser: activate to sort column ascending">Ethiotelecom Contact</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 270.417px;" aria-label="CSS grade: activate to sort column ascending">Operator</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Control</th>
                          
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 270.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th>  </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 0;

                  foreach ($this->str->getcarboncopy1() as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->orgname; ?></td>
                              <td><?php echo $row->ipid; ?></td>
                              <td><?php echo $row->lanip; ?></td>
                              <td><?php echo $row->wanip; ?></td>
                               <td><?php echo $row->servicenumber; ?></td> 
                              <td><?php echo $row->ethiocontact; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                              <td><?php echo $row->kebele; ?></td> 
                              <td><?php echo $row->operator; ?></td>

                               <td>
                                    
                                    <a class="btn btn-xs btn-warning" href="<?php echo base_url('structure/postcarbon/'.$row->id)?>"onclick="return confirm('Are you sure to send ??')"><i <?php if($row->post_status == 0 ) { ?> class="fa fa-cloud-upload"> Appliad </i><i <?php } else { ?> class="fa fa-thumbs-o-down"><?php } ?>On Service</i> </a></td>
                                    <td>
                                    <a type="button" class="btn btn-xs btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">
                              Edit
                                    </a>
                                    <a class="btn  btn-xs btn-danger" href="<?php echo base_url('Structure/Delete_carboncopy/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash">delete</i></a>
                              </td> 
                              
                        </tr>

                   <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Edit WoredaNet Service</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/Edit_carboncopy/'.$row->id); ?>" method="post">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Date</label>
                                                                        <input type="date" value="<?php echo $row->date?>" placeholder="-- Enter Date --" name="date" class="form-control">
                                                                  </div>
                                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Name Of Organization</label>
                                                      <input type="text" name="orgname" value="<?php echo $row->orgname?>" placeholder="-- Enter Name Of Organization" class="form-control">
                                                      </div>
                                                                 <div class="form-group">
                                                            <label for="exampleInputPassword1">IP ID</label>
                                                      <input type="text" name="ipid" value="<?php echo $row->ipid?>" class="form-control">
                                                      </div> 
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">LAN IP</label>
                                                      <input type="text" name="lanip" value="<?php echo $row->lanip?>" placeholder="-- Enter LAN IP" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">WAN IP</label>
                                                      <input type="text" name="wanip" value="<?php echo $row->wanip?>" placeholder="-- Enter WAN IP" class="form-control">
                                                      </div>
                                                      
                                                      <label for="exampleInputPassword1">Service Number</label>
                                                      <input type="text" name="servicenumber" value="<?php echo $row->servicenumber?>" placeholder="-- Enter Service Number" class="form-control">

                                                      <label for="exampleInputPassword1">Ethiotelecom Contact</label>
                                                      <input type="text" name="ethiocontact" value="<?php echo $row->ethiocontact?>" placeholder="-- Enter Ethiotelecom Contact" class="form-control">

                                                      <label for="exampleInputPassword1">Site Address</label>
                                                      <input type="text" name="kebele" value="<?php echo $row->kebele?>" placeholder="-- Enter Kebele" class="form-control">

 

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
