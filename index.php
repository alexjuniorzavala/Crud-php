<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-body">
    <h1>Cadastro</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cadastrar2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=editar">Editar Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-sm">
  <div class="row">
    <div class="col mt-5">
      <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo";
              include_once("novo-usuario.php");
            break;
            case "listar";
              include_once("listar-usuario.php");
            break;
            case "salvar";
              include_once("salvar-usuario.php");
            break;
            case "editar";
              include_once("editar-usuario.php");
            break;
            case "login";
              include_once("login.php");
            break;
            default:
              print "<h1>Bem vindo</h1>";
          };
    
    ?>
    </div>
  </div>
</div>
   
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>