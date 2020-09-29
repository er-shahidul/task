<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form with 3 steps</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
</head>
<body>

<div class="container">
    <h2></h2>

    <?php if (isset($_POST['submit'])) { ?>
        <div class="alert alert-success complete">
            <?php
            //		$first_name = $_POST['first_name'];
            //		$last_name = $_POST['last_name'];
            //		$email = $_POST['email'];
            //      $daterange = explode(' - ', $_POST['daterange']);
            //      $start = $daterange[0];
            //      $end = $daterange[1];
            echo "You're Registered Successfully!";
            ?>
        </div>
    <?php } ?>
</div>
</body>
</html>