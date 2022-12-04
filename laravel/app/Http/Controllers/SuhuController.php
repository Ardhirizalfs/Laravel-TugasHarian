<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu') ;
    }

    public function suhu(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $hasil = $request->hasil;

        if ($awal=='celsius') {
            if ($akhir=='celcius') {
                return $hasil;
            }
            elseif ($akhir=='reamur') {
                return (4/5) * $hasil;
            }
            elseif ($akhir=='kelvin') {
                return $hasil + 273;
            }
            elseif ($akhir=='fahrenheit') {
                return (9/5) * $hasil + 32;
            }
        }

        if ($awal=='reamur') {
            if ($akhir=='reamur') {
                return $hasil;
            }
            elseif ($akhir=='celcius') {
                return (5/4) * $hasil;
            }
            elseif ($akhir=='kelvin') {
                return (5/4) * $hasil + 273;
            }
            elseif ($akhir=='fahrenheit') {
                return (9/4) * $hasil + 32;
            }
        }

        if ($awal=='fahrenheit') {
            if ($akhir=='fahrenheit') {
                return $hasil;
            }
            elseif ($akhir=='celcius') {
                return 5/9 * ($hasil-32);
            }
            elseif ($akhir=='reamur') {
                return 4/9 * ($hasil-32);
            }
            elseif ($akhir=='kelvin') {
                return 5/9 * ($hasil-32) + 273;
            }
        }

        if ($awal=='kelvin') {
            if ($akhir=='kelvin') {
                return $hasil;
            }
            elseif ($akhir=='celcius') {
                return $hasil-273;
            }
            elseif ($akhir=='reamur') {
                return 4/5 * ($hasil-273);
            }
            elseif ($akhir=='fahrenheit') {
                return 9/5 * ($hasil-273) + 32;
            }
        }
    }
}