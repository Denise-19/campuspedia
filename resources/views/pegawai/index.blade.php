@extends('pegawai.master')
@section('content')
<center><a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a></center><br>	<br>	
    <a href="/pegawai/create" class="btn btn-primary mb-3">Tambah</a>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($pegawai as $key=>$value)
                        <tr>
                            <td>{{$key + 1}}</th>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->alamat}}</td>
                            <td>{{$value->telepon}}</td>
                            <td>{{$value->pekerjaan}}</td>
                            <td>
                                <a href="/pegawai/{{$value->id}}" class="btn btn-info">Show</a>
                                <a href="/pegawai/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                <form action="/pegawai/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                                </form>
                                <a href="/pegawai/{{$value->id}}/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                            </td>
                        </tr>
                    @empty
                        <tr colspan="3">
                            <td>No data</td>
                        </tr>  
                    @endforelse              
                </tbody>
            </table>
@endsection