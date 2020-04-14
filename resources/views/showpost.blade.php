@extends('layout.layout')
@section('content')
<br>

<div class="container">
  <div class="-">
    <div class="row postRow">
        <?php $coun=0; ?>

      @if(isset($post))

          <div class="modal-dialog col-lg-4" style="margin-top:40px; margin-bottom:40px;"role="document">
              <?php ++$coun; ?>
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title"><b> كود المنشور {{$post->id}}</b></h5>
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
                      @if($post->police=="نعم")
                        <div class="col-lg-12">
                          <p><b>&nbsp;&nbsp;&nbsp; هل تم تقديم بلاغ للمباحث : </b> <span>نعم</span></p>
                        </div>

                      @else
                        <div class="col-lg-12">
                          <p><b>&nbsp;&nbsp;&nbsp; هل تم تقديم بلاغ للمباحث : </b> <span>لا</span></p>
                        </div>
                      @endif
                    </div>
                  @endif

                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a><img class="rounded" src="/images/{{$post->url}}" style="width: 100%;height: auto;max-width: 100%;"
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