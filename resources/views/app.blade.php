<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DkEventos</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->

        {!!Html::style('css/bootstrap.min.css')!!}
        <!-- font Awesome -->
        {!!Html::style('css/font-awesome.min.css') !!}
        <!-- Ionicons -->
        {!!Html::style ('css/ionicons.min.css')!!}
        <!-- Morris chart -->
        {!!Html::style ('css/morris/morris.css')!!}
        <!-- jvectormap -->
        {!!Html::style ('css/jvectormap/jquery-jvectormap-1.2.2.css') !!}
        <!-- Date Picker -->
        {!!Html::style ('css/datepicker/datepicker3.css')!!}
        <!-- fullCalendar -->
        <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
        <!-- Daterange picker -->
        {!!Html::style ('css/daterangepicker/daterangepicker-bs3.css') !!}
        <!-- iCheck for checkboxes and radio inputs -->
        {!!Html::style ('css/iCheck/all.css') !!}
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
        {!!Html::style('http://fonts.googleapis.com/css?family=Lato')!!}
        <!-- Theme style -->
        {!!Html::style ('css/style.css') !!}


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Director
            </a>

            <!-- header logo: style can be found in header.less -->
            <header class="header">

                <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">

                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Laravel</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                <li><a href="{{ url('/auth/login') }}"> <i class="fa fa-question fa-fw pull-right"></i>
Login</a></li>
                                <li><a href="{{ url('/auth/register') }}">
                                         <i class="fa fa-cog fa-fw pull-right"></i>
Register</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/auth/logout') }}">
                                                <i class="fa fa-ban fa-fw pull-right"></i> Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="wrapper row-offcanvas row-offcanvas-left">

                @section('sidebar')

                
@include('aside.aside')


                @show



                @yield('content')

            </div><!-- ./wrapper -->

            <!-- Scripts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>



            <!-- jQuery 2.0.2 -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="js/jquery.min.js" type="text/javascript"></script>

            <!-- jQuery UI 1.10.3 -->
            <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <!-- daterangepicker -->
            <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

            <script src="js/plugins/chart.js" type="text/javascript"></script>

            <!-- datepicker
            <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
            <!-- Bootstrap WYSIHTML5
            <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
            <!-- iCheck -->
            <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
            <!-- calendar -->
            <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

            <!-- Director App -->
            <script src="js/Director/app.js" type="text/javascript"></script>

            <!-- Director dashboard demo (This is only for demo purposes) -->
            <script src="js/Director/dashboard.js" type="text/javascript"></script>

            <!-- Director for demo purposes -->
            <script type="text/javascript">
$('input').on('ifChecked', function (event) {
    // var element = $(this).parent().find('input:checkbox:first');
    // element.parent().parent().parent().addClass('highlight');
    $(this).parents('li').addClass("task-done");
    console.log('ok');
});
$('input').on('ifUnchecked', function (event) {
    // var element = $(this).parent().find('input:checkbox:first');
    // element.parent().parent().parent().removeClass('highlight');
    $(this).parents('li').removeClass("task-done");
    console.log('not');
});

            </script>
            <script>
                $('#noti-box').slimScroll({
                    height: '400px',
                    size: '5px',
                    BorderRadius: '5px'
                });

                $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                    checkboxClass: 'icheckbox_flat-grey',
                    radioClass: 'iradio_flat-grey'
                });
            </script>
            <script type="text/javascript">
                $(function () {
                    "use strict";
                    //BAR CHART
                    var data = {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                            {
                                label: "My First dataset",
                                fillColor: "rgba(220,220,220,0.2)",
                                strokeColor: "rgba(220,220,220,1)",
                                pointColor: "rgba(220,220,220,1)",
                                pointStrokeColor: "#fff",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(220,220,220,1)",
                                data: [65, 59, 80, 81, 56, 55, 40]
                            },
                            {
                                label: "My Second dataset",
                                fillColor: "rgba(151,187,205,0.2)",
                                strokeColor: "rgba(151,187,205,1)",
                                pointColor: "rgba(151,187,205,1)",
                                pointStrokeColor: "#fff",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(151,187,205,1)",
                                data: [28, 48, 40, 19, 86, 27, 90]
                            }
                        ]
                    };
                    new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
                        responsive: true,
                        maintainAspectRatio: false,
                    });

                });
                // Chart.defaults.global.responsive = true;
            </script>
    </body>
</html>
