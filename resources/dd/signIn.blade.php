@extends('layout.layout')
@section('content')

  <div class="container">
  <div class="container">
    <div class="signUp-div">
      <form class="needs-validation" action="{{route('login')}}" method="POST" novalidate>
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
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
            </div><br>
            <div class="input-group">
                <input type="submit" class="btn intro-btn signin-submit" value="تسجيل الدخول" >
            </div>
            <div>
              @foreach($errors->all() as $error)
                {{$error}} <br>
              @endforeach
            </div>

          </div>
          <div class="form-group col-md-6 l-form-signUp signin-l-col">
              <label><b>انشاء حساب</b></label>
              <br>
              <label>قم بإنشاء حسابك الخاص بكل سهولة عن طريق الايميل</label>
              <br><br>
              <div class="input-group">
                <a href="{{route('register')}}" class="signUp-in-signIn">
                  <input class="btn intro-btn signin-submit" value="انشاء حساب">
                </a>

              </div>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>

  <script>

  </script>


  @endsection