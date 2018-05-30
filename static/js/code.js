
$(document).ready(function() {
  
  // Ação do formulário de envio de mensagem
  $("form").submit(function( event ) {
    event.preventDefault();
    if (enviaDados(this.form)) {
      this.submit();
      $(this).each (function() {
        this.reset();
      });
    }
  });

  // Ação do botão de exibir a equipe
	$("#exibir_equipe").click(function (event) {
		event.preventDefault();
    $("#div_equipe").slideDown("slow");
    $('html, body').animate({scrollTop:$('#div_equipe').position().top}, 'slow');
	});

  // Ação do botão de esconder a equipe
	$("#esconder_equipe").click(function (event) {
		event.preventDefault();
    $("#div_equipe").hide("slow");
    $('html, body').animate({scrollTop:$('#jumbotron').position().top}, 'slow');
	});  
  
});

// Confirmação de envio de mensagem
function enviaDados(form) {
  return confirm("Você confirma o envio da mensagem?");
}

// Troca posição das imagens
function trocaImagem() { 
  var fotos = $("div.fotos").children();
  for (var i = 1; i < fotos.length; i++) {
    fotos[0].before(fotos[i]);
  }
}
setInterval(trocaImagem, 5000);