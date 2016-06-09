<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:5px;">
					<?php 
					if(isset($profiledata))
					{
					?>
					<div class="col-lg-12" style="padding:10px;height:150px">
					<img alt="<?= $profiledata->photo ?>" src="<?php echo base_url();?>/tpc_asset/img/people/<?= $profiledata->photo ?>" 
					style="border-radius:5px" class="img-responsive" />
					</div>
					<div class="col-lg-12" style="padding:5px;padding-left:0px;">
					<div><img src="<?php echo base_url();?>/tpc_asset/img/sl1.png" style="width:75px;" alt=""></div>
						<div style="margin-top:-48px;padding-top:10px;color:#FFFFFF;margin-left:50px;background-color:#0000CC;height:48px;border-top-right-radius:25px;border-bottom-right-radius:25px;border:1;width:200px;word-wrap: break-word;text-transform:capitalize;letter-spacing:1px;font-size:20px"><?= $profiledata->fname." ".$profiledata->lname ?></div>
						<div class="col-lg-6" style="padding:10px;font-size:16px;letter-spacing:1px;border:solid 1px #D3D3D3;margin-top:12px;text-align:center;border-top:0px"><a href="profile">Edit Profile</a></div>
						<div class="col-lg-6" style="padding:10px;font-size:16px;letter-spacing:1px;border:solid 1px #D3D3D3;margin-top:12px;text-align:center;border-top:0px"><a href="logout">Logout</a></div>
					</div>
					</div>
					<?php }
					 ?>
	<div class="col-lg-12" style="padding:0px;border:solid 1px #D3D3D3;margin-top:0;border-top:none">
		<div class="col-lg-12" style="padding:5px;border:solid 1px #D3D3D3;background-color:#eee;border-top:none">
			<p style="font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:18px;padding-top:10px;color:#C00;text-transform:uppercase">Notification | Updates</p>
		</div>
			<div class="col-lg-12" style="padding:10px;height:350px">
				<marquee direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);" style="height:325px">
					<div style="letter-spacing: 2px;height:325px">
					<?php
			if(isset($nrecords))
			{
			foreach($nrecords as $row)
			{
			?>
					<a href="<?= base_url(); ?>cstudent/news/<?php echo $row->ID ?>" class="news" style="color:#0033FF;font-family:Calibri;font-weight: lighter;letter-spacing: 2px;font-size:18px;"  target="npage"><?= $row->title; ?></a>
					<br />
					<div style="border-top:1px solid #333;margin-top:10px;margin-bottom::10px;width:100%;height:0px;border-radius:10px;">&nbsp;</div>
				<?php 
				}
				} 
				?>		
				</marquee>
				</div>

		</div>
	<div class="col-lg-12" style="padding:10px;border:solid 1px #D3D3D3">
		<a href="event">
		<img src="<?php echo base_url(); ?>/tpc_asset/img/eventcala.png" class="img-responsive" /></a>
		</div>