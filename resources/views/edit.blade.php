@extends('home')
@section('home', 'active')
@section('content')
    <div class="container">
        <div class="col-4">
            <h2 class="my-3">Edit Data Mahasiswa</h2>
            <form action="{{route('mahasiswa.update', $data->id  )}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group my-3">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" placeholder="masukkan nim" class="form-control" value="{{$data->nim}}">
                </div>
                <div class="form-group my-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="masukkan nama" class="form-control" value="{{$data->nama_lengkap}}">
                </div>
                <div class="form-group my-3">
                    <label for="angkatan">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" placeholder="masukkan angkatan" class="form-control" value="{{$data->angkatan}}">
                </div>
                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="masukkan email" class="form-control" value="{{$data->email}}">
                </div>
                <div class="form-group my-3">
                    <label for="telp">Telepon</label>
                    <input type="text" name="telp" id="telp" placeholder="masukkan telp" class="form-control" value="{{$data->telp}}">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </form>
            <br>
        </div>
    </div>
@endsection