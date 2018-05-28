<div class="container-fluid">
  <main>
    <h2 id="teste">Olá! Seja Bem-Vindo!</h2>
    <h3>Tenha acesso ao perfil da nossa equipe acessando o item <i>sobre</i> do menu!</h3>
    <h1 class="al" id="al">Ângela, Lucas, Tadeu, Kamila e Hugo</h1>
    <div class="fotos">
    <?php foreach ($membros as $membro) { ?>
      <img class="d-inline-block" src="<?=base_url('static/img/'.strtolower(explode(" ", $membro['nome'])[0]).'.png')?>" height="180" alt=<?=$membro['nome']?>>
    <?php } ?>
    </div>
    <!--<img class="d-inline-block" src="<?=base_url('static/img/lucas.jpg')?>" height="180" alt="Lucas">
    <img class="d-inline-block" src="<?=base_url('static/img/hugo.jpg')?>" height="180" alt="Hugo">
    <img class="d-inline-block" src="<?=base_url('static/img/tadeu.jpg')?>" height="180" alt="Tadeu">
    <img class="d-inline-block" src="<?=base_url('static/img/Ângela.jpg')?>" height="180" alt="Ângela">
    <img class="d-inline-block" src="<?=base_url('static/img/kamila.jpg')?>" height="180" alt="Kamila">-->
  </main>
</div>
