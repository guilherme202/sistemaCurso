@extends('templates.template')

@section('content')
    <h1 class="text-center">Inserir Curso</h1> <hr>
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif
    <div class="col-8 m-auto">
           
           @if(isset($curso))
            <form name="formEdit" id="formEdit" method="post" action="{{url("curso/$curso->id")}}">
                @method('PUT')
            @else
            <form name="formCad" id="formCad" method="post" action="{{url('curso')}}">
            @endif
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$curso->nome ?? ''}}"required><br>            
            <input class="form-control" type="text" name="descricao" id="Descricao" placeholder="Descricao:" value="{{$curso->descricao ?? ''}}"required><br>
            <input class="form-control" type="text" name="valor" id="valor" placeholder="Valor:" value="{{$curso->valor ?? ''}}"required><br>
            <input class="form-control" type="date" name="dataInicio" id="dataInicio" placeholder="Data de início:" value="{{$curso->dataInicio ?? ''}}"required><br>
             <input class="form-control" type="date" name="dataFim" id="dataFim" placeholder="Data de término:" value="{{$curso->dataFim ?? ''}}"required><br>
             <input class="form-control" type="text" name="qtdInscritos" id="qtdInscritos" placeholder="Quantidade de Inscritos: " value="{{$curso->qtdInscritos ?? ''}}"required><br>           
            <input class="form-control" type="file" name="material" id="material" placeholder="Material: " value="{{$curso->material ?? ''}}"required><br>
            
            <input class="btn btn-primary" type="submit" value="@if(isset($curso)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection