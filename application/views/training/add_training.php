<div class="content-wrapper">
  <section class="content" style="min-height: 526px;">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Add People Traind on Child Related issues </h3></div>
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
            <form role="form" action="<?php echo base_url('BDDDDOcontroller/savetrained');?>" method="post">
              <div class="box-body">
              
                 <div class="row">
             <div class="col col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">Training Organizing Body</label>
                <input name="tob" class="form-control"   type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Type of Trainig/topics</label>
                   <input name="top" class="form-control"   type="text" required>
                </div>
               

                 <div class="form-group">
                  <label for="exampleInputPassword1">Type of Trainer</label>
                   <select class="form-control" name="tot">
                  <?php 
                  foreach ($this->b->gettyprtraining() as $row) {
                  
                 
                  ?>

                  <option value="<?php echo $row->tot_id?>"><?php echo $row->tot_name;?></option>
<?php  } ?>
                </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Number of Participant<span>Male</span></label>
                  <input name="male" class="form-control" value="0"  type="text" required>
                </div>

                </div>
              
                
                 <!-- <div class="row"> -->
      <div class="col col-md-6">


                

                  <div class="form-group">
                  <label for="exampleInputEmail1">Number of Participant<span>Female</span></label>
                  <input name="female" class="form-control"  value="0" type="text" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Total Number of Participant</label>
                  <input name="total" class="form-control"  value="0" type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Free From Abuse Case</label>
                  <input name="free_abusecase" class="form-control"  type="text" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Total Date of training</label>
                  <input name="date" class="form-control"  value="0" type="text" required>
                </div>
                


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
    $("input[name=total]").val(total);
  })
}
      )
  </script>





<!-- <script  type="text/javascript" src ="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
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
  </script> -->


<!-- <script type="text/javascript">
    
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
  </script> -->