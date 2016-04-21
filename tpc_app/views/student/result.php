<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".result").slideUp();
    });
    $(".btn2").click(function(){
        $(".result").slideToggle();
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
	<div class="col-lg-12" style="padding-top:10px">
		<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:10px">
		<div class="col-lg-3">
			<img src="<?php echo base_url(); ?>tpc_asset/rku/02.png" class="img-responsive" style="border:"></div>
			<div class="col-lg-9" style="padding: 10px"><h4 style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">
					TCS Campus Drive</h4></div>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
			<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">This Drive Arrange for MCA & BCA Student In Campus
				<br>Imporent Date :<br> Last Date For Registion :
				15-march-16<br>Drive Date 2 June - 16</p>
			</div>
			<div class="col-lg-12 result" style="border:solid 1px #D3D3D3;padding: 10px;">
<h3>Round - 1 (A) : <a href="#" style="color:#00FF00">Pass</a></h3>
<h3>Round - 2 (T) : <a href="#" style="color:#00FF00">Pass</a></h3>
<h3>Round - 3 (GD) : <a href="#" style="color:#FF0000">Fail</a></h3> 
</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
				<button class="btn btn2 btn-success">Get Result</button>
				<button class="btn btn2 btn-success">Get Round Details</button>
			</div>
		</div>
	
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

