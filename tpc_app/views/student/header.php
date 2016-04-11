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
<body style="background-color:#EEE">
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
	<img src="<?php echo base_url();?>/tpc_asset/img/logo.png" class="img-responsive">
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
        <span class="sr-only">Toggle navigation</span>
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
		<a href="exam.php" style="color:#003399;font-family:Calibri;font-size:21px;">Exams</a>
		</li>
		<li class="ars">
		<a href="history.php" style="color:#003399;font-family:Calibri;font-size:21px">History</a>
		</li>
      </ul>
      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
