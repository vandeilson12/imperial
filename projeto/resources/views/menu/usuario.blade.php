     <!-- HEADER DESKTOP-->

     @guest

     @else
     <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Pequisar..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            <div class="header-button">

                                <div  class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">
                                        <!-- <notification></notification> -->
                                    </span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div id="app" class="mess__item">

                                            <notifications></notifications>
                                            

                                            <!-- <notification  
                                                v-for="notification in notifications" 
                                                :key="notification.id"
                                                :notification="notification">
                                            </notification> -->


                                            </div>

                                            <div class="user-data__footer">
                                                <a href="{{url("/deletenotific")}}">
                                                    <button class="au-btn au-btn-load">Deletar Notificações</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">

                                        @php
                                            $img = Auth::user()->relAdm->img;
                                        @endphp

                                        <img src="{{url("storage/$img")}}" id="img" name="img" alt="{{ Auth::user()->name }}">
    
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">

                                                
                                                    <a href="#">
                                                        <img src="{{url("storage/$img")}}" id="img" name="img" alt="{{ Auth::user()->name }}">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"> {{ Auth::user()->name }} </a>
                                                    </h5>
                                                    <span class="email"> {{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ url('admin')}}">
                                                        <i class="zmdi zmdi-account"></i>Dados</a>
                                                </div>
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Configurações</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Balanciamento</a>
                                                </div> -->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i> {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @endguest