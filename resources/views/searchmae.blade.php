<link rel="stylesheet" href="plugins\sweetalert2\sweetalert2.min.css">
<script src="plugins\sweetalert2\sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" integrity="sha512-yVcJYuVlmaPrv3FRfBYGbXaurHsB2cGmyHr4Rf1cxAS+IOe/tCqxWY/EoBKLoDknY4oI1BNJ1lSU2dxxGo9WDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="dist\css\skins\_all-skins.min.css">
<!-- @extends('adminlte::page') -->
@section('title', 'SupletivoConsulta') 
@section('content_header')
<div class="loader">
    <img src="img/loading.gif" alt="Loading..." />
</div>
</div> 
<h3 class="text-center display-4">Consultar <i class="fa fa-search" aria-hidden="true"></i> Mãe</h3>
<hr></hr>

      <form  class="form-inline" action="{{route('search_mae')}}"  method="post">
      @csrf
  <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="search" name="search_name" class="form-control mb-2 mr-sm-2" id="validationCustom01" placeholder="Nome Completo" value="{{request('search_name') }}" required>
  <label class="sr-only"  for="inlineFormInputName2" >Data de Nascimento</label>
  <button  style="background-color:#212529;" type="submit" class="btn btn-dark mb-2">BUSCAR</button>
</form>

@if ($search == null)


@else

<div class="table-responsive-xl">
<table id="tabela" class="table">
  <thead id="topo" class="text-white text-center">
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Aluno</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Nome da Mãe</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Nota</th>
      <th scope="col">Resultado</th>
      <th scope="col">Município</th>
      <th scope="col">Ano</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($search as $name)
    <tr>
      <td>{{$name->sup_num_aluno}}</td>
      <td>{{$name->sup_nome}}</td>
      <td>{{$name->sup_data_nasc}}</td>
      <td>{{$name->sup_nome_mae}}</td>
      <td>{{$name->sup_disciplina}}</td>
      <td>{{$name->sup_nota}}</td>
      <td>{{$name->sup_resultado}}</td>
      <td>{{$name->sup_municipio}}</td>
      <td>{{$name->sup_ano}}</td>
    </tr> 
@endforeach
  </tbody>
</table>
@endif


</div>
<style>
   .loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 1.5s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}
#topo {
  background-color: #343a40

}


 </style>
@endsection
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection
@section('js')
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#tabela').DataTable({

      "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nenhum registro encontrado!",
            "info": "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }

    });
} );
</script>

<script>window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script>window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>
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
<script>
  $.fn.dataTable.TableTools.buttons.copy_to_div = $.extend(
    true,
    {},
    $.fn.dataTable.TableTools.buttonBase,
    {
        "sNewLine":    ">br<",
        "sButtonText": "Copy to element",
        "target":      "",
        "fnClick": function( button, conf ) {
            $(conf.target).html( this.fnGetTableData(conf) );
        }
    }
);
 
 

</script>