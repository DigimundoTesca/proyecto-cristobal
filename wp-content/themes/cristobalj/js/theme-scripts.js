
jQuery(document).ready(function(){
  alert(window.location.pathname);

  // Show and hidde mobile menu
  if (window.location.pathname == '/Cristobal/') {
    document.getElementById('es_txt_button_pg').value = 'suscribirse';
  }
  else if (window.location.pathname == '/Cristobal/it/') {
    document.getElementById('es_txt_button_pg').value = 'italiano';
  }
  else if (window.location.pathname == '/Cristobal/fr/') {
    document.getElementById('es_txt_button_pg').value = 'frances';
  }
  
});
