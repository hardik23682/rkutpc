<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap.css"  rel="stylesheet"/>
<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>/tpc_asset/assents/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>/tpc_asset/assents/css/2.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/tpc_asset/css/rkutpcbootstrep.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap-fileupload.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/tpc_asset/css/bootstrap-theme.css" rel="stylesheet">

<link rel="icon"
      type="image/png" 
      href="<?php echo base_url(); ?>/tpc_asset/img/rkulogo.png" />
	<style>
.ar
{
text-align:center;
font-family:Calibri;
font-size:18px;
letter-spacing:1px;
font-weight:lighter;
}
.ar:hover
{
border-radius:3px;
background-color:#FFFFFF;
}
</style>
<script src="<?php echo base_url(); ?>/tpc_asset/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/tpc_asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/tpc_asset/js/vTicker.js"></script>
<script src="<?php echo base_url(); ?>/tpc_asset/js/moment-with-locales.js"></script>
<script src="<?php echo base_url(); ?>/tpc_asset/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".past").hide();
		$(".details").slideUp();
		$(".chart").slideDown();
		$(".stud").slideUp();
    });
	$(".studnm").click(function(){
	$('#ssmodal').modal('show');
		//$(".stud").slideToggle();
		//alert("my");
	});
	$(".close").click(function(){
		$('#smodal').modal('hide');
		$('#wmodal').modal('hide');
	});
});
</script>
</head>
<body>
<div id="ssmodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:150px">
		<div class="modal-content" style="height:70%">
			<div class="modal-body" style="height:70%">
				<div class="col-lg-12" style="border:solid 1px;font-family:Calibri;font-size:18px;letter-spacing:1px;padding:10px;background-color:#DDD">Selected List</div>
			<div class="col-lg-12" style="padding:10px">
			<p><a href="#" style="font-family:Calibri;font-size:20px">Patel Parth</a> 
			<button class="btn btn-primary" style="float:right;letter-spacing:1px;font-family:Calibri;font-size:16px">View Details</button>
			</p>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="col-xs-12" style="padding:5px;margin-top:1%;">
<div class="col-xs-7" style="padding-left:0px">
<?php 
	if(isset($records))
	{
		foreach($records as $row)
		{
			echo "<a href ='../drive/".$row->c_id."' class='studnm' style='font:Calibri;font-size:16px;color:#0066FF;letter-spacing:1px;font-weight:lighter'target='_self'>".$row->fname." ".$row->lname."</a>";
		?>
 </div>
 <div class="col-xs-5" style="float:right">
 <a href="#" class="btn btn-success" style="letter-spacing:2px">Approve</a>
 <a href="#" class="btn btn-danger" style="letter-spacing:2px">Reject</a>
 </div>
  </div>
 <?php
 }
 }
 else
 	echo "<div class='col-xs-12' style='font:Calibri;font-size:20px;color:#0066FF;font-weight:lighter;text-align:center'>Not Any Student Apply Yet....</div>";
 ?>
</body>
