<?php
session_start();


if(isset($_SESSION['user'])){
}else{
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bankeger Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Bootstrap Plugins-->
    <script src="js/plugins/bootstrap-notify.js"></script>
    <script src="js/plugins/bootstrap-select.min.js"></script>
    <script src="js/plugins/bootstrap-switch.min.js"></script>
    <script src="js/plugins/bootstrap-tagsinput.min.js"></script>
    <script src="js/plugins/chartjs.min.js"></script>
    <script src="js/plugins/jquery.validate.js"></script>
    <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>  
    <script src="js/index.js"></script>
    <script src="js/react.js"></script>
</head>
<body id="">
    <div class="navbar container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="slider">
        <div class="slider_content"></div>
        <div class="slider_dots"><span></span></div>
    </div>
    <div id="root"></div>
</body>
</html>