<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Tickect Details from ZOHO DESK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .login-panel {
        margin: 60px 0px 0px -100px;
}
</style>
<?php 
  session_start(); 
  include("functions.php");
  $response = get_ticket_by_Id($_GET['id']);
  $result = json_decode($response);
 // echo "<pre>";print_r($result);die;
?>
<body >
	<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">View Ticket status </h3>
                </div>
                <div class="panel-body" style="width: 80%;">
                	   <div class="row">
                            <div class="col-md-3 "><label>Subject  </label>:</div>
                            <div class="col-md-8"><?php echo $result->subject; ?></div>
                     </div><hr>
                     <div class="row">
                          <div class="col-md-3 "><label>Description  </label>:</div>
                          <div class="col-md-8 "><?php echo $result->description; ?></div>
                     </div><hr>
                      <div class="row">
                          <div class="col-md-3 "><label>Category  </label>:</div>
                          <div class="col-md-8 "><?php echo $result->category; ?></div>
                     </div><hr>
                      <div class="row">
                          <div class="col-md-3 "><label>Priority  </label>:</div>
                          <div class="col-md-8 "><?php echo $result->priority; ?></div>
                     </div><hr>
                      <div class="row">
                          <div class="col-md-3 "><label>Status  </label>:</div>
                          <div class="col-md-8 "><?php echo $result->statusType; ?></div>
                     </div>

                </div>

            </div>
            <div class="row col-md-4"><a href="tickets.php" style="top:20px;">Back to List</a></div>
        </div>
    </div>
</div>
</body>
</html>