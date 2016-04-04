<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".past").hide();
    });
    $(".btnpast").click(function(){
		$(".curr").hide();
        $(".past").show();
    });
	$(".btncurr").click(function(){
        $(".past").hide();
        $(".curr").show();
    });
});
</script>
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:200px">
		<div class="modal-content" style="height:70%">
			<div class="modal-body" style="height:70%">
				<div class="col-lg-12" style="border:solid 1px;font-family:Calibri;font-size:18px;letter-spacing:1px;padding:10px;background-color:#DDD">Approve List</div>
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
	<div class="modal-dialog" style="height:70%;margin-top:200px">
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

<div id="tsmodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:200px">
		<div class="modal-content" style="height:70%">
			<div class="modal-body" style="height:70%">
				<div class="col-lg-12" style="border:solid 1px;font-family:Calibri;font-size:18px;letter-spacing:1px;padding:10px;background-color:#DDD"> List</div>
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
				<div class="col-lg-12" style="border:solid 1px;font-family:Calibri;font-size:18px;letter-spacing:1px;padding:10px;background-color:#DDD">Waiting List</div>
			<div class="col-lg-12" style="padding:10px">
			<p><a href="#" style="font-family:Calibri;font-size:20px">Patel Parth</a> 
			<button class="btn btn-danger" style="float:right;letter-spacing:1px;font-family:Calibri;font-size:16px">Reject</button>
			<button class="btn btn-success" style="float:right;margin-left:10px;margin-right:10px;letter-spacing:1px;font-family:Calibri;font-size:16px">Approve</button>
			</p>
			</div>
			</div>
		</div>
	</div>
</div>
	<div class="col-lg-12" style="margin-bottom:20px">
		<div class="col-lg-3" style="border:solid 1px #D3D3D3;background-color:#DDD">
			<div class="col-lg-12 col-sm-6" style="padding-top:10px;margin-top:10px;padding-bottom:10px;background-color:#FFFFFF;border:solid 1px;">
			<img src="<?php echo base_url(); ?>/tpc_asset/rku/01.png" class="img-responsive">
			</div>
		<div class="col-lg-12 col-sm-12" style="padding:5px;background-color:#DDD">
		<h5 style="letter-spacing:1px">TCS - Gandhinagar</h5>
		</div>
		<div class="col-lg-12 col-sm-12" style="padding:0px;border:solid 1px;background-color:#FFFFFF">
		<div style="padding:10px;font-size:16px">
		<a href="register.php">Edit Profile</a>&nbsp;|&nbsp;
		<a href="#" style="letter-spacing:1px">Logout</a>
		</div>
	</div>
	</div>
		
	<!--<div class="col-lg-12 col-sm-12" style="height:20px;">&nbsp;</div>-->
	<div class="col-lg-12 col-sm-6" style="padding:0px;">
	<a href="#"><img src="<?php echo base_url(); ?>/tpc_asset/img/chat.png" class="img-responsive" /></a>
	</div>
	<div class="col-lg-12 col-sm-6" style="padding:0px;">
	<a href="#"><img src="<?php echo base_url(); ?>/tpc_asset/img/help.png" class="img-responsive"></a>
	</div>
</div>
	<div class="col-lg-9 col-sm-12">
	<div class="col-lg-12 col-xs-12 btn-primary btncurr" style="cursor:pointer;padding:15px;border-radius:5px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">Current Job Statistics
	<a href="#" style="color:#FFFFFF;float:right">+ New Drive</a> 
	<a href="#" style="color:#FFFFFF;float:right">Edit &nbsp;|&nbsp;</a>
	</div>
	<div class="curr">&nbsp;<br />
	<h1>Current Drive Info</h1><br />
	<a href="#smodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Approve</a>
<a href="#wmodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Waiting</a>
<a href="#modal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink">5 Days To Go</a>
	</div>
	<div class="col-lg-12">&nbsp;</div>
	<div class="col-lg-12 btn-success btnpast" style="cursor:pointer;padding:15px;border-radius:5px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">Past Job Statistics</div>
	<div class="past">
	<h1>Past Drive Info</h1><br />
	<a href="#tsmodal" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Total Student</a>
<a href="#ssmodal" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Selected Student</a>
<a href="#modal" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink">2 April 2016</a>
	</div>
	</div>
</div>
</div>
      </div>
	  </div>
      </div>
	  <div class="col-lg-12">&nbsp;</div>
    </body> 