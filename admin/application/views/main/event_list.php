
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Events list ::Dida</title>
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                              <li class="breadcrumb-item active"><a href="#">Events</a></li>
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
                              Events list
                              <span class="all-option pl-5">
                                <button class="text-warning ml-2" data-toggle="tooltip" data-placement="top" title="Active all" data-id="active"><i class="fa fa-eye"></i></button>
                                <button class="text-info ml-3" data-toggle="tooltip" data-placement="top" title="Inactive all" data-id="inactive"><i class="fa fa-eye-slash"></i></button>
                                <button class="text-danger ml-3" data-toggle="tooltip" data-placement="top" title="Delete all" data-id="delete"><i class="fa fa-trash-o"></i></button>
                              </span>
                              <a class="btn btn-success float-right btn-sm" href="#" data-toggle="modal" data-target="#addBox">+ Add</a>
                          </header>
                          <div class="card-body">
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><input type="checkbox" class="chkbx" id="allid" value="0"></th>
                                  <th class="hidden-phone"> Images</th>
                                  <th class="hidden-phone"> Title</th>
                                  <th class="hidden-phone"> Position</th>
                                  <th class="hidden-phone"> Event Date</th>
                                  <th class="hidden-phone"> Description</th>
                                  <th> Create date</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($events as $bg){?>
                                  <tr>
                                      <td><input type="checkbox" class="chkbx" name="blg_id[]" value="<?=$bg->id; ?>"></td>
                                      <td><img src="<?= base_url('../assets/img/events/'.$bg->image); ?>" style="height:50; width:100px;"></td>
                                      <td class="hidden-phone"><?= $bg->title; ?></td>
                                      <td><?= $bg->position; ?> </td>
                                      <td><?= date('d M y', strtotime($bg->event_date)); ?></td>
                                      <td><?= substr($bg->details, 0,300); ?> </td>
                                      <td><?= date('d M y', strtotime($bg->create_date)); ?></td>
                                      <td>
                                          <?php if($bg->status == 'ACTIVE'){?>
                                          <span class="badge badge-success label-mini">Active</span>
                                          <?php }else{?>
                                          <span class="badge badge-danger label-mini">Inactive</span>
                                          <?php }?>
                                      </td>
                                      <td style="width:9%;">
                                          <a class="btn btn-danger btn-sm delete-bttn" data-id="<?= $bg->id; ?>" data-toggle="modal" href="#myModal"><i class="fa fa-trash-o "></i></a>
                                          <a href="<?= site_url('events/edit/'.$bg->id); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                      </td>
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
      <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <h1 class="text-danger"><i class="fa  fa-exclamation-triangle"></i></h1>
                      <h3 class="m-4">Are you sure?</h3>
                      <p class="mt-3">Do you realy want to delete these record? this process cannot be undone.  </p>
                      <form class="form-submit" action="<?= base_url('events/delete'); ?>">
                            <input type="hidden" name="deleteid" value="">
                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>    
                            <button class="btn btn-danger" type="submit">Delete</button>    
                      </form>
                  </div>
                  
              </div>
          </div>
      </div>
      <div class="modal fade " id="selectAll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <h1 class="text-danger"><i class="fa  fa-exclamation-triangle"></i></h1>
                      <h3 class="m-4">Are you sure?</h3>
                      <p class="mt-3">Do you realy want to <span id="acti-all"></span> all record?.  </p>
                      <form class="form-submit" action="<?= site_url('destinations/bulkaction')?>">
                            <input type="hidden" name="allids" value="">
                            <input type="hidden" name="attn_all" value="">
                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>    
                            <button class="btn btn-danger" type="submit" id="all-submit">Delete</button>    
                      </form>
                  </div>
                  
              </div>
          </div>
      </div>
      
    
      <!--footer start-->
      <?php include('common/footer.php'); ?>
          <!--footer end-->
  </section>
      
      <div class="modal fade " id="addBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModal">Add new event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= site_url('events/create_new'); ?>" class="form-submit" method="post" enctype="multipart/form-data">
                        <div class="modal-body p-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" name="position" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event date</label>
                                        <input type="text" name="event_date" class="form-control" id="last_date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event time</label>
                                        <input type="text" name="event_time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Full detail</label>
                                        <textarea id="editor1" type="text" name="details" class="form-control" style="width:700px; height:
                                                                                                                    200px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img style="max-height:200">
                                </div>
                                
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
    <script src="<?= base_url('assets/'); ?>js/gritter.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/'); ?>js/pulstate.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js" type="text/javascript"></script>
    <script>
        $( "#last_date" ).datepicker({
            changeMonth: true,
            numberOfMonths: 1
        });
        $(document).ready(function(){
            $('.all-option button').click(function(){
                var actn = $(this).data('id');
                var ids = '';
                 $('.chkbx').each(function(){
                    if($(this).is(':checked')){
                        ids = ids+$(this).val()+',';
                    }
                });
                $('#acti-all,#all-submit').text(actn);
                $('input[name=attn_all]').val(actn);
                $('input[name=allids]').val(ids);
                $('#selectAll').modal('show');
            });
            
            $('.chkbx').click(function(){
                var allbx = 0;
                $('.chkbx').each(function(){
                    if($(this).is(':checked')){
                        allbx++;
                    }
                });
                if(allbx>0){
                    $('.all-option').show();
                }else{
                    $('.all-option').hide();
                }
            });
            
            $('#allid').click(function(){
                if($(this).is(':checked')){
                    $('.all-option').show();
                    $('.chkbx').prop('checked',true);
                }else{
                    $('.chkbx').prop('checked',false);
                    $('.all-option').hide();
                }
            });
        });
    </script>


  </body>
</html>
