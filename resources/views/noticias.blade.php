<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
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
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/servicios">Servicios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark active" href="http://127.0.0.1:8000/noticias">Noticias</a>
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

    <!-- NOTICIAS -->
    <div class="container mt-5 py-5">
    <h1 class="text-center mb-5 fw-semibold">Últimas Noticias</h1>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card mb-4 h-100">
                <img src="img/lanzamiento.jpg" class="w-100 h-50" alt="Noticia 1">
          <div class="card-body">
            <h5 class="card-title h-25">Lanzamiento del nuevo smartphone XYZ</h5>
            <p class="card-text">El nuevo smartphone XYZ ha sido lanzado al mercado, ofreciendo características innovadoras y un rendimiento superior...</p>
            <a href="#" class="btn btn-primary">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 h-100">          
                <img src="img/update.jpg" class="w-100 h-50" alt="Noticia 2">
          <div class="card-body">
            <h5 class="card-title h-25">Actualización de software para el dispositivo ABC</h5>
            <p class="card-text">La última actualización de software para el dispositivo ABC incluye nuevas funcionalidades y mejoras de seguridad...</p>
            <a href="#" class="btn btn-primary">Leer más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card mb-4 h-100">
                <img src="img/evento.jpg" class="w-100 h-50" alt="Noticia 3">
          <div class="card-body">
            <h5 class="card-title h-25">Evento tecnológico anual TechFest 2024</h5>
            <p class="card-text">El evento TechFest 2024 se llevará a cabo en la ciudad de Tecnología, reuniendo a los principales actores del sector...</p>
            <a href="#" class="btn btn-primary">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 h-100">
                <img src="img/revolucion.jpg" class="w-100 h-50" alt="Noticia 4">
          <div class="card-body">
            <h5 class="card-title h-25">Nuevo gadget revolucionario en el mercado</h5>
            <p class="card-text">El nuevo gadget revolucionario ha sido presentado, prometiendo cambiar la forma en que interactuamos con la tecnología...</p>
            <a href="#" class="btn btn-primary">Leer más</a>
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