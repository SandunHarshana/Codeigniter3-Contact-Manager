  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AdvanceContacts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>contact">Home</a></li>
              <li class="breadcrumb-item active">Advance Contact List</li>
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
            <h3 class="card-title">Advance Contact List (Using DataTable)</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <p class="text-success"><?php echo $this->session->flashdata('success'); ?></p>
            <table class="table table-bordered table-striped table-hover table-sm" id="dataTable">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Post Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
              foreach ($contacts as $contact)
              {?>
                <tr>
                  <td><?php echo $contact->firstname; ?></td>
                  <td><?php echo $contact->lastname; ?></td>
                  <td><?php echo $contact->mobile; ?></td>
                  <td><?php echo $contact->email; ?></td>
                  <td><?php echo $contact->post_code; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>contact/delete?contact_id=<?php echo $contact->contact_id; ?>" class="btn btn-sm btn-danger">
                      <i class="fa fa-edit"></i> Delete
                    </a>
                    <a href="<?php echo base_url(); ?>contact/update?contact_id=<?php echo $contact->contact_id; ?>" class="btn btn-sm btn-info">
                      <i class="fa fa-edit"></i> Edit
                    </a>
                  </td>
                </tr>
                <?php
              }
              ?>
              </tbody>
            </table>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
