<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link-FAVICON -->
     <link rel="shortcut icon" href="img/logo_aba.png" />

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
   <link rel="stylesheet" href="css/stylo.css">
   <link rel="stylesheet" href="css/query.css">
   <link rel="stylesheet" href="css/registro.css">
   <link rel="stylesheet" href="css/produtos.css">
   <link rel="stylesheet" href="css/about.css">
   <link rel="stylesheet" href="css/faq.css">
    <title>Pet Party</title>
</head>

    <body>
        <!-- sub_header -->
      <div class="sub_header">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-md-4 col-xl-6">
                  <div id="logo">
                  <a href="{{route('home')}}"><img src="img/Logo_pet_party.png" style="width: 5rem;"  alt="" title=""></a>
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
        <div class="color-nav ">
            <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-end ">
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

                    <!-- banner-produtos Start-->
        <div class="banner-produtos ">
            <!-- Mobile Menu -->
            <div class=" banner-height d-flex align-items-center"  >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="titulo-banner-produtos text-center">
                                <h2>Catálogo de Alimentos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-produtos End-->

        <!-- grid-produtos-area Start -->
        <section class="grid-produtos-area grid-produtos-area-responsive">
            <div class="container">
                <div class="row produto-btn d-flex justify-content-between">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Todos</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cachorros</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Gatos</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Festas</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" >
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="{{asset('img/categori/alimentos/biscoito.jpg')}}" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Premier Cookie</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$42.30</li>
                                                <li class="desconto">R$55.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/alimentos/racaoGato.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Ração Pro Plan</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$85.00</li>
                                                <li class="desconto">R$105.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros3.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Capa para Chuva</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Arranhador</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Jogo de colchões para Gatos</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos3.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Caixa de Transporte para Gatos</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros4.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Coleira de Passeio</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros5.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Gravata Borboleta</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Caixa de Transporte</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros2.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Jogo de colchões</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros3.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Capa para Chuva</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-cachorros/produto-cachorros6.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Protetor de Bancos </a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Arranhador</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos3.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Caixa de Transporte</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Jogo de Colchões</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos4.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Casinha de Descanço</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos5.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Coleira</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos6.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card foure -->
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-festas/produtos-festas.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">Bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-festas/Temas_festas4.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="produto-img">
                                        <img src="img/categori/produtos-gatos/produtos-gatos2.jpg" alt="">
                                        <div class="produto-lancamento">
                                            <span>Novo</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">bola</a></h4>
                                        <div class="valor">
                                            <ul>
                                                <li>R$40.00</li>
                                                <li class="desconto">R$80.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- grid-produtos-area End -->

        <!-- inscrevase-subscribe inicio -->
        <div class="inscrevase lf-padding">
            <div class="inscrevase-area inscrevase-height d-flex align-items-center" data-background="/img/categori/banner_pattern.png">
                <div class="container ">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="inscrevase-caption">
                                <h2>Inscreva-se<br>na nossa newsletter</h2>
                                <p>Fique por Dentro !</p>
                            </div>
                        </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="inscrevase-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Digite seu email">
                                    <button>Inscreva-se</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- inscrevase-subscribe fim -->


















































    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:Pet Party| Pet Party S.A.
      CNPJ 12.345.678./0001-00 Rua do pet-Vila
      dos Animais,SP | CEP 00000-000
  </div>
  <!-- Copyright -->







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
