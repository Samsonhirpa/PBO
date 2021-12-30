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
      <a href="<?php echo base_url('Structure/add_employee') ?>" class="btn btn-primary"><i class="fa fa-plus-square">Add </i></a>
      <h3 class="box-title">List Of Users</h3>


      <div class="box-body">
            <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead style="background-color: #666666; color: white">
                        <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">#</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Full Name</th> <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Username</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Password</th>
                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Role</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Zone</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Woreda</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Phone</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Status</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        $no = 0;
                        foreach ($this->str->getUser() as $row) {
                              $no++;
                              ?>
                              <tr role="row" class="odd">
                                    <td> <?php echo $no; ?></td>
                                    <td><?php echo $row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo $row->password; ?></td>
                                     <td><?php echo $row->role_name; ?></td>
                                    <td><?php echo $row->zname . ' ' . $row->zone_id; ?></td>
                                    <td><?php echo $row->woreda_name; ?></td>
                                    <td><?php echo $row->phoneno; ?></td>

                                    <td>
                                          <?php
                                          $status = $row->status;
                                          if ($status == 1) {
                                                ?>

                                                <a href="<?php echo base_url('Structure/Deacivate_user/' . $row->id) ?>" class="btn btn-success">On</a>

                                                <?php
                                          } else {
                                                ?>
                                                <a href="<?php echo base_url('Structure/Acivate_user/' . $row->id) ?>" class="btn btn-danger">Off</a>
                                          <?php }
                                          ?>
                                    </td>
                                    <td>
                                          <a class="btn btn-sm btn-danger" href="<?php echo base_url('Structure/Delete_user/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete ?')">Delete</a>

                                          <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-default<?php echo $row->id; ?>"onclick="return confirm('Are you sure To Edit ?')">Edit</a>
                                    </td>

                              </tr>

                        <div class="modal fade" id="modal-default<?php echo $row->id; ?>">
                              <form role="form" action="<?php echo base_url('Structure/Edit_User/'.$row->id); ?>" method="post">

                                    <div class="modal-dialog">
                                          <div class="modal-content">
                                                <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                      <div class="box-header with-border"style="background-color:#39CCCC">
                                                            <h3 class="box-title"><u><b>Edit User Profile <?php echo $row->first_name. ' '. $row->middle_name .' '.$row->last_name?></b></u></h3>
                                                      </div>
                                                </div>

                                                <div class="box-body">

                                                      <div class="row">
                                                            <div class="col col-md-6">

                                                                  <div class="form-group">
                                                                        <label for="exampleInputEmail1">Frist Name</label>
                                                                        <input name="fname" value="<?php echo $row->first_name ?>" class="form-control" id="exampleInputPassword1" placeholder="-- Frist Name --" type="text" required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Middle Name</label>
                                                                        <input name="middle_name" value="<?php echo $row->middle_name ?>" class="form-control" id="exampleInputPassword1" placeholder="-- Middle Name --" type="text" required>

                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Last Name</label>
                                                                        <input name="lname" value="<?php echo $row->last_name ?>" class="form-control" id="exampleInputPassword1" placeholder="-- Last Name --" type="text" required>
                                                                  </div>

                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Password</label>
                                                                        <input name="password" class="form-control" id="exampleInputPassword1" placeholder="-- Password --" type="password" required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Gender</label>
                                                                        <select class="form-control" name="sex" required="">
                                                                              <option value="">--Select Gender--</option>
                                                                              <?php
                                                                              foreach ($this->str->getGender() as $rows) {
                                                                                    ?>
                                                                              <option value="<?php echo $rows->gender_id?>"<?php if($row->gender_id== $rows->gender_id){ echo "Selected"; } ?>><?php echo $rows->gender_name;?></option>
                                                                              <?php 
                                                                                    
                                                                              }
                                                                              ?>

                                                                        </select>
                                                                  </div>
                                                            </div>
                                                            <div class="col col-md-6">
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Date Of Employeed</label>
                                                                        <input name="dob" value="<?php echo $row->dob;?>" class="form-control" id="exampleInputPassword1" placeholder="-- Date Of Employeed --" type="date" required>
                                                                  </div>

                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Phone No</label>
                                                                        <input name="phoneno" value="<?php echo $row->phoneno;?>" class="form-control" id="exampleInputPassword1" placeholder="-- Phone No --" type="text" required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Role</label>
                                                                        <select name="role"class="form-control" id="exampleInputPassword1" placeholder="Role" type="text" required>
                                                                              <?php foreach ($this->str->getRole() as $rows) { ?>
                                                                                    <option value="<?php echo $rows->role_id; ?>"<?php if($rows->role_id == $row->role_id){ echo "Selected"; }?>><?php echo $rows->role_name; ?></option>
                                                                              <?php } ?>

                                                                        </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="exampleInputPassword1">Email</label>
                                                                        <input name="email" value="<?php echo $row->email;?>" class="form-control" id="exampleInputPassword1" placeholder="-- Email --" type="email" required>
                                                                  </div>
                                                                  <div id="zoneid" style="display: none;">                                                        
                                                                  <label for="exampleInputPassword1"> Zone</label>
                                                                  <select  class="form-control" name="zone" id="zone" required>

                                                                        <?php
                                                                        foreach ($this->b->getzone() as $row1) {
                                                                              ?>

                                                                              <option value="<?php echo $row1->zid ?>"<?php
                                                                              if ($row1->zid == $row->zone_id) {
                                                                                    echo "Selected";
                                                                              }
                                                                              ?>><?php echo $row1->zname; ?></option>
                                                                                <?php } ?>
                                                                  </select>
                                                            </div>
                                                            <div id="woredaid" style="display: none;">
                                                                  <label for="exampleInputPassword1">Woreda<?php $zo = $row->zone_id; ?></label>
                                                                  <select class="form-control"name="woreda" id="woreda" required>
                                                                        <?php
                                                                        foreach ($this->str->getWoredaUser() as $row1) {
                                                                              ?>

                                                                              <option value="<?php echo $row1->woreda_id ?>"><?php echo $row1->woreda_name; ?></option>
                                                                        <?php } ?>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="modal-footer" style="background-color:#d2d6de;">
                                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-secondary"><i class="fa fa-save">   Update</i></button>
                                                </div>
                                          </div>
                                          <!-- /.modal-content -->
                                    </div>
                              </form>

                              <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->



                  <?php }
                  ?>
                  </tbody>


            </table>

      </div>
</div>
<script type="text/javascript">

      $(document).ready(function () {
            $("#zone").change(function () {
                  var zid = $("#zone").val();
                  $.ajax({
                        url: '<?php echo base_url(); ?>BDDDDOcontroller/getWoreda',
                        'method': 'post',
                        'data': {zid: zid},
                        'type': 'JSON'
                  }).done(function (woreda) {
                        console.log(woreda);
                        town = JSON.parse(woreda);
                        $("#woreda").empty();
                        town.forEach(function (woreda) {
                              $("#woreda").append('<option value=' + woreda.woreda_id + '>' + woreda.woreda_name + '</option>');
                        });
                  });
            });

      });
</script>  
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
       function level(aval) {
        if (aval == "3") {
            zoneid.style.display = 'block';
            woredaid.style.display = 'block';      
           
            $('#zoneid').attr('required', 'required');
            $('#zoneid').attr('required', 'required');
          
        } else
            if (aval == "4") {
                woredaid.style.display = 'none';
                zoneid.style.display = 'block';
               
                $('#zoneid').attr('required', 'required');
                $('#woredaid').attr('required', false);
                $('#woreda').val(null);
           }
            else {
                woredaid.style.display = 'none';
                zoneid.style.display = 'none';
                $('#zoneid').attr('required', false);
                $('#woredaid').attr('required', false);
                $('#zone').val(null); 
                $('#woreda').val(null);
               
            }

    }
</script>