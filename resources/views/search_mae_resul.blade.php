@extends('adminlte::page')

@section('title', 'SupletivoConsulta')

@section('content_header')
<!-- <br>
<div class="container-fluid">
<table id="maintable" class="display compact cell-border" cellspacing="40%" width="100%" cellpadding="10">
    <thead>
    <tr class="text-center bg-primary">
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
    
    @if ($search_name)
    @foreach ($search_name as $name)
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

@else
@foreach ($search_matricula as $name)
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
@endif
    </tr>

    </tbody>
    <tfoot class="text-center bg-primary">
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
    </tfoot>
</table>
</div> -->

<table class="table">
<thead>
    <tr class="text-center bg-dark">
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
  @foreach ($search_name as $name)
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
<div>
  <a class="btn btn-primary" href="/searchmae" role="button">Voltar</a>
  </div>

@endsection

@section('css')
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

@endsection

@section('js')

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.mark.min.js"></script>
<script type="text/javascript" src="js/datatables.mark.js"></script>
<script type="text/javascript" src="js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

@endsection

