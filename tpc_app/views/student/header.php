<!DOCTYPE html>
<html lang="en">
<head>
<title>RKU Placement Cell</title>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.css"  rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/2.css" rel="stylesheet">
<link href="<?php echo base_url();?>/tpc_asset/css/rkutpcbootstrep.css" rel="stylesheet">
<script src="<?php echo base_url();?>/tpc_asset/js/jquery.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/css/vTicker.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>/tpc_asset/js/full-calendar/fullcalendar.min.js"></script>
<link rel="icon" 
      type="image/png" 
      href="<?php echo base_url();?>/tpc_asset/img/rkulogo.png" />
<style>
.ars
{
height:50px;
text-align:center;
color:#0033FF;
}
.ars:hover
{
border-radius:5px;
background-color:#FFFFFF;
}
</style>

</head>
<script>
$(document).ready(function(){
	var h;
    $(window).load(function(){
        $("#smodel").slideDown()
    });
	$(".anow").click(function(){
	$("#cafeId").val($(this).attr('data-id'));
    var myBookId = $(this).data('id');
	$('#smodal').modal('show');
	$('.btnapply').show();
	});
	$(".details").click(function(){
	$("#cafeId").val($(this).attr('data-id'));
    var myBookId = $(this).data('id');
	$('#smodal').modal('show');
	$('.btnapply').hide();
	});
	$(".exam").click(function()
	{
	$('#emodal').modal('show');
	});
	$(".news").click(function()
	{
	$('#nmodal').modal('show');
	});
	$(".close").click(function(){
		$('#smodal').modal('hide');
		$('#emodal').modal('hide');	
		$('#nmodal').modal('hide');		
    });
	
});

</script>
<script>
function getExam()
{
	window.open('http://localhost/QuizHunt/index.php','Exam Modual - RKU TPC','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1600,height=1600px,fullscreen=yes');
}
</script>
<!-- end exam model -->
<div id="emodal" class="modal fade" style="margin-top:120px">
	<div class="modal-dialog" style="height:350px">
		<div class="modal-content" style="height:350px">
			<div class="modal-body" style="height:350px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Infomation<a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/></a>
				</div>
				<div style="font-family:Calibri;letter-spacing:1px;font-size:20px">
				* Some Basic Infomation Related Exam *<br />
				- - > Please Allow or Disable Browser POPUP.<br />
				- - > Exam Is Start in New Window.<br />
				- - > You Can Login With Your UserName & Password Again.<br />
				- - > iF Any Query then Mail US <a href="#">top@rku.ac.in</a>.<br /><br />
				<input type="checkbox" checked="checked" />
				I Read Infomation & I am Ready For Exam <a onClick="getExam();" class="btn btn-success">Start Exam</a>
				</div>
				</div>
	</div>
	</div>
	</div>
<!-- end exam model -->
<!-- start news model -->
<div id="nmodal" class="modal fade">
	<div class="modal-dialog" style="height:500px">
		<div class="modal-content" style="height:500px">
			<div class="modal-body" style="height:500px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Notification Details<a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/></a>
				</div>
				<iframe style="width:100%;border:groove 0px;height:425px" name="npage"sframeborder="0"></iframe>
				</div>
	</div>
	</div>
	</div>
<!-- end exam model -->
<body style="background-image:url('<?php echo base_url();?>tpc_asset/rku/body-bg.png');background-repeat:repeat-x;background-color:#DCE9F7">
<div id="jobdetails" class="modal fade">
	<div class="modal-dialog" style="height:100%;">
		<div class="modal-content" style="height:80%;width:100%">
			<div class="modal-body" style="height:100%;width:100%">
				<iframe src="<?php echo base_url();?>/index.php/student/driveinfopage"  frameborder="0" height="100%" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12">
	<div class="col-lg-1" align="center">&nbsp;</div>
	<div class="col-lg-10" align="center" style="border:none;padding:0;background-color:#FFFFFF">
	<img src="<?php echo base_url();?>/tpc_asset/img/logo2.png" class="img-responsive">
	</div>
	<div class="col-lg-1" align="center">&nbsp;</div>
</div>
<div class="col-lg-12 ">
<div class="col-lg-1">&nbsp;</div>
<div class="col-lg-10" style="background-color:#FFFFFF;padding:0px;border-radius:5px">
<nav class="navbar navbar-default" style="padding-bottom:0px;">
   <!-- <div class="container-fluid" style="background: #;border-radius:5px;">-->
  <div class="container-fluid" style="background-color:#EEE;border-radius:5px;">
    <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="width:100%;">
        <li class="ars">
		<a href="index" style="color:#003399;font-family:Calibri;font-size:21px;">Dashboard</a>
		</li>
       <li class="ars">
		<a href="result" style="color:#003399;font-family:Calibri;font-size:21px;">Result</a>
		</li>
		<li class="ars">
		<a href="#" class="exam" style="color:#003399;font-family:Calibri;font-size:21px;">Exams</a>
		</li>
		<li class="ars">
		<a href="process" style="color:#003399;font-family:Calibri;font-size:21px">Placement Process</a>
		</li>
      </ul>
      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
