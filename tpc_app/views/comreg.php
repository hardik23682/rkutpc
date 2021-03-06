<div class="col-lg-12 red" style="margin-top: -20px;margin-bottom: -40px;">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="padding:25px;">
    <form class="form-horizontal col-lg-12" style="background-color:transparent;" role="form" method="post" action="../sitecontroller/creg">
        <?php if(!empty($error)) { ?>
            <div class="alert fade in alert-danger"><?=$error;?></div>
        <?php } ?>
        <?php if(!empty($success)) { ?>
            <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
        <?php }
        else
            $reset=false;
        ?>

            <fieldset>
                <legend style="color:white;">Company Register</legend>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Company Name</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo ($reset) ? "" : set_value('name'); ?>" placeholder="Enter Company Name" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" name="email" class="form-control" id="email" value="<?php echo ($reset) ? "" : set_value('email'); ?>" placeholder="Enter Email">
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
                    <label for="email" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-7">
                        <input type="text" name="city" class="form-control" id="city" value="<?php echo ($reset) ? "" : set_value('city'); ?>" placeholder="Enter City Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tc" checked="checked"> Agree with term and conditions
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7">
                        <input type="submit" name="submit" class="btn btn-primary" value="Register">
                    </div>
                </div>
            </fieldset>
        <?php form_close();?>
            </form>
        </div>
    </div>
<div class="row">
</div>