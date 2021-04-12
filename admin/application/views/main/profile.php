<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="mann Travel">
    <link rel="shortcut icon" href="<?= base_url('assets/images'); ?>/favicon.ico">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="<?= base_url('assets/'); ?>css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <?php include('common/header.php'); ?>
      <?php include('common/side.php'); ?>
      <!--header end-->
      
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="card">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="<?= base_url('assets/images/profile/'.$prfl->admin_dp); ?>" alt="">
                              </a>
                              <h1><?= $prfl->admin_name; ?></h1>
                              <p>Admin</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active nav-item"><a class="nav-link" href="#"> <i class="fa fa-user"></i> Profile</a></li>
                              <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#edtProfile"> <i class="fa fa-edit"></i> Edit profile</a></li>
                              <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#changePass"> <i class="fa fa-key"></i> Change password </a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      
                      <section class="card">
                          <div class="bio-graph-heading">
                              Profile Details.
                          </div>
                          <div class="card-body bio-graph-info">
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Name </span>: <?= $prfl->admin_name; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>User Type </span>: Admin</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: <?= $prfl->admin_mobile; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email</span>: <?= $prfl->admin_email; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Admin ID </span>: <?= $prfl->admin_id; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Status </span>: <?= $prfl->status; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span><a class="text-primary"  data-toggle="modal" href="#edtProfile"><i class="fa fa-pencil"></i> Edit</a> </span></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span> </span> </p>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </aside>
                  
              </div>
              <!-- page end-->
          </section>
          
      </section>
      <!--main content end-->
        <div class="modal fade " id="edtProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-submit" action="<?= base_url('profile/update'); ?>">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModal">Update profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Image</label>
                                        <input name="image" class="form-control" type="file">
                                        <input type="hidden" value="<?= $prfl->admin_dp; ?>" name="dp_img">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?= base_url('assets/images/profile/'.$prfl->admin_dp); ?>" style="height:69;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" class="form-control" type="text" value="<?= $prfl->admin_name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" value="<?= $prfl->admin_mobile; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input name="mobile" class="form-control" type="text" value="<?= $prfl->admin_email; ?>" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
      
      <div class="modal fade " id="changePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModal">Sets New Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('profile/changepassword'); ?>" class="form-submit">
                        <div class="modal-body p-5">
                            <div class="form-group">
                                <label>Enter old password</label>
                                <input type="password" name="old_pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Enter New password</label>
                                <input type="password" name="new_pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input type="password" name="conf_pass" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
      
      <!--footer start-->
      <?php include('common/footer.php'); ?>
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/'); ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/'); ?>js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="<?= base_url('assets/'); ?>js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?= base_url('assets/'); ?>js/common-scripts.js"></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js"></script>

  </body>
</html>
