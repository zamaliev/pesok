<?php
   include 'parts/head_scripts.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Автомойка CRM v. 0.1</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <!-- Top Bar -->
    <?php include 'parts/head.php'; ?>
    <!-- #Top Bar -->
    <?php include 'parts/leftmenu.php'; ?>
     <!-- #END# Right Sidebar -->
	
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Главная</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">ac_unit</i>
                        </div>
                        <?php
                            $result = $mysqli->query("SELECT * FROM workers");
                            $workers_row = $result->num_rows;
                        ?>
                        <div class="content">
                            <div class="text">Сотрудников</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $workers_row; ?>" data-speed="1" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">Заработано</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">directions_car</i>
                        </div>
                        <div class="content">
                        <?php
                            $result = $mysqli->query("SELECT * FROM cars");
                            $cars_row = $result->num_rows;
                            $cars_row*=1;
                            
                        ?>

                            <div class="text">Автомоблей в базе </div>
                            <div class="number count-to" data-from="0" data-to="<?php echo (int)$cars_row; ?>" data-speed="<?php echo (int)(sqrt($cars_row)); ?>" data-fresh-interval="20"></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <?php
                            $result = $mysqli->query("SELECT * FROM client");
                            $client_row = $result->num_rows;
                        ?>
                        <div class="content">
                            <div class="text">Клиентов</div>
                           <div class="number count-to" data-from="0" data-to="<?php echo (int)$client_row; ?>" data-speed="<?php echo (int)(sqrt($client_row)); ?>" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
           <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                               	Редактирование
                            </h2>
                        </div>
                        <div class="body">
                        <button type="button" class="btn btn-block btn-lg btn-success waves-effect">Редактировать клиента</button>
                            
                            <button type="button" class="btn btn-block btn-lg bg-indigo waves-effect">Редактировать автомобиль</button>
                            <button type="button" class="btn btn-block btn-lg btn-warning waves-effect">Редактировать услугу</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                Заезд <small>Приехала машина в автомойку. . .</small>
                            </h2>
                        </div>
                        <div class="body">
                           <a href="/wash.php"><input type="button" style="height: 101px;" class="btn btn-block btn-info bg-pink waves-effect" value="Приехала машина"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                Клиентура
                            </h2>
                        </div>
                        <div class="body">
                            <a href="/add_client.php"><input type="button" class="btn btn-block btn-lg btn-success waves-effect" value="Добавить клиента в базу" style="margin-bottom: 5px;"></a>
                            <a href="/add_car.php"><input type="button" class="btn btn-block btn-lg bg-indigo waves-effect" value="Добавить автомобиль" style="margin-bottom: 5px;"></a>
                            <a href="/add_usluga.php"><input type="button" class="btn btn-block btn-lg btn-warning waves-effect" style="margin-bottom: 5px;" value="Добавить услугу"></a>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Browser Usage -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Последнее
                            </h2>
                        </div>
                        <div class="body table-responsive">
                        	<h4>Последние 3 клиента: </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Имя</th>
                                        <th>Телефон</th>
                                        <th>Потрачено</th>
                                        <th>Автомобилей</th>
                                        <th>Приездов</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
	$result=$mysqli->query("SELECT * FROM client ORDER BY ID DESC LIMIT 3");
	while ($lastusers = mysqli_fetch_assoc($result))
	{
		$user_id = (int)$lastusers['id'];
		$result_cars_on_client = $mysqli->query("SELECT * FORM cars WHERE parent_id='$user_id'");
		$client_cars_row = $result_cars_on_client->num_rows;
?>

		<tr>
           	<td><?php echo $lastusers['id']; ?></td>
            <td><?php echo $lastusers['name']; ?></td>
            <td><?php echo $lastusers['phone']; ?></td>
            <td><?php echo $lastusers['spent']; ?></td>
            <td><?php echo $lastusers['priezdov']; ?></td>
            <td><?php ?></td>
        </tr>
<?php
	}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>