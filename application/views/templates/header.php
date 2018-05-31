<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ângela Magalhães, Hugo Sousa, Kamila Farias, Lucas Santos e Tadeu Jerônimo">
    <meta name="generator" content="Atom, Sublime e VS Code">
    <meta name="description" content="Site sobre os membros da equipe">
    <meta name="keywords" content="HTML, JS, CSS, PHP, MySQL">

    <title><?=$title?> | ATV3-AP2</title>
    <link rel="shortcut icon" href="<?=base_url('static/img/profile.png')?>">

    <!-- Bootstrap CSS, Custom Style -->
    <link rel="stylesheet" href="<?=base_url('static/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/css/estilo.css')?>">
  </head>

	<body>

  	<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">

        <div class="container">
          <a class="navbar-brand" href="<?=site_url('home')?>" title="ATV3-AP2">
            <img class="d-inline-block align-top" src="<?=base_url('static/img/profile.png')?>" height="32" alt="ATV3-AP2">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar01" aria-controls="navbar01"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Página Inicial')) echo 'active font-weight-bold'; ?>" href="<?=site_url('inicial')?>">Página Inicial</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if (!strcmp($title,'Sobre')) echo 'active font-weight-bold'; ?>" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">

                  <!-- Carregamento dinâmico de opção do menu, com link individual para resumo sobre os membros da equipe -->
                  <?php foreach ($membros as $membro) { ?>
                    <a class="dropdown-item" href="<?=site_url('sobre/view/'.$membro['id'])?>">
                      <img alt="<?=$membro['nome']?>" title="<?=$membro['nome']?>" height="25" style="margin-left: -15px; margin-right: 15px;"
                            src="<?=base_url('static/img/'.$membro['user'].'.png')?>">
                      <?=$membro['nome']?>
                    </a>
                  <?php } ?>

                </div>
              </li>              
              <li class="nav-item">
                <a class="nav-link <?php if (!strcmp($title,'Contato')) echo 'active font-weight-bold'; ?>" href="<?=site_url('contato')?>">Contato</a>
              </li>
            </ul>
            <a class="btn btn-outline-info my-2 my-sm-0" href="https://github.com/lucas26xd/Projeto3-TecWeb" target="_blank" title="GitHub">GitHub</a>            
          </div>
        </div>

      </nav>
    </header>
