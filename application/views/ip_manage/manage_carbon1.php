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
            <h3 class="box-title"><b>Carbon copy to OSTCA Management Form</b></h3>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">LAN IP</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">WAN IP</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Service Number</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 120.733px;" aria-label="Browser: activate to sort column ascending">Ethiotelecom Contact</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.733px;" aria-label="Browser: activate to sort column ascending">Opretor</th>
                         <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 270.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th> -->  </tr>
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
                              <td><?php echo $row->lanip; ?></td>
                              <td><?php echo $row->wanip; ?></td>
                               <td><?php echo $row->servicenumber; ?></td> 
                              <td><?php echo $row->ethiocontact; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->woreda_name; ?></td>
                              <td><?php echo $row->kebele; ?></td> 
                              <td><?php echo $row->operator; ?></td>

                               <!-- <td>
                                    
                                    <a class="btn btn-xs btn-warning" href="<?php echo base_url('structure/postcarbon/'.$row->id)?>"onclick="return confirm('Are you sure to send ??')"><i <?php if($row->post_status == 0 ) { ?> class="fa fa-cloud-upload"> Appliad </i><i <?php } else { ?> class="fa fa-thumbs-o-down"><?php } ?>On Service</i> </a>
                                    <a type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-defaultedit<?php echo $row->id ?>">
                              Edit
                                    </a>
                                    <a class="btn  btn-xs btn-danger" href="<?php echo base_url('Structure/Delete_carboncopy/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash"></i></a>
                              </td>  -->
                              
                        </tr>

                   
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
