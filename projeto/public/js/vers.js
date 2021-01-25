setTimeout(() => {
    var a = document.querySelector('.nos').innerHTML;
    var novo = document.querySelector('.nos');
    // novo.innerHTML = '<a href="compras/">'+a+'</a>'

    // a.innerHTML = novo;


    novo.onclick = function(){
        location.href = 'compras/'+a;
    }

}, 5000);