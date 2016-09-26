<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Автомойка CRM v. 0.1 - добавление клиента</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    
    <!-- Awesomplete -->
    <link href="../../plugins/awesomplete/awesomplete.css" rel="stylesheet" />
    <script src="../../plugins/awesomplete/awesomplete.js"></script>
    <!-- #Awesomplete -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="../../plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <!-- Top Bar -->
    <?php include 'parts/head.php'; ?>
    <!-- #Top Bar -->
    <?php include 'parts/leftmenu.php'; ?>
     <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card" >
                        <div class="header">
                            <h2>
                                Автомобиль
                            </h2>
                        </div>
                        <div class="body table-responsive">
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Выберите клиента <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control awesomplete"  data-list="Ada, Java, JavaScript, Brainfuck, LOLCODE, Node.js, Ruby on Rails" placeholder="Введите имя клиента" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Марка <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Марка" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Модель <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Модель" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Категория </label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Категория" />
                                                </div>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Год выпуска </label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Год выпуска" />
                                                </div>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Гос. номер </label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Гос. номер" />
                                                </div>
                                            </div>
                                    </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-block btn-lg btn-success waves-effect">Сохранить</button>
                        <br><br>
                    </div>

                </div>
               

    


       
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>