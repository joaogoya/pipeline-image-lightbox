//preset do index - usado o .execute do showslides
var slideIndex = 1;

//Função que troca os slides - global pois os swipes e o .ready() tem escopos diferentes
showSlides = {
  execute: function (n) {
    var i;

    //array de slides escritos no html
    var slides = $(".mySlides");

    // trata a ultima img para ir para a primeira
    if (n > slides.length) {
      slideIndex = 1;
    }

    //trata a primeira para ir para a última
    if (n < 1) {
      slideIndex = slides.length;
    }

    //esconde o slide clicado
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    //exibe o anterior/próximo
    slides[slideIndex - 1].style.display = "block";
  },
};

$(document).ready(function () {
  
  //inicializa o index na modal
  showSlides.execute(slideIndex);

  //clique em alguma img
  $(".click-modal").click(function () {

    //abre a modal
    $("#myModal").show();

    //seta o elemento clicado
    var clicked_img = $(this);

    //pega o index, passando p nunber
    var index = parseInt(clicked_img.attr("data-index"));

    //mostra o slide clicado
    slideIndex = index;
    showSlides.execute(slideIndex);
  });

  //btn fechar
  $(".close").click(function () {
    $("#myModal").hide();
  });

  //btns next e prev
  $(".next").click(function () {
    showSlides.execute((slideIndex += 1));
  });

  $(".prev").click(function () {
    showSlides.execute((slideIndex += -1));
  });
}); // fim document ready

/*
  A lib mobile do jq gerou conflito com o painel admin do wp
  por enquanto os swipes ficarão desabilitados
  https://br.wordpress.org/support/topic/problems-with-jquery-mobile-api-in-custom-plugin/
*/

// //swipes
// $(document).on("swipeleft", ".slide", function (e) {
//   showSlides.execute((slideIndex += -1));
//   return false;
// });

// $(document).on("swiperight", ".slide", function (e) {
//   showSlides.execute((slideIndex += 1));
//   return false;
// });
