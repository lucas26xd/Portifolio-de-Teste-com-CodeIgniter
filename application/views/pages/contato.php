
    <main role="main" class="container">    

      <div class="mt-5 shadow-lg p-3 bg-white rounded">
        <h1><?=$title?></h1>
        <hr class="title-divider">

        <form action="<?=site_url('contato/send')?>" method="post" class="pr-5 pl-5 pb-5">
          <div class="form-group">
            <label class="font-weight-bold" for="nome">Nome</label><br>
            <input class="form-control" type="text" id="nome" name="nome" value="" placeholder="Digite o seu nome" required autofocus>
          </div>
          <div class="form-group">
            <label class="font-weight-bold" for="email">E-mail</label><br>
            <input class="form-control" type="email" id="email" name="email" value="" placeholder="Digite o seu e-mail para contato" required>
          </div>
          <div class="form-group">
            <label class="font-weight-bold" for="destinatario">Destinatário</label>
            <select class="form-control" id="destinatario" name="destinatario">

              <option value="0" selected>Todos do grupo</option>

              <!-- Carregamento dinâmico de opção do select, para cada integrante do grupo -->
              <?php foreach ($membros as $membro) { ?>
                <option value="<?=$membro['id']?>"><?=$membro['nome']?></option>
              <?php } ?>

            </select>
          </div>
          <div class="form-group">
            <label class="font-weight-bold" for="msg">Mensagem de texto</label><br>
            <textarea class="form-control" type="text" id="msg" name="msg" value="" rows="7" placeholder="Digite a sua mensagem de texto" required></textarea>
          </div>
          <input class="btn btn-primary" type="submit" id="enviar_mensagem" name="enviar" value="Enviar">
        </form>
         
      </div>
      
    </main><!-- /.container -->
