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
                        <a class="nav-link font-nav" title="Quem somos" href="sobre-nos.html">Sobre Nós</a>
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
        <div class="Registro form-v6">
          <div class="page-content ">
            <div class="form-v6-content col-12 col-sm-6 col-md-8  " >
              <div class="form-left  ">
                <img src="img/banner_bg - Copia.png" alt="form">
              </div>
              <form class="form-detail " action="#" method="post">
                <h2>Cadastro</h2>
                <div class="form-row ">
                  <input type="text" name="full-name" id="full-name" class="input-text" placeholder="Nome" required>
                </div>
                <div class="form-row">
                  <input type="text" name="your-email" id="your-email" class="input-text" placeholder="Email " required pattern="">
                </div>
                <div class="form-row">
                  <input type="password" name="password" id="password" class="input-text" placeholder="Senha" required>
                </div>
                <div class="form-row">
                  <input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Confirmação da Senha" required>
                </div>
                <div class="form-row-last">
                  <input type="submit" name="register" class="register" value="Registre-se">
                </div>
              </form>
            </div>
          </div>
        </div>

                    <!-- inscrevase-subscribe inicio -->
        <div class="inscrevase lf-padding">
          <div class="inscrevase-area inscrevase-height d-flex align-items-center" data-background="/img/categoria/banner_pattern.png">
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


      <!-- ------footer---------- -->
           <div class="footer-copyright text-center py-3 ">
             <p>© 2020 Copyright:Pet Party| Pet Party S.A.
              CNPJ 12.345.678./0001-00 Rua do pet-Vila
              dos Animais,SP | CEP 00000-000</p>
          </div>
      </div>

</body>

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

      <script type="text/javascript">

</script>

</div>
</html>
