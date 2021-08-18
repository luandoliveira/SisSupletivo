@extends('adminlte::page')

@section('title', 'SupletivoConsulta') 


@section('content_header')
<br>
<div class="container-fluid">
            <h3 class="text-center display-4">Consultar</h3>
            <br>
            <div  class="row">
                <div class="col-md-5 offset-md-4">
                    <form action="{{route('search_mae_result')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input name="search_name"type="search" class="form-control form-control-lg" placeholder="Nome da Mãe">         
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        
@endsection
@section('css')

@endsection
@section('js')

 
@endsection
