        @foreach($cartao as $as)
                <h3 class="title-5 m-b-35">Cartão</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th scope="col">cvv</th>
                                <th scope="col">validade</th>
                                <th scope="col">Tipo do Carto</th>
                                <th scope="col">Numero Cartão</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">
                                    <td>{{ $as->cvv}}</td>
                                    <td>{{ $as->validade}}</td>
                                    <td>{{ $as->tipo_cartao}}</td>
                                    <td>{{ $as->numero_cartao}}</td>                                    
                            </tr>
                        </tbody>
                    </table>
                </div>
        @endforeach