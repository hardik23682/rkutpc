<script>
$(document).ready(function(){
	var h;
    $(window).load(function(){
        $("#smodel").slideDown()
    });
	$(".anow").click(function(){
	$("#cafeId").val($(this).attr('data-id'));
    var myBookId = $(this).data('id');
	$('#smodal').modal('show');
	$('.btnapply').show();
	});
	$(".details").click(function(){
	$("#cafeId").val($(this).attr('data-id'));
    var myBookId = $(this).data('id');
	$('#smodal').modal('show');
	$('.btnapply').hide();
	});
	$(".exam").click(function()
	{
	$('#emodal').modal('show');
	});
	$(".news").click(function()
	{
	$('#nmodal').modal('show');
	});
	$(".close").click(function(){
		$('#smodal').modal('hide');
		$('#emodal').modal('hide');	
		$('#nmodal').modal('hide');		
    });
	
});

</script>
<script>
function getExam()
{
	window.open('http://localhost/QuizHunt/index.php','Exam Modual - RKU TPC','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1600,height=1600px,fullscreen=yes');
}
</script>
<!-- end exam model -->
<div id="emodal" class="modal fade" style="margin-top:120px">
	<div class="modal-dialog" style="height:350px">
		<div class="modal-content" style="height:350px">
			<div class="modal-body" style="height:350px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Infomation<a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/></a>
				</div>
				<div style="font-family:Calibri;letter-spacing:1px;font-size:20px">
				* Some Basic Infomation Related Exam *<br />
				- - > Please Allow or Disable Browser POPUP.<br />
				- - > Exam Is Start in New Window.<br />
				- - > You Can Login With Your UserName & Password Again.<br />
				- - > iF Any Query then Mail US <a href="#">top@rku.ac.in</a>.<br /><br />
				<input type="checkbox" checked="checked" />
				I Read Infomation & I am Ready For Exam <a onclick="getExam();" class="btn btn-success">Start Exam</a>
				</div>
				</div>
	</div>
	</div>
	</div>
<!-- end exam model -->
<!-- start news model -->
<div id="nmodal" class="modal fade">
	<div class="modal-dialog" style="height:500px">
		<div class="modal-content" style="height:500px">
			<div class="modal-body" style="height:500px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Notification Details<a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/></a>
				</div>
				<img style="border-radius:5px;margin-top:10px" src="<?php echo base_url();?>/tpc_asset/img/rkuga.jpg" class="img-responsive" />
				<div style="font-family:Calibri;letter-spacing:1px;font-size:18px">
				RK University's "Galore" is Saurasthra's Largest Cultural and Sports Fest which held on 14th Feb 2016 #HamuGadhvi Hall-Rajkot
				</div>
				</div>
	</div>
	</div>
	</div>
<!-- end exam model -->
<!-- start Drive model -->
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:550px">
		<div class="modal-content" style="height:550px">
			<div class="modal-body" style="height:550px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Drive Details <a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
				</a></div>
				<!--<input type="text" id="cafeId" value="0" name="Myid"/>
				<button onclick="getval();">show Details</button><br />
				<script>
				
	
				function getval()
				{
				  
				
				var a=1;
				a=document.getElementById("cafeId").value;
				//alert(a);
				}
				</script>-->
				<iframe style="width:100%;border:groove 0px;height:390px" name="page"sframeborder="0"></iframe>
			<div class="" style="width:100%;font-family:Calibri;font-size:20px;color:#003399;padding:10px">
			<input type="checkbox" class="btnapply" checked="checked" />
			<a href="#" class="btnapply">Agree With Term & Condition</a>
			<a class="btn btn-success btnapply" style="float:right;">Apply Now</a></div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
					<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:5px;background:#EEE">
					<div class="col-lg-6" style="padding-top:0px;">
					<img src="<?php echo base_url();?>/tpc_asset/img/people/5.jpg" 
					style="border-radius:5px" class="img-responsive" />
					</div>
					<div class="col-lg-6" style="padding-top:15px;letter-spacing: 2px">
					<a href="profile">Edit Profile</a></h5>
						<a href="logout" style="letter-spacing:1px">Logout</a></div>
					<div class="col-lg-12" style="padding:5px;padding-left:0px">
					<h5 style="letter-spacing:1px;border:solid 1px;background: #Ffffff;padding: 10px">Harsh Bhatt</h5>
					</div>
					</div>
	<div class="col-lg-12" style="padding:0px;border:solid 1px #D3D3D3">
		<div class="col-lg-12" style="padding:5px;border:solid 1px #D3D3D3">
			<h3 style="letter-spacing:1px;background: #Ffffff;">Notification</h3>
		</div>
			<div class="col-lg-12" style="padding:10px">
				<marquee direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);">
					<div style="letter-spacing: 2px">
					<a href="#" class="news" style="color:#0033FF">Gallor Event Is Going On !!!</a></div>
				</marquee>
				</div>

		</div>
	<div class="col-lg-12" style="padding:10px;border:solid 1px #D3D3D3">
		<a href="event">
		<img src="<?php echo base_url(); ?>/tpc_asset/img/eventcala.png" class="img-responsive" /></a>
		</div>
	</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<!-- campus drive -->
	<?php 
		foreach($records as $row)
		{
	?>
		<div class="col-lg-12">
		<div class="col-lg-12" style="border:solid 1px #D3D3D3;margin-top:10px">
		<div class="col-lg-3">
			<img src="<?php echo base_url(); ?>tpc_asset/rku/02.png" class="img-responsive" style="border:"></div>
			<div class="col-lg-9" style="padding: 10px"><h4 style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px"><?= $row->name ?></h4></div>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
			<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">
			<?= $row->job_details; ?>
			<?php
				$originalDate = $row->reg_last_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Imporent Date :<br> Last Date For Registion :<?= $newDate ?>
				<?php
				$originalDate = $row->drive_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Drive Date :<?= $newDate ?></p>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
				
				<a class="btn btn-success anow" style="font-family:Calibri;letter-spacing:1px;" href="drive/<?php echo $row->c_id ?>" target="page">Apply Now</a>
				<a class="btn btn-success details" style="font-family:Calibri;letter-spacing:1px;" href="drive/<?php echo $row->c_id ?>" target="page">
				View Details</a>
				<button class="btn btn-success"  style="font-family:Calibri;letter-spacing:1px;">Started</button>
			</div>
		</div>
		<?php
		}
		?>
		<!-- Campus drive -->
<div class="col-lg-12" align="center" style="padding-top:10px;">
<nav style="border:solid 1px #D3D3D3;background: #EEEEEE">
  <ul class="pagination pagination-lg">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>
</div>
</body>
</html>