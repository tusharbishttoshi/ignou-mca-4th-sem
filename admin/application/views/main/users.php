<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>User list :: Mann Travel </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>/css/jquery.gritter.css" />
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
      <!--sidebar end-->
      <!--main content start-->
          <section id="main-content">
              <section class="wrapper site-min-height">
                  <div class="row">
                      <div class="col-lg-12">
                          <!--breadcrumbs start -->
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">User list</li>
                              </ol>
                          </nav>
                          <!--breadcrumbs end -->
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <!--modal start-->
                          <section class="card">
                              <header class="card-header">
                                  User
                              </header>
                              <div class="card-body">
                                  <table class="table table-striped table-advance table-hover" style="font-size:12px;">
                                  <thead>
                                  <tr>
                                      <th><i class="fa fa-square-o"></i></th>
                                      <th class="hidden-phone"> Name</th>
                                      <th> Gaurdian name</th>
                                      <th> Gender</th>
                                      <th> Contact</th>
                                      <th> Id Number</th>
                                      <th> Address</th>
                                      <th> Date of birth</th>
                                      <th> Qualification</th>
                                      <th> Occupation</th>
                                      <th> Create date</th>
                                      <th> Remarks</th>
                                      <th><i class=" fa fa-edit"></i> Status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach($users as $bg){?>
                                      <tr>
                                          <td><input type="checkbox" name="usr_id[]"></td>
                                          <td class="hidden-phone"><?= $bg->name; ?></td>
                                          <td class="hidden-phone"><?= $bg->gaurdian_name; ?></td>
                                          <td class="hidden-phone"><?= $bg->gender; ?></td>
                                          <td><?= $bg->mobile; ?> <br><?= $bg->email; ?> </td>
                                          <td><?= $bg->id_number; ?> </td>
                                          <td><?= $bg->address; ?> </td>
                                          <td><?= date('d M y', strtotime($bg->dob)); ?></td>
                                          <td><?= $bg->qualification; ?> </td>
                                          <td><?= $bg->occupation; ?> </td>
                                          <td><?= date('d M y', strtotime($bg->create_date)); ?></td>
                                          <td><?= $bg->remarks; ?> </td>
                                          <td><?= $bg->status; ?> </td>
                                        
                                      </tr>
                                      <?php } ?>

                                  </tbody>
                              </table>

                                  <nav aria-label="Page navigation example">
                                      <?= $this->pagination->create_links(); ?>
                                  </nav>
                              </div>
                          </section>
                          <!--modal start-->
                      </div>

                  </div>
              </section>
          </section>
      <!--main content end-->
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
        <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.pulsate.min.js"></script>
        <!--right slidebar-->
        <script src="<?= base_url('assets/'); ?>js/slidebars.min.js"></script>
        <!--common script for all pages-->
        <script src="<?= base_url('assets/'); ?>js/common-scripts.js"></script>
        <!--script for this page only-->
        <script src="<?= base_url('assets/'); ?>js/gritter.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>js/pulstate.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>js/myjs.js" type="text/javascript"></script>    
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    </body>
</html>
