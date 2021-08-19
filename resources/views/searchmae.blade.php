<link rel="stylesheet" href="plugins\sweetalert2\sweetalert2.min.css">
<script src="plugins\sweetalert2\sweetalert2.all.min.js"></script>
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

      <form action="{{route('search_mae_result')}}" method="post">
      @csrf
                            
        <div class="form-row">
            <label for="validationServer01">Nome da Mãe</label>
            <input type="search" class="form-control " id="validationCustom01" placeholder="Nome Completo" value="" required>
          <!--  </div>
          <div class="col-md-4 mb-3"> 
            <label for="validationServer02">Data de Nascimento</label>
            <input type="date" class="form-control" id="validationServer02" placeholder="Last name"  > -->

<br>
<br>
        <button class="btn btn-primary" style="background-color: #001956;" type="submit">Buscar</button>
      </form>
      </div>
      </div> 
      </div>





        
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
       
       swal.fire({
       title: "Mensagem",
       text: "Você precisa inserir ao menos um Nome e Sobrenome",
       confirmButtonClass: "btn-danger",
       button: "OK",
       
 })
 

 event.preventDefault();  // Para o submit

   }

      
   
});
</script>