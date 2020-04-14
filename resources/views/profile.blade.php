@extends('layout.layout')
@section('content')


  <div class="container">
    <div class="profile-div">
      <div class="row profile-head">
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
          <span class="profile-Username"><b> {{Auth::user()->firstName }}</b></span>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
          <div class="profile-div-btns">
            <a href="{{route('newpost')}}"><button class="btn intro-btn profile-btn porfile-hdr-btn profile-newPost">منشور
                جديد</button></a>
            <a href="{{route('editprofile')}}" class="btn intro-btn profile-btn porfile-hdr-btn profile-editProfile" data-toggle="modal"
                    data-target="#">تعديل الحساب</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container">

          @if(count($posts)>0)
    <div class="modal-dialog" role="document">

      
            @foreach($posts as $post)


      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><b> كود المنشور {{$post->id}}</b></h5>
            <div class="dropdown">
            <!-- Note Selective item in JQ Must equal to -- ID and aria-labelledby in div  -->
          <button type="button" class="close" aria-label="Close" onclick="$('#dropdownMenuButton{{$post->id}}').toggle();"
>
              <span aria-hidden="true">&hellip; </span>
            </button>
            <div class="dropdown-menu post-options" id="dropdownMenuButton{{$post->id}}" aria-labelledby="dropdownMenuButton{{$post->id}}">
              <?php
                if ($post->category==1)
                  echo"<a class=\"dropdown-item\" onclick=\"GetPostData({$post->category}, {$post->id});\" data-toggle=\"modal\" data-target=\"#EditPost1\" >تعديل</a>";
                else if ($post->category==2)
                    echo"<a class=\"dropdown-item\" onclick=\"GetPostData({$post->category}, {$post->id});\" data-toggle=\"modal\" data-target=\"#EditPost2\" >تعديل</a>";
                else
                    echo"<a class=\"dropdown-item\" onclick=\"GetPostData({$post->category}, {$post->id});\" data-toggle=\"modal\" data-target=\"#EditPost3\" >تعديل</a>";
                ?>
              <a class="dropdown-item" onclick="delPost({{$post->id}})" data-toggle="modal" data-target="#delPost" href="deletepost{{$post->category}}">حذف</a>
            </div>
          </div>
        </div>
        <div class="modal-body post-body">
          @if($post->status==1)
            <div class="row">
              <div class="alert alert-info col-lg-8 post-alert" role="alert">
                في انتظار المراجعه
              </div>
            </div>
          @endif

          @if($post->	status==2)
              <div class="alert alert-success col-lg-8 post-alert" role="alert">
                تم الموافقة على المنشور
              </div>
          @endif

          @if($post->	status==3)
              <div class="row">
                <div class="alert alert-danger col-lg-8 post-alert" role="alert">
                  <b>تم رفض المشور الخاص بك <br> قم بتعديله الآن وانتظر الموافقة</b>
                  <br><br>
                  <span class="admin-postMessage">{{$post->message}}</span>
                </div>
              </div>
          @endif
          <div class="modal-body post-body">
            @if($post->category=="1")
              <div class="row">
                  <div class="col-lg-6">
                    <p><b>الاسم : </b><span>{{$post->name}}</span></p>
                  </div>
                  <div class="col-lg-6">
                      <p><b>صلة القرابة : </b><span>{{$post->relative_relation}}</span></p>
                  </div>
                </div>
                @elseif($post->category=="3")
                  <div class="row">
                      <div class="col-lg-6">
                          <p><b>الاسم : </b><span>{{$post->name}}</span></p>
                      </div>
                      <div class="col-lg-6">
                          <p><b>السن وقت الضياع : </b><span>{{$post->age_before}}</span></p>
                      </div>
                  </div>

                @endif
                <div class="row">
                  <div class="col-lg-4">
                      @if(($post->category=="3"))
                    <p><b>السن الان : </b><span>{{$post->age}}</span></p>
                          @else
                          <p><b>السن : </b><span>{{$post->age}}</span></p>
                          @endif
                  </div>
                  <div class="col-lg-4">
                    <p><b>الجنس : </b><span>{{$post->gender}}</span></p>
                  </div>
                    @if($post->blood_type)
                  <div class="col-lg-4">
                    <p><b>فصيلة الدم : </b><span>{{$post->blood_type}}</span></p>
                  </div>
                    @endif
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <p><b> المحافظة : </b><span>{{$post->governate}}</span></p>
                  </div>
                  <div class="col-lg-12">
                    <p><b> المدينة : </b><span>{{$post->city}}, </span><span>{{$post->street}} </span></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <p><b> التفاصيل : </b><span> {{$post->other_info}}</span></p>
                  </div>
                    @if($post->police)
                        <div class="row">
                                <div class="col-lg-12">
                                    <p><b>&nbsp;&nbsp;&nbsp; هل تم تقديم بلاغ للمباحث : </b> <span>{{$post->police}}</span></p>
                                </div>
                        </div>
                    @endif
      
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a><img class="rounded" src="images/{{$post->url}}" style="width: 100%;height: auto;max-width: 100%;"
                        alt="..."></a>
                  </div>
                </div>
                <br>
           
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
            </div>
          </div>
        </div>
      </div>
      </div>
                <br>
            @endforeach
    </div>
    @else
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body post-body">
            <div class="row">
              <div class="col-lg-12 noPost">
                <img src="{{asset('imgs/nopost.png')}}" width="100px" height="100px">
                <p><br>
                  <span> <b>لا يوجد منشورات</b>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
              {{ $posts->links() }}
      <br>

  </div>

  <div class="modal fade" id="delPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="{{route('delpost')}}" method="post"  novalidate>
          {{csrf_field()}}
        
        <input type="hidden" name="id" id="idDelPost">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> حذف المنشور</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              هل تريد حذف المنشور .. رجاءا اجب عن الاستفسارات الآتيه
              <div class="delPost-ques-div">
                <div class="row delPostQuestions">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" width:60%;">
                    <label class="form-check-label " for="option-1">
                      هل تم ايجاد المفقود
                    </label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center; width:50%;">
                    <input class="form-check-input" name="qq1" type="radio" value="نعم" id="option-1-1">
                    <label class="form-check-label " for="option-1-1" required>
                      نعم
                    </label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center; width:50%;">
                    <input class="form-check-input" name="qq1" type="radio" value="لا" id="option-1-2">
                    <label class="form-check-label " for="option-1-2" required>
                      لا
                    </label>
                  </div>
                </div>
                <div class="row delPostQuestions">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <label class="form-check-label del-post-qu" for="option-1">
                      هل وجدته عن طريقنا
                    </label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center; width:50%;">
                    <input class="form-check-input" name="qq2" type="radio" value="نعم" id="option-2-1">
                    <label class="form-check-label " for="option-2-1" required>
                      نعم
                    </label>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center; width:50%;">
                    <input class="form-check-input" name="qq2" type="radio" value="لا" id="option-2-2">
                    <label class="form-check-label " for="option-2-2" >
                      لا
                    </label>
                  </div>
                </div>
                <div class="row delPostQuestions">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="form-check-label del-post-qu" for="option-1">
                      اكتب تعليقا ورأيك في الموقع </label>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input name="q3" class="form-check-input del-opinion" type="text">
                  </div>
  
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit"
                  class="btn intro-btn profile-btn profile-newPost">حذف</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Edit Post 1-->
  <div class="modal fade" id="EditPost1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-pic" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">تعديل المنشور 1 <span id="blabla"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body popup-modal-body">
          <!-- Posst Type 1 -->
        <form class="needs-validation" action="{{route('editpost')}}" method="post" enctype="multipart/form-data"  novalidate>
            {{csrf_field()}}
              <input type="hidden" name="id" id="idPopupPost1" value="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustomEmail" >اسم المفقود<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input type="text" name="name" class="form-control"  placeholder=""
                    aria-describedby="inputGroupPrepend" id="namePopupPost1" value=""required>
                  <div class="invalid-feedback">
                    ادخل اسم المخطوف
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">صلة القرابة<span class="red-star"><sup>*</sup></span></label>
                <select name="r_r" id="relative_relation1" class="form-control" 
                  aria-describedby="inputGroupPrepend" required>
                  <option>ابن - ابنه</option>
                  <option>اخ - اخت</option>
                  <option>(ابن-ابنه) (عم-عمه)</option>
                  <option>(ابن-ابنه) (خال-خالة)</option>
                  <option>اب - ام</option>
                  <option>عم - عمه</option>
                  <option>خال - خالة</option>
                  <option>جد - جده</option>
                </select>
                <div class="invalid-feedback">
                  اختر صلة القرابة
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">السن<span class="red-star"><sup>*</sup></span></label>
                <select name="age"  class="form-control" id="agePopupPost1"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option value="حديث الولادة">حديث الولادة</option>
                  <option value="1-2">1-2</option>
                  <option value="2-5">2-5</option>
                  <option value="5-10">5-10</option>
                  <option  value="10-15">10-15</option>
                  <option  value="15-30">15-30</option>
                  <option  value="30-50">30-50</option>
                  <option  value="50-70">50-70</option>
                  <option  value="اكبر من 70">اكبر من 70</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                <select name="gender" class="form-control" id="genderPopupPost1"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>ذكر</option>
                  <option>انثى</option>
                </select>
                <div class="invalid-feedback">
                  اختر نوع الجنس
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">فصيلة الدم<span class="red-star"><sup>*</sup></span></label>
                <select name="b_t" class="form-control" id="bloodPopupPost1"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>O+</option>
                  <option>O-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                </select>
                <div class="invalid-feedback">
                  اختر فصيلة الدم
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">المحافظة<span class="red-star"><sup>*</sup></span></label>
                <select  class="form-control countries" id="govPopupPost1"
                  aria-describedby="inputGroupPrepend" name="governate" required>
                  <option></option>
                </select>
                <div class="invalid-feedback">
                  اختر المحافظة
                </div>
              </div>
              <div class="form-group col-md-4 option">
                  <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                  <select  class="form-control غيرمحدد" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend" >
                  </select>
                  <select  class="form-control اسوان" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control اسيوط" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الاسماعيلية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الجيزة" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الاسكندرية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الاقصر" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control البحرالاحمر" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control البحيرة" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الدقهلية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control السويس" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الشرقية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الغربية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الفيوم" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control القاهرة" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control القليوبية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control المنوفية" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control المنيا" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control الوادي_الجديد" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control بني_سويف" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control بورسعيد" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control جنوب_سيناء" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control دمياط" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control سوهاج" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control شمال_سيناء" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control قنا" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control كفرالشيخ" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
                  <select  class="form-control مطروح" id=" cityPopupPost1"
                    aria-describedby="inputGroupPrepend"  >
                  </select>
              </div>

              <div class="form-group col-md-4">
                <label for="validationCustomEmail">الشارع<span class="red-star"><sup></sup></span></label>
                <div class="input-group">
                  <input name="street" type="text" class="form-control" id="streetPopupPost1" placeholder=""
                    aria-describedby="inputGroupPrepend">
                  <div class="invalid-feedback">
                    ادخل الشارع
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">العنوان بالتفصيل<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input name="d_a" type="text" class="form-control" id="dit_addressPopupPost1" placeholder=""
                    aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    ادخل عنوانك بالتفصيل
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="validationCustomEmail"> هل تقدمت ببلاغ للمباحث ؟<span
                      class="red-star"><sup>*</sup></span></label>
                  <div class="input-group">
                      <select id="policeState1" name="police" class="form-control" 
                      aria-describedby="inputGroupPrepend" required>
                      <option></option>
                      <option >نعم</option>
                      <option >لا</option>
                    </select>
                    <div class="invalid-feedback">
                        اجب عن السؤال ...
                    </div>
                  </div>
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="validationCustomEmail">معلومات اخرى عن المخطوف<span
                    class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <textarea name="o_i" class="form-control" id="other_infoPopupPost1" placeholder="مثل طوله ولون البشرة والوان الملابس التي كان يرتديها" required></textarea>
                  <div class="invalid-feedback">
                    ادخل معلومات مفصله عن الشخص مثل طوله ولون البشرة والوان الملابس التي كان يرتديها
                  </div>
                </div>
              </div>
            </div>
            <div class=" form-row ">
              <div class="form-group col-md-12">
               
                <div class="">
                  <label for="validationCustomEmail">ارفع صور خاصة بالمخطوف<span
                      class="red-star"><sup>*</sup></span></label>
                  <input class="form-control-file" name="image" type="file" accept="image/x-png,image/jpeg,image/jpg"
                  > 
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="">
                  <button type="submit" class="btn intro-btn editProfile-btn">تعديل</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>




  <!-- Edit Post 2-->
  <div class="modal fade" id="EditPost2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-pic" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">تعديل المنشور  2<span id="blabla"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body popup-modal-body">
          <!-- Post type 2 -->

          <form class="needs-validation" action="{{route('editpost')}}" method="post" enctype="multipart/form-data"  novalidate>
            {{csrf_field()}}
              <input type="hidden" name="id" id="idPopupPost2" value="">
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                <select name="gender"  class="form-control" id="genderPopupPost2"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>ذكر</option>
                  <option>انثى</option>
                </select>
                <div class="invalid-feedback">
                  اختر نوع الجنس
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">السن<span class="red-star"><sup>*</sup></span></label>
                <select name="age" class="form-control" id="agePopupPost2"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option value="حديث الولادة">حديث الولادة</option>
                  <option value="1-2">1-2</option>
                  <option value="2-5">2-5</option>
                  <option value="5-10">5-10</option>
                  <option  value="10-15">10-15</option>
                  <option  value="15-30">15-30</option>
                  <option  value="30-50">30-50</option>
                  <option  value="50-70">50-70</option>
                  <option  value="اكبر من 70">اكبر من 70</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">المحافظة<span class="red-star"><sup>*</sup></span></label>
               <select class="form-control countries" id="govPopupPost2" aria-describedby="inputGroupPrepend"
                  name="governate" required>
                  <option></option>
                </select>
                <div class="invalid-feedback">
                  اختر المحافظة
                </div>
              </div>
              <div class="form-group col-md-6 option">
                  <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                  <select  class="form-control غيرمحدد" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend" >
                  </select>
                  <select  class="form-control اسوان" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control اسيوط" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الاسماعيلية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الجيزة" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الاسكندرية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الاقصر" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control البحرالاحمر" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control البحيرة" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend" >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الدقهلية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control السويس" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الشرقية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الغربية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الفيوم" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control القاهرة" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control القليوبية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control المنوفية" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control المنيا" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control الوادي_الجديد" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control بني_سويف" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control بورسعيد" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control جنوب_سيناء" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control دمياط" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control سوهاج" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control شمال_سيناء" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control قنا" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control كفرالشيخ" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
                  <select  class="form-control مطروح" id="cityPopupPost2"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="validationCustomEmail">العنوان بالتفصيل<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input name="d_a" type="text" class="form-control" id="dit_addressPopupPost2" placeholder=""
                    aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    ادخل عنوانك بالتفصيل
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="validationCustomEmail">معلومات اخرى عن المخطوف<span
                    class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <textarea name="o_i" class="form-control" id="other_infoPopupPost2" required></textarea>
                  <div class="invalid-feedback">
                      ادخل معلومات مفصله عن الشخص مثل طوله ولون البشرة والوان الملابس التي كان يرتديها
                    </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                
                <div class="">
                  <label for="validationCustomEmail">ارفع صور خاصة بالمخطوف<span
                      class="red-star"><sup>*</sup></span></label>
                  <input class="form-control-file" name="image" type="file"accept="image/x-png,image/jpeg,image/jpg"
                  >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="">
                  <button type="submit" class="btn intro-btn editProfile-btn">تعديل</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>





  <!-- Edit Post 3 -->
  <div class="modal fade" id="EditPost3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-pic" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">تعديل المنشور  3<span id="blabla"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body popup-modal-body">
          <!-- Post type 3 -->

          <form class="needs-validation" action="{{route('editpost')}}" method="post" enctype="multipart/form-data"  novalidate>
            {{csrf_field()}}
              <input type="hidden" name="id" id="idPopupPost3" value="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">اسم المفقود<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input type="text" name="name" class="form-control" id="namePopupPost3" placeholder=""
                    aria-describedby="inputGroupPrepend" value="" required>
                  <div class="invalid-feedback">
                    ادخل اسم المخطوف
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                <select class="form-control" name="gender" id="genderPopupPost3"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>ذكر</option>
                  <option>انثى</option>
                </select>
                <div class="invalid-feedback">
                  اختر نوع الجنس
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">السن وقت الضياع<span class="red-star"><sup>*</sup></span></label>
                <select name="age_before" class="form-control" id="ageBeforePopupPost3"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option value="حديث الولادة">حديث الولادة</option>
                  <option value="1-2">1-2</option>
                  <option value="2-5">2-5</option>
                  <option value="5-10">5-10</option>
                  <option  value="10-15">10-15</option>
                  <option  value="15-30">15-30</option>
                  <option  value="30-50">30-50</option>
                  <option  value="50-70">50-70</option>
                  <option  value="اكبر من 70">اكبر من 70</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">السن الآن<span class="red-star"><sup>*</sup></span></label>
                <select name="age" class="form-control" id="agePopupPost3"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>حديث الولادة</option>
                  <option>1-2</option>
                  <option>2-5</option>
                  <option>5-10</option>
                  <option>10-15</option>
                  <option>15-30</option>
                  <option>30-50</option>
                  <option>50-70</option>
                  <option>اكبر من 70</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">فصيلة الدم<span class="red-star"><sup>*</sup></span></label>
                <select name="b_t" class="form-control" id="bloodPopupPost3"
                  aria-describedby="inputGroupPrepend" required>
                  <option></option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>O+</option>
                  <option>O-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                </select>
                <div class="invalid-feedback">
                  اختر فصيلة الدم
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">المحافظة<span class="red-star"><sup>*</sup></span></label>
                <select class="form-control countries" id="govPopupPost3" aria-describedby="inputGroupPrepend"
                  name="governate" required>
                  <option></option>
                </select>
                <div class="invalid-feedback">
                  اختر المحافظة
                </div>
              </div>
              <div class="form-group col-md-4 option">
                  <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                  <select  class="form-control غيرمحدد" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend" >
                  </select>
                  <select  class="form-control اسوان" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control اسيوط" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الاسماعيلية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الجيزة" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الاسكندرية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الاقصر" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control البحرالاحمر" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control البحيرة" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الدقهلية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control السويس" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الشرقية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الغربية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الفيوم" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control القاهرة" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control القليوبية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control المنوفية" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control المنيا" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control الوادي_الجديد" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control بني_سويف" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control بورسعيد" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control جنوب_سيناء" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control دمياط" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control سوهاج" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control شمال_سيناء" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control قنا" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control كفرالشيخ" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option ></option>
                  </select>
                  <select  class="form-control مطروح" id="cityPopupPost3"
                    aria-describedby="inputGroupPrepend"  >
                    <option disabled selected hidden></option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <label for="validationCustomEmail">الشارع<span class="red-star"><sup></sup></span></label>
                <div class="input-group">
                  <input type="text" name="street" class="form-control" id="streetPopupPost3" placeholder=""
                    aria-describedby="inputGroupPrepend">
                  <div class="invalid-feedback">
                    ادخل الشارع
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="validationCustomEmail">العنوان بالتفصيل<span class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <input type="text" name="d_a" class="form-control" id="dit_addressPopupPost3"placeholder=""
                    aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    ادخل عنوانك بالتفصيل
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="validationCustomEmail">معلومات اخرى عن المفقود<span
                    class="red-star"><sup>*</sup></span></label>
                <div class="input-group">
                  <textarea  name="o_i" class="form-control" id="other_infoPopupPost3" required></textarea>
                  <div class="invalid-feedback">
                      ادخل معلومات مفصله عن الشخص مثل طوله ولون البشرة والوان الملابس التي كان يرتديها
                    </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                
                <div class="">
                  <label for="validationCustomEmail">ارفع صور خاصة <span class="red-star"><sup>*</sup></span></label>
                  <input class="form-control-file" name="image" type="file" accept="image/x-png,image/jpeg,image/jpg"
                    >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="">
                  <button type="submit" class="btn intro-btn editProfile-btn">تعديل</button>
                </div>
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>

 
  @foreach($home as $h)
  @endforeach

  @endsection

  <script>
    
  </script>