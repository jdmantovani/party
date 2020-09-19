<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link-FAVICON -->
     <link rel="shortcut icon" href="{{asset('img/favicon_transp.png')}}" />

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
    <link rel="stylesheet" href="css/sobre-nos.css">

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
                  <a href="https://api.whatsapp.com/send?phone=5511986576319"><i class="fab fa-whatsapp"></i></i>11 986576319</a>
                    <a href="#" class="btn_1  d-md-inline-block">Contato</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub-header-fim -->

            <!-- Header -->
        <div class=" color-nav ">
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
                          <a class="dropdown-item font-nav" href="{{route('produtos')}}">Produtos</a>
                              <a class="dropdown-item font-nav" href="#">Ambientes</a>
                              <a class="dropdown-item font-nav" href="#">Decorações</a>
                              
                              <!--<div class="dropdown-divider"></div>
                              <a class="dropdown-item font-nav" href="#">Parceiros</a>
                          </div>-->
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
            <!----- sobre-nos-patyParty  Inicio ----->
               <div class="sobre-nos">
                    <div>
                        <div class="row no-gutters ">
                          <!-- /******* sobre-nos-petParty-história  Inicio *****/  -->
                            <div class="sobre-nos-petParty-história col-sm-6" data-aos="fade-left">
                                <h3>História</h3>
                                <p>A PetParty nasceu da necessidade de reunir organizadores de buffet para pet,
                   produtos e acessórios num só lugar. Como donos de pets que somos tínhamos dificuldades em encontrar tudo isso em um único site. 
                   Por isso criamos esta loja que além de te permitir encontrar todos os itens necessários para organizar aquela festa para seu filhinho(a) animal
                   ainda torna possível viver toda uma experiência de montar uma festa inesquecível, com bolo personalizado, lembrancinhas e até brinquedos
                   com o nome do seu bichinho! </p>
                                
                            </div>
                            <!-- /******* sobre-nos-petParty-história  Fim *****/ -->

                            <!-- /******* sobre-nos-patyParty  Inicio *****/ -->
                            <div class="sobre-nos-patyParty col-sm-6 " data-aos="fade-right">
                              <h3 >Pet Party</h3>
                              <p> Como temos nossos "filhinhos de quatro patas" em casa, possuímos o diferencial de saber exatamente
                como é complicado montar uma festinha para eles. Se achamos um local que vende um bolo para pet,
                ainda falta encontrar a decoração, as lembrancinhas, arrumar um lugar para fazer a festa... São todas
                estas preocupações as quais tentamos diminuir ao montar nosso site. Por isso, sinta-se num ambiente
                especialmente planejado para facilitar sua vida neste momento tão especial quanto o aniversário de seu
                pet. </p>
                          </div>
                        </div>
                    </div>
                </div>
               <!----- sobre-nos-patyParty  Fim ----->
               <div class="espaco-section"></div>
               <!-- /******* sobre-nos section Inicio *****/ -->
               <div class="sobre-nos-section">
                 <div class="row no-gutters"  data-aos="flip-down" >
                  <!-- /******* section-missao  Inicio *****/         -->
                         <div class=" col-sm-4 col-md-4 col-lg-4 col-xl-4">
                             <div class="section-missao">
                                 <p><img src="img/categoria/sobrenos/missao-sobrenos.png"   alt="img-missao"></p>
                                  <p class="section-titulo-missao">Missão</p>
                                  <p class="section-texto-missao">Proporcionar às pessoas e seus animais de estimação maior qualidade de vida.</p>
                             </div>
                          </div>
                          <!-- /******* section-missao  fim *****/ -->

                          <!-- /******* section-visao  Inicio *****/ -->
                         <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                          <div class="section-visao">
                              <p><img src="img/categoria/sobrenos/visao-sobrenos.png"   alt="img-visao"></p>
                               <p class="section-titulo-visao"><em>Nossa Visão:</em></p>
                               <p class="section-texto-visao">Proporcionar cada vez mais a conexão entre os pets e as pessoas.</p>
                          </div>
                         </div>
                         <!-- /******* section-visao  Fim *****/ -->

                         <!-- /******* section-valores  Inicio *****/ -->
                         <div class=" col-sm-4 col-md-4 col-lg-4 col-xl-4">
                          <div class="section-valores">
                              <p><img src="img/categoria/sobrenos/valores-sobrenos.png"  alt="img-valores"></p>
                               <p class="section-titulo-valores"><em>Nossos Valores:</em></p>
                               <p class="section-texto-valores">
                                Amamos muito os pets, cativamos nossos clientes, temos prazer em servir
                               </p>
                          </div>
                       </div>
                       <!-- /******* section-valores  Inicio *****/ -->
                   </div>
             </div>
    <div>
                <div class="espaco-footer"></div>
                <!-- /******* sobre-nos section Fim *****/ -->

                <!-- ------footer---------- -->
        <div class=" text-center py-3 sobre-nos-footer ">
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1 text-dark" href="#">
                <i class="fab fa-facebook-f"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1 text-dark" href="#">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1 text-dark" href="#">
                <i class="fab fa-google-plus-g"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1 text-dark" href="#">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>

          </ul>
          <p >
            © 2020 Copyright:Pet Party| Pet Party S.A.
            CNPJ 12.345.678./0001-00 Rua do pet-Vila
            dos Animais,SP | CEP 00000-000
          </p>
      </div>
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
