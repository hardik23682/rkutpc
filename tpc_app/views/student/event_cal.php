<!-- start Drive model -->
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:550px">
		<div class="modal-content" style="height:550px">
			<div class="modal-body" style="height:550px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Drive Details <a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
				</a></div>
				<iframe style="width:100%;border:groove 0px;height:390px" name="page"sframeborder="0"></iframe>
			<div class="" style="width:100%;font-family:Calibri;font-size:20px;color:#003399;padding:10px">
			
			<input type="checkbox" class="btnapply" checked="checked" />
			<a href="#" class="btnapply">Agree With Term & Condition</a>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
<?php include_once('student_left.php'); ?>				
</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<!-- campus drive -->
	<?php 
		$profile=1;
		if(!isset($profile))
		{
			echo "<a href='profile'><img src='".base_url()."/tpc_asset/img/comProfile.png' class='img-responsive'></a>";
		}
		else
		{
			if(isset($records))
			{
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
			<form action="applyclient" method="post">
			<input type="hidden" value="<?= $row->c_id ?>" name="cid" />
			<input type="hidden" value="<?= $row->selection_process ?>" name="sprocess" />			
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
				<input type="submit" class="btn btn-success" style="float:right;" value="Apply Now" name="dsubmit" /></form>
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
	<?php
		}
		else
		{
			echo "<div style='letter-spacing:1px;padding:10px;font-size:36px;border:groove 1px #CCC;margin-top:10px;color:red;background-color:#D3D3D3;border-radius:5px;font-weight:lighter;text-align:center;font-family:Calibri'>Not Any Drive At This Time For You .....<div>";
		}
	}
	?>
</div>
<p style=""
</div>
</div>
</div>
</body>
</html>