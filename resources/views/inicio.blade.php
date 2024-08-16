<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    <!-- NAVBAR -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
          <a href="#" class="navbar-brand fw-semibold fs-6 ms-4 d-flex align-items-center"><img src="img/icono.png" width="60px" alt="TECNOproducts"><span class="text-primary text-uppercase fs-2 align-self-end ">Tecno</span><span class="align-self-end">products</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbar-start" aria-controls="navbar-start" aria-expanded="false"
                  aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-start">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-underline">
                  <li class="nav-item">
                      <a class="nav-link link-dark active" href="http://127.0.0.1:8000/">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/nosotros">Nosotros</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/servicios">Servicios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/noticias">Noticias</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/contactos">Contactos</a>
                  </li>
                  <li class="nav-item">
                      <button class="nav-link border border-0 bg-primary rounded-3">
                            <a class="text-dark fw-semibold text-decoration-none" href="/dashboard">Iniciar sesión</a>
                      </button>
                  </li>
                  <li class="nav-item"> 
                      <button class="nav-link border border-0 bg-primary rounded-3">
                            <a class="text-dark fw-semibold text-decoration-none" href="/register">Registarse</a>
                      </button> 
                  </li>
              </ul>    
          </div>
    </div>
    </nav>
    </header>

    <main>
        
    <!-- CARRUSEL -->

    <div id="carouselE1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE1"
                    data-bs-slide-to="0" class="active" aria-current="true" 
                    aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carouselE1"
                    data-bs-slide-to="1" aria-label="Slide 2">
            </button>
            <button type="button" data-bs-target="#carouselE1"
                    data-bs-slide-to="2" aria-label="Slide 3">
            </button>
        </div>
          <div class="carousel-inner">

              <div class="carousel-item active">
                    <img src="img/comp1.jpg" class="d-block w-100" alt="First slide">
                  <div class="carousel-caption z-2 y-bottom-3">
                    <h5>Los mejores productos tecnológicos</h5>
                    <p>Conoce los mejores productos para jugar o trabajar </p>
                    <p><a href="#" class="btn-btn-primary my-3">Leer más...</a></p>
                  </div>
              </div> 

              <div class="carousel-item">
                    <img src="img/comp2.jpg" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption z-2 y-bottom-3">
                      <h5>Los mejores productos tecnológicos</h5>
                      <p>Conoce los mejores productos para jugar o trabajar</p>
                      <p><a href="#" class="btn-btn-primary my-3">Leer más...</a></p>
                    </div>
              </div>
              <div class="carousel-item">
                <img src="img/comp3.jpg" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption z-2 y-bottom-3">
                      <h5>Los mejores productos tecnológicos</h5>
                      <p>Conoce los mejores productos para jugar o trabajar</p>
                      <p><a href="#" class="btn-btn-primary my-3">Leer más...</a></p>
                    </div>
              </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- CARDS -->

    <section class="services">
        <div class="container">
              <div class="row">
                    
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                          <div class="card text-white text-center bg-car1 pb-2" id="servicios">
                              <div class="card-body">
                                <h3 class="card-title">Componentes y computadores</h3>
                                <p>Disponemos de componentes y computadores para que puedas ver en todo momento.</p>
                                <button class="btn bg-primary text-white">Leer más...</button>
                              </div>
                          </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                          <div class="card text-white text-center bg-car2 pb-2" id="servicios">
                              <div class="card-body">
                                <h3 class="card-title">Accesorios y periféricos</h3>
                                <p>Disponemos de accesorios y periféricos para personalizar su espacio de trabajo.</p>
                                <button class="btn bg-primary text-white">Leer más...</button>
                              </div>
                          </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                          <div class="card text-white text-center bg-car3 pb-2" id="servicios">
                              <div class="card-body">
                                <h3 class="card-title">Portátiles</h3>
                                <p>Disponemos de portátiles 100% de calidad.</p>
                                <button class="btn bg-primary text-white">Leer más...</button>
                              </div>
                          </div>
                    </div>

              </div>
        </div>
    </section>

    <section class="section-icons">
        <div class="container">
              <div class="row">
                    <div class="col-12 col-md-12 col-lg4 box-icons">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-airplane"></i>
                            <div class="ms-4">
                                <h3>Envió gratis</h3>
                                <p>Envios gratis a cualquier punto del mundo.</p>
                            </div>
                         </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg4 box-icons">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-cash-coin"></i>
                            <div class="ms-4">
                                <h3>Reembolso</h3>
                                <p>Si su vehículo no funciona o no se ajusta, recibimos un reembolso de $100.</p>
                            </div>
                         </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg4 box-icons">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-gift-fill"></i>
                            <div class="ms-4">
                                <h3>Regalo</h3>
                                <p>Disponemos de regalos para que su vehículo sea más confortable y elegante.</p>
                            </div>
                         </div>
                    </div>

              </div>
        </div>
    </section>

    <section class="product">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h2>Nuestros productos</h2>
                            <p>Conoce algunos de los productos que ofrecemos</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro1.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">AMD RYZEN 3 2200G 4/4 CORES 3.5/3.7GHZ / YD2200C5FBBOX</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro2.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">DIADEMA ASTRO A20 GEN 2 WIRELESS XB-GREEN / 939-001882</h5>
                                  <a href="#" class="btn btn-primary ">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro3.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">TECLADO VSG MINTAKA BLACK KAILH CAFE MECANICO / 60% / VG-KM981-BLK-BRW</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro4.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">MOUSE RAZER DEATHADDER ESSENTIAL WHITE/RZ01-03850200-R3M1</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro5.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">SWITCH KAILH BOX RED 40 UNIDADES / SWCH-REG-RED</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro6.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">PORTATIL MACBOOK AIR 13″ CHIP M1 / RAM 8GB / 256GB SSD – GRIS / MGN63LA/A</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro7.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">DIADEMA LOGITECH G733 WHITE GAMING / 7.1 VIRTUAL / INALAMBRICO / 981-000882</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card bg-light shadow-sm border-0 px-2 py-3 mb-4" id="productos">
                                <div class="text-center">
                                    <img src="img/pro8.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title text-center">NVIDIA Geforce MSI RTX 3050 6GB DDR6 VENTUS / 90YV0K60-M0AA00</h5>
                                  <a href="#" class="btn btn-primary">Saber más...</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>

    <section class="banner">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12 text-center">
                          <h2>La mejor tecnología la encontraras aquí</h2>
                          <p>Conoce los mejores productos tecnológicos para tu trabajar o jugar.</p>
                          <div>
                            <img src="img/mo1.png" alt="">
                          </div>
                        </div>
                  </div>
            </div>
    </section>

    <section class="contact">
        <div class="container mb-3 mb-lg-5">
              <div class="row">
                  <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h2>Contáctenos</h2>
                            <p>Si tienes alguna pregunta o necesitas información adicional, no dude en contactarnos.</p>
                        </div>
                  </div>
              </div>

              <div class="d-flex justify-content-center">
                    <div class="col-12 col-md-12 col-lg-6 pt-4 pb-4">
                          <form action="#" class="bg-light p-4 m-auto shadow-sm">
                                <div class="row">
                                    <div class="col-mb-12">
                                        <div class="mb-3">
                                            <input class="form-control" placeholder="Ingrese su nombre" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-mb-12">
                                        <div class="mb-3">
                                            <input class="form-control" placeholder="Ingrese su email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-mb-12">
                                        <div class="mb-3">
                                          <textarea class="form-control" placeholder="Ingrese su mensaje" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block mt-3"type="submit" >Enviar</button>
                                </div>
                          </form>
                    </div>
              </div>
        </div>
    </section>
    </main>

    <!-- FOOTER -->
     @include('footer')

</body>
</html>