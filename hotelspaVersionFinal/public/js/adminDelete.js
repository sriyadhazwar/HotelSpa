function abrirModal(id){

	document.getElementById("idBorrar").textContent = "Estas seguro que deseas eliminar al usuario : ";
	document.getElementById("idABorrar").textContent = id;
	document.getElementById("formdni").value = id;

	$('#confirm-delete').modal({
        show: 'false'
    }); 
}




function abrirUpdateModal(id){

	var botonPulsado = document.getElementById(id);
	var padreBoton = botonPulsado.parentElement;

	var padreDelPadre = padreBoton.parentElement;
	var idd		= padreDelPadre.getElementsByTagName('td')[0];
	var nombre = padreDelPadre.getElementsByTagName('td')[1];
	var rango = padreDelPadre.getElementsByTagName('td')[3];

	document.getElementById("modalid").value = idd.textContent;
	document.getElementById("modalDni").value = id;
	document.getElementById("modalDniFalso").value = id;
	document.getElementById("modalRango").value = rango.textContent;
	document.getElementById("modalNombre").value = nombre.textContent;

	$('#confirm-delete').modal({
        show: 'false'
    }); 
}