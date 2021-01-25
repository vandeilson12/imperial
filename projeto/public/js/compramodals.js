var valor =  $('.preco');
var valorq = $('.quantidade');

$("#exampleModalCenterU").on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var nome = button.data('dnome');
    var dolar =  parseInt(button.data('ddolar'));
    var categoria =  button.data('dcategoria');


    var modal = $(this);

    $('.modal-title').val(nome);

    modal.find('.categoria').val(categoria);


    
    modal.find('.modal-title').text(nome);
    modal.find('.preco').val(dolar.toFixed(2));

    var a = dolar;
    valor.text(a);

    var q = 1;

    
    $(".mais").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a + dolar;
            parseInt(valor.val(a.toFixed(2)));
            valorq.preventDefault;
            q=q + 1;
            parseInt(valorq.val(q)); 
        }
    });


    $(".menos").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a - dolar;
            parseInt(valor.val( a.toFixed(2)));
            q=q - 1;
            parseInt(valorq.val(q)); 
        }
    });    
});

$("#exampleModalCenterU").on('hidden.bs.modal',function(event){

    valor.val(0);
    valorq.val(1)
});


//  // /// //// /// /// /// /// // // /// // //


$("#exampleModalCenterU1").on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var nome = button.data('dnome');
    var dolar =  parseInt(button.data('ddolar'));
    var categoria =  button.data('dcategoria');


    var modal = $(this);

    $('.modal-title').val(nome);

    modal.find('.categoria').val(categoria);


    
    modal.find('.modal-title').text(nome);
    modal.find('.preco').val(dolar.toFixed(2));

    var a = dolar;
    valor.text(a);

    var q = 1;

    var lw = $(".acres").val();

    $(".acres").on('click',function(event){
        if($(this).prop('checked') ==  true){
            alert(lw);

            if(event.currentTarget === this){
                valor.preventDefault;

                a = a + lw;
                parseInt(valor.val(a.toFixed(2))); 
            }
        }else{
            a = a - lw;
            // alerr('não');
        }

        // if(event.currentTarget === this){
        //     valor.preventDefault;

        //     a = $val + a;
        //     parseInt(valor.val(a.toFixed(2)));
        // }
    });
    $(".mais").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a + dolar;
            parseInt(valor.val(a.toFixed(2)));
            valorq.preventDefault;
            q=q + 1;
            parseInt(valorq.val(q)); 
        }
    });


    $(".menos").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a - dolar;
            parseInt(valor.val( a.toFixed(2)));
            q=q - 1;
            parseInt(valorq.val(q)); 
        }
    });    
});

$("#exampleModalCenterU1").on('hidden.bs.modal',function(event){

    valor.val(0);
    valorq.val(1)
});


$("#exampleModalCenterU2").on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var nome = button.data('dnome');
    var dolar =  parseInt(button.data('ddolar'));
    var categoria =  button.data('dcategoria');


    var modal = $(this);

    $('.modal-title').val(nome);

    modal.find('.categoria').val(categoria);


    
    modal.find('.modal-title').text(nome);
    modal.find('.preco').val(dolar.toFixed(2));

    var a = dolar;
    valor.text(a);

    var q = 1;

    
    $(".mais").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a + dolar;
            parseInt(valor.val(a.toFixed(2)));
            valorq.preventDefault;
            q=q + 1;
            parseInt(valorq.val(q)); 
        }
    });


    $(".menos").on('click',function(event){
        if(event.currentTarget === this){
            valor.preventDefault;
            a=a - dolar;
            parseInt(valor.val( a.toFixed(2)));
            q=q - 1;
            parseInt(valorq.val(q)); 
        }
    });    
});

$("#exampleModalCenterU2").on('hidden.bs.modal',function(event){

    valor.val(0);
    valorq.val(1)
});

//modal endereco

// exampleModalCenter exampleModalEndereco


// $(".start").on('click',function(){
//     $("#Center").show(
//         function(){
//             $("#Endereco").hide();
//         }
//     );

//     $("#Center").show();

    

    // $("#Center").modal('show');
    // $("#exampleModalEndereco").modal('hide');

    $("#Center").modal({
        keyboard: false
      });


      $("#Center").on('hidden.bs.modal',function() {
          location.href="/";
      });


// });


$("#Endereco").on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var id = button.data('usuario');
    var to = button.data('totais');
    // var endereco = button.data('endereco');
    // var referencia =  button.data('referencia');
    var modal = $(this);

    // $('#id').val(id);
    modal.find('.totais').val(parseString(to));

    modal.find('.usuario').val(id);
});


$("#Center").on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var id = button.data('usuario');

    var to = button.data('totais');
    // var endereco = button.data('endereco');
    // var referencia =  button.data('referencia');
    var modal = $(this);

    // $('#id').val(id);
    
    modal.find('.usuario').val(id);

    modal.find('.totais').val(parseString(to));
});