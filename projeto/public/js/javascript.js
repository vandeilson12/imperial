(function(win,doc){
    'use strict';

    //Delete

    function comfirmDel(event) {
        event.preventDefault();

        //console.log(event.target.parentNode.href);

        if(confirm("Deseja mesmo apagar?")){
            // console.log("Apagou");

            let token =doc.getElementsByName("_token")[0].value;

            let ajax=new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function() {
                if(ajax.readyState === 4 && ajax.status === 200){
                    // console.log('deu certo');
                    win.location.href="admin"
                }
            }
            ajax.send();
        }else{
            return false;
        }
    }
    if(doc.querySelector('.js-del')){
        let btn = doc.querySelectorAll('.js-del');

        for(let i = 0;i < btn.length;i++){
            btn[i].addEventListener('click', comfirmDel, false);
        }
    }

})(window,document);