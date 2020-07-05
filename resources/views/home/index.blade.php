@extends('layouts.app')

@section('content')

<div class="card">
  <img class="card-img-top" src="/images/travel.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">さぁ、集まろう！</h4>

     <select class="custom-select">
     @foreach($prefs as $index => $nama)
        <option value="{{ $index }}">$name</option>
     @endforeach
    </select>
    <a href="#!" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- <div class="card">
  <img class="card-img-top" src="/images/travel.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">さぁ集まろう</h4>
      <select class="custom-select col-sm-8">
        <option>どこで集まる？</option>

      </select>
    <a href="#!" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

@endsection