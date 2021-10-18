@extends('pegawai.master')
@section('content')
    <h2>Tambah Data</h2>
    <form action="/pegawai" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telepon">telepon</label>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukkan telepon">
            @error('telepon')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="pekerjaan">pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukkan pekerjaan">
            @error('pekerjaan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection