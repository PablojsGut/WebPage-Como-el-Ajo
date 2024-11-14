<style>
  .carousel-img-container {
  position: relative;
}

.carousel-img {
  max-height: 500px;
  object-fit: cover;
  width: 100%;
}

.carousel-img-container::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1));
}
</style>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <div class="carousel-img-container">
        <img src="img/Como el Ajo/bg_1.jpg" class="d-block w-100 carousel-img" alt="Descripción de la imagen">
      </div>
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>-->
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>¡Somos "Como el Ajo"!</h1>
          <p class="opacity-75">Te entregamos un servicio de diseño, armado y mejoramiento de huertos urbanos con riego tecnificado.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="carousel-img-container">
        <img src="img/Como el Ajo/example_2.jpg" class="d-block w-100 carousel-img" alt="Descripción de la imagen">
      </div>
      <div class="container">
        <div class="carousel-caption">
          <h1>Hacemos almacigos a tu pinta</h1>
          <p>Con nustras macetas modulares podras armar tu huerto a tu medida.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
      
    <div class="carousel-item">
      <div class="carousel-img-container">
        <img src="img/Como el Ajo/example_3.jpg" class="d-block w-100 carousel-img" alt="Descripción de la imagen">
      </div>
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Estai "Como el Ajo" con tu cultivo</h1>
          <p>Contamos con talleres y asesoramiento para que aprendas a cuidar tus cultivos.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


