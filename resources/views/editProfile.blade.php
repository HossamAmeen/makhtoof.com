@extends('layout.layout')
@section('content')


  <div class="container">
    <div class="signUp-div">
      <form class="needs-validation" action="{{route('saveeditprofile')}}" method="post" novalidate>
          {{csrf_field()}}
        <label><b>تعديل بيانات الحساب</b></label>
        <br>
        <label>قم بتعديل البيانات الخاصة بك</label>
        <br><br>

          @if (session('yes'))
             @if(session('yes')==2)
                  <div>
                      <div class="alert alert-danger" id="alert" role="alert">
                          خطأ فى كلمة المرور .. حاول مرة اخرى
                      </div>
                      <br> <br>
                  </div>
                 @endif
                 @if(session('yes')==3)
                     <div>
                         <div class="alert alert-success" id="alert" role="alert">
                             تم تغيير كلمة المرور بنجاح
                         </div>
                         <br> <br>
                 @endif
          @endif
                         @foreach($errors->all() as $error)

                             <div>
                                 <div class="alert alert-danger" id="alert" role="alert">
                                     البريد الالكتروني مستخدم
                                 </div>
                                 <br> <br>
                             </div>
                         @endforeach
        @if($yes==1)
          <div>
            <div class="alert alert-success" id="alert" role="alert">
              تم حفظ البيانات بنجاح
            </div>
            <br> <br>
          @endif
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="validationCustomEmail">البريد الالكتروني <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="email" name="email" value="{{$user->email}}" class="form-control" id="validationCustomEmail" placeholder="xx@xx.com"
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
              <input type="text" name="firstname" value="{{$user->firstName}}" class="form-control" id="validationCustomfName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل الاسم الاول
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="validationCustomsName">اسم العائلة <span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="text" name="lastname" value="{{$user->lastName}}" class="form-control" id="validationCustomsName" placeholder=""
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                ادخل اسم العائلة
              </div>
            </div>
          </div>
          <div class="form-group col-md-3">
              <label for="validationCustomCity">الجنس <span class="red-star"><sup>*</sup></span></label>
              <select id="inputState" name="gender"  class="form-control" id="validationCustomCity" aria-describedby="inputGroupPrepend"
                required>
                <option></option>
                <option {{$user->gender=='ذكر'?'selected':null}} >ذكر</option>
                <option {{$user->gender=='انثى'?'selected':null}}>انثى</option>
  
              </select>
              <div class="invalid-feedback">
                اختر النوع
              </div>
            </div>
            <div class="form-group col-md-3">
              <label for="validationCustomsName">رقم المحمول <span class="red-star"><sup>*</sup></span></label>
              <div class="input-group">
                <input type="tel" name="phone" value="{{$user->phone}}" class="form-control" id="validationCustomsName" pattern="^[0-9-+ ]*$" minlength="11" maxlength="11"
                  placeholder="" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  ادخل رقم المحمول المكون من 11 رقم
                </div>
              </div>
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            
          </div>
          <div class="form-group col-md-3">
            
          </div>
          <div class="form-group col-md-6" style="padding-top:70px">
            <div class="edit-prof-btns" >
                <button type="button" class="btn intro-btn editProfile-btn editProfile-chgPass-btn" data-toggle="modal"
                data-target="#exampleModalCenter">تغيير كلمة المرور</button>
              <button type="submit" class="btn intro-btn editProfile-btn">حفظ البيانات</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalCenterTitle"><label><b>تغيير كلمة المرور</b></label>
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form class="needs-validation" action="{{route('edituserpassword')}}" method="post" novalidate>
      {{csrf_field()}}
    <div class="modal-body">

        <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <div class="form-row">
          <div class="form-group col-md-12">
            <br>
            <label for="validationCustomPass">كلمة المرور القديمة<span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="password" name="oldpass" class="form-control" id="validationCustomPass" placeholder=""
                aria-describedby="inputGroupPrepend" minlength="8" required>
              <div class="invalid-feedback">
                ادخل كلمة المرور القديمة
              </div>
            </div>
            <br>
            <label for="validationCustomPass"> كلمة المرور الجديدة<span class="red-star"><sup>*</sup></span></label>
            <div class="input-group">
              <input type="password" name="newpass" class="form-control" id="validationCustomPass pwd1" placeholder=""
                aria-describedby="inputGroupPrepend" minlength="8" required>
              <div class="invalid-feedback">
                ادخل كلمة مرور تزيد عن ثمانية احرف
              </div>
            </div>
          </div>


    </div>
    <div class="modal-footer">
      <button type="submit" class="btn intro-btn profile-btn profile-newPost">تأكيد</button>
    </div>
      </form>
  </div>
</div>
</div>
@foreach($home as $h)
  @endforeach

  @endsection