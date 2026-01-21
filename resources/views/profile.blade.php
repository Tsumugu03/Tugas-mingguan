@extends('layouts.main')

@section('content')

<div class="row justify-content-center mt-5">
	<div class="col-md-6">
		<div class="card shadow-lg border-0 rounded-lg">
			<div class="card-body text-center">
				<img src="{{ $foto }}" alt="Profile Picture" class="rounded-circle mb-3" style="width: 140px; height: 140px; object-fit: cover; border: 4px solid #00fff7; box-shadow: 0 0 20px #00fff7;">
				<h2 class="card-title font-weight-bold" style="color: #00fff7;">{{ $nama }}</h2>
				<p class="card-text text-muted mb-2">No. HP: <span style="color: #00fff7;">{{ $nohp }}</span></p>
				<hr style="border-top: 2px solid #00fff7; width: 60%; margin: 20px auto;">
				<p class="mt-3" style="font-size: 1.1rem;">Selamat datang di halaman profil!<br>Ingin Menjadi Programer Handal Namun Enggan Ngoding</p>
			</div>
		</div>
	</div>
</div>
@endsection