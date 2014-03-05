<?php
	require_once 'template/header.php';
	require_once 'template/leftBox.php';
?>
	
			
			<!--Main part in the middle-->
			<div id="mainBox">
				<div id="indexImgChange">
					<a id="imgUrl" href=""><img id="image" src="images/homeImg1.jpg"></a>
					<!--Image change-->
					<script type="text/javascript">
						var n=0;
						function changeImgIndex() {
							n++;
							switch (n) {
								case 1: return "images/homeImg1.jpg";
								case 2: return "images/homeImg2.jpg";
							}
						}

						function imgIndex() {
							var image1 = document.getElementById('image');
							var url= document.getElementById('imgUrl');

							image1.src=changeImgIndex();

							if(n==1) {
								url.href="excelArticle.php?id=3";
							} else if (n==2) {
								url.href="excelArticle.php?id=2";
							}

							if(n==2) { n=0;}
							setTimeout('imgIndex()',3000);
						}

						imgIndex();
					</script>
				</div>
				<!--home text-->
	
					<p>When searching online for what should be rather easy excel questions you often encounter answers that requires programming using macros. Many of these questions can be solved with help of combining regular formulas in excel. That is what this page is about, showing how to solve problems in excel, without the need for macros. We keep it simple.</p> 

					<p>Regardless if you are a excel pro or just opened excel for the first time, you will find useful articles on this site. </p>

					<p>For the beginner we show how to navigate around the worksheet, some smart tips on how to work faster and general information on some of the basic tools excel offers to make your day easier.</p>
				

			
					<p>For the more advance users we will show ways to use formulas and tools in analytical in a different way, how to work around the need for macros etc.</p>

					<p>We are always working on improving the site and write more tips, so if you have any questions or suggestions feel free to drop us a comment or email us.</p>

					<p>That said, are you ready to start?
						Either click on the banner or one of the links to the left to get started.
					</p>	
				
			</div>
			

<?php
	require_once 'template/footer.php';
?>

			

			<!--Footer part-->
			
		</div>
	</body>
</html>

