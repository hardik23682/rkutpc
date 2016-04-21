<?php if(!empty($success)) { ?>
    <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
<?php }
else
    $reset=false;
?>

<?php echo form_open_multipart('', array(
    'role' => 'form',
    'class'=>'form-horizontal col-lg-11'
));?>

    <div class="form-group">
        <label class="col-sm-4 control-label">Company Name</label>
        <div class="col-sm-8">
            <input type="text" name="name" class="form-control" value="<?php if(!empty($name)) echo $name; else if(!$reset) echo set_value('name'); else echo '';?>">
            <?php echo ($reset) ? "" : form_error('name'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">City</label>
        <div class="col-sm-8">
            <input type="text" name="city" class="form-control" value="<?php if(!empty($city)) echo $city; else if(!$reset) echo set_value('city'); else echo '';?>">
            <?php echo ($reset) ? "" : form_error('city'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" value="<?php if(!empty($email)) echo $email; else if(!$reset) echo set_value('email'); else echo '';?>" readonly>
            <?php echo ($reset) ? "" : form_error('email'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Website</label>
        <div class="col-sm-8">
            <input type="text" name="website" class="form-control" value="<?php echo ($reset) ? "" : set_value('website'); ?>" placeholder="Enter Website">
            <?php echo ($reset) ? "" : form_error('website'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Domain</label>
        <div class="col-sm-8">
            <textarea name="domain" class="form-control" value="" placeholder="Enter Domain(s)"><?php echo ($reset) ? "" : set_value('domain'); ?></textarea>
            <?php echo ($reset) ? "" : form_error('domain'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Details About Company</label>
        <div class="col-sm-8">
            <textarea name="detail" class="form-control" value="" placeholder="Enter Company Details"><?php echo ($reset) ? "" : set_value('detail'); ?></textarea>
            <?php echo ($reset) ? "" : form_error('detail'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Establish Year</label>
        <div class="col-sm-8">
            <input type="text" name="esyear" class="form-control" value="<?php echo ($reset) ? "" : set_value('esyear'); ?>" placeholder="Enter Establish Year" maxlength="4">
            <?php echo ($reset) ? "" : form_error('esyear'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Person Name</label>
        <div class="col-sm-8">
            <input name="cpname" class="form-control" value="<?php echo ($reset) ? "" : set_value('cpname'); ?>" placeholder="Enter Contact Person Name">
            <?php echo ($reset) ? "" : form_error('cpname'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Designation</label>
        <div class="col-sm-8">
            <input type="text" name="desg" value="<?php echo ($reset) ? "" : set_value('desg'); ?>" class="form-control" placeholder="Enter Designation">
            <?php echo ($reset) ? "" : form_error('desg'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Number 1</label>
        <div class="col-sm-8">
            <input type="text" name="con1" class="form-control" value="<?php echo ($reset) ? "" : set_value('con1'); ?>" placeholder="Enter Contact Number 1" maxlength="10">
            <?php echo ($reset) ? "" : form_error('con1'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Number 2</label>
        <div class="col-sm-8">
            <input type="text" name="con2" class="form-control" value="<?php echo ($reset) ? "" : set_value('con2'); ?>" placeholder="Enter Contact Number 2" maxlength="10">
            <?php echo ($reset) ? "" : form_error('con2'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Company Logo</label>
        <div class="col-sm-8">
            <span class="btn btn-file btn-info">
                <span class="fileupload-new">Select file</span>
                    <input type="file" name="logo" />
            </span>
            <?php echo ($reset) ? "" : form_error('logo'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"></label>
        <div class="col-sm-8">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </div>

<?php form_close();?>