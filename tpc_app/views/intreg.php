<div class="col-lg-12 red" style="margin-top: -20px;margin-bottom: -40px;">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="padding:25px;">

            <?php if(!empty($success)) { ?>
                <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
            <?php }
            else
                $reset=false;
            ?>
        <?php echo form_open('sitecontroller/ireg', array(
            'role' => 'form',
            'class'=>'form-horizontal col-lg-12',
            'style'=>'background-color:transparent;'
        ));?>
            <fieldset>
                <legend style="color:white;">Institute Register</legend>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Institute Name</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Institute Name" autofocus>
                        <label><?php echo ($reset) ? "" : form_error('name'); ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
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
                    <label for="email" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-7">
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter City Name">
                        <label><?php echo ($reset) ? "" : form_error('city'); ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="itype" class="col-sm-3 control-label">Institute Type</label>
                    <div class="col-sm-7">
                        <select name="itype[]" class="form-control">
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
                                <input type="checkbox" name="tc" checked="checked"> Agree with term and conditions
                                <label><?php echo ($reset) ? "" : form_error('tc'); ?></label>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7">
                        <button type="submit" name="isubmit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </fieldset>
            <?php form_close();?>
    </div>
</div>
<div class="row">
</div>
