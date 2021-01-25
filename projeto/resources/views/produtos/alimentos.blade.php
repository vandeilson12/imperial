                                          
                                            @foreach($vas as $as)
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            
                                                                <h6>{{$as->name}}</h6>
                                                            

                                                            <span>
                                                                <a href="#">{{$as->categoria}}</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role produtos">
                                                            <a href="{{url("/alimentos/$as->id")}}">
                                                                <button class="btn btn-dark">Ver</button>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                           
                                            </tbody>
                                            @endforeach