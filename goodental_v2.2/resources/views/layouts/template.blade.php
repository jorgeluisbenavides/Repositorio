<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href=" {{ asset('img/logos/diente-ico.png') }} " />

    <title>Goodental</title>

    <!-- Bootstrap -->
    <link href=" {{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('vendor/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{ asset('vendor/nprogress/nprogress.css') }} " rel="stylesheet">
    <!-- iCheck -->
    <link href=" {{ asset('vendor/iCheck/skins/flat/green.css') }} " rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href=" {{ asset('vendor/google-code-prettify/bin/prettify.min.css') }} " rel="stylesheet">
    <!-- Select2 -->
    <link href=" {{ asset('vendor/select2/dist/css/select2.min.css') }} " rel="stylesheet">
    <!-- Switchery -->
    <link href=" {{ asset('vendor/switchery/dist/switchery.min.css') }} " rel="stylesheet">
    <!-- starrr -->
    <link href=" {{ asset('vendor/starrr/dist/starrr.css') }} " rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href=" {{ asset('vendor/bootstrap-daterangepicker/daterangepicker.css') }} " rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href=" {{ asset('build/css/custom.min.css') }} " rel="stylesheet">

    @yield('css')
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user-md"></i> <span>Goodental</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src=" {{ asset('images/img.png') }} " alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2> {{ Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href=" {{ route('home') }} " ><i class="fa fa-home"></i> Inicio </a> </li>
                  <li><a><i class="fa fa-table"></i> Citas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=" {{ route('citas.index') }} ">Nueva</a></li>
                      <li><a href="s.html">Buscar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Personas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=" {{ route('clientes.index') }} ">Pacientes</a></li>
                      <li><a href=" {{ route('doctores.index') }} ">Doctores</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Tratamientos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=" {{ route('tratamientos.index') }} ">Lista</a></li>
                      <li><a href=" {{ route('tratamientos.create') }} ">Alta</a></li>
                    </ul>
                  </li> 
                  <li><a href=" {{ route('inventario.index') }} "><i class="fa fa-list"></i> Inventario </a></li> 
                  <li><a href=" {{ route('notas.index') }} "><i class="fa fa-bookmark-o"></i> Notas </a></li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src=" {{ asset('images/img.png') }} " alt=""> {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href=""> Perfil</a></li>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i> Salir
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        @yield('content')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Goodental - Admin template by Mk
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=" {{ asset('vendor/jquery/dist/jquery.min.js') }} "></script>    
    <!-- Bootstrap -->
    <script src=" {{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <!-- FastClick -->
    <script src=" {{ asset('vendor/fastclick/lib/fastclick.js') }} "></script>
    <!-- NProgress -->
    <script src=" {{ asset('vendor/nprogress/nprogress.js') }} "></script>
    <!-- morris.js -->
    <script src=" {{ asset('vendor/raphael/raphael.min.js') }} "></script>
    <script src=" {{ asset('vendor/morris.js/morris.min.js') }} "></script>    
    <!-- bootstrap-progressbar -->
    <script src=" {{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }} "></script>    
    <!-- Chart.js -->
    <script src=" {{ asset('vendor/Chart.js/dist/Chart.min.js') }} "></script>
    <!-- jQuery Sparklines -->
    <script src=" {{ asset('vendor/jquery-sparkline/dist/jquery.sparkline.min.js') }} "></script>
    <!-- Flot -->
    <script src=" {{ asset('vendor/Flot/jquery.flot.js') }} "></script>
    <script src=" {{ asset('vendor/Flot/jquery.flot.pie.js') }} "></script>
    <script src=" {{ asset('vendor/Flot/jquery.flot.time.js') }} "></script>
    <script src=" {{ asset('vendor/Flot/jquery.flot.stack.js') }} "></script>
    <script src=" {{ asset('vendor/Flot/jquery.flot.resize.js') }} "></script>
    <!-- Flot plugins -->
    <script src="  {{ asset('vendor/flot.orderbars/js/jquery.flot.orderBars.js') }} "></script>
    <script src=" {{ asset('vendor/flot-spline/js/jquery.flot.spline.min.js') }} "></script>
    <script src=" {{ asset('vendor/flot.curvedlines/curvedLines.js') }} "></script>
    <!-- DateJS -->
    <script src=" {{ asset('vendor/DateJS/build/date.js') }} "></script>
    <!-- bootstrap-daterangepicker -->
    <script src=" {{ asset('vendor/moment/min/moment.min.js') }} "></script>
    <script src=" {{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
       <!-- iCheck -->
    <script src=" {{ asset('vendors/iCheck/icheck.min.js') }} "></script>
    <!-- Custom Theme Scripts -->
    <script src=" {{ asset('build/js/custom.min.js') }} "></script>
    <script type="text/javascript">
            $(document).ready(function(){
               $("#search").keyup(function(){
                   var str=  $("#search").val();
                   if(str == "") {
                           $( "#txtHint" ).html("<b>La información se listará aquí...</b>"); 
                   }else {
                           $.get( "{{ url('livesearch?id=') }}"+str, function( data ) {
                               $( "#txtHint" ).html( data );  
                        });
                   }
               });  



                $("#searchpatient").keyup(function(){
                   var str=  $("#searchpatient").val();
                   if(str == "") {
                           $( "#patientToassign" ).html("<b>La información se listará aquí...</b>"); 
                   }else {
                           $.get( "{{ url('livesearchpatient?id=') }}"+str, function( data ) {
                               $( "#patientToassign" ).html( data );  
                        });
                   }
               });

               $("#AssignToPatient").click(function(){
                      var idCustomer = $('input:radio[name=idCusomer]:checked').val()
                      var idTreatment = $("#idTreatment").text();
                      var idUser = $("#idUser").text();
                    console.log("C:"+idCustomer+", T:"+idTreatment+", U:"+idUser);

                      if(idCustomer==undefined){
                          alert("Seleccione un Paciente...");
                      }else { 
                         $.ajax({
                            type: 'GET',
                            url: '/tratamiento_cliente',
                            data:{
                              'idCustomer':idCustomer,
                              'idTreatment':idTreatment,
                              'idUser':idUser
                              },
                              dataType: 'json',
                            success: function (response) {
                              
                              $('input[type="text"]').val('');
                              
                              $("#patientToassign").empty();
                              alert(response);
                            }
                        });
                      }
                      
                   
               })  
            }); 
    </script>
    @yield('js')

  </body>
</html>