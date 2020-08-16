<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/toastr.css">
  <script src="js/toastr.js"></script>
    <title>Add Products </title>
</head>
<style>
    .login-panel {
        margin-top: 50px;
}
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
             <?php if(isset($_GET['error'])){ ?>
                <div lass="row" style="color: red; margin: 20px; text-align: center;" >Username or password Invalied</div>
            <?php } ?>
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In   </h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="login_form" method="post" action="actions.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" id="email" type="Email" autofocus required >
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" id="password" name="password" autofocus required>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >

                        </fieldset>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


