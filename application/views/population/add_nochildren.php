<div class="content-wrapper">
  <section class="content" style="min-height: 526px;">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Add Total Number of Children </h3></div>
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
            <form role="form" action="<?php echo base_url('BDDDDOcontroller/savenochildren');?>" method="post">
              <div class="box-body">
              
                 <div class="row">
             <div class="col col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">Number of Male</label>
                <input name="male" class="form-control"  value="0" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Number of Female</label>
                   <input name="female" class="form-control"  value="0" type="text" required>
                </div>
               

                 <div class="form-group">
                  <label for="exampleInputPassword1">Total Number of Children</label>
                  <input name="tot" class="form-control" value="0" type="text" required>
                </div>
                 
                 <div class="form-group">
                  <label for="exampleInputPassword1">Age</label>
                   <select class="form-control"name="age_id">
                  <?php 
                  foreach ($this->b->getage() as $row) {
                  
                 
                  ?>

                  <option value="<?php echo $row->ag_id?>"><?php echo $row->age;?></option>
<?php  } ?>
                </select>
                </div>
               
               
                </div>
              
                
                 <!-- <div class="row"> -->
      <div class="col col-md-6">

           <div class="form-group">
                  <label for="exampleInputEmail1">Region</label>
                  <select class="form-control" name="region" id="exampleInputPassword1" required>
                  <?php 
                  foreach ($this->b->getregion() as $row) {
                  
                 
                  ?>

                  <option value="<?php echo $row->r_id?>"><?php echo $row->r_name;?></option>
<?php  } ?>
                </select>
                </div>
                

                  <label for="exampleInputPassword1">Zone</label>
               <select  class="form-control" name="zone" id="zone" required>

                   <?php 
                  foreach ($this->b->getzone() as $row) {
                  
                 
                  ?>

                  <option value="<?php echo $row->zid?>"><?php echo $row->zname;?></option>
<?php  } ?>
                </select>
                 <label for="exampleInputPassword1">Town</label>
               <select class="form-control"name="town" id="town" required>
                 
    </select>
                <label for="exampleInputPassword1">Kebele</label>
               <select class="form-control"name="kebele" id="kebele" required>
                 
    </select>
                


                 </div>
                 </div>
               </div>
              
                <div class="col col-md-12">
                 <input type="submit" class="btn btn-primary" value="Register">|<input type="reset" value="Clear" class="btn btn-danger">

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

    $("input[name=male]").each(function(){
      total=total+parseInt($(this).val());
    })
    //var total1=0;
    $("input[name=female]").each(function(){
      total=total+parseInt($(this).val());
    })
    $("input[name=tot]").val(total);
  })
}
      )
  </script>

<script type="text/javascript">
    
    $(document).ready(function(){
   $("#zone").change(function(){
    var zid =$("#zone").val();
    $.ajax({
      url:'<?php echo base_url();?>BDDDDOcontroller/gettown',
      'method':'post',
      'data':{zid:zid},
      'type':'JSON'
    }).done(function(town){
      console.log(town);
      town=JSON.parse(town);
      $("#town").empty();
      town.forEach(function(town){
        $("#town").append('<option value='+ town.tid +'>'+ town.tname +'</option>');
      })
    })
   })

    $("#town").change(function(){
    var tid =$("#town").val();
    $.ajax({
      url:'<?php echo base_url();?>BDDDDOcontroller/getkebele',
      'method':'post',
      'data':{tid:tid},
      'type':'JSON'
    }).done(function(town){
      console.log(town);
      town=JSON.parse(town);
      $("#kebele").empty();
      town.forEach(function(town){
        $("#kebele").append('<option value='+ town.kid +'">'+ town.kname +'</option>');
      })
    })
   })
    })
  </script>