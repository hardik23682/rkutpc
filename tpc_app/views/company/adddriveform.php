<form class="form-horizontal col-lg-11" role="form" method="post">

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Title</label>
            <div class="col-sm-8">
                <input type="text" name="jtitle" class="form-control" value="" placeholder="Enter Job Title">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Details</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="jdetail" placeholder="Enter Job Details"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Job Location</label>
            <div class="col-sm-8">
                <input type="text" name="jlocation" class="form-control" value="" placeholder="Enter Job Location">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Skill Required</label>
            <div class="col-sm-8">
                <textarea placeholder="Enter Skill Required" name="skrd" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Eligible Courses</label>
            <div class="col-sm-8">
                <textarea name="eligible" class="form-control" placeholder="Enter Eligible Courses"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Position</label>
            <div class="col-sm-8">
                <input type="text" name="pos" placeholder="Enter Position" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">CTC</label>
            <div class="col-sm-8">
                <input type="text" name="ctc" class="form-control" value="" placeholder="Enter CTC">
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
                echo "<label class='checkbox-inline'><input type='checkbox' value='$y' name='$y'>$y</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' value='$y1' name='$y1'>$y1</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' value='$y2' name='$y2'>$y2</label>";
                echo "<label class='checkbox-inline'><input type='checkbox' value='$y3' name='$y3'>$y3</label>";
                ?>
            </div>
        </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Eligible Branch</label>
        <div class="col-sm-8">
            <label class='checkbox-inline'><input type='checkbox' value='MCA' name='MCA'>MCA</label>
            <label class='checkbox-inline'><input type='checkbox' value='IT' name='IT'>IT</label>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Bond Details</label>
        <div class="col-sm-8">
            <textarea name="bddetails" class="form-control" placeholder="Enter Bond Details"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Last Registration Date</label>
        <div class="col-sm-8">
            <input type="text" name="lrdate" class="form-control"  id='datetimepicker4' value="" placeholder="Enter Last Registration Date" readonly>
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
            <input type="text" name="jdate" class="form-control" id='datetimepicker5' value="" placeholder="Enter Joining Date" readonly>
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
            <input type="text" name="ddate" class="form-control" id='datetimepicker6' value="" placeholder="Enter Drive Date" readonly>
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
            <label class='checkbox-inline'><input type='checkbox' value='Pre Placement Talk' name='pptalk'>Pre Placement Talk</label>
            <label class='checkbox-inline'><input type='checkbox' value='Aptitude Test' name='attest'>Aptitude Test</label>
            <label class='checkbox-inline'><input type='checkbox' value='Group Discussion' name='gd'>Group Discussion</label>
            <label class='checkbox-inline'><input type='checkbox' value='Personal Interview' name='pi'>Personal Interview</label>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Contact Person</label>
        <div class="col-sm-8">
            <input type="text" name="cperson" class="form-control" value="" placeholder="Enter Contact Person">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Mobile No.</label>
        <div class="col-sm-8">
            <input type="text" name="mno" class="form-control" value="" placeholder="Enter Mobile Number">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" value="" placeholder="Enter Email">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Other Information</label>
        <div class="col-sm-8">
            <textarea name="otherinfo" class="form-control" placeholder="Enter Other Information"></textarea>
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
</form>