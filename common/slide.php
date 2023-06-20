<div class="slideshow">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/img/slide1.jpg' ?>" class="d-block w-100" alt="슬라이드 영역 이미지1">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/img/slide2.jpg' ?>" class="d-block w-100" alt="슬라이드 영역 이미지2">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/img/slide3.jpg' ?>" class="d-block w-100" alt="슬라이드 영역 이미지3">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="http://<?= $_SERVER['HTTP_HOST'] . '/php_source/project/img/slide4.jpg' ?>" class="d-block w-100" alt="슬라이드 영역 이미지4">
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
</div>