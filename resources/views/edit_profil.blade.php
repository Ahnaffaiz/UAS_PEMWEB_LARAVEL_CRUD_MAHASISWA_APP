@extends('home')
@section('about', 'active')
@section('content')
    <div class="container">
        <div class="col-4">
            <h2 class="my-3">Edit Profil Mahasiswa</h2>
            <form action="{{route('about.update', $data->id  )}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group my-3">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" placeholder="masukkan nim" class="form-control" value="{{$data->nim}}">
                </div>
                <div class="form-group my-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="masukkan nama" class="form-control" value="{{$data->nama}}">
                </div>
                <div class="form-group my-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="masukkan alamat" class="form-control" value="{{$data->alamat}}">
                </div>
                <div class="form-group my-3">
                    <label for="bidang_peminatan">Peminatan</label>
                    <select name="bidang_peminatan" id="bidang_peminatan" class="custom-select form-control">
                        <option value="rpl" {{"rpl" == $data->bidang_peminatan ? 'selected':''}}>Rekayasa Perangkat Lunak</option>
                        <option value="tkj" {{"tkj" == $data->bidang_peminatan ? 'selected':''}}>jaringan Komputer</option>
                        <option value="mm" {{"mm" == $data->bidang_peminatan ? 'selected':''}}>Multimedia</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="email">Nama</label>
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