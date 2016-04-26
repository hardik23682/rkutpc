<div class="col-lg-12 red" style="margin-top: -20px;margin-bottom: -40px;">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="padding:25px;">
        <?php if(!empty($success)) { ?>
            <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
        <?php }
        else
            $reset=false;
        ?>
        <?php echo form_open('sitecontroller/sreg', array(
            'role' => 'form',
            'class'=>'form-horizontal col-lg-12',
            'style'=>'background-color:transparent;'
        ));?>
    <fieldset>
        <legend style="color:white;">Student Register</legend>
        <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-7">
                <input type="text" name="fname" class="form-control" value="<?php echo ($reset) ? "" : set_value('fname'); ?>" id="firstname" placeholder="Enter First Name" autofocus>
                <label><?php echo ($reset) ? "" : form_error('fname'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-7">
                <input type="text" name="lname" class="form-control" value="<?php echo ($reset) ? "" : set_value('lname'); ?>"" id="lastname" placeholder="Enter Last Name">
                <label><?php echo ($reset) ? "" : form_error('lname'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-7">
                <input type="text" name="email" class="form-control" value="<?php echo ($reset) ? "" : set_value('email'); ?>"" id="email" placeholder="Enter Email">
                <label><?php echo ($reset) ? "" : form_error('email'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-7">
                <input type="password" name="pass" class="form-control" id="password" placeholder="Enter Password">
                <label><?php echo ($reset) ? "" : form_error('pass'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label for="cpassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-7">
                <input type="password" name="cpass" class="form-control" id="cpassword" placeholder="Enter Confirm Password">
                <label><?php echo ($reset) ? "" : form_error('cpass'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Gender</label>
            <div class="checkbox-inline">
                <input type="radio" name="gender" value="male"  id="male" <?php echo (!$reset) && set_value('gender')=='male'?"checked=checked":''; ?> >&nbsp;<font color="white">Male</font>
            </div>
            <div class="checkbox-inline">
                <input type="radio" name="gender" value="female" id="female" <?php echo (!$reset) && set_value('gender')=='female'?"checked=checked":''; ?>>&nbsp;<font color="white">Female</font>
            </div>
            <label><?php echo ($reset) ? "" : form_error('gender'); ?></label>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">City</label>
            <div class="col-sm-7">
                <input type="text" name="city" class="form-control" id="city" value="<?php echo ($reset) ? "" : set_value('city'); ?>"" placeholder="Enter City Name">
                <label><?php echo ($reset) ? "" : form_error('city'); ?></label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-7">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tc" checked="checked"> Agree with term and conditions
                        <label><?php echo ($reset) ? "" : form_error('tc'); ?></label>
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
</div>
    </div>
<div class="row">
</div>