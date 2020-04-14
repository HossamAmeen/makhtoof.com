@extends('layout.layout')
@section('content')

  <div class="container">
  <div class="container">
    <div class="signUp-div">


        <div class="form-row">
          <div class="form-group col-md-6">

              <form class="needs- validation" action="{{route('login')}}" method="POST" novalidate>
                  {{ csrf_field() }}
            @foreach($errors->all() as $error)
              <div>
                <div class="alert alert-danger" style="width: 70%;"id="alert" role="alert">
                  خطأ فى اسم المسخدم او كلمة المرور
                </div> <br>
              </div>

            @endforeach
            <label for="validationCustomEmail">البريد الالكتروني <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="email" name="email" class="form-control" id="validationCustomEmail" placeholder="xx@xx.com"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل البريد الالكتروني
              </div>
            </div>
            <br>
            <label for="validationCustomPass">كلمة المرور <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="password" name="password" class="form-control" id="validationCustomPass" placeholder=""
                aria-describedby="inputGroupPrepend" minlength="8" required>
              <div class="invalid-feedback">
                ادخل كلمة مرور تزيد عن ثمانية احرف
              </div>
            </div>
            <br>
            <span class="termsLink"> بتسجيل الدخول تكون قد قبلت <span class="termsLink_href"><a href="{{route('terms')}}">شروط استخدام</a></span> الموقع </span>
            <br><br>
            <div class="input-group">
                <input type="submit" class="btn intro-btn signin-submit" value="تسجيل الدخول" >
            </div>
              </form>
          </div>

          <div class="form-group col-md-6 l-form-signUp signin-l-col">
              <label><b>انشاء حساب</b></label>
              <br>
              <label>قم بإنشاء حسابك الخاص بكل سهولة عن طريق الايميل</label>
              <br><br>
              <div class="input-group">
                <a href="{{route('register')}}" class="signup-submit">
                    <button class="btn intro-btn signup-submit">انشاء حساب</button>
                  </a>

              </div>
          </div>
        </div>

    </div>
    </div>
  </div>

  <script>

  </script>
@foreach($home as $h)
  @endforeach

  @endsection