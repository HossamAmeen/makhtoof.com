<!DOCTYPE html>
<html>

<head>
  <title>مخطوف</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="signUp-div">
      <form class="needs-validation" novalidate>
        <label><b>تعديل بيانات الحساب</b></label>
        <br>
        <label>قم بتعديل البيانات الخاصة بك</label>
        <br><br>

        <!-- Choose only one -- GREEN for successful data AND red for unseccessful data -->
        <!-- GREEN -->
        <div class="alert alert-success" id="alert" role="alert">
          تم حفظ البيانات بنجاح
        </div>

        <!-- RED -->
        <!-- <div class="alert alert-danger" id="alert" role="alert">
                    البريد الالكتروني مستخدم
                  </div> -->

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="validationCustomEmail">البريد الالكتروني <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="email" class="form-control" id="validationCustomEmail" placeholder="xx@xx.com"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل البريد الالكتروني
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="validationCustomfName">الاسم الأول <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustomfName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل الاسم الاول
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomsName">اسم العائلة <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustomsName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل اسم العائلة
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomState">المحافظة <span class="red-star"><sup>*</sup></span></label>
            <select id="inputState" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
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
            <select id="inputState" class="form-control" id="validationCustomCity" aria-describedby="inputGroupPrepend"
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
            <select id="inputState" class="form-control" id="validationCustomCity" aria-describedby="inputGroupPrepend"
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
              <input type="tel" class="form-control" id="validationCustomsName" pattern="^[0-9-+ ]*$" minlength="11"
                placeholder="" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل رقم المحمول المكون من 11 رقم
              </div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <div class="edit-prof-btns">
              <button type="button" class="btn intro-btn editProfile-btn editProfile-chgPass-btn" data-toggle="modal"
                data-target="#exampleModalCenter">تغيير كلمة المرور</button>
              <button type="submit" class="btn intro-btn editProfile-btn">حفظ البيانات</button>
            </div>
          </div>
        </div>
      </form>
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
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form class="needs-validation" novalidate>

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"><label><b>تغيير كلمة المرور</b></label>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-row">
              <!-- RED -->
              <!-- <div class="alert alert-danger" id="alert" role="alert">
                    البريد الالكتروني مستخدم
                  </div> -->

              <div class="form-group col-md-12">
                <br>
                <label for="validationCustomPass">كلمة المرور القديمة<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="validationCustomPass" placeholder=""
                    aria-describedby="inputGroupPrepend" minlength="8" required>
                  <div class="invalid-feedback">
                    ادخل كلمة المرور القديمة
                  </div>
                </div>
                <br>
                <label for="validationCustomPass"> كلمة المرور الجديدة<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input type="password" class="form-control" id="validationCustomPass pwd1" placeholder=""
                    aria-describedby="inputGroupPrepend" minlength="8" required>
                  <div class="invalid-feedback">
                    ادخل كلمة مرور تزيد عن ثمانية احرف
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn intro-btn profile-btn profile-newPost">تأكيد</button>

        </form>

      </div>
    </div>
  </div>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>