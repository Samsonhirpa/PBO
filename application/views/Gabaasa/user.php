<div class="content-wrapper">
     <div class="box-body">
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
      <div class="container-fluid">
      <h3 class="box-title"><i class="fa fa-reorder">Ogeessota Siistema </i></h3>

<div class="box box-default">

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

                                    
                              </tr>

                  <?php }
                  ?>
                  </tbody>


            </table>
</div>
</div>
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