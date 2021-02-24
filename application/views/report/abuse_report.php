<div class="content-wrapper">

      <div class="box-header">
            <h3 class="box-title"><b>Number of Abuse Case</b></h3>
      </div>



      <div class="box-body">
            <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                        <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu'); ?></th>
                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Abuse Type</th>

                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Age</th>

                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Gender</th>
                              <!--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Region</th>-->
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Operator</th>
                  </thead>
                  <tbody>
                        <?php
                        $no = 0;
                        $zone = $this->input->post('zone');
                        $woreda = $this->input->post('woreda');
                        $abuse_type = $this->input->post('abuse_type');
                        $age_range = $this->input->post('age_range');

                        foreach ($this->rpt->getAbuseCasesReports($zone, $woreda, $abuse_type, $age_range) as $row) {
                              $no++;
                              ?>
                              <tr role="row" class="odd">
                                    <td ><?php echo $no; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->age; ?></td>
                                    <td><?php echo $row->gender_name; ?></td>
                                    <!--<td><?php echo $row->r_name; ?></td>-->
                                    <td><?php echo $row->zname; ?></td>
                                    <td><?php echo $row->woreda_name; ?></td>
                                    <td><?php echo $row->kebele; ?></td>
                                    <td><?php echo $row->operator; ?></td>

                              </tr>
                        <?php }
                        ?>


                  </tbody>
            </table>
      </div>
</div>
