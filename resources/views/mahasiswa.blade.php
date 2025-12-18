@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="content-panel card p-4">
  <h1 class="text-center">Data Mahasiswa</h1>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/tambahmahasiswa" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="table-responsive">
    <table class="table table-borderless mb-0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Email</th>
      <th scope="col">no. Hp</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?>
    @foreach ($data as $mahasiswa)
    <tr>
        <th scope="row"><?php echo $i?></th>
        <td>{{$mahasiswa["name"]}}</td>
        <td>{{$mahasiswa["nim"]}}</td>
        <td>{{$mahasiswa["prodi"]}}</td>
        <td>{{$mahasiswa["email"]}}</td>
        <td>{{$mahasiswa["nohp"]}}</td>
        <td>
            <a href="tampildata/{{ $mahasiswa['id'] }}" class="btn btn-primary">EDIT</a>
            <a href="javascript:void(0)" class="btn btn-danger btn-hapus" data-id="{{ $mahasiswa['id'] }}">HAPUS</a>
        </td>
       
<?php $i++?>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnHapus = document.querySelectorAll('.btn-hapus');
    
    btnHapus.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            
            Swal.fire({
                title: "Yakin mau hapus data ini?",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                backdrop: `
                    rgba(0,0,123,0.4)
                    url("https://sweetalert2.github.io/images/nyan-cat.gif")
                    left top
                    no-repeat
                `,
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/delete/' + id;
                }
            });
        });
    });
});
</script>
@endsection