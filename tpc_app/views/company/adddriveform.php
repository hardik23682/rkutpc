
<?php if(!empty($error)) { ?>
    <div class="alert fade in alert-danger"><?=$error;?></div>
<?php } ?>
<?php if(!empty($success)) { ?>
    <div class="alert fade in green" style="color: white;"><b><?=$success;?></b></div>
<?php }
else
    $reset=false;
?>

<?php echo form_open('ccompany/addDrive', array(
    'role' => 'form',
    'class'=>'form-horizontal col-lg-11'
));?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <input type="text" name="jtitle" class="form-control" value="<?php echo ($reset) ? "" : set_value('jtitle'); ?>" placeholder="Enter Job Title" readonly>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Details</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="jdetail" value="<?php echo ($reset) ? "" : set_value('jdetail'); ?>" placeholder="Enter Job Details"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Location</label>
            <div class="col-sm-8">
                <input type="text" name="jlocation" value="<?php echo ($reset) ? "" : set_value('jlocation'); ?>" class="form-control" value="" placeholder="Enter Job Location">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Skill Required</label>
            <div class="col-sm-8">
                <textarea placeholder="Enter Skill Required" name="skrd" value="<?php echo ($reset) ? "" : set_value('skrd'); ?>" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Eligible Courses</label>
            <div class="col-sm-8">
                <textarea name="eligible" value="<?php echo ($reset) ? "" : set_value('eligible'); ?>" class="form-control" placeholder="Enter Eligible Courses"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Position</label>
            <div class="col-sm-8">
                <input type="text" name="pos" value="<?php echo ($reset) ? "" : set_value('pos'); ?>" placeholder="Enter Position" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">CTC</label>
            <div class="col-sm-8">
                <input type="text" name="ctc" class="form-control" value="<?php echo ($reset) ? "" : set_value('ctc'); ?>" placeholder="Enter CTC">
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
                echo "<label class='checkbox-inline'><input type='checkbox' name='yr[]' value='$y' >$y</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' name='yr[]' value='$y1'>$y1</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' name='yr[]' value='$y2'>$y2</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' name='yr[]' value='$y3'>$y3</label>";
                ?>
            </div>
        </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Eligible Branch</label>
        <div class="col-sm-8">
            <label class='checkbox-inline'><input type='checkbox' name="br[]" value='MCA'>MCA</label>
            <label class='checkbox-inline'><input type='checkbox' name="br[]" value='IT'>IT</label>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Bond Details</label>
        <div class="col-sm-8">
            <textarea name="bddetails" value="<?php echo ($reset) ? "" : set_value('bddetails'); ?>" class="form-control" placeholder="Enter Bond Details"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Last Registration Date</label>
        <div class="col-sm-8">
            <input type="text" name="lrdate" value="<?php echo ($reset) ? "" : set_value('lrdate'); ?>" class="form-control"  id='datetimepicker4' value="" placeholder="Enter Last Registration Date" readonly>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker4').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Joining Date</label>
        <div class="col-sm-8">
            <input type="text" name="jdate" value="<?php echo ($reset) ? "" : set_value('jdate'); ?>" class="form-control" id='datetimepicker5' placeholder="Enter Joining Date" readonly>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker5').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Drive Date</label>
        <div class="col-sm-8">
            <input type="text" name="ddate" value="<?php echo ($reset) ? "" : set_value('ddate'); ?>" class="form-control" id='datetimepicker6' placeholder="Enter Drive Date" readonly>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker6').datepicker({
                        format: 'dd/mm/yyyy',
                        autoclose:true
                    });
                });
            </script>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Selection Process</label>
        <div class="col-sm-8">
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Pre Placement Talk'>Pre Placement Talk</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Aptitude Test'>Aptitude Test</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Group Discussion'>Group Discussion</label>
            <label class='checkbox-inline'><input type='checkbox' name="sp[]" value='Personal Interview'>Personal Interview</label>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Person</label>
        <div class="col-sm-8">
            <input type="text" name="cperson" class="form-control" value="<?php echo ($reset) ? "" : set_value('cperson'); ?>" placeholder="Enter Contact Person">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Mobile No.</label>
        <div class="col-sm-8">
            <input type="text" name="mno" class="form-control" value="<?php echo ($reset) ? "" : set_value('mno'); ?>" placeholder="Enter Mobile Number">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" value="<?php echo ($reset) ? "" : set_value('email'); ?>" placeholder="Enter Email">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Other Information</label>
        <div class="col-sm-8">
            <textarea name="otherinfo" class="form-control" value="<?php echo ($reset) ? "" : set_value('otherinfo'); ?>" placeholder="Enter Other Information"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Attachment</label>
        <div class="col-sm-8">
            <span class="btn btn-file btn-info">
                <span class="fileupload-new">Select file</span>
                    <input type="file" name="file" />
            </span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label"></label>
        <div class="col-sm-8">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </div>
<?php form_close();?>