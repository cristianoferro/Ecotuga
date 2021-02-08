
//NORTE

//ao clicar
/*
$('#').click(function(){

//fazer aparecer parte relativa de cada parte do pais

})
*/

//scrolls
var window_height = $(window).height();
var document_height = $(document).height();
var numeros_scroll = $('#section-numeros').offset().top;

//Adcionar um evento de scroll à janela para que seja executada uma função sempre que existir variação no scroll
$(window).scroll(function(){

    //Guardar scroll actual
    var current_scroll = $(window).scrollTop();

//Fazer aparecer os numeros
if(current_scroll > numeros_scroll - window_height/2 ){

  //animação de countup para os numeros


  $('.numero').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
    {
      duration: 2000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
    });
  });
	
}else{}
    });






//ANIMAÇÃO DE APRESENTAÇÃO
$("#animacao_intro > .anim_txt:gt(0)").hide();

setInterval(function() {
  $('#animacao_intro > .anim_txt:first')
    .fadeOut(0)
    .next()
    .fadeIn(500)
    .end()
    .appendTo('#animacao_intro');
},  4000);

//NORTE

//ao clicar
$('#norte_img').click(function(){
  $('#seccao_norte').fadeToggle();
  $('#seccao_centro').fadeOut();
  $('#seccao_sul').fadeOut();
	$('#animacao_intro').fadeOut(0);
})
// mover e mudar opacidades ao passar o rato
$('#norte_img').mouseover(function(){
    $('#norte_img').css('transform','translate(5px, 0px)');
    $('#centro_img').stop().animate({'opacity':'0.5'}, 300);
    $('#sul_img').stop().animate({'opacity':'0.5'}, 300);
});
// desfazer
$('#norte_img').mouseout(function(){
    $('#norte_img').css('transform','translate(0px, 0px)');
    $('#centro_img').stop().animate({'opacity':'1'}, 300);
    $('#sul_img').stop().animate({'opacity':'1'}, 300);
});



//CENTRO

//ao clicar
$('#centro_img').click(function(){
  $('#seccao_centro').fadeToggle();
  $('#seccao_norte').fadeOut();
  $('#seccao_sul').fadeOut();
	$('#animacao_intro').fadeOut(0);
})
// mover e mudar opacidades ao passar o rato
$('#centro_img').mouseover(function(){
    $('#centro_img').css('transform','translate(5px, 0px)');
    $('#norte_img').stop().animate({'opacity':'0.5'}, 300);
    $('#sul_img').stop().animate({'opacity':'0.5'}, 300);
});
// desfazer
$('#centro_img').mouseout(function(){
    $('#centro_img').css('transform','translate(0px, 0px)');
    $('#norte_img').stop().animate({'opacity':'1'}, 300);
    $('#sul_img').stop().animate({'opacity':'1'}, 300);
});


//SUL

//ao clicar
$('#sul_img').click(function(){
  $('#seccao_sul').fadeToggle();
  $('#seccao_centro').fadeOut();
  $('#seccao_norte').fadeOut();
	$('#animacao_intro').fadeOut(0);
})
// mover e mudar opacidades ao passar o rato
$('#sul_img').mouseover(function(){
    $('#sul_img').css('transform','translate(5px, 0px)');
    $('#norte_img').stop().animate({'opacity':'0.5'}, 300);
    $('#centro_img').stop().animate({'opacity':'0.5'}, 300);
});
// desfazer
$('#sul_img').mouseout(function(){
    $('#sul_img').css('transform','translate(0px, 0px)');
    $('#norte_img').stop().animate({'opacity':'1'}, 300);
    $('#centro_img').stop().animate({'opacity':'1'}, 300);
});





//MENU

    //Variável que guarda a distância ao topo
	var topo = $('#seccao_norte').offset().top;

	//Variável que guarda a altura da janela
	var altura_janela = $(window).height();


	//Evento - scroll
	$(window).scroll(function (){

		//Guardar o valor de scroll
		var scroll_actual = $(window).scrollTop();

  });

//Click MENU
	$('#menu a').click( function ( evento ){

		//Impedir comportamento predefinido do browser de navegar imediatamente para a parte da página que seleccionamos no link do menu (que tem âncora) -> fazer animação > !!! ESTÁ A DAR ERRO !!!
		evento.preventDefault();

		//Guardar numa variável o atributo href do elemento clicado
		var link_href = $(this).attr('href');

		//Guardar numa variável a distância ao topo do elemento com id igual ao href do elemento clicado

    var distancia_topo = $(link_href).offset().top;

		//Animar scroll
		$('html, body').animate({scrollTop:distancia_topo-100}, 1000);

	});



//NOVIDADES


//slides norte

var indice_atual_n = 0;
var total_conteudos_n = $('.novidade_norte').length;

//seta direita

$('#seta_dir_norte').click(function(){
  

  if(indice_atual_n < total_conteudos_n - 1){
    var proximo_indice = indice_atual_n + 1;
  }
  else{
    var proximo_indice = 0;
  }
  $('.novidade_norte').eq(indice_atual_n).stop().animate({'left':'-120%'});
  $('.novidade_norte').eq(proximo_indice).stop().css('left','120%');
  $('.novidade_norte').eq(proximo_indice).stop().animate({'left':'0%'});

  indice_atual_n = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_norte').fadeOut();
});

//seta esquerda

$('#setas_esq_norte').click(function(){
  

  if(indice_atual_n > 0){
    var proximo_indice = indice_atual_n - 1;
  }
  else{
    var proximo_indice = total_conteudos_n - 1;
  }
  $('.novidade_norte').eq(indice_atual_n).stop().animate({'left':'120%'});
  $('.novidade_norte').eq(proximo_indice).stop().css('left','-120%');
  $('.novidade_norte').eq(proximo_indice).animate({'left':'0%'});

  indice_atual_n = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_norte').fadeOut();
});




//slides centro

var indice_atual_c = 0;
var total_conteudos_c = $('.novidade_centro').length;

//seta direita
$('#seta_dir_centro').click(function(){
  

  if(indice_atual_c < total_conteudos_c - 1){
    var proximo_indice = indice_atual_c + 1;
  }
  else{
    var proximo_indice = 0;
  }
  $('.novidade_centro').eq(indice_atual_c).stop().animate({'left':'-120%'});
  $('.novidade_centro').eq(proximo_indice).stop().css('left','120%');
  $('.novidade_centro').eq(proximo_indice).stop().animate({'left':'0%'});

  indice_atual_c = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_centro').fadeOut();
});

//seta esquerda

$('#setas_esq_centro').click(function(){
  

  if(indice_atual_c > 0){
    var proximo_indice = indice_atual_c - 1;
  }
  else{
    var proximo_indice = total_conteudos_c - 1;
  }
  $('.novidade_centro').eq(indice_atual_c).stop().animate({'left':'120%'});
  $('.novidade_centro').eq(proximo_indice).stop().css('left','-120%');
  $('.novidade_centro').eq(proximo_indice).animate({'left':'0%'});

  indice_atual_c = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_centro').fadeOut();
});



//slides sul

var indice_atual_s = 0;
var total_conteudos_s = $('.novidade_sul').length;

//seta direita
$('#seta_dir_sul').click(function(){
  

  if(indice_atual_s < total_conteudos_s - 1){
    var proximo_indice = indice_atual_s + 1;
  }
  else{
    var proximo_indice = 0;
  }
  $('.novidade_sul').eq(indice_atual_s).stop().animate({'left':'-120%'});
  $('.novidade_sul').eq(proximo_indice).stop().css('left','120%');
  $('.novidade_sul').eq(proximo_indice).stop().animate({'left':'0%'});

  indice_atual_s = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_sul').fadeOut();
});

//seta esquerda

$('#setas_esq_sul').click(function(){
  

  if(indice_atual_s > 0){
    var proximo_indice = indice_atual_s - 1;
  }
  else{
    var proximo_indice = total_conteudos_s - 1;
  }
  $('.novidade_sul').eq(indice_atual_s).stop().animate({'left':'120%'});
  $('.novidade_sul').eq(proximo_indice).stop().css('left','-120%');
  $('.novidade_sul').eq(proximo_indice).animate({'left':'0%'});

  indice_atual_s = proximo_indice;
	//fazer desaparecer texto
  $('#janela_novidade_sul').fadeOut();
});


//Abrir janela com texto - fadein
//norte
    $('.novidade_norte').click(function(){
        var conteudo = $(this).find('p').html();
        $('.janela-conteudo').html(conteudo);
        $('#janela_novidade_norte').fadeIn();
    });

//centro
$('.novidade_centro').click(function(){
    var conteudo = $(this).find('p').html();
    $('.janela-conteudo').html(conteudo);
    $('#janela_novidade_centro').fadeIn();
});

//sul
$('.novidade_sul').click(function(){
    var conteudo = $(this).find('p').html();
    $('.janela-conteudo').html(conteudo);
    $('#janela_novidade_sul').fadeIn();
});

//Fechar janela com texto - fadeout
//norte
$('#janela_botao_norte').click(function(){
    $('#janela_novidade_norte').fadeOut();
});

    $('#janela_botao_centro').click(function(){
        $('#janela_novidade_centro').fadeOut();
    });

//centro
$('#janela_botao_sul').click(function(){
    $('#janela_novidade_sul').fadeOut();
});





//PETIÇÕES
//Clicar no botão + e mostrar mais petições - fadein

/*  $('#botao-peticoes').click(function(){

        var conteudo = $(this).html();

        $('#janela-conteudo').html(conteudo);
        $('#janela-novidade').fadeIn();
    });

	ou?

*/

//ao clicar guardar index e deslizar janela
$('.peticao_mais').click(function(){
	var indice = $(this).index();
	$(this).parent().find('.peticao_menos').fadeIn();
	$(this).fadeOut();
	$(this).next().next().children().animate({'top':'-15vw'});
	
}),

$('.peticao_menos').click(function(){
	var indice = $(this).index();
	$(this).fadeOut();
	$(this).next().next().next().children().animate({'top':'0vw'});
	$(this).next().fadeIn();
	
});






