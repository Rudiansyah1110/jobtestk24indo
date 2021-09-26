@extends('main-template')

@section('container')

<div class="container main_content_aflog">
    <div class="row">
       <div class="col-sm-12">
       	<div class="card shadow mb-4">
       		<div class="card-body">

       			<div class="row mb-4">
       				<div class="col-sm-4 d-flex justify-content-center">
       					<img src="{{ asset('all_photo/'. $datanya['data_created'][0]->photo) }}" class="img-fluid rounded-circle">
       				</div>
       				<div class="col-sm-8 text-aflog">
       					<h3 class="text-muted">Pendaftaran Berhasil <span>#111098</span> </h3>
       					<b>{{ $datanya['data_created'][0]->name }}</b>
       					<br><br>
       					<p>Terima kasih telah mendaftar, Berikut adalah Data anda:</p>
       				</div>
       			</div>

       			<div class="row">
       				<div class="col-sm-6">
   						<table class="table table-sm">
   							<tr>
   								<th colspan="3" class="text-center">Data Detail</th>
   							</tr>
   							<tr>
   								<td>ID Pelanggan</td>
   								<td>&nbsp : &nbsp</td>
   								<td>111098</td>
   							</tr>
   							<tr>
   								<td>Nama</td>
   								<td>&nbsp : &nbsp</td>
   								<td>{{ $datanya['data_created'][0]->name }}</td>
   							</tr>
   							<tr>
   								<td>No. KTP</td>
   								<td>&nbsp : &nbsp</td>
   								<td>{{ $datanya['data_created'][0]->ktp }}</td>
   							</tr>
   							<tr>
   								<td>Jenis Kelamin</td>
   								<td>&nbsp : &nbsp</td>
   								<td>{{ $datanya['data_created'][0]->gender }}</td>
   							</tr>
   							<tr>
   								<td>Tanggal Daftar</td>
   								<td>&nbsp : &nbsp</td>
   								<td>{{ $datanya['data_created'][0]->created_at }}</td>
   							</tr>
   						</table>
       				</div>
       				<div class="col-sm-6">
       					<p class="text-description">
       						Terima kasih atas minat dan waktu yang anda luangkan untuk mengikuti proses pendaftaran.
       						<br>
       						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       						<br><br>
       						klik tombol di bawah ini untuk melakukan login.
       						<br>
       					</p>
       					<a href="/login-member" class="btn btn-primary">Login</a href="">
       				</div>
       			</div>
       		</div>
       	</div>
       </div>
    </div>
</div>

@endsection
