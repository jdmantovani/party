<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link-FAVICON -->
   <link rel="shortcut icon" href="{{asset('img/logo_aba.png')}}" />
   <!-- css_bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Animate-aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- google_fonts -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Anton|Baloo|Bebas+Neue|Niconne|Permanent+Marker&display=swap" rel="stylesheet">



   <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/f7c3018ae1.js" crossorigin="anonymous"></script>

   <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/stylo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/query.css')}}">
    <link rel="stylesheet" href="{{ asset('css/registro.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produtos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
    <link rel="stylesheet" href="{{ asset('css/faq.css')}}">
    <title>Pet Party</title>
</head>

    <body class="home" >
        <!-- sub_header -->
      <div class="sub_header">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-md-4 col-xl-6">
                  <div id="logo">
                  <a href="{{route('home')}}"><img src="img/Logo_pet_party.png" style="width: 80px;"  alt="" title=""></a>
                  </div>
              </div>
              <div class="col-8 col-md-8 col-xl-6 ">
                  <div class="sub_header_social_icon float-right">
                    <a href="#"><i class="fab fa-whatsapp"></i></i>+02 213 - 256 (365)</a>
                    <a href="#" class="btn_1  d-md-inline-block">Contato</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub-header-fim -->

            <!-- Header -->
        <div class=" color-nav ">
            <nav class="navbar navbar-expand-lg  navbar-light d-flex align-items-end ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
                    aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse  " id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto"style="font-family: 'Montserrat',sans-serif;">
                        <li class="nav-item active" style="margin-right: 10px;">
                        <a class="nav-link font-nav" title="Inicio" href="{{route('home')}}">Home <span class="sr-only">(página
                                    atual)</span></a>
                        </li>
                        <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link font-nav" title="Quem somos" href="{{route('sobreNos')}}">Sobre Nós</a>
                        </li>
                        <li class="nav-item" style="margin-right: 5px;">
                        <a class="nav-link font-nav" title="FAQ" href="{{route('faq')}}">F.A.Q</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle font-nav" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Serviços
                          </a>
                          <div class="dropdown-menu color-nav" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item font-nav" href="{{route('alimentos')}}">Alimentos</a>
                              <a class="dropdown-item font-nav" href="#">Ambientes</a>
                              <a class="dropdown-item font-nav" href="#">Decorações</a>
                              <a class="dropdown-item font-nav" href="{{route('produtos')}}">Produtos</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item font-nav" href="#">Parceiros</a>
                          </div>
                      </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font-nav" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu color-nav" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item font-nav" href="{{route('login')}}">Login</a>
                            <a class="dropdown-item font-nav" href="{{route('registro')}}">Cadastre-se</a>
                              </div>
                        </li>
                        <li class="nav-item " style="margin-right: 5px;">
                            <a class="nav-link font-nav"  href="#"><i class="fas fa-cart-arrow-down" >Compras</i></a>
                        </li>
                    </ul>
                </div>
            </nav>
          </div>
            <!----- Header-fim ----->

  <!-- banner part start-->
  <section class="banner_part">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="banner_text">
                    <h5>Bem Vindo ao Pet Party</h5>
                    <h1>Compartilhe com seu pet
                        os melhores momentos</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about start-->
<section class="about">
  <div class="container">
    <div class="row ">
      <div class="about-img col-md-6 ">
      </div>
      <div class="about-text col-md-5">
        <h3>Reuniões,Festas ou
            Eventos.</h3>
        <p>Aqui no Pet Party,proporcionaremos todo carinho e atenção que seu pet merece
          e que voce com certeza gostaria que ele recebe-se! </p>
        <div class="">
          <a href="#" class="btn_1 btn btn-lg ">Sobre Nós</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ========nossos-servicos=========== -->
<div class="nossos-servicos ">
  <section class="site-section " id="services-section">
    <div class="container">
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 text-center heading-section mb-5">
          <a href="#"><h2 class=" mb-2">Nossos Serviços</h2></a>
          <p>Possuímos parceiros das mais diversas áreas, para que lhe proporcione maior suporte e comodidade.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">

          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="{{asset('img/spa_dog.jpg')}}" alt="..." class="img-thumbnail " style="height: 12rem;"></span>
            <h3>Spa´s</h3>
            <p>Procedimentos de relaxamento,estéticos e emagrecimento são alguns dos serviços oferecidos pelos Spa´s. </p>
          </div>

        </div>
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="100">
          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="{{asset('img/hoteis_servicos.jpg')}}" alt="..." class="img-thumbnail" style="height: 12rem;"></span>
            <h3>Hotéis</h3>
            <p>Caso necessite de hospedagem serviços de hotéis com estrutura completa para atender seu pet. você encontra aqui! </p>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="img/adotar_servicos.webp" alt="..." class="img-thumbnail" style="height: 12rem;"></span>
            <h3>Adote um Amigo</h3>
            <p>Possuimos um canal para adoção,com muitos amigos(a) que necessitam de um lar! </p>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="200">

          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="{{asset('img/petdrivers_servicos.jpg')}}" alt="..." class="img-thumbnail" style="height: 12rem;"></span>
            <h3>Pet Drivers</h3>
            <p>Motoristas com automoveis preparados estão prontos a qualquer hora e lugar. </p>
          </div>

        </div>
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="100">
          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="img/clinicas_servicos.jpeg" alt="..." class="img-thumbnail" style="height: 12rem;"></span>
            <h3>Clínicas Veterináiras</h3>
            <p>Nos preocupamos com a saúde de seu pet. tanto quanto você! </p>
          </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
          <div class="block_service">
            <span class=" d-block display-3 text-primary mb-3"><img src="{{asset('img/petshops_servicos.jpg')}}" alt="..." class="img-thumbnail" style="height: 12rem;"></span>
            <h3>Pet Shops</h3>
            <p>Precisando de algum produto ou marca especifica,de uma olhada em alguns dos pet shop's parceiros. </p>
          </di>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- ------TITULO-carousel-Eventos & Reunioes----- -->
<div class="container eventos-reunioes-titulo">
  <div class="row mb-2">
      <div class="col-12 text-center pt-3">
        <a href="#">
          <h2>Eventos & Reuniões</h2>
        </a>
          <p>Possuimos um suporte completo para festas e eventos,que incluem decoração,ambientação,comes e bebes e mais</p>
      </div>
  </div>
</div>

  <!-- ------carousel-Eventos & Reunioes- ----- -->
  <div class="row eventos-reunioes">
      <div class="col-12 pb-5">
          <section class="row">

             <!-- ------carousel-Eventos & Reunioes Esquerdo----- -->
              <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1 " id="carousel-eventos-Esq">
                  <div id="featured" class="carousel slide carousel" data-ride="carousel">

                      <ol class="carousel-indicators top-indicator">
                          <li data-target="#featured" data-slide-to="0" class="active"></li>
                          <li data-target="#featured" data-slide-to="1"></li>
                          <li data-target="#featured" data-slide-to="2"></li>
                          <li data-target="#featured" data-slide-to="3"></li>
                      </ol>

                      <div class="carousel-inner ">
                          <div class="carousel-item active">
                              <div class="card border-0 rounded-0 text-light overflow zoom">
                                  <div class="position-relative">
                                      <div class="ratio_left-cover-1 image-wrapper">
                                          <a href="#">
                                              <img class="img-fluid w-100" src="{{asset('img/img_carousel.jpg')}}" alt="Bootstrap news template">
                                          </a>
                                      </div>
                                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                              <h2 class="h3 post-title text-white my-1">Decorações e temas para seus eventos.</h2>
                                          </a>
                                          <div class="news-meta">
                                              <span class="news-author">Fotografia de <a class="text-white font-weight-bold" href="#">Luiza</a></span>
                                              <span class="news-date">22 janeiro 2020</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="carousel-item">
                              <div class="card border-0 rounded-0 text-light overflow zoom">
                                  <div class="position-relative">
                                      <div class="ratio_left-cover-1 image-wrapper">
                                          <a href="#">
                                              <img class="img-fluid w-100"
                                                   src="img/img_carousel_lateral2.png"
                                                   alt="Bootstrap blog template">
                                          </a>
                                      </div>
                                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                              <h2 class="h3 post-title text-white my-1">Aniversariante do mes é a cachorrinha MEL! Parabéns pelos seus 2 anos de vida!  </h2>
                                          </a>
                                          <div class="news-meta">
                                              <span class="news-author">Fotografia de  <a class="text-white font-weight-bold" href="../category/author.html">Luiza</a></span>
                                              <span class="news-date">22 janeiro 2020</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="card border-0 rounded-0 text-light overflow zoom">
                                  <div class="position-relative">
                                      <div class="ratio_left-cover-1 image-wrapper">
                                          <a href="#">
                                              <img class="img-fluid w-100"
                                                   src="{{asset('img/img_carousel_lateral4.jpg')}}"
                                                   alt="Bootstrap portal template">
                                          </a>
                                      </div>
                                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <h2 class="h3 post-title text-white my-1">Decorações e temas para seus eventos.</h2>
                                        </a>
                                        <div class="news-meta">
                                            <span class="news-author">Fotografia de <a class="text-white font-weight-bold" href="#">Luiza</a></span>
                                            <span class="news-date">22 janeiro 2020</span>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
 <!-- ------FIM-carousel-Eventos & Reunioes Esquerto------->

              <!-- ------carousel-Eventos & Reunioes Direito ----- -->
              <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                  <div class="row">
                      <div class="col-6 pb-1 pt-0 pr-1">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                              <div class="position-relative">
                                  <div class="ratio_right-cover-2 image-wrapper">
                                      <a href="#">
                                          <img class="img-fluid"
                                               src="{{asset('img/carousel_eventos.jpg')}}"
                                               alt="simple blog template bootstrap">
                                      </a>
                                  </div>
                                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                      <a class="p-1 badge badge-primary rounded-0" href="#">Alimentos</a>
                                          <h2 class="h5 text-white my-1 post-text">Cerveja boa para Cachorro !</h2>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-6 pb-1 pl-1 pt-0">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                              <div class="position-relative">
                                  <div class="ratio_right-cover-2 image-wrapper">
                                    <a href="">
                                      <img class="img-fluid"
                                           src="{{asset('img/carousel_eventos5.jpg')}}"
                                           alt="bootstrap templates for blog">
                                    </a>
                                  </div>
                                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                      <a class="p-1 badge badge-primary rounded-0" href="#">Produtos</a>
                                        <h2 class="h5 text-white my-1 post-text">Lembrancinhas para seus convidados.</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-6 pb-1 pr-1 pt-1">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                              <div class="position-relative">
                                  <div class="ratio_right-cover-2 image-wrapper">
                                      <a href="#">
                                          <img class="img-fluid"
                                               src="{{asset('img/carousel_eventos2.jpg')}}"
                                               alt="bootstrap blog wordpress theme">
                                      </a>
                                  </div>
                                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                      <a class="p-1 badge badge-primary rounded-0" href="#">Alimento</a>
                                          <h2 class="h5 text-white my-1 post-text">Alimentos preparados especialmente para seu parceiro(a).</h2>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-6 pb-1 pl-1 pt-1">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                              <div class="position-relative">
                                  <div class="ratio_right-cover-2 image-wrapper">
                                      <a href="#">
                                          <img class="img-fluid"
                                               src="{{asset('img/carousel_eventos3.jpg')}}"
                                               alt="blog website templates bootstrap">
                                      </a>
                                  </div>
                                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                      <a class="p-1 badge badge-primary rounded-0" href="#">Alimento</a>
                                          <h2 class="h5 text-white my-1 post-text">Doces e salgados para seus eventos</h2>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ------Fim-carousel-Eventos & Reunioes Direito ----- -->
          </section>
      </div>
  </div>
 <!-- ------Fim-carousel-Eventos & Reunioes- ----- -->



<!------- Carousel-produtos------->

<!------- Carousel-produtos Titulo------->
<div class="container titulo-carousel-produtos">
  <div class="row mb-2">
      <div class="col-12 text-center pt-3">
        <a href="{{route('produtos')}}">
          <h1>Produtos</h1>
        </a>
          <h4>Procuranodo algo especial ? De uma olhada nos nossos produtos! </h4>
      </div>
  </div>
</div>

<!-- ------carousel------- -->
<div class="container carousel-produtos">
	<div class="row">
		<div class="new-arrival">
           <div class="titlebar">
            <div class="next-back ">
                 <span><a data-slide="prev" href="#Carousel" class="left carousel-control"><i class="fas fa-chevron-left"></i></a></span>
                 <span><a data-slide="next" href="#Carousel" class="right carousel-control"><i class="fas fa-chevron-right"></i></a></span>
              </div>
           </div>
           <div class="arrival-product">
              <div id="Carousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner carousel-inner-produtos">
                    <div class="carousel-item active">
                       <div class="arrival-item">
                          <Ul>
                             <li><a  class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a  class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos2.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a  class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos3.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a  class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos4.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a  class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos5.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                          </Ul>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <div class="arrival-item">
                          <Ul>
                             <li><a class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos6.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos7.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos8.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos9.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                             <li><a class="overflow-produtos zoom-produtos" href="#"><img src="{{asset('img/carousel_produtos10.jpg')}}" alt="Image" style="max-width:100%;"></a></li>
                          </Ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
	</div>
</div>


<!-- ------carousel------- -->

<!------ banner frete gratis---->

  <div class="banner-fretegratis">
    <div class="row">
        <div class="col-lg-4">
            <div class="single-benefit">
                <div class="sb-icon">
                    <img src="img/icon-1.png" alt="">
                </div>
                <div class="sb-text">
                    <h6>Frete Gratis</h6>
                    <p>Valore acima de R$ 200,00 (Duzentos Reais).</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-benefit">
                <div class="sb-icon">
                    <img src="img/icon-2.png" alt="">
                </div>
                <div class="sb-text">
                    <h6>Entregas com horario marcado</h6>
                    <p>Agende sua entrega</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-benefit">
                <div class="sb-icon">
                    <img src="img/icon-3.png" alt="">
                </div>
                <div class="sb-text">
                    <h6>Segurança com seus dados</h6>
                    <p>100% seguro</p>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Seu espaço inicio -->
 <div class="seu-espaco">
   <section class="container-fluid latest-blog enquadramento">

   <!-- Seu espaço Titulo -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-titulo">
                  <h2>Seu Espaço</h2>
                </div>
            </div>
        </div>

  <!-- Seu espaço comentarios -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="seu-espaco-comentarios ">
                  <div class="fotoespaco_cliente ">
                    <img src="img/img_cliente.png" alt="..." class="img-thumbnail img-thumbnail-seu-espaco">
                  </div>
                    <div class="seu-espaco-comentarios">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                janeiro 4,2020
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Foi uma festa inesquecivel</h4>
                        </a>
                        <p>Pontual,organizado divertido </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="seu-espaco-comentarios">
                  <div class="fotoespaco_cliente">
                    <img src="img/img_cliente.png" alt="..." class="img-thumbnail img-thumbnail-seu-espaco">
                  </div>
                    <div class="seu-espaco-comentarios">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                               janeiro 4,2020
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Muito divertido,
                                recomendo</h4>
                        </a>
                        <p>Excelente ambiente,organizados  </p>
                    </div>
                </div>
            </div>
              <div class="col-lg-4 col-md-6 fotoespaco_cliente3">
                  <div class="seu-espaco-comentarios">
                    <div class="fotoespaco_cliente">
                      <img src="img/img_cliente.png" alt="..." class="img-thumbnail img-thumbnail-seu-espaco">
                    </div>
                      <div class="seu-espaco-comentarios">
                          <div class="tag-list">
                              <div class="tag-item">
                                  <i class="fa fa-calendar-o"></i>
                                  janeiro 4,2020
                              </div>
                              <div class="tag-item">
                                  <i class="fa fa-comment-o"></i>
                                  5
                              </div>
                          </div>
                          <a href="#">
                              <h4>Gostamos dos serviços</h4>
                          </a>
                          <p>Serviço de transporte excelente,
                              motorista atencioso carro limpo! </p>
                      </div>
                  </div>
              </div>
        </div>
  </section>
 </div>


<!-- ------footer---------- -->

<div>
  <footer class="footer-container">
    <div class="container footer-conteudo text-md-left">
      <div class="row">
        <div class="footer-img col-md-4 mx-auto">
            <div class="logo_footer">
            <a href="index.html"><img src="img/Logo_pet_party.png" style="width: 100px"  alt="" title=""></a>
            </div>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="footer-conteudo-servicos col-md-2 mx-auto">
          <h5>Serviços</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Alimentos</a>
            </li>
            <li>
              <a href="#!">Ambiente</a>
            </li>
            <li>
              <a href="#!">Produtos</a>
            </li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="footer-conteudo-ajuda col-md-2 mx-auto">
          <h5 >Ajuda</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">F.A.Q</a>
            </li>
            <li>
              <a href="#!">Cancelamentos</a>
            </li>
            <li>
              <a href="#!">Troca</a>
            </li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="footer-conteudo-ajuda col-md-2 mx-auto">
          <h5>Ajuda</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">F.A.Q</a>
            </li>
            <li>
              <a href="#!">Cancelamentos</a>
            </li>
            <li>
              <a href="#!">Troca</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <hr>
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class=" mx-1 text-dark" href="#">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="  mx-1 text-dark" href="#">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="  mx-1 text-dark" href="#">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class=" mx-1 text-dark" href="#">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
    </ul>
    <div class="footer-copyright text-center ">© 2020 Copyright:Pet Party| Pet Party S.A.
      CNPJ 12.345.678./0001-00 Rua do pet-Vila
      dos Animais,SP | CEP 00000-000
  </div>
</div>





          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>
           <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>
