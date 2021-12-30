<div class="content-wrapper">
      <section class="content" style="min-height: 526px;">
            <div class="col-xs-12">
                  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i></i>Profayilii <?php echo $cabine2->maqa;?>   </h3></div>
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

                  <div class="col-md-12" >
  
<div class="box box-default">
                        <!-- general form elements -->
<div class="student-profile py-4">
  <div class="container" id="divone">
    <div class="row">
      <div class="col-lg-12">


<div class="nav-tabs-custom">
            <!-- Tabs within a box -->
           
       <p><img style="height: 90px;" src="<?php echo base_url();?>dist/img/oro.PNG" class="img-circle" alt="User Image"><b><i style="font: Lucida Bright; font-size: 20px; text-align: center;">         Paartii Badhaadhinaa Mootummaa Naannoo Oromiyaa       </b></i></b><img style="height: 90px;" src="<?php echo base_url();?>dist/img/minster of women.png" class="img-circle" alt="User Image"></p>
           
            </div>


      </div>
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
        <img  style="height: 200px; width: 200px;"  src="<?php echo base_url()?>upload/<?php echo $cabine2->file_name?>"  alt="not displaying">
            <h3><?php echo $cabine2->maqa;?></h3>
          </div>
          <div class="card-body">
            



            <p class="mb-0"><strong class="pr-1">Saala:</strong><?php echo $cabine2->gender_name;?>   <strong class="pr-1">Umurii:</strong><?php echo $cabine2->umuri;?></p>
            <p class="mb-0"><strong class="pr-1">Muudama:</strong><?php echo $cabine2->mudama_amma;?></p>
            <p class="mb-0"><strong class="pr-1">Sektara:</strong><?php echo $cabine2->sector;?></p>
            <p class="mb-0"><strong class="pr-1">Muuxannoo:</strong><?php echo $cabine2->muxannoo;?></p>
            <p class="mb-0"><strong class="pr-1">Yuniveersitii:</strong><?php echo $cabine2->u_name;?>   <strong class="pr-1">GPA:</strong><?php echo $cabine2->gpa;?></p>

            <p class="mb-0"><strong class="pr-1">Bara Qabsoo:</strong><?php echo $cabine2->baraqabso;?></p>
<div class="form-group">
                        <label>Qaama carraa barumsaa laateef</label>
                 <input type="text" name="carrabarumsa" id="company" value="<?php echo $cabine2->carrabarumsa;?>" class="form-control">
                      </div>

                      <div class="form-group">
                                         
       <label for="company" class=" form-control-label"> <h4>Muuxannoowan gadi fageenyaan</h4></label>
         <textarea rows="5" value="" name="muxannoowan"  class="form-control"><?php echo $cabine2->muxannoowan;?></textarea>
                                        </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Bakka Dhaloota</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Naannoo</th>
                <th width="30%">Godiina/Magaala </th>
                 <th width="30%">Aanaa</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
                <td>Oromiyaa</td>
                <td><?php echo $cabine2->zname;?></td>
                <td><?php echo $cabine2->woreda_name;?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>

 <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Haala Maatii : <?php echo $cabine2->haala;?></h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
        
                <th width="30%">Baayyina Dhiiraa</th>
                <th width="30%">Baayyina Dhalaa </th>
                 
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
                <td><?php echo $cabine2->bayinaM;?></td>
                <td><?php echo $cabine2->bayinaF;?></td>
               
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>

<div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Bakka Itti Ramadame</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
            
                <th width="30%">Naannoo</th>
                <th width="30%">Godiina/Magaala </th>
                 <th width="30%">Aanaa</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
                <td>Oromiyaa</td>
                <td><?php echo $cabine2->zname;?></td>
                <td><?php echo $cabine2->woreda_name;?> </td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>

        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Odeeffannoo Barnootaa </h3>
          </div>
          <div class="card-body pt-0">
            
 <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Sadarkaa Barnoota</label>
                         <input type="text" name="sadarkaB" id="company" value="<?php echo $cabine2->sadarkaB;?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gosa Barnoota</label>
                          <input type="text" name="gosaB" id="company" value="<?php echo $cabine2->gosaB;?>" class="form-control">
                      </div>
                    </div>


                  </div>

          </div>
        </div>
  

          <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Itti gaafatamummarra ka’ee yoo jiraate</h3>
          </div>
          <div class="card-body pt-0">
            
 <div class="row">
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara</label>
            <p class="mb-0"><?php echo $cabine2->barakafama;?></p>
                        
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <label>Dhimmi ittiin ka’e</label>
                          <p class="mb-0"<?php echo $cabine2->dhimakahef;?></p>
                      </div>
                    </div>
                  </div>

          </div>
        </div> 
         <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Ciminaa fi hanqina ijoo Hoggansichi qabuu</h3>
          </div>
          <div class="card-body pt-0">
            
  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Cimina ijoo</label>
                         <p class="mb-0"><?php echo $cabine2->ciminaijo;?></p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Hanqina ijoo</label>
                         <p class="mb-0"><?php echo $cabine2->hanqinaijo;?></p>
                      </div>
                    </div>
                  </div>

          </div>
        </div> 
          <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Turtii isaa keessati hojii gaarii hojjeteef Badhaasa argate yoo jiraate</h3>
          </div>
          <div class="card-body pt-0">
            
  <div class="row">
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Bara</label>
                        <p class="mb-0"><?php echo $cabine2->barabadhasa;?></p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Hoji itti badhaafame</label>
                         <p class="mb-0"><?php echo $cabine2->hojibadhasa;?></p>
                      </div>
                    </div><div class="col-sm-4">
                      <div class="form-group">
                        <label>Qaama badhaasicha kenneef</label>
                         <p class="mb-0"><?php echo $cabine2->qamabadhase;?>i</p>
                      </div>
                    </div>
                  </div>

          </div>
        </div> 
      </div>
       
     </div>
   
</div>
</div>
</div>
</div>
<button class="btn-success" onclick="myfun('divone')">print</button>

</section>
</div>
<script type="text/javascript">
  
  function mywholepage(){
    window.print();
  }
  function myfun(divone){
    var backup = document.body.innerHTML;
    var divcontent = document.getElementById('divone').innerHTML;
    document.body.innerHTML = divcontent;
    window.print();
    document.body.innerHTML = backup;
  }
</script>

