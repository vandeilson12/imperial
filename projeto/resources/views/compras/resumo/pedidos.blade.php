<h3 class="title-5 m-b-35">Pedidos</h3>

                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th scope="col">Nome Produto</th>
                                <th scope="col">Observação</th>
                                <th scope="col">quantidade</th>
                                <th scope="col">preco</th>
                                <th scope="col">status</th>
                                <th></th>
                            </tr>
                        </thead>

                        @foreach($pedidos as $as)
                        <tbody>
                            <tr class="tr-shadow">

                                    <td>{{ $as->nome_produto}}</td>
                                    <td>{{ $as->obs}}</td>
                                    <td>{{ $as->quantidade}}</td>
                                    <td>{{ $as->preco}}</td>
                                    <td>{{ $as->status}}</td>                                    


                            </tr>
                        
                        </tbody>
                        @endforeach
                        
                    </table>

                </div