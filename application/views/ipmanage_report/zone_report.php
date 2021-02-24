

<div class="content-wrapper">

<!-- <div class="container" id="div-id-name"> -->
      <div id="printMe">
      <div class="box-body" >
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab"></a></li>
              <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
              <li class="pull-left header"><img style="height: 90px;" src="<?php echo base_url();?>dist/img/oromia women.png" class="img-circle" alt="User Image"><b><i>Biiroo Dhimma Dubartootaa, Daa'immanii fi Dargaggoota Oromiyaa<b> Gabaasa Waliigala Abuse Case</b></i></b><img style="height: 90px;" src="<?php echo base_url();?>dist/img/minster of women.png" class="img-circle" alt="User Image"></li>
            </ul>
            </div>
            <table  class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                        <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">TL</th>
                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">LANIP</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">WANIP</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Service Number</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Ethiotelecom Contact</th>
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
                              // $this->db->from('carbonCopy');
                              // $woreda = $this->input->get('woreda');
                              // $age_range = $this->input->get('age');
//                              echo $zone . '  '. $woreda . '' .$age_range;
                              ?>
                              <?php
                              $query = $this->db->select('*, zone,')
                                              // ->where('zone.zid = carbonCopy.zone_id  and carbonCopy.zone_id')
                                              ->where('zone_id', $zone)
                                              ->where('woreda', $woreda)
                                              ->join('region', 'region.r_id = carbonCopy.region_id', 'left')
                                              ->join('zone', 'zone.zid = carbonCopy.zone_id', 'left')
                                              ->join('woreda', 'woreda.woreda_id = carbonCopy.woreda', 'left')
                                              ->get('carbonCopy')->row();
                              
//                                 Female Count
                              
                              
                              ?>
                              <?php { ?>
                              <td>1</td>
                              <!-- <td>Zone Report</td> -->
                              <td><?php echo $query->date; ?></td>
                              <td><?php echo $query->lanip; ?></td>
                              <td><?php echo $query->wanip; ?></td>
                              <td><?php echo $query->servicenumber; ?></td>
                              <td><?php echo $query->ethiocontact; ?></td>
                              <td><?php echo $query->zname; ?></td>
                              <td><?php echo $query->woreda_name; ?></td>
                              <td><?php echo $query->kebele ?></td>
                              <td><?php echo $query->operator; ?></td>
                              <?php } ?>
                        </tr>
                        
                  </tbody>
            </table>
      </div>
    </div>
     
      <br>

      <!-- <button onclick="printDiv('printme')" class="btn btn-info pull-right"><i class="fa fa-print"></i></button> -->
       <button type="button" class="btn btn-warning"><a href="<?php echo base_url('Report/AllReport_info'); ?>">Back To All Report</a></button>
       
    
      <button onclick="printDivMe('printMe')" class="btn btn-info pull-right"><i class="fa fa-print"></i></button>
 

 
 </div>



<script>
           function printDivMe(divName) {
            var divToPrint = document.getElementById('printMe');
            var htmlToPrint = '' +
                    '<style type="text/css">' +
                    'table {' +
                    '    border-collapse: collapse;' +
                    'width:1000px;' +
                    '}' +
                    'th , td {' +
                    'border: 1px solid black;' +
                    'padding: 4px;' +
                    'text-align: left;' +
                    '}' +
                    '</style>';
            htmlToPrint += divToPrint.outerHTML;
            newWin = window.open("");
            newWin.document.write(htmlToPrint);
            newWin.print();
            newWin.close();
      }
</script>


<!-- <script>

function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
}

     

    function model(divName) {

        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
    {#var height=document.getElementById(divName).innerHTML;
    w= window.open("",'name','resizeable=1',false);
    w.document.write("<body style='width:230px;font-size:20px;'");#}
    {#w.document.write(printContents);#}
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;

        }
</script>
 -->
<!-- <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script> -->


       <!-- <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script> -->
    


