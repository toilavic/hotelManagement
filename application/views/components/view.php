<!-- // php code to get URL component -->
<?php  
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $third_part = $components[3];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Management System</title>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../css/style2.css">
        <link rel="stylesheet" href="../css/all.css">
        <!-- <link rel="stylesheet" href="../css/main.css"> -->
        <link rel="stylesheet" href="../css/sb-admin-2.min.css">
            
        <!-- graphJS  -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="../js/main.js"></script>

        <style>
            body {
                  color: blue;
                }
                a {
                  color: inherit; /* blue colors for links too */
                  text-decoration: inherit; /* no underline */
                }
        </style>
    

    </head>
    <body>
        <!-- Content Row -->
        <div class="main-content">
                    <div class="title">
                        <?php echo $third_part;?>
                    </div>
    </body>
</html>