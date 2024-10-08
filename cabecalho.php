<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Web II</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="shortcut icon" href="faviconcon.ico" type="image/x-icon">
    <link rel="icon" href="faviconcon.ico" type="image/x-icon">
    <!-- <script src="atualiza.js" defer></script>  "Para fins de Facilidade na criação de identidade visual -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Loja Virtual</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novo_produto.php">Aula 03/09</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exemplos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variaveis</a></li>
            <li><a class="dropdown-item" href="laco.php">Laço de repetição</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="vetor.php">Vetores e Matrizes</a></li>
            <li><a class="dropdown-item" href="funcao.php">Funções</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>