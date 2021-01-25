@extends('layouts.homeinter')


@section('content')


  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Apressie todos os nossos pratos e lanches</p>
        </div>

        @include('inicial.menuitems')

      </div>
    </section><!-- End Portfolio Section -->

     <!-- ======= About Section ======= -->

     @foreach($dia as $dias)
     <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{url("storage/$dias->img")}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Prato do dia
              <p>{{$dias->name}}</p>
            </h3>
            <p>
              Resumo sobre o prato do dia
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i>{{$dias->detalhes}}</li>
              <li><i class="bx bx-check-double"></i> {{$dias->descricao}}</li>
              <li><i class="bx bx-check-double"></i>R$ {{$dias->preco}}</li>

            </ul>
            <div class="row icon-boxes">
              <!-- <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div> -->
              
              <div class="col-md-6">
                
                <!-- <i class="bx bx-receipt"></i> -->


                <button type="button" data-ddolar="{{$dias->preco}}" data-dnome="{{$dias->name}}" data-dcategoria="{{$dias->categoria}}"  class="btn btn-light border-dark float-right" data-toggle="modal" data-target="#exampleModalCenterU2">
                    Obter
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @endforeach


    <!-- <section id="novidades" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Novidades</h2>
          <p>As mais recentes novidades em nosso cardapio</p>
        </div> -->

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li> 
               <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <!-- <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/pastel/batata-frita-com-bacon.jpg" class="img-fluid" alt="">
                <a href="assets/img/pastel/batata-frita-com-bacon.jpg" data-gall="portfolioGallery" class="ml-5 link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a> 
              </figure>

              <div class="portfolio-info text-left">
                <h4>
                  <a href="portfolio-details.html">Batatas Fritas</a>
                  <a class="text-danger float-right">R$ 20,00</a>
                </h4>
                <p>
                  <a>
                    <i class="icofont-star text-danger"></i>
                    <i class="icofont-star text-danger"></i>
                    <i class="icofont-star text-danger"></i>
                    <i class="icofont-star text-danger"></i>
                    <i class="icofont-star"></i>
                  </a>
                  <a href="portfolio-details.html" class="btn btn-light text-dark border-dange ml-5 float-right">Comprar</a>
                </p>
                <p></p>
              </div>
            </div>
          </div>
 

        </div>

      </div> 
    </section>-->
    <!-- End Portfolio Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Qualidades</h2>
          <p>Nossas melhores qualidades</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Atendimento <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Eficiência <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <!-- <div class="progress">
              <span class="skill">Satisfação <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Localidade <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Satisfação <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <!-- <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="icofont-simple-smile bg-danger"></i>
              <span data-toggle="counter-up">232</span>
              <p>FeedBacks</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="icofont-document-folder bg-danger"></i>
              <span data-toggle="counter-up">521</span>
              <p>Pratos</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support bg-danger"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Clientes</p>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Funcionários</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Serviços</h2>
          <p>Todos nossos serviços disponíveis</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="icofont-chat text-danger"></i>
              <h4><a href="#">Comversas Online</a></h4>
              <p>Comverse com nossos atedentes online em nosso horário de funcionamento</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-favourite text-danger"></i>
              <h4><a href="#">Opiniões</a></h4>
              <p>Escolha seus pratos e lanches favoritos e der suas notas</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-map-pins text-danger"></i>
              <h4><a href="#">Entrega Delivery</a></h4>
              <p>Receba seu pedido na porta de casa atravez do nosso cardapio</p>
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div> -->
          <!-- <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div> -->
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="icofont-tasks-alt text-danger"></i>
              <h4><a href="#">Datas comemorativas</a></h4>
              <p>Comemore aqui com sua familía e amigos datas comemorativas com belos pratos</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->



    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contatos</h2>
          <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p> -->
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

       

      </div>
    </section><!-- End Contact Section -->
  </main>


  @include('modal.novo')
  @include('modal.novo1')
  @include('modal.novo2')
  @include('modal.modal')


  @endsection