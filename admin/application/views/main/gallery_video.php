<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Gallery Video :: DFI </title>

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
    <style>
        #Dvido{
            display: none;
        }
    </style>
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
                              <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Video</li>
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
                              Videpofor syident
                              <a class="btn btn-success float-right btn-sm" data-toggle="modal" href="#addVacancy">+ Add</a>
                          </header>
                          <div class="card-body">
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-square-o"></i></th>
                                  <th class="hidden-phone"> Video</th>
                                  <th class="hidden-phone"> Title</th>
                                  <th class="hidden-phone"> Type</th>
                                  <th class="hidden-phone"> Created on</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($gallery as $vac){?>
                                  <tr>
                                      <td><input type="checkbox" name="blg_id"></td>
                                      <td style="width:30%;">
                                          <?php
                                            if($vac->video_type == 1){
                                          ?>
                                          <iframe width="200" height="100" src="https://www.youtube.com/embed/<?= $vac->video_path; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          <?php } else{ ?>
                                            <video width="200" height="100" controls>
                                              <source src="<?= base_url('../assets/img/gallery/'.$vac->video_path); ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                            </video>
                                          
                                          <?php }?>
                                      </td>
                                      <td style="width:20%;"><?= $vac->title; ?></td>
                                      <td style="width:20%;"><?= $vac->video_type; ?></td>
                                      <td><?= date('d M Y', strtotime($vac->create_date)); ?></td>
                                      
                                     
                                      <td style="width:9%;">
                                          <a class="btn btn-danger btn-sm delete-bttn" data-id="<?= $vac->id; ?>" data-toggle="modal" href="#myModal"><i class="fa fa-trash-o "></i></a>
                                         <!-- <a class="btn btn-primary btn-sm" href="<?= base_url('career/edit/'.$vac->id); ?>"><i class="fa fa-pencil"></i></a>-->
                                      </td>
                                  </tr>
                                  <?php } ?>
                              
                              </tbody>
                          </table>
                              
                          </div>
                      </section>
                      <!--modal start-->
                  </div>

              </div>
          </section>
      </section>
      
      <!--main content end-->
      <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <h1 class="text-danger"><i class="fa  fa-exclamation-triangle"></i></h1>
                      <h3 class="m-4">Are you sure?</h3>
                      <p class="mt-3">Do you realy want to delete these record? this process cannot be undone.  </p>
                      <form class="form-submit" action="<?= base_url('gallery/delete_video'); ?>">
                            <input type="hidden" name="deleteid" value="">
                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>    
                            <button class="btn btn-danger" type="submit">Delete</button>    
                      </form>
                  </div>
                  
              </div>
          </div>
      </div>
      
      <div class="modal fade " id="addVacancy" tabindex="-1" role="dialog" aria-labelledby="addDeallLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myModal">Add new Video</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form class="form-submit" action="<?= base_url('gallery/addvideo'); ?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Title</label>
                                      <input type="text" class="form-control form-control-sm" name="title">
                                  </div>  
                              </div>
                              
                              
                              
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Video type</label>
                                      <select name="v_type" class="form-control" onchange="chngeVdo(this.value)">
                                            <option value="1">Youtube link</option>
                                            <option value="2">Direct video</option>
                                      </select>
                                  </div>
                              </div>
                                      
                                <div class="col-md-8">
                                  <div class="form-group" id="v_ytube">
                                      <label>Video</label>
                                      <input type="text" name="lnk" placeholder="Enet youtube videolink only" class="form-control">
                                      <p class="f-s-10">https://www.youtube.com/watch?v= <span class="text-danger"> wBlTNeuHOUs</span>. pest red part of youtube link only</p>
                                  </div> 
                                    
                                    <div class="form-group" id="Dvido">
                                      <label>Video</label>
                                      <input type="file" class="form-control form-control-sm" name="image" onchange="previreImg(this,'jksjd')" >
                                      <p class="f-s-10 text-danger">Images  size should be 1800*500px.</p>
                                  </div>  
                              </div>
                              
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
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
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.pulsate.min.js"></script>

    <!--right slidebar-->
    <script src="<?= base_url('assets/'); ?>js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?= base_url('assets/'); ?>js/common-scripts.js"></script>

    <!--script for this page only-->
    <script src="<?= base_url('assets/'); ?>js/gritter.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/'); ?>js/pulstate.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js" type="text/javascript"></script>
      <script>
        function chngeVdo(str){
            if(str == 1){
                $('#v_ytube').show();
                $('#Dvido').hide();
            }else{
                $('#v_ytube').hide();
                $('#Dvido').show();
                
            }
        }
      </script>
    
  </body>
</html>
