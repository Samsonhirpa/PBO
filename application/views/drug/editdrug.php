<div class="content-wrapper">
  <div class="col-sm-12">  
        <div class="wrap-fpanel">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    
                </div>
              
     <div class="panel-body">
    <div class="row">
    <div class="col col-md-12">
           <form role="form" action="<?php echo base_url('usercontroller/updatezone/'.$drugstore->id);?>" method="post">
              <div class="box-body">
                <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"> Patient Info</h4>
      </div>
                 <table class="table table-striped table-bordered table-hover table-danger" border="5">
                
                <tr>
                  
                 <td>Item Code
          
                  <input name="itemcode" class="form-control" id="exampleInputPassword1"  type="text" value="<?php echo $drugstore->itemcode;?>"required>
                
                </td>
               
                  
                <td>Item Description
                 <input class="form-control" type="itemdesc" id="exampleInputFile" name="itemdesc" value="<?php echo $drugstore->itemdesc;?>"  >
                </td>
               <td>Batch Number
                 <input class="form-control" type="text" id="exampleInputFile" name="batchnumber" value="<?php echo $drugstore->batchnumber;?>" >
                  </td>
                  </td><td>Expire Date
                 <input class="form-control" type="date" id="exampleInputFile" name="expiredate" value="<?php echo $drugstore->expiredate;?>" >
                  </td>
                 <td>UOM
                 <input class="form-control" type="text" id="exampleInputFile" name="uom" value="<?php echo $drugstore->uom;?>">
                  
                  
                   <td>New item Quantity
                 <input class="form-control" type="text" id="exampleInputFile" name="quantity" value="<?php echo $drugstore->quantity;?>" >
                  </td>
                   <td>Stoke in Hand
                 <input class="form-control" type="text" id="exampleInputFile" name="livestoke" value="<?php echo $drugstore->livestoke;?>" >
                  </td>
                   <td>Total Stoke
                 <input class="form-control" type="text" id="exampleInputFile" name="totalstored" value="<?php echo $drugstore->totalstored;?>"  >
                  </td>
                   <td>Unit Price
                 <input class="form-control" type="text" id="exampleInputFile" name="unitprice" value="<?php echo $drugstore->unitprice;?>" >
                  </td>
                   <td>Total Price
                 <input class="form-control" type="text" id="exampleInputFile" name="totalprice" value="<?php echo $drugstore->totalprice;?>">
                  </td>
              </tr>

                    </table>
                  </div>

    
              </div>

               <div class="row">
                <div class="col col-md-12">
                  <input type="submit" class="btn btn-primary" value="Update"name="save">
                </div>
               </div>
            </form>
          </div>
        </div>
      </div>