
jQuery(document).ready(function(){

  // Show and hidde mobile menu
  let buttonsubmit = document.getElementsByClassName('es_textbox_button es_submit_button');
  let i = 0;
  for (; i < buttonsubmit.length; i++) {
    if (window.location.pathname == '/Cristobal/') {
      document.getElementsByClassName('es_textbox_button es_submit_button')[0].value = 'suscribirse';
    }
    else if (window.location.pathname == '/Cristobal/it/') {
      document.getElementsByClassName('es_textbox_button es_submit_button')[0].value = 'abbonarsi';
    }
    else if (window.location.pathname == '/Cristobal/fr/') {
      document.getElementsByClassName('es_textbox_button es_submit_button')[0].value = "S'abonner";
    }
  }
  
});
