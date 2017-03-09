function carrito(){
	var formulario = document.getElementsByClassName("elementoPedido");

	var carrito = "";
	for(var i=0; i<formulario.length; i++) {
		var elemento = formulario[i];
		 
		
	    if(elemento.checked) {
	      	carrito += " - " + elemento.value + " \n\n";
	    }
		
	}

	if(carrito != ""){
		document.getElementById("estilotextarea").value = carrito;
    	addNewStyle('.modalCarrito {visibility: visible;}')
    	addNewStyle('body {visibility: hidden;}')
	}

}


function addNewStyle(newStyle) {
    var styleElement = document.getElementById('styles_js');
    if (!styleElement) {
        styleElement = document.createElement('style');
        styleElement.type = 'text/css';
        styleElement.id = 'styles_js';
        document.getElementsByTagName('head')[0].appendChild(styleElement);
    }
    styleElement.appendChild(document.createTextNode(newStyle));
}

function closeModal(){

	document.getElementById("estilotextarea").value = "";

    var styleElement = document.getElementById('styles_js');
    if (styleElement) {
		styleElement.parentNode.removeChild(styleElement);
    }

}

function confirmBuy(){
	alert("Esto para mañana ");
}

