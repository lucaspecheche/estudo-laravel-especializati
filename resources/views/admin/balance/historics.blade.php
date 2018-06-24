@extends('adminlte::page')

@section('title', 'Histórico da Conta')

@section('content_header')
    <h1>Histórico da Conta</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Histórico</a></li>
    </ol>
@stop

@section('opcoes_menu')
    @include('admin.includes.opcoes_menu')
@stop

@section('content')
@include('admin.includes.alerts')
    <div class="box">
        <div class="box-header">
        </div>
       
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>?Sender?</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($historics as $historic)
                    <tr>
                        <td>{{ $historic->id }}</td>
                        <td>{{ number_format($historic->amount, 2, ',', '.') }}</td>
                        <td>{{ $historic->type($historic->type) }}</td>
                        <td>{{ $historic->date }}</td>
                        <td>
                            @if ($historic->user_id_transaction)
                            {{ $historic->userSender->name }}
                            @else
                                -
                            @endif
                        </td>
                    @empty
                    @endforelse
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

@stop