@extends('templates.template')

@section('content')
    <h1 class="text-center">Inscrição</h1> <hr>
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif
    <div class="col-8 m-auto">
           
           @if(isset($insc))
            <form name="formEdit" id="formEdit" method="post" action="{{url("inscricao/$insc->id")}}">
                @method('PUT')
            @else
            <form name="formCad" id="formCad" method="post" action="{{url('inscricao')}}">
            @endif
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$insc->nomeAluno ?? ''}}"required><br>            
            <input class="form-control" type="text" name="email" id="email" placeholder="Email:" value="{{$insc->email ?? ''}}"required><br>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF (números):" value="{{$insc->cpf ?? ''}}"required><br>
            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço:" value="{{$insc->endereco ?? ''}}"required><br>
            <input class="form-control" type="text" name="empresa" id="empresa" placeholder="Empresa:" value="{{$insc->empresa ?? ''}}"required><br>            
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone: (xx)xxxx-xxxx" value="{{$insc->telefone ?? ''}}"required><br>
            <input class="form-control" type="text" name="celular" id="celular" placeholder="Celular: (xx)xxxxx-xxxx" value="{{$insc->celular ?? ''}}"required><br>
            
            <label for="tipo">Selecione o tipo:</label>
            <select class="form-control" name="tipo" id="tipo" required>
            <option value="Aluno">Aluno</option>
            <option value="Profissional">Profissional</option>
            <option value="Associado">Associado</option>            
            </select><br>

            <label for="id_curso">Selecione o curso:</label>
            <select class="form-control" name="id_curso" id="id_curso"  required>
            <option value="{{$insc->relCursos->id ?? ''}}">{{$insc->relCursos->nome ?? 'Curso'}}</option>
              
            @foreach($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
            </select><br>

            <input class="btn btn-primary" type="submit" value="@if(isset($insc)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection