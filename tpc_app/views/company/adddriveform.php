<?php if(!empty($success)) { ?>
    <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
<?php }
else
    $reset=false;
?>

<?php echo form_open_multipart('ccompany/addDrive', array(
    'role' => 'form',
    'class'=>'form-horizontal col-lg-11'
));?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <input type="text" name="jtitle" class="form-control" value="<?php echo ($reset) ? "" : set_value('jtitle'); ?>" placeholder="Enter Job Title">
                <?php echo ($reset) ? "" : form_error('jtitle'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Details</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="jdetail" placeholder="Enter Job Details"><?php echo ($reset) ? "" : set_value('jdetail'); ?></textarea>
                <?php echo ($reset) ? "" : form_error('jdetail'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Location</label>
            <div class="col-sm-8">
                <input type="text" name="jlocation" value="<?php echo ($reset) ? "" : set_value('jlocation'); ?>" class="form-control" placeholder="Enter Job Location">
                <?php echo ($reset) ? "" : form_error('jlocation'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Skill Required</label>
            <div class="col-sm-8">
                <textarea placeholder="Enter Skill Required" name="skrd" class="form-control"><?php echo ($reset) ? "" : set_value('skrd'); ?></textarea>
                <?php echo ($reset) ? "" : form_error('skrd'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Eligible Courses</label>
            <div class="col-sm-8">
                <textarea name="eligible" class="form-control" placeholder="Enter Eligible Courses"><?php echo ($reset) ? "" : set_value('eligible'); ?></textarea>
                <?php echo ($reset) ? "" : form_error('eligible'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Position</label>
            <div class="col-sm-8">
                <input type="text" name="pos" value="<?php echo ($reset) ? "" : set_value('pos'); ?>" placeholder="Enter Position" class="form-control">
                <?php echo ($reset) ? "" : form_error('pos'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">CTC</label>
            <div class="col-sm-8">
                <input type="text" name="ctc" class="form-control" value="<?php echo ($reset) ? "" : set_value('ctc'); ?>" placeholder="Enter CTC">
                <?php echo ($reset) ? "" : form_error('ctc'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Eligible Year</label>
            <div class="col-sm-8">
                <?php
                $y=date("Y");
                $y1=$y-1;
                $y2=$y-2;
                $y3=$y-3;
                ?>
                <label class='checkbox-inline'><input type='checkbox' name='yr[]' value='<?=$y?>'  <?php if(!empty(set_value('yr'))){foreach(set_value('yr') as $yrr){if($yrr==$y) echo 'checked=checked';}} ?>><?=$y?></label>
                <label class='checkbox-inline'><input type='checkbox' name='yr[]' value='<?=$y1?>' <?php if(!empty(set_value('yr'))){foreach(set_value('yr') as $yrr){if($yrr==$y1) echo 'checked=checked';}} ?>><?=$y1?></label>
                <label class='checkbox-inline'><input type='checkbox' name='yr[]' value='<?=$y2?>' <?php if(!empty(set_value('yr'))){foreach(set_value('yr') as $yrr){if($yrr==$y2) echo 'checked=checked';}} ?>><?=$y2?></label>
                <label class='checkbox-inline'><input type='checkbox' name='yr[]' value='<?=$y3?>' <?php if(!empty(set_value('yr'))){foreach(set_value('yr') as $yrr){if($yrr==$y3) echo 'checked=checked';}} ?>><?=$y3?></label>

                <?php echo ($reset) ? "" : form_error('yr[]'); ?>
            </div>
        </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Eligible Branch</label>
        <div class="col-sm-8">
            <label class='checkbox-inline'><input type='checkbox' name="br[]" value='MCA' <?php if(!empty(set_value('br'))){foreach(set_value('br') as $brr){if($brr=="MCA") echo 'checked=checked';}}?>>MCA</label>
            <label class='checkbox-inline'><input type='checkbox' name="br[]" value='IT'<?php if(!empty(set_value('br'))){foreach(set_value('br') as $brr){if($brr=="IT") echo 'checked=checked';}}?>>IT</label>
            <?php echo ($reset) ? "" : form_error('br[]'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Bond Details</label>
        <div class="col-sm-8">
            <textarea name="bddetails" class="form-control" placeholder="Enter Bond Details"><?php echo ($reset) ? "" : set_value('bddetails'); ?></textarea>
            <?php echo ($reset) ? "" : form_error('bddetails'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Last Registration Date</label>
        <div class="col-sm-8">
            <input type="text" name="lrdate" value="<?php echo ($reset) ? "" : set_value('lrdate'); ?>" class="form-control"  id='datetimepicker4' value="" placeholder="Enter Last Registration Date" readonly>
            <?php echo ($reset) ? "" : form_error('lrdate'); ?>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker4').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true,
                        todayHighlight:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Joining Date</label>
        <div class="col-sm-8">
            <input type="text" name="jdate" value="<?php echo ($reset) ? "" : set_value('jdate'); ?>" class="form-control" id='datetimepicker5' placeholder="Enter Joining Date" readonly>
            <?php echo ($reset) ? "" : form_error('jdate'); ?>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker5').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true,
                        todayHighlight:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Drive Date</label>
        <div class="col-sm-8">
            <input type="text" name="ddate" value="<?php echo ($reset) ? "" : set_value('ddate'); ?>" class="form-control" id='datetimepicker6' placeholder="Enter Drive Date" readonly>
            <?php echo ($reset) ? "" : form_error('ddate'); ?>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker6').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true,
                        todayHighlight:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Selection Process</label>
        <div class="col-sm-8">
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Pre Placement Talk'    <?php if(!empty(set_value('sp'))){foreach(set_value('sp') as $spp){if($spp=='Pre Placement Talk')echo 'checked="checked"';}}?>  >Pre Placement Talk</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Aptitude Test'         <?php if(!empty(set_value('sp'))){foreach(set_value('sp') as $spp){if($spp=='Aptitude Test')echo 'checked="checked"';}}?>       >Aptitude Test</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Aptitude Test'         <?php if(!empty(set_value('sp'))){foreach(set_value('sp') as $spp){if($spp=='Technical Test')echo 'checked="checked"';}}?>       >Technical Test</label><br>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Group Discussion'      <?php if(!empty(set_value('sp'))){foreach(set_value('sp') as $spp){if($spp=='Group Discussion')echo 'checked="checked"';}}?>    >Group Discussion</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Personal Interview'    <?php if(!empty(set_value('sp'))){foreach(set_value('sp') as $spp){if($spp=='Personal Interview')echo 'checked="checked"';}}?>  >Personal Interview</label>
            <?php echo ($reset) ? "" : form_error('sp[]'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Person</label>
        <div class="col-sm-8">
            <input type="text" name="cperson" class="form-control" value="<?php echo ($reset) ? "" : set_value('cperson'); ?>" placeholder="Enter Contact Person">
            <?php echo ($reset) ? "" : form_error('cperson'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Mobile No.</label>
        <div class="col-sm-8">
            <input type="text" name="mno" class="form-control" value="<?php echo ($reset) ? "" : set_value('mno'); ?>" placeholder="Enter Mobile Number" maxlength="10">
            <?php echo ($reset) ? "" : form_error('mno'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" value="<?php echo ($reset) ? "" : set_value('email'); ?>" placeholder="Enter Email">
            <?php echo ($reset) ? "" : form_error('email'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Drive Type</label>
        <div class="col-sm-8">
            <select class="form-control" name="dtype">
                <option value="campusdrive">Campus Drive</option>
                <option value="offcampus">Off Campus</option>
                <option value="pooldrive1">Pool Drive</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Drive Venue</label>
        <div class="col-sm-8">
            <input type="text" name="venue" value="<?php echo ($reset) ? "" : set_value('venue'); ?>" class="form-control" placeholder="Enter Drive Venue">
            <?php echo ($reset) ? "" : form_error('venue'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Attachment</label>
        <div class="col-sm-8">
            <input type="file" name="attachment" class="fileupload-inline">
            <?php if(isset($upload_error)) echo $upload_error ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Other Information</label>
        <div class="col-sm-8">
            <textarea name="otherinfo" class="form-control" placeholder="Enter Other Information"><?php echo ($reset) ? "" : set_value('otherinfo'); ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"></label>
        <div class="col-sm-8">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </div>
<?php form_close();?>