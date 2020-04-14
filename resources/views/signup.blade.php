@extends('layout.layout')
@section('content')

  <div class="container">
    <div class="signUp-div">
        <label><b>انشاء حساب</b></label>
        <br>
        <label>قم بإنشاء حسابك الخاص بكل سهولة عن طريق الايميل</label>
        <br><br>
        @foreach($errors->all() as $error)

            <div>
                <div class="alert alert-danger" id="alert" role="alert">
                    البريد الالكتروني مستخدم
                </div>
                <br> <br>
            </div>
        @endforeach
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
            <select id="inputState" class="form-control countries" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="governate" required>
                      <option disabled selected hidden></option>
                    </select>
            <div class="invalid-feedback">
              اختر محافظة
            </div>
          </div>
          <div class="form-group col-md-3 option">
            <label for="validationCustomCity">المدينة <span class="red-star"><sup>*</sup></span></label>
            <select id="inputState" class="form-control غيرمحدد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>

                    </select>
            <select id="inputState" class="form-control اسوان" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                    </select>
                    <select id="inputState" class="form-control اسيوط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاسماعيلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الجيزة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاسكندرية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاقصر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control البحرالاحمر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control البحيرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الدقهلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control السويس" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الشرقية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الغربية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الفيوم" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control القاهرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control القليوبية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control المنوفية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control المنيا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الوادي_الجديد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control بني_سويف" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control بورسعيد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control جنوب_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control دمياط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control سوهاج" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control شمال_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control قنا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control كفرالشيخ" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control مطروح" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden></option>
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
                <input type="tel" name="phone" class="form-control" id="validationCustomsName" pattern="^[0-9-+ ]*$" minlength="11" maxlength="11" placeholder=""
                  aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  ادخل رقم المحمول المكون من 11 رقم
                </div>
              </div>
          </div>
          <div class="form-group col-md-3">
          </div>
          <div class="form-group col-md-3">
            <br><br><span class="termsLink"> بإنشاء الحساب تكون قد قبلت <span class="termsLink_href"><a href="{{route('terms')}}">شروط استخدام</a></span> الموقع </span></div>
          <div class="form-group col-md-6"></div>

          <div class="form-group col-md-4">
            

          </div>
          <div class="form-group col-md-2">
            <input type="submit" class="btn intro-btn signup-submit" value="انشاء الحساب" >
          </div>
        </div>
      </form>


    </div>
  </div>
  @foreach($home as $h)
  @endforeach
 @endsection

