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
      }
    }
    else if (window.location.pathname == '/Cristobal/it/') {
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = 'abbonarsi';
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Sostenere</span> per accedere a tutti i contenuti';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Scrivi la tua email';
      }
    }
    else if (window.location.pathname == '/Cristobal/fr/') {
      for (j = 0; j < buttonsubmit.length; j++) {
        document.getElementsByClassName('es_textbox_button es_submit_button')[j].value = "S'abonner";
        document.getElementsByClassName('es_shortcode_form_email')[j].innerHTML = '<span>Suspensé</span> pour accéder à tous les contenus';
        document.getElementsByClassName('es_textbox_class')[j].placeholder = 'Ecrivez votre email';
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

(function($) {
  // Moving image of know more banner
  $('#knowmore').addClass('animated zoomIn');
  // Slider on biography page
  $(".rslides").responsiveSlides({
    auto: true,
    speed: 500,
    timeout: 4000, 
  });
})(jQuery);


});
