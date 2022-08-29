
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>,contact">Contact</a></li>
              <li class="breadcrumb-item active">Update Contact</li>
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
            <h3 class="card-title">Update Contact</h3>
            <h3 class="card-title float-right">
              <a href="<?php echo base_url(); ?>contact/delete?contact_id=<?php echo $contact_details->contact_id; ?>" class="btn-sm btn-danger">
                Delete This Contact
              </a>
            </h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div class="col-md-6">
              <!-- general form elements -->
              <form action="<?php echo base_url(); ?>contact/update?contact_id=<?php echo $contact_details->contact_id; ?>" role="form" method="post">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="firstname" class="form-control" value="<?php echo $contact_details->firstname; ?>" placeholder="First Name">
                  <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lastname" class="form-control" value="<?php echo $contact_details->lastname; ?>" placeholder="Last Name">
                  <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" name="mobile" class="form-control" value="<?php echo $contact_details->mobile; ?>" placeholder="Mobile">
                  <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $contact_details->email; ?>" placeholder="Email">
                </div>
                <div class="form-group">
                  <label>Post Code</label>
                  <input type="text" name="post_code" class="form-control" value="<?php echo $contact_details->post_code; ?>" placeholder="Post Code">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm float-right"> Submit </button>
              </form>
            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
