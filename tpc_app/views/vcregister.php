<html>
<head>
    <title>Placement And Training Cell RK University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assents/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assents/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assents/js/jquery-1.11.1.min.js"></script>
</head>
<body>

<!--Student form start-->
<form class="form-horizontal col-sm-6" role="form" action="">
    <fieldset>
        <legend>Company Register</legend>
    <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Company Name</label>
        <div class="col-sm-7">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Company Name">
        </div>
    </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-7">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-7">
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">City</label>
            <div class="col-sm-7">
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City Name">
            </div>
        </div>
        <div class="form-group">
            <label for="itype" class="col-sm-3 control-label">Institute Type</label>
            <div class="col-sm-7">
                <select name="itype" class="form-control">
                    <option name="Private">Private</option>
                    <option name="Semi Goverment">Semi Goverment</option>
                    <option name="Goverment">Goverment</option>
                </select>
            </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-7">
            <div class="checkbox">
                <label>
                    <input type="checkbox" checked="checked"> Agree with term and conditions
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-7">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
    </fieldset>
</form>
<!--Student form end-->
</body>
</html>