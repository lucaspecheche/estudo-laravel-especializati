@extends('adminlte::page')

@section('title', 'Recarga')

@section('content_header')
    <h1>Fazer Recarga</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
	<div class="box">

        <div class="box-header">
          <h3>Fazer Recarga</h3>
        </div>

        <div class="box-body">
        	<form method="post" action="{{ route('deposit.store') }}">
                {!! csrf_field() !!}
        		<div class="form-group">
        			<input type="text" placeholder="Valor Recarga" name="value" class="form-control">
        		</div>
        		<div class="form-group">
        			<button type="submit" class="btn btn-success">Recarregar</button>
	       		</div>

        	</form>
        </div>
    </div>
@stop
