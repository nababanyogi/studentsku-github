@extends('layout.main')

@section('title', 'Form Edit Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Students</h1>
            <form method="post" action="/students/{{$student->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                @error('nama') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK" name="nik" value="{{ $student->nik }}">  
                @error('nik') 
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" variant_di value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan"  value="{{ $student->jurusan }}">
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form> 
             
        </div>
    </div>
</div>
@endsection