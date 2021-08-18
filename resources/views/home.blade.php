@extends('adminlte::page')

@section('title', 'SupletivoConsulta') 


@section('content_header')
<br>
<div class="container-fluid" id="teste">
<h2 ckass="text-center">Bem Vindo ao Supletivo Consulta</h2>
   
</div>
<!-- <br>
<div>
    <div  class="card-body">
        <div class="col-md-5">
            <form action="{{route('search_aluno_result')}}" method="post" class="form-horizontal">
            @csrf
            <div class="form-group">
                <input name="search_aluno"type="search" class="form-control form-control-lg" placeholder="Nome do Aluno">         
            </div>
            <div class="form-group">
                <input name="search_mae"type="search" class="form-control form-control-lg" placeholder="Nome da Mãe">
                </div>
        </div>
        </div>
    </div>

</div>    -->   


@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('js')

 
@endsection
