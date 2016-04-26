<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<header style="margin-top:-40px;">
<form class="col-md-3 col-md-offset-3 col-sm-6 col-xs-12 job-form" method="post">
		<?php if(!empty($error)) { ?>
			<div class="alert fade in" style="background-color:darkred;"><?=$error;?></div>
		<?php } ?>
		<?php echo form_open('sitecontroller', array(
			'id' => 'frmlogin',
			'role' => 'form'
		));?>
		<h3>Email ID</h3>
		<input type="text" placeholder="Email ID" name="uname" class="form-control">
		<h3>Password</h3>
		<input type="password" placeholder="Password" name="pass" class="form-control">
		<input type="submit" name="submit" value="Login" class="btn dark-red">
			<div>
			<h3 class="text-left">Register As <i class="fa fa-chevron-right"></i><hr style="width:100%"></h3>
	        <div class="btn dark-red" style="padding:5px">
				<a href="<?php echo site_url('sitecontroller/showstudform');?>" style="color:white;letter-spacing:1.5px">Student</a></div>
			<div class="btn dark-red" style="padding:5px">
				<a href="<?php echo site_url('sitecontroller/showcomform');?>" style="color:white;letter-spacing:1.5px">Company</a></div>
			<div class="btn dark-red" style="padding:5px">
				<a href="<?php echo site_url('sitecontroller/showintform');?>" style="color:white;letter-spacing:1.5px">Institute</a></div>
			</div>
	<?php form_close();?>
	</form>
	<div class="owl-carousel owl-header">
			<div class="item" data-background="<?=RES_URL;?>rku/IMG_09931-Large.jpg"></div>
			<div class="item" data-background="<?=RES_URL;?>rku/IMG_9455-Large.jpg"></div>
			<div class="item" data-background="<?=RES_URL;?>rku/IMG_9902.jpg"></div>
  	</div>
</header>
<section>
	<div class="container" style="letter-spacing:1px;">

		<div class="row title text-center">
			<h3>Offering the Best Placement</h3>
			<h6 class="alt">What we offer</h6>
		</div>

		<div class="row">
			<div class="col-md-4 text-center">
				<img src="<?=RES_URL;?>img/heart.png" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?=RES_URL;?>img/letter.png" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?=RES_URL;?>img/watch.png" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
		</div>

	</div>
</section>
<section class="red">
	<div class="container" style="letter-spacing:1px;">
		<div class="row title text-center">
			<h3 style="color:#fff6ef;">Student view About Job</h3>
			<h6 style="color:#fff6ef;">What our Student says</h6>
		</div>
		<div class="row">
			<div class="owl-testimonials">
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/1.png" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/2.png" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/3.png" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/1.png" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/2.png" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p style="color:#FFFFFF">“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="<?=RES_URL;?>img/people/3.png" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
			</div>
		</div>
	</div>	
</section>

<section style="height:10px;margin-top:-50px;margin-bottom: 50px">
<div class="row title text-center">
			<h3>Connect With Us</h3>
		</div>
	<div class="container" style="height:10px;">
		<div class="row owl-clients">
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/01.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/02.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/03.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/04.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/05.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/06.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/07.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?=RES_URL;?>rku/08.png" style="width:100px" class="client" alt="">
			</div>
		</div>
	</div>
</section>

<section class="section-alt2 red" style="margin-bottom:0px;">
	<div class="row title text-center">
		<h3 style="color: white">Job Statistics</h3>
		<h6 class="alt" style="color: white">Here are the most popular categories</h6>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin: 40px">
				<input class="dial" value="71" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" style="color:red" data-thickness=".25">
				<h4 style="color:red">School Of Engineering</h4>
			</div>
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin:40px">
				<input class="dial" value="92" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" data-thickness=".25">
				<h4 style="color: red">School Of Computer Science</h4>
			</div>
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin:40px">
				<input class="dial" value="88" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" data-thickness=".25">
				<h4 style="color: red">School Of Management</h4>
			</div>
		</div>
	</div>
</section>
</body>
</html>