@extends('layouts.main')

@section('content')
<h1>profile</h1>

<h3>{{ $nama }}</h3>
<p>{{ $nohp }}</p>
<img src="{{ $foto }}" alt="132098-1700211169.webp" style="max-width: 200px;">
@endsection