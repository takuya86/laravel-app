@extends('layouts.app')

@section('content')

<div class="card home-mein">
  <img class="card-img-top" src="/images/travel.png" alt="Card image cap">
  <div class="card-body prefs-choice">
    <h3 class="card-title home-title">さぁ、集まろう！</h3>
      <select type="text" class="form-control" name="area">
        @foreach(config('pref') as $key => $score)
            <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
      </select>
    <a href="#!" class="btn btn-primary">GO!</a>
  </div>
</div>
@endsection