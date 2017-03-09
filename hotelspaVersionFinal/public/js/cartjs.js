

function change(idMenu,idList){
	document.getElementById('miditog').classList.remove("active");
	document.getElementById('soirtog').classList.remove("active");
	document.getElementById('vinstog').classList.remove("active");
    document.getElementById(idMenu).classList.add("active");
         
    document.getElementById('vinsel').style.opacity=0;
    document.getElementById('midiel').style.opacity=0;
    document.getElementById('soirel').style.opacity=0;
    document.getElementById('vinsel').style.height='0px';
    document.getElementById('midiel').style.height='0px';
    document.getElementById('soirel').style.height='0px';
    document.getElementById('vinsel').style.visibility='hidden';
    document.getElementById('midiel').style.visibility='hidden';
    document.getElementById('soirel').style.visibility='hidden';

    document.getElementById(idList).style.opacity=1;
    document.getElementById(idList).style.height='auto';
    document.getElementById(idList).style.visibility='visible';

    reajustar();
}


function reajustar(){
    boxposition();
    (function(){
        if($$('.contentpage .scrolltxt')[0])
            makeScrollbar( $$('.contentpage .scrolltxt')[0], $$('.contentpage .scrollercontent')[0], $$('.contentpage .scrollerhand')[0] );
    }).delay(600);
}