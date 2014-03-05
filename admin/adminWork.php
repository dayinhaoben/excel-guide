<?php
	session_start();
	
	require_once '../class/MysqlHelper.class.php';
	$mysqlHelper=new MysqlHelper;
	
	if(!isset($_POST['submit'])) {
		exit("Wrong!");
	}
	
	$username=htmlspecialchars($_POST['username']);
	$password=md5($_POST['password']);

	$sql="select admin_id from admin where username='$username' and password='$password'limit 1";
	$check_query=$mysqlHelper->execute_dql($sql);
	
	if($result = mysql_fetch_array($check_query)) {
		$_SESSION['username'] =$username;
		$_SESSION['admin_id'] =$result['admin_id'];
		  echo '<h3>Dear Sir</h3>'.$username.'<br>Welcome to <a href="adminIn.php"><b>Administrator</a><br>';
	} else {
		exit('Login is not success! click here to <a herf="javascript:history.back(-1);"> go back </a>');
	}
?>
