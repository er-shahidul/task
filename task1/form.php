<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form with 3 steps</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="js/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css"/>

    <script type="text/javascript" src="js/form.js"></script>
    <style type="text/css">
        #user_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2></h2>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
             aria-valuemax="100"></div>
    </div>
    <div class="alert alert-success hide"></div>
    <div class="alert alert-danger hide"></div>

    <form id="user_form" novalidate="novalidate" action="<?php echo 'success.php'; ?>" method="post">
        <fieldset class="contactForm">
            <h2>Step 1: Enter your contact info</h2>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" required="required" id="first_name"
                       placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" required="required" id="last_name"
                       placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="email">Email address*</label>
                <input type="email" class="form-control" required="required" id="email" name="email"
                       placeholder="Email">
            </div>
            <input type="button" class="next btn btn-info step1Btn" value="Next"/>
        </fieldset>
        <fieldset class="contactForm">
            <h2>Step 2: Enter your date preferences</h2>
            <div class="form-group">
                <label for="daterange">Start and End date</label>
                <input type="text" class="form-control" name="daterange" required="required" id="daterange">
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previous"/>
            <input type="button" name="next" class="next btn btn-info step2Btn" value="Next"/>
        </fieldset>
        <fieldset class="contactForm">
            <h2>Step 3: Confirm information</h2>
            <input type="button" name="previous" class="previous btn btn-default" value="Previous"/>
            <input type="button" name="next" class="next btn btn-info step3Btn" value="Confirm information"/>
        </fieldset>
        <fieldset>
            <input type="button" name="previous" class="previous btn btn-default finaBackBtn" value="Previous"/>
            <input type="submit" name="submit" class="submit btn btn-success finalSubmitBtn" value="Submit"/>
        </fieldset>
    </form>
</div>

</body>
</html>