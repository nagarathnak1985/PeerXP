<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\ourstyle.css">
  <script src="js/jquery.js"></script>
    <title>Add Ticket </title>
</head>
<style>
    .login-panel {
        margin-top: 20px;
}
</style>
<body>
<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Submit a Ticket </h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="add_ticket" method="post" action="actions.php" >
                        <fieldset>
                            <div class="form-group">
                                <label>Department</label>
                                 <select class="form-control select" name="department" id="department" required>
                                 <option value="">Select Department</option>
                                 <option value="7189000002187084">7189000002187084</option>
                                 <option value="7189000001062045">7189000001062045</option>
                                 <option value="7189000000051431">7189000000051431</option>
                               </select>
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                 <select class="form-control select" name="category" id="category" required>
                                   <option value="">Select Category</option>
                                   <option value="genaral">Genaral</option>
                                   <option value="private">Private</option>
                                   <option value="public">Public</option>
                               </select>
                            </div>
                           <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control"  name="subject" type="text" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"  name="description" id="description" placeholder="Description" required></textarea>
                            <div class="form-group">
                                <label>priority</label>
                              <select class="form-control select" name="priority" id="priority" required>
                                 <option value="">Select Priority</option>
                                 <option value="high">High</option>
                                 <option value="medium">Medium</option>
                                 <option value="low">Low</option>
                               </select>
                            <div class="form-group">
                               <label>Name </label>
                                <input class="form-control"  name="name" type="text" id="name" value="<?php echo $_SESSION['name'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input class="form-control"  name="email" type="text" id="email" value="<?php echo $_SESSION['email'] ?>" readonly>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Create Ticket" name="create_ticket" >

                        </fieldset>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

