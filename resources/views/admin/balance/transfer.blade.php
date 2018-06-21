@extends('adminlte::page')

@section('title', 'Recarga')

@section('content_header')
    <h1>Fazer Transferencia</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
    </ol>
@stop

@section('content')
	<div class="box">

        <div class="box-header">
          <h3>Transferir Saldo</h3>
        </div>
        @include('admin.includes.alerts')
        <div class="box-body">
        	<form method="post" action="{{ route('confirm.transfer') }}">
                {!! csrf_field() !!}
        		<div class="form-group">
        			<input type="text" placeholder="Informe o Nome ou E-mail que quem irá receber" name="sender" class="form-control">
        		</div>
        		<div class="form-group">
        			<button type="submit" class="btn btn-success">Próxima Etapa</button>
	       		</div>

        	</form>
        </div>
    </div>
@stop
