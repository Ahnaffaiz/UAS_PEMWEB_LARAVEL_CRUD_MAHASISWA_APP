@extends('home')
@section('home', 'active')
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-4">
        <H1> Tambah data Mahasiswa </H1><br>
        <form class="border border-light" action="{{route('mahasiswa.store')}}" method="POST">
          <!-- 2 column grid layout with text inputs for the first and last names -->
        {{ csrf_field() }}
        
          <!-- NIM input -->
          <div class="form-group my-3">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" />
          </div>
            
        
          <!-- Nama input -->
          <div class="form-group my-3">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" />
          </div>
        
          <!-- Angkatan input -->
          <div class="form-group my-3">
            <label for="angkatan">Angkatan</label>
            <input type="number" id="angkatan" name="angkatan" class="form-control" placeholder="Angkatan" />
          </div>
        
        
          <!-- Email input -->
          <div class="form-group my-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
          </div>
          <!-- Number input -->
          <div class="form-group my-3 mb-3">
            <label for="telp">Telepon</label>
            <input type="number" id="telp" name="telp" class="form-control" placeholder="Telp" />
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>
        </form>
      </div>
    </div>
    </div>
    
@endsection