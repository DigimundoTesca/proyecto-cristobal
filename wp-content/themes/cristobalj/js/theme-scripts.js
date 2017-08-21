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

  // Change color for metamundo page
  var coll = document.getElementsByClassName('menu-item');
  if (window.location.pathname == '/Cristobal/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#e13634";
    for(i, len=coll.length; i<len; i++)
    {
      coll[i].className += ' metahover';
    }
    document.getElementById('site-navigation').addEventListener('mouseover', function(){
        changeColor(coll,'#000');
        coll.className='metahover';
      });
  }
  else if (window.location.pathname == '/Cristobal/it/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#e13634";
  }
  else if (window.location.pathname == '/Cristobal/fr/metamundo/') {
    document.getElementById('site-navigation').style.backgroundColor = "#e13634";
  }

  function changeColor(coll, color){

    // for(var i=0, len=coll.length; i<len; i++)
    // {
    //   coll[i].style["background-color"] = color;
    // }
}


});
