     // Funcion de cambiar el color del nav al hacer scroll hacia abajo
    $(document).ready(function() {
      $(window).scroll(function(){
        if (screen.width > 768) {
          console.log('entró pc');
          if ($(this).scrollTop() > 625) {
            $('nav').addClass('rosa');
          } else {
            $('nav').removeClass('rosa');
          }
        }
        else{
          console.log("entró Responsive");
          if ($(this).scrollTop() > 200) {
            $('nav').addClass('rosa');
          } 
          else {
            $('nav').removeClass('rosa');
            
          }
        }
      });
    });
     // Funcion de cambiar el color del nav al hacer scroll hacia abajo

        $('#boton-menu').click(cambiarClaseVideo); //verificamos el elemento btn menu y llamamos una funcion
     
            function cambiarClaseVideo() {
             

                  // añadir clase si no existía; eliminarla si ya existía
                  document.getElementById("videoITM").classList.toggle('efectoBluirVideo');
                   document.getElementById("contenido-pagina").classList.toggle('efectoBluir');
                  // document.getElementById("contenido").classList.toggle('efectoBluirVideo');
                  // document.getElementById("titulo-expomedia").classList.toggle('efectoBluirVideo');


                 
                 
            }


    