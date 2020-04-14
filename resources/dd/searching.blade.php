@extends('layout.layout')
@section('content')

  <div class="container">
    <div class="searching-bar-div">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="form-group col-md-4">
            <div class="input-group">
              <input type="text" class="form-control" id="validationCustomsName" placeholder="بحث عن ... "
                     aria-describedby="inputGroupPrepend">
            </div>
          </div>
          <div class="form-group col-md-4">
            <select id="inputState" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
              <option> نوع المنشور ...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <select id="inputState" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
              <option> الجنس ...</option>
              <option>ذكر</option>
              <option>انثى</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <select id="inputState" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
              <option>المحافظة ...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <select id="inputState" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
              <option>المدينة ...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <div class="">
              <button type="submit" class="btn intro-btn editProfile-btn searching-btn">بحث</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><b>كريم محمود على</b></h5>
          <div class="dropdown">
            <!-- Note Selective item in JQ Must equal to -- ID and aria-labelledby in div  -->
            <!-- <button type="button" class="close" onclick="$('#dropdownMenuButton1').toggle();"
              onblur="$('#dropdownMenuButton1').toggle();">
              <span aria-hidden="true">&hellip; </span>
            </button>
            <div class="dropdown-menu post-options" id="dropdownMenuButton1">
              <a class="dropdown-item" href="#">تعديل</a>
              <a class="dropdown-item" href="#">مسج</a>
            </div> -->
          </div>
        </div>

        <div class="modal-body post-body">
          <p>السن 5-10 سنوات &nbsp;&nbsp;&nbsp; فصيلة الدم: O+</p>
          <p> رقم التليفون : 0123456789</p>
          <p>اسيوط, اسيوط, شارع الجمهورية</p>
          <p>أسيوط - شارع الجمهورية بجوار فودافون اسيوط - يرتدي بنطالون ازرق وتشيرت احمر</p>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <a><img class="rounded" src="assets/imgs/car_1.jpg" style="width: 100%;height: auto;max-width: 100%;"
                      alt="..."></a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <button class="btn intro-btn profile-btn profile-newPost SubmitOnPost" data-toggle="modal"
                      data-target="#IknowHim">أنا اعرفه</button>
              <br><br>
              <button class="btn intro-btn profile-btn profile-newPost allpics" data-toggle="modal"
                      data-target="#exampleModalCenter2">مزيد من الصور</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><b>كريم محمود على</b></h5>
          <div class="dropdown">
            <!-- Note Selective item in JQ Must equal to -- ID and aria-labelledby in div  -->
            <!-- <button type="button" class="close" aria-label="Close" onclick="$('#dropdownMenuButton2').toggle();"
              onblur="$('#dropdownMenuButton2').toggle();">
              <span aria-hidden="true">&hellip; </span>
            </button>
            <div class="dropdown-menu post-options" id="dropdownMenuButton2" aria-labelledby="dropdownMenuButton2">
              <a class="dropdown-item" href="#">تعديل</a>
              <a class="dropdown-item" href="#">مسح</a>
            </div> -->
          </div>
        </div>
        <div class="modal-body post-body">
          <p>السن 5-10 سنوات &nbsp;&nbsp;&nbsp; فصيلة الدم: O+</p>
          <p> رقم التليفون : 0123456789</p>
          <p>اسيوط, اسيوط, شارع الجمهورية</p>
          <p>أسيوط - شارع الجمهورية بجوار فودافون اسيوط - يرتدي بنطالون ازرق وتشيرت احمر</p>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <a><img class="rounded" src="assets/imgs/car_1.jpg" style="width: 100%;height: auto;max-width: 100%;"
                      alt="..."></a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <button class="btn intro-btn profile-btn profile-newPost SubmitOnPost" data-toggle="modal"
                      data-target="#IknowHim">أنا اعرفه</button>
              <br><br>
              <button class="btn intro-btn profile-btn profile-newPost allpics" data-toggle="modal"
                      data-target="#exampleModalCenter2">مزيد من الصور</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @endsection