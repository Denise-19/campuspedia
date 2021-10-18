@extends('pegawai.master')
@section('content')
    <div>
        <h2>Edit pegawai {{$pegawai->id}}</h2>
        <form action="/pegawai/{{$pegawai->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" name="nama" value="{{$pegawai->nama}}" id="nama" placeholder="Masukkan nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email"  value="{{$pegawai->email}}"  id="email" placeholder="Masukkan email">
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{$pegawai->alamat}}" id="alamat" placeholder="Masukkan alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="telepon">telepon</label>
                <input type="text" class="form-control" name="telepon" value="{{$pegawai->telepon}}" id="telepon" placeholder="Masukkan telepon">
                @error('telepon')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pekerjaan">pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" value="{{$pegawai->pekerjaan}}" id="pekerjaan" placeholder="Masukkan pekerjaan">
                @error('pekerjaan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection