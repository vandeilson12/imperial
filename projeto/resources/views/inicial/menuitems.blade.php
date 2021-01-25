

    <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tudo</li>

              <li data-filter=".filter-cachorro">Cachorro quente</li>

              <li data-filter=".filter-hanburgue">Hanburgue</li>

              <li data-filter=".filter-bebidas">Bebidas</li>

              <li data-filter=".filter-encomendas">Encomendas</li>

            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @foreach($hanburgues as $as)
        <div class="col-lg-4 col-md-6 portfolio-item filter-hanburgue wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{url("storage/$as->img")}}" class="img-fluid" alt="$alimento->name">
              <!-- <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a> -->
            </figure>

            <div class="portfolio-info text-left">
            <h4>
                <a href="">{{ $as->name }}</a>
                <a class="text-danger float-right">
                    R$ {{ $as->preco }}
                </a>
            </h4>
            <p>
                <a>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star"></i>
                </a>
                <!-- <a href="portfolio-details.html" class="btn btn-light text-dark border-dange ml-5 float-right">Comprar</a> -->
                <button type="button" data-ddolar="{{$as->preco}}" data-dnome="{{$as->name}}" data-dcategoria="{{$as->categoria}}"  class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenterU2">
                    comprar
                </button>
            </p>
            <p></p>
            </div>
            </div>
        </div>
        @endforeach


        @foreach($cachorros as $as)
        <div class="col-lg-4 col-md-6 portfolio-item filter-cachorro wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{url("storage/$as->img")}}" class="img-fluid" alt="$alimento->name">
              <!-- <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a> -->
            </figure>

            <div class="portfolio-info text-left">
            <h4>
                <a href="">{{ $as->name }}</a>
                <a class="text-danger float-right">
                    R$ {{ $as->preco }}
                </a>
            </h4>
            <p>
                <a>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star"></i>
                </a>
                <!-- <a href="portfolio-details.html" class="btn btn-light text-dark border-dange ml-5 float-right">Comprar</a> -->
                <button type="button" data-ddolar="{{$as->preco}}" data-dnome="{{$as->name}}" data-dcategoria="{{$as->categoria}}"  class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenterU1">
                    comprar
                </button>
            </p>
            <p></p>
            </div>
            </div>
        </div>
        @endforeach


        @foreach($vas as $as)
        <div class="col-lg-4 col-md-6 portfolio-item filter-bebidas wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{url("storage/$as->img")}}" class="img-fluid" alt="$alimento->name">
              <!-- <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a> -->
            </figure>

            <div class="portfolio-info text-left">
            <h4>
                <a href="">{{ $as->name }}</a>
                <a class="text-danger float-right">
                    R$ {{ $as->preco }}
                </a>
            </h4>
            <p>
                <a>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star"></i>
                </a>
                <!-- <a href="portfolio-details.html" class="btn btn-light text-dark border-dange ml-5 float-right">Comprar</a> -->
                <button type="button" data-ddolar="{{$as->preco}}" data-dcategoria="{{$as->categoria}}" data-dnome="{{$as->name}}" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenterU">
                    comprar
                </button>
            </p>
            <p></p>
            </div>
            </div>
        </div>
        @endforeach


        
        @foreach($encomendas as $as)
        <div class="col-lg-4 col-md-6 portfolio-item filter-encomendas wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{url("storage/$as->img")}}" class="img-fluid" alt="$alimento->name">
              <!-- <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a> -->
            </figure>

            <div class="portfolio-info text-left">
            <h4>
                <a href="">{{ $as->name }}</a>
                <a class="text-danger float-right">
                    R$ {{ $as->preco }}
                </a>
            </h4>
            <p>
                <a>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star text-danger"></i>
                <i class="icofont-star"></i>
                </a>
                <!-- <a href="portfolio-details.html" class="btn btn-light text-dark border-dange ml-5 float-right">Comprar</a> -->
                <button type="button" data-ddolar="{{$as->preco}}" data-dnome="{{$as->name}}" data-dcategoria="{{$as->categoria}}"  class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenterU">
                    comprar
                </button>
            </p>
            <p></p>
            </div>
            </div>
        </div>
        @endforeach

          </div>
        </div>


      </div>

