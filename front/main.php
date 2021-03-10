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
        <a class="navbar-brand d-none d-md-block">立即訂票</a>
        <div class="nav-item dropdown d-md-none mx-auto">
          <button type="button" class="btn btn-secondary" id="orderBtn">立即訂票</button>
        </div>
        <div class="navbar-collapse d-none d-md-block">
          <form action="api/order.php" method="post">
            <ul class="navbar-nav ">
              <li class="nav-item mx-1 active">
                <select class="form-select border-0 bg-light" name="movie">
                  <option selected>電影查詢</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </li>
              <li class="nav-item mx-1">
                <select class="form-select border-0 bg-light" name="date">
                  <option selected>請選擇日期</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </li>
              <li class="nav-item mx-1">
                <select class="form-select border-0 bg-light" name="session">
                  <option selected>請選擇場次</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </li>
              <li class="nav-item mx-1">
                <input class="btn btn-secondary btn-sm" type="submit" value="訂票">
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </section>
  <section>
    <div id="cover" style="display:none;">
      <div class="modalbg"></div>
      <div id="coverr" class="overflow-hidden">
        <div class="text-end mt-3 me-3 text-muted" style="cursor: pointer;"><i id="back" class="fas fa-times"></i></div>
        <form class="container d-flex flex-wrap my-2 pb-5" action="api/order.php" method="post">
          <div class=" col-12  form-floating my-3">
            <select class="form-select" id="movieSlt" name="movie">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="movieSlt">請選擇電影</label>
          </div>
          <div class=" col-12  form-floating my-3">
            <select class="form-select" id="dateSlt" name="date">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="dateSlt">請選擇日期</label>
          </div>
          <div class=" col-12  form-floating my-3">
            <select class="form-select" id="sessSlt" name="session">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="sessSlt">請選擇場次</label>
          </div>
          <div class="d-flex col justify-content-end">
            <input class="btn btn-secondary" type="submit" value="訂票">
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="mb-5">
    <div class="container d-flex justify-content-center text-center my-5">
      <div class="typeBtn typeBtnactive" id="nowBtn">現正熱映</div>
      <div class="typeBtn" id="comingBtn">即將上映</div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4" id="nowMovie">
        <a href="?do=intro&id=1">
        <div class="col">
          <div class="card h-100">
            <img src="./img/movie1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">我沒有談的那場戀愛</h5>
            </div>
            <div class="card-footer text-end">
              <small class="text-muted"><b>10</b> <i class="fas fa-heart"></i></small>
            </div>
          </div>
        </div>
      </a>
        <div class="col">
          <div class="card h-100">
            <img src="./img/movie2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">複身犯</h5>
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
              <h5 class="card-title">當男人戀愛時</h5>
            </div>
            <div class="card-footer text-end">
              <small class="text-muted"><b>10</b> <i class="far fa-heart"></i></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $("#nowBtn").click(function () {
      $(".typeBtn").removeClass("typeBtnactive");
      $(this).addClass("typeBtnactive");
      $("#comingMovie").hide();
      $("#nowMovie").show();
    })
    $("#comingBtn").click(function () {
      $(".typeBtn").removeClass("typeBtnactive");
      $(this).addClass("typeBtnactive");
      $("#nowMovie").hide();
      $("#comingMovie").show();
    })

    $("#orderBtn").click(function () {
      $("#cover").fadeIn();
    })
    $("#back,.modalbg").click(function () {
      $("#cover").fadeOut();
    })
  </script>