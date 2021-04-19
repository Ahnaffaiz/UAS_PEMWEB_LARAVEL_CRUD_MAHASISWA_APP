@extends('home')
@section('home', 'active')
@section('content')
    <div class="container my-3">
        @if(session ('successMsg'))
        <div class="alert alert-success" role="alert">
            {{session ('successMsg')}}
        </div>
        @endif
        <div class="col mt-5">
            <h2>Data Mahasiswa</h2>
            <a class="btn btn-primary mt-3 mb-2" href="{{route('mahasiswa.create')}}">Tambah Mahasiswa</a>
            <table class="table table-hover mb-5" id="table-mahasiswa">
                <thead>
                    <th>
                        <td class="text-center">NIM</td>
                        <td class="text-center">Nama Lengkap</td>
                        <td class="text-center">Angkatan</td>
                        <td class="text-center">Email</td>
                        <td class="text-center">Telepon</td>
                        <td class="text-center">Action</td>
                    </th>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nim}}</td>
                        <td>{{$data->nama_lengkap}}</td>
                        <td>{{$data->angkatan}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->telp}}</td>
                        <td class="text-center">
                            <a href="{{route('mahasiswa.edit', $data->id)}}" class="btn btn-primary">EDIT</a>
                            <form action="{{route('mahasiswa.destroy', $data->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
