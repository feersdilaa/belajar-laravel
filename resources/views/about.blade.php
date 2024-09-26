@extends('layouts.main')
@section('container')
<div style="text-align: center;">
    <img src="{{ $images }}" alt="foto-jamal" width="200" class="img-thumbnail rounded-circle">
</div>
<h5 class="card-title" style="text-align:center">{{ $name }}</h5>
<p class="card-text" style="text-align:center">{{ $descryption }}</p>
<ul class="list-group list-group-flush" style="text-align: center">
    <li class="list-group-item">{{ $email }}</li>
    <li class="list-group-item">{{ $instagram }}</li>
    <li class="list-group-item">{{ $linkedin }}</li>
</ul>

<div style="text-align: center;">
    <a href="{{ $github }}">Github</a>
</div>
@endsection