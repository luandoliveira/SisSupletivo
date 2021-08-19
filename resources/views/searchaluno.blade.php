<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@extends('adminlte::page')

@section('title', 'SupletivoConsulta') 


@section('content_header')
<br>

</div> 
</br>
</br>
</br>
</br>
</br>
<h3 class="text-center display-4">Consultar</h3>
</br>
</br>
</br>

<div  class="d-flex justify-content-center">
  
      <div  class="row" widgh="100%">
    <div class="col-md-8 offset-md-2">
      <form action="{{route('search_aluno_result')}}"  method="post">
      @csrf
                            
        <div class="form-row">
        
            <label for="validationServer01">Nome</label>
            <input type="search" class="form-control " id="validationCustom01" placeholder="Nome Completo" value="" required>

          <!-- </div>
          <div class="col-md-4 mb-3"> -->
            <label for="DataNasc">Data de Nascimento</label>
            <input type="date" class="form-control" id="DataNasc" >

          </div>
<br>
        <button   class="btn btn-primary" style="background-color: #001956;" type="submit">Buscar</button>
      </form>
      </div>
      </div> 
      </div>
<style>
/* #container{

 width: 100%;
height: 100vh; 
display: flex; 
flex-direction: row;
justify-content: center;
align-items: center

} */
 </style>
@endsection
@section('css')

@endsection
@section('js')

 
@endsection

<script>

document.addEventListener('submit', function() {
   var campo = document.getElementById("validationCustom01").value; // Pega valor do campo
   console.log(campo);
nomeSobrenome = /\b[A-Za-zÀ-ú][A-Za-zÀ-ú]+,?\s[A-Za-zÀ-ú][A-Za-zÀ-ú]{2,19}\b/gi;
// Regex para duas strings, separadas com espaço e com no mínimo 3 caracteres. Aceita acentuação e rejeita números.

// Faz a validacao do regex no campo indicado
if(!(nomeSobrenome.test(campo))){
       
       swal({
       title: "Mensagem",
       text: "Você precisa inserir ao menos um Nome e Sobrenome",
       showCancelButton: true,
       confirmButtonClass: "btn-danger",
       confirmButtonText: "OK",
       
 })
 

 event.preventDefault();  // Para o submit

   }

      
   
});
</script>
