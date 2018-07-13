
jQuery(document).ready(function(){

  // Translate 'submit' for newsletter form
  let buttonsubmit = document.getElementsByClassName('es_textbox_button es_submit_button');
  let submit = document.getElementsByClassName('es_textbox_button es_submit_button');
  let i = 0;
  for (; i < buttonsubmit.length; i++) {
    if (window.location.pathname == '/Cristobal/') {
      document.getElementById('extralink').setAttribute('href', 'saber-mas');
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = 'suscribirse';
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Susbribete</span> para acceder a todos los contenidos';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Escribe aquí tu email';
        // document.getElementsByClassName('event-button')[j].innerHTML = 'Más información';
      }
    }
    else if (window.location.pathname == '/Cristobal/it/') {
      document.getElementById('extralink').setAttribute('href', 'ulteriori-informazioni');
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = 'abbonarsi';
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Sostenere</span> per accedere a tutti i contenuti';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Scrivi la tua email';
        // document.getElementsByClassName('event-button')[j].innerHTML = 'Ulteriori informazioni';
      }
    }
    else if (window.location.pathname == '/Cristobal/fr/') {
      document.getElementById('extralink').setAttribute('href', 'savoir-plus');
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = "S'abonner";
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Suspensé</span> pour accéder à tous les contenus';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Ecrivez votre email';
        // document.getElementsByClassName('event-button')[j].innerHTML = "plus d'informations";
      }
    }
  }
  //Change-link

  if (window.location.pathname == '/Cristobal/it/libros/') {
    history.pushState(null, "", "/Cristobal/it/libri/");
  }
  else if(window.location.pathname == '/Cristobal/it/saber-mas/') {
    history.pushState(null, "", "/Cristobal/it/ulteriori-informazioni/");
  }


  // Add text to more information buttons on agenda
  let eventbutton = document.getElementsByClassName('event-button');
  let eventbuy = document.getElementsByClassName('event-buy');
  let k = 0;
  for (; k < eventbutton.length; k++) {
    if (window.location.pathname == '/Cristobal/') {
      for (l = 0; l < eventbutton.length; l++) {
        document.getElementsByClassName('event-button')[l].innerHTML = 'Más información';
        document.getElementsByClassName('event-buy')[l].innerHTML = 'Reserva tu lugar';
      }
    }
    else if (window.location.pathname == '/Cristobal/it/') {
      for (l = 0; l < eventbutton.length; l++) {
        document.getElementsByClassName('event-button')[l].innerHTML = 'Ulteriori informazioni';
      }
    }
    else if (window.location.pathname == '/Cristobal/fr/') {
      for (l = 0; l < eventbutton.length; l++) {
        document.getElementsByClassName('event-button')[l].innerHTML = "plus d'informations";
      }
    }
  }



  var paises = document.getElementsByClassName("ai1ec-dropdown-toggle")
  var leer = document.getElementsByClassName("news-more-link")
  var agendaT = document.getElementsByClassName("ai1ec-calendar-toolbar")
  var agendaHead = document.getElementsByClassName("ai1ec-filters")
//change buttons text
  for(let i = 0; i < leer.length; i++){
    leer[i].innerHTML = 'ver más'
  }
  console.log(paises)
  for(let i = 0; i<paises.length; i++) {
    if(paises[i].text == "     Categorías  ") {
      console.log("si")
      paises[i].innerHTML = '<i class="fa fa-globe" aria-hidden="true"></i> Selecciona tu país'
    }
    else if (paises[i].text == "     Etiquetas:  ") {
      console.log("tmbiem")
      paises[i].innerHTML = '<i class="fa fa-archive" aria-hidden="true"></i> Temas'
    }
    else if (paises[i].text == "   Agenda   ") {
      paises[i].style.display = "none"
    }
  }

  // Change menu color for metamundo page
  var coll = document.getElementsByClassName('menu-item');
  if (window.location.pathname == '/Cristobal/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#be0211";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' metahover';
    }
  }
  else if (window.location.pathname == '/Cristobal/it/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#be0211";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' metahover';
    }
  }
  else if (window.location.pathname == '/Cristobal/fr/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#be0211";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' metahover';
    }
  }

  // Change menu color for biography page
  var coll = document.getElementsByClassName('menu-item');
  if (window.location.pathname == '/Cristobal/biografia/') {
    document.getElementById('site-navigation').style.backgroundColor = "#d39b00";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' biohover';
    }
  }
  else if (window.location.pathname == '/Cristobal/it/biografia/') {
    document.getElementById('site-navigation').style.backgroundColor = "#d39b00";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' biohover';
    }
  }
  else if (window.location.pathname == '/Cristobal/libros/') {
    document.getElementById('site-navigation').style.backgroundColor = "#eee52f";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' biohover';
    }
  }
  else if (window.location.pathname == '/Cristobal/contacto/') {
    document.getElementById('site-navigation').style.backgroundColor = "#17692a";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += 'metahover';
    }
  }
  else if (window.location.pathname == '/Cristobal/fr/biographie/') {
    document.getElementById('site-navigation').style.backgroundColor = "#d39b00";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' biohover';
    }
  }

  // Change menu color for know-more page
  var coll = document.getElementsByClassName('menu-item');
  if (window.location.pathname == '/Cristobal/saber-mas/') {
    document.getElementById('site-navigation').style.backgroundColor = "#37b4ee";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' morehover';
    }
  }
  else if (window.location.pathname == '/Cristobal/it/ulteriori-informazioni/') {
    document.getElementById('site-navigation').style.backgroundColor = "#37b4ee";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' morehover';
    }
  }
  else if (window.location.pathname == '/Cristobal/fr/savoir-plus/') {
    document.getElementById('site-navigation').style.backgroundColor = "#37b4ee";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' morehover';
    }
  }
  // Metamundo blocks menu handler
  (function($) {
    $("#blocksContainer ul li a").on("click", function(e) {
      e.preventDefault();
      $("#blocksContainer ul li a").removeClass("active");
      $(this).addClass("active");
    });
  })(jQuery);



  (function($) {
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
      var target = $(this.hash);
      var navHeight = $('#mainNav').height();
      var scrollToPosition = target.offset().top - (navHeight);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: scrollToPosition
          }, 1500, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
          });
        }
      }
    });
  })(jQuery);
  // Book download
  (function($) {
    $('#dnlBookBtn').click(function(event) {
      var wpcf7Elm = document.querySelector( '.wpcf7' );
      var redirectUrl = object_name.redirectUrl;
      wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
        $('#downloadThis')[0].click();
        $('#downloadBook').modal('hide');
        swal({
          title: "Descarga en proceso.",
          text: "Disfrute su libro",
          type: "success",
          showCancelButton: false,
          confirmButtonText: "¡Vamos!",
          confirmButtonClass: 'btn btn-success'
        }).then(function () {
          window.location.href = redirectUrl;
        });
      });
    });

  })(jQuery);


  });

  // Moddify footer width
  (function($) {
    if(document.getElementById('datesContainer')){
      let datewidth = document.getElementById('datesContainer').offsetWidth;
      let circlewidth = document.getElementById('circles');

      circlewidth.style.width = datewidth + 'px';
      $(window).resize(function(){
        let datewidth = document.getElementById('datesContainer').offsetWidth;
        let circlewidth = document.getElementById('circles');

        circlewidth.style.width = datewidth + 'px';
      });
    }
  })(jQuery);


  // Moving images for banners
  (function($) {
    $('.mobilekmore').addClass('animated zoomIn');
    $('.bigkmoreContainer').addClass('animated zoomIn');
    // Slider on biography page
    $(".rslides").responsiveSlides({
      auto: true,
      speed: 500,
      timeout: 2500,
    });

    // Sliders on knowmore page
    $("#chamanslides").responsiveSlides({
      auto: true,
      speed: 500,
      timeout: 2500,
    });
    $("#magicslides").responsiveSlides({
      auto: true,
      speed: 500,
      timeout: 2500,
    });

    $("#begin-slide").cycle({
		fx : 'fade',
		timeout: 4000,
		speed: 2000,
		slides: '.slide'
    });
    $(".begin-slide").cycle({
		fx : 'fade',
		timeout: 4000,
		speed: 2000,
		slides: '.mslide'
    });
    $(".psicoteatro-slide").cycle({
		fx : 'fade',
		timeout: 2200,
		speed: 2200,
		slides: '.pslide'
    });

    $("#theaterslides").responsiveSlides({
      auto: true,
      speed: 500,
      timeout: 2500,
    });

    /*slider tarot*/
    var slider = document.querySelector(".slier-prin");
    slider.innerHTML += slider.innerHTML;
  })(jQuery);


  // Change books header color
  var booktitle = document.getElementsByClassName('booktitle');
  let the_color=['#175d39','#d39b00'];
  let c= 0;
  let length1 = booktitle.length;
  for(c; c<length1; c++)
  {
    if (c%2 === 0) {
      booktitle[c].style.backgroundColor = the_color[2];
    }
    else {
      booktitle[c].style.backgroundColor = the_color[1];
    }
  }

  // Change images on Know more banner
  (function($) {
    $(document).ready(function() {
  // Instrucciones a ejecutar al terminar la carga
      var templateUr = object_uri.templateUrl;
      // Prevent know more 'a' tags to redirect
      var contenedor = $('.changeB');
      var imagenes = ['03.jpg', 'tarot.jpg', 'constelaciones.jpg', '003-min.jpg', '01.JPG', 'psico.jpg', 'arbol.Jpg', '06-min.JPG'];
      var cambiar = []
      var imagen = new Image();
      for (var i=0; i < imagenes.length; i++) {
        imagen.src = templateUr + "/images/cristobal/" + imagenes[i];+ "'"
        cambiar.push(imagen.src);
      }
      var tiempo = 3500;
      var cambia = function image(){
      setTimeout(function() {
        contenedor.fadeIn('slow', function() {
          $(this).css('background-image', 'url(' + cambiar[Math.floor(Math.random() * cambiar.length)] + ')');
          image();}).fadeIn('slow'); },tiempo);
        }

    // Prevent know more 'a' tags to redirect
    $("#bigkmoreContainer a").click(function(event){
      event.preventDefault();
    });

    $('.imgChange1').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[0]+')');
        tiempo = 5000;
    });
    $('.imgChange3').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[1]+')');
      tiempo = 5000;
    });
    $('.imgChange5').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[2]+')');
      tiempo = 5000;
    });
    $('.imgChange7').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[3]+')');
      tiempo = 5000;
    });
    $('.imgChange9').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[4]+')');
      tiempo = 5000;
    });
    $('.imgChange11').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[5]+')');
      tiempo = 5000;
    });
    $('.imgChange13').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[6]+')');
      tiempo = 5000;
    });
    $('.imgChange15').mouseover(function() {
      $('.bigkmoreContainer img').css('background-image', 'url('+cambiar[7]+')');
      tiempo = 5000;
    });
    $('.cambia').mouseout(function(){
      tiempo = 2600;
      $('.bigkmoreContainer img').addClass("changeB");
      imagen = true;
      })
      $( window ).load(function() {
        cambia.delay(500);
      });

    });
    jQuery(document).ready(function() {
    jQuery(function () {
    jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 250) {
    jQuery('#IrArriba').fadeIn();
    } else {
    jQuery('#IrArriba').fadeOut();
    }
    });
    });

    });
})(jQuery);
