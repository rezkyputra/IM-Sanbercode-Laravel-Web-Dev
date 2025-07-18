@extends('layouts.master')
@section('title')
    Halaman Detail Category
@endsection
@section('content')

<h1 class="text-primary">{{$category->name}}</h1>
<p>{{$category->description}}</p>

<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>

@endsection