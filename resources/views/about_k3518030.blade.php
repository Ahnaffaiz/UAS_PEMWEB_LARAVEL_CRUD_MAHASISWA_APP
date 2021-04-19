@extends('home')
@section('about', 'active')
@section('content')
    <div class="container my-5">
        @if(session ('successMsg'))
        <div class="alert alert-success" role="alert">
            {{session ('successMsg')}}
        </div>
        @endif
        <div class="row">
            <div class="col-4">
                <h2 class="mb-2">Data Mahasiswa</h2>
                @foreach ($datas as $data)
                <table class="table table-hover">
                    <tr>
                        <td scope="col">NIM</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->nim}}</td>
                    </tr>
                    <tr>
                        <td scope="col">Nama</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->nama}}</td>
                    </tr>
                    <tr>
                        <td scope="col">Alamat</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->alamat}}</td>
                    </tr>
                    <tr>
                        <td scope="col">Bidang Peminatan</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->bidang_peminatan}}</td>
                    </tr>
                    <tr>
                        <td scope="col">Email</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->email}}</td>
                    </tr>
                    <tr>
                        <td scope="col">Telepon</td>
                        <td scope="col">:</td>
                        <td scope="col">{{$data->telp}}</td>
                    </tr>
                </table>
                <a class="btn btn-primary my-4" style="button" href="{{route('about.edit', $data->id)}}"><i class="fas fa-edit    "></i> Edit Profil</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection