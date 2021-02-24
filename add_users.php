
<?php $this->load->view('admin/include/header');?>
<!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<form method="post" action="<?php echo base_url()?>index.php/users/add" enctype="multipart/form-data">
<label>User Name:</label>
 <input type="text" name="user_name" class="form-control col-md-4" />
    <label>Email:</label>
    <input type="email" name="email" class="form-control col-md-4" />
    <label>Password:</label>
    <input type="password" name="password" class="form-control col-md-4"/>
    <label >Gender:&nbsp;</label>
    <input type="radio" value="male" name="gender" />Male
    <input type="radio" value="female" name="gender" />female
    <br />
    <label>Phone Number:</label>
    <input type="text" name="phone_no" class="form-control col-md-4" />
    <br />
    <input type="file" name="picture" class="form-control col-md-4" />
    <br
     />
    <input type="submit" value="Add User" class="btn btn-lg btn-info btn-block col-md-2" />
</form>
       
       
       
         <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php $this->load->view('admin/include/footer');?>














