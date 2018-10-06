<?php
include ('config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bankeger App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../js/core/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!--Bootstrap Plugins-->
    <script src="../js/plugins/bootstrap-notify.js"></script>
    <script src="../js/plugins/bootstrap-select.min.js"></script>
    <script src="../js/plugins/bootstrap-switch.min.js"></script>
    <script src="../js/plugins/bootstrap-tagsinput.min.js"></script>
    <script src="../js/plugins/chartjs.min.js"></script>
    <script src="../js/plugins/jquery.validate.js"></script>
    <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>  
    <script src="../js/index.js"></script>
</head>
<body>

    <div class="master_section clearfix" id="wrapper">
    <?php if(isset($_SESSION['user'])){ ?>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" id="hamburguer"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
</svg>
</a>
            <a class="navitem" href="home"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <a class="navitem" href="login"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <a class="navitem" href="newdate"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <a class="navitem" href="Sair"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </div>

            <div class="main_wrapper section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="tabs"></div>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
    </div>

<?php
    echo "Logged";
}else{
    echo '<script>$(".master_section").load("view/login.view.php"); </script>';
}
?>
</body>
</html>