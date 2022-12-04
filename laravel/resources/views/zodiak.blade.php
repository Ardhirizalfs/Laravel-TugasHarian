@php
    
@endphp

@extends('tugas')

@section('content')

    <h1>{{ $judul }}</h1>

<h1>Zodiak</h1>

@foreach ($contoh as $key=>$value)
    <h2>{{ $key.' '.$value }}</h2>
@endforeach


<form action="{{ url('zodiak') }}" method="post">
    @csrf
    Tanggal :
    <input type="number" name="tanggal">
    Bulan :
    <input type="number" name="bulan">
    <input type="submit" name="simpan" value="simpan">
</form>

@endsection

@section('menu')
    <a href="/">home</a>
@endsection