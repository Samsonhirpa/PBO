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
         <p class="mb-0"><strong class="pr-1">Saala:</strong><?php echo $cabine2->gender_name;?>  &nbsp; &nbsp; &nbsp; <strong class="pr-1">Umurii:</strong><?php echo $cabine2->umuri;?></p>
            
            <p class="mb-0"><strong class="pr-1">Bilbila:</strong><?php echo $cabine2->bilbila;?></p>
            <p class="mb-0"><strong class="pr-1">Emelii:</strong><?php echo $cabine2->email;?></p>
            <p class="mb-0"><strong class="pr-1">Bara Qabsoo:</strong><?php echo $cabine2->baraqabso;?></p>
            <p class="mb-0"><strong class="pr-1">Qaama carraa barumsaa laateef:</strong><?php echo $cabine2->carrabarumsa;?></p>


                     
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Odeeffannoo Teessoo</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Bakka</th>
                <th width="30%">Naannoo</th>
                <th width="30%">Godiina/Magaala </th>
                 <th width="30%">Aanaa</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
                <td><strong>Bakka Dhalootaa</strong></td>
                <td>Oromiyaa</td>
                <td><?php echo $cabine2->zname;?></td>
                <td><?php echo $cabine2->woreda_name;?></td>
              </tr>
               <tr role="row">
                <td><strong>Bakka Hojii</strong></td>
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
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Haala Maatii</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
        
                <th width="30%">Haala Maati</th>
                <th width="30%">Baayyina Dhiiraa</th>
                <th width="30%">Baayyina Dhalaa </th>
                 
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
                <td><?php echo $cabine2->haala;?></td>
                <td><?php echo $cabine2->bayinaM;?></td>
                <td><?php echo $cabine2->bayinaF;?></td>
               
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>




        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Odeeffannoo Hojii</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Sektera</th>
                <th width="30%">Sadarkaa Hoggansaa</th>
                <th width="30%">Mudama</th>
                <th width="30%">Muuxannoo W/G</th>
                 <th width="30%">Muuxannoo Hoggansaa</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->s_name;?></td>
                <td><?php echo $cabine2->l_name;?></td>
                <td><?php echo $cabine2->t_name;?></td>
                <td><?php echo $cabine2->years_name;?></td>
                <td><?php echo $cabine2->y_name;?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>


         <div class="form-group">
                                         
       <label for="company" class=" form-control-label"> <h4>Muuxannoowan gadi fageenyaan</h4></label>
         <textarea rows="5" value="" name="muxannoowan"  class="form-control"><?php echo $cabine2->muxannoowan;?></textarea>
                                        </div>
        
 <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Odeeffannoo Lenjii</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Bara</th>
                <th width="30%">Gosa Leenjii</th>
                <th width="30%">Bakka Leenjii </th>
                 <th width="30%">Marsaa</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->baralenji;?></td>
                <td><?php echo $cabine2->gosalenji;?></td>
                <td><?php echo $cabine2->bakalenji;?></td>
                <td><?php echo $cabine2->marsa;?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>
        

         <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Odeeffannoo Barnoota</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Yuuniversitii</th>
                <th width="30%">Gosa Barnootaa</th>
                <th width="30%">Sadarkaa </th>
                 <th width="30%">Qabxii</th>
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->u_name;?></td>
                <td><?php echo $cabine2->gosaB;?></td>
                <td><?php echo $cabine2->sd_name;?></td>
                <td><?php echo $cabine2->gpa;?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>

         <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Turtii isaa keessati hojii gaarii hojjeteef Badhaasa argate yoo jiraate</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Bara Badhaasa</th>
                <th width="30%">Hoji itti badhaafame</th>
                <th width="30%">Qaama badhaase</th>
                 
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->barabadhasa;?></td>
                <td><?php echo $cabine2->hojibadhasa;?></td>
                <td><?php echo $cabine2->qamabadhase;?></td>
               </tr>
              
              </tbody>
            </table>
          </div>
        </div>
  <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Itti gaafatamummarra ka’ee yoo jiraate</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Bara Kaafamaa</th>
                <th width="30%">Dhimma ittin Kahe</th>
                
                 
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->barakafama;?></td>
                <td><?php echo $cabine2->dhimakahef;?></td>
               
               </tr>
              
              </tbody>
            </table>
          </div>
        </div>


         <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Ciminaa fi hanqina ijoo Hoggansichi qabuu</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table">
              <thead  class="thead-success">
             <tr role="row" style="background-color: #16A085">
                <th width="30%">Cimina Ijoo</th>
                <th width="30%">Hanqina Ijoo</th>
                <th width="30%">Sadarkaa qabxii</th>
                 
                   </tr>
            </thead>

             <tbody>
               <tr role="row">
               
                <td><?php echo $cabine2->ciminaijo;?></td>
                <td><?php echo $cabine2->hanqinaijo;?></td>
                <td><?php echo $cabine2->q_name;?></td>
               </tr>
              
              </tbody>
            </table>
          </div>
        </div>

        <table>
            <p class="mb-0"><strong class="pr-1">Ogeessa Galmeesse:</strong>  &nbsp; &nbsp;<?php echo $cabine2->operator;?></p>
          
        </table>


       
          
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

