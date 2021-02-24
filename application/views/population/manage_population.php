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
            <h3 class="box-title"><b>Total Population</b></h3>
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
                              <h4 class="modal-title">Add Total Population</h4>
                        </div>
                        <div class="modal-body">
                              <form role="form" action="<?php echo base_url('Structure/Save_population'); ?>" method="post">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-12">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                      
                                                      <div class="form-group">
                                                <label for="exampleInputPassword1">Number of Male</label>
                                            <input name="male" class="form-control"  value="0" type="text" required>
                                                      </div>
                                                    <label for="exampleInputPassword1">Number of Female</label>
                                          <input name="female" class="form-control"  value="0" type="text" required>
                                                      <label for="exampleInputPassword1">Total Population</label>
                                                      <input type="text" name="totpopulation" value="0" class="form-control">
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Male</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.217px;" aria-label="Engine version: activate to sort column ascending">Female</th>
                   
 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.733px;" aria-label="Browser: activate to sort column ascending">Total Population</th>
 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.733px;" aria-label="Browser: activate to sort column ascending">Zone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.733px;" aria-label="Browser: activate to sort column ascending">Operator</th>
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 120.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach ($this->str->getpopulation() as $row ) {
                    $no++;
                  ?>
                <tr role="row" class="odd">
                  <td ><?php echo $no;?></td>
                  <td><?php echo $row->date;?></td>
                  <td><?php echo $row->male;?></td>
                  <td><?php echo $row->female;?></td>
                  <td><?php echo $row->totpopulation;?></td>
                  <td><?php echo $row->zname; ?></td>
                  <td><?php echo $row->woreda_name; ?></td>
                  <td><?php echo $row->kebele; ?></td>
                  <td><?php echo $row->operator; ?></td>
                  
                  <td>

                    <a class="btn  btn-xs btn-danger" href="<?php echo base_url('Structure/Delete_population/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash">Delete</i></a>
                     <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">
                              Edit
                                    </a>
                    


                		</td>
                	</tr>
              
          <div class="modal fade" id="modal-defaultedit<?php echo $row->id ?>">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">Edit Total Population</h4>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Structure/Edit_population/'.$row->id); ?>" method="post">
                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-12">

                            <div class="form-group">
                                  <label for="exampleInputEmail1">Date</label>
                                  <input type="date" value="<?php echo $row->date?>" placeholder="-- Enter Date --" name="date" class="form-control">
                            </div>
                        
                                      <div class="form-group">
                                             <label for="exampleInputPassword1">Male</label>
                                         <input name="male" class="form-control"  value="<?php echo $row->male;?>" type="text" required>
                                      </div>


                                             <label for="exampleInputPassword1">Female</label>
                <input name="female" class="form-control"  value="<?php echo $row->female;?>" type="text" required class="form-control">
                                        
                                        <label for="exampleInputPassword1">Total Population</label>
                     <input type="text" name="totpopulation" value="<?php echo $row->totpopulation;?>" class="form-control" required>
                                      
                                      <label for="exampleInputPassword1">Kebele</label>
                                      <input type="text" value="<?php echo $row->kebele;?>" name="kebele" placeholder="-- Enter Kebele" class="form-control">



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


               <?php }

                ?>
            </tbody>

               
            </table>
              </div>
      </div>




<script  type="text/javascript" src ="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e)
{
  $("input").change(function()
  {
    var total=0;

    $("input[name=male]").each(function(){
      total=total+parseInt($(this).val());
    })
    //var total1=0;
    $("input[name=female]").each(function(){
      total=total+parseInt($(this).val());
    })
    $("input[name=totpopulation]").val(total);
  })
}
      )
  </script>
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
