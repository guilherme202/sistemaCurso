@extends('templates.template')

@section('content')

<h4>Lista de cursos</h4>

<div class="col-12 m-auto"><table class="table">
  @csrf
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Data de Início</th>
      <th scope="col">Data de Término</th>
      <th scope="col">Quantidade de Inscritos</th>
      </tr>
  </thead>
  <tbody>
  @foreach($curso as $cursos)
     <tr>
      <td>{{$cursos->nome}}</td>
      <td>{{$cursos->descricao}}</td>
      <td>{{$cursos->valor}}</td>
      <td>{{$cursos->dataInicio}}</td>
      <td>{{$cursos->dataFim}}</td>
      <td>{{$cursos->qtdInscritos}}</td>
    </tr>
    @endforeach
      </tbody>
</table></div>
@endsection