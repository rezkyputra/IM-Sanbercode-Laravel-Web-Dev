@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <h1>Selamat Datang {{$fullname}}</h1>
    <p>{{$address}}</p>
@endsection