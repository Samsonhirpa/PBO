<div class="content-wrapper">
<div class="row">
 <!--  <div class="col-md-12">
     <div class="panel-heading">
<div class="panel-title">
   <a href="<?php echo base_url('marketcontroller/editprofile/'.$this->session->userdata('username'))?>" class="btn btn-sm btn-primary"><?php echo $this->lang->line('edit_menu');?>  <i class="fa fa-pencil"></i></a>
                <a href="<?php echo base_url('marketcontroller/admindashboard');?>" class="btn btn-sm btn-primary"><?php echo $this->lang->line('back_menu');?>: </a>
             <a href="<?php echo base_url('marketcontroller/logout');?>" class="btn btn-sm btn-danger"><?php echo $this->lang->line('logout_menu');?>: </a>
               </div></div></div> -->




   <!-- Profile Image --><div class="col-md-6">
    <div class="panel-heading">
<div class="panel-title">
                        <strong>profile information </strong>
                    </div>
          <div class="box box-primary">

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b class="text-bold text-center">ID:</b><p class="text-bold text-center"><?php echo $useraccount->id;?></p>
                </li>
               
                <li class="list-group-item">
                  <b>Username : </b> <p class="text-bold text-center"><?php echo $useraccount->username;?></p>
                </li>
            
                <li class="list-group-item">
                  <b>Password : </b><p class="text-bold text-center"><?php echo $useraccount->password;?></p>
                </li>
              <li class="list-group-item">
                  <b>Level : </b><p class="text-bold text-center"><?php echo $useraccount->role_name;?></p>
                </li>
                   <li class="list-group-item">
                  <b>Email : </b><p class="text-bold text-center"><?php echo $useraccount->email;?></p>
                </li>
                 <li class="list-group-item">
                  <b>Phone NO: </b><p class="text-bold text-center"><?php echo $useraccount->phoneno;?></p>
                </li>
              </ul></div></div>
            </div>
              <div class="col-md-6">
                <div class="panel-heading">
                <div class="panel-title">
                        <strong>Personal Information: </strong>
                    </div>
                <ul class="list-group list-group-unbordered">
                 <div class="box box-primary">
           
                 <li class="list-group-item">
                  <b>First Name : </b><p class="text-bold text-center"><?php echo $useraccount->first_name;?></p>
                </li>
                <li class="list-group-item">
                  <b>Middle Name: </b><p class="text-bold text-center"><?php echo $useraccount->middle_name;?></p>
                </li>
                 <li class="list-group-item">
                  <b>Last Name: </b><p class="text-bold text-center"><?php echo $useraccount->last_name;?></p>
                </li>
                <li class="list-group-item">
                  <b>Gender : </b><p class="text-bold text-center"><?php echo $useraccount->gender_name;?></p>
                </li>
                <li class="list-group-item">
                  <b>Zone : </b><p class="text-bold text-center"><?php echo $useraccount->zname;?></p>
                </li>
                <li class="list-group-item">
                  <b>woreda : </b><p class="text-bold text-center"><?php echo $useraccount->woreda_name;?></p>
                </li>
               
              
              </ul>
              
            </div>
              
</div></div></div>
             
            <!-- /.box-body -->
          
          <!-- /.box -->

          <!-- About Me Box -->
       
          <!-- /.box -->
       