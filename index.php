<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
  <script src="js/jquery.js"></script>
    <title>Add Products </title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
}
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
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


