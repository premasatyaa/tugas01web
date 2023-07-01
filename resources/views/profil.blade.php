@extends('layouts.main')

@section('container')
    <h1>Halaman Profil</h1>
    <p>{{ $name; }}</p>
    {{ $nim; }}<p>
    {{ $prodi; }}<p>
    {{ $email; }}<p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="150">
@endsection
