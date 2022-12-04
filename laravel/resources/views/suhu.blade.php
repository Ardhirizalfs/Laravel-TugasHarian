{{-- @extends('front')

@section('content') --}}
    

<form action="{{ url('suhu') }}" method="post">
    @csrf

    konveksi dari :

    <select name="awal" id="">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="reamur">Reamur</option>
        <option value="kelvin">Kelvin</option>
    </select>

    <input type="number" name="hasil">
    Ke :

    <select name="akhir" id="">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="reamur">Reamur</option>
        <option value="kelvin">Kelvin</option>
    </select>

    <input type="submit" name="simpan" value="PHP">
</form>
{{-- @endsection --}}

{{-- @section('menu')
    <a href="/">home</a>
@endsection --}}
