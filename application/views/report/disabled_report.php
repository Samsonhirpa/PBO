<div class="content-wrapper">

      <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Detail</a></li>
              <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
              <li class="pull-left header"><img style="height: 90px;" src="<?php echo base_url();?>dist/img/oromia women.png" class="img-circle" alt="User Image"><b><i>Biiroo Dhimma Dubartootaa, Daa'immanii fi Dargaggoota Oromiyaa<b> Gabaasa Waliigala Abuse Case</b></i></b><img style="height: 90px;" src="<?php echo base_url();?>dist/img/minster of women.png" class="img-circle" alt="User Image"></li>
            </ul>
            </div>
      <div class="box-body">
            <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                        <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">TL</th>
                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Abuse Type</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Age Range</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Male</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Female</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Total</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Zone</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Woreda</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Kebele</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Operator</th>
                          </tr>
                  </thead>
                  <tbody>
                        <tr>
                              <?php
                              $zone = $this->input->get('zone');
                              $woreda = $this->input->get('woreda');
                              $age_range = $this->input->get('age');
//                              echo $zone . '  '. $woreda . '' .$age_range;
                              ?>
                              <?php
                              $query = $this->db->select('*,count(id) as bv')
                                              ->where('disabledtype_id', 1)
                                              ->where('sex', 1)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = disabled_children.region_id', 'left')
                                              ->join('zone', 'zone.zid = disabled_children.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = disabled_children.woreda', 'left')
                                 ->join('disabled_type','disabled_type.d_id = disabled_children.disabledtype_id','left')
                                              ->join('age', 'age.ag_id = disabled_children.age_id', 'left')
                                              ->join('gender', 'gender.gender_id = disabled_children.sex', 'left')
                                              ->get('disabled_children')->row();
                              
//                                 Female Count
                              $femalequery = $this->db->select('*,count(id) as female')
                                              ->where('disabledtype_id', 1)
                                              ->where('sex', 2)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = disabled_children.region_id', 'left')
                                              ->join('zone', 'zone.zid = disabled_children.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = disabled_children.woreda', 'left')
                                  ->join('disabled_type','disabled_type.d_id = disabled_children.disabledtype_id','left')
                                              ->join('age', 'age.ag_id = disabled_children.age_id', 'left')
//                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('disabled_children')->row();
                              $fno=$femalequery->female;
                              $mno=$query->bv;
                              $tot = $fno + $mno;
                              
                              ?>
                              <?php $n01= $query->bv; if($n01 > 0 ){ ?>
                              <td>1</td>
                              <td>Blind or Visually Impairment</td>
                              <td><?php echo $query->age; ?></td>
                              <td><?php echo $query->bv; ?></td>
                              <td><?php echo $fno; ?></td>
                              <td><?php echo $tot; ?></td>
                              <td><?php echo $query->zname; ?></td>
                              <td><?php echo $query->woreda_name; ?></td>
                              <td><?php echo $query->kebele ?></td>
                              <td><?php echo $query->operator; ?></td>
                              <?php } ?>
                        </tr>
                       <!--  <tr>
                              <?php
                              $query1 = $this->db->select('*,count(id) as rep')
                                              ->where('abusetype_id', 3)
                                              ->where('sex', 1)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              
//                              Female Count
                              $femalequery = $this->db->select('*,count(id) as female')
                                              ->where('abusetype_id', 3)
                                              ->where('sex', 2)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
//                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              $fno=$femalequery->female;
                              
                              ?>
                              <?php
                              $no= $query1->rep; 
                              if($no >0){
                              ?>
                              <td>2</td>
                              <td>Rape</td>

                              <td><?php echo $query->age; ?></td>
                              <td>Male</td>
                              <td><?php echo $fno; ?></td>
                              <td><?php echo $query->zname; ?></td>
                              <td><?php echo $query->woreda_name; ?></td>
                              <td><?php echo $query->kebele ?></td>
                              <td><?php echo $query->operator; ?></td>
                              <?php } ?>
                        </tr>
                        <tr>
                              <?php
                              $zone = $this->input->get('zone');
                              $woreda = $this->input->get('woreda');
                              $age_range = $this->input->get('age');
//                              echo $zone . '  '. $woreda . '' .$age_range;
                              ?>
                              <?php
                              $query = $this->db->select('*,count(id) as ap')
                                              ->where('abusetype_id', 4)
                                              ->where('sex', 1)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              
//                                 Female Count
                              $femalequery = $this->db->select('*,count(id) as female')
                                              ->where('abusetype_id', 4)
                                              ->where('sex', 2)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
//                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              $fno=$femalequery->female;
                              $mno=$query->ap;
                              $tot = $fno + $mno;
                              
                              ?>
                              <?php $n01= $query->ap; if($n01 > 0 ){ ?>
                              <td>3</td>
                              <td>Attempt of Rape</td>
                              <td><?php echo $query->age; ?></td>
                              <td><?php echo $query->ap; ?></td>
                              <td><?php echo $fno; ?></td>
                              <td><?php echo $tot; ?></td>
                              <td><?php echo $query->zname; ?></td>
                              <td><?php echo $query->woreda_name; ?></td>
                              <td><?php echo $query->kebele ?></td>
                              <td><?php echo $query->operator; ?></td>
                              <?php } ?>
                        </tr>

                        <tr>
                              <?php
                              $zone = $this->input->get('zone');
                              $woreda = $this->input->get('woreda');
                              $age_range = $this->input->get('age');
//                              echo $zone . '  '. $woreda . '' .$age_range;
                              ?>
                              <?php
                              $query = $this->db->select('*,count(id) as htp')
                                              ->where('abusetype_id', 1)
                                              ->where('sex', 1)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              
//                                 Female Count
                              $femalequery = $this->db->select('*,count(id) as female')
                                              ->where('abusetype_id', 1)
                                              ->where('sex', 2)
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->where('age_id', $age_range)
                                              ->join('region', 'region.r_id = abuse_case.region_id', 'left')
                                              ->join('zone', 'zone.zid = abuse_case.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = abuse_case.woreda', 'left')
                                              ->join('abuse_type', 'abuse_type.ab_id = abuse_case.abusetype_id', 'left')
                                              ->join('age', 'age.ag_id = abuse_case.age_id', 'left')
//                                              ->join('gender', 'gender.gender_id = abuse_case.sex', 'left')
                                              ->get('abuse_case')->row();
                              $fno=$femalequery->female;
                              $mno=$query->htp;
                              $tot = $fno + $mno;
                              
                              ?>
                              <?php $n01= $query->htp; if($n01 > 0 ){ ?>
                              <td>4</td>
                              <td>HTP</td>
                              <td><?php echo $query->age; ?></td>
                              <td><?php echo $query->htp; ?></td>
                              <td><?php echo $fno; ?></td>
                              <td><?php echo $tot; ?></td>
                              <td><?php echo $query->zname; ?></td>
                              <td><?php echo $query->woreda_name; ?></td>
                              <td><?php echo $query->kebele ?></td>
                              <td><?php echo $query->operator; ?></td>
                              <?php } ?>
                        </tr> -->

                  </tbody>
            </table>
      </div>
      <br>
      <button type="button" class="btn btn-warning"><a href="<?php echo base_url('Report/AllReport_info'); ?>">Back To All Report</a></button>
    </div>


