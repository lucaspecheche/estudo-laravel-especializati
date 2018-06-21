@extends('adminlte::page')

@section('title', 'Confirmar transferencia')

@section('content_header')
    <h1>Confirmar Transferencia</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
        <li><a href="">Confirmação</a></li>
    </ol>
@stop

@section('content')
	<div class="box">

        <div class="box-header">
          <h3>Transferir Saldo</h3>
        </div>
        @include('admin.includes.alerts')
        <div class="box-body">
        <p><strong>Recebedor: </strong>{{ $sender->name }}</p>

        	<form method="post" action="{{ route('transfer.store') }}">
                {!! csrf_field() !!}

            <input type="hidden" name="sender_id" value="{{ $sender->id }}">

        		<div class="form-group">
        			<input type="text" placeholder="Informe o valor" name="balance" class="form-control">
        		</div>
        		<div class="form-group">
        			<button type="submit" class="btn btn-success">Transferir</button>
	       		</div>

        	</form>
        </div>
    </div>
@stop
