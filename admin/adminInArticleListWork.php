<?php
	
	require_once '../class/MysqlHelper.class.php';
	$mysqlHelper = new MysqlHelper;

	$sql="select * from articles";
	$res= $mysqlHelper->execute_dql($sql);

	while($row=mysql_fetch_row($res)) {
		foreach ($row as $key => $val) {
			echo "--$val";
		}
		echo "<br>";
	}
	mysql_free_result($res);

?>