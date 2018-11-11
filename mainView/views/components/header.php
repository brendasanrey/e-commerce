<div class="container-fluid top-bar pt-2" id="top">
  <div class="container">
    <div class="row">

    <!-- NOTE Redes sociales -->
      <div class="col-lg-9 col-md-9 col-sm-8 col-6 social px-0 pr-lg-3">
        <ul class="list-inline">
          <?php 
            // Socilitar al controlador los valores dinamicos
            $social = TemplateController::templateStyleController();
            // obtiene el campo "social-networks y lo combierte en arreglo con json_decode
            $socialJson = json_decode($social["social-networks"],true);
            foreach ($socialJson as $key => $value) {
             echo '<li class="list-inline-item">
                      <a href="'.$value["url"].'"><i class="'.$value["red"].' text-white social-network '.$value["style"].'"></i></a>
                  </li>';
            }
          ?>
        </ul>
      </div>

      <!-- NOTE Registro -->
      <div class="col-lg-3 col-md-3 col-sm-4 col-6 register px-0 pr-lg-3">
        <ul class="list-inline text-right">
          <li class="list-inline-item">
            <a href="#modalSignIn" data-toggle="modal">Ingresar</a>
          </li>
          <li class="list-inline-item">|</li>
          <li class="list-inline-item">
              <a href="#modalSignUp" data-toggle="modal">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<header class="container-fluid">
  <div class="container">
    <div class="row" id="header">
    <!-- NOTE logo -->
      <div class="col-lg-3 col-md-3 col-sm-2 col-12 mt-1 mb-2 text-center text-lg-left" id="logo">
        <a href="#">
          <img src="../adminView/views/resources/assets/images/mi-logo.png" class="img-fluid w-img">
        </a>
      </div>

      <!-- NOTE Boton Categorias y buscador -->
      <div class="col-lg-6 col-md-6 col-sm-8 col-12">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-12 color-bg mt-3 btnCategories">
            <p class="title my-2 pl-2">Categorías
              <span class="float-right" id="btnCategories"><i class="fas fa-bars"></i></span>
            </p>
          </div>

          <div class="input-group col-lg-8 col-md-8 col-sm-8 col-12 mt-3 px-0 pr-lg-5 pr-md-3" id="search">
            <input type="text" placeholder="Buscar" class="form-control">
            <button class="btn btn-default color-bg" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>

      <!-- NOTE Carrito de compras -->
      <div class="col-lg-3 col-md-3 col-sm-2 col-12 mt-3 pr-lg-3 px-0" id="shoppingCar">
        <a href="#">
          <button class="btn btn-default float-left color-bg">
            <i class="fas fa-shopping-cart"></i>
          </button>
        </a>
        <p>
          Productos <span class="amount"></span> <br> MXN $ <span class="total"></span>
        </p>
      </div>

      <!-- NOTE Categorías -->
      <div class="col-12 color-bg" id="categories">
        <div class="row">

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Mujeres</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Vestidos</a></li>
              <li><a href="#" class="pixel-sub-categories">Blusas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pantalones</a></li>
              <li><a href="#" class="pixel-sub-categories">Sudaderas</a></li>
              <li><a href="#" class="pixel-sub-categories">Shorts</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Hombres</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Trajes</a></li>
              <li><a href="#" class="pixel-sub-categories">Camisas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pantalones</a></li>
              <li><a href="#" class="pixel-sub-categories">Sudaderas</a></li>
              <li><a href="#" class="pixel-sub-categories">Shorts</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Niñas</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Vestidos</a></li>
              <li><a href="#" class="pixel-sub-categories">Blusas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pantalones</a></li>
              <li><a href="#" class="pixel-sub-categories">Sudaderas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pijamas</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Niños</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Trajes</a></li>
              <li><a href="#" class="pixel-sub-categories">Camisas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pantalones</a></li>
              <li><a href="#" class="pixel-sub-categories">Sudaderas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pijamas</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Bebés</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Conjuntos</a></li>
              <li><a href="#" class="pixel-sub-categories">Camisas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pantalones</a></li>
              <li><a href="#" class="pixel-sub-categories">Sudaderas</a></li>
              <li><a href="#" class="pixel-sub-categories">Pijamas</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <h4><a href="#" class="pixel-categories title">Accesorios</a></h4>
            <hr>
            <ul>
              <li><a href="#" class="pixel-sub-categories">Zapatos</a></li>
              <li><a href="#" class="pixel-sub-categories">Maquillaje</a></li>
              <li><a href="#" class="pixel-sub-categories">joyas</a></li>
              <li><a href="#" class="pixel-sub-categories">Bolsos</a></li>
              <li><a href="#" class="pixel-sub-categories">Cinturones</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</header>