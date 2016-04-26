<!DOCTYPE html><head>
    <meta charset="UTF-8">
    <title>RKU Placement Cell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?= RES_URL; ?>js/bootstrap.min.js"></script>
    <link id="main" rel="stylesheet" type="text/css" href="<?= RES_URL; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= RES_URL; ?>css/owl.css">
    <link rel="stylesheet" type="text/css" href="<?= RES_URL; ?>css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="<?= RES_URL; ?>css/sweetalert.css">
    <link href="<?= RES_URL; ?>css/animate.css" rel="stylesheet" type="text/css">
    <link rel="icon"
          type="image/png"
          href="<?= RES_URL; ?>img/rkulogo.png" />
</head>
<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 0px">
<div class="container-fluid" style="padding-top:10px;padding-bottom:20px">
        <div class="col-lg-4">
            <script>
                if(screen.width<1200)
                    document.write("<a href='<?=base_url()?>sitecontroller'><img src='<?= RES_URL; ?>img/logo.png' width='50%'></a>");
                else
                    document.write("<a href='<?=base_url()?>sitecontroller'><img src='<?= RES_URL; ?>img/logo.png' width='100%'></a>");
            </script>
        </div>
        <div class="col-lg-8">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-bottom:10px;background-color:#F8F8F8">
                <ul class="nav navbar-nav navbar-right" style="align-content: center">
                    <li class="active">
                        <a href="<?=base_url()?>sitecontroller" style="letter-spacing:2px">Home</a></li>
                    <li class="active">
                        <a href="#" style="letter-spacing:2px">Job</a>
                    </li>
                    <li class="active">
                        <a href="#" style="letter-spacing:2px">Recruiter</a>
                    </li>
                    <li class="active">
                        <a href="#"  style="letter-spacing:2px">Contact</a>
                    </li>
                    <li class="active">
                        <a href="#"  style="letter-spacing:2px">Login</a>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="letter-spacing:2px">Register As<span class="caret"></span></a>
                        <ul class="dropdown-menu animated pulse" role="menu" style="background-color:rgba(255, 66, 66, 0.85);">
                            <li><a href="<?php echo site_url('sitecontroller/showstudform');?>" data-toggle="modal" style="color:white;letter-spacing:1.5px">Student</a></li>
                            <li><a href="<?php echo site_url('sitecontroller/showcomform');?>" data-toggle="modal" style="color:white;letter-spacing:1.5px">Company</a></li>
                            <li><a href="<?php echo site_url('sitecontroller/showintform');?>" data-toggle="modal" style="color:white;letter-spacing:1.5px">Institute</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
