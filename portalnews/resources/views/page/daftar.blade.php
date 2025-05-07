@extends('layouts.master')
@section('title')
Halaman Daftar
@endsection
@section('content')
    
<a href="/">Kembali</a>
<form action="/dashboard" method="POST">
    @csrf
    <label>Full Name</label> <br>
    <input type="text" name="fname"> <br> <br>
    <label>Address</label> <br>
    <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

    <input type="submit" value="Sign up">
</form>
@endsection