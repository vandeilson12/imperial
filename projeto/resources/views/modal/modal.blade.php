<!-- Modal -->
<div class="modal fade" id="Endereco" tabindex="-1" role="dialog" aria-labelledby="EnderecoTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title float-right" id="EnderecoTitle">Modal title</h5>
        <button type="button" class="close pr-5 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/completar/create')}}"method="post">

      {{ csrf_field() }}
        <!-- <fieldset  disabled>
            <div class="form-group">
            <label for="disabledSelect">Menu select desativado</label>
            <select id="disabledSelect" class="form-control">
                <option>Select desativado</option>
            </select>
            </div>
           
        </fieldset> -->

    
    <fieldset>
    <div class="form-row">

    <div class="col-md-12 mb-3">
      <label for="validationCustom05">CEP</label>
      <input data-cep="" type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
      <div class="invalid-feedback">
        Por favor, informe um CEP válido.
      </div>
    </div>

    <input type="hidden" id="id" name="id" class="usuario"/>

    <input type="text" id="totais" name="totais" class="totais" required>

    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Endereço</label>
      <input data-endereco="" type="text" class="form-control" id="endereco" name="endereco" placeholder="Barrio, Rua" required>
      <div class="invalid-feedback">
        Por favor, informe o  bairro.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Referência</label>
      <input data-referencia="" type="text" class="form-control" id="referencia" name="referencia" placeholder="Ponoto de Referência" required>
      <div class="invalid-feedback">
        
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="numero">Número</label>
      <input data-numero="" type="text" class="form-control" id="numero" name="numero" placeholder="Número" required>
      <!-- <div class="invalid-feedback">
        Por favor, informe um estado válido.
      </div> -->
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input  class="form-check-input" type="checkbox" value="" id="invalidCheck" name="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>
  
        
          <button class="start btn btn-primary">Enviar</button>
        
        </fieldset>
      <!-- </form> -->
  </div>
</div>

<!--  -->