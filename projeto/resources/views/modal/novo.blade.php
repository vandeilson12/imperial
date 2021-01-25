<!-- Modal -->
<div class="modal fade " id="exampleModalCenterU" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterUTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterUTitle"></h5>
        <button type="button" class="close pr-5 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/carrinho/create')}}" method="post" class="form-horizontal">

      {{ csrf_field() }}
        <fieldset >
        <div class="form-group">
        <div class="col-md-12 mb-3">
            <label for="disabledSelect">Observação</label>
                <textarea name="obs" id="obs" cols="30"rows="8" class="observacao" style="width:100%"></textarea>

                <input type="hidden" class="modal-title" id="nome_produto" name="nome_produto"required />
        </div>
        <a class="no">*Serão acatadas apenas as que não alterem o valor.</a>
        </div>        


        <span class="categoria"></span>

          @php
          if(isset($nes))
              echo $nes;
          @endphp

        <div classs="col-md-12">
            <button type="button" class="menos btn btn-outline-info ">-</button>
            <label class="bg-light text-dark w-25 text-center" style="height:70px">
                <input type="text" id="quantidade" name="quantidade" class="quantidade text-dark text-center" style="border: none;background: transparent;" value="1" readonly="true" required>
        </label>
            <button type="button" class="mais btn btn-outline-info">+</button>


            <div class=" float-right">
                <button type="submit" class="btn btn-primary p-5" > R$ <!--data-toggle="modal" data-target="#exampleModalCenter"-->
                  <input type="text" name="preco" id="preco" class="preco text-white text-center" style="border: none;background: transparent;" value="" readonly="true">
                  <br/>
                  <p>Adicionar</p>
                </button>
            </div>
        </div>


        
        </fieldset>
    </form>
    </div>
    </div>
  </div>
</div>


  <!--  -->