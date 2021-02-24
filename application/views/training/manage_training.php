<div class="content-wrapper">
<div class="box">
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
             <div class="box-header">
            <h3 class="box-title"><b>Add People Traind on Child Related issues</b></h3>
      </div>

      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add</i>
      </button>
      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add  People Traind on Child Related issues</h4>
                        </div>
                        <div class="modal-body">
                              <form role="form" action="<?php echo base_url('Structure/savetraining'); ?>" method="post">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-6">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                              <div class="form-group">
                                            <label for="exampleInputEmail1">Training Organizing Body</label>
                                          <input name="tob" class="form-control"   type="text" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Type of Trainig/topics</label>
                                             <input name="top" class="form-control"   type="text" required>
                                          </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Type of Trainer</label>
                                                 <select class="form-control" name="tot">
                                                <?php 
                                                foreach ($this->b->gettyprtraining() as $row) {
                                                
                                               
                                                ?>

                                                <option value="<?php echo $row->tot_id?>"><?php echo $row->tot_name;?></option>
                              <?php  } ?>
                                              </select>
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                <label for="exampleInputPassword1">Participant Male</label>
                                         <input name="male" class="form-control"  value="0" type="text" required>
                                                      </div>


                                                      <label for="exampleInputPassword1">Participant Female</label>
                                          <input name="female" class="form-control"  value="0" type="text" required>
                                                      
                                                      



                                                </div>
                                                <div class="col col-md-6">
                                                  <div class="form-group">
                                                    <h5><b>Awareness raised on child right</b></h5>
                                      <label for="exampleInputPassword1">Awareness raised topics </label>
                                             <input name="awareness" class="form-control"   type="text" required>
                                          </div>
                                            
                                                      <h5><b>children whose birth was registered</b></h5>
                                      <label for="exampleInputPassword1">No Male</label>
                                                      <input type="text" name="nomale" placeholder="-- Enter topics" class="form-control">
                                                      <label for="exampleInputPassword1">No Female</label>
                                                      <input type="text" name="nofemale" placeholder="-- Enter topics" class="form-control">

                                            <label for="exampleInputPassword1">Age</label>
                                                    <select class="form-control"name="age_id">
                                                                  <?php
                                                                  foreach ($this->b->getage() as $row) {
                                                                        ?>

                                                                        <option value="<?php echo $row->ag_id ?>"><?php echo $row->age; ?></option>
                                                                  <?php } ?>
                                                            </select>
                                                  <label for="exampleInputPassword1">Total Date of Training</label>
                                                      <input type="text" name="dot" placeholder="-- Enter topics" class="form-control">
                                                      <label for="exampleInputPassword1">Kebele</label>
                                                      <input type="text" name="kebele" placeholder="-- Enter Kebele" class="form-control">
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
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu');?></th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 90.733px;" aria-label="Browser: activate to sort column ascending">Date</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organizing Body</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Type of Trainig</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.217px;" aria-label="Engine version: activate to sort column ascending">Trainer</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Participant Male</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.217px;" aria-label="Engine version: activate to sort column ascending">Participant Female</th>
                   
 
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Operator</th>


<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach ($this->str->gettraining() as $row ) {
                    $no++;
                  ?>

                <tr role="row" class="odd">
                  <td ><?php echo $no;?></td>
                  <td><?php echo $row->date;?></td>
                  <td><?php echo $row->tob;?></td>
                  <td><?php echo $row->top;?></td>
                  <td><?php echo $row->tot_name;?></td>
                  <td><?php echo $row->male;?></td>
                  <td><?php echo $row->female; ?></td>
                  <td><?php echo $row->zname; ?></td>
                  <td><?php echo $row->woreda_name; ?></td>
                  <td><?php echo $row->kebele; ?></td>
                  <td><?php echo $row->operator; ?></td>
                  
                  <td>

                    <a class="btn  btn-xs btn-danger" href="<?php echo base_url('Structure/Delete_training/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash">Delete</i></a>
                    <a class="btn btn-xs btn-success" href="<?php echo base_url('Structure/showtraining/'.$row->id)?>"><i class="fa fa-windows">Show</i></a>
                     <!-- <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">
                              Edit
                                    </a> -->
                    


                		</td>
                	</tr>
            
            


               <?php }

                ?>
            </tbody>

               
            </table>
              </div>
      </div>



     

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
