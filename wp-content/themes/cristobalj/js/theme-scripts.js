
jQuery(document).ready(function(){

  // Show and hidde mobile menu
  if (window.location.pathname == '/Cristobal/') {
    document.getElementById('es_txt_button_pg').value = 'suscribirse';
  }
  else if (window.location.pathname == '/Cristobal/it/') {
    document.getElementById('es_txt_button_pg').value = 'abbonarsi';
  }
  else if (window.location.pathname == '/Cristobal/fr/') {
    document.getElementById('es_txt_button_pg').value = "S'abonner";
  }
  
});
