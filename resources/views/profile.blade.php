@extends('layouts.main')

@section('content')
<h1>profile</h1>

<h3>{{ $nama }}</h3>
<p>{{ $nohp }}</p>
<img src="{{ $foto }}" alt="images.jpg" style="max-width: 200px;">
@endsection