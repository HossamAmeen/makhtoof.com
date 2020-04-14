@extends('admin.layout')
@section('content')

    <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <h2>المنشورات</h2>
                        <h5>آراء المستخدمين عند ايجاد المفقود - حذف المنشوف </h5>
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
                                                    <th width="15%">
                                                            <span class="tbl-data">رقم المنشور </span>
                                                        </th>
                                                        <th width="15%">
                                                            <span class="tbl-data"> هل تم ايجاد المفقود ؟ </span>
                                                        </th>
                                                        <th width="15%">
                                                            <span class="tbl-data">  هل وجدته عن طريقنا </span>
                                                        </th>
                                                        <th width="40%">
                                                            <span class="tbl-data">التعليق </span>
                                                        </th>
                                                        <th width="15%">
                                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($quest)>0)
                                        @foreach($quest as $q)

                                            <tr>
                                                <td width="15%">
                                                    <span class="tbl-data"> {{$q->post_id}} </span>
                                                </td>
                                                <td width="15%">
                                                   
                                                    <span class="tbl-data"> {{$q->find_kidnap}} </span>
                                                </td>
                                                <td width="15%">
                                                    <span class="tbl-data"> {{$q->from_us}}</span>
                                                </td>
                                                <td width="40%">
                                                        <span class="tbl-data"> {{$q->comment}} </span>

                                                </td>
                                                <td width="15%">
                                                        <div class="form-group row-option">
                                                               
                                                                <button type="button" value="{{$q->id}}" class="btn btn-danger options-admin-btn"
                                                                    data-toggle="modal" data-target="#delAdmin">حذف</button>
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

        <!-- Modal -- delete Admin -->
        <div class="modal fade" id="delAdmin" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('deletequest')}}" method="post"  novalidate>
                        {{csrf_field()}}
                        <script type="text/javascript"> $("button").click(function() { var fired_button = $(this).val(); document.getElementById('abc').value=fired_button;  /*alert(fired_button);*/ }); </script>
                        <input type="hidden" id="abc" name="id"  value="" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b>حذف الرأي</b></h4>
                        </div>
                        <div class="modal-body-popup">
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="validationCustomfName">هل تريد حذف الرأي ؟ <span
                                            class="red-star"><sup>*</sup></span></label>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer-popup">
                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>

                            <button type="submit" class="btn btn-success">حذف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection