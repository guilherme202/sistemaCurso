@extends('templates.template')

@section('content')

<h4>Listar/editar inscrições</h4>

<div class="col-12 m-auto"><table class="table">
  <thead>
    <tr>
      <th scope="col">Inscrito</th>
      <th scope="col">Data de inscrição</th>
      <th scope="col">Categoria</th>
      <th scope="col">CPF</th>
      <th scope="col">Curso</th>
      <th scope="col">Email</th>
      <th scope="col">UF</th>
      <th scope="col">Ações</th>
      </tr>
  </thead>
  <tbody>
      @foreach($insc as $inscs)
        @php
            $curso = $inscs->find($inscs->id)->relCursos;
        @endphp
          <tr>
      <td>{{$inscs->nomeAluno}}</td>
      <td>{{$inscs->created_at}}</td>
      <td>{{$inscs->tipo}}</td>
      <td>{{$inscs->cpf}}</td>
      <td>{{$curso->nome}}</td>
      <td>{{$inscs->email}}</td>
      <td>{{$inscs->endereco}}</td>

      <td><a href=""><button class="btn btn-dark">Editar</button></a>
      <a href=""> <button class="btn btn-danger">Excluir</button></a></td>
     
      
    </tr>
      @endforeach
   </tbody>
</table></div>
@endsection