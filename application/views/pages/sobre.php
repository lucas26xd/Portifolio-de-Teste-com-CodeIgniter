<<<<<<< HEAD
<div id = "teste" class="container-fluid">
	  <img class="img-fluid" src="<?=base_url('static/imagens/calabresa1.png')?>">
	  <h1>Hugo Sousa</h1>
	  <h1>Telefone</h1>
	  <h1>email</h1>
	  <h1>Texto Texto Texto Texto Texto  Texto Texto
	    Texto Texto Texto Texto Texto Texto Texto Texto
	    Texto Texto Texto Texto Texto Texto Texto Texto
	    Texto Texto Texto Texto Texto Texto Texto Texto
	    Texto Texto Texto Texto Texto Texto Texto Texto
	    Texto Texto Texto Texto Texto Texto Texto Texto </h1>
	</div>
=======

    <main role="main" class="container">

      <div class="row mt-5 shadow-lg p-3 bg-white rounded">
        <div class="col-md-7 order-md-2">
          <h1 class="featurette-heading"><?=$title?></h1>
          <hr class="my-4">
          
          <!--p class="lead">
            <b>Nome:</b> <?=$membro['nome']?><br>
            <b>Ocupação:</b> <?=$membro['ocupacao']?><br>
            <b>Descrição:</b> <?=$membro['descricao']?><br>
            <address class="lead">
              <b>E-mail:</b> <a href="mailto:<?=$membro['email']?>"><?=$membro['email']?></a>
              | <b>Fone:</b> <a href="tel:<?=$membro['telefone']?>"><?=$membro['telefone']?></a>
            </address>
          </p-->

          <table class="table table-borderless">
            <tbody>
              <tr>
                <th class="text-right" scope="row">Nome:</th>
                <td><?=$membro['nome']?></td>
              </tr>
              <tr>
                <th class="text-right" scope="row">Ocupação:</th>
                <td><?=$membro['ocupacao']?></td>
              </tr>
              <tr>
                <th class="text-right" scope="row">Descrição:</th>
                <td class="text-justify"><?=$membro['descricao']?></td>
              </tr>
              <tr>
                <th class="text-right" scope="row">E-mail:</th>
                <td><a href="mailto:<?=$membro['email']?>"><?=$membro['email']?></td>
              </tr>
              <tr>
                <th class="text-right" scope="row">Telefone:</th>
                <td><a href="tel:<?=$membro['telefone']?>"><?=$membro['telefone']?></td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-md-3 order-md-1">
          <img class="img-fluid" alt="<?=$membro['nome']?>" title="<?=$membro['nome']?>"
               src="<?=base_url('static/img/'. str_replace(" ","_",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim(strtolower($membro['nome']))))) .'.png')?>">
        </div>
      </div>

    </main><!-- /.container -->
>>>>>>> 683f6a98110fa0188b167d6f0e494f9588b23435
