    <!--div class="container-fluid">
      <main>
        <h2 id="teste">Olá! Seja Bem-Vindo!</h2>
        <h3>Tenha acesso ao perfil da nossa equipe acessando o item <i>sobre</i> do menu!</h3>
        <h1 class="al" id="al">Ângela, Lucas, Tadeu, Kamila e Hugo</h1>
        <div class="fotos">
        <?php foreach ($membros as $membro) { ?>
          <img class="d-inline-block" src="<?=base_url('static/img/'.strtolower(explode(" ", $membro['nome'])[0]).'.png')?>" height="180" alt=<?=$membro['nome']?>>
        <?php } ?>
        </div>
        <img class="d-inline-block" src="<?=base_url('static/img/lucas.jpg')?>" height="180" alt="Lucas">
        <img class="d-inline-block" src="<?=base_url('static/img/hugo.jpg')?>" height="180" alt="Hugo">
        <img class="d-inline-block" src="<?=base_url('static/img/tadeu.jpg')?>" height="180" alt="Tadeu">
        <img class="d-inline-block" src="<?=base_url('static/img/Ângela.jpg')?>" height="180" alt="Ângela">
        <img class="d-inline-block" src="<?=base_url('static/img/kamila.jpg')?>" height="180" alt="Kamila">
      </main>
    </div-->


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

            <!--div class="col-lg-4">
              <img class="rounded-circle" src="<?=base_url('static/img/lucas_santos.png')?>" alt="<?=$membros[3]['nome']?>" title="<?=$membros[3]['nome']?>" width="140" height="140">
              <h2><?=$membros[3]['nome']?></h2>
              <p><?=$membros[3]['ocupacao']?><br><a href="mailto:<?=$membros[3]['email']?>"><?=$membros[3]['email']?></a></p>
              <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/4')?>" role="button">Ver detalhes »</a></p>
            </div>            
            <div class="col-lg-4">
              <img class="rounded-circle" src="<?=base_url('static/img/hugo_sousa.png')?>" alt="<?=$membros[1]['nome']?>" title="<?=$membros[1]['nome']?>" width="140" height="140">
              <h2><?=$membros[1]['nome']?></h2>
              <p><?=$membros[1]['ocupacao']?><br><a href="mailto:<?=$membros[1]['email']?>"><?=$membros[1]['email']?></a></p>
              <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/2')?>" role="button">Ver detalhes »</a></p>
            </div>            
            <div class="col-lg-4">
              <img class="rounded-circle" src="<?=base_url('static/img/tadeu_jeronimo.png')?>" alt="<?=$membros[4]['nome']?>" title="<?=$membros[4]['nome']?>" width="140" height="140">
              <h2><?=$membros[4]['nome']?></h2>
              <p><?=$membros[4]['ocupacao']?><br><a href="mailto:<?=$membros[4]['email']?>"><?=$membros[4]['email']?></a></p>
              <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/5')?>" role="button">Ver detalhes »</a></p>
            </div>            
            <div class="col-lg-6">
              <img class="rounded-circle" src="<?=base_url('static/img/angela_magalhaes.png')?>" alt="<?=$membros[0]['nome']?>" title="<?=$membros[0]['nome']?>" width="140" height="140">
              <h2><?=$membros[0]['nome']?></h2>
              <p><?=$membros[0]['ocupacao']?><br><a href="mailto:<?=$membros[0]['email']?>"><?=$membros[0]['email']?></a></p>
              <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/1')?>" role="button">Ver detalhes »</a></p>
            </div>            
            <div class="col-lg-6">
              <img class="rounded-circle" src="<?=base_url('static/img/kamila_farias.png')?>" alt="<?=$membros[2]['nome']?>" title="<?=$membros[2]['nome']?>" width="140" height="140">
              <h2><?=$membros[2]['nome']?></h2>
              <p><?=$membros[2]['ocupacao']?><br><a href="mailto:<?=$membros[2]['email']?>"><?=$membros[2]['email']?></a></p>
              <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/3')?>" role="button">Ver detalhes »</a></p>
            </div-->

            <?php for ($i = 0; $i < count($membros); $i++) { ?>
              <div class="col-lg-<?=($i < 3)?'4':'6'?>">
                <img alt="<?=$membros[$i]['nome']?>" title="<?=$membros[$i]['nome']?>" height="140"
                     src="<?=base_url('static/img/'. str_replace(" ","_",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim(strtolower($membros[$i]['nome']))))) .'.png')?>">
                <h2><?=$membros[$i]['nome']?></h2>
                <p><?=$membros[$i]['ocupacao']?><br><a href="mailto:<?=$membros[$i]['email']?>"><?=$membros[$i]['email']?></a></p>
                <p><a class="btn btn-secondary" href="<?=site_url('sobre/view/'.$membros[$i]['id'])?>" role="button">Ver detalhes »</a></p>
              </div>
            <?php } ?>

          </div>
          
         </div>

      </div>
      
    </main><!-- /.container -->
