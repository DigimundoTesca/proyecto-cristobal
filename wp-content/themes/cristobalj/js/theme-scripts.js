jQuery(document).ready(function(){

  // Translate 'submit' for newsletter form
  let buttonsubmit = document.getElementsByClassName('es_textbox_button es_submit_button');
  let submit = document.getElementsByClassName('es_textbox_button es_submit_button');
  let i = 0;
  for (; i < buttonsubmit.length; i++) {
    if (window.location.pathname == '/Cristobal/') {
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = 'suscribirse';
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Susbribete</span> para acceder a todos los contenidos';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Escribe aquí tu email';
        // document.getElementsByClassName('event-button')[j].innerHTML = 'Más información';
      }
    }
    else if (window.location.pathname == '/Cristobal/it/') {
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = 'abbonarsi';
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Sostenere</span> per accedere a tutti i contenuti';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Scrivi la tua email';
        // document.getElementsByClassName('event-button')[j].innerHTML = 'Ulteriori informazioni';
      }
    }
    else if (window.location.pathname == '/Cristobal/fr/') {
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = "S'abonner";
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Suspensé</span> pour accéder à tous les contenus';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Ecrivez votre email';
        // document.getElementsByClassName('event-button')[j].innerHTML = "plus d'informations";
      }
    }
  }

  // Add text to more information buttons on agenda 
  let eventbutton = document.getElementsByClassName('event-button');
  let eventbuy = document.getElementsByClassName('event-buy');
  let k = 0;
  for (; k < eventbutton.length; k++) {
    if (window.location.pathname == '/Cristobal/') {
      for (l = 0; l < eventbutton.length; l++) {
        document.getElementsByClassName('event-button')[l].innerHTML = 'Más información';
        document.getElementsByClassName('event-buy')[l].innerHTML = 'Compra tu ticket';
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
    $('#knowmore').addClass('animated zoomIn');
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
    $("#theaterslides").responsiveSlides({
      auto: true,
      speed: 500,
      timeout: 2500, 
    });
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


});
