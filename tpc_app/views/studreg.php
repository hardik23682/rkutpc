<div class="col-lg-12 red" style="margin-top: -20px;margin-bottom: -40px;">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="padding:25px;">
        <?php if(!empty($error)) { ?>
        <div class="alert fade in" style="background-color: white;"><?=$error;?></div>
    <?php } ?>
    <form class="form-horizontal col-lg-12" style="background-color:transparent;" role="form" method="post" action="../sitecontroller/sreg">
        <?php echo form_open('sitecontroller/sreg', array(
            'id' => 'frmcreg',
            'role' => 'form'
        ));?>
    <fieldset>
        <legend style="color:white;">Student Register</legend>
        <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-7">
                <input type="text" name="fname" class="form-control" value="<?=set_value('fname')?>" id="firstname" placeholder="Enter First Name" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-7">
                <input type="text" name="lname" class="form-control" value="<?=set_value('lname')?>" id="lastname" placeholder="Enter Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-7">
                <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" id="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-7">
                <input type="password" name="pass" class="form-control" id="password" placeholder="Enter Password">
            </div>
        </div>
        <div class="form-group">
            <label for="cpassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-7">
                <input type="password" name="cpass" class="form-control" id="cpassword" placeholder="Enter Confirm Password">
            </div>
        </div>
        <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Gender</label>
            <div class="checkbox-inline">
                <input type="radio" name="gender" value="male"  id="male" checked>&nbsp;<font color="white">Male</font>
            </div>
            <div class="checkbox-inline">
                <input type="radio" name="gender" value="female"  id="female">&nbsp;<font color="white">Female</font>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">City</label>
            <div class="col-sm-7">
                <input type="text" name="city" class="form-control" id="city" value="<?=set_value('city')?>" placeholder="Enter City Name">
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
                <button type="submit" name="ssubmit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </fieldset>
    <?php form_close();?>
</form>
</div>
<div class="col-lg-2">&nbsp;</div>
</div>
<div class="row">
</div>