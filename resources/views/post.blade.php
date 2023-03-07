@extends('layouts.two')

@section('container')
@foreach ($data as $data)
<h1 class="text-main3">{{ $data->judul }}</h1>
<p class="text-main2">{{ $data->execpt }}</p>
<a href="/posts/{{ $data->slug }}" class="text-main3">More......</a>
<br>
<br>
@endforeach
 
@endsection