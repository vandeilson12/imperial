var fix = document.querySelector('.valortotal').value;
var novo = document.querySelector('.totais');
var valor = document.querySelector('.total');

var ends = document.querySelector('.ends');
function apenasNumeros(string) 
{
    var numsStr = string.replace(/[^0-9]/g,'');
    console.log(parseInt(numsStr));
    return parseInt(numsStr);
}

if(novo){
novo.value = apenasNumeros(fix);
}

valor.innerHTML = apenasNumeros(fix);
