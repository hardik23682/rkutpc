<!DOCTYPE html>
<html lang="en">
<head>
<title>RKU Placement Cell</title>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.css"  rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/2.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/rkutpcbootstrep.css" rel="stylesheet">
<script src="<?php echo base_url();?>/tpc_asset/js/jquery.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/css/vTicker.js"></script>
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
<body>
<?php if(!$records)
		die("Not Records Found"); 
?>
<div class="col-xs-12" style="border:solid 1px #D3D3D3;padding:5px;margin-top:1%;background:#EEE;border-radius:5px">
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Job Title&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->job_title; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Job Details&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->job_details; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Job Location&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->location; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Required Skills&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->skill_required; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Eligibile percentage&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->eligibility." %"; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Position&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->postion; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">salary / CTC Details&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->CTC; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Bond Details&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->bond_details; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px"> Eligible Year&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->eligibleyear; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Eligible Branch&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->eligiblebranch; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Regition Last Date&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?php
					$originalDate = $records->reg_last_date;
					$newDate = date("d-m-Y", strtotime($originalDate)); 
					?>
					<?= $newDate; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Drive Date&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?php
					$originalDate = $records->drive_date;
					$newDate = date("d-m-Y", strtotime($originalDate)); 
					?>
					<?= $newDate; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Drive vanue&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->drive_vanue; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Selection Process&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->selection_process; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Joing Date&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?php
					$originalDate = $records->joing_date;
					$newDate = date("d-m-Y", strtotime($originalDate)); 
					?>
					<?= $newDate; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Contact Person&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->contact_person; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Contact Number&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->mobile; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Contact MailID&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->email; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Other Details&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">
					<?= $records->other_info; ?>
					</div>
					<div class="col-xs-12" style="border:groove 1px #FFFFCC;height:1px"></div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:20px">Attacement Document&nbsp;&nbsp;</div>
					<div class="col-xs-6" style="border:solid 0px #D3D3D3;padding:5px;background:#EEE;color:#0033CC;letter-spacing:1;font-family:Calibri;font-size:18px">
					<?= $records->attacement; ?><br>
					<a href="#" style="font:Calibri;letter-spacing:1px">View</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="#" style="font:Calibri;letter-spacing:1px">DownLoad</a>
					</div>
</div>
</body>
</html>