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
	$(".btnchart").click(function(){
		$(".chart").slideDown();
		$(".details").slideUp();
	});
	$(".btndetails").click(function(){
		$(".chart").slideUp();
		$(".details").slideDown();

	});
});

</script>
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:150px">
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

<div id="tsmodal" class="modal fade">
	<div class="modal-dialog" style="height:70%;margin-top:150px">
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

		<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:5px;background:#EEE">
				<div class="col-lg-12" style="padding-top:0px;border-radius:5px;letter-spacing:1px;border:solid 1px;background: #Ffffff;">
					<img src="<?php echo base_url();?>/tpc_asset/rku/01.png" class="img-responsive" alt="Company Logo">

					<div class="col-lg-12" style="letter-spacing:1px;border:solid 1px;background: #Ffffff;margin-left:-20px;padding:5px;box-shadow:5px -1px 3px 2px #D3D3D3">
						<h5>TCS - Gandinagar</h5>
					</div>
						<div class="col-lg-12" style="padding-top:5px;letter-spacing: 2px;">
							<a href="<?php echo base_url(); ?>ccompany/editprofile">Edit Profile</a></h5>&nbsp;|&nbsp;
							<a href="#" style="letter-spacing:1px">Logout</a>
						</div><br>&nbsp;

				</div>
		<div class="col-lg-12 mchat" style="padding:0px;padding-top:20px" onclick="window.location='http://www.facebook.com';"></div>
		<div class="col-lg-12 mhelp" style="padding:0px;" onclick="window.location='http://www.facebook.com';">
			
		</div>
			</div>
			</div>

	<div class="col-lg-9">
	<div class="col-lg-6 btncurr" style="cursor:pointer;background-color: #337AB7;padding:15px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">Current Job Statistics</div>
		<div class="col-lg-6  btnlink" style="text-align: right;cursor:pointer;background-color: #337AB7;padding:15px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">
			<a href="#" style="color: white">Edit</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>ccompany/addDrive" style="color: white;">+ Post New Drive</a></div>
	<div class="curr">
		<div class="col-lg-8">
			<h3 style="font-family:Calibri;letter-spacing:1px ">Title : TCS Campus Drive.</h3>
				<p style="font-size:18px;font-family: Calibri;letter-spacing: 1px">
				We are arrange TCS Drive on 20th April 2016 ,in which eligible student from stream of MCA , BCA ,BSC IT, BE .
In this  drive  3 Rounds As Below
1)	  aptitude Round
2)	 Practical Round
3)	 Personal Round<br><br>
					-> Last Date Of Regition : 30th Marth 2016.
				</p>
			</div>
		<div class="col-lg-4" style="border: solid 0px;height:250px;">
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
			<a href="#smodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Approve</a>
<a href="#wmodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Waiting</a>
<a href="#modal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink">5 Days To Go</a>
	</div>
	<div class="col-lg-12 col-xs-12">&nbsp;</div>
	<div class="col-lg-12 col-xs-12  btnpast" style="cursor:pointer;background-color: #5CB85C;padding:15px;border-radius:5px;font-size:20px;letter-spacing:1px;font-weight:lighter;font-family:Calibri;color:#FFFFFF">Past Job Statistics</div>
	<div class="past">
	<h1>Past Drive Info</h1><br />
	<a href="#tsmodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Total Student</a>
<a href="#ssmodal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase">Selected Student</a>
<a href="#modal" class="col-xs-12 col-sm-4" data-toggle="modal" style="padding:10px;background-color:#ddd;border:solid 1px;letter-spacing:1px;font-family:Calibri;font-size:20px;text-transform:uppercase;text-decoration:blink">2 April 2016</a>
	</div>
	</div>
</div>
</div>
      </div>
	  </div>
      </div>
	  <div class="col-lg-12" style="height:20px">&nbsp;</div>
    </body> 