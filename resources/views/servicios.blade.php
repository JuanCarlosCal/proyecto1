<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
          <a href="#" class="navbar-brand fw-semibold fs-6 ms-4"><span class="text-primary text-uppercase fs-2">Tecno</span>products</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbar-start" aria-controls="navbar-start" aria-expanded="false"
                  aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-start">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-underline ">
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/nosotros">Nosotros</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark active" href="http://127.0.0.1:8000/servicios">Servicios</a>
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

    <!-- SERVICIOS -->
    <section class="container mt-5 py-5">
    <h1 class="text-center mb-5 fw-semibold">Nuestros Servicios</h1>
    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card h-100">
                <img src="img/reseña.jpg" alt="reseña" class="w-100 h-100">
                <div class="card-body">
                    <h5 class="card-title h-25">Reseñas Detalladas</h5>
                    <p class="card-text">Proporcionamos reseñas exhaustivas de los últimos productos tecnológicos para ayudarte a tomar decisiones informadas. Nuestro equipo de expertos evalúa cada producto en profundidad.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100">
                    <img src="img/comparativa.jpg" alt="reseña" class="w-100 h-100">
            <div class="card-body">
                <h5 class="card-title h-25">Comparativas de Productos</h5>
                <p class="card-text">Realizamos comparativas detalladas entre productos similares para que puedas ver las diferencias clave y decidir cuál se adapta mejor a tus necesidades.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                    <img src="img/guias.jpg" alt="reseña" class="w-100 h-100">
            <div class="card-body">
                <h5 class="card-title h-25">Guías de Compra</h5>
                <p class="card-text">Nuestras guías de compra están diseñadas para ayudarte a entender qué características buscar y cómo elegir el producto adecuado según tu presupuesto y requisitos.</p>
            </div>
            </div>
        </div>
        </div>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card h-100">
                    <img src="img/consultoria.jpg" alt="reseña" class="w-100 h-100">
            <div class="card-body">
                <h5 class="card-title h-25">Consultoría Tecnológica</h5>
                <p class="card-text">Ofrecemos servicios de consultoría para empresas y particulares, ayudándote a elegir la tecnología adecuada y a implementar soluciones tecnológicas efectivas.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                    <img src="img/actualizaciones.jpg" alt="reseña" class="w-100 h-100">
            <div class="card-body">
                <h5 class="card-title h-25">Actualizaciones y Noticias</h5>
                <p class="card-text">Mantente al día con las últimas noticias y actualizaciones del mundo tecnológico. Proporcionamos información sobre lanzamientos de productos, actualizaciones de software y más.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                    <img src="img/tutoriales.jpg" alt="reseña" class="w-100 h-100">
            <div class="card-body">
                <h5 class="card-title h-25">Tutoriales y Consejos</h5>
                <p class="card-text">Nuestros tutoriales y consejos te ayudarán a sacar el máximo provecho de tus dispositivos tecnológicos, desde configuraciones básicas hasta soluciones avanzadas de problemas.</p>
            </div>
            </div>
        </div>
    </div>
  </section>
    <!-- FOOTER -->
     @include('footer')
    
</body>
</html>