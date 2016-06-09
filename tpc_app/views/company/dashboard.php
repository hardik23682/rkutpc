<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".past").hide();
		$(".details").slideUp();
		$(".chart").slideDown();
    });
    $(".btnpast").click(function(){
		$(".curr").hide();
        $(".past").show();
    });
	$(".btncurr").click(function(){
        $(".past").hide();
        $(".curr").show();
    });
	$(".wlist").click(function(){
		$('#wmodal').modal('show');
	});
	$(".btnchart").click(function(){
		$(".chart").slideDown();
		$(".details").slideUp();
	});
	$(".btndetails").click(function(){
		$(".chart").slideUp();
		$(".details").slideDown();

	});
	$(".close").click(function(){
		$('#smodal').modal('hide');
		$('#wmodal').modal('hide');
	});
});

</script>
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:150px">
		<div class="modal-content" style="height:70%">
			<div class="modal-body" style="height:70%">
			<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Approve List <a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
				</a></div>
			<div class="col-lg-12" style="padding:10px">
			<p><a href="#" style="font-family:Calibri;font-size:20px">Patel Parth</a> 
			<button class="btn btn-danger" style="float:right;letter-spacing:1px;font-family:Calibri;font-size:16px">Block</button>
			</p>
			</div>
			</div>
		</div>
	</div>
</div>

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
<div id="wmodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:200px;">
		<div class="modal-content" style="height:70%">
			<div class="modal-body" style="height:70%">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px;background-color:
				#D3D3D3">wating List <a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
				</a></div>
				<iframe style="width:100%;border:groove 0px;height:225px" name="page"sframeborder="0"></iframe>
			<!--<div class="col-lg-12" style="padding:10px">
			<p><a href="#" style="font-family:Calibri;font-size:20px">Patel Parth</a> 
			<button class="btn btn-danger" style="float:right;letter-spacing:1px;font-family:Calibri;font-size:16px">Reject</button>
			<button class="btn btn-success" style="float:right;margin-left:10px;margin-right:10px;letter-spacing:1px;font-family:Calibri;font-size:16px">Approve</button>
			</p>
			</div>-->
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
<?php include_once('company_left.php'); ?>				
</div>
	<div class="col-lg-9" style="padding-top:10px">
	<div class="col-lg-6 btncurr" style="cursor:pointer;background-color: #337AB7;padding:15px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">Current Job Statistics</div>
	<div class="col-lg-6  btnlink" style="text-align: right;cursor:pointer;background-color: #337AB7;padding:15px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">
	<a href="#" style="color: white">Edit</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>ccompany/addDrive" style="color: white;">+ Post New Drive</a></div>
	<div class="curr">
	<?php 
	if(isset($records))
	{
		foreach($records as $row)
			{ 
				$datetime1 =date_create($row->drive_date);
				$datetime2 =new DateTime("now");
				$interval = date_diff($datetime1,$datetime2);
				if($interval->format('%R%a') <= 0)
				{ 
	?>
					<div class="col-lg-8">
					<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:27px;color:#CC0000">-- >&nbsp;<?= $row->job_title ?></p>
					<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:20px">
			<?= $row->job_details; ?>
			<?php
				$originalDate = $row->reg_last_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Imporent Date :<br> Last Date For Registion :<?= $newDate ?>
				<?php
				$originalDate = $row->drive_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Drive Date :<?= $newDate ?>
				</p>
	
	</div>
	<div class="col-lg-4" style="height:300px">
		<button class="btn btnchart col-lg-6" style="margin-top:10px;border-radius:0px;font-family: Calibri;color:red;letter-spacing: 1px">View In Graph</button>
			<button class="btn  btndetails col-lg-6" style="margin-top:10px;border-radius:0px;font-family: Calibri;color: red;letter-spacing: 1px">View Details</button>
				<div class="chart" style="font-family: Calibri;font-size:20px;letter-spacing:1px;padding:10px">
				<!--<iframe src="file:///C:/wamp/www/rkutpc_Part1/tpc_app/views/company/graph.htm"></iframe>-->
				<img src="<?php echo base_url();?>/tpc_asset/img/cchart.PNG" />
				</div>
				<div class="details" style="font-family: Calibri;font-size:20px;letter-spacing:1px;padding:10px">
				Total Student : 30<br>
				Male		  : 25<br>
				Female   	  : 30
				</div>	
	</div>
			<div class="col-lg-12">
			<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">
			<a href="#smodal" data-toggle="modal">Approve</a></div>
			<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">
			<a class="wlist" href="<?php echo base_url()."ccompany/wlist/".$row->c_id; ?>" target="page">
			Waiting</a></div>
			<?php 
	if($interval->format('%R%a') == -0) {
	 ?>
	 <div class="col-lg-4" style="padding:8.5px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink;">
	<marquee behavior="alternate" scrolldelay="750" direction="right" style="padding:0px">
	<a href="#" style="padding:0px">Post Result</a>
	</marquee>
	<?php }
	else
	{ 
	?>
			<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink;">
			<a href="#modal" data-toggle="modal">After <?= $interval->format('%a'); ?> Days</a><?php } ?></div>
			</div>
	<?php 
				}
				else
				{
				//echo "<p style='font-size:24px;;padding:5px;margin-top:10px;letter-spacing:1px;font-family:Calibri;font-weight:lighter'>Not Any Active Drive At This Time OR Date is Over ...You Can Viwe Details In <a class='btnpast' style='cursor:pointer;text-decoration:blink'>Past Drive / job Statistics</a> </p>";
				}
				}
				}
	?>
	</div>
	<div class="col-lg-12 col-xs-12">&nbsp;</div>
	<div class="col-lg-12 col-xs-12  btnpast" style="cursor:pointer;background-color: #5CB85C;padding:15px;border-radius:5px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF;">Past Job Statistics</div>
	<div class="past">
		<?php 
		if(isset($records))
		{
		foreach($records as $row)
			{ 
			$datetime1 =date_create($row->drive_date);
				//$datetime2 =date_create('2016-05-12');
				$datetime2 =new DateTime("now");
				$interval = date_diff($datetime1, $datetime2);
				if($interval->format('%R%a') > 0)
				{ 
				?>
				<div class="col-lg-12" style="border:1px solid ;padding:10px;margin:5px;;border-radius:5px">
				<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:27px;color:#CC0000">-- >&nbsp;<?= $row->job_title ?></p>
					<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:20px">
			<?= $row->job_details; ?>
			<?php
				$originalDate = $row->reg_last_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Imporent Date :<br> Last Date For Registion :<?= $newDate ?>
				<?php
				$originalDate = $row->drive_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Drive Date :<?= $newDate ?>
				</p>
				<?php 
				$DBdate = $row->drive_date;
				$nDate = date("d-m-Y", strtotime($DBdate))
				?>
				<div class="col-lg-12">
				<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase"><a href="#tsmodal"  data-toggle="modal">Total Student</a></div>
		<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">
		<a href="#ssmodal" data-toggle="modal">Selected Student</a></div>
		<div class="col-lg-4" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink">
		<a href="#modal" data-toggle="modal"><?= $nDate ?></a></div></div></div>
			<?php
				}
				}
				}
			?>
			</div>
 </div>