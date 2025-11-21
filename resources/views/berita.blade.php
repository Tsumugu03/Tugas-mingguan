@extends('layouts.main')

@section('content')

@foreach($beritas as $berita)
<a href="/berita/{{ $berita ['slug'] }}" >
    <h2>{{ $berita['judul'] }}</h2>
</a>
<h3>{{ $berita['penulis'] }}</h3>
<br>

@endforeach
@endsection