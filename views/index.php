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
      <div class="carousel-caption top-3 mt-5 ">
        <h1 class="display-1 fw-bolder text-capitalized">Ciclo</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Conheça o Grupo</button>
      </div>

    </div>

    <div class="carousel-item c-item">
      <img src="imgs/carrossel/slide2.png" class="d-block w-100 c-img" alt="slide2">
      <div class="carousel-caption top-4 mt-3 ">
        <h1 class="display-1 fw-bolder text-capitalized">Treashure</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Conheça a proposta</button>
      </div>
    </div>

    <div class="carousel-item c-item">
      <img src="imgs/carrossel/slide3.png" class="d-block w-100 c-img" alt="slide3">
      <div class="carousel-caption top-4 mt-3 ">
        <h1 class="display-1 fw-bolder text-capitalized">Novidades</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-2">Veja noticias</button>
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
  <div class="row justify-content-center">
    <div class="col-4">
      <img src="imgs/corpo/Parallel.png" alt="Imagem"  height="200px"  class=" mt-5 mb-5" style="">
    </div>
    <div class="col-md-6 mt-5">
      <h2 class=" display-5 fw-bolder text-uppercase">Lixeira</h2>
      <p class="mt-3 fs-5">Uma lixeira "Smart" para reciclagem de plástico.</p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-6">
      <h2 class=" display-5 fw-bolder text-uppercase">Pontos</h2>
      <p class="mt-3 fs-5">Receba pontos com base no peso do plastico que foi depositado. Use os pontos para resgatar recompensas!</p>
    </div>
    <div class="col-md-6">
      <img src="imgs/corpo/Points_Parallel0060.png" alt="Imagem"  height="200px"  class="mt-5 mb-5">
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-4">
      <img src="imgs/corpo/celular_tmp.png" alt="Imagem"  height="200px"  class="mt-5 mb-5">
    </div>
    <div class="col-4">
      <h2 class=" display-5 fw-bolder text-uppercase">Baixe o APP</h2>
      <p class="mt-3 fs-5">Utilize o aplicativo de celular para se comunicar com a lixeira.</p>
    </div>
  </div>
</div>





















<?php 
include("blades/footer.php");
?>