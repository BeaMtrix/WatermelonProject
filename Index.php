<html lang="pt/br">
    <head>
        <title>Insira o titulo aqui</title>
    	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <!--Ícone da página -->
        <link rel="icon" href="img/Logo.png">
        <!-- Conexão com o bootstrap/javascript/jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/form.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/MainStyle.css" rel="stylesheet">
    </head>
    <body>
        <!-- 
            Barra de navegação
            fixed-top -> Deixa a barra presa no topo
            nav-pills -> Adiciona o efeito de "pilula"
            nav-dropdown -> Adiciona o efeito de pilha
        -->
        <nav class="navbar navbar-expand-sm">
          <a class="navbar-brand" href="#">
              
              <!-- Logotipo
                De preferencia em PNG
                -->
            <img src="img/logomarca.png" alt="Logo" style="width:80px;">
          </a>
            
      <!-- Links -->
      <ul id="guia" class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#texto1">Texto 1</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Texto 2
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" data-toggle="pill" href="#info1">Info 1</a>
            <a class="dropdown-item"data-toggle="pill"  href="#info2">Info 2</a>
            <a class="dropdown-item" data-toggle="pill" href="#info3">Info 3</a>
          </div>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#texto3">Texto 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#texto4">Cadastrar/Logar</a>
        </li>
      </ul>
        </nav>
    
    <!-- Conteudo que aparece ao clicar nos links-->
    <div class="tab-content">
        
    <div id="texto1" class="container-fluid tab-pane active">
        
        <!-- Inicio Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) 

                Para tirar as setas e/ou as barras de marcação
                use a classe hidden no local desejado

            -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        <!-- Final Carousel -->
        
        <!-- Inicio Grid 2 -->
        <div class="container-fluid fundoEscuro">
            <!-- Titulo -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
                
            <!-- Divisoes de texto -->
            <div class="row text-center">
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Final Grid 2-->
        
        <!-- Inicio Grid 2 com imagem -->
        
                <div class="container-fluid fundoClaro">
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/cart.png" class="img-fluid" width="400" height="400"> 
                </div>
                <div class="col-md-4">
                    <h2 class="section-heading text-uppercase">Texto 1</h2>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                    <a id="Parasobre" class="btn bigger" role="button">Para - contatos</a>
                </div>
                
        <!-- Script faz com que o botao funcione para a pagina desejada
            Mudar o numero de li:eq para selecionar qual será
            a aba que ele deve ir
        -->
        <script>
          $("#Parasobre").click(function() {
            $('#guia li:eq(2) a').tab('show');
          })
        </script>

            </div>
        </div>
        <!-- Final Grid 2 com imagem-->
        
        <!-- Inicio Grid 3 -->
        
                <div class="container-fluid fundoEscuro">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 2</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4" >
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 3</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
        </div>
        
        
        <!-- Final Grid 3-->
    
        
        <!-- Inicio Cards -->    
<div class="card-columns fundoClaro">
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
        <!-- Final Cards -->
        
</div>
        
    <div id="info1" class="tab-pane fade">
        
        <!-- Inicio Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        <!-- Final Carousel -->
        
        <!-- Inicio Grid 2 -->
        <div class="container-fluid fundoEscuro">
            <!-- Titulo -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
                
            <!-- Divisoes de texto -->
            <div class="row text-center">
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Final Grid 2-->
        
        <!-- Inicio Grid 2 com imagem -->
        
                <div class="container-fluid fundoClaro">
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/cart.png" class="img-fluid" width="400" height="400"> 
                </div>
                <div class="col-md-4">
                    <h2 class="section-heading text-uppercase">Texto 1</h2>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                    <a id="Parasobre" class="btn bigger" role="button">Para - contatos</a>
                </div>
                
        <!-- Script faz com que o botao funcione para a pagina desejada
            Mudar o numero de li:eq para selecionar qual será
            a aba que ele deve ir
        -->
        <script>
          $("#Parasobre").click(function() {
            $('#guia li:eq(2) a').tab('show');
          })
        </script>

            </div>
        </div>
        <!-- Final Grid 2 com imagem-->
        
        <!-- Inicio Grid 3 -->
        
                <div class="container-fluid fundoEscuro">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 2</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4" >
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 3</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
        </div>
        
        
        <!-- Final Grid 3-->
    
        
        <!-- Inicio Cards -->    
<div class="card-columns fundoClaro">
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
        <!-- Final Cards -->
        
</div>
             
    <div id="info2" class="tab-pane fade">
        
        <!-- Inicio Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        <!-- Final Carousel -->
        
        <!-- Inicio Grid 2 -->
        <div class="container-fluid fundoEscuro">
            <!-- Titulo -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
                
            <!-- Divisoes de texto -->
            <div class="row text-center">
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Final Grid 2-->
        
        <!-- Inicio Grid 2 com imagem -->
        
                <div class="container-fluid fundoClaro">
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/cart.png" class="img-fluid" width="400" height="400"> 
                </div>
                <div class="col-md-4">
                    <h2 class="section-heading text-uppercase">Texto 1</h2>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                    <a id="Parasobre" class="btn bigger" role="button">Para - contatos</a>
                </div>
                
        <!-- Script faz com que o botao funcione para a pagina desejada
            Mudar o numero de li:eq para selecionar qual será
            a aba que ele deve ir
        -->
        <script>
          $("#Parasobre").click(function() {
            $('#guia li:eq(2) a').tab('show');
          })
        </script>

            </div>
        </div>
        <!-- Final Grid 2 com imagem-->
        
        <!-- Inicio Grid 3 -->
        
                <div class="container-fluid fundoEscuro">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 2</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4" >
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 3</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
        </div>
        
        
        <!-- Final Grid 3-->
    
        
        <!-- Inicio Cards -->    
<div class="card-columns fundoClaro">
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
        <!-- Final Cards -->
        
</div>
           
    <div id="info3" class="tab-pane fade">
        
        <!-- Inicio Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        <!-- Final Carousel -->
        
        <!-- Inicio Grid 2 -->
        <div class="container-fluid fundoEscuro">
            <!-- Titulo -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
                
            <!-- Divisoes de texto -->
            <div class="row text-center">
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Final Grid 2-->
        
        <!-- Inicio Grid 2 com imagem -->
        
                <div class="container-fluid fundoClaro">
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/cart.png" class="img-fluid" width="400" height="400"> 
                </div>
                <div class="col-md-4">
                    <h2 class="section-heading text-uppercase">Texto 1</h2>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                    <a id="Parasobre" class="btn bigger" role="button">Para - contatos</a>
                </div>
                
        <!-- Script faz com que o botao funcione para a pagina desejada
            Mudar o numero de li:eq para selecionar qual será
            a aba que ele deve ir
        -->
        <script>
          $("#Parasobre").click(function() {
            $('#guia li:eq(2) a').tab('show');
          })
        </script>

            </div>
        </div>
        <!-- Final Grid 2 com imagem-->
        
        <!-- Inicio Grid 3 -->
        
                <div class="container-fluid fundoEscuro">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 2</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4" >
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 3</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
        </div>
        
        
        <!-- Final Grid 3-->
    
        
        <!-- Inicio Cards -->    
<div class="card-columns fundoClaro">
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
        <!-- Final Cards -->
        
</div>
             
     <div id="texto3" class="container-fluid tab-pane fade">
        
        <!-- Inicio Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicadores-->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- Mostra de imagens -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/04-wallpaper_macos-mojave.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 1</h1>
                <p>Lorem ipsum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/3955783-road-wallpaper.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 2</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
            <div class="carousel-item">
              <img src="img/London%20Sidewalk%20Sunset%20Paved%20Street%20Free%20Wallpaper%20HD.jpg" style="filter: brightness(50%);">
              <div class="carousel-caption">
                <h1>Titulo 3</h1>
                <p>Lorem ipsulum</p>
              </div> 
            </div>
          </div>

          <!-- Esquerda e direita (setas) -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
        <!-- Final Carousel -->
        
        <!-- Inicio Grid 2 -->
        <div class="container-fluid fundoEscuro">
            <!-- Titulo -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
                
            <!-- Divisoes de texto -->
            <div class="row text-center">
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-6">
                    <!-- Imagem com texto circulado-->
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Final Grid 2-->
        
        <!-- Inicio Grid 2 com imagem -->
        
                <div class="container-fluid fundoClaro">
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/cart.png" class="img-fluid" width="400" height="400"> 
                </div>
                <div class="col-md-4">
                    <h2 class="section-heading text-uppercase">Texto 1</h2>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                    <a id="Parasobre" class="btn bigger" role="button">Para - contatos</a>
                </div>
                
        <!-- Script faz com que o botao funcione para a pagina desejada
            Mudar o numero de li:eq para selecionar qual será
            a aba que ele deve ir
        -->
        <script>
          $("#Parasobre").click(function() {
            $('#guia li:eq(2) a').tab('show');
          })
        </script>

            </div>
        </div>
        <!-- Final Grid 2 com imagem-->
        
        <!-- Inicio Grid 3 -->
        
                <div class="container-fluid fundoEscuro">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Titulo maior</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 1</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4">
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300">
                    <h4 class="minor-heading">Texto 2</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
                <div class="col-md-4" >
                    <img src="img/leaves.png" class="rounded-circle"  width="300" height="300"> 
                    <h4 class="minor-heading">Texto 3</h4>
                    <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedi</p>
                </div>
            </div>
        </div>
        
        
        <!-- Final Grid 3-->
    
        
        <!-- Inicio Cards -->    
<div class="card-columns fundoClaro">
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
        <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>

    <div class="card" style="width:400px">
      <img class="card-img-top" src="img/pawn.png" alt="foto">
      <div class="card-body">
        <h4 class="card-title">Nome</h4>
        <p class="card-text">Texto qualquer</p>
      </div>
    </div>
</div>
        <!-- Final Cards -->
        
</div>      
  </div>
               
        <!-- Rodapé final do site-->
        <div class="jumbotron text-center">
          <p>Website e imagem pertencente a InfoBioJr - Todos os direitos reservados - 2018</p>
        </div>

    </body>
</html>