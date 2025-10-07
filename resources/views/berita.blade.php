@extends('main')

@section('title', 'Berita - Website Sederhana')

@section('content')
<h1>Berita Terkini</h1>
<p>Halaman ini menampilkan berita-berita terbaru.</p>

<div style="margin-top: 2rem;">
    <article style="border-bottom: 1px solid #ddd; padding-bottom: 1rem; margin-bottom: 1rem;">
        <h3>Judul Berita 1</h3>
        <p style="color: #666; font-size: 0.9rem;">Tanggal: 7 Oktober 2025</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </article>
    
    <article style="border-bottom: 1px solid #ddd; padding-bottom: 1rem; margin-bottom: 1rem;">
        <h3>Judul Berita 2</h3>
        <p style="color: #666; font-size: 0.9rem;">Tanggal: 6 Oktober 2025</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
    
    <article style="border-bottom: 1px solid #ddd; padding-bottom: 1rem; margin-bottom: 1rem;">
        <h3>Judul Berita 3</h3>
        <p style="color: #666; font-size: 0.9rem;">Tanggal: 5 Oktober 2025</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </article>
</div>
@endsection