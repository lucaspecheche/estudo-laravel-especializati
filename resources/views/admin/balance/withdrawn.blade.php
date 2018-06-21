@extends('adminlte::page')

@section('title', 'Recarga')

@section('content_header')
    <h1>Fazer Retirada</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Retirada</a></li>
    </ol>
@stop

@section('content')
	<div class="box">

        <div class="box-header">
          <h3>Retirar</h3>
        </div>
        @include('admin.includes.alerts')
        <div class="box-body">
        	<form method="post" action="{{ route('withdraw.store') }}">
                {!! csrf_field() !!}
        		<div class="form-group">
        			<input type="text" placeholder="Valor do Saque" name="value" class="form-control">
        		</div>
        		<div class="form-group">
        			<button type="submit" class="btn btn-success">Sacar</button>
	       		</div>

        	</form>
        </div>
    </div>
@stop
