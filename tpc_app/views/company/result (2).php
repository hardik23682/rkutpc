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
<div class="col-lg-12">
<?php include_once('header.php'); ?>
</div>
<div class="col-lg-12">&nbsp;</div>

<!-- Applied Student -->
<div class="col-lg-2">&nbsp;</div>
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
<div class="col-lg-8">
<div class="col-lg-12" style="padding:10px"> 
<div class="panel-primary panel">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3>Apply Student</h3></div>
  <div class="panel-body" style="padding:10px">
  <div class="col-lg-10">
<p style="font-size:20px">Name : Trivide Riddhi</p>
<p></p>
</div>
<div class="col-lg-2">
<input  type="submit" class="btn2 form-control btn-primary" value="Approve">
</div>
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