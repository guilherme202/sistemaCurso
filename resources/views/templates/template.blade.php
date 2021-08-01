<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cursos</title>
    <link rel="stylesheet" href="{{url('assets\bootstrap-5.0.2-dist\css\bootstrap.min.css')}}">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{url('/create')}}">Inscrições</a>
        <a class="nav-link" href="#">Listar/editar inscrições</a>
        <a class="nav-link" href="#">Novo curso</a>
        <a class="nav-link" href="#">Lista de cursos</a>
        <a class="nav-link" href="#">Cadastro de Usúarios</a>
     
      </div>
    </div>
  </div>
</nav>
</head>
<body>
    @yield('content')
</body>
</html>