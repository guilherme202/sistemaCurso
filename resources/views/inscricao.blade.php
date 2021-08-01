@extends('templates.template')

@section('content')
    <h1 class="text-center">Inscrição</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome:"><br>
            
            <input class="form-control" type="text" name="email" id="email" placeholder="Email:"><br>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF:"><br>
            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço:"><br>
            <input class="form-control" type="text" name="empresa" id="empresa" placeholder="Empresa:"><br>            
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone:"><br>
            <input class="form-control" type="text" name="celular" id="celular" placeholder="Celular:"><br>
            <input class="form-control" type="text" name="curso" id="curso" placeholder="Curso:"><br>


            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection