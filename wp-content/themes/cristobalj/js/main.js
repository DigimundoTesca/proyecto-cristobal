// Function to manage menu
(function() {

  var bodyEl = document.body,
  content = document.querySelector( '.content-wrap' ),
  openbtn = document.getElementById( 'open-button' ),
  closebtn = document.getElementById( 'close-button' ),
  isOpen = false;

  function init() {
    initEvents();
  }
/*phrases random 
function aleatorio(){
  frases= new Array();

  frases[0] = "Primera Frase";
  frases[1] = "Segunda Frase";
  frases[2] = "tercera Frase";
  frases[4] = "cuarta frase";

  cambia = Math.floor(Math.random()*4);
  return frases[cambia];
}
onload=function(){
    document.getElementById('bannertext').innerHTML=aleatorio();
    setInterval(function(){document.getElementById('bannertext').innerHTML=aleatorio();},5000)
}
*/

  /*Clean form*/
  function limpiarFormulario() {
    document.getElementById("wpcf7-f124-p21-o1").reset();
  }
  function initEvents() {
    openbtn.addEventListener( 'click', toggleMenu );
    if( closebtn ) {
      closebtn.addEventListener( 'click', toggleMenu );
    }
    // close the menu element if the target it´s not the menu element or one of its descendants..
    content.addEventListener( 'click', function(ev) {
      var target = ev.target;
      if( isOpen && target !== openbtn ) {
        toggleMenu();
      }
    } );
  }

  function toggleMenu() {
    if( isOpen ) {
      classie.remove( bodyEl, 'show-menu' );
    }
    else {
      classie.add( bodyEl, 'show-menu' );
    }
    isOpen = !isOpen;
  }

  init();

})();
