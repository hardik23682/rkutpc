<script>
$(document).ready(function(){
    $(window).load(function(){
	$("#fix").animate({top:'90%'});
	$("#fix").hide();
	$(".btn1").show();
	$(".btn2").hide();
    });
	$(".mchat").click(function(){
	$("#fix").show();
	$(".btn1").show();
	$(".btn2").hide();
    });
	$(".echat").click(function(){
	$("#fix").hide();
	$(".btn1").show();
	$(".btn2").hide();
    });
    $(".btn1").click(function(){
        $("#fix").animate({top:'47%'});
		$(".btn1").hide();
		$(".btn2").show();
    });
	$(".btn2").click(function(){
        $("#fix").animate({top:'90%'});
		$(".btn1").show();
		$(".btn2").hide();
    });
});
</script>
<div class="col-lg-3 col-xs-11" id="fix" style="z-index:11;
height:350px;;border:1px solid;padding:10px;position:fixed;margin-left:65%;
background:#EEE">
<div class="btn1" style="font-family:Calibri;border:1px groove;padding:10px;font-size:18px;letter-spacing:1px;cursor:pointer">Chat With US<img class="echat" style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
</div>		
<div class="btn2" style="font-family:Calibri;border:1px groove;padding:10px;font-size:18px;letter-spacing:1px;cursor:pointer">Chat With US<img class="echat" style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/></div>
<div class="col-lg-12" style="height:225px;border:1px solid;margin-top:10px">
</div>
<div class="col-lg-12" style="height:50px;border:0px solid;margin-top:10px;padding:0px">
<div class="col-lg-10 col-xs-9" style="padding:0px">
<input type="text" class="form-control">
</div>
<div class="col-lg-2"><button class="btn btn-success">>></button></div>
</div>
</div>