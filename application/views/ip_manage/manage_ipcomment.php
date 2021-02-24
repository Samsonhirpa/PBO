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
            <h3 class="box-title"><b>Manage Users Comment Form</b></h3>

      </div>
 <a class="btn btn-primary" href="<?php echo base_url()?>structure/ipcomment">add Comment</a>
      
<!-- /.modal -->
<!-- /.box-header -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Full Name</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Subject</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">User Text</th> 
                        
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                         <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site Address</th>  -->
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Opretor</th>
                         <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th> -->  </tr>
            </thead>
            <tbody>
                  
                  <?php
                  $no = 0;
                  foreach ($this->str->getipcomment() as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->fname; ?></td>
                              <td><?php echo $row->email; ?></td>
                              <td><?php echo $row->subject; ?></td>
                               <td><?php echo $row->text; ?></td> 
                              <!-- <td><?php echo $row->site_ict; ?></td> -->
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                               <!-- <td><?php echo $row->kebele; ?></td>  -->
                              <td><?php echo $row->operator; ?></td>

                              <!-- <td>
                              <a class="btn btn-xs btn-danger" href="<?php echo base_url('structure/terminate_status/'.$row->id)?>"onclick="return confirm('Are you sure To Terminated This WoredaNet ??')"><i <?php if($row->terminate_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->terminate_status == 1 ) { ?> class="fa fa-cloud-upload"> Reject </i> <i <?php } if($row->terminate_status == 2 ) { ?> class="fa fa-thumbs-o-down"><?php } ?>Terminated</i> </a>
                  
                              </td> -->
                              
                        </tr>
                     

                  <!-- <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Edit HTP</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/Edit_htp/'.$row->id); ?>" method="post">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Date</label>
                                                                        <input type="date" value="<?php echo $row->date?>" placeholder="-- Enter Date --" name="date" class="form-control">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Types HTP</label>
                                                                        <select class="form-control" name="htptype_id">
                                                                              <?php
                                                                              foreach ($this->str->gethtptype() as $rows) {
                                                                                    ?>

                                                                                    <option value="<?php echo $rows->htp_id ?>"<?php if($rows->htp_id == $row->htp_id) { echo "Selected"; }?>><?php echo $rows->htp_name; ?></option>
                                                                              <?php } ?>
                                                                        </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Age</label>
                                                                        <select class="form-control"name="age_id">
                                                                              <?php
                                                                              foreach ($this->b->getage() as $rows) {
                                                                                    ?>

                                                                                    <option value="<?php echo $rows->ag_id ?>"<?php if($rows->ag_id == $row->ag_id){ echo "Selected"; }?>><?php echo $rows->age; ?></option>
                                                                              <?php } ?>
                                                                        </select>
                                                                  </div>


                                                                  <label for="exampleInputPassword1">Gender</label>
                                                                  <select class="form-control" name="sex" required="">
                                                                        <option value="">-- Select  --</option>
                                                                        <?php
                                                                        foreach ($this->str->getGender() as $rows) {
                                                                              ?>
                                                                              <option value="<?php echo $rows->gender_id; ?>"<?php if($row->gender_id == $row->sex){ echo "Selected"; }?>><?php echo $rows->gender_name; ?></option>
                                                                        <?php }
                                                                        ?>

                                                                  </select>
                                                                  <label for="exampleInputPassword1">Kebele</label>
                                                                  <input type="text" value="<?php echo $row->kebele;?>" name="kebele" placeholder="-- Enter Kebele" class="form-control">

                                                       <!-- <label for="exampleInputPassword1">Murtii Seera</label>
                                                <select class="form-control" name="low" required="" value="<?php echo $row->low;?>">
                                                <option value="">-- Select  --</option>
                                                <option value="Argatera">Argatera</option>
                                                <option value="Hin Arganee">Hin Arganee</option>
                                                
                                            </select>

 -->

                                                           <!--  </div>
                                                      </div>

                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save">   Update</i></button>
                                                      </div> --> 
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
