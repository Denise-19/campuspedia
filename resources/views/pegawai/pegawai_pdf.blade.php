<!DOCTYPE html>
<html>
<head>
	<title>Pegawai Campuspedia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<table align="center">
		<tr>
			<td><img src="" width="70" height="70"></td>
			
			<td><center>
				<font size="4">SURAT IZIN TIDAK MASUK KERJA</font><br>
				<font size="5"><b>Campuspedia Academy</b></font><br>
				<font size="2"><i>Jln.Sisingamangaraja N0.19 Balige telp.08636363663</i></font><br>
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
	</table>
	<br>
	<table align="center">
		<tr>
			<td colspan="2">Dengan hormat, <br>
				Saya yang bertanda tangan dibawah ini :
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td width="500"> : {{$pegawai->nama}} </td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td width="500"> : {{$pegawai->alamat}}</td>
		</tr>
		<tr>
			<td>No.Telepon</td>
			<td width="500"> : {{$pegawai->telepon}}</td>
		</tr>
		<tr>
			<td height="50" colspan="2"></td>
		</tr>
		<tr>
			<td colspan="2">Bermaksud mengajukan izin cuti karena sedang rawat inap di Rumah Sakit Hijau Medan. <br>
				Demikian surat izin cuti ini saya ajukan. Atas perhatian dan diberukannya permohonan izin <br>
				saya ini, saya ucapkan banyak terima kasih.
			</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td><center>Permohonan</center></td>
		</tr>
		<tr>
			<td><center>             </center></td>
		</tr>
		<tr>
			<td><center><u>{{$pegawai->nama}}  </u></center</td>
		</tr>
</head>
<body>
	{{-- <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Pegawai Campuspedia</h4>

	</center> --}}
 
	{{-- <table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Pekerjaan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->alamat}}</td>
				<td>{{$p->telepon}}</td>
				<td>{{$p->pekerjaan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table> --}}
 
</body>
</html>