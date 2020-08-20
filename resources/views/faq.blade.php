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
    <title>Pety Party</title>
</head>

    <body class="home" >
        <!-- sub_header -->
      <div class="sub_header">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-md-4 col-xl-6">
                  <div id="logo">
                      <a href="index.html"><img src="img/Logo_pet_party.png" style="width: 80px;"  alt="" title=""></a>
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
                              <a class="dropdown-item font-nav" href="produtos.html">Produtos</a>
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
                              <a class="dropdown-item font-nav" href="{{route('login')}}">login</a>
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
    <section class="banner_faq">
      <div class="container">
          <div class="row align-content-center">
              <div class="col-lg-7 col-xl-6">
                  <div class="banner_faq_text">
                      <h5>Bem Vindo ao Pety Party</h5>
                      <h1>Olá , Aqui esclareceremos algumas das duvidas mais frequentes!</h1>
                  </div>
              </div>
          </div>
      </div>
  </section>

<div class="faq-conteudo">
<section class="faq-conteudo-texto">
  <h1 >FAQ</h1>
  <div class="mb-4 ">
    <p class="text-left">
        1. Como realizo uma compra? <br>
    Vá para página <a href="{{route('produtos')}}">Produtos</a>,  selecione o seu item e coloque no carrinho de compras.
    </p>

    <p class="text-left">
       2. Como cancelo uma compra? <br>
        Acesse seu carrinho de compras e clique no botão cancelar.
    </p>

      <p class="text-left">
          3. Produtos para quais animais a PetParty vende? <br>
            Vendemos produtos para seus cachorríneos e gatíneos, mas também: periquitíneos, calopsitíneas, iguaníneas, ratíneos, cobríneas, entre outros.
      </p>

      <p class="text-left">
         4. Qual valor do frete? <br>
          Para compras acima de R$190,00 não precisa pagar nada pelo frete. Agora... se for menos que isso consulte os valores após preencher o campo "Frete" na página de <a href="produto_individual.html">Produtos</a>.
      </p>

      <p class="text-left">
          5. Se eu contratar um buffet na PetParty também ganho a limpeza?  <br>
            Nossa equipe é responsável pelo link ente você e o buffet responsável, após fechar a realização da festa com o buffet escolhido verifique se ele fornecerá também a limpeza.
      </p>

       <p class="text-left">
          6. Se eu quiser trocar meu produto, como faço? <br>
          A PetParty troca produtos após eles estarem com o status "entegue" e no prazo máximo de 30 dias, a contar da data de recebimento do referido produto.
       </p>

      <p class="text-left">
        7. É possível retirar o produto em uma loja física? <br>
      A PetParty trabalha incansavelmente para melhor atender seus clientes, por isso estamos analisando a possibilidade deste modelo de entrega :) e assim que estiver disponível iremos colocar um aviso na nossa <a href="{{route('home')}}">Home</a>.
      </p>

      <p class="text-left">
        8. Posso usar um vale presente? <br>
        Claro que pode!!! Basta inserir o código de seu vale presente no campo correspondente quando for pagar o produto.
      </p>

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
    <div class="footer-copyright text-center ">© 2020 Copyright:Pety Party| Pety Party S.A.
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
