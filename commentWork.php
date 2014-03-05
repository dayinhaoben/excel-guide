<!--make comment function work-->
<?php

	require_once './class/MysqlHelper.class.php';
	$mysqlHelper= new MysqlHelper;

	$article_id=$_POST['article_id'];//get article id from link a .
	if(!$_POST['name']){ die("<script language='javascript'>alert('Please type your name!');location.href='excelArticle.php';</script>");}
	if(!$_POST['email']){ die("<script language='javascript'>alert('Please type your email!');location.href='excelArticle.php';</script>");}
	if(!$_POST['content']){ die("<script language='javascript'>alert('Please type your comments!');location.href='excelArticle.php';</script>");}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$content=str_replace("\n", "",str_replace(" ","&nbsp", $content));

	$sql="insert into comments (article_id, comment_name, comment_email, comment_content, comment_time) value ('$article_id','$name','$email','$content',now())";
	$b_res=$mysqlHelper->execute_dml($sql);

	if($b_res==0) {
		echo '<script language="javascript">';
		echo 'alert("Unsuccess!");';
		echo "location.href='excelArticle.php'";
		echo '</script>';
	} else if ($b_res==1) {
		echo '<script language="javascript">';
		echo 'alert("Congratulations! You comment success!");';
		echo "location.href='excelArticle.php'";
		echo '</script>';
	} else if ($b_res==2) {
		echo '<script language="javascript">';
		echo 'alert("You have already have this comments");';
		echo "location.href='excelArticle.php'";
		echo '</script>';	}
?>