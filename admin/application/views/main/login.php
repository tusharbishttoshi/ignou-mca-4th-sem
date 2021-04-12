<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mann Travel">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/favicon.html">

    <title>Login - DFI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets/'); ?>/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-body">
    <div class="container">
        <form class="form-signin form-submit" action="<?= site_url('login/signin'); ?>">
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <div class="text-center">
                    <img class="mb-4" src="https://rashienterprises.info/asset/images/logo.png">
                </div>
                <input type="text" class="form-control" name="user" placeholder="User ID" autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            </div>
        </form>
          <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Forgot Password ?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-submit" action="<?= site_url('login/password'); ?>">
                        <div class="modal-body">
                            <p>Enter your e-mail or mobile below to reset your password.</p>
                            <input type="text" name="userid" placeholder="Email/mobile" autocomplete="off" class="form-control placeholder-no-fix">
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
              </div>
          </div>
        </div>
          <!-- modal -->
    </div>
    <div class="preloader"></div>
    <div class="mynotification"></div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/'); ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js"></script>

  </body>
</html>
