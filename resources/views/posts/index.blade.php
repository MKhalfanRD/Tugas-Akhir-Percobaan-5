@extends('posts.template')
@section('content')

<h1>Daftar Mahasiswa angkatan 2020</h1>
@foreach ($data as $setiap_data)
<p>{{$setiap_data ->nama_mhs}}</p>

@endforeach
@endsection


