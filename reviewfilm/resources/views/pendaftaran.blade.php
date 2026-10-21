@extends('layouts.master')
@section('title')
    Daftar Biodata
@endsection
@section('content')
    <form action="/welcome" method="POST">
        @csrf
        <label >Full Name</label> <br>
        <input type="text" name="fullname"> <br> <br>
        <label >Alamat</label> <br>
        <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

        <input type="submit" value="daftar">
    </form>
@endsection