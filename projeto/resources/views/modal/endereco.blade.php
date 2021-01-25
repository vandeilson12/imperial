<!-- Modal -->
<div class="modal fade " id="Center" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title float-right" id="CenterTitle">Cartão</h5>
        <button type="button" class="close pr-5 mr-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ url('cartao/create')}}" method="post">

      {{ csrf_field() }}


      <fieldset>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom08">Seu Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>

            <div class="invalid-feedback">
              Por favor, informe seu Nome.
            </div>
          </div>
        </div>
      </fieldset>

      <fieldset>
            <div class="form-group">
            <label for="disabledSelect">Delivery</label>
              <p>Sim
                <input class="float-right" type="radio" id="delivery" name="delivery" value="sim" required>
              </p>
              <p>Não
              <input class="float-right" type="radio" id="delivery" name="delivery" value="nao" required>
              </p>
            </div>
           
        </fieldset>


        <fieldset>
            <div class="form-group">
              <p> <label for="disabledSelect">A dinheiro ou no Cartão</label><p>
              <p>Dinheiro
                <input class="float-right" type="radio" id="cartao" name="cartao" value="nao" required>
              </p>
              <p>Cartão
              <input class="float-right" type="radio" id="cartao" name="cartao" value="sim" required>
              </p>
            </div>
           
        </fieldset>


        <input type="text" id="id" name="id" value="{{$se}}"/>
        <input type="text" id="totais" name="totais" value="{{$valor}}"/>

    
      <fieldset>

      <label>Cartão</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="tipo_cartao" id="tipo_cartao1" value="opcao1" required checked>
        <label class="form-check-label" for="tipo_cartao1">
            Cartão
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="tipo_cartao" id="tipo_cartao2" value="opcao2" required>
        <label class="form-check-label" for="tipo_cartao2">
            Segundo Cartão
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="tipo_cartao" id="tipo_cartao2" value="opcao3" required>
        <label class="form-check-label" for="tipo_cartao2">
            Segundo radio padrão
        </label>
        </div>
           
        </fieldset>


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
      <label for="validationCustom08">Nome Cartão</label>
      <input type="text" class="form-control" id="tipo_cartao" name="tipo_cartao" placeholder="Nome Cartão" required>

      <div class="invalid-feedback">
        Por favor, informe um Nome Cartão válido.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom13">Número do cartão de crédito</label>
      <input type="text" class="form-control" id="numero_cartao" name="numero_cartao" placeholder="Barrio, Rua" required>
      <div class="invalid-feedback">
        Por favor, informe o número do cartão de crédito.
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom18">Data de expiração</label>
      <input type="text" class="form-control" id="validade" name="validade" placeholder="Ponoto de Referência" required>
      <div class="invalid-feedback">
        
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom14">CVV</label>
      <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Número" required>
      <!-- <div class="invalid-feedback">
        Por favor, informe um estado válido.
      </div> -->
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar, antes de continuar.
      </div>
    </div>
  </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
      </form>
  </div>
</div>

<!--  -->