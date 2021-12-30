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
      </div>
      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add</i>
      </button>
      <h3 class="box-title">List Of Kebele</h3>

      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Kebele</h4>
                        </div>
                        <div class="modal-body">
                              <form action="<?php echo base_url('Structure/Add_kebele') ?>"method="post">
                                    
                                    <label>Woreda Name</label><br>
                                    <select class="form-control" name="wid">
                                          <?php foreach ($this->str->getWoreda() as $row) { ?>
                                    <option value="<?php echo $row->woreda_id; ?>"><?php echo $row->woreda_name; ?></option>
                                          <?php } ?>
                                    </select>
                                    <br>
                                    <label>Kebele Name</label><br>
                                    <input class="form-control input-lg" type="text" name="woreda_name" placeholder="Woreda Name">

                                    <br>
                                    <label>Kebele Code</label><br>
                                    <input class="form-control input-lg" type="text" name="woreda_code" placeholder="Woreda Code">

                                    <br>
                                    
                                    <label>Description</label><br>
                                    <input class="form-control input-lg" type="text" name="woreda_description" placeholder="Description">
                                    <!--<br>-->


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
            <!-- /.modal -->
            <div class="box-body">
                  <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead style="background-color: #666666; color: white">
                              <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Zone Name</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Woreda Name</th>


                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Woreda Code</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                        </thead>
                        <tbody>
                              <?php
                              $no = 0;
                              foreach ($this->str->getWoreda() as $row) {
                                    $no++;
                                    ?>
                                    <tr role="row" class="odd">
                                          <td> <?php echo $no; ?></td>
                                          <td><?php echo $row->zname; ?></td>
                                          <td><?php echo $row->woreda_name; ?></td>
                                          <td><?php echo $row->woreda_code; ?></td>
                                          <td>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('Structure/Delete_Woreda/' . $row->woreda_id) ?>"onclick="return confirm('Are you sure To Delete ?')">Delete</a>

                                                <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-default<?php echo $row->woreda_id; ?>"onclick="return confirm('Are you sure To Edit ?')">Edit</a>
                                          </td>
                                    </tr>
                              <div class="modal fade" id="modal-default<?php echo $row->woreda_id; ?>">
                                    <div class="modal-dialog">
                                          <div class="modal-content">
                                                <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                      <h4 class="modal-title">Edit Woreda</h4>
                                                </div>
                                                <div class="modal-body">
                                                      <form action="<?php echo base_url('Structure/Edit_Woreda/' . $row->woreda_id) ?>"method="post">
                                                            <label>Zone Name</label><br>
                                                            <select class="form-control" name="zone_ids">
                                                                  <?php foreach ($this->str->getZone() as $rows) { ?>
                                                                        <option value="<?php echo $rows->zid; ?>"<?php
                                                                        if ($rows->zid == $row->zone_id_woreda) {
                                                                              echo "Selected";
                                                                        }
                                                                        ?>><?php echo $rows->zname; ?></option>
                                                                          <?php } ?>
                                                            </select>
                                                            <br>
                                                            <label>Woreda Name</label><br>
                                                            <input class="form-control input-lg" type="text" value="<?php echo $row->woreda_name; ?>" name="woreda_name" placeholder="Zone Code">

                                                            <br>
                                                            
                                                            <label>Kebele Name</label><br>
                                                            <input class="form-control input-lg" type="text" value="<?php echo $row->woreda_code; ?>" name="woreda_code" placeholder="Woreda Code">

                                                            <br>
                                                            <label>Description</label><br>
                                                            <input class="form-control input-lg" value="<?php echo $row->woreda_description; ?>" type="text" name="woreda_description" placeholder="Description">
                                                            <!--<br>-->


                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-secondary"><i class="fa fa-save">   Update</i></button>
                                                            </div>
                                                      </form>
                                                </div>
                                                <!-- /.modal-content -->
                                          </div>
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
                  alert(zid);
                  $.ajax({
                        url: '<?php echo base_url(); ?>BDDDDOcontroller/getWoreda',
                        'method': 'post',
                        'data': {zid: zid},
                        'type': 'JSON'
                  }).done(function (woreda) {
                        console.log(woreda);
                        woreda = JSON.parse(woreda);
                        $("#woreda").empty();
                        woreda.forEach(function (woreda) {
                              $("#woreda").append('<option value=' + woreda.woreda_id + '>' + woreda.woreda_name + '</option>');
                        })
                  })
            })

            $("#town").change(function () {
                  var tid = $("#town").val();
                  $.ajax({
                        url: '<?php echo base_url(); ?>BDDDDOcontroller/getkebele',
                        'method': 'post',
                        'data': {tid: tid},
                        'type': 'JSON'
                  }).done(function (town) {
                        console.log(town);
                        town = JSON.parse(town);
                        $("#kebele").empty();
                        town.forEach(function (town) {
                              $("#kebele").append('<option value=' + town.kid + '">' + town.kname + '</option>');
                        })
                  })
            })
      })
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
