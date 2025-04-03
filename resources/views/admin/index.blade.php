@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <h1>PANEL PRINCIPAL</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p>Total Usuarios</p>
            
            <h3>150</h3>
        </div>
        <div class="icon">
            <div class="fondo">

            </div>
            <i class="fas fa-users" style="color: #8280FF;"></i>
        </div>
        <a href="#" class="small-box-footer">
            Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p>Total Herramientas</p>
            
            <h3>53<sup style="font-size: 20px">%</sup></h3>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">
          Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p>Herramientas Prestadas</p>
            
            <h3>44</h3>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <a href="#" class="small-box-footer">
          Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-white rounded-lg">
        <div class="inner">
            <p>Herramientas en Mantenimiento</p>
            
            <h3>65</h3>
        </div>
        <div class="icon">
          <i class="fas fa-chart-pie"></i>
        </div>
        <a href="#" class="small-box-footer">
          Mas información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
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
    </div>
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
    </style>
@stop

@section('js')
    
@stop