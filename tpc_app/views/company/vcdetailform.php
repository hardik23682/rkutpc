<style>
    p
    {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        padding-left: 5px;
        padding-right: 5px;
        font-weight: bold;
        color: white;
        font-size: 12px;
        background-color: #d9534f;
        border-radius: 5px;
    }
</style>
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
            <input type="text" name="website" class="form-control" value="<?php if(!empty($website)) echo $website; else if(!$reset) echo set_value('website'); else echo '';?>" placeholder="Enter Website">
            <?php echo ($reset) ? "" : form_error('website'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Domain</label>
        <div class="col-sm-8">
            <textarea name="domain" class="form-control" placeholder="Enter Domain(s)"><?php if(!empty($domain)) echo $domain; else if(!$reset) echo set_value('domain'); else echo '';?></textarea>
            <?php echo ($reset) ? "" : form_error('domain'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Details About Company</label>
        <div class="col-sm-8">
            <textarea name="detail" class="form-control" value="" placeholder="Enter Company Details"><?php if(!empty($detail)) echo $detail; else if(!$reset) echo set_value('detail'); else echo '';?></textarea>
            <?php echo ($reset) ? "" : form_error('detail'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Establish Year</label>
        <div class="col-sm-8">
            <input type="text" name="esyear" id="year" class="form-control" value="<?php if(!empty($esyear)) echo $esyear; else if(!$reset) echo set_value('esyear'); else echo '';?>" placeholder="Enter Establish Year" maxlength="4" readonly>
            <?php echo ($reset) ? "" : form_error('esyear'); ?>
            <script type="text/javascript">
                $(function () {
                    $('#year').datepicker({
                        format: 'yyyy',
                        autoclose:true,
                        viewMode:"years",
                        minViewMode: "years"
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Person Name</label>
        <div class="col-sm-8">
            <input name="cpname" class="form-control" value="<?php if(!empty($cpname)) echo $cpname; else if(!$reset) echo set_value('cpname'); else echo '';?>" placeholder="Enter Contact Person Name">
            <?php echo ($reset) ? "" : form_error('cpname'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Designation</label>
        <div class="col-sm-8">
            <input type="text" name="desg" value="<?php if(!empty($desg)) echo $desg; else if(!$reset) echo set_value('desg'); else echo '';?>" class="form-control" placeholder="Enter Designation">
            <?php echo ($reset) ? "" : form_error('desg'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Number 1</label>
        <div class="col-sm-8">
            <input type="text" name="con1" class="form-control" value="<?php if(!empty($con1)) echo $con1; else if(!$reset) echo set_value('con1'); else echo '';?>" placeholder="Enter Contact Number 1" maxlength="10">
            <?php echo ($reset) ? "" : form_error('con1'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Number 2</label>
        <div class="col-sm-8">
            <input type="text" name="con2" class="form-control" value="<?php if(!empty($con2)) echo $con2; else if(!$reset) echo set_value('con2'); else echo '';?>" placeholder="Enter Contact Number 2" maxlength="10">
            <?php echo ($reset) ? "" : form_error('con2'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Company Logo</label>
        <div class="col-sm-8">
            <input type="file" name="logo" class="fileupload-inline" src="<?php if(!empty($logo)) echo $logo; else if(!$reset) echo set_value('logo'); else echo '';?>">
            <?php if(isset($upload_error)) echo $upload_error ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"></label>
        <div class="col-sm-8">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </div>

<?php form_close();?>