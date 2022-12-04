<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kalkulatorcontroller extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }

    public function kalkulator(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $tambah = $request->tambah;
        $kurang = $request->kurang;
        $kali = $request->kali;
        $bagi = $request->bagi;


        if ($tambah) {
            return $angka1 + $angka2;
        }

        if ($kurang){
            return $angka1 - $angka2;
        }

        if ($kali) {
            return $angka1 * $angka2;
        }

        if ($bagi) {
            return $angka1 / $angka2;
        }
    }
}
