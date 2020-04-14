<!DOCTYPE html>
<html>

<head>
  <title>مخطوف</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="assets/css/rtl.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light" id="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
      <img src="assets/imgs/logo.png" width="40" height="40" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.html">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newPost.html">نشــر</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="searching.html">بحــث</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map.html">الخريطة</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.html">من نحن</a>
        </li>
        <!-- if signed in -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            احمد محمود
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile.html">الحساب</a>
            <a class="dropdown-item" href="editProfile.html">تعديل الحساب</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="signIn.html">تسجيل الخروج</a>
          </div>
        </li>
        <!-- if NOT signed in -->
        <!-- <li>
            <a class="nav-link" href="signIn.html">تسجيل الدخول</a>
        </li> -->
      </ul>
    </div>
  </nav>


  <div class="container">
    <div class="row intro-row">
      <div class="col-lg-6">
        <div class="intro-txt">
          <span class="intro-txt-hello">مرحبـًا</span>
          <br><br>
          <span class="intro-txt-details">Lorem ipsum dolor sit amet elit nibh, ut malesuada id eleifend et,
            erat. Nullam wisi at sollicitudin fermentum metus.Lorem ipsum dolor sit amet elit nibh, ut malesuada id
            eleifend et,
            erat. Nullam wisi at sollicitudin fermentum metus.</span>
          <br><br>
          <div class="intro_btn-div">
            <button type="button" class="btn intro-btn">بحث</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="img-thumbnail intro-img" src="assets/imgs/intro_pic.png">
      </div>
    </div>
  </div>




  <div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-div" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 carosel-img" src="assets/imgs/car_1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet elit nibh</h5>
            <p>Lorem ipsum dolor sit amet elit nibh, ut malesuada id eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus.Lorem ipsum dolor sit amet elit nibh, ut malesuada id
              eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carosel-img" src="assets/imgs/car_1.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet elit nibh</h5>
            <p>Lorem ipsum dolor sit amet elit nibh, ut malesuada id eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus.Lorem ipsum dolor sit amet elit nibh, ut malesuada id
              eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carosel-img" src="assets/imgs/car_1.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet elit nibh</h5>
            <p>Lorem ipsum dolor sit amet elit nibh, ut malesuada id eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus.Lorem ipsum dolor sit amet elit nibh, ut malesuada id
              eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carosel-img" src="assets/imgs/car_1.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet elit nibh</h5>
            <p>Lorem ipsum dolor sit amet elit nibh, ut malesuada id eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus.Lorem ipsum dolor sit amet elit nibh, ut malesuada id
              eleifend et,
              erat. Nullam wisi at sollicitudin fermentum metus</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <div class="adv-div">
    <div class="container">
      <div class="row ">
        <div class="col">
          <div class="coll">
            <img class="adv-img" src="assets/imgs/adv_1.png">
            <br>
            <span class="adv-info">Lorem ipsum</span>
          </div>
        </div>
        <div class="col">
          <div class="coll">
            <img class="adv-img" src="assets/imgs/adv_1.png">
            <br>
            <span class="adv-info">Lorem ipsum</span>
          </div>
        </div>
        <div class="col">
          <div class="coll">
            <img class="adv-img" src="assets/imgs/adv_1.png">
            <br>
            <span class="adv-info">Lorem ipsum</span>
          </div>
        </div>
        <div class="col">
          <div class="coll">
            <img class="adv-img" src="assets/imgs/adv_1.png">
            <br>
            <span class="adv-info">Lorem ipsum</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="info">
    <div class="container">
      <div class="row">
        <div class="col info-col">
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
        </div>
        <div class="col info-col">
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
          <br><br>
          </span>Lorem ipsum</span>
        </div>
        <div class="col">
          <span class="grey_info_txt info-title">اتصل بنا</span>
          <br><br>
          <img class="icon-img" src="assets/imgs/mail.png">
          <span class="true_info_txt info-title">البريد الاليكتروني</span>
          <br>
          <span class="true_info_txt">Lorem@ipsum.com</span>
          <br><br>
          <img class="icon-img" src="assets/imgs/phone.png">
          <span class="true_info_txt info-title">رقم التليفون</span>
          <br>
          <span class="true_info_txt">0123456789</span>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col footer-col">
          <img class="footer-icon" src="assets/imgs/facebook.png">
          <img class="footer-icon" src="assets/imgs/twitter.png">
          <img class="footer-icon" src="assets/imgs/youtube.png">
        </div>
        <div class="col footer-col dis"></div>
        <div class="col footer-col">
          <span>
            جميع الحقوق محفوظة
          </span>
        </div>
      </div>
    </div>

  </div>

</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>