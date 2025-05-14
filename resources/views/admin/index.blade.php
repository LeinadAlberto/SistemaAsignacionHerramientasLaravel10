@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <h1>PANEL PRINCIPAL</h1>
@stop

@section('content')
<div class="row">

    <!-- Card Roles --> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-white rounded-lg">
            <div class="inner">
                <p style="color:rgb(89, 14, 155); font-weight: bold;">Total Roles</p>
                <h3>{{ $total_roles }}</h3>
            </div>
            <div class="icon">
                <div class="fondo" style="background-color: rgb(217, 185, 245);"></div>
                <i class="fas fa-fw fa-user-check" style="color:rgb(89, 14, 155);"></i>
            </div>
            <a href="{{ url('admin/roles') }}" class="small-box-footer">
                Mas información <i class="fas fa-arrow-circle-right" style="color:rgb(89, 14, 155);"></i>
            </a>
        </div>
    </div><!-- ./col -->

    <!-- Card Usuarios --> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-white rounded-lg">
            <div class="inner">
                <p style="color: rgb(13, 10, 175); font-weight: bold;">Total Usuarios</p>
                <h3>{{ $total_usuarios }}</h3>
            </div>
            <div class="icon">
                <div class="fondo"></div>
                <i class="fas fa-fw fa-users" style="color:rgb(13, 10, 175);"></i>
            </div>
            <a href="{{ url('admin/usuarios') }}" class="small-box-footer">
                Mas información <i class="fas fa-arrow-circle-right" style="color: rgb(13, 10, 175);"></i>
            </a>
        </div>
    </div><!-- ./col -->

    <!-- Card Categorías --> 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-white rounded-lg">
            <div class="inner">
                <p style="color:rgb(176, 56, 98); font-weight: bold;">Total Categorías</p>
                <h3>{{ $total_categorias }}</h3>
            </div>
            <div class="icon">
                <div class="fondo" style="background-color: rgb(218, 194, 202);"></div>
                <i class="fas fa-fw fa-tags" style="color:rgb(179, 25, 78);"></i>
            </div>
            <a href="{{ url('/admin/categorias') }}" class="small-box-footer">
                Mas información <i class="fas fa-arrow-circle-right" style="color: rgb(176, 56, 98);"></i>
            </a>
        </div>
    </div><!-- ./col -->

	<!-- Card Herramientas -->
    <div class="col-lg-3 col-6">
		<div class="small-box bg-white rounded-lg">
        	<div class="inner">
            	<p style="color: #106165; font-weight: bold;">Total Herramientas</p>
            	<h3>{{ $total_herramientas }}</h3>
        	</div>
        	<div class="icon">
          		<div class="fondo" style="background-color: #dce7e8;"></div>
        		<i class="fas fa-tools" style="color: #106165;"></i>
        	</div>
        	<a href="{{ url('/admin/herramientas') }}" class="small-box-footer">
				Mas información <i class="fas fa-arrow-circle-right" style="color: #106165;"></i>
        	</a>
      	</div>
    </div><!-- ./col -->

	{{-- <!-- Card Herramientas Prestadas -->
    <div class="col-lg-3 col-6">
		<div class="small-box bg-white rounded-lg">
			<div class="inner">
            <p style="color: #651027; font-weight: bold;">Herramientas Prestadas</p>
            <h3>44</h3>
        </div>
        <div class="icon">
			<div class="fondo" style="background-color: #e8dce0;"></div>
          	<i class="fas fa-toolbox" style="color:#651027;"></i>
        </div>
        <a href="#" class="small-box-footer">
          	Mas información <i class="fas fa-arrow-circle-right" style="color: #651027;"></i>
        </a>
      </div>
    </div><!-- ./col --> --}}

    {{-- <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p class="mb-0">Herramientas en <br>Mantenimiento</p>
            
            <h3 class="mb-0" style="margin-top: 2px">65</h3>
        </div>
        <div class="icon">
          <i class="fas fa-chart-pie"></i>
        </div>
        <a href="#" class="small-box-footer">
          Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div> --}}
    <!-- ./col -->
    {{-- <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p>Total Trabajadores</p>
            
            <h3>65</h3>
        </div>
        <div class="icon">
          <i class="fas fa-chart-pie"></i>
        </div>
        <a href="#" class="small-box-footer">
          Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div> --}}
    <!-- ./col -->
  </div>
@stop

@section('css')
    <style>
        .small-box > .small-box-footer {
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        
        .small-box.rounded-lg {
            border-radius: 20px !important;
        }

        .small-box .icon > i.fa, .small-box .icon > i.fab, .small-box .icon > i.fad, .small-box .icon > i.fal, .small-box .icon > i.far, .small-box .icon > i.fas, .small-box .icon > i.ion {
            font-size: 30px;
            top: 20px;
        }

        .fondo {
            width: 50px;
            height: 50px;
            background-color: #E4E4FF;
            position: absolute;
            top: 8px;
            right: 9px;
            border-radius: 25%;
        }

		.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: #DF8129;
            color: #fff;
        }
		/* .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #DF8129;
            border-color:#DF8129;
        } */
    </style>
@stop

@section('js')
    
@stop