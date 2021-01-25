                                          
                                            @foreach($hanburgues as $as)
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            
                                                                <h6>{{$as->hanburgue}}</h6>
                                                            

                                                            <span>
                                                                <a href="#">hanbugues</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role produtos">
                                                            <a href="{{url("/hanburgue/$as->id")}}">
                                                                <button class="btn btn-dark">Ver</button>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                           
                                            </tbody>
                                            @endforeach


                                            @foreach($cachorros as $as)
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            
                                                                <h6>{{$as->cachorro}}</h6>
                                                            

                                                            <span>
                                                                <a href="#">cachorro</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role produtos">
                                                            <a href="{{url("/hanburgue/$as->id")}}">
                                                                <button class="btn btn-dark">Ver</button>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                           
                                            </tbody>
                                            @endforeach