


// Scripts del cronograma
  var numero;

  // Funcion que muestra mas actividades a la misma hora

  // Funcion que muestra mas actividades a la misma hora

  // Mostrar Cronograma al desplazar el slider
  function cronograma(){
    for (var i = 7; i <= 16; i++) {
      var activar='#Activo'+i+'';
      if (numero==i) {
        for (var j = 7; j <= 16; j++) {
          var desactivar='#Activo'+j+'';
          if($(desactivar).css('display') == 'block'){
            $(desactivar).toggle();
          }
        }
        $(activar).toggle();
        break;
      }
    }
  }
  // Mostrar Cronograma al desplazar el slider 



  // obtener valores del input range
  function getVals(){
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat( slides[0].value );
    var parteenteraslide1=parseInt(slide1); 
    numero = parteenteraslide1;
    var punto=":00";
    var media=":30";
    var decimalslide1 = slide1 - parteenteraslide1;
    var tiempo1= parteenteraslide1 == 12 ? 'md' : parteenteraslide1 > 12 ? 'pm' : 'am';
  // Muestra Horas Slide
  if (decimalslide1==0) {
    var hora2 =parteenteraslide1 + 1;
    var displayElement = parent.getElementsByClassName("rangeValues")[0];

    if (parteenteraslide1==7) {
       displayElement.innerHTML = parteenteraslide1 +media+tiempo1;
    }
    else{
     displayElement.innerHTML = parteenteraslide1 +punto+tiempo1; 
    }
    
  }
  // Muestra Horas Slide
}
  // obtener valores del input range


  window.onload = function(){
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
    for( var x = 0; x < sliderSections.length; x++ ){
      var sliders = sliderSections[x].getElementsByTagName("input");
      for( var y = 0; y < sliders.length; y++ ){
        if( sliders[y].type ==="range" ){
          sliders[y].oninput = getVals;
              // Manually trigger event first time to display values
              sliders[y].oninput();
            }
          }
        }
      }

