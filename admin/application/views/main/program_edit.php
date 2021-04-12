<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Update program ::DFI </title>

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
    <script type="text/javascript" src="<?= base_url('assets/js/editor'); ?>/nicEdit-latest.js"></script> 
    <script type="text/javascript">
    
      bkLib.onDomLoaded(function() {
            new nicEditor({fullPanel : true}).panelInstance('editor1');
      });
    </script>
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
                              <li class="breadcrumb-item"><a href="<?= site_url('programs'); ?>">Program</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Update program</li>
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
                            Update programs
                            <a class="btn btn-success float-right btn-sm" href="<?= site_url('programs'); ?>">Back</a>
                        </header>
                        <div class="card-body">
                            <form class="form-submit" action="<?= site_url('programs/update'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="<?= $event->title; ?>">
                                            <input type="hidden" name="edtid" value="<?= $event->id; ?>">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Full detail</label>
                                            <textarea id="editor1" type="text" name="details" class="form-control" style="width:1080px; height:
                                                                                                                        200px;"> <?= $event->details; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                            <input type="hidden" name="image1" class="form-control" value="<?= $event->images; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="ACTIVE" <?= ($event->status=='ACTIVE')?'selected':''; ?>>Active</option>
                                                <option value="INACTIVE" <?= ($event->status=='INACTIVE')?'selected':''; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img style="max-height:200; max-width:100%" src="<?= base_url('../assets/img/events/'.$event->images); ?>">
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <button class="btn btn-success col-md-4" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
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
      <script src="<?= base_url('assets/'); ?>js/jquery-ui.min.js"></script>
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
    <script src="<?= base_url('assets/'); ?>js/myjs.js" type="text/javascript"></script>
    <script>
        $( "#last_date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1
        });
      </script>

  </body>
</html>
