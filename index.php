<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CINEMA</title>
  <link rel="shortcut icon" type="image/x-svg" href="./img/icon.svg">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/splide.min.css">
  <link rel="stylesheet" href="./css/mystyle.css">
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/myjs.js"></script>
  <script src="https://kit.fontawesome.com/7e94f0c211.js" crossorigin="anonymous"></script>
  <script src="./js/splide.min.js"></script>
</head>

<body>
  <header id="navMenu" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
        <?php
        if($_SESSION['login']=='admin'){  ?>
        <a id="logo" class="navbar-brand " href="backend.php"><img src="./img/logo.svg" width="50"></a>
      <?php  }else{  ?>
        <a id="logo" class="navbar-brand " href="index.php"><img src="./img/logo.svg" width="50"></a>
      <?php  }  ?>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">影城首頁</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=order">線上訂票</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                會員專區
              </a>
              <ul class="dropdown-menu">
                <?php
                if(empty($_SESSION['login'])){ ?>
                  <li><a class="dropdown-item" href="?do=reg">加入會員</a></li>
                  <li><a class="dropdown-item" id="loginBtn" style="cursor:pointer;">會員登入</a></li>
              <?php  }else{   ?>
                <li><a class="dropdown-item" href="?do=mem"><?=$_SESSION['login']?>的帳戶</a></li>
                <li><a class="dropdown-item" href="api/logout.php">登出</a></li>
            <?php  }  ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php
  $do=(isset($_GET['do']))?$_GET['do']:'main';
  $file="./front/".$do.".php";
  if(file_exists($file)){
    include_once $file;
  }else{
    include_once "./front/main.php";
  }
  ?>
  <section>
    <div id="loginCover" style="display:none;">
      <div class="modalbg"></div>
      <div id="coverr" class="overflow-hidden">
        <div class="text-end mt-3 me-3 text-muted" style="cursor: pointer;"><i class="fas fa-times close"></i></div>
        <h3 class="text-center">會員登入</h3>
        <form class="container d-flex flex-wrap justify-content-center my-3 pb-5" action="api/login.php" method="post">
          <div class="form-floating my-2 ">
            <input type="text" class="form-control" id="acc" placeholder="account" name="acc"
              required>
            <label for="acc">帳號</label>
          </div>
          <div class="form-floating my-2">
            <input type="password" class="form-control" id="pw" placeholder="Password" name="pw"
              required>
            <label for="pw">密碼</label>
          </div>
          <div class="col-12 text-center my-2">
            <a class="text-muted" href="api/findpw.php"><small>忘記密碼?</small></a>
            <a class="text-muted" href="?do=reg"><small>加入會員</small></a>
          </div>
          <div class="col-12 text-center my-2">
            <input type="submit" style="background: transparent;color: #34495e;border: 0px;" value="Sign In">
            <i class="fas fa-sign-in-alt"></i>
          </div>

        </form>
      </div>
    </div>
  </section>
  <footer class="text-center mb-1">
    <small>
      copyright &copy; 2021 <span style="color: #95a5a6;">CCJ Design</span>. All Rights Reserved
    </small>
  </footer>
  
</body>

</html>