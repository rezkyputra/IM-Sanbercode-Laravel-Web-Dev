@extends('layouts.master')
@section('title')
    Halaman Dashboard
@endsection
@section('content')
    
<h1>Selamat Datang</h1>
<p>Nama Lengkap : {{$fullname}}</p>
<p>Biodata : {{$bio}}</p>
@endsection