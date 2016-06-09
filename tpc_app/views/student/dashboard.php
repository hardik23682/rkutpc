<!-- start Drive model -->
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:550px">
		<div class="modal-content" style="height:550px">
			<div class="modal-body" style="height:550px">
				<div style="width:100%;border:groove;font-family:Calibri;font-size:20px;color:#003399;padding:10px">Drive Details <a class="close" style="float:right" class="bt">		<img style="float:right" src="<?php echo base_url(); ?>tpc_asset/img/btnclose.png" width="30px"/>			
				</a></div>
				<iframe style="width:100%;border:groove 0px;height:450px" name="page"sframeborder="0"></iframe>
			<div class="" style="width:100%;font-family:Calibri;font-size:20px;color:#003399;padding:10px">
			
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
				$datetime1 =date_create($row->drive_date);
				$datetime2 =new DateTime("now");
				$interval = date_diff($datetime1, $datetime2);
				if($interval->format('%R%a') <= 0)
				{
	?>
		<div class="col-lg-12">
		<div class="col-lg-12" style="border:solid 1px #D3D3D3;margin-top:10px;padding:0px">
		<div class="col-lg-3" style="padding:10px">		
		<img src="<?= base_url(); ?>tpc_asset/<?= $row->prof_pic ?>" class="img-responsive" style="border:solid 1px;border-radius:5px;box-shadow:-3px -3px 3px 2px #777;padding:5px"></div>
			<div class="col-lg-9" style="border:solid 0px;"><h4 style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:27px;color:#CC0000">--->&nbsp;<?= $row->name ?></h4></div>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
			<form action="applyclient" method="post">
			<input type="hidden" value="<?= $row->c_id ?>" name="cid" />
			<input type="hidden" value="<?= $row->selection_process ?>" name="sprocess" />			
			<div href="#" style="font-family:Calibri;font-weight:lighter;letter-spacing:2px;font-size:24px">
			<?= $row->job_title; ?></div>
			<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px">
			<?= $row->job_details; ?>
			<?php
				$originalDate = $row->reg_last_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Imporent Date :<br> Last Date For Registion :<?= $newDate ?>
				<?php
				$originalDate = $row->drive_date;
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<br>Drive Date :<?= $newDate ?>
				</p>
			</div>
			<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding: 10px;background:#EEE">
				<input type="submit" class="btn btn-success" style="float:left;" value="Apply Now" name="dsubmit" /></form>&nbsp;
				<a class="btn btn-success details" style="font-family:Calibri;letter-spacing:1px;" href="<?= base_url(); ?>cstudent/drive/<?php echo $row->c_id ?>" target="page">
				View Details</a>
			</div>
		</div>
		<?php
			}} 
			if(count($records)>7)
			{
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
		}}
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