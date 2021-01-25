@foreach($endereco as $as)
                <h3 class="title-5 m-b-35">Endereco</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th scope="col">CEP</th>
                                <th scope="col">Rua</th>
                                <th scope="col">Casa</th>
                                <th scope="col">Referencia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">
                                    <td>{{ $as->cep}}</td>
                                    <td>{{ $as->rua}}</td>
                                    <td>{{ $as->casa}}</td>
                                    <td>{{ $as->referencia}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    @endforeach