<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".pastcal").hide();
		$(".upbtn").css("background-color","white");
		$(".upbtn").css("color","red");
		$(".upbtn").css("border-bottom","0");
		$(".pastbtn").css("border-bottom","0");
		$(".pastbtn").css("background-color","#D3D3D3");
		$(".pastbtn").css("color","red");
		$(".fevent").slideUp();
    });
    $(".upbtn").click(function(){
        $(".upcal").show();
		$(".pastcal").hide();
		$(".upbtn").css("background-color","white");
		$(".upbtn").css("color","red");
		$(".pastbtn").css("background-color","#D3D3D3");
		$(".pastbtn").css("color","red");	
    });	 
	$(".pastbtn").click(function(){
        $(".pastcal").show();
		$(".upcal").hide();
		$(".pastbtn").css("background-color","white");
		$(".pastbtn").css("color","red");
		$(".upbtn").css("background-color","#D3D3D3");
		$(".upbtn").css("color","red");

    });
});
</script>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
<?php include_once('student_left.php'); ?>				
</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<!-- Event_class -->
	<!-- 1 --><div col-lg-12 style="padding-top:10px">
		<!-- 2 --><div class="col-lg-4 col-xs-12 btn btn-defuult upbtn" style="font-family:Calibri;font-size:24px;font-weight:lighter;border-radius:7px;cursor:pointer;border:solid 1px;letter-spacing:2px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;">
Upcoming Event
		</div>
		<!-- 3 --><div class="col-lg-4 col-xs-12 btn btn-defuult pastbtn" style="font-family:Calibri;font-size:24px;font-weight:lighter;border-radius:7px;background-color:#D3D3D3;border-radius:7px;cursor:pointer;border:solid 1px;letter-spacing:2px;color:#0000FF;border-bottom-left-radius:0px;border-bottom-right-radius:0px;">
Past Event</div>
			<div class="col-lg-4 col-xs-12 btn btn-defuult" style="font-family:Calibri;font-size:24px;font-weight:lighter;background-color:#D3D3D3;border-radius:7px;cursor:pointer;border:solid 1px;letter-spacing:2px;color:#0000FF;border-bottom-left-radius:0px;border-bottom-right-radius:0px;">
			<?= "Today : ".date("d-m-Y"); ?>
</div>
		</div>	
		
	<div class="col-lg-12 col-xs-12" style="border-bottom:solid 1px;border-right:solid 1px;;border-left:solid 1px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-color:#FF0000;font-size:18px;font-family:Calibri" >	
	<br/>
	<?php
	if(isset($records))
	{
		foreach($records as $row)
		{
				$originalDate = $row->event_date;
				$newDate = date("d-m-Y", strtotime($originalDate));
				$datetime1 =date_create($row->event_date);
				$datetime2 =new DateTime("now");
				$interval = date_diff($datetime1, $datetime2);
				if($interval->format('%R%a') <= 0)
				{
	?>		
	<!-- 4 --><div class="col-lg-12 col-xs-12 upcal">
			<!-- 5 --><div class="col-lg-12" style="border:solid  1px;padding:0px;margin-bottom:10px;background-color:#d3d3d3;">
					<!-- 6 --><div class="col-lg-3" style="background-color:#0066CC;color:#FFFFFF;padding:5px;text-align:center">>&nbsp;&nbsp;<?= $newDate ?>
					
					</div>
					<!-- 7 --><div class="col-lg-7" style="background-color:#FFFFFF;color:#0066CC;padding:5px;">&nbsp;&nbsp;<?= $row->event_name ?>
					
					</div>
					<!-- 8 --><div class="col-lg-2" style="background-color:#FFFFFF;color:#0066CC;padding:5px;">&nbsp;&nbsp;<a class="viewevent" onclick="$('.fevent<?= $row->id  ?>').slideToggle('slow')" style="text-decoration:none;cursor:pointer">View Event</a>
	</div>
					<!-- 9 --><div class="col-lg-12 fevent<?= $row->id  ?> fevent" style="padding:10px;margin-bottom:10px;background-color:#d3d3d3">
						<!-- 10 --><div class="col-lg-6" style="background-color:white;padding:10px;border-radius:5px">
	<a><img style="border-radius:7px;" src="<?php echo base_url();?>/tpc_asset/img/rkuga.jpg" class="img-responsive" /></a>
	</div>
						<!-- 11 --><div class="col-lg-6" style="padding:10px;font-family:Calibri;letter-spacing:1px;font-size:20px">
	Date -> <?= $newDate ?><br />
	Event Title -> <?= $row->event_name ?><br />
	<?= $row->event_details ?>
			</div>
	</div>
	</div>
	</div>
	<?php 
		}
		else if($interval->format('%R%a') > 0)
		{
	?>		
	<!-- 4 --><div class="col-lg-12 col-xs-12 pastcal">
			<!-- 5 --><div class="col-lg-12" style="border:solid  1px;padding:0px;margin-bottom:10px;background-color:#d3d3d3;">
					<!-- 6 --><div class="col-lg-3" style="background-color:#0066CC;color:#FFFFFF;padding:5px;text-align:center">>&nbsp;&nbsp;<?= $newDate ?>
					
					</div>
					<!-- 7 --><div class="col-lg-7" style="background-color:#FFFFFF;color:#0066CC;padding:5px;">&nbsp;&nbsp;<?= $row->event_name ?>
					
					</div>
					<!-- 8 --><div class="col-lg-2" style="background-color:#FFFFFF;color:#0066CC;padding:5px;">&nbsp;&nbsp;<a class="viewevent" onclick="$('.fevent<?= $row->id  ?>').slideToggle('slow')" style="text-decoration:none;cursor:pointer">View Event</a>
	</div>
					<!-- 9 --><div class="col-lg-12 fevent<?= $row->id  ?> fevent" style="padding:10px;margin-bottom:10px;background-color:#d3d3d3">
						<!-- 10 --><div class="col-lg-6" style="background-color:white;padding:10px;border-radius:5px">
	<a><img style="border-radius:7px;" src="<?php echo base_url();?>/tpc_asset/img/rkuga.jpg" class="img-responsive" /></a>
	</div>
						<!-- 11 --><div class="col-lg-6" style="padding:10px;font-family:Calibri;letter-spacing:1px;font-size:20px">
	Date -> <?= $newDate ?><br />
	Event Title -> <?= $row->event_name ?><br />
	<?= $row->event_details ?>
			</div>
	</div>
	</div>
	</div>
	<?php
	} 
	}
	}
	?>
							</div>
	<!-- end Event_class -->
	</div>
</div>
</body>
</html>