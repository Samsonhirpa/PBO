<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">All Report</a></li>
              <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
              <li class="pull-left header"><img style="height: 120px;" src="<?php echo base_url();?>dist/img/oromia women.png" class="img-circle" alt="User Image"><b><i>Biiroo Dhimma Dubartootaa, Daa'immanii fi Dargaggoota Oromiyaa<b> Gabaasa Waliigala</b></i></b><img style="height: 120px;" src="<?php echo base_url();?>dist/img/minster of women.png" class="img-circle" alt="User Image"></li>
            </ul>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                Abuse Case Report <br><br>Plse <br><i>Click to Show</i> 
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Child freindly Report <br> <br>Plse <br><i>Click to Show</i>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-danger">
                OVCS Report <br> <br>Plse <br><i>Click to Show</i>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-warning">
                Disbled Children Report <br> <br>Plse <br><i>Click to Show</i>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-success">
                Child Care Report <br> <br>Plse <br><i>Click to Show</i>
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-success">
                Child Care Report <br> <br>Plse <br><i>Click to Show</i>
              </button>
            </div>

          </div>
        </div>
      </div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Abuse Case Report</h4>
                              </div>
              <div class="modal-body">
                                    <div class="row" style="background-color: whitesmoke">
                                          <div class="col col-md-12">
                                                <form action="<?php echo base_url('Report/Generate_report') ?>" method="get"> 
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
                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>Generate Report</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Primary Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-info fade" id="modal-info">
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
                                                                  <select name="zone" class="form-control" id="zone1">
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
                                                                <select name="woreda" class="form-control" id="woreda1">

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
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Disabled Report</h4>
              </div>
              <div class="modal-body">
                                    <div class="row" style="background-color: whitesmoke">
                                          <div class="col col-md-12">
                                                <form action="<?php echo base_url('Report/disabled_report') ?>" method="get"> 
                                                      <div class="box-body">
                                                            <div class="form-group">
                                                                  <label class="form-check-label">Zone</label>
                                                                  <select name="zone" class="form-control" id="zone3">
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
                                                                <select name="woreda" class="form-control" id="woreda3">

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
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Success Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">OVCS Report</h4>
              </div>
              <div class="modal-body">
                                    <div class="row" style="background-color: whitesmoke">
                                          <div class="col col-md-12">
                                                <form action="<?php echo base_url('Report/ovcs_report') ?>" method="get"> 
                                                      <div class="box-body">
                                                            <div class="form-group">
                                                                  <label class="form-check-label">Zone</label>
                                                                  <select name="zone" class="form-control" id="zone2">
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
                                                                  <select name="woreda" class="form-control" id="woreda2">

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
                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>Generate Report</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        
    </section>
    <section class="content">
      
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

          <!-- Area chart -->
         <!--  <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Full Width Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>
            </div>
            
          </div> -->
          <!-- /.box -->

        </div>
        <!-- /.col -->

        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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

      <script type="text/javascript">

            $(document).ready(function () {
                  $("#zone1").change(function () {
                        var zid = $("#zone1").val();
      //                  alert(zid);
                        $.ajax({
                              url: '<?php echo base_url(); ?>BDDDDOcontroller/getWoreda1',
                              'method': 'post',
                              'data': {zid: zid},
                              'type': 'JSON'
                        }).done(function (woreda1) {
                              console.log(woreda1);
                              woreda1 = JSON.parse(woreda1);
                              $("#woreda1").empty();
                              woreda1.forEach(function (woreda1) {
                                    $("#woreda1").append('<option value=' + woreda1.woreda_id + '>' + woreda1.woreda_name + '</option>');
                              });
                        });
                  });

            })
      </script>

      <script type="text/javascript">

            $(document).ready(function () {
                  $("#zone2").change(function () {
                        var zid = $("#zone2").val();
      //                  alert(zid);
                        $.ajax({
                              url: '<?php echo base_url(); ?>BDDDDOcontroller/getWoreda2',
                              'method': 'post',
                              'data': {zid: zid},
                              'type': 'JSON'
                        }).done(function (woreda2) {
                              console.log(woreda2);
                              woreda2 = JSON.parse(woreda2);
                              $("#woreda2").empty();
                              woreda2.forEach(function (woreda2) {
                                    $("#woreda2").append('<option value=' + woreda2.woreda_id + '>' + woreda2.woreda_name + '</option>');
                              });
                        });
                  });

            })
      </script>

      <script type="text/javascript">

            $(document).ready(function () {
                  $("#zone3").change(function () {
                        var zid = $("#zone3").val();
      //                  alert(zid);
                        $.ajax({
                              url: '<?php echo base_url(); ?>BDDDDOcontroller/getWoreda',
                              'method': 'post',
                              'data': {zid: zid},
                              'type': 'JSON'
                        }).done(function (woreda3) {
                              console.log(woreda3);
                              woreda3 = JSON.parse(woreda3);
                              $("#woreda3").empty();
                              woreda3.forEach(function (woreda3) {
                                    $("#woreda3").append('<option value=' + woreda3.woreda_id + '>' + woreda3.woreda_name + '</option>');
                              });
                        });
                  });

            })
      </script>


<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      { label: 'Series2', data: 30, color: '#3c8dbc' },
      { label: 'Series3', data: 20, color: '#0073b7' },
      { label: 'Series4', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>


