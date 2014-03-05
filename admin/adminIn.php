<?php
 	
 	require_once '../template/adminHeader.php';
 	require_once '../template/adminLeft.php';
 	require_once '../class/MysqlHelper.class.php';
		$mysqlHelper = new MysqlHelper;
?>		
<div id="adminRight">
	<!--compose view-->
	<div id="list1">
	<form action="adminInComposeWork.php" method="post">
		<h1>Write your new articles here!</h1><br>
		<span>Title :</span><input type="text" name="title" size="100" /><br><br>
		<span>Author:</span><input type="text" name="author" size="98" /><br><br>
		<span>Catalog:</span><select name="catalog">
			<option value="beginner">Beginner</option>
			<option value="advance">Advance</option>
		</select><br><br>
		<span>Time of article:</span><input type="text" name="time" id="time" size="20"/><input type="button" name="timeButton" value="Time Update" onclick="javascript:updateData();"/><br><br>
		<span>Content:</span><br>
			<textarea name="content" id="content" style="width=100%"></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('content');
			</script>
			<br><br>
		<input type="submit" name="submit" />
	</form>
	</div>

	<!--article List view-->
	<div id="list2" style="display:none">
		<h1>Articles</h1>
		<div class="line">
			<input type="button" value="Delete" />
			<input type="button" value="Delete All" />
			<input type="button" value="Add" />
			<input type="text" value="search" />
		</div>

		<div id="table">
			<table border="1" cellpadding="6" >
				<tr><th>Choose</th><th>Article Id</th><th>Article Title</th><th>Article Author</th><th>Article Time</th><th>Article Comments</th><th>Article Catalog</th></tr>
				<tr>
				<!--Get the articles information and show in tables-->
				<?php
					$sql="select article_id, article_title, article_author, article_time, article_total_comments, article_catalog from articles";
					$res= $mysqlHelper->execute_dql($sql);

					while($row=mysql_fetch_assoc($res)) {
						echo "<td><input type='checkbox'/>";	 
						echo "</td><td>".$row["article_id"]."</td>";
						echo "</td><td><a href='#'>".$row["article_title"]."</a></td>";
						echo "</td><td>".$row["article_author"]."</td>";
						echo "</td><td>".$row["article_time"]."</td>";
						echo "</td><td>".$row["article_total_comments"]."</td>";
						echo "</td><td>".$row["article_catalog"]."</td>";	
					echo "</tr>";								
					}
					mysql_free_result($res);
				?>
			</table>
		</div>

		<div class="line">
			<input type="button" value="Delete" />
			<input type="button" value="Delete All" />
			<input type="button" value="Add" />
			<input type="text" value="search" />
		
		</div>
	</div>
	<!--list2 finish-->


	<div id="list3" style="display:none">
		<h1>Articles</h1>
		<div class="line">
			<input type="button" value="Delete" />
			<input type="button" value="Delete All" />
			<input type="text" value="search" />
		</div>

		<div id="table">
			<table border="1" cellpadding="6" >
				<tr><th>Choose</th><th>Contact id</th><th>Contact Name</th><th>Contact E-mail</th><th>Contact Subject</th><th>Contact Time</th></tr>
				<?php
					$sql="select contact_id,contact_name, contact_email, contact_subject, contact_time from contacts";
					$res= $mysqlHelper->execute_dql($sql);

					while($row=mysql_fetch_assoc($res)) {
						echo "<td><input type='checkbox'/>";	 
						echo "</td><td>".$row["contact_id"]."</td>";
						echo "</td><td>".$row["contact_name"]."</td>";
						echo "</td><td>".$row["contact_email"]."</td>";
						echo "</td><td><a href=''>".$row["contact_id"]."</a></td>";
						echo "</td><td>".$row["contact_time"]."</td>";	
					echo "</tr>";								
					}
					mysql_free_result($res);
				?>
				
			</table>
		</div>

		<div class="line">
			<input type="button" value="Delete" />
			<input type="button" value="Delete All" />
			<input type="text" value="search" />
		
		</div>
	</div>
	
	
	


</div>
		
	</body>
</html>