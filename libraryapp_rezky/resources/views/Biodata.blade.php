@extends('layouts.master')
@section('title')
    Halaman Daftar
@endsection
@section('content')
    <form action="/home" method="POST">
        @csrf

        <label >Fullname</label> <br>
        <input type="text" name="fullname"> <br> <br>
        <label >Biodata</label> <br>
        <textarea name="bio"  cols="30" rows="10"></textarea> <br> <br>

        <input type="submit" value="Kirim">

    </form>
@endsection
    