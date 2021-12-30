<div class="content-wrapper">
      <section class="content" style="min-height: 526px;">
            <div class="col-xs-12">
                  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i>Odeeffannoo Hoggaanaa dabalii </h3></div>
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
<form role="form" action="<?php echo base_url('Cabines/savezonecabines2'); ?>" method="Post" enctype="multipart/form-data">


<div class="callout callout-info">
         <h4  class="box-title"> Odeeffannoo Hojii waliin walqabate</h4>
         
          
        </div>

<div class="box-header with-border">

                                    <div class="box-body">

            <div class="row">
<div class="col col-md-12">
 <div class="form-group">
                        <label>Maqaa Hogganaa</label>
                         <select class="form-control" name="maqa_id" required="">
                         <option style="text-align: center;" value="">--  Maqaa Hogganaa Filadhuu  --</option>
                          <?php foreach ($this->str->getmaqa() as $row){
                             ?>
                          <option value="<?php echo $row->cab_id;?>"><?php echo $row->maqa;?></option>
                           <?php 
                            } ?>
                          </select>
                      </div>

      </div>
              
                  <div class="col col-md-6">

                                                     
                                                        <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sektaraa itti ramadame</label>
                        <select class="form-control" name="sector" id="sector" required="">
                         <option style="text-align: center;" value="">--  Sektera Filadhuu  --</option>
                          <?php foreach ($this->str->getsector() as $row){
                             ?>
                          <option value="<?php echo $row->s_id;?>"><?php echo $row->s_name;?></option>
                           <?php 
                            } ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Muudama ammaa</label>
                        <select class="form-control" name="mudama_amma" id="mudama" required="">
                         <option style="text-align: center;" value="">--  Muuxannoo Filadhuu  --</option>
                        
                          </select>
                         
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Qaama carraa barumsaa laateef</label>
                         <input type="text" name="carrabarumsa" id="company" placeholder="--Qaama carraa barumsaa laateef galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Muuxannoo</label>
                          <select class="form-control" name="muxannoo" required="">
                         <option style="text-align: center;" value="">--  Muuxannoo Filadhuu  --</option>
                          <?php foreach ($this->str->getmuxano() as $row){
                             ?>
                          <option value="<?php echo $row->id;?>"><?php echo $row->years_name;?></option>
                           <?php 
                            } ?>
                          </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sadarkaa Barnoota</label>
                         <input type="text" name="sadarkaB" id="company" placeholder="--Sadarkaa Barnoota galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gosa Barnoota</label>
                          <input type="text" name="gosaB" id="company" placeholder="--Gosa Barnoota galchii--" class="form-control">
                      </div>
                    </div>

             <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Yuuniversiti irraa Ebbifamee</label>
                         <select class="form-control" name="university_id" required="">
                         <option style="text-align: center;" value="">--  Yuuniversitii Filadhuu  --</option>
                          <?php foreach ($this->str->getuniversity() as $row){
                             ?>
                          <option value="<?php echo $row->u_id;?>"><?php echo $row->u_name;?></option>
                           <?php 
                            } ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Qabxii GPA</label>
                          <input type="text" name="gpa" id="company" placeholder="-- GPA Galchii --"  class="form-control">
                      </div>
                    </div>

                  </div>
                                        <div class="form-group">
<label for="street" class=" form-control-label"><h4>Itti gaafatamummarra ka’ee yoo jiraate</h4></label>
                                           <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara</label>
                         <input type="text" name="barakafama" id="company" placeholder="--Bara ka’e galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Dhimmi ittiin ka’e</label>
                          <input type="text" name="dhimakahef" id="company" placeholder="--Dhimmi ittiin ka’e galchii--" class="form-control">
                      </div>
                    </div>
                  </div>
                                        </div>

<div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                                            <label class=" form-control-label"><h4>CV Hogganaa Ol kaa'ii</h4></label>
                                            <input type="file"  name="cv" class="form-control-file">
                                        </div>
                                                             
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bara Qabsoo</label>
                          <input type="text" name="baraqabso" id="company" placeholder="--Bara qabsoo galchii--" class="form-control">
                      </div>
                    </div>
                
                                        </div>



          
                 
                  </div>


               
  


                                                <!-- <div class="row"> -->
                  <div class="col col-md-6">

                                                      <div class="form-group">
                                         
                                            <label for="company" class=" form-control-label"> <h4>Muuxannoowan gadi fageenyaan</h4></label>
                                           <textarea rows="5" name="muxannoowan" placeholder="Muuxannoowan hojiin argataan tarreessi" class="form-control"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
<label for="street" class=" form-control-label"><h4>Ciminaa fi hanqina ijoo Hoggansichi qabuue</h4></label>
                                           <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Cimina ijoo</label>
                         <input type="text" name="ciminaijo" id="company" placeholder="--Cimina ijoo galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Hanqina ijoo</label>
                          <input type="text" name="hanqinaijo" id="company" placeholder="--Hanqina ijoo galchii--" class="form-control">
                      </div>
                    </div>
                  </div>
                                        </div>
                                

     <div class="form-group">
       
<label for="street" class=" form-control-label"><h4>Turtii isaa keessati hojii gaarii hojjeteef Badhaasa argate yoo jiraate</h4></label>

      

      <div class="row">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara</label>
                         <input type="text" name="barabadhasa" id="company" placeholder="-- Bara Galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Hoji itti badhaafame</label>
                          <input type="text" name="hojibadhasa" id="company" placeholder="--Hoji itti badhaafame--" class="form-control">
                      </div>
                    </div><div class="col-sm-4">
                      <div class="form-group">
                        <label>Qaama badhaasicha kenneef</label>
                          <input type="text" name="qamabadhase" id="company" placeholder="--Qaama badhaasicha kenneef galchii--" class="form-control">
                      </div>
                    </div>
                  </div>

</div>
                                                </div>
        




         </div>







                                    </div>
                                   <div class="col col-md-12" style=" text-align: right;">
                                          <input type="submit" class="btn btn-primary " value="Galmeessi">
                                    </div>        
                        </div>
                 
                        </form>
                  </div>
            </div>
</div>

</section>

<script type="text/javascript">

      $(document).ready(function () {
            $("#sector").change(function () {
                  var sid = $("#sector").val();
                  alert(sid);
                  $.ajax({
                        url: '<?php echo base_url(); ?>BDDDDOcontroller/getmudamaa',
                        'method': 'post',
                        'data': {sid: sid},
                        'type': 'JSON'
                  }).done(function (mudama) {
                        console.log(mudama);
                        mudama = JSON.parse(mudama);
                        $("#mudama").empty();
                        mudama.forEach(function (mudama) {
                              $("#mudama").append('<option value=' + mudama.t_id + '>' + mudama.t_name + '</option>');
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