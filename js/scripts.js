// 

    function mudarCor() {
    var elemento = document.getElementById("features");
        var elemento1 = document.getElementById("rowx1");
    var elemento2 = document.getElementById("rowx2");
    var elemento3 = document.getElementById("rowx3");
    var elemento4 = document.getElementById("rowx4");
    var elemento = document.getElementById("features");

    //calculaValores();

        //var elemento = document.getElementById("features");
       // var elemento2 = elemento.children[i].div;
   // elemento.style.display = "none";
    elemento.classList.remove("oculto");
    elemento.classList.add("aparecer");
    setTimeout(function() {
    	    elemento1.classList.add("aparecer");
    }, 1100);
    setTimeout(function() {
    	    elemento2.classList.add("aparecer");
    }, 1500);
    setTimeout(function() {
    	    elemento3.classList.add("aparecer");
    }, 2000);
    setTimeout(function() {
    	    elemento4.classList.add("aparecer");
    }, 2500);


    //elemento2.classList.add("aparecer");
    console.log('ola');

    var contt = document.body.scrollTop;

    if(document.body.scrollTop > 100){
    	    console.log('+100');

    }

    window.onscroll = function() {myFunction()};

function myFunction(){
  if(document.body.scrollTop > 260 || document.documentElement.scrollTop > 260) {
  	var elemento = document.getElementById('nav');
  	elemento.classList.add("topoFixo");
  }else{
  	var elemento = document.getElementById('nav');
  	elemento.classList.remove("topoFixo");
  }
}


  }



function incrementa(){

}
function calculaValores(){
    var data = new Date();
var dia = String(data.getDate()).padStart(2, '0');
var mes = String(data.getMonth() + 1).padStart(2, '0');
var ano = data.getFullYear();
dataAtual = dia + '/' + mes + '/' + ano;

dia = Number(dia);
var valorInicialCartazes = 40;

var valorInicialUsuarios = 6;



var valorFinalUsuarios = ano - 2021 * 12 ;
valorFinalCartazes += 6;
valorFinalCartazes += mes - 8;
var valorFinalCartazes = 40 + (ano - 2021) * 12 + mes - 8;
console.log (valorFinalUsuarios);
console.log (valorFinalCartazes);



}

function aparecerParceiro(pcr){
    var elemento = document.getElementById("pcrOculto"+pcr);
    //elemento.classList.remove("pcrOculto");
    //elemento.classList.add("pcrNaoOculto");
    elemento.classList.toggle("pcrOculto");
}