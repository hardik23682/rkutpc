<!DOCTYPE html>
<html lang="en">
<head>
<title>RKU Placement Cell</title>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.css"  rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/2.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>/tpc_asset/css/rkutpcbootstrep.css" rel="stylesheet">
<script src="<?php echo base_url();?>/tpc_asset/js/jquery.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/tpc_asset/css/vTicker.js"></script>
<link rel="icon" 
      type="image/png" 
      href="<?php echo base_url();?>/tpc_asset/img/rkulogo.png" />
<style>
.ars
{
height:50px;
text-align:center;
color:#0033FF;
}
.ars:hover
{
border-radius:5px;
background-color:#FFFFFF;
}
</style>
</head>
<?php if(!(isset($nrec)))
		die("Not Records Found"); 
?>
<?php if(isset($nrec->photo))
{
?>
<img style="border-radius:5px;margin-top:10px" src="<?php echo base_url();?>/tpc_asset/img/<?= $nrec->photo ?>" alt="<?= $nrec->photo ?>" class="img-responsive" />
<?php } ?>
				<div style="font-family:Calibri;letter-spacing:1px;font-size:18px">
				<?= $nrec->details ?>
				</div>
				
</script>
</script>