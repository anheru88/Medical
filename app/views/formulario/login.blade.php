<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo','Admin')</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    {{ HTML::style('assets/css/plugins/pace/pace.css') }}
    {{ HTML::script('assets/js/plugins/pace/pace.js') }}
    
    <!-- GLOBAL STYLES - Include these on every page. -->
    {{ HTML::style('assets/css/plugins/bootstrap/css/bootstrap.min.css') }}
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">

    {{ HTML::style('assets/icons/font-awesome/css/font-awesome.min.css') }}

    <!-- PAGE LEVEL PLUGIN STYLES -->
    {{ HTML::style('assets/css/plugins/messenger/messenger.css') }}
    {{ HTML::style('assets/css/plugins/messenger/messenger-theme-flat.css') }}
    {{ HTML::style('assets/css/plugins/daterangepicker/daterangepicker-bs3.css') }}
    {{ HTML::style('assets/css/plugins/morris/morris.css') }}
    {{ HTML::style('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}
    {{ HTML::style('assets/css/plugins/datatables/datatables.css') }}

    <!-- THEME STYLES - Include these on every page. -->
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/plugins.css') }}

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-gears"></i> Administrador</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong>Login to Flex Admin!</strong>
                            </h4>
                        </div>
                        <div class="portlet-widgets">
                            <button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> New User</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <br>
                                <a href="index.html" class="btn btn-lg btn-green btn-block">Sign In</a>
                            </fieldset>
                            <br>
                            <p class="small">
                                <a href="#">Olvido su contraseña</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GLOBAL SCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    {{ HTML::script('assets/js/plugins/bootstrap/bootstrap.min.js') }}
    {{ HTML::script('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}
    {{ HTML::script('assets/js/plugins/popupoverlay/jquery.popupoverlay.js') }}
    {{ HTML::script('assets/js/plugins/popupoverlay/defaults.js') }}
    <!-- Logout Notification Box -->

    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    {{ HTML::script('assets/js/plugins/popupoverlay/logout.js') }}
    <!-- HISRC Retina Images -->
    {{ HTML::script('assets/js/plugins/hisrc/hisrc.js') }}

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    {{ HTML::script('assets/js/plugins/messenger/messenger.min.js') }}
    {{ HTML::script('assets/js/plugins/messenger/messenger-theme-flat.js') }}
    <!-- Date Range Picker -->
    {{ HTML::script('assets/js/plugins/daterangepicker/moment.js') }}
    {{ HTML::script('assets/js/plugins/daterangepicker/daterangepicker.js') }}
    <!-- Morris Charts 
        {{ HTML::script('assets/js/plugins/morris/raphael-2.1.0.min.js') }}
        {{ HTML::script('assets/js/plugins/morris/morris.js') }}
    -->
    <!-- Flot Charts -->
    {{ HTML::script('assets/js/plugins/flot/jquery.flot.js') }}
    <!-- Moment.js -->
    {{ HTML::script('assets/js/plugins/moment/moment.min.js') }}
    <!-- jQuery Vector Map -->
    {{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
    {{ HTML::script('assets/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}
    {{ HTML::script('assets/js/demo/map-demo-data.js') }}
    <!-- Easy Pie Chart -->
    {{ HTML::script('assets/js/plugins/easypiechart/jquery.easypiechart.min.js') }}
    <!-- DataTables -->
    {{ HTML::script('assets/js/plugins/datatables/jquery.dataTables.js') }}
    {{ HTML::script('assets/js/plugins/datatables/datatables-bs3.js') }}

    <!-- THEME SCRIPTS -->
    {{ HTML::script('assets/js/flex.js') }}
    <!--{{ HTML::script('assets/js/demo/dashboard-demo.js') }}-->
</body>

</html>
