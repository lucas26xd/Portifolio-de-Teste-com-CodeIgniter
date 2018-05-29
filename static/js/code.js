function trocaImagem() {//troca posição das imagens
  var fotos = $("div.fotos").children();
  for (var i = 1; i < fotos.length; i++) {
    fotos[0].before(fotos[i]);
  }
}
setInterval(trocaImagem, 5000);
