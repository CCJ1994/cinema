<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CINEMA</title>
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
        <a id="logo" class="navbar-brand " href="index.php"><img src="./img/logo.svg" width="50"></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">影城首頁</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=order">線上訂票</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                會員專區
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?do=reg">加入會員</a></li>
                <li><a class="dropdown-item" href="?do=login">會員登入</a></li>
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
  <footer class="text-center mb-1">
    <small>
      copyright &copy; 2021 <span style="color: #95a5a6;">CCJ Design</span>. All Rights Reserved
    </small>
  </footer>
</body>

</html>