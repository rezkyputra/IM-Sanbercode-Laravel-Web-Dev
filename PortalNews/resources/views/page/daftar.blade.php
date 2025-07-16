@extends('layouts.master')
@section('title')
    Halaman Daftar
@endsection
@section('content')
    
    <form method="POST" action="/home">
        @csrf

        <label >Full Name</label> <br>
        <input type="text" name="fullname"> <br> <br>
        <label >Biodata</label> <br>
        <textarea name="bio" ></textarea> <br> <br>

        <input type="submit" value="Daftar">

    </form>
@endsection
    