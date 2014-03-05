	<div id="subBody">
			<!--left list box-->
			<div id="leftTopBox">
				<!--beginner and advanced-->
				
					<div class="leftTopBoxTop">
						<div class="articles"><span>For beginners</span></div>
					</div>

					<div class="leftTopBoxBottom">
						<ul>
							<li>
								
								<?php
									require_once './class/MysqlHelper.class.php';
									$mysqlHelper = new MysqlHelper;

									$sql="select article_id, article_title from articles where article_catalog='beginner' order by article_id DESC";
									$res= $mysqlHelper->execute_dql($sql);

									while($row=mysql_fetch_array($res)) {
										echo "<li><a href='excelArticle.php?id=".$row['article_id']."' ><img src='images/goto.jpg'>".$row["article_title"]."</a></li>";								
									}
									mysql_free_result($res);
								?>
							</li>					
						</ul>
					</div>

			

				
					<div class="leftTopBoxTop">
						<div class="articles"><span>For advanced</span></div>
					</div>

					<div class="leftTopBoxBottom">
						<ul>
							<li>
								
								<?php
									require_once './class/MysqlHelper.class.php';
									$mysqlHelper = new MysqlHelper;

									$sql="select article_id, article_title from articles where article_catalog='advance' order by article_id DESC";
									$res= $mysqlHelper->execute_dql($sql);

									while($row=mysql_fetch_array($res)) {
										echo "<li><a href='excelArticle.php?id=".$row['article_id']."' ><img src='images/goto.jpg'>".$row["article_title"]."</a></li>";								
									}
									mysql_free_result($res);
								?>
							</li>					
						</ul>
					</div>

					<div class="leftTopBoxTop">
						<div class="articles"><span>About us</span></div>
					</div>

					<div class="leftTopBoxBottom">
						<ul>
							<li><a href="">Per-Erik Strömblad</a></li>
							<li><a href="">Yinyin Li</a></li>
							<li><a href="">Tor San Frommelin</a></li>
							<li><a href="">Alina Marinescu</a></li>					
						</ul>
					</div>

			
			</div>