<?php
session_start();
require_once('config.php');
if (isset($_POST['login'])) {
	$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".md5($_POST['password'])."'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0 ){
		   	$data = mysqli_fetch_assoc($result);
			$_SESSION['email']= $data['email'];
			$_SESSION['user_id']= $data['id']; 
			$_SESSION['name']=$data['name'];
			$_SESSION['success'] = "You are logged in succesfully.";
			header("location:tickets.php");
		}else{
			header("location:index.php?error=1");
		}
}
if(isset($_POST['create_ticket'])){
	require_once('functions.php');
	$date = date('Y-m-d H:i:s');	
	$data = array(
				"departmentId"=> $_POST['department'],
				"category" => "general",                   
                "subject" => $_POST['subject'],
                "description" =>  $_POST['description'],
                "email" => $_POST['email'],
                "dueDate" => "2020-08-14T16:16:16.000Z", 
                "channel" => "Email",                            
                "phone" => "8892433716",
                "priority"=> $_POST['priority'],
                "contactId" => "7189000002179003",
                "status" => "Open"              
	);
	$resposnse = create_ticket_in_Zoho($data,$_POST['name'] ,$_POST['email']);
	$resposnse  = json_decode($resposnse );
	if(isset($resposnse->ticketNumber)){
		$_SESSION['success'] = "Ticket added Successfully";
		header("location:tickets.php");
	}else{
		$_SESSION['error'] = "Problem in adding Ticket..!";
		header("location:add_ticket.php");
	}

}
?>
