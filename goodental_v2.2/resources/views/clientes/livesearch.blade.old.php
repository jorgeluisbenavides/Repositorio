@extends('layouts.app')

@section('title','Ajax Live Search Table Demo -')

@section('content')

<!-- search box container starts  -->

    <div class="search">
        <h3 class="text-center title-color">Pacientes</h3>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="input-group">
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Ingresa el Nombre">
                </div>
            </div>
        </div>   
    </div>  
<!-- search box container ends  -->
<div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ><b>La información se listará aquí...</b></div>
     
@stop