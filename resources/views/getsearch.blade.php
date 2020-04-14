@extends('layout.layout')
@section('content')

  <div class="container">
    <div class="searching-bar-div">

      <form class="needs-validation" action="{{route('getsearch')}}" method="get" novalidate>
          {{csrf_field()}}


          <div class="form-row">
          <div class="form-group col-md-4">
            <div class="input-group">
              <input type="text" name="id" class="form-control" id="validationCustomsName" placeholder="بحث عن ... "
                     aria-describedby="inputGroupPrepend">
            </div>
          </div>
          <div class="form-group col-md-4">
            <select id="inputState" name="cat" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
                <option value="0"> نوع المنشور ...</option>
              <option value="1">مفقود اعرفه </option>
                <option value="2">ايجاد مفقود </option>
                <option value="3">عن نفسى كمفقود </option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <select id="inputState" name="gender" class="form-control" id="validationCustomState" aria-describedby="inputGroupPrepend"
                    required>
              <option value="0"> الجنس ...</option>
              <option>ذكر</option>
              <option>انثى</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <select id="inputState" name="governate" class="form-control countries" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="state" required>
                      <option disabled selected hidden>المحافظة ...</option>
                    </select>
          </div>
          <div class="form-group col-md-4 option">
              <select id="inputState" name="city" class="form-control غيرمحدد" id="validationCustomState"
              aria-describedby="inputGroupPrepend" name="city" required>
              <option disabled selected hidden>المدينة ...</option>

            </select>
            <select id="inputState" class="form-control اسوان" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control اسيوط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاسماعيلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الجيزة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاسكندرية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاقصر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control البحرالاحمر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control البحيرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الدقهلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control السويس" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الشرقية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الغربية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الفيوم" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control القاهرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control القليوبية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control المنوفية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control المنيا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الوادي_الجديد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control بني_سويف" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control بورسعيد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control جنوب_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control دمياط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control سوهاج" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control شمال_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control قنا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control كفرالشيخ" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control مطروح" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" required>
                      <option disabled selected hidden>المدينة ...</option>
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
      <div class="-">
          <div class="row postRow">
              <?php $coun=0; ?>

              @if(isset($posts))

                  @foreach($posts as $post)
                      @if($post->status==2)
                      <div class="modal-dialog col-lg-4" style="margin-top:40px; margin-bottom:40px;"role="document">
                          <?php ++$coun; ?>
                          <div class="modal-content">
                              <div class="modal-header">
                                  <a href="showpost/{{$post->id}}"> <h5 class="modal-title post-hdr-link"><b> كود المنشور {{$post->id}}</b></h5> </a>
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
                                  @if($post->category=="1")
                                      <div class="row">
                                         <div class="col-lg-12">
                                           <b>نوع المنشور: </b> ابلاغ عن مفقود
                                         </div>
                                         <br><br>
                                      </div>
                       
                                      @elseif($post->category=="2")
                                      <div class="row">
                                         <div class="col-lg-12">
                                             <b>نوع المنشور: </b> ساعد في ايجاد مفقود                    
                                           </div>
                                           <br><br>
                       
                                      </div>
                       
                                  @elseif($post->category=="3")
                                      <div class="row">
                                         <div class="col-lg-12">
                                             <b>نوع المنشور: </b> ابلاغ عن نفسى ك مفقود
                                           </div>
                                           <br><br>
                       
                                      </div>
                       
                                  @endif
                                    <div class="row">
                                        <div class="col-lg-7">
                                                <p><b>السن : </b><span>{{$post->age}}</span></p>
                                           
                                        </div>
                                      <div class="col-lg-5">
                                        <p><b>الجنس : </b><span>{{$post->gender}}</span></p>
                                      </div>
                                     
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
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <a><img class="rounded" style="width:310px;height:210px" src="images/{{$post->url}}" style="width: 100%;height: auto;max-width: 100%;"
                                            alt="..."></a>
                                      </div>
                                    </div>
                                    <br>
                               
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <button id="IKnowHimBtn" class="btn intro-btn profile-btn profile-newPost SubmitOnPost" data-toggle="modal"
                                            data-target="#IknowHim" onclick="GetID({{$post->id}})">
                                        انا اعرفه
                                    </button>
                            
                                  
                                  </div>
                                </div>
                               </div>
                          </div>
                      </div>
                          @endif

                  @endforeach
                      {{ $posts->appends(request()->except('page'))->links() }}.


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
          </div>
      </div>

  </div>

  </div>



  <br><br>
  </div>

  </div>
  <!-- I-knowHim -->
  <div class="modal fade" id="IknowHim" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
       aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-pic" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle"> تواصل معنا </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              @foreach($home as $h)
                  <div class="modal-body">
                      <div class="info">
                          <b>تواصل معنا سريعا وتذكر كود المنشور للأهمية</b>
                          <br><br>
                          <span class="PostCode" id="postIdPop"></span>
                          <br><br>
                          <div class="row">
                              <div class="col-sm-6 col-contact">
                                  <img class="icon-img" src="{{asset('imgs/mail.png')}}">
                                  <span class="true_info_txt info-title">البريد الاليكتروني</span>
                                  <br>
                                  <span class="true_info_txt">{{$h->about_email}}</span>
                              </div>
                              <div class="col-sm-6 col-contact">
                                  <img class="icon-img" src="{{asset('imgs/phone.png')}}">
                                  <span class="true_info_txt info-title">رقم التليفون</span>
                                  <br>
                                  <span class="true_info_txt">{{$h->about_phone}} </span>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  </div>

  @foreach($home as $h)
  @endforeach
  @endsection