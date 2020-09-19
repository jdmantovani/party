<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css_bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Animate-aos -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- link-FAVICON -->
    <link rel="shortcut icon" href="{{asset('img/favicon_transp.png')}}" />
    <!-- google_fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Baloo|Bebas+Neue|Niconne|Permanent+Marker&display=swap" rel="stylesheet">
 
 
 
    <!-- Font Awesome JS -->
     <script src="https://kit.fontawesome.com/f7c3018ae1.js" crossorigin="anonymous"></script>
      <!-- css_bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Animate-aos -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- link-FAVICON -->
    <link rel="shortcut icon" href="{{asset('img/favicon_transp.png')}}" />
    <!-- google_fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton%7CBaloo%7CBebas+Neue%7CNiconne%7CPermanent+Marker&display=swap" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/f7c3018ae1.js" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/stylo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/query.css')}}">
    <link rel="stylesheet" href="{{ asset('css/registro.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produtos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
    <link rel="stylesheet" href="{{ asset('css/faq.css')}}">
    <div>
    <div class="sub_header">
      <div class="container">
          <div class="row align-items-center">
            <div class="col-4 col-md-4 col-xl-6">
                <div id="logo">
                    <a href="{{route('home')}}"><img src="{{asset('img/Logo_pet_party.png')}}" style="width: 80px;"  alt="" title=""></a>
                </div>
            </div>
            <div class="col-8 col-md-8 col-xl-6 ">
                <div class="sub_header_social_icon float-right">
                  <a href="https://api.whatsapp.com/send?phone=5511986576319"><i class="fab fa-whatsapp"></i></i>+02 213- 256 (365)</a>
                  <a href="#" class="btn_1  d-md-inline-block">Contato</a>
                </div>
              </div>
          </div>
      </div>
    </div>
    </div>
   
     <title>Catálogo de Produtos</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Descricao</th>
            <th scope="col">Acoes</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produtos as $p)
            <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td class="d-flex justify-content-around pl-0">
                    <!--<a href="" class="btn btn-primary">Visualizar</a>-->
                <a href="/adminProdutos/edit/{{$p->id}}" class="btn btn-primary">Editar</a>
                <form action="/adminProdutos/{{$p->id}}" method=POST>
                        @csrf 
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>



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