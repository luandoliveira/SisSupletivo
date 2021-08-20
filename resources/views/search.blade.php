@extends('adminlte::page')

@section('title', 'SupletivoConsulta')

@section('content_header')
<div class="loader">
    <img src="img/loading.gif" alt="Loading..." />
</div>
<br>
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
</div>
<br>
<br>
<br>
<p class="text-right"><i><br >Base de dados de 1959 à 2010</br></i></p>
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
    animation: fadeOut 2s;
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
  background-color: #001956

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
@endsection

