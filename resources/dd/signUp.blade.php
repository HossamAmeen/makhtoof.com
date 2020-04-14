@extends('layout.layout')
@section('content')

  <div class="container">
    <div class="signUp-div">
      <form class="needs-validation" action="{{route('register')}}" method="POST" novalidate>
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="validationCustomEmail">البريد الالكتروني <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="email" class="form-control" name="email" id="validationCustomEmail" placeholder="xx@xx.com"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل البريد الالكتروني
              </div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="validationCustomPass">كلمة المرور <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="password" name="password" class="form-control" id="validationCustomPass" placeholder=""
                aria-describedby="inputGroupPrepend" minlength="8" required>
              <div class="invalid-feedback">
                ادخل كلمة مرور تزيد عن ثمانية احرف
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="validationCustomfName">الاسم الأول <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="text" class="form-control"  name="firstname" id="validationCustomfName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل الاسم الاول
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomsName">اسم العائلة <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="text" class="form-control"  name="lastname" id="validationCustomsName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل اسم العائلة
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomState">المحافظة <span class="red-star"><sup>*</sup></span></label>
            <select id="inputState" name="governate" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
              required>
              <option></option>
              <option>...
              <option>
            </select>
            <div class="invalid-feedback">
              اختر محافظة
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomCity">المدينة <span class="red-star"><sup>*</sup></span></label>
            <select id="inputState" name="city" class="form-control" id="validationCustomCity" aria-describedby="inputGroupPrepend"
              required>
              <option></option>
              <option>...
              <option>
            </select>
            <div class="invalid-feedback">
              اختر مدينة
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
              <label for="validationCustomCity">الجنس <span class="red-star"><sup>*</sup></span></label>
              <select id="inputState" name="gender" class="form-control" id="validationCustomCity" aria-describedby="inputGroupPrepend"
                required>
                <option></option>
                <option>ذكر</option>
                <option>انثى</option>

              </select>
              <div class="invalid-feedback">
                اختر النوع
              </div>
          </div>
          <div class="form-group col-md-3">
              <label for="validationCustomsName">رقم المحمول <span class="red-star"><sup>*</sup></span></label>
              <div class="input-group">
                <input type="tel" name="phone" class="form-control" id="validationCustomsName" pattern="^[0-9-+ ]*$" minlength="11" placeholder=""
                  aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  ادخل رقم المحمول المكون من 11 رقم
                </div>
              </div>
          </div>
          <div class="form-group col-md-6">
            <input type="submit" class="btn intro-btn signup-submit" value="انشاء الحساب" >
          </div>
        </div>
      </form>
    </div>
  </div>

 @endsection

