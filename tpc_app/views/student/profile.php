<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".pd").show();
		$(".ed").hide();
		$(".od").hide();
    });
    $(".pdbtn").click(function(){
		$(".pd").show();
		$(".ed").hide();
		$(".od").hide();
    });
	$(".edbtn").click(function(){
		$(".pd").hide();
		$(".ed").show();
		$(".od").hide();
    });
	$(".odbtn").click(function(){
		$(".pd").hide();
		$(".ed").hide();
		$(".od").show();
    });
});
</script>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
					<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:5px;background:#EEE">
					<div class="col-lg-6" style="padding-top:0px;">
					<img src="<?php echo base_url();?>/tpc_asset/img/people/3.png" 
					style="border-radius:5px" class="img-responsive">
					</div>
					<div class="col-lg-6" style="padding-top:15px;letter-spacing: 2px">
					<a href="profile">Edit Profile</a></h5>
						<a href="#" style="letter-spacing:1px">Logout</a></div>
					<div class="col-lg-12" style="padding:5px;padding-left:0px">
					<h5 style="letter-spacing:1px;border:solid 1px;background: #Ffffff;padding: 10px">Rahul Trivedi</h5>
					</div>
					</div>
	<div class="col-lg-12" style="padding:0px;border:solid 1px #D3D3D3">
		<div class="col-lg-12" style="padding:5px;border:solid 1px #D3D3D3">
			<h3 style="letter-spacing:1px;background: #Ffffff;">Notification</h3>
		</div>
			<div class="col-lg-12" style="padding:10px">
				<marquee direction="up" onmouseover="stop()" onmouseout="start();">
					<div style="letter-spacing: 2px">Gallor Event Is Going On !!!</div>
				</marquee>
				</div>

		</div>
	<div class="col-lg-12" style="padding:10px;border:solid 1px #D3D3D3">
		<a href="event">
		<img src="<?php echo base_url(); ?>/tpc_asset/img/eventcala.png" class="img-responsive" /></a>
		</div>
	</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<div class="col-lg-12" style="padding-top:10px;">
	<div  class="col-lg-3" style="margin:2px;padding:10px;background-color:#0033FF;border-radius:7px">
	<a style="color:#FFFFFF;font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="pdbtn">1.Perosnal Details</a>
	</div>
	<div  class="col-lg-3" style="margin:2px;padding:10px;background-color:#D3D3D3;border-radius:7px">
	<a style="color:#0033CC;font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="edbtn">2.Education Details</a>
	</div>
	<div  class="col-lg-3" style="padding:10px;margin:2px;background-color:#D3D3D3;border-radius:7px">
	<a style="color:#0033CC;font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="odbtn">3.Other Details</a>
	</div>
	<div class="col-lg-12 pd">
		<div class="col-lg-4"></div>
	</div>
	<div class="col-lg-12  ed">
	<h1>Education Detail</h1>
	</div>
	<div class="col-lg-12 od">
	<h1>Other Details</h1>
	</div>
	<div class="col-lg-10">
	<button class="btn btn-success" style="float:right;font-family:Calibri;font-size:18px">Submit Detail</button>
	</div>
</div>
</div>
</body>
</html>

