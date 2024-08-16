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
                      <a class="nav-link link-dark active" href="http://127.0.0.1:8000/nosotros">Nosotros</a>
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

    <!-- NOSOTROS -->
    <div class="container mt-5 py-5">
        <h1 class="text-center fw-semibold mb-5">Sobre Nosotros</h1>
    <div class="row mt-4">
      <div class="col-md-6">
        <img src="img/comp1.jpg" class="img-fluid rounded" alt="Nosotros">
      </div>
      <div class="col-md-6">
        <h2>Nuestra Misión</h2>
        <p>En TECNOproducts, nos apasiona la tecnología y nos dedicamos a ofrecer las mejores recomendaciones de productos tecnológicos para ayudarte a tomar decisiones informadas. Nuestro equipo de expertos prueba y analiza los últimos gadgets y dispositivos para proporcionarte reseñas detalladas y objetivas.</p>
        <h2>¿Quiénes Somos?</h2>
        <p>Somos un grupo de entusiastas de la tecnología con años de experiencia en el sector. Nos mantenemos al día con las últimas tendencias y avances tecnológicos para ofrecerte contenido actualizado y relevante.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card">
          <img src="img/hombre1.jpg" class="w-100 h-100" alt="Equipo">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Editor en Jefe</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/mujer.jpg" class="w-100 h-100" alt="Equipo">
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">Especialista en Tecnología</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/hombre2.jpg" class="w-100 h-100" alt="Equipo">
          <div class="card-body">
            <h5 class="card-title">Mike Johnson</h5>
            <p class="card-text">Analista de Productos</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- FOOTER -->
      @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
