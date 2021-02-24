<div class="content-wrapper">
  <section class="content" style="min-height: 526px;">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Update Total Population </h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>

<script>
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('index.php/BDDDDOcontroller/updatepopulation/'.$population->id);?>" method="post">
              
                 <div class="row">
             <div class="col col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">Adult Male</label>
                <input name="adultmale" class="form-control"  type="text" required value="<?php echo $population->adultmale;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adult Female</label>
                   <input name="adultfemale" class="form-control"   type="text" required value="<?php echo $population->adultfemale;?>">
                </div>
               

                 <div class="form-group">
                  <label for="exampleInputPassword1">Total Adult</label>
                  <input name="totadult" class="form-control"  type="text" required value="<?php echo $population->totadult;?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Child Male</label>
                  <input name="childmale" class="form-control"  value="<?php echo $population->childmale;?>" type="text" required>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Child Female</label>
                  <input name="childfemale" class="form-control"  value="<?php echo $population->childfemale;?>" type="text" required>
                </div>
               
                </div>
              
                
                 <!-- <div class="row"> -->
      <div class="col col-md-6">


                

                   <div class="form-group">
                  <label for="exampleInputEmail1">Total Child</label>
                  <input name="totchild" class="form-control"  value="<?php echo $population->totchild;?>" type="text" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Total Population</label>
                  <input name="totpopulation" class="form-control"  value="<?php echo $population->totpopulation;?>" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name of Data Officer</label>
                  <input name="data_officer" class="form-control" value="<?php echo $population->data_officer;?>" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input name="date" class="form-control" value="<?php echo $population->date;?>"  type="date" required>
                </div>
                
                


                 </div>
                 </div>
               </div>
              
                <div class="col col-md-12">
                 <input type="submit" class="btn btn-primary" value="update">

                </div>
               </div>                </div>
               
            </form>
          </div>
        </div>
  






<script  type="text/javascript" src ="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e)
{
  $("input").change(function()
  {
    var total=0;
    $("input[name=adultmale]").each(function(){
      total=total+parseInt($(this).val());
    })
    $("input[name=adultfemale]").each(function(){
      total=total+parseInt($(this).val());
    })
    $("input[name=totadult]").val(total);
     var total1=0;
    $("input[name=childmale]").each(function(){
      total1=total1+parseInt($(this).val());
    })
    $("input[name=childfemale]").each(function(){
      total1=total1+parseInt($(this).val());
    })
  $("input[name=totchild]").val(total1);
  $("input[name=totpopulation]").val(total+total1);
    
  })
}
      )
  </script>