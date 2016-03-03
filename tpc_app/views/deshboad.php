<head>
<title>RKU Placement Cell</title>
<link href="../boot/css/bootstrap.css"  rel="stylesheet"/>
<link href="../boot/css/bootstrap.min.css" rel="stylesheet"/>
<link href="../boot/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="css/2.css" rel="stylesheet">
<script src="../boot/js/jquery.js"></script>
<script src="../boot/js/bootstrap.min.js"></script>
<script src="css/vTicker.js"></script>
<link rel="icon" 
      type="image/png" 
      href="../img/rkulogo.png" />
<style>
a
{
}
.ar:hover
{
border-radius:5px;
background-color:#FFFFFF;
}
</style>
</head>
<body>
<div id="jobdetails" class="modal fade">
	<div class="modal-dialog" style="height:100%;">
		<div class="modal-content" style="height:80%">
			<div class="modal-body" style="height:100%">
				<iframe src="jobdetails.php"  frameborder="0" height="100%" width="100%px"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12">
	<div class="col-lg-1" align="center">&nbsp;</div>
	<div class="col-lg-10" align="center" style="border:none;padding:20;">
	<img src="../img/logo.png" class="img-responsive">
	</div>
	<div class="col-lg-1" align="center">&nbsp;</div>
</div>

<div class="col-lg-12">
<nav class="navbar navbar-default">
  <div class="container-fluid" style="background-color:rgba(255, 66, 66, 0.85);border-radius:5px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li class="active" style="width:150px;font-family:Calibri;font-size:24px;">
		&nbsp;
		</li>
        <li class="ar" style="text-align:center;width:250px;font-family:Calibri;font-size:24px;letter-spacing:2px;font-weight:lighter">
		<a href="deshboad.php" style="color:blue;font-family:Calibri">Dashboard</a>
		</li>
       <li class="ar" style="text-align:center;width:250px;font-family:Calibri;font-size:24px;letter-spacing:2px;font-weight:lighter">
		<a href="result.php" style="color:blue;font-family:Calibri">Result</a>
		</li>
		<li class="ar" style="text-align:center;width:250px;font-family:Calibri;font-size:24px;letter-spacing:2px;font-weight:lighter">
		<a href="exam.php" style="color:blue;font-family:Calibri">Exams</a>
		</li>
		<li class="ar" style="text-align:center;width:250px;font-family:Calibri;font-size:24px;letter-spacing:2px;font-weight:lighter">
		<a href="history.php" style="color:blue;font-family:Calibri">History</a>
		</li>
      </ul>
      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>


	<div class="col-lg-12">&nbsp;</div>
	
	<div class="col-lg-12" style="">
	
		<div class="col-lg-3">
			<div class="col-lg-4" style="padding:5px">
			<img src="../img/people/4.png" 
			style="border-radius:360px" class="img-responsive">
			</div>
		
		<div class="col-lg-8" style="padding:15px">
		<h4 style="letter-spacing:1px">Riddhi Trivedi</h4>
		<h5 style="letter-spacing:1px"><a href="register.php">Edit Profile</a></h5>
		<a href="#" style="letter-spacing:1px">Logout</a>
		</div>
	
		
	<div class="col-lg-12" style="height:20px">&nbsp;</div>
	
	<div class="col-lg-12" style="font-size:26px">
  <?php 
  include 'monthly-calendar-plugin/cal.php'; 
  calendar();
  ?>
	</div>
	
	<div class="col-lg-12" style="height:20px">&nbsp;</div>
	
	<div class="col-lg-12">
		<div class="panel-primary panel">
  <!-- Default panel contents -->
		<div class="panel-heading"><h3>Recent News </h3></div>
		<div id="Tabs" role="tabpanel">
 			<ul class="nav nav-tabs" role="tablist">
			<li class="active">
			<a href="#news" arial-controls="News" role="tab" data-toggle="tab">News</a>
			</li>
			</ul>
		</div>
		<script type="text/javascript" src="Javascript/jquery-vticker-min.js"></script>
<noscript class="displayNone"> This website uses Javascript </noscript>
<script type="text/javascript">
$(function(){ 
		   $('#news-container').vTicker({ speed: 500, pause: 4000, animation: 'fade', mousePause: true, showItems:1, height: 130 }); });
</script>
		
  <div class="panel-body" style="padding:10px">
		<div class="tab-content" style="border:thin;padding:10px">
		<div role="tabpanel" class="tab-pane active" id="All">
			<div id="news-container">
    <ul>       
                <li class="newsTxt">
                    <p>
                        <span id="ContentPlaceHolder1_UserNewsDisplayLocalSite1_rpNews_lblPublishDate_0" class="newsDate">February 24, 2016</span>
                        <a id="ContentPlaceHolder1_UserNewsDisplayLocalSite1_rpNews_hpTitle_0" class="NewsDispalyImage" href="DisplayNews.htm?NewsId=32">Vacation Training Programme <img src="/images/flashnews.gif" border="0" alt="News" title="News" /></a></p>
                </li>
		</ul>
		</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	
	<div class="col-lg-12">
		<div class="panel-primary panel">
  <!-- Default panel contents -->
		<div class="panel-heading"><h3>Announcement</h3></div>
		<div id="Tabs" role="tabpanel">
 			<ul class="nav nav-tabs" role="tablist">
			<li class="active">
			<a href="#news" arial-controls="News" role="tab" data-toggle="tab">News</a>
			</li>
			</ul>
		</div>
		<script type="text/javascript" src="Javascript/jquery-vticker-min.js"></script>
<noscript class="displayNone"> This website uses Javascript </noscript>
<script type="text/javascript">
$(function(){ 
		   $('#news-container').vTicker({ speed: 500, pause: 4000, animation: 'fade', mousePause: true, showItems:1, height: 130 }); });
</script>
		
  <div class="panel-body" style="padding:10px">
		<div class="tab-content" style="border:thin;padding:10px">
		<div role="tabpanel" class="tab-pane active" id="All">
			<div id="news-container">
    <ul>       
                <li class="newsTxt">
                    <p>
                        <span id="ContentPlaceHolder1_UserNewsDisplayLocalSite1_rpNews_lblPublishDate_0" class="newsDate">February 24, 2016</span>
                        <a id="ContentPlaceHolder1_UserNewsDisplayLocalSite1_rpNews_hpTitle_0" class="NewsDispalyImage" href="DisplayNews.htm?NewsId=32">Vacation Training Programme <img src="/images/flashnews.gif" border="0" alt="News" title="News" /></a></p>
                </li>
		</ul>
		</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	
</div>


<div class="col-lg-9">
<div class="col-lg-12" style="padding:10px"> 
<div class="panel-primary panel">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3>Recent Job Notification</h3></div>
  <div class="panel-body" style="padding:10px">
  <div class="col-lg-10">
  <div class="col-lg-2">
  <img src="../rku/01.png" class="img-responsive"/></div>
<p style="font-size:20px">
TCS Campus Notifacation</p>
<p>We are invite you for TCS Campus Drive on 20th Feb 2016 at RK Uni. Rajkot</p>
<a href="#jobdetails" data-toggle="modal">More Details</a>
</div>
<div class="col-lg-2">
<input type="submit" href="#jobdetails" data-toggle="modal" class="form-control btn-primary" value="Apply Now">
</div>
<div class="col-lg-12"><hr color="#FF0000"></div>
  <div class="col-lg-10">
  <div class="col-lg-2">
  <img src="../rku/01.png" class="img-responsive"/></div>
<p style="font-size:20px">
TCS Campus Notifacation</p>
<p>We are invite you for TCS Campus Drive on 20th Feb 2016 at RK Uni. Rajkot</p>
<a href="#jobdetails" data-toggle="modal">More Details</a>
</div>
<div class="col-lg-2">
<input type="submit" href="#jobdetails" data-toggle="modal" class="form-control btn-primary" value="Apply Now">
</div>
<div class="col-lg-12"><hr color="#FF0000"></div>
  <div class="col-lg-10">
  <div class="col-lg-2">
  <img src="../rku/01.png" class="img-responsive"/></div>
<p style="font-size:20px">
TCS Campus Notifacation</p>
<p>We are invite you for TCS Campus Drive on 20th Feb 2016 at RK Uni. Rajkot</p>
<a href="#jobdetails" data-toggle="modal">More Details</a>
</div>
<div class="col-lg-2">
<input type="submit" href="#jobdetails" data-toggle="modal" class="form-control btn-primary" value="Apply Now">
</div>
<div class="col-lg-12"><hr color="#FF0000"></div>
  <div class="col-lg-10">
  <div class="col-lg-2">
  <img src="../rku/01.png" class="img-responsive"/></div>
<p style="font-size:20px">
TCS Campus Notifacation</p>
<p>We are invite you for TCS Campus Drive on 20th Feb 2016 at RK Uni. Rajkot</p>
<a href="#jobdetails" data-toggle="modal">More Details</a>
</div>
<div class="col-lg-2">
<input type="submit" href="#jobdetails" data-toggle="modal" class="form-control btn-primary" value="Apply Now">
</div>
<div class="col-lg-12"><hr color="#FF0000"></div>
  <div class="col-lg-10">
  <div class="col-lg-2">
  <img src="../rku/01.png" class="img-responsive"/></div>
<p style="font-size:20px">
TCS Campus Notifacation</p>
<p>We are invite you for TCS Campus Drive on 20th Feb 2016 at RK Uni. Rajkot</p>
<a href="#jobdetails" data-toggle="modal">More Details</a>
</div>
<div class="col-lg-2">
<input type="submit" href="#jobdetails" data-toggle="modal" class="form-control btn-primary" value="Apply Now">
</div>
<div class="col-lg-12"><hr color="#FF0000"></div>


<div class="col-lg-12" align="center"> 
<nav>
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
	<li><a href="#">7</a></li>
	<li><a href="#">8</a></li>
	<li><a href="#">9</a></li>
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
</body>