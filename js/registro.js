  var database = firebase.database();
  var d1 = "";
  var d2 = "";
  var d3 = "";
  var d4 = "";
  var d5 = "";
  var d6 = "";
  var d7 = "";
  var d8 = "";
  var d9 = "";
  var d10 = "";
  var d11 = "";
  var d12 = "";
  var d13 = "";
  var d14 = "";
  var v1 = 0;
  var v2 = 0;
  var v3 = 0;
  var v4 = 0;
  var v5 = 0;
  var v6 = 0;
  var v7 = 0; 
  var v8 = 0;
  var v9 = 0;
  var v10 = 0;
  var v11 = 0;
  var v12 = 0;
  var v13 = 0; 
  var v14 = 0; 
  function subirDatos()
  {
  	if(document.getElementById("nombreCompleto").value != "" && document.getElementById("telefono").value != "" && document.getElementById("correo").value != "")
  	{
	  	var nombres = document.getElementById("nombreCompleto").value;
	  	var telefonos = document.getElementById("telefono").value;
	  	var email = document.getElementById("correo").value;
	  	var taler = document.getElementById("taller").value;
	  	console.log("n: "+nombres+" t: "+telefonos+" c: "+email);
	  	firebase.database().ref("inscripciones").push({
		    nombre: nombres,
		    correo: email,
		    telefono : telefonos,
		    taller: taler
		   }, function(error) {
			    if (error) {
			      // The write failed...
			      console.log("shit");
			    } else {
			      // Data saved successfully!
			       console.log("Wiiii");
			    }
		});

		limpiar();
	}else{
		window.alert("Rellena todos los datos por favor");
	}
  }

  function limpiar(){
  	window.alert("Se ha enviado su registro");
  	window.parent.location.reload();  
  }

  function preguntarDatos()
  {
      var ref = database.ref("inscripciones");
      ref.on("value", gotData, errData);
  }

//Este metodo es muy mal optimizado, pero para el objetivo del mismo vale gaver :v
  function gotData(data){
  	//console.log(data.val());
  	var scores = data.val();
  	var keys = Object.keys(scores);

  	for (var i=0; i<keys.length; i++) {
  		var k = keys[i];
  		var nombre=scores[k].nombre;
  		var telefono=scores[k].telefono;
  		var correo=scores[k].correo;
  		var taller=scores[k].taller;
  		if(taller==="¿Cómo se hizo la primera etapa de la mini-serie animada ´Felix el Robot´?")
  		{
  			d1 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v1++;
  		}
  		if(taller==="Los videojuegos como un medio de vida")
  		{
  			d2 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v2++;
  		}
  		if(taller==="Diseño y pintura digital de personajes")
  		{
  			d3 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v3++;
  		}
  		if(taller==="Taller de Desarrollo Para Dispositivos Móviles")
  		{
  			d4 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v4++;
  		}
  		if(taller==="Conversatorio con Fotógrafos")
  		{
  			d5 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v5++;
  		}
  		if(taller==="Los juegos: Hijos de la guerra fría")
  		{
  			d6 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v6++;
  		}
  		if(taller==="El dibujo y la pintura como herramientas de diseño y concurso")
  		{
  			d7 += '<tr>'+
			'<td>'+nombre+'</td>'+
			'<td>'+correo+'</td>'+
			'<td>'+telefono+'</td>'+
			'</tr>';
			v7++;
  		}

      if(taller==="Edición de OpenStreetMap, el mejor mapa que existe")
      {
        d8 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v8++;
      }

      if(taller==="Taller de Servidor Web en CentOS")
      {
        d9 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v9++;
      }

      if(taller==="Taller Introducción a cassandra")
      {
        d10 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v10++;
      }

      if(taller==="Taller de Introducción a la Creación de Artículos Científicos por medio de LATEX")
      {
        d11 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v11++;
      }

      if(taller==="Taller de Introducción a PixelArt")
      {
        d12 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v12++;
      }

      if(taller==="Taller de Introducción al Desarrollo de Video Juegos con Unity")
      {
        d13 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v13++;
      }
      if(taller==="Taller ITM")
      {
        d14 += '<tr>'+
      '<td>'+nombre+'</td>'+
      '<td>'+correo+'</td>'+
      '<td>'+telefono+'</td>'+
      '</tr>';
      v14++;
      }
  	}
  	$("#tabla1").append(d1);
  	document.getElementById("v1").value = v1;

  	$("#tabla2").append(d2);
  	document.getElementById("v2").value = v2;

  	$("#tabla3").append(d3);
  	document.getElementById("v3").value = v3;

  	$("#tabla4").append(d4);
  	document.getElementById("v4").value = v4;

  	$("#tabla5").append(d5);
  	document.getElementById("v5").value = v5;

  	$("#tabla6").append(d6);
  	document.getElementById("v6").value = v6;

  	$("#tabla7").append(d7);
  	document.getElementById("v7").value = v7;

    $("#tabla8").append(d8);
    document.getElementById("v8").value = v8;

    $("#tabla9").append(d9);
    document.getElementById("v9").value = v9;

    $("#tabla10").append(d10);
    document.getElementById("v10").value = v10;

    $("#tabla11").append(d11);
    document.getElementById("v11").value = v11;

    $("#tabla12").append(d12);
    document.getElementById("v12").value = v12;

    $("#tabla13").append(d13);
    document.getElementById("v13").value = v13;

    $("#tabla14").append(d14);
    document.getElementById("v14").value = v14;
  }

  function errData(err)
  {
  	console.log("Error"+err);
  }


