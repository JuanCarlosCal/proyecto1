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
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/servicios">Servicios</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark" href="http://127.0.0.1:8000/noticias">Noticias</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link-dark active" href="http://127.0.0.1:8000/contactos">Contactos</a>
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
    <!-- CONTACTOS -->
    <section class="container mt-5 py-5">
          <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                  <h1 class="text-center fw-semibold mb-5">Contactanos</h1>
                  <p class="mb-5 text-justify">Puedes contactarnos a través de nuestro formulario de contacto:</p>
                  <form id="contactForm" class="bg-light p-3 rounded-1">
                      <div class="mb-3">
                          <label for="name" class="form-label fw-semibold">Nombre</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                          <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>
                     </div>
                      <div class="mb-3">
                        <label for="subject" class="form-label fw-semibold">Asunto</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                      </div>
                      <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
              </div>
          </div>
    </section>
      
    <!-- FOOTER -->
    @include('footer')

</body>

</html>