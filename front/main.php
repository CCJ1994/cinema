<section id="bannerSlider">
  <div id="mycaption" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#mycaption" data-bs-slide-to="0" class="active"></button>
      <li data-bs-target="#mycaption" data-bs-slide-to="1"></button>
      <li data-bs-target="#mycaption" data-bs-slide-to="2"></button>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item vh-100 active ">
        <img src="./img/1.jpg" class="w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block d-flex flex-column align-items-center">
          <h1>Welcome</h1>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="./img/2.jpg" class="w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block d-flex flex-column align-items-center">
          <h1>Enjoy by your self.</h1>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item vh-100">
        <img src="./img/3.jpg" class="w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block d-flex flex-column align-items-center">
          <h1>Taste Good</h1>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mycaption" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mycaption" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<section>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand d-none d-md-block">????????????</a>
      <div class="nav-item dropdown d-md-none mx-auto">
        <button type="button" class="btn btn-secondary" id="orderBtn">????????????</button>
      </div>
      <div class="navbar-collapse d-none d-md-block">
        <form action="api/order.php" method="post">
          <ul class="navbar-nav ">
            <li class="nav-item mx-1 active">
              <select class="form-select border-0 bg-light" name="movie">
                <option selected>????????????</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </li>
            <li class="nav-item mx-1">
              <select class="form-select border-0 bg-light" name="date">
                <option selected>???????????????</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </li>
            <li class="nav-item mx-1">
              <select class="form-select border-0 bg-light" name="session">
                <option selected>???????????????</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </li>
            <li class="nav-item mx-1">
              <input class="btn btn-secondary btn-sm" type="submit" value="??????">
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</section>
<section>
  <div id="orderCover"  style="display:none;">
  <div class="modalbg"></div>
    <div id="coverr" class="overflow-hidden">
      <div class="text-end mt-3 me-3 text-muted" style="cursor: pointer;"><i class="fas fa-times close"></i></div>
      <form class="container d-flex flex-wrap my-2 pb-5" action="api/order.php" method="post">
        <div class=" col-12  form-floating my-3">
          <select class="form-select" id="movieSlt" name="movie">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="movieSlt">???????????????</label>
        </div>
        <div class=" col-12  form-floating my-3">
          <select class="form-select" id="dateSlt" name="date">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="dateSlt">???????????????</label>
        </div>
        <div class=" col-12  form-floating my-3">
          <select class="form-select" id="sessSlt" name="session">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="sessSlt">???????????????</label>
        </div>
        <div class="d-flex col justify-content-end">
          <input class="btn btn-secondary" type="submit" value="??????">
        </div>
      </form>
    </div>
  </div>
</section>
<section class="mb-5">
  <div class="container d-flex justify-content-center text-center my-5">
    <div class="typeBtn typeBtnactive" id="nowBtn">????????????</div>
    <div class="typeBtn" id="comingBtn">????????????</div>
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="nowMovie">
      <div class="col">
        <a href="?do=intro&id=1">
          <div class="card h-100">
            <img src="./img/movie1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">???????????????????????????</h5>
            </div>
        </a>
        <div class="card-footer text-end">
          <small class="text-muted"><b>10</b> <i class="fas fa-heart"></i></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="./img/movie2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">?????????</h5>
        </div>
        <div class="card-footer text-end">
          <small class="text-muted"><b>10</b> <i class="far fa-heart"></i></small>
        </div>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4" id="comingMovie" style="display:none;">
    <div class="col">
      <div class="card h-100">
        <img src="./img/movie4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">??????????????????</h5>
        </div>
        <div class="card-footer text-end">
          <small class="text-muted"><b>10</b> <i class="far fa-heart"></i></small>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
