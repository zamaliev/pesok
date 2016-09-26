<?php
    include 'db.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Автомойка CRM v. 0.1 - добавление клиента</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

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
    
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="../../plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
    
    <script src="../../plugins/jquery/jquery.js"></script>

    <script type="text/javascript">
    function get(){
        if ($('#fio').val()=="")
            { $('#fio').closest('.form-line').addClass('focused error'); }
        if ($('#phone').val()=="")
            { $('#phone').closest('.form-line').addClass('focused error'); }
        if ($('#marka').val()=="")
            { $('#marka').closest('.form-line').addClass('focused error'); }
        if ($('#model').val()=="")
            { $('#model').closest('.form-line').addClass('focused error'); }
        if ($('#fio').val()!="" && $('#phone').val()!="" && $('#marka').val()!="" && $('#model').val()!=""){
        $.post('sqls/client_add.php', {
        name: form.fio.value, phone: form.phone.value, birthday: form.birthday.value, marka: form.marka.value, model: form.model.value, class: form.class.value, number: form.number.value });
        $( ":input" ).val("");
        $.notifyDefaults({
        type: 'success',
        allow_dismiss: false
        });
        $.notify('Клиент успешно добавлен');
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
    <form name="form">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
                        <div class="header">
                            <h2>
                                Личное 
                            </h2>
                        </div>
                        <div class="body table-responsive">
                                    <div class="form-group">
                                            <label id="fio2" style="margin-top: 8px;" class="col-sm-4 control-label">Фамилия Имя <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line ">
                                                    <input type="text" name="fio" id="fio" class="form-control" placeholder="Ф.И.О" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Телефон <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Телефонный номер" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="demo-masked-input">
                                       <label style="margin-top: 8px;" class="col-sm-4 control-label">Дата рождения </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="birthday" class="form-control date" placeholder="Пример: День/Месяц/Год">
                                            </div>
                                    </div></div></div>
                                    </div>
                        </div>
                    </div></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="card" >
                        <div class="header">
                            <h2>
                                Автомобиль
                            </h2>
                        </div>
                        <div class="body table-responsive">
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Марка <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input name="marka" id="marka" type="text" class="form-control" placeholder="Марка" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Модель <span style="color:red" class="required">*</span></label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input name="model" id="model" type="text" class="form-control" placeholder="Модель" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-5 control-label">Класс автомобиля </label>
                                            <div class="col-sm-7">
                                            <select name="class" class="selectpicker">
                                                <option>Эконом</option>
                                                <option>Средний</option>
                                                <option>Бизнес</option>
                                            </select>
                                                
                                            </div>
                                    </div>
                                     <div class="form-group">
                                            <label style="margin-top: 8px;" class="col-sm-4 control-label">Гос. номер </label>
                                            <div class="col-sm-8">
                                                <div class="form-line">
                                                    <input name="number" id="number" type="text" class="form-control" placeholder="Гос. номер" />
                                                </div>
                                            </div>
                                    </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <button class="btn btn-block btn-lg btn-success waves-effect" type="button" value="Сохранить" onclick="get();">Сохранить</button>
                        <br><br>
                    </div>

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

    <!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>


    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../../plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</html>