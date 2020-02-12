<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="public/styles/uikit-rtl.min.css">
    <link rel="stylesheet" href="public/styles/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="public/styles/util.css">
    <link rel="stylesheet" type="text/css" href="public/styles/main.css">
    <link rel="stylesheet" type="text/css" href="public/styles/style.css">
</head>
<body>
    <div class="wrapper">
        <?php require ("apps/header.php");  ?> 
        <div class="main">
            <?php             
                require ("apps/content.php");
                // require ("apps/footer.php");
            ?>
        </div>
    </div>
<script type="text/javascript" src="public/scripts/uikit-icons.min.js"></script>
<script type="text/javascript" src="public/scripts/uikit.min.js"></script>	
<!-- <script type="text/javascript" src="public/scripts/jquery.min.js"></script>	 -->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/animsition/js/animsition.min.js"></script>
<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="public/scripts/main.js"></script>
</body>
</html>
