<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".pd").show();
		$(".pdbtn").css('background-color','#0033FF');
		$(".edbtn").css('background-color','#D3D3D3');
		$(".odbtn").css('background-color','#D3D3D3');
		$(".pdbtn").css('color','#FFF');
		$(".edbtn").css('color','#0033CC');
		$(".odbtn").css('color','#0033CC');
		$(".ed").hide();
		$(".od").hide();
    });
    $(".pdbtn").click(function(){
		$(".pd").show();
		$(".ed").hide();
		$(".od").hide();
		$(".pdbtn").css('background-color','#0033FF');
		$(".edbtn").css('background-color','#D3D3D3');
		$(".odbtn").css('background-color','#D3D3D3');
		$(".pdbtn").css('color','#FFF');
		$(".edbtn").css('color','#0033CC');
		$(".odbtn").css('color','#0033CC');
    });
	$(".edbtn").click(function(){
		$(".pd").hide();
		$(".ed").show();
		$(".od").hide();
		$(".pdbtn").css('background-color','#D3D3D3');
		$(".edbtn").css('background-color','#0033FF');
		$(".odbtn").css('background-color','#D3D3D3');
		$(".pdbtn").css('color','#0033CC');
		$(".edbtn").css('color','#FFF');
		$(".odbtn").css('color','#0033CC');
    });
	$(".odbtn").click(function(){
		$(".pd").hide();
		$(".ed").hide();
		$(".od").show();
		$(".pdbtn").css('background-color','#D3D3D3');
		$(".edbtn").css('background-color','#D3D3D3');
		$(".odbtn").css('background-color','#0033FF');
		$(".pdbtn").css('color','#0033CC');
		$(".edbtn").css('color','#0033CC');
		$(".odbtn").css('color','#FFF');
    });
});
</script>
<?php //print_r($profiledata); ?>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
<?php include_once('student_left.php'); ?>
</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<div class="col-lg-12" style="padding-top:10px;">
	<div  class="col-lg-3 pdbtn" style="margin:2px;padding:10px;border-radius:7px">
	<a style="color:#FFFFFF;font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="pdbtn">1.Perosnal Details</a>
	</div>
	<div  class="col-lg-3 edbtn" style="margin:2px;padding:10px;border-radius:7px">
	<a style="font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="edbtn">2.Education Details</a>
	</div>
	<div  class="col-lg-3 odbtn" style="padding:10px;margin:2px;border-radius:7px">
	<a style="font-family:Calibri;letter-spacing:1px;font-size:18px;font-weight:lighter;text-decoration:none;cursor:pointer" class="odbtn">3.Other Details</a>
	</div>
	<div class="col-lg-12 pd" style="padding-left:0px;padding-top:10px;font-family:Calibri;letter-spacing:1px;font-size:20px;padding-bottom:10px">
	
		<fieldset>
		<div class="col-lg-10" style="padding-left:0px">
		<legend>Profile Details</legend>
			<div class="col-lg-6" style="font-size:20px">First Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Last Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-12">
			Email ID<br />
			<input type="email" class="form-control" name="eid" />
			</div>
			<div class="col-lg-12">
			Gender<br />
				<div class="checkbox-inline">
                <input type="radio" name="gender" value="male"  id="male" checked>&nbsp;Male&nbsp;&nbsp;
				<input type="radio" name="gender" value="female"  id="female">&nbsp;Female
            	</div>
			</div>
			<div class="col-lg-12">
			Date Of Birth<br />
			<input type="date" class="form-control" name="eid" />
			</div>
          		<div class="col-lg-12">
			City<br />
			<input type="email" class="form-control" name="eid" />
			</div>
			<br /><br />&nbsp;
			<legend>Family Details</legend>
			<div class="col-lg-6" style="font-size:20px">Father Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Mother Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<br /><br />&nbsp;
			<legend>Contact Details</legend>
			<div class="col-lg-6" style="font-size:20px">Mobile Number
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">LandLine Number ( If Present )
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-12" style="font-size:20px">Current Address with Pincode
			<br />
			<textarea class="form-control">
			</textarea>
			</div>
			<div class="col-lg-12" style="font-size:20px">Permanent Address with Pincode
			<br />
			<textarea class="form-control">
			</textarea>
			</div>
			<div class="col-lg-12" style="font-size:20px">Native City
			<br /><input type="" class="form-control" name="lname" />
			</div>

			</div>
			</fieldset>
		<div class="col-lg-2">&nbsp;</div>
	</div>
	<div class="col-lg-12 ed" style="padding-left:0px;padding-top:10px;font-family:Calibri;letter-spacing:1px;font-size:20px;padding-bottom:10px">
	<fieldset>
		<div class="col-lg-10" style="padding-left:0px">
			<legend>10<sup>th</sup>/SSC Details</legend>
			<div class="col-lg-6" style="font-size:20px">Institute / School Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Board Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Starting Date
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Ending Date
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Total Mark
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Percentage
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<br /><br />&nbsp;
			<legend>12<sup>th</sup>/HSC Details</legend>
			<div class="col-lg-6" style="font-size:20px">Institute / School Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Board Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Starting Date
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Ending Date
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Total Mark
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Percentage
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<br /><br />&nbsp;
			<legend>Bachlor Degree Details</legend>
			<div class="col-lg-12" style="font-size:20px">Bachlor Degree Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Institute / School Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Uni Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Starting Date
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Ending Date
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Total Mark
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Percentage
			<br /><input type="" class="form-control" name="lname" />
			</div>
		</div>
	</fieldset>	
	<br />
			<legend>Master Degree Details</legend>
			<div class="col-lg-12" style="font-size:20px">Master Degree Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Institute / School Name
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Uni Name
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Starting Date
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Ending Date
			<br /><input type="" class="form-control" name="lname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Total Mark
			<br /><input type="" class="form-control" name="fname" />
			</div>
			<div class="col-lg-6" style="font-size:20px">Percentage
			<br /><input type="" class="form-control" name="lname" />
			</div>
		</div>
	</fieldset>
	</div>
	<div class="col-lg-12 od" style="padding-left:0px;padding-top:10px;font-family:Calibri;letter-spacing:1px;font-size:20px;padding-bottom:10px">
		<div class="col-lg-10" style="padding-left:0px">
			<div class="col-lg-12">
			What Your Strength<br />
			<textarea class="form-control" name="eid" ></textarea>
			</div>
			<div class="col-lg-12">
			What Your Weaknes<br />
			<textarea class="form-control" name="eid" ></textarea>
			</div><br />&nbsp;
			<div class="col-lg-12">
			<fieldset>
			<legend>Achievement</legend>
			Achievement Name<br />
			<input type="email" class="form-control" name="eid" />
			Achievement Details<br />
			<textarea class="form-control" name="eid" ></textarea>
			</fieldset>
			</div>
		</div>
	</div>
	<div class="col-lg-10">
	<button class="btn btn-success" style="float:right;font-family:Calibri;font-size:18px">Submit Detail</button>
	</div>
</div>
</div>
</body>
</html>

