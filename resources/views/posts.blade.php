@extends('layouts.two')

@section('container')

<h1 class="text-main3">{{ $data->judul }}</h1>
<p class="text-main2">{{ $data->parag }}</p>
<br>
<br>
<a href="/register" class="text-main3">Kembali</a>


@endsection