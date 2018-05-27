<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ângela Magalhães, Lucas Santos, Tadeu Jerônimo, Kamila Farias e Hugo Sousa">
    <meta name="generator" content="Atom, Sublime e VS Code">
    <meta name="description" content="Site para pedidos em uma pizzaria">
    <meta name="keywords" content="HTML, JS, CSS, PHP, MySQL">

    <title><?=$title?> - Trabalho 3</title>
    <link rel="shortcut icon" href="<?=base_url('static/img/Logo.png')?>">

    <!-- Bootstrap CSS, FontAwesome Icons, Fonts, Custom Style -->
    <link rel="stylesheet" href="<?=base_url('static/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/css/estilo.css')?>">

  </head>

	<body>

  	<header>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!--tentar deixar fixo -->

        <div class="container">
          <a class="navbar-brand" href="<?=site_url('principal')?>" title="Trabalho 3">
            <img class="d-inline-block" src="<?=base_url('static/img/Logo.png')?>" height="60" alt="3">
            <strong>Trabalho 3</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Pagina Inicial')) echo 'active font-weight-bold'; ?>" href="<?=site_url('paginainicial')?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sobre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Ângela Magalhães</a>
                  <a class="dropdown-item" href="#">Hugo Sousa</a>
                  <a class="dropdown-item" href="#">Kamila Amélia</a>
                  <a class="dropdown-item" href="#">Lucas Santos</a>
                  <a class="dropdown-item" href="#">Tadeu</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=site_url('sobre')?>">Sobre Todos (Nao sei se é necessario)</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Contato')) echo 'active font-weight-bold'; ?>" href="<?=site_url('contato')?>">Contato</a>
              </li>
            </ul>
          </div>

        </div>


      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
