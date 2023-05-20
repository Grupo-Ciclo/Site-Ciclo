<?php 
include("blades/header.php");
?>

<!--CARROSSEL-->
<div id="carouselExampleIndicators" class="carousel slide">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active c-item">

      <img src="imgs/carrossel/slide1.png" class="d-block w-100 c-img" alt="slide1">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">texto incrivel!</p>
        <h1 class="display-1 fw-bolder text-capitalized">Texto incrivel!</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Sim!</button>
      </div>

    </div>

    <div class="carousel-item c-item">
      <img src="imgs/carrossel/slide2.png" class="d-block w-100 c-img" alt="slide2">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">texto incrivel!</p>
        <h1 class="display-1 fw-bolder text-capitalized">Texto incrivel!</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Sim!</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="imgs/carrossel/slide3.png" class="d-block w-100 c-img" alt="slide3">
      <div class="carousel-caption top-0 mt-4 ">
        <p class="mt-5 fs-3 text-uppercase">texto incrivel!</p>
        <h1 class="display-1 fw-bolder text-capitalized">Texto incrivel!</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Sim!</button>
      </div>
    </div>

  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
<!--CARROSSEL-->

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="imgs/render_lixeira/Trash_Front.png" alt="Imagem"  height="200px"  class="img-fluid mt-5 mb-5">
    </div>
    <div class="col-md-6 mt-5">
      <h2 class=" display-5 fw-bolder text-uppercase">Título do Conteúdo</h2>
      <p class="mt-3 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu enim eget quam malesuada vestibulum. Praesent nec nisl euismod, lobortis turpis non, varius tellus. Ut nec leo ut mi pharetra lobortis. Nam at fermentum ipsum.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mt-5">
      <h2 class=" display-5 fw-bolder text-uppercase">Título do Conteúdo</h2>
      <p class="mt-3 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu enim eget quam malesuada vestibulum. Praesent nec nisl euismod, lobortis turpis non, varius tellus. Ut nec leo ut mi pharetra lobortis. Nam at fermentum ipsum.</p>
    </div>
    <div class="col-md-6">
      <img src="imgs/render_lixeira/Trash_parallel.png" alt="Imagem"  height="200px"  class="img-fluid mt-5 mb-5">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <img src="imgs/render_lixeira/Trash_Tampa.png" alt="Imagem"  height="200px"  class="img-fluid mt-5 mb-5">
    </div>
    <div class="col-md-6 mt-5">
      <h2 class=" display-5 fw-bolder text-uppercase">Título do Conteúdo</h2>
      <p class="mt-3 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu enim eget quam malesuada vestibulum. Praesent nec nisl euismod, lobortis turpis non, varius tellus. Ut nec leo ut mi pharetra lobortis. Nam at fermentum ipsum.</p>
    </div>
  </div>
</div>





















<?php 
include("blades/footer.php");
?>