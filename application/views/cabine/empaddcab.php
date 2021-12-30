<div class="content-wrapper">
      <section class="content" style="min-height: 526px;">
            <div class="col-xs-12">
                  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Hoggaanaa Haaraa Galmeessi </h3></div>
            </div>


            <div class="stu-master-create">
                  <style>
                        .box .box-solid {
                              background-color: #F8F8F8;
                        }
                  </style>

                  <script>
                        $(function () {
                              $('[data-toggle="popover"]').popover({placement: function () {
                                          return $(window).width() < 768 ? 'bottom' : 'right';
                                    }})
                        })
                  </script>
                  <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
<div class="callout callout-info">
          <h4>Odeeffannoo Dhuunfaa</h4>
          
        </div>

<form role="form" action="<?php echo base_url('Cabines/saveempcabines'); ?>" method="Post" enctype="multipart/form-data">
<div class="box-header with-border">
       

                                    <div class="box-body">

            <div class="row">
                  <div class="col col-md-6">

                                                     
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label"><h4>Maqaa Guutuu  </h4></label>
                                            <input type="text" name="maqa" id="company" placeholder="--Maqaa Guutuu galchii--" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label"><h4>Saala</h4></label>
                                            <select class="form-control" name="sala_id" required="">
                                                                  <option value="">-- Select  --</option>
                                                                  <?php foreach ($this->str->getGender() as $row){
                                                                    
                                                                        ?>
                                                                  <option value="<?php echo $row->gender_id;?>"><?php echo $row->gender_name;?></option>
                                                                              <?php 
                                                                  } ?>

                                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label"><h4>Umurii</h4></label>
                                            <input type="text" name="umuri" id="street" placeholder="Enter Age" class="form-control">
                                        </div>
                                                              
                  <div class="form-group">
                     <h4 class="box-title">Bakka Dhalootaa </h4>
                  </div>
                           <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Godiina/Magaala</label>
                        <select  class="form-control" name="dhalotaG_id" id="zone" >
                                                             <option value="">-- Select  --</option>
                                                            <?php
                                                            foreach ($this->b->getzone() as $row) {
                                                                  ?>

                                                                  <option value="<?php echo $row->zid ?>"><?php echo $row->zname; ?></option>
                                                            <?php } ?>
                                                      </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Aanaa</label>
                         <select class="form-control"name="dhalotaA_id" id="woreda" >
 <option value="">-- Select  --</option>
                                                      </select>
                      </div>
                    </div>
                  </div>


                 <div class="form-group">
                                            <label class=" form-control-label"><h4>Suura Hogganaa</h4></label>
                                            <input type="file"  name="attachment" class="form-control-file">
                                        </div>
                                  
     </div>


                                                <!-- <div class="row"> -->
                  <div class="col col-md-6">

                                                      <div class="form-group">
                                         
                                            <label for="company" class=" form-control-label"><h4>Bilbila</h4></label>
                                            <input type="text" name="bilbila" id="company" placeholder="Enter phone Number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label"><h4>Imeeli</h4></label>
                                            <input type="text" name="email" id="vat" placeholder="Enter Email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label"><h4>Haala Maatii</h4></label>

                                            <select class="form-control" name="haalamaati" required="">
            <option value="">-- Select  --</option>
               <?php foreach ($this->str->gethaalamaati() as $row){
                                                                    
                                                                        ?>
           <option value="<?php echo $row->id;?>"><?php echo $row->haala;?></option>
                                                                              <?php 
                                                                  } ?>

                                                            </select>
                                        </div>
                                                  




     <div class="form-group">
         <h4>Miseensa maatii</h4>
    
      <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Baayyina Dhiiraa</label>
                         <input type="text" name="bayinaM" id="company" placeholder="Enter phone Number" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Baayyina Dhalaa</label>
                          <input type="text" name="bayinaF" id="company" placeholder="Enter phone Number" class="form-control">
                      </div>
                    </div>
                  </div>

  </div>
</div>    
</div>
</div>
                          <div class="col col-md-12" style=" text-align: right;">
                                          <input type="submit" class="btn  btn-primary " value="Galmeessii itti Fufi">
                                    </div>          
                        </div>
                        
                        </form>
                  </div>
            </div>
</div>

</section></div>


<script type="text/javascript">

      $(document).ready(function () {
            $("#zone").change(function () {
                  var zid = $("#zone").val();
                  alert(zid);
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
                        })
                  })
            })

            $("#town").change(function () {
                  var tid = $("#town").val();
                  $.ajax({
                        url: '<?php echo base_url(); ?>BDDDDOcontroller/getkebele',
                        'method': 'post',
                        'data': {tid: tid},
                        'type': 'JSON'
                  }).done(function (town) {
                        console.log(town);
                        town = JSON.parse(town);
                        $("#kebele").empty();
                        town.forEach(function (town) {
                              $("#kebele").append('<option value=' + town.kid + '">' + town.kname + '</option>');
                        })
                  })
            })
      })
</script>
<script>
       function level(aval) {
        if (aval == "3") {
            zoneid.style.display = 'block';
            woredaid.style.display = 'block';      
           
            $('#zoneid').attr('required', 'required');
            $('#zoneid').attr('required', 'required');
          
        } else
            if (aval == "4") {
                woredaid.style.display = 'none';
                zoneid.style.display = 'block';
               
                $('#zoneid').attr('required', 'required');
                $('#woredaid').attr('required', false);
                $('#woreda').val(null);
           }
            else {
                woredaid.style.display = 'none';
                zoneid.style.display = 'none';
                $('#zoneid').attr('required', false);
                $('#woredaid').attr('required', false);
                $('#zone').val(null); 
                $('#woreda').val(null);
               
            }

    }
</script>