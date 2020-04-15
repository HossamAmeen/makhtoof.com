<!DOCTYPE html>
<html>

<head>
  <title>مخطوف</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @if(isset($h))
  <link rel="shortcut icon" href="images/{{$h->small_logo}}" type="image/x-icon" />
  @endif
  <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
  <link rel="stylesheet"  href="{{ asset('css/style.css') }}">

</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light" id="navigation">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   @if(isset($h))
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="images/{{$h->main_logo}}" width="40" height="40" alt="">
  </a>
  @endif
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">الصفحة الرئيسية</a>
      </li>

      @if(Auth::check())
        @if(Auth::user()->isAdmin==0)
        <li class="nav-item">
          <a class="nav-link" href="{{route('newpost')}}">إعلن عن مفقود</a>
        </li>
        @endif
      @endif
        <li class="nav-item">
          <a class="nav-link" href="{{route('search')}}">بحــث</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('map')}}">الخريطة</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutus')}}">من نحن</a>
          </li>

          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">تسجيل الدخول</a>
        </li>
        @endif
          

      <!-- if signed in -->
      @if(Auth::check())
         @if(Auth::user()->isAdmin==0)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->firstName}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('profile')}}">الحساب</a>
            <a class="dropdown-item" href="{{route('editprofile')}}">تعديل الحساب</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}">تسجيل الخروج</a>
          </div>
        </li>
        @endif
        @if(Auth::user()->isAdmin==1)
        <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">الذهاب الى لوحة التحكم </a>
        </li>
        @endif
      @endif
    </ul>
  </div>
</nav>


@yield('content')


<div class="info">
  <div class="container">
    <div class="row">
        <div class="col info-col">
            <span><a class="nav-link icon-img-href" href="{{route('home')}}">الصفحة الرئيسية</a></span>
            
            <span><a class="nav-link icon-img-href"  href="{{route('search')}}">بحث</a></span>
          
            <span><a class="nav-link icon-img-href"  href="{{route('map')}}">الخريطة</a></span>
          
            <span><a class="nav-link icon-img-href"  href="{{route('aboutus')}}">من نحن</a></span>
          </div>
    
      <div class="col">
        <span class="grey_info_txt info-title">اتصل بنا</span>
        <br><br>
        <img class="icon-img" src="{{asset('imgs/mail.png')}}">
        <span class="true_info_txt info-title">البريد الاليكتروني</span>
        <br>
         @if(isset($h))
        <span class="true_info_txt"> {{$h->about_email}} </span>
        @endif
        <br><br>
        <img class="icon-img" src="{{asset('imgs/phone.png')}}">
        <span class="true_info_txt info-title">رقم التليفون</span>
        <br>
         @if(isset($h))
        <span class="true_info_txt"> {{$h->about_phone}}  </span>
        @endif
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col footer-col">
           @if(isset($h))
        @if($h->about_facebook)
        @if ($h->about_facebook[0]=="h")
        <a href="{{$h->about_facebook}}" ><img class="footer-icon" src="{{asset('imgs/facebook.png')}}"></a>
        @else
        <a href="https://{{$h->about_facebook}}" ><img class="footer-icon" src="{{asset('imgs/facebook.png')}}"></a>
        @endif
        @endif

        @if($h->about_twiteer)
        @if ($h->about_twiteer[0]=="h")
        <a href="{{$h->about_twiteer}}" ><img class="footer-icon" src="{{asset('imgs/twitter.png')}}"></a>
        @else 
        <a href="https://{{$h->about_twiteer}}" ><img class="footer-icon" src="{{asset('imgs/twitter.png')}}"></a>
        @endif
        @endif

        @if($h->about_youtube)
        @if ($h->about_youtube[0]=="h")
        <a href="{{$h->about_youtube}}" ><img class="footer-icon" src="{{asset('imgs/youtube.png')}}"></a>
        @else
        <a href="https://{{$h->about_youtube}}" ><img class="footer-icon" src="{{asset('imgs/youtube.png')}}"></a>
        @endif
        @endif

        @if($h->about_linkedin)
        @if ($h->about_linkedin[0]=="h")
        <a href="{{$h->about_linkedin}}" ><img class="footer-icon" src="{{asset('imgs/social-instagram-new-circle-512.png')}}"></a>
        @else 
        <a href="https://{{$h->about_linkedin}}" ><img class="footer-icon" src="{{asset('imgs/social-instagram-new-circle-512.png')}}"></a>
        @endif
        @endif
        @endif
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

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/state-city.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</html>