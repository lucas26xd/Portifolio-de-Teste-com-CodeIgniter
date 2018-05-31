
    <main role="main" class="container">
      
      <div class="container marketing mt-5">
  
        <div id="jumbotron" class="jumbotron">
          <h1><?=$title?></h1>
          <hr class="title-divider">  
          <p class="lead">
            Olá! Seja Bem-Vindo!<br>
            Tenha acesso ao perfil da nossa equipe acessando o item <i>Sobre</i> do menu ou através do botão abaixo!
          </p>
          <a class="btn btn-lg btn-primary" id="exibir_equipe" href="#" role="button">Exibir equipe »</a>
        </div>

        <div class="mt-5 shadow-lg p-3 bg-white rounded" id="div_equipe" style="display: none;">
          <h2 class="pt-5">Equipe <a class="btn btn-sm btn-danger" id="esconder_equipe" href="#" title="Esconder Equipe">X</a></h2>
          
          <hr class="title-divider">
          
          <div class="row">

            <!-- Carregamento dinâmico de informações dos membros da equipe -->
            <?php for ($i = 0; $i < count($membros); $i++) { ?>
              <div class="col-lg-<?=($i < 3)?'4':'6'?>">
                <img alt="<?=$membros[$i]['nome']?>" title="<?=$membros[$i]['nome']?>" height="140"
                     src="<?=base_url('static/img/'.$membros[$i]['user'].'.png')?>">
                <h2><?=$membros[$i]['nome']?></h2>
                <p>
                  <?=$membros[$i]['ocupacao']?><br>
                  <a href="http://<?=$membros[$i]['lattes']?>" target="_blank"><?=$membros[$i]['lattes']?></a><br>
                  <a href="mailto:<?=$membros[$i]['email']?>" target="_blank"><?=$membros[$i]['email']?></a>
                </p>
                <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/'.$membros[$i]['id'])?>" role="button">Ver detalhes »</a></p>
              </div>
            <?php } ?>

          </div>
          
         </div>

      </div>
      
    </main><!-- /.container -->
