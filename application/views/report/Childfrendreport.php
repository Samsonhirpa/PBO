<div class="content-wrapper">
      <div class="box box-success">
            <div class="box-header with-border">
                  <h3 class="box-title">Report Generate</h3>
            </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                 Child freindly Report
            </button>

            <div class="modal fade" id="modal-info">
                  <div class="modal-dialog">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Child freindly Report</h4>
                              </div>
                              <div class="modal-body">
                                    <div class="row" style="background-color: whitesmoke">
                                          <div class="col col-md-12">
                                                <form action="<?php echo base_url('Report/childfriemdly_report') ?>" method="get"> 
                                                      <div class="box-body">
                                                            <div class="form-group">
                                                                  <label class="form-check-label">Zone</label>
                                                                  <select name="zone" class="form-control" id="zone">
                                                                        <option value="">--select Zone-- </option>
                                                                        <?php foreach ($this->str->getZone() as $row) {
                                                                              ?>
                                                                              <option value="<?php echo $row->zid ?>"><?php echo $row->zname; ?></option>
                                                                              <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                            </div>
                                                            <div class="form-group">
                                                                  <label class="form-check-label">Woreda</label>
                                                                  <select name="woreda" class="form-control" id="woreda">

                                                                  </select>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label class="form-check-label">Age</label>
                                                                  <select name="age" class="form-control">
                                                                        <option value="">--select Age Range -- </option>
                                                                        <?php foreach ($this->str->getAge() as $row) {
                                                                              ?>
                                                                              <option value="<?php echo $row->ag_id ?>"><?php echo $row->age; ?></option>
                                                                              <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                            </div>
                                                      </div>

                                          </div>
                                    </div>

                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit"  class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>Generate Report</button>
                              </div>
                        </div>
                        </form>

                        <!-- /.modal-content 
                  </div>
                        <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                  <!-- /.box-body -->
            </div>


            
      </div>

      

</div>


      <script type="text/javascript">

            $(document).ready(function () {
                  $("#zone").change(function () {
                        var zid = $("#zone").val();
      //                  alert(zid);
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
                              });
                        });
                  });

            })
      </script>