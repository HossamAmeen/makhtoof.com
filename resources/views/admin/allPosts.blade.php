@extends('admin.layout')
@section('content')

    <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <h2>المنشورات</h2>
                        <h5>كل المنشورات التي تم الموافقة عليها </h5>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                جدول المسئولين
                            </div> -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th width="10%">
                                                    <span class="tbl-data">كود </span>
                                                </th>
                                                <th width="20%">
                                                    <span class="tbl-data"> الاسم </span>
                                                </th>
                                                <th width="20%">
                                                    <span class="tbl-data"> المحافظة - المدينة </span>
                                                </th>
                                                <th width="30%">
                                                    <!-- <span clas="tbl-data">
                                                        <button class="btn btn-success add-admin-btn"
                                                            data-toggle="modal" data-target="#addAdmin">
                                                            اضافة مسئول
                                                        </button>
                                                    </span> -->
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($posts)>0)
                                        @foreach($posts as $post)

                                            <tr>
                                                <td width="10%">
                                                    <span class="tbl-data"> {{$post->id}} </span>
                                                </td>
                                                <td width="20%">
                                                    <span class="tbl-data"> {{$post->name}} </span>
                                                </td>
                                                <td width="20%">
                                                    <span class="tbl-data"> {{$post->governate}} {{$post->city}} </span>
                                                </td>
                                                <td width="30%">
                                                    <?php
                                                    $user= App\User::find($post->user_id);
                                                    ?>
                                                    <div class="form-group row-option">
                                                        <button type="button" id="usr" class="btn btn-primary "
                                                            data-toggle="modal" value="{{$user}}"
                                                            data-target="#viewUser">المستخدم</button>
                                                        <button type="button" value="{{$post->id}},{{$post->name}},{{$post->age}},{{$post->gender}},{{$post->blood_type}},{{$post->governate}},{{$post->city}},{{$post->street}},{{$post->other_info}},{{$post->url}}" class="btn btn-success options-admin-btn"
                                                            data-toggle="modal" data-target="#viewPost">المنشور</button>
                                                        <button type="button"  class="btn btn-danger options-admin-btn"
                                                            data-toggle="modal" value="{{$post->id}}" data-target="#delPost">حذف </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- Modal -- viewUser  -->
  <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="basicModal"
  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <script type="text/javascript"> $("button#usr").click(function() { var fired_button= $(this).val();
                 var res= JSON.parse(fired_button);
                  document.getElementById('flname').innerHTML =res.firstName+" "+res.lastName;
                  document.getElementById('usremail').innerHTML =res.email;
                  document.getElementById('usrmob').innerHTML =res.phone;
                  document.getElementById('usrgender').innerHTML =res.gender;
                  document.getElementById('usrgov').innerHTML =res.governate;
                  document.getElementById('usrcity').innerHTML =res.city;
              }); </script>
          <form>
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModal"><b>بيانات المستخدم</b></h4>
              </div>
              <div class="modal-body post-body">

                  <div class="row">
                      <div class="col-lg-5">
                          <p><b>الاسم : </b><span id="flname"> </span></p>
                      </div>
                      <div class="col-lg-7">
                          <p><b>البريد الالكتروني : </b><span id="usremail"></span></p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-5">
                          <p><b>رقم التليفون : </b><span id="usrmob"></span></p>
                      </div>
                      <div class="col-lg-7">
                          <p><b>الجنس : </b><span id="usrgender"></span></p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-5">
                          <p><b>المحافظة : </b><span id="usrgov"></span></p>
                      </div>
                      <div class="col-lg-7">
                          <p><b>المدينة : </b><span id="usrcity"></span></p>
                      </div>
                  </div>
              </div>
              <div class="modal-footer-popup">
                  <button type="button" class="btn btn-default" data-dismiss="modal">اخفاء</button>

              </div>
          </form>
      </div>
  </div>
</div>

        <!-- Modal -- viewPost  -->
        <div class="modal fade" id="viewPost" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <script type="text/javascript"> $("button").click(function() { var fired_button = $(this).val(); var res = fired_button.split(",");
                            document.getElementById('myModalLabel').innerHTML = res[0];document.getElementById('nm').innerHTML = res[1];
                            document.getElementById('age').innerHTML = res[2];document.getElementById('gender').innerHTML = res[3];
                            document.getElementById('blood').innerHTML = res[4];document.getElementById('governate').innerHTML = res[5];
                            document.getElementById('city').innerHTML = res[6];document.getElementById('street').innerHTML = res[7];
                            document.getElementById('other').innerHTML = res[8];document.getElementById('img').src ="/images/"+res[9];
                        }); </script>



                    <form>

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <input type="hidden" id="xyz" value="">
                            <h4 class="modal-title" id="myModalLabel"><b></b></h4>
                        </div>
                        <!-- <div class="modal-body-popup">
                        <div class="form-row">
                            <div class="form-group ">
                                <label for="validationCustomfName">هل تريد رفض هذاالمنشور ؟ <span
                                        class="red-star"><sup>*</sup></span></label>

                            </div>
                            <div class="form-group ">
                                <label for="validationCustomPass"> اكتب تعليقا  <span
                                        class="red-star"><sup></sup></span></label>
                                <input class="form-control" type="text" >
                            </div>
                        </div>
                    </div> -->

                        <div class="modal-body post-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><b><span id="nm"></span></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><b >السن : </b><span id="age"></span></p>
                                </div>
                                <div class="col-lg-4">
                                    <p><b>الجنس : </b><span id="gender"></span></p>
                                </div>
                                <div class="col-lg-4">
                                    <p><b>فصيلة الدم : </b><span id="blood"></span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><b> المحافظة : </b><span id="governate"></span></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><b> المدينة : </b><span id="city"> </span><span id="street"></span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><b> التفاصيل : </b><span id="other">

                                            </span></p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a><img class="post-img rounded" id="img" src=""
                                            style="width: 100%;height: auto;max-width: 100%;" alt="..."></a>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer-popup">
                            <button type="button" class="btn btn-default" data-dismiss="modal">اخفاء</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

      


        <!-- Modal -- delPost  -->
        <div class="modal fade" id="delPost" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('deletepost')}}" method="post"  novalidate>
                    {{csrf_field()}}
                    <script type="text/javascript"> $("button").click(function() { var fired_button = $(this).val(); document.getElementById('abc').value=fired_button; }); </script>
                        <input type="hidden" id="abc" name="id"  value="" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b> حذف المنشور</b></h4>
                        </div>
                        <div class="modal-body-popup">
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="validationCustomfName">هل تريد حذف هذاالمنشور ؟ <span
                                            class="red-star"><sup>*</sup></span></label>

                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer-popup">
                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>

                            <button type="submit" class="btn btn-primary">حذف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -- Edit account -->
@endsection