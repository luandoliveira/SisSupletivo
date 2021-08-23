@extends('adminlte::page')

@section('title', 'SupletivoConsulta') 


@section('content_header')





<br>

<div class="container-fluid" id="teste">
<h3 ckass="text-center">Bem Vindo ao Sistema de Supletivo Web</h3>
<!-- <div class="container-login100-form-btn" action="{{route('logout')}}">
						<a href="{{route('logout')}}">
						<button  style="background-color:#212529;" class="btn btn-dark"  type="submit">
							Cadastrar Usuario
						</button>
						</a>
					</div> -->

</br>   
@if($show)             
<div class=" card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header" >Cadastrar um Usuário</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <a href="{{route('register')}}">
<button  style="background-color:#212529;" class="btn btn-dark"  type="submit">
Cadastrar
</button>
	</a>
  </div>
</div>
</div>
@endif


@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('js')

 
@endsection


<script>
document.addEventListener('submit', function() {

    window.location.href = "/register";

});
</script>