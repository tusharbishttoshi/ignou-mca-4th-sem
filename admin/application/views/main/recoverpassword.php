<html>
    <head>
        <title>Recove your password :: DFI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php if($failed == true){?>
                    <div class="alert alert-danger">
                        <h4 class="text-center"><?= $msg; ?> </h4>
                    </div>
                    <?php }else{ ?>
                    <div class="mt-5 p-5 border">
                        <h4>Reset password</h4>
                        <form class="form-submit1" action="<?= site_url('login/create_pass'); ?>">
                            <div class="form-group">
                                <input type="hidden" name="resetlnk" value="<?= $_REQUEST['resetlink']?>">
                                <label>Create new password</label>
                                <input name="new_pass" class="form-control" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm new Password</label>
                                <input name="conf_pass" class="form-control" type="password">
                            </div>
                            <div class="form-group">
                                <a href="<?= site_url('login'); ?>">back to login</a>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/myjs.js'); ?>"></script>    
</html>