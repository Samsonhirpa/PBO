<div class="content-wrapper">
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Drug</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('usercontroller/savedrug');?>" method="post">
              <div class="box-body">
              
               
      <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"> Add New Drug</h4>
      </div>
          <table class="table table-striped table-bordered table-hover table-danger" border="5">
                
                <tr>
                  
                 <td>Item Code
          
                  <input name="itemcode" class="form-control" id="exampleInputPassword1" placeholder="Item code" type="text" required>
                
                </td>
               
                  
                <td>Item Description
                 <input class="form-control" type="itemdesc" id="exampleInputFile" name="itemdesc" placeholder="Item Description" >
                </td>
               <td>Batch Number
                 <input class="form-control" type="text" id="exampleInputFile" name="batchnumber" placeholder="Batch Number" >
                  </td>
                  </td><td>Expire Date
                 <input class="form-control" type="date" id="exampleInputFile" name="expiredate" placeholder="Expire Date" >
                  </td>
                 <td>UOM
                 <input class="form-control" type="text" id="exampleInputFile" name="uom" placeholder="UOM" >
                  
                  
                   <td>New item Quantity
                 <input class="form-control" type="text" id="exampleInputFile" name="quantity" placeholder="Quantity" >
                  </td>
                   <td>Stoke in Hand
                 <input class="form-control" type="text" id="exampleInputFile" name="livestoke" placeholder="Stoke in Hand" >
                  </td>
                   <td>Total Stoke
                 <input class="form-control" type="text" id="exampleInputFile" name="totalstored" placeholder="Total Stoke" >
                  </td>
                   <td>Unit Price
                 <input class="form-control" type="text" id="exampleInputFile" name="unitprice" placeholder="Unit Price" >
                  </td>
                   <td>Total Price
                 <input class="form-control" type="text" id="exampleInputFile" name="totalprice" placeholder="Total Price" >
                  </td>
              </tr>
                    </table>
                  </div>

                 
                  <input type="submit" class="btn btn-primary" value="Register">|<input type="reset" value="Clear" class="btn btn-danger">
       </div>
               </div>                </div>
               
            </form>


            <div class="box-body">
              <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending"><?php echo $this->lang->line('no_menu');?></th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ItemCode</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">ItemDescription</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Batch Number</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">UOM</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Expiredate</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">New Item</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Stoke in Hand</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Total Stoke</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Unit Price</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.417px;" aria-label="CSS grade: activate to sort column ascending"><?php echo $this->lang->line('action_menu');?></th></tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach ($this->m->getdrug() as $row ) {
                    $no++;
                  ?>
                <tr role="row" class="odd">
                  <td ><?php echo $no;?></td>
                  
                  <td><?php echo $row->itemcode;?></td>
                  
                  <td><?php echo $row->itemdesc;?></td>
                  <td><?php echo $row->batchnumber;?></td>
                   <td><?php echo $row->uom;?></td>
                  <td><?php echo $row->expiredate;?></td>
                 <td><?php echo $row->quantity;?></td>
                  <td><?php echo $row->livestoke;?></td>
                   <td><?php echo $row->totalstored;?></td>
                  <td><?php echo $row->unitprice;?></td>
                  <td>
                    <a class="btn btn-sm btn-info"href="<?php echo base_url('usercontroller/editzone/'.$row->id)?>"><i class="fa fa-wrench">edit</i></a>
                    
                    <a class="btn btn-xs btn-danger" href="<?php echo base_url('usercontroller/deletezone/'.$row->id)?>"onclick="return confirm('Are you sure To Delete This Student ??')"><i class="fa fa-trash">delete</i></a>



                   
                  </td>
                </tr>
                <?php } ?>
              </tbody>
                
              </table>
            </div>

             <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

          </div>
        </div>
      </div>

