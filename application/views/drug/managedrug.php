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
            <div class="box-header">
              <h3 class="box-title">List Of Regions</h3>
            </div>

            <a class="btn btn-primary" href="<?php echo base_url()?>marketcontroller/add_region">Add New region </a>
           
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">No</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Region Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">description </th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.417px;" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach ($this->m->getregion() as $row ) {
                    $no++;
                  ?>
                <tr role="row" class="odd">
                  <td ><?php echo $no;?></td>
                  <td><?php echo $row->r_name;?></td>
                  <td><?php echo $row->description;?></td>
                 
                  <td>
                    <a class="btn btn-sm btn-info"href="<?php echo base_url('usercontroller/editregion/'.$row->id)?>"><i class="fa fa-wrench"></i></a>
                    <a class="btn btn-sm btn-success" href="<?php echo base_url('usercontroller/showregion/'.$row->id)?>"><i class="fa fa-windows"></i></a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('usercontroller/deleteregion/'.$row->id)?>"onclick="return confirm('Are you sure To Delete This Student ??')"><i class="fa fa-trash"></i></a>
                    


                        </td>
                    </tr>

               <?php }

                ?>
            </tbody>

                <tfoot>
                <tr><th rowspan="1" colspan="1">no</th><th rowspan="1" colspan="1"> region name</th><th rowspan="1" colspan="1">description</th><th rowspan="1" colspan="1">Action</th></tr>
                </tfoot>
            </table>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
