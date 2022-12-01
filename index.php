<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Biblioteca</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atendentes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-atendente">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-atendente">Listar</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Livros
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuários
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-usuario">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Empréstimos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-emprestimo">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-emprestimo">Listar</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch (@$_REQUEST["page"]) {

              //atendente
              case 'cadastrar-atendente':
                include("pages/cadastrar-atendente.php");
                break;
              case 'listar-atendente':
                include("pages/listar-atendente.php");
                break;
              case 'editar-atendente':
                include("pages/editar-atendente.php");
                break;
              case 'salvar-atendente':
                include("pages/salvar-atendente.php");
                break;

              //categoria
              case 'cadastrar-categoria':
                include("pages/cadastrar-categoria.php");
                break;
              case 'listar-categoria':
                include("pages/listar-categoria.php");
                break;
              case 'editar-categoria':
                include("pages/editar-categoria.php");
                break;
              case 'salvar-categoria':
                include("pages/salvar-categoria.php");
                break;

              //livro
              case 'cadastrar-livro':
                include("pages/cadastrar-livro.php");
                break;
              case 'listar-livro':
                include("pages/listar-livro.php");
                break;
              case 'editar-livro':
                include("pages/editar-livro.php");
                break;
              case 'salvar-livro':
                include("pages/salvar-livro.php");
                break;

              //usuario
              case 'cadastrar-usuario':
                include("pages/cadastrar-usuario.php");
                break;
              case 'listar-usuario':
                include("pages/listar-usuario.php");
                break;
              case 'editar-usuario':
                include("pages/editar-usuario.php");
                break;
              case 'salvar-usuario':
                include("pages/salvar-usuario.php");
                break;

              //emprestimo
              case 'cadastrar-emprestimo':
                include("pages/cadastrar-emprestimo.php");
                break;
              case 'listar-emprestimo':
                include("pages/listar-emprestimo.php");
                break;
              case 'editar-emprestimo':
                include("pages/editar-emprestimo.php");
                break;
              case 'salvar-emprestimo':
                include("pages/salvar-emprestimo.php");
                break;
              
              default:
                print "<img src=imagens/logo.png>";
            }

          ?>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>