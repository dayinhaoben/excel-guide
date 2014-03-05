
<?php
/*for send message to email
	$to="liyinyin07@gmail.com";
	$subject=$_POST['contactName']+$_POST['contactEmail'];
	$message=$_POST['contactContent'];
	$header="youraccount@yourserver.com";
	mail($to,$subject, $message,$header);
*/	



	require_once './class/MysqlHelper.class.php';
	$mysqlHelper= new MysqlHelper;

	if(!$_POST['name']){ die("<script language='javascript'>alert('Please type your name!');location.href='contact.php';</script>");}
	if(!$_POST['email']){ die("<script language='javascript'>alert('Please type your email!');location.href='contact.php';</script>");}
	if(!$_POST['subject']){ die("<script language='javascript'>alert('Please type your subject!');location.href='contact.php';</script>");}
	if(!$_POST['content']){ die("<script language='javascript'>alert('Please type your comments!');location.href='contact.php';</script>");}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$content=$_POST['content'];
	$content=str_replace("\n", "",str_replace(" ","&nbsp", $content));

	$sql="insert into contacts (contact_name, contact_email, contact_subject, contact_content, contact_time) value ('$name','$email','$subject', '$content',now())";
	$b_res=$mysqlHelper->execute_dml($sql);

	if($b_res==0) {
		echo '<script language="javascript">';
		echo 'alert("You message sent UNSUCCESS!");';
		echo "location.href='contact.php'";
		echo '</script>';
	} else if ($b_res==1) {
		echo '<script language="javascript">';
		echo 'alert("Thanks for your contact! We will reply as soon as possible!");';
		echo "location.href='contact.php'";
		echo '</script>';
	} else if ($b_res==2) {
		echo '<script language="javascript">';
		echo 'alert("You have already send your message!");';
		echo "location.href='contact.php'";
		echo '</script>';	}
?>