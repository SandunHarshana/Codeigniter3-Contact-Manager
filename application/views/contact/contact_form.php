
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
              <li class="breadcrumb-item active">Add Contact</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-secondary card-outline">
          <div class="card-header">
            <h3 class="card-title">Add Contact</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div class="col-md-6">
              <!-- general form elements -->
              <form action="<?php echo base_url(); ?>contact/add" role="form" method="post">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="firstname" class="form-control" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
                  <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lastname" class="form-control" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">
                  <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" name="mobile" class="form-control" value="<?php echo set_value('mobile'); ?>" placeholder="Mobile">
                  <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email">
                </div>
                <div class="form-group">
                  <label>Post Code</label>
                  <input type="text" name="post_code" class="form-control" value="<?php echo set_value('post_code'); ?>" placeholder="Post Code">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm float-right"> Submit </button>
              </form>
            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
