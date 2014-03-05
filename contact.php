<?php
	require_once 'template/header.php';
	require_once 'template/leftBox.php';
?>
	
	<!--Main part in the middle-->
	<div id="mainBox">
		<div id="contackbg">
			<div id="formInfo">
				<table >
					<form action="contactWork.php" method="post">
						<tr>							
							<td><input class="inputBox" type="text" name="name" placeholder="Name" /></td>
						</tr>
						<tr>
							<td><input class="inputBox" type="text" name="email" placeholder="E-mail"/></td>
						</tr>
						<tr>
							<td><input class="inputBox" type="text" name="subject" placeholder="Subject"/></td>
						</tr>
						<tr>
							<td><textarea name="content" rows="8" cols="30" placeholder="Content" style="overflow:scroll; overflow-x:hidden; resize:none;"></textarea></td>
						</tr>
						<tr>
							<td colspan="2"><input class="inputBox" type="submit" name="submit" value="send" /></td>
						</tr>
					</form>
				</table>
				
			</div>
		</div>
		
	</div>

<?php
	require_once 'template/footer.php';
?>
	</body>
</html>
