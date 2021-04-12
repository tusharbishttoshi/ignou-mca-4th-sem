<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Enquiry list :: DFI</title>

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
                              <li class="breadcrumb-item"><a href="#">Enquiry</a></li>
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
                              Enquiry
                               <span class="all-option pl-5">
                                
                                   <button class="text-danger ml-3" data-toggle="tooltip" data-placement="top" title="Delete all" data-id="delete"><i class="fa fa-trash-o"></i></button>
                              </span>
                          </header>
                          <div class="card-body">
                              <table class="table table-striped table-advance table-hover">
                                  <thead>
                                      <tr>
                                          <th><input type="checkbox" class="chkbx" id="allid" value="0"></th>
                                          <th class="hidden-phone"> Date/time</th>
                                          <th class="hidden-phone"> Enquirer</th>
                                          <th class="hidden-phone"> Contacts</th>
                                          <th> Subject/message</th>
                                          <th> Status</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                              <tbody>
                                  <?php foreach($enquiry as $enq){?>
                                  <tr>
                                      <td><input type="checkbox" class="chkbx" name="blg_id[]" value="<?= $enq->inquiry_id; ?>"></td>
                                      <td><?= date('d.M.Y', strtotime($enq->inquiry_date))?><br><?= date('h:i A', strtotime($enq->inquiry_date))?></td>
                                      <td><?= $enq->name; ?></td>
                                      <td><i class="fa fa-phone"></i><?= $enq->mobile; ?><br><i class="fa fa-envelope-o"></i> <?= $enq->email; ?></td>
                                      <td style="width:35%;">
                                          <h6><?= $enq->inquiry_subject; ?></h6>
                                          <p><?= $enq->inquiry_message; ?></p>
                                      </td>
                                      <td><?= $enq->status; ?></td>
                                      <td style="width:9%;">
                                          <a class="btn btn-danger btn-sm delete-bttn" data-id="<?= $enq->inquiry_id; ?>" data-toggle="modal" href="#myModal"><i class="fa fa-trash-o "></i></a>
                                          <a href="#" class="btn btn-primary btn-sm btnedit" data-toggle="modal" data-target="#edtBox" data-id="<?= $enq->inquiry_id; ?>" data-info="<?= $enq->inquiry_message; ?>" data-name="<?= $enq->name; ?>, <?= $enq->mobile; ?>" data-msg="<?= $enq->remarks; ?>"><i class="fa fa-pencil" data-toggle="tooltip" data-title="View details and edit"></i></a>
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
                      <form class="form-submit" action="<?= base_url('enquiry/delete'); ?>">
                            <input type="hidden" name="deleteid" value="">
                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>    
                            <button class="btn btn-danger" type="submit">Delete</button>    
                      </form>
                  </div>
                  
              </div>
          </div>
      </div>
      
        <div class="modal" id="edtBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="form-submit" action="<?= base_url('enquiry/update'); ?>">
                <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" id="en_title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                    <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Enquery message</label>
                                <textarea class="form-control" name="details" readonly></textarea>
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <input name="edtid" type="hidden" value="">
                                <textarea class="form-control" name="remarks"></textarea>
                            </div>
                        </div>

                    <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
      <!--footer start-->
      
      <div class="modal fade " id="selectAll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <h1 class="text-danger"><i class="fa  fa-exclamation-triangle"></i></h1>
                      <h3 class="m-4">Are you sure?</h3>
                      <p class="mt-3">Do you realy want to <span id="acti-all"></span> all record?.  </p>
                      <form class="form-submit" action="<?= site_url('enquiry/bulkaction')?>">
                            <input type="hidden" name="allids" value="">
                            <input type="hidden" name="attn_all" value="">
                            <button class="btn btn-default" data-dismiss="modal">Cancle</button>    
                            <button class="btn btn-danger" type="submit" id="all-submit">Delete</button>    
                      </form>
                  </div>
                  
              </div>
          </div>
      </div>
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
        $(document).ready(function(){
            $('.btnedit').click(function(){
                $('#en_title').text($(this).data('name'));
                $('textarea[name=details]').val($(this).data('info'));
                $('textarea[name=remarks]').val($(this).data('msg'));
                $('input[name=edtid]').val($(this).data('id'));
            });
        });
      </script>
      <script>
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
