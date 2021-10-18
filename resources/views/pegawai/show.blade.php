@extends('pegawai.master')
@section('content')
    <h2>Show pegawai {{$pegawai->id}}</h2>
    <h4>{{$pegawai->nama}}</h4>
    <h4>{{$pegawai->email}}</h4>
    <h4>{{$pegawai->alamat}}</h4>
    <h4>{{$pegawai->telepon}}</h4>
    <h4>{{$pegawai->pekerjaan}}</h4>
@endsection