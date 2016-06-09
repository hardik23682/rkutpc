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
<div class="col-lg-3" style="padding:10px;">
<?php require_once("student_left.php"); ?>
</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<div class="col-lg-12" style="padding-top:10px">
		<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:10px">
		<div class="col-lg-3">
			<img src="<?php echo base_url(); ?>tpc_asset/company/01.png" class="img-responsive" style="border:"></div>
			<div class="col-lg-9" style="padding: 10px"><h4 style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">
					TCS Campus Drive</h4></div>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
			<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">This Drive Arrange for MCA & BCA Student In Campus
				<br>Imporent Date :<br> Last Date For Registion :
				15 May - 16<br>Drive Date 25 May - 16</p>
			</div>
			<div class="col-lg-12 result" style="border:solid 1px #D3D3D3;padding: 10px;">			
			<div class="col-lg-3" style="border:solid 1px;font-size:20px;text-align:center;font-family:Calibri;padding:0px">
			<div class="col-lg-12" style="padding:0px;margin:0px;background-color:#FFFFFF;">Aptitude Test</div>
			<img src="<?php echo base_url(); ?>tpc_asset/img/passbtn.png" class="img-responsive" />
			</div>
			<div class="col-lg-3" style="border:solid 1px;background-image:url(<?php echo base_url(); ?>tpc_asset/img/);font-size:20px;text-align:center;font-family:Calibri;padding:0px">
			<div class="col-lg-12" style="padding:0px;margin:0px;background-color:#FFFFFF;">Technical</div>
			<img src="<?php echo base_url(); ?>tpc_asset/img/passbtn.png" class="img-responsive" />
			</div>
			<div class="col-lg-3" style="border:solid 1px;background-image:url(<?php echo base_url(); ?>tpc_asset/img/);font-size:20px;text-align:center;font-family:Calibri;padding:0px">
			<div class="col-lg-12" style="padding:0px;margin:0px;background-color:#FFFFFF;">Group Dicusstion</div>
			<img src="<?php echo base_url(); ?>tpc_asset/img/passbtn.png" class="img-responsive" />
			</div>
			<div class="col-lg-3" style="border:solid 1px;background-image:url(<?php echo base_url(); ?>tpc_asset/img/);font-size:20px;text-align:center;font-family:Calibri;padding:0px">
			<div class="col-lg-12" style="padding:0px;margin:0px;background-color:#FFFFFF;">Personal Inteview</div><br />
			<img src="<?php echo base_url(); ?>tpc_asset/img/failbtn.png" class="img-responsive" />
			</div>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
				<button class="btn btn2 btn-success">Get Result</button>
				<button class="btn btn2 btn-success">Get Round Details</button>
			</div>
		</div>
		<?php
		if(1>7)
			{
		?>	
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
<?php } ?>
</div>
</div>
</div>
</body>
</html>

