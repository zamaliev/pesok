<?php
   include 'parts/head_scripts.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Автомойка CRM v. 0.1 - добавление услуги</title>
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

    <script src="../../plugins/jquery/jquery.js"></script>
    <script type="text/javascript">
    function get(){
            if ($('#name').val()=="")
            { $('#name').closest('.form-line').addClass('focused error'); }
            if ($('#price').val()=="")
            { $('#price').closest('.form-line').addClass('focused error'); }
            if ($('#name').val()!="" && $('#price').val()!="" && $('#class').val()!="0")
            {
                $.post('sqls/add_usluga_sql.php', {name: form.name.value, price: form.price.value, class: form.class.value });
                $('#name').val("");
                $('#price').val("");
                $('#class').val("1");

                  $.notify("Услуга добавлена", {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        }
    </script>
</head>

<body class="theme-red">
    
    <!-- Top Bar -->
    <?php include 'parts/head.php'; ?>
    <!-- #Top Bar -->
    <?php include 'parts/leftmenu.php'; ?>
     <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
                <form name="form" id="form">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card" >
                        <div class="header">
                            <h2>
                                Добавление услуги
                            </h2>
                        </div>
                        <div class="body table-responsive">
                                  <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Наименование услуги<span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Наименование" />
                                                </div>
                                            </div>

                                    </div>
                                    <div class="form-group">
                                         <label style="margin-top: 8px;" class="col-sm-4 control-label">Класс автомобиля <span style="color:red" class="required">*</span></label>
                                         <div class="col-sm-8">
                                            <select name="class" id="class" class="form-control show-tick" >
                                                <option value="1">Эконом</option>
                                                <option value="2">Средний</option>
                                                <option value="3">Бизнес</option>
                                            </select>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Стоимость <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" id="price" name="price" class="form-control" placeholder="Стоимость" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Длительность (В минутах) </label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" id="time" name="time" class="form-control" placeholder="Длительность (Пример: 15 - всегда в минутах. Без слова минуты)" />
                                                </div>
                                            </div>
                                    </div>
                        </div>
                     </div>
                    </div>
                
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="btn btn-block btn-lg btn-success waves-effect" type="button" value="Сохранить" onclick="get();">
                        <br><br>
                    </div>
                </form>
                 
        
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

    <script src="../../js/pages/ui/notifications.js"></script>
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>