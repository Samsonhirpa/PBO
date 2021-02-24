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
            <h3 class="box-title"><b>Migrate Request Letter from OSTICA to Ethio-telecom </b></h3>
      </div>

      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add Letters</i>
      </button>
      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Letters Basic Content ATSTQO- telecom Form</h4>
                        </div>
                        <div class="modal-body">
                              <form role="form" action="<?php echo base_url('Structure/save_mletter'); ?>" method="post">
                                    <div class="box-body">

                                          <div class="row">
                                                <div class="col col-md-12">

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Letter Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                       <label for="exampleInputPassword1">Organization that needs Service</label>
                                                      <input type="text" name="organization" placeholder="-- Enter Organization Name" class="form-control">

                                                      <div class="form-group">
                                                      <label for="exampleInputPassword1">Old WoredaNet Service Type </label>
                                                  <select class="form-control" name="oldservice_type" required="">
                                                <option value="">-- Select  --</option>
                                                <option value="Optical Fiber">Optical Fiber</option>
                                                <option value="ADSL">ADSL</option>
                                                <option value="VSAT">VSAT</option>
                                                <option value="CDMA/E-Video">CDMA/E-Video</option>
                                                <option value="Public">Public</option>
                                                
                                            </select>
                                                      </div>

                                           <label for="exampleInputPassword1">Site LAN IP Address </label>
                                                      <input type="text" name="lanip" placeholder="-- Enter LAN IP Address -- " class="form-control">

                                           <!-- <label for="exampleInputPassword1">LANIP Id  </label>
                                                      <input type="text" name="lanip" placeholder="-- Enter LAN IP Address -- " class="form-control">
 -->
                                          <div class="form-group">
                                                            <label for="exampleInputEmail1">Service Number</label>
                                                            <input type="text" placeholder="-- Enter service number --" name="servicenumber" class="form-control">
                                                      </div>

                                           <div class="form-group">
                                                      <label for="exampleInputPassword1">New WoredaNet Service Type </label>
                                                  <select class="form-control" name="newservice_type" required="">
                                                <option value="">-- Select  --</option>
                                                <option value="Optical Fiber">Optical Fiber</option>
                                                <option value="ADSL">ADSL</option>
                                                <option value="VSAT">VSAT</option>
                                                <option value="CDMA/E-Video">CDMA/E-Video</option>
                                                <option value="Public">Public</option>
                                                
                                            </select>
                                                      </div>

                                          <div class="form-group">
                                          <label for="exampleInputPassword1">Band Width </label>
                                                <select class="form-control" name="band_width" required="">
                                                <option value="">-- Select  --</option>
                                                <option value="1mb">1mb</option>
                                                <option value="2mb">2mb</option>
                                                <option value="5mb">5mb</option>
                                                <option value="100mb">100mb</option>
                                                    
                                         </select>
                                                      </div>

                                                      <div class="form-group">
                                                            <label for="exampleInputEmail1">Zone</label>
                                                            <input type="text" placeholder="-- Enter Zone --" name="zname" class="form-control">
                                                      </div>
                                                     
                                                       
                                                      <div class="form-group">
                                                      <label for="exampleInputPassword1">Woreda</label>
                                                      <input type="text" name="wname" placeholder="-- Enter Woreda" class="form-control">
                                                      </div>
                                                     <!--  <label for="exampleInputPassword1">Kebele</label>
                                                      <input type="text" name="kebele" placeholder="-- Enter Site Address" class="form-control">
                                                     
                                                      -->
                                                      

                                                     

                                                     <!--  <label for="exampleInputPassword1">Service Number</label>
                                                      <input type="text" name="servicenumber" placeholder="-- Enter Service Number" class="form-control"> -->

                                                      <label for="exampleInputPassword1">OSTCA  Contact Persons Name</label>
                                                      <input type="text" name="osticafinance" placeholder="-- Enter Full Name" class="form-control">
                                                      <label for="exampleInputPassword1">OSTCA  Contact Phone Number</label>
                                                      <input type="text" name="osticaphone" placeholder="-- Enter Phone Number" class="form-control">

                                                      <label for="exampleInputPassword1">Site ICT Contact Persons Name </label>
                                                      <input type="text" name="site_ict" placeholder="-- Enter ICT Contact Persons" class="form-control">

                                                      <label for="exampleInputPassword1">Site ICT Contact Persons Phone Number </label>
                                                      <input type="text" name="sitephone" placeholder="-- Enter Phone  Number" class="form-control">

                                                       
 

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
                             </div></div></form></div></div></div></div>
<!-- /.modal -->
<!-- /.box-header -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                  <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Organization</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Old WoredaNet Service Type</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">New WoredaNet Service Type</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Band Width</th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site LAN IP</th>
 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Service Number</th>

                       
                        
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site ICT Contact</th>
                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Site Phone</th> 
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180.733px;" aria-label="Browser: activate to sort column ascending">Action</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th> -->  </tr>
            </thead>
            <tbody>
                  <?php
                  $no = 0;

                  foreach ($this->str->getmletter() as $row ) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->date; ?></td>
                              <td><?php echo $row->organization; ?></td>
                              <td><?php echo $row->oldservice_type; ?></td>
                              <td><?php echo $row->newservice_type; ?></td>
                              <td><?php echo $row->band_width; ?></td>
                              <td><?php echo $row->lanip; ?></td>
                              <td><?php echo $row->servicenumber; ?></td>
                              <td><?php echo $row->zname; ?></td>
                              <td><?php echo $row->wname; ?></td>
                              <td><?php echo $row->site_ict; ?></td>
                               <td><?php echo $row->sitephone; ?></td> 
                              <!-- <td><?php echo $row->operator; ?></td> -->

                              <!-- <td>
                                    <a class="btn btn-xs btn-danger"><i <?php if($row->terminate_status == 0 ) { ?> class="fa fa-cloud-upload"> Applied </i> <i <?php } if($row->terminate_status == 1 ) { ?> class="fa fa-cloud-upload"> reject </i> <i <?php } if($row->terminate_status == 2 ) { ?> class="fa fa-thumbs-o-down"><?php } ?>Terminated</i> </a>
                              </td> -->
                              <td>
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('Structure/Delete_mletter/' . $row->id) ?>"onclick="return confirm('Are you sure To Delete this info ??')"><i class="fa fa-trash"></i> Delete </a>
                                    <a class="btn btn-sm btn-success" href="<?php echo base_url('Structure/showmletter/'.$row->id)?>"><i class="fa fa-windows">show</i></a>
                              </td>
                        </tr>

                  

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
