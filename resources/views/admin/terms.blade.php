@extends('admin.layout')
@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <h2>البنود وشروط الاستخدام</h2>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <!-- /. ROW  -->
                @if(isset($terms))

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
                                                <th width="5%">
                                                    <span class="tbl-data">الرقم </span>
                                                </th>
                                                <th width="15%">
                                                    <span class="tbl-data"> عنوان البند </span>
                                                </th>
                                                <th width="65%">
                                                    <span class="tbl-data"> نص البند</span>
                                                </th>
                                                <th width="10%">
                                                    <div class="form-group row-option">
                                                        <button class="btn btn-success  options-admin-btn "
                                                            data-toggle="modal" data-target="#addAdmin">
                                                            اضافة
                                                        </button>
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($terms as $term)
                                            <tr>
                                                <td width="5%">
                                                    <span class="tbl-data"> {{$term->id}} </span>
                                                </td>
                                                <td width="15%">
                                                    <span class="tbl-data">{{$term->title}} </span>
                                                </td>
                                                <td width="65%">
                                                    <span class="tbl-data"> {{$term->text}}</span>
                                                </td>
                                                <td width="10%">
                                                    <div class="form-group row-option">
                                                        <button type="button" value="{{$term->id}},{{$term->title}},{{$term->text}}"  class="btn btn-primary options-admin-btn"
                                                            data-toggle="modal" data-target="#editAdmin">تعديل</button>
                                                        <br><br>
                                                        <button type="button" value="{{$term->id}}" class="btn btn-danger options-admin-btn"
                                                            data-toggle="modal" data-target="#delAdmin">حذف</button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
        <!-- Modal -- add New term -->
        <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('addterm')}}" method="post" novalidate>
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b>اضافة بند جديد</b></h4>
                        </div>
                        <div class="modal-body-popup">
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="validationCustomTitle">عنوان البند <span
                                            class="red-star"><sup>*</sup></span></label>
                                    <input class="form-control" id="validationCustomTitle"oninvalid="this.setCustomValidity('عنوان البند مطلوب')"
                                        oninput="this.setCustomValidity('')" name="title" required />
                                </div>
                                <div class="form-group ">
                                    <label for="validationCustomText">نص البند  <span
                                            class="red-star"><sup>*</sup></span></label>
                                    <textarea class="form-control" style="resize: vertical" id="validationCustomText" oninvalid="this.setCustomValidity('نص البند مطلوب')"
                                        oninput="this.setCustomValidity('')" name="text" required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer-popup">
                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>

                            <button type="submit" class="btn btn-success">اضافة
                                بند</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -- Edit term -->
        <div class="modal fade" id="editAdmin" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('editterm')}}" method="post" novalidate>
                        {{ csrf_field() }}
                        <script type="text/javascript">
                            $("button").click(function() {
                                var fired_button = $(this).val();
                                var res = fired_button.split(",");
                                document.getElementById('termid').value=res[0];
                                document.getElementById('validationCustomTitleEdit').value=res[1];
                                document.getElementById('validationCustomTextEdit').value=res[2];
                            });
                        </script>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b>تعديل بيانات البند</b></h4>

                        </div>
                        <div class="modal-body-popup">
                                <div class="form-row">
                                    <div class="form-group ">
                                        <label for="validationCustomTitleEdit">عنوان البند <span
                                                class="red-star"><sup>*</sup></span></label>
                                        <input type="hidden" id="termid" name="id" >
                                        <input type="text" class="form-control" id="validationCustomTitleEdit"oninvalid="this.setCustomValidity('عنوان البند مطلوب')"
                                           name="title" oninput="this.setCustomValidity('')" required />
                                    </div>
                                    <div class="form-group ">
                                        <label for="validationCustomTextEdit">نص البند  <span
                                                class="red-star"><sup>*</sup></span></label>
                                        <textarea class="form-control" style="resize: vertical" id="validationCustomTextEdit" oninvalid="this.setCustomValidity('نص البند مطلوب')"
                                           name="text" oninput="this.setCustomValidity('')" required ></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer-popup">
                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>

                            <button type="submit" class="btn btn-success">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -- delete Admin -->
        <div class="modal fade" id="delAdmin" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('deleteterm')}}" method="post" novalidate>
                        {{ csrf_field() }}
                        <script type="text/javascript">
                            $("button").click(function() {
                                var termid = $(this).val();
                                document.getElementById('term2id').value=termid;
                            });
                        </script>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><b>حذف البند</b></h4>
                            <input type="hidden" id="term2id" name="id" >
                        </div>
                        <div class="modal-body-popup">
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="validationCustomfName">هل تريد حذف البند ؟ <span
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
        <!-- Modal -- Edit account -->
@endsection