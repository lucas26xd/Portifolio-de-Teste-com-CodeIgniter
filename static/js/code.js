function trocaImagem() { //troca posição das imagens
  var fotos = $("div.fotos").children();
  for (var i = 1; i < fotos.length; i++) {
    fotos[0].before(fotos[i]);
  }
}
setInterval(trocaImagem, 5000);


$(document).ready(function() {
  
  // Ação do botão de enviar mensagem
	$("#enviar_mensagem").click(function (btn) {
		btn.preventDefault();
		if (enviaDados(this.form)) {
			$("html, body").animate({scrollTop:0}, "slow");
			$("#mensagem_sucesso").show("slow");
      $("form").each (function(){
        this.reset();
      });
		}
	});

  // Ação do botão de exibir a equipe
	$("#exibir_equipe").click(function (btn) {
		btn.preventDefault();
    $("#div_equipe").slideDown("slow");
    $('html, body').animate({scrollTop:$('#div_equipe').position().top}, 'slow');
	});

  // Ação do botão de esconder a equipe
	$("#esconder_equipe").click(function (btn) {
		btn.preventDefault();
    $("#div_equipe").hide("slow");
    $('html, body').animate({scrollTop:$('#jumbotron').position().top}, 'slow');
	});  
  
});

// Confirmação de envio de mensagem
function enviaDados(form) {
  return confirm("Você confirma o envio da mensagem?");
}