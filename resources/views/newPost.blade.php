@extends('layout.layout')
@section('content')


  <div class="container">
    <div class="newPosr-div">
      <div class="row">
        <div class="col-12 post-toggle-hdr">
          <div class="list-group post-toggle" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
              href="#list-home" role="tab" aria-controls="home">ابلغ عن مفقود اعرفه</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
              href="#list-profile" role="tab" aria-controls="profile">ساعد في ايجاد مفقود</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
              href="#list-messages" role="tab" aria-controls="messages">ابلغ عن نفسى ك مفقود</a>
          </div>
        </div>
        <div class="col-12 post-div-part">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
              <form class="needs-validation" action="/storepost" method="post" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="usr_id" value="{{Auth::user()->id}}" >
                <input type="hidden" name="category" value="1" >
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">اسم المفقود<span class="red-star"><sup>*</sup></span></label>
                    <div class="input-group">
                      <input type="text" name="name" class="form-control" id="validationCustomsName" placeholder=""
                        aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        ادخل اسم المخطوف
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">صلة القرابة<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" name="r_r" class="form-control" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" required>
                      <option></option>
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

                    <select id="inputState" name="age" class="form-control" id="validationCustomState"
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
                    <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" name="gender" class="form-control" id="validationCustomState"
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
                    <select id="inputState" name="b_t" class="form-control" id="validationCustomState"
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
                    <select id="inputState" class="form-control countries" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="governate" required>
                      <option disabled selected hidden> </option>
                    </select>
                    <div class="invalid-feedback">
                      اختر المحافظة
                    </div>
                   
                  </div>
                  <div class="form-group col-md-4 option">
                    <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" class="form-control غيرمحدد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" required>
                    </select>
                    <select id="inputState" class="form-control اسوان" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control اسيوط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاسماعيلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الجيزة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاسكندرية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الاقصر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control البحرالاحمر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control البحيرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الدقهلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control السويس" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الشرقية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الغربية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الفيوم" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control القاهرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control القليوبية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control المنوفية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control المنيا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control الوادي_الجديد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control بني_سويف" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control بورسعيد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control جنوب_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control دمياط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control سوهاج" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control شمال_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control قنا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control كفرالشيخ" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                    <select id="inputState" class="form-control مطروح" id="validationCustomState"
                      aria-describedby="inputGroupPrepend"  >
                      <option disabled selected hidden></option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="validationCustomEmail">الشارع<span class="red-star"><sup></sup></span></label>
                    <div class="input-group">
                      <input type="text" name="street" class="form-control" id="validationCustomsName" placeholder=""
                        aria-describedby="inputGroupPrepend">
                     
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">العنوان بالتفصيل<span
                        class="red-star"><sup>*</sup></span></label>
                        <br>
                    <span class="otherInfo">اين فقدته - المكان بالتفصيل</span>
                    <br>
                    <div class="input-group">
                      <input type="text" name="d_a" class="form-control" id="validationCustomsName" placeholder=""
                        aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        ادخل عنوانك بالتفصيل
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="validationCustomEmail"> هل تقدمت ببلاغ للمباحث ؟<span
                          class="red-star"><sup>*</sup></span></label>
                          <br>
                      <span class="otherInfo">بلاغ للشرطة او المباحث</span>
                      <br>
                      <div class="input-group">
                          <select id="inputState" name="police" class="form-control" id="validationCustomState"
                          aria-describedby="inputGroupPrepend" required>
                          <option></option>
                          <option>نعم</option>
                          <option>لا</option>
                          
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
                        <br>
                        <span class="otherInfo">مثل لون الملابس ومواصفاتها ولون الشعر والبشرة</span>
                        <br>
                    <div class="input-group">
                      <textarea class="form-control" name="o_i" required></textarea>
                      <div class="invalid-feedback">
                          ادخل معلومات اخرى تساعد في ايجاده
                        </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <label for="validationCustomEmail">ارفع صور خاصة بالمخطوف<span
                          class="red-star"><sup>*</sup></span></label>
                      <input class="form-control-file" type="file" name="image"
                             oninvalid="this.setCustomValidity('الصورة 3 مطلوبة')" oninput="this.setCustomValidity('')"
                             multiple required>
                             <div class="invalid-feedback">
                                ارفع صورا تساعد في ايجاده
                              </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <button type="submit" class="btn intro-btn editProfile-btn">نشر</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>




            <!-- 2 -->

            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              <form class="needs-validation" action="/storepost" method="post" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                <input type="hidden" name="usr_id" value="{{Auth::user()->id}}" >
                <input type="hidden" name="category" value="2" >
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" name="gender" class="form-control" id="validationCustomState"
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
                    <select id="inputState" name="age" class="form-control" id="validationCustomState"
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
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6 ">
                      <label for="validationCustomEmail">المحافظة<span class="red-star"><sup>*</sup></span></label>
                      <select id="inputState" class="form-control countries" id="validationCustomState"
                        aria-describedby="inputGroupPrepend" name="governate" required>
                        <option disabled selected hidden> </option>
                      </select>
                      <div class="invalid-feedback">
                        اختر المحافظة
                      </div>
                  </div>
                  <div class="form-group col-md-6 option">
                      <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                      <select id="inputState" class="form-control غيرمحدد" id="validationCustomState"
                        aria-describedby="inputGroupPrepend" required>
                      </select>
                      <select id="inputState" class="form-control اسوان" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control اسيوط" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الاسماعيلية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الجيزة" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الاسكندرية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الاقصر" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control البحرالاحمر" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control البحيرة" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الدقهلية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control السويس" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الشرقية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الغربية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الفيوم" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control القاهرة" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control القليوبية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control المنوفية" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control المنيا" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control الوادي_الجديد" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control بني_سويف" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control بورسعيد" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control جنوب_سيناء" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control دمياط" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control سوهاج" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control شمال_سيناء" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control قنا" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control كفرالشيخ" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                      <select id="inputState" class="form-control مطروح" id="validationCustomState"
                        aria-describedby="inputGroupPrepend"  >
                        <option disabled selected hidden></option>
                      </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="validationCustomEmail">العنوان بالتفصيل<span
                        class="red-star"><sup>*</sup></span></label>
                        <br>
                    <span class="otherInfo">اين فقدته - المكان بالتفصيل</span>
                    <br>
                    <div class="input-group">
                      <input type="text" name="d_a" class="form-control" id="validationCustomsName" placeholder=""
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
                        <br>
                        <span class="otherInfo">مثل لون الملابس ومواصفاتها ولون الشعر والبشرة</span>
                        <br>
                    <div class="input-group">
                      <textarea class="form-control" name="o_i" required></textarea>
                      <div class="invalid-feedback">
                          ادخل معلومات اخرى تساعد في ايجاده
                        </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <label for="validationCustomEmail">ارفع صور خاصة بالمخطوف<span
                          class="red-star"><sup>*</sup></span></label>
                      <input class="form-control-file" type="file" name="image"
                        oninvalid="this.setCustomValidity('الصورة 3 مطلوبة')" oninput="this.setCustomValidity('')"
                        multiple required>
                        <div class="invalid-feedback">
                            ارفع صورا تساعد في ايجاده
                          </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <button type="submit" class="btn intro-btn editProfile-btn">نشر</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>


            <!-- 3 -->

            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
              <form class="needs-validation" action="/storepost" method="post" enctype="multipart/form-data"  novalidate>
                {{csrf_field()}}
                <input type="hidden" name="usr_id" value="{{Auth::user()->id}}" >
                <input type="hidden" name="category" value="3" >
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">اسم المفقود<span class="red-star"><sup>*</sup></span></label>
                    <div class="input-group">
                      <input type="text" name="name" class="form-control" id="validationCustomsName" placeholder=""
                        aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        ادخل اسم المخطوف
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="validationCustomEmail">النوع<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" name="gender" class="form-control" id="validationCustomState"
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
                    <select id="inputState" name="age_before" class="form-control" id="validationCustomState"
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
                    <label for="validationCustomEmail">السن الآن<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" name="age" class="form-control" id="validationCustomState"
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
                    <select id="inputState" name="b_t" class="form-control" id="validationCustomState"
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
                    <select id="inputState" class="form-control countries" id="validationCustomState"
                    aria-describedby="inputGroupPrepend" name="governate" required>
                  </select>
                    <div class="invalid-feedback">
                      اختر المحافظة
                    </div>
                    
                  </div>
                  <div class="form-group col-md-4 option">
                    <label for="validationCustomEmail">المدينة<span class="red-star"><sup>*</sup></span></label>
                    <select id="inputState" class="form-control غيرمحدد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >

                    </select>
                    <select id="inputState" class="form-control اسوان" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control اسيوط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاسماعيلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الجيزة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاسكندرية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الاقصر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control البحرالاحمر" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control البحيرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الدقهلية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control السويس" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الشرقية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الغربية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الفيوم" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control القاهرة" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control القليوبية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control المنوفية" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control المنيا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control الوادي_الجديد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control بني_سويف" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control بورسعيد" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control جنوب_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control دمياط" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control سوهاج" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control شمال_سيناء" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control قنا" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control كفرالشيخ" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <select id="inputState" class="form-control مطروح" id="validationCustomState"
                      aria-describedby="inputGroupPrepend" name="city" >
                      <option disabled selected hidden>المدينة ...</option>
                    </select>
                    <div class="invalid-feedback">
                      اختر المدينة
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="validationCustomEmail">الشارع<span class="red-star"><sup></sup></span></label>
                    <div class="input-group">
                      <input type="text" name="street" class="form-control" id="validationCustomsName" placeholder=""
                        aria-describedby="inputGroupPrepend">
                      <div class="invalid-feedback">
                        ادخل اسم المخطوف
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="validationCustomEmail">العنوان بالتفصيل<span
                        class="red-star"><sup>*</sup></span></label>
                    <div class="input-group">
                      <input type="text" name="d_a" class="form-control" id="validationCustomsName" placeholder=""
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
                      <textarea class="form-control" name="o_i" required></textarea>
                      <div class="invalid-feedback">
                        ادخل عنوانك بالتفصيل
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <label for="validationCustomEmail">ارفع صور خاصة <span
                          class="red-star"><sup>*</sup></span></label>
                      <input class="form-control-file" type="file" name="image" accept="image/x-png,image/gif,image/jpeg"
                        oninvalid="this.setCustomValidity('الصورة 3 مطلوبة')" oninput="this.setCustomValidity('')"
                        multiple required>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="">
                      <button type="submit" class="btn intro-btn editProfile-btn">نشر</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach($home as $h)
  @endforeach
  @endsection