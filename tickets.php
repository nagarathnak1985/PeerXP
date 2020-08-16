<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tickect Details from ZOHO DESK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!------------->
  <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/toastr.css">
  <script src="js/toastr.js"></script>
  </head>
<body >
<div class="container">
  <div class="row">
  <h3>Tickect Management</h3><h4 style="float: right;"><a href="add_ticket.php">Add Tickect</a></h4>
</div>
<?php 
  session_start(); 
  include("functions.php");
  $response = get_tickets_from_zoho();

  $result = json_decode($response);
  //echo "<pre>";print_r($result);die;
  
?>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>SNO</th>
        <th>ID</th>
        <th>Ticket number</th>
        <th>DepartmentId</th>
        <th>Category</th>
        <th>subject</th>
        <th>priority</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php $i= 1; foreach($result->data as $key=>$value){  ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $value->id; ?></td>
          <td><?php echo $value->ticketNumber; ?></td>
          <td><?php echo $value->departmentId; ?></td>
          <td><?php echo $value->category; ?></td>
          <td><?php echo $value->subject; ?></td>
          <td><?php echo $value->priority; ?></td>
          <td><?php echo $value->statusType; ?></td>
          <td><a href="view_ticket.php?id=<?php echo $value->id ; ?>" >View</a></td>
        </tr>
      <?php $i++; }?>
    </tbody>
  </table>
</div>
  <script type="text/javascript">
<?php if(isset($_SESSION['success'])){ ?>
    toastr.success("<?php echo $_SESSION['success'];?>");
<?php }else if(isset($_SESSION['error'])){  ?>
    toastr.error("<?php echo $_SESSION['error']; ?>");
<?php } ?>
<?php unset($_SESSION['success']); unset($_SESSION['error']); ?>
</script>
</body>
</html>
