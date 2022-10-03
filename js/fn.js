
var aff= document.getElementById("popup");
var af= document.getElementById("home");
var rolar= document.body;



function abrir(){
    aff.style.display='block';
    aff.style.filter='none';
    af.style.filter='blur(3px)';
    rolar.style.margin='0';
    rolar.style.height='0';
    rolar.style.overflow='hidden';


}

function fechar(){
    aff.style.display='none';
    af.style.filter='none';
    rolar.style.height='100%';
    rolar.style.overflow='scroll';
}