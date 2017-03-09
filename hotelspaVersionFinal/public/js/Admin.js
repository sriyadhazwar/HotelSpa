function abrirModal(id,opcion){

  if(opcion == 'borrar'){

  document.getElementById("idBorrar").textContent = "Estas seguro que deseas eliminarlo : ";
  document.getElementById("idABorrar").textContent = id;
  document.getElementById("formdni").value = id;

  $('#confirm-delete').modal({
        show: 'false'
    });
 
  }else if(opcion == 'modificar'){

    var botonPulsado = document.getElementById(id);
    var padreBoton = botonPulsado.parentElement;

    var padreDelPadre = padreBoton.parentElement;
    var tipo = padreDelPadre.getElementsByTagName('td')[1];
    var habitacion = padreDelPadre.getElementsByTagName('td')[2];
    var modi = padreDelPadre.getElementsByTagName('td')[3];

    document.getElementById("id").value = id;
    document.getElementById("tipo").value = tipo.textContent;
    document.getElementById("hab").value = habitacion.textContent;
    document.getElementById("mod").value = modi.textContent;
    
  $('#confirm-modify').modal({
        show: 'false'
    }); 

  }
}