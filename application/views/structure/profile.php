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

 <button type="button"  data-toggle="modal" data-target="#modal-default"><i class="fa fa-save"> Edit Password</i></button>



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




             <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Request</h4>
                        </div>
                        <div class="modal-body">


 <form role="form" action="<?php echo base_url('Structure/updateprofile/'.$useraccount->id);?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $useraccount->username;?>" placeholder="username"  readonly type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $useraccount->password;?>" type="text">
                </div>
               
 <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input name="repassword" class="form-control" id="exampleInputPassword1" value="<?php echo $useraccount->password;?>" type="text">
                </div>
               <div class="row">
                <div class="col col-md-12">
                  <input type="submit" class="btn btn-primary" value="Update"name="save">
                </div>
               </div>
              </div>
            </form>

            </div>
      </div>
</div>
            
</div>

       <script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}   
return output;
}
</script>