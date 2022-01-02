<div class="content-wrapper">
  <section class="content" style="min-height: 526px;">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Add Total Population </h3></div>
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
            <form role="form" action="<?php echo base_url('structure/save_newrequest');?>" method="post">
              <div class="box-body">
              
                 <div class="row">
             <div class="col col-md-12">

                <div class="form-group">
                                                       <label for="exampleInputEmail1">Date</label>
                                                            <input type="date" placeholder="-- Enter Date --" name="date" class="form-control">
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="exampleInputPassword1">Type of Request</label>
                                                      <input type="text" name="torequest" placeholder="-- Enter Request" class="form-control">
                                                      </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Request Description</label>
          <input type="text" name="reqdesc" placeholder="-- Enter Description" class="form-control">
          </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kebele</label>
                  <input type="text" name="kebele" placeholder="-- Enter Kebele" class="form-control">
                </div>
                </div>
              
                
                 <!-- <div class="row"> -->
      
                 </div>
               </div>
              
                <div class="col col-md-12">
                 <input type="submit" class="btn btn-primary" value="Register">|<input type="reset" value="Clear" class="btn btn-danger">

                </div>
               </div>                </div>
               
            </form>
          </div>
        </div>
  






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
    //var total1=0;
    $("input[name=adultfemale]").each(function(){
      total=total+parseInt($(this).val());
    })
    $("input[name=totadult]").val(total);
  })
}
      )
  </script>
 -->




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