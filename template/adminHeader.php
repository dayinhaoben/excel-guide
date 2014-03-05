<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/adminCss.css">
		<script type="text/javascript" src="../ckeditor/ckeditor.js">
		
		</script>
		<script language="javascript" type="text/javascript">
			var lastObj=null;
			var lastIdx=1;
			function test(obj,idx){
			 	if(!lastObj){
			 	lastObj = document.getElementById("test");
			  	lastIdx = 1;
			}
			 
			lastObj.className = "new"+lastIdx;
			var old = document.getElementById("list"+lastIdx);
			if(old)old.style.display="none";
			 
			obj.className = "class"+idx;
			var n = document.getElementById("list"+idx);
			if(n)n.style.display="block";
			 
			lastObj = obj;
			lastIdx = idx;
			 
			}

			 function updateData() {
			 	var now=new Date();
			 	var month, hours, minutes, seconds;
			 	var intYear, intMonth, intDate, intHours, intMinutes, intSeconds;
			 	intYear = now.getFullYear();
			 	intMonth = now.getMonth()+1;
			 	intDate = now.getDate();
			 	intHours = now.getHours();
			 	intMinutes= now.getMinutes();
			 	intSeconds= now.getSeconds();
			 	/*Month*/
			 	if(intMonth<10) {
			 		month = "0" +intMonth;
			 	} else {
			 		month = intMonth;
			 	}
			 	/*hours*/
			 	if(intHours==0) {
			 		hours = "00";
			 	} else if(intHours<10) {
			 		hours = "0" +intHours;
			 	} else {
			 		hours= intHours;
			 	}
			 	/*Minutes*/
			 	if (intMinutes==0) {
			 		minutes = "00";
			 	} else if(intMinutes<10) {
			 		minutes = "0" +intMinutes;
			 	} else {
			 		minutes= intMinutes;
			 	}
			 	/*seconds*/
			 	if(intSeconds==0) {
			 		seconds="00";
			 	}else if(intSeconds<10) {
			 		seconds  = "0" +intSeconds;
			 	} else {
			 		seconds= intSeconds;
			 	}

                
                document.getElementById("time").value=intYear+"-"+month+"-"+intDate+" "+hours+":"+minutes+":"+seconds;
            }
		</script>
	</head>
