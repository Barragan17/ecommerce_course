@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->
  
<div class="row justify-content-center">
  <div class="col-md-4">
      <img class="img-profile" src="https://lh3.googleusercontent.com/proxy/H3c1ouVyGRztvV2Kjb1uFFgDfYAN8rKJ1iT39TI3Z3WRRJZk3vuKqOBj9lHcqHM6VgUfGKlQNsd2VxXi7Od5r_8hSUan7eIJu2MsdadGbq_ezO_mzrsOm-Q590I_d8t1jzWyFW150fU_tg" alt="no-image">
  </div>
  <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name</label>
      <p>{{Auth::user()->name}}</p>
      <label for="">Email</label>
      <p>{{Auth::user()->email}}</p>
      <label for="">Address</label>
      <p>{{Auth::user()->address}}</p>
      <label for="">Phone</label>
      <p>{{Auth::user()->phone}}</p>
          </div>
      </div>
</div>
</div>
@endsection
