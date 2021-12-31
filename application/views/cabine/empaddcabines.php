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
<form role="form" action="<?php echo base_url('Cabines/saveempcabines2'); ?>" method="Post" enctype="multipart/form-data">








<div class="box-header with-border">

<div class="callout callout-info">
         <h4  class="box-title"> Odeeffannoo Hojii waliin walqabate</h4>
         
          
        </div>


<div class="box box-solid box-secondary col-xs-12 col-lg-12 no-padding">
                                    

            <div class="row">
  
                  <div class="col col-md-6">

<div class="row">
                    <div class="col-sm-6">
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

 <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sadarkaa Hoggansaa</label>
                        <select class="form-control" name="level"  required="">
                         <option style="text-align: center;" value="">--  Sadarkaa Hoggansaa Filadhuu  --</option>
                          <?php foreach ($this->str->getlevel() as $row){
                             ?>
                          <option value="<?php echo $row->l_id;?>"><?php echo $row->l_name;?></option>
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
                      <div class="form-group">
                        <label>Muuxannoo W/Galaa</label>
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
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Muuxannoo Hoggansaa</label>
                        <select class="form-control" name="muxano_hog" required="">
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
                         <select class="form-control" name="sadarkaB" required="">
                         <option style="text-align: center;" value="">--  Sadarkaa Barnootaa Filadhuu  --</option>
                          <?php foreach ($this->str->getsadarka() as $row){
                             ?>
                          <option value="<?php echo $row->sd_id;?>"><?php echo $row->sd_name;?></option>
                           <?php 
                            } ?>
                          </select>
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


<div class="row">
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bara Qabsoo</label>
                          <input type="text" name="baraqabso" id="company" placeholder="--Bara qabsoo galchii--" class="form-control">
                      </div>
                    </div> 
                       <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kaffaltii Miseensummaa</label>
                          <input type="text" name="kaffalti" id="company" placeholder="--Bara qabsoo galchii--" class="form-control">
                      </div>
                    </div>
                
                                        </div>

<div class="form-group">
       
  

      <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara Leenjii</label>
                         <input type="text" name="baralenji" id="company" placeholder="--Bara--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Bakka Leenjii</label>
                          <input type="text" name="bakalenji" id="company" placeholder="--Bakka Leenjii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Gosa Leenjii</label>
                          <input type="text" name="gosalenji" id="company" placeholder="--  Gosa Leenjii  --" class="form-control">
                      </div>
                    </div><div class="col-sm-3">
                      <div class="form-group">
                        <label>Marsaa</label>
                          <input type="text" name="marsa" id="company" placeholder="--  Marsaa  --" class="form-control">
                      </div>
                    </div>
                  </div>

</div>









<div class="row">

 \


              <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                                            <label class=" form-control-label"><h4>CV Hogganaa Ol kaa'ii</h4></label>
                                            <input type="file"  name="cv" class="form-control-file">
                                        </div>
                                                             
                    </div>

                       <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Qaama Carraa Barumsaa Kenne</label>
                         <input type="text" name="carrabarumsa" id="company" placeholder="-- carraa barumsaa --" class="form-control">
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
                                        
                                        
             
                  
                         

     <div class="box">
       
<div class="box box-solid box-default col-xs-12 col-lg-12 no-padding">
                      <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-thumbs-up"></i> Turtii isaa keessati hojii gaarii hojjeteef Badhaasa argate yoo jiraate
                        </h4>
                      </div>
                    </div>


      

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

 <div class="box">
<div class="box box-solid box-default col-xs-12 col-lg-12 no-padding">
                      <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-thumbs-up"></i>Itti gaafatamummarra ka’ee yoo jiraate
                        </h4>
                      </div>
                    </div>

                                        
                                           <div class="row">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara</label>
                         <input type="text" name="barakafama" id="company" placeholder="--Bara ka’e galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Dhimmi ittiin ka’e</label>
                          <input type="text" name="dhimakahef" id="company" placeholder="--Dhimmi ittiin ka’e galchii--" class="form-control">
                      </div>
                    </div>
                  </div>
                                        </div>


 <div class="box">
<div class="box box-solid box-default col-xs-12 col-lg-12 no-padding">
                      <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-thumbs-up"></i>Ciminaa fi hanqina ijoo Hoggansichi qabu
                        </h4>
                      </div>
                    </div>


                                           <div class="row">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label>Cimina ijoo</label>
                         <input type="text" name="ciminaijo" id="company" placeholder="--Cimina ijoo galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Hanqina ijoo</label>
                          <input type="text" name="hanqinaijo" id="company" placeholder="--Hanqina ijoo galchii--" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sadarkaa Qabxii</label>
                         <select class="form-control" name="qabxi" required="">
                         <option style="text-align: center;" value="">--  Sadarkaa Qabxii Filadhuu  --</option>
                          <?php foreach ($this->str->getqabxi() as $row){
                             ?>
                          <option value="<?php echo $row->q_id;?>"><?php echo $row->q_name;?></option>
                           <?php 
                            } ?>
                          </select>
                      </div>
                    </div>
                  </div>
                                        </div>
                                               
        




                                    </div>
                                   <div class="col col-md-12" style=" text-align: right;">
                                          <input type="submit" class="btn btn-primary " value="Galmeessi">
                                    </div>        
                        </div>
                         </div>
                 </div>
                        </form>
                  </div>
            </div>
</div>
</div>
<script type="text/javascript">

  $(document).ready(function () {
            $("#sector").change(function () {
                  var sid = $("#sector").val();
                  // alert(sid);
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