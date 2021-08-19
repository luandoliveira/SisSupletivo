
<link rel="stylesheet" href="plugins\sweetalert2\sweetalert2.min.css">
<script src="plugins\sweetalert2\sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" integrity="sha512-yVcJYuVlmaPrv3FRfBYGbXaurHsB2cGmyHr4Rf1cxAS+IOe/tCqxWY/EoBKLoDknY4oI1BNJ1lSU2dxxGo9WDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="dist\css\skins\_all-skins.min.css">
<!-- @extends('adminlte::page') -->

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
            <input type="text" class="date form-control" id="DataNasc" name="data" maxlength="10"  onkeypress="return dateMask(this, event);">

          </div>
<br>
        <button  onclick="validacao()" class="btn btn-primary" style="background-color: #001956;" type="submit">Buscar</button>
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
       
       Swal.fire({
       title: "Mensagem",
       text: "Você precisa inserir ao menos um Nome e Sobrenome",
       confirmButtonClass: "btn-danger",
       button: "OK",
       
 })
 

 event.preventDefault();  // Para o submit

   }

      
   
});
</script>
<script>
function dateMask(inputData, e){

var tecla;

if(document.all) // Internet Explorer
tecla = event.keyCode;
else //Outros Browsers
tecla = e.which;

if(tecla >= 48 && tecla < 58){ // numeros de 0 a 9 e '/'
var data = inputData.value;
//validar o dia do mês
if (data.length == 2){
if(inputData.value >= 1 && inputData.value <= 31) {
data += '/';
inputData.value = data;
return true;
}
else
return false;
}

//validar o mês (de 1 a 12)
if (data.length == 5){
mes = data[3]+""+data[4];
if(mes >= 1 && mes <= 12) {
data += '/';
inputData.value = data;
return true;
}
else
return false;
}

//validar o ano (de 1900 a 2100)
if (data.length == 8){
ano = data[6]+""+data[7];
if(ano >= 19 && ano <= 21){
inputData.value = data;
return true;
}
else
return false;

}

}else if(tecla == 8 || tecla == 0) // Backspace, Delete e setas direcionais(para mover o cursor, apenas para FF)
return true;
else
return false;
}
</script>
<script>

 function validacao(){
  var input = document.querySelector("#DataNasc")
    var datainput =  input.value;

   
// var strData = "28/02/2015";
var partesData = datainput.split("/");
var dtAnoInput = partesData[2];
console.log(partesData);

var data = new Date().toLocaleString().substr(0, 10).split("/") //data atual
var dtanoAtual = data[2];
console.log(dtAnoInput);
console.log(dtanoAtual);

if(dtAnoInput >= dtanoAtual || dtAnoInput <= 1920 ){

  Swal.fire({
  title: "Mensagem",
  icon: 'info',
  text: "Você precisa inserir uma data valida!",
  confirmButtonClass: "btn-danger",
  button: "OK",

})

event.preventDefault();
}

 }

</script>

