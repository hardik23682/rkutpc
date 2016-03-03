<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RKU Placement Cell</title>
<style>
.myinput
{
border:groove;
border-color:transparent;
border-radius:1px;
color:#FFFFFF;
border-bottom-color:blue;
background-color:transparent;
}
.myinput:focus
{
background-color:#FFFFFF;
}
</style>
</head>
<body>


<!-- all forms div with linking to page -->
<div id="smodal" class="modal fade">
	<div class="modal-dialog" style="height:100%">
		<div class="modal-content" style="height:100%">
			<div class="modal-body" style="height:100%">
				<iframe src="index.php/sitecontroller/sform"  frameborder="0" height="100%" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>

<div id="cmodal" class="modal fade">
	<div class="modal-dialog" style="height:100%">
		<div class="modal-content" style="height:100%">
			<div class="modal-body" style="height:100%">
				<iframe src="index.php/sitecontroller/cform"  frameborder="0" height="100%" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>

<div id="imodal" class="modal fade">
	<div class="modal-dialog" style="height:100%">
		<div class="modal-content" style="height:100%">
			<div class="modal-body" style="height:100%">
				<iframe src="index.php/sitecontroller/iform"  frameborder="0" height="100%" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>

<header style="margin-top:-40px;">
<form class="col-md-3 col-md-offset-3 col-sm-6 col-xs-12 job-form" style="padding:2">
		<h3>Mail ID</h3>
		<input type="text" placeholder="User ID" name="uname" class="form-control">
		<h3>Password</h3>
		<input type="password" placeholder="Password" name="uname" class="form-control">
		<input type="submit" value="Login" class="btn dark-red">
			<div>
			<h3 class="text-left">Register As <i class="fa fa-chevron-right"></i><hr style="width:100%"></h3>
	        <div class="btn dark-red" style="padding:5px">
			<a href="#smodal" data-toggle="modal" style="color:white;letter-spacing:1.5px">Student</a></div>
			<div class="btn dark-red" style="padding:5px">
				<a href="#cmodal" data-toggle="modal" style="color:white;letter-spacing:1.5px">Company</a></div>
			<div class="btn dark-red" style="padding:5px">
				<a href="#imodal" data-toggle="modal" style="color:white;letter-spacing:1.5px">Institute</a></div>
			</div>
	</form>
	<div class="owl-carousel owl-header">
			<div class="item" data-background="<?= RES_URL; ?>rku/IMG_09931-Large.jpg"></div>
			<div class="item" data-background="<?= RES_URL; ?>rku/IMG_9455-Large.jpg"></div>
			<div class="item" data-background="<?= RES_URL; ?>rku/IMG_9902.jpg"></div>
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
				<img src="<?= RES_URL; ?>img/heart.png" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?= RES_URL; ?>img/letter.png" alt="">
				<h4>Searching for the best job</h4>
				<p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?= RES_URL; ?>img/watch.png" alt="">
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
			<h3 style="color:#fff6ef;">Student Speak</h3>
			<h6 style="color:#fff6ef;">What our Student says</h6>
		</div>
		<div class="row">
			<div class="owl-testimonials">
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/1.png" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/2.png" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/3.png" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We will work with you to fully understand your business and to inform our <a href="#" class="blue-color">marketing</a> ”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/1.png" class="testimonial-client img-circle" alt="">
					<h4>Markus Dovenberg</h4>
					<h5 class="alt">Web Designer</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p>“We can create a brand that stands out and reflects the message you convey”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/2.png" class="testimonial-client img-circle" alt="">
					<h4>Johnathan Doe</h4>
					<h5 class="alt">Marketing Manager</h5>
				</div>
				<div class="text-center1">
					<div class="testimonial-box">
						<p style="color:#FFFFFF">“Using the outcomes from the <a href="#" class="blue-color">Analysis</a>, we will put together a plan for the most effective ”</p>
					</div>
					<img src="<?= RES_URL; ?>img/people/3.png" class="testimonial-client img-circle" alt="">
					<h4>Kennedy Johnson</h4>
					<h5 class="alt">SEO</h5>
				</div>
			</div>
		</div>
	</div>	
</section>

<section style="height:10px;margin-top:-50px;margin-bottom: 50px">
<div class="row title text-center">
			<h3>Our Prominent Recruiters</h3>
		</div>
	<div class="container" style="height:10px;">
		<div class="row owl-clients">
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/01.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/02.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/03.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/04.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/05.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/06.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/07.png" style="width:100px" class="client" alt="">
			</div>
			<div class="item text-center">
				<img src="<?= RES_URL; ?>rku/08.png" style="width:100px" class="client" alt="">
			</div>
		</div>
	</div>
</section>

<section class="section-alt2 red">
	<div class="row title text-center">
		<h3 style="color: white">Job Statistics</h3>
		<h6 class="alt" style="color: white">Here are the most popular categories</h6>
	</div>
	<div class="container">
		<div class="row" style="padding: 10px">
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin: 40px">
				<input class="dial" value="71" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" style="color:red" data-thickness=".25">
				<h4 style="color:red">Webdesign Service</h4>
			</div>
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin:40px">
				<input class="dial" value="92" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" data-thickness=".25">
				<h4 style="color: red">Graphic Design</h4>
			</div>
			<div class="col-md-3 text-center" style="background-color: white;color: red;padding: 10px;border-radius:10px;margin:40px">
				<input class="dial" value="88" data-readonly="true" data-bgColor="transparent" data-fgColor="#22c0e8" data-width="150" data-linecap="round" data-inputcolor="red" data-thickness=".25">
				<h4 style="color: red">Branding</h4>
			</div>
		</div>
	</div>
</section>
</body>
</html>