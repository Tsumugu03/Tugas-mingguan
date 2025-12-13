@extends('layouts.main')

@section('content')
<section class="hero">
	<div class="hero-inner">
		<h1 class="hero-title">Welcome to LaravelTI</h1>
		<p class="hero-sub">A sleek cyber-red interface — elegant, neon-lit, and ready for your data.</p>
		<p class="hero-ctas">
			<a href="/datamahasiswa" class="btn btn-primary">View Students</a>
			<a href="/tambahmahasiswa" class="btn btn-outline-light ml-2">Add Student</a>
		</p>
	</div>
</section>

@endsection