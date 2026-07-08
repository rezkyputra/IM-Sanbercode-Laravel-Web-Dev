@extends('layouts.master')
@section('title')
    Halaman Home
@endsection
@section('content')
     <h1>Selamat Datang {{$fullname}} </h1>
    <p>biodata : {{$bio}}</p>
@endsection