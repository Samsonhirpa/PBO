

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <section class="content">

 <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"style ="font-size:40px; "></style><strong>Training Details</strong></h3>
              
                <a class="btn btn-primary pull-right" href="<?php echo base_url('Structure/manage_training');?>">Back List</a>
                <a class="btn btn-primary pull-right" href="<?php echo base_url('BDDDDOcontroller/dashboard')?>"><i class="fa fa-home"></i></a>
                
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody style="font-family: serif;">
                <tr>
                  <th style="width: 200px">Date</th>
                  <td><?php echo $training->date;?></td>
                  </tr>
                <tr>
                     
                </tr>
                  <th style="width: 200px">Training Organizing Body</th>
                  <td><?php echo $training->tob;?></td>
                  

                </tr>
                <tr>
                  <th style="width: 100px">Type of Trainig/topics</th>
                  <td><?php echo $training->top;?></td>
                </tr>        
                <tr>
                  <th style="width: 100px">Type of Trainer</th>
                  <td><?php echo $training->tot_name;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Participant Male</th>
                  <td><?php echo $training->male;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Participant Female</th>
                  <td><?php echo $training->female;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Awareness raised topics</th>
                  <td><?php echo $training->awareness;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Zone</th>
                  <td><?php echo $training->zname;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Woreda</th>
                  <td><?php echo $training->woreda_name;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Kebele</th>
                  <td><?php echo $training->kebele;?></td>
                </tr>
                 <tr>
                  <th style="width: 100px">Total Date of Training</th>
                  <td><?php echo $training->dot;?></td>
                </tr>

                
              </tbody>
             
            </table>
            <table class="table table-bordered">
               <tbody style="font-family: serif;">
                <tr>
                  <th colspan="2"  style="width: 100px;"><strong> Children Whose Birth Was Registered</strong></th>
                </tr>
                <tr>
                      <td><b>Age:=</b> <?php echo $training->age;?></td>
                    
                      <td><b>No Male:=</b> <?php echo $training->nomale;?></td>
                    
                      <td><b>No Female:=</b> <?php echo $training->nofemale;?></td>
                      
                </tr>
              </tbody>
            </table>
            </div>

          </div>

        </div>
        
         

    </section>

 
  </div>
      <!-- /.row -->
</section> 