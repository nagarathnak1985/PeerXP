<?php

$dbcon = mysql_connect("localhost","system_task1","system_task1");
/*
if($dbcon)
{
	
	echo "Db connected..3123232";
}
else
{
	echo "not connected..";
}
*/
//exit;

mysql_select_db('system_task',$dbcon);

?>