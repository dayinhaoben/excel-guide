<?php
	require_once '../class/MysqlHelper.class.php';
	$mysqlHelper =new MysqlHelper;

	$title=$_POST ['title'];
	$author=$_POST ['author'];
	$catalog=$_POST['catalog'];
	$time=$_POST ['time'];
	$content=$_POST ['content'];

	$sql= "insert into articles (article_title, article_author, article_time, article_content, article_total_comments, article_catalog) 
	values ('$title', '$author', '$time', '$content', 0, '$catalog')";

	$b_res=$mysqlHelper->execute_dml($sql);

	if($b_res==0) {
echo "Unsuccess process!"; 
	} else if ($b_res==1) {
echo "Success process!";
	} else if ($b_res==2) {
echo "Nothing Changes!";
	}

 

?>