

@extends('layouts.template')

@section('css')
  

@endsection

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de Doctor</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Apellidos...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                
                @if( session('info') )
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Proceso completo</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="alert alert-success">
                          <h4><i class="fa fa-check"></i> {{ session('info') }} </h4>
                        </div>
                    </div>
                  </div>
                @endif


                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reporte <small>Detalle completo</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src=" {{ asset($doctor->img_name) }} " alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3> {{ $doctor->name . ' ' . $doctor->last_name_one }} </h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-tag user-profile-icon"></i> {{$doctor->professional_license}}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{$doctor->speciality}}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-phone"></i> {{$doctor->cell_phone}}
                        </li>
                      </ul>

                      <a href=" {{ route('doctores.edit', $doctor->id ) }} " class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar perfil</a>
                      <br />
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Historial de tratamientos</a>
                          </li>
                          
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Experiencia</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <a href="" class="label label-primary"> Agregar nuevo tratamiento </a>
                              </li>
                              <li>
                                <img src=" {{ asset('images/img.jpg') }} " class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Nombre del tratamiento</h4>
                                  <blockquote class="message">Descripcion del tratamiento... raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-user"></i> Ana Maria Perez Morales </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src=" {{ asset('images/img.jpg') }} " class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Nombre del tratamiento</h4>
                                  <blockquote class="message">Descripcion del tratamiento... raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-user"></i> Juan Cesar Reyes </a>
                                  </p>
                                </div>
                              </li>



                            </ul>
                            <!-- end recent activity -->

                          </div>
                          
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <!-- title row -->
                            <div class="row">
                              <div class="col-xs-12 invoice-header">
                                <h1>
                                                <i class="fa fa-folder-o"></i> <small>Cédula Profecional</small> {{ $doctor->professional_license }}
                                                <small class="pull-right">Agregado: {{ $doctor->created_at }} </small>
                                            </h1>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                              <div class="col-sm-12 invoice-col">
                                
                                <address>
                                                
                                            </address>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('js')
   

@endsection