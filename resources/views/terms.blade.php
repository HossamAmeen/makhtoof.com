@extends('layout.layout')
@section('content')

  @if(isset($terms))
  <div class="container">
    <div class="signUp-div">
      <div class="">

        <label class="low-hdr"><b> شروط الاستخدام</b></label>
        <br><br>
        @foreach($terms as $term)
        <h6> <b>{{ $term->title  }}</b></h6>
        <h6> {{$term->text}} </h6>
        <br><br>
        @endforeach

      </div>
    </div>
  </div>
  </div>
@endif
 @endsection