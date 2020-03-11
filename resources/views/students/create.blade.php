@extends('layout.main')

@section('title', 'Form Add Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Add Students</h1>
            <form method="post" action="/students">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                @error('nama') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK" name="nik" value="{{ old('nik') }}">  
                @error('nik') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" variant_di value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan"  value="{{ old('jurusan') }}">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form> 
             
        </div>
    </div>
</div>
@endsection