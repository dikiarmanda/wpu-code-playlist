@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <h3>{{ $email }}</h3>
  <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle" style="width: 100px">
@endsection
