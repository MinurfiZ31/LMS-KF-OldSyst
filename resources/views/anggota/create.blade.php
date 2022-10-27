

@extends('layout.main')


@section('title', 'Laravel - Perpustakaan AL-Kahfi')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Tambah Data Anggota</h1>


<hr class="my-4">     


<form action="/anggota" method="POST">


@csrf


<div class="form-group">


<label for="nama_anggota">Nama Anggota</label>


<input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota" value="">


</div>


<div class="form-group">


<label for="posisi">Posisi</label>

 
<select class="form-control" id="posisi" name="posisi">

    <option value="">Pilih Posisi/Jabatan</option>
    <option value="Manager Produksi">Manager Produksi</option>
    <option value=""></option>

</select> 
    




</div>


<div class="form-group">


<label for="jenis_kelamin">Jenis Kelamin</label>
<select type="text" class="custom-select form-control" id="jenis_kelamin" name="jenis_kelamin">
    <option value="laki-laki">Laki-laki</option>
    <option value="perempuan">Perempuan</option>
</select>


</div>


<div class="form-group">


<label for="no_telp">No. HP</label>


<input type="text" class="form-control" id="no_tlp" 


                    name="no_tlp" placeholder="NO. HP" 


                    value="{{ old('no_telp') }}">


</div>


<button type="submit" class="btn btn-primary">Simpan</button>


</form>


</div>


</div>


@endsection


