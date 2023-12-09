<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="jumbotron">
  <h1 class="display-4">Olá, mundo!</h1>
  <p class="lead">Este é um simples gestor de tarefas para rfctina diária.</p>
  <hr class="my-4">
  <p>Conheça mais abaixo!</p>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações  
</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('form-cadastro-gestor')}}">Cadastrar Tarefa</a>
    <a class="dropdown-item" href="{{ route('form-alterar-gestor', ['registrosGestor' => $registrosGestor])}}">Alterar Tarefa</a>    
    <a class="dropdown-item" href="{{route('form-deletar-gestor')}}">Apagar Tarefa</a>
    <a class="dropdown-item" href="{{route('form-view-gestor')}}">Visualizar Tarefa</a>
  </div>
</div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>                                                                                                                                                            