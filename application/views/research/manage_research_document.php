<div class="content-wrapper">
      <div class="box">
            <div class="row">
                  <div class="col col-md-12">
                        <?php
                        if ($this->session->flashdata('success_msg')) {
                              ?>
                              <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                              </div>
                              <?php
                        }
                        if ($this->session->flashdata('error_msg')) {
                              ?>
                              <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                              </div>
                              <?php
                        }
                        ?>
                  </div>
            </div>
      </div>
      <button type="button"  data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus-square btn btn-primary">Add</i>
      </button>

      <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Research Document Upload</h4>
                        </div>
                        <div class="modal-body">
                              <div class="box-body">
                                    <form action="<?php echo base_url('Structure/File_upload') ?>" method="Post" enctype="multipart/form-data">
                                          <div class="form-group">
                                                <label>Title</label>
                                                <input name="title" class="form-control" placeholder="Title:">
                                          </div>
                                          <div class="form-group">
                                                <label>Subject</label>
                                                <input class="form-control" name="subject" placeholder="Subject:">
                                          </div>
                                            <div class="form-group">
                                                  <label>The solution given for the problems</label>
                                          <textarea name="detail" id="editor1" class="form-control" placeholder="Detail Here ..."> </textarea>
                                            </div>
                                          <div class="form-group">
                                                
                                                <div class="btn btn-default btn-file">
                                                      <i class="fa fa-paperclip"></i> Research Attachment
                                                      <input type="file" name="attachment">
                                                </div>
                                                <p class="help-block">Max. 32MB</p>
                                          </div>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">

                                    <button type="reset" class="btn btn-danger"><i class="fa fa-pencil"></i> Reset</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>

                              </div> 

                              <!-- /.box-footer -->
                        </div>
                        </form>
                        <!-- /. box -->
                  </div>
            </div>
            <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
<!-- /.modal -->
<div class="box-body">
      <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                  <tr role="row" style="background-color: black;color: white;">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 35.733px;" aria-label="Browser: activate to sort column ascending">TL</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Research Title</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 170.733px;" aria-label="Browser: activate to sort column ascending">Research Subject</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Document </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 101.683px;" aria-label="Platform(s): activate to sort column ascending">Dcreated by</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.217px;" aria-label="Engine version: activate to sort column ascending">Action</th>
            </thead>
            <tbody>
                  <?php
                  $no = 0;
                  foreach ($this->str->getResearchDocument() as $row) {
                        $no++;
                        ?>
                        <tr role="row" class="odd">
                              <td ><?php echo $no; ?></td>
                              <td><?php echo $row->title; ?></td>
                              <td><?php echo $row->subject; ?></td>
                              <td><?php echo $row->file_name; ?>|
                               <td><?php echo $row->created_by; ?></td>     
                              </td>
                              <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                    <a href="<?php echo base_url('Structure/download/'.$row->id)?>" class="btn btn-sm btn-primary">download_<i class="fa fa-download"></i></a>
                              </td>

                        <?php }
                        ?>
            </tbody>
      </table>
</div>
</div>
</div>
<script>
      $(document).ready(function () {
            $('#example').DataTable({
                  dom: 'lBfrtip',
                  buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                  ]
            });
      });
</script>
