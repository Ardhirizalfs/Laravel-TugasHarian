@extends('tugas')

@section('content')
    


<h1>Kalkulator</h1>

<form action="{{ url('kalkulator') }}" method="post">
    @csrf
    Angka 1:
    <input type="number" name="angka1">
    Angka 2:
    <input type="number" name="angka2">
    <br>
    
    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name='kurang' value="kurang">
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="bagi" value="bagi">
</form>

@endsection

@section('menu')
    <a href="/">home</a>
@endsection