@extends('template/main')


@section('judul', 'Form Ubah data mahasiswa')

@section('container')
<div class="container">
 <div class="row">
  <div class="col-8">
      <h1>Form Ubah Data mahasiswa</h1>

      <form method="post" action="/students/{{ $student->id}}">
      @method('patch')
      @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{$student->nama}}">
    @error('nama')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="nrp">nrp</label>
    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" value="{{$student->nrp}}">
    @error('nrp')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{$student->email}}">
    @error('email')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{$student->jurusan}}">
    @error('jurusan')
    <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Ubah data</button>
</form>
      

  </div>
 </div>
</div>
@endsection