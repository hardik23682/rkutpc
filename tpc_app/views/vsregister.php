<html>
<head>
    <title>Placement And Training Cell RK University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assents/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assents/css/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>/assents/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assents/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>/assents/js/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".date").datepicker({
                showOn: 'focus',
                showOtherMonths: true,
                selectOtherMonths: true,
                flat: true,
                mode: 'multiple',
                calendars: 1,
                changeMonth: true,
                changeYear: true,
                yearRange: '1900:2023',
                dateFormat: "dd/mm/yy",
                showButtonPanel: true,
                currentText: "",
                showButtonPanel: true,
                currentText: "This Month",
                onChangeMonthYear: function (year, month, inst) {
                    $(this).val($.datepicker.formatDate('dd/m/yy', new Date(year, month, 1)));
                },
                onClose: function (dateText, inst) {
                    var month = $(".ui-datepicker-month :selected").val();
                    var year = $(".ui-datepicker-year :selected").val();
                    var date = $(".ui-datepicker-date :selected").val();
// $(this).val($.datepicker.formatDate('dd/m/yy', new Date(year,month, 1)));
                }
            }).focus(function () {
                $(".ui-datepicker-calendar").show();
                $(".ui-datepicker-date").show();
            }).after(
                $("clear").click(function () {
                    $(this).prev().val('');
                })
            );
        });
    </script>
</head>
<body>

<!--Student form start-->
<form class="form-horizontal col-lg-12" role="form">
    <fieldset>
        <legend>Student Register</legend>
    <div class="form-group">
        <label for="firstname" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-7">
            <input type="text" name="fname" class="form-control" id="firstname" placeholder="Enter First Name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-7">
            <input type="text" name="lname" class="form-control" id="lastname" placeholder="Enter Last Name">
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
            <label for="gender" class="col-sm-3 control-label">Gender</label>
            <div class="checkbox-inline">
                <input type="radio" name="gender"  id="male" checked>Male
            </div>
            <div class="checkbox-inline">
                <input type="radio" name="gender"  id="female">Female
            </div>
        </div>
        <div class="form-group">
            <label for="dob" class="col-sm-3 control-label">Date Of Birth</label>
            <div class="col-sm-7">
                <input type="text" readonly="readonly" name="dob" class="form-control date" id="datepicker" value="Select Date" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">City</label>
            <div class="col-sm-7">
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City Name">
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