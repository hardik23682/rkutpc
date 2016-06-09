<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".pretalk").slideDown();
		$(".atest").slideUp();
		$(".ttest").slideUp();
		$(".gd").slideUp();
		$(".iview").slideUp();
		
    });
    $(".btnpretalk").click(function(){
        $(".pretalk").slideDown();
		$(".iview").slideUp();
		$(".atest").slideUp();
		$(".ttest").slideUp();
		$(".gd").slideUp();
    });
	$(".btniview").click(function(){
        $(".pretalk").slideUp();
		$(".iview").slideDown();
		$(".atest").slideUp();
		$(".ttest").slideUp();
		$(".gd").slideUp();
    });
	$(".btnatest").click(function(){
        $(".pretalk").slideUp();
		$(".atest").slideDown();
		$(".iview").slideUp();
		$(".ttest").slideUp();
		$(".gd").slideUp();
    });
	$(".btnttest").click(function(){
        $(".pretalk").slideUp();
		 $(".ttest").slideDown();
		$(".iview").slideUp();
		$(".atest").slideUp();
		$(".gd").slideUp();
    });
	$(".btngd").click(function(){
        $(".pretalk").slideUp();
		$(".ttest").slideUp();
		$(".iview").slideUp();
		$(".atest").slideUp();
		$(".gd").slideDown();
    });
	$(".exall").click(function(){
        $(".pretalk").slideDown();
		$(".ttest").slideToggle();
		$(".iview").slideToggle();
		$(".atest").slideToggle();
		$(".gd").slideToggle();
    });
});
</script>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
<?php include_once('student_left.php'); ?>				
</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
<div class="col-lg-12" style="border:1">
<p class="col-lg-12 exall" style="font-family:Calibri;font-size:24px;background-color:#CCC;padding:10px;margin-top:10px;border-radius:8px;color:#C00;text-align:center;cursor:pointer">Common Placement Process</p>
	<div class="col-lg-12" style="border:1px solid;padding:0px;margin-top:10px">
	<div class="col-lg-3" style="background-color: rgb(0, 102, 204); color: rgb(255, 255, 255);padding:5px;text-align:center;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri">&gt;&nbsp;&nbsp;Step - 1					
</div>
	<div class="col-lg-6 btnpretalk" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri;cursor:pointer">Pre Placement Talk					
</div>
<div class="col-lg-3 btnpretalk" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:capitalize;font-size:18px;font-family:Calibri;cursor:pointer">View Details					
</div>
	<div class="col-lg-12 pretalk" style="margin-top:0px;border-radius:0px;border:0px solid;font-family:Calibri;padding:5px;;padding-left:15px;font-size:18px;background-color:#E9EBEE;font-weight:lighter;letter-spacing:1px;text-transform:capitalize;cursor:pointer;color:#993300">In this Give Small Intro About the Company like as Working Domain , working city / country and Give Details about  " What The Of Skills they Require "</div>
	</div>
	
	<!----->
	
	<div class="col-lg-12" style="border:1px solid;padding:0px;margin-top:10px">
	<div class="col-lg-3" style="background-color: rgb(0, 102, 204); color: rgb(255, 255, 255);padding:5px;text-align:center;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri">&gt;&nbsp;&nbsp;Step - 2					
</div>
	<div class="col-lg-6 btnatest" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri;cursor:pointer">Aptitude Test					
</div>
<div class="col-lg-3 btnatest" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:capitalize;font-size:18px;font-family:Calibri;cursor:pointer">View Details					
</div>
	<div class="col-lg-12 atest" style="margin-top:0px;border-radius:0px;border:0px solid;font-family:Calibri;padding:5px;;padding-left:15px;font-size:18px;background-color:#E9EBEE;font-weight:lighter;letter-spacing:1px;text-transform:capitalize;cursor:pointer;color:#993300">This is One type of Online Exam in this Question base on the maths , gk Logical question we are also provide the this type of exam moudel in this web and also visit the web -> <a href="#" style="text-transform:none">www.indiabix.com</a></div>
	</div>
	
	<!----->
	
	<!----->
	
	<div class="col-lg-12" style="border:1px solid;padding:0px;margin-top:10px">
	<div class="col-lg-3" style="background-color: rgb(0, 102, 204); color: rgb(255, 255, 255);padding:5px;text-align:center;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri">&gt;&nbsp;&nbsp;Step - 3					
</div>
	<div class="col-lg-6 btnttest" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri;cursor:pointer">Technical Test				
</div>
<div class="col-lg-3 btnttest" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:capitalize;font-size:18px;font-family:Calibri;cursor:pointer">View Details					
</div>
	<div class="col-lg-12 ttest" style="margin-top:0px;border-radius:0px;border:0px solid;font-family:Calibri;padding:5px;;padding-left:15px;font-size:18px;background-color:#E9EBEE;font-weight:lighter;letter-spacing:1px;text-transform:capitalize;cursor:pointer;color:#993300">This is also a type Of Exam in which student is perform some task base on programming knowlege and logic also ask the some question base on this task</div>
	</div>
	<!----->
	<div class="col-lg-12" style="border:1px solid;padding:0px;margin-top:10px">
	<div class="col-lg-3" style="background-color: rgb(0, 102, 204); color: rgb(255, 255, 255);padding:5px;text-align:center;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri">&gt;&nbsp;&nbsp;Step - 4					
</div>
	<div class="col-lg-6 btngd" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri;cursor:pointer">Group Dicusstion				
</div>
<div class="col-lg-3 btngd" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:capitalize;font-size:18px;font-family:Calibri;cursor:pointer">View Details					
</div>
	<div class="col-lg-12 gd" style="margin-top:0px;border-radius:0px;border:0px solid;font-family:Calibri;padding:5px;;padding-left:15px;font-size:18px;background-color:#E9EBEE;font-weight:lighter;letter-spacing:1px;text-transform:capitalize;cursor:pointer;color:#993300">In this Give some Topic in group of small group and dicuss and student is selected base on the dicusstion this is also avabile on web -> <a href="#" style="text-transform:none">www.indiabix.com</a></div>
	</div>
	
	<!----->
	
	<div class="col-lg-12" style="border:1px solid;padding:0px;margin-top:10px">
	<div class="col-lg-3" style="background-color: rgb(0, 102, 204); color: rgb(255, 255, 255);padding:5px;text-align:center;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri">&gt;&nbsp;&nbsp;Step - 5					
</div>
	<div class="col-lg-6 btniview" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:uppercase;font-size:20px;font-family:Calibri;cursor:pointer">Personal InterView					
</div>
<div class="col-lg-3 btniview" style="background-color: rgb(255,255,255); color:#06C;padding-top:5px;margin-top:0px;letter-spacing:1px;text-transform:capitalize;font-size:18px;font-family:Calibri;cursor:pointer">View Details					
</div>
	<div class="col-lg-12 iview" style="margin-top:0px;border-radius:0px;border:0px solid;font-family:Calibri;padding:5px;;padding-left:15px;font-size:18px;background-color:#E9EBEE;font-weight:lighter;letter-spacing:1px;text-transform:capitalize;cursor:pointer;color:#993300">In this small introduction about the student in front of company HR/Panel and ask some question to check the student</div>
	</div>
	
	
	<!----->
	
	</div>
</div>
</div>
</div>
</body>
</html>