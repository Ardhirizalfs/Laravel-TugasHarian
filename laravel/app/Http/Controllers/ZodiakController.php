<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Zodiakcontroller extends Controller
{
    public function index()
    {
        $data=['nama'=>'yanto','alamat'=>'darjo','sekolah'=>'smk'];
        $judul = 'belajar laravel';
        return view('zodiak',['contoh'=>$data,'judul'=>$judul]);
    }

    public function zodiak(Request $request)
    {
        $bulan=$request->bulan;
        $tanggal=$request->tanggal;
        
        if ($bulan > 0 && $bulan > 13 || $tanggal > 0 && $tanggal < 32) {

            if ($bulan==1) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo '<h1>Capricon</h1>';
                }else {
                    echo '<h1>Aquarius</h1>';
                }
            }

            if ($bulan==2) {
                if ($tanggal >= 1 && $tanggal <= 18) {
                    echo '<h1>Aquarius</h1>';
                }else {
                    echo '<h1>Pisces</h1>';
                }
            }

            if ($bulan==3) {
                if ($tanggal >=1 && $tanggal <=20) {
                    echo '<h1>Pisces</h1>';
                }else {
                    echo '<h1>Aries</h1>';
                }
            }

            if ($bulan==4) {
                if ($tanggal >=1 && $tanggal <= 19) {
                    echo '<h1>Aries</h1>';
                }else {
                    echo '<h1>Taurus</h1>';
                }
            }

            if ($bulan==5) {
                if ($tanggal >= 1 && $tanggal <= 20) {
                    echo '<h1>Taurus</h1>';
                }else {
                    echo '<h1>Gemini</h1>';
                }
            }

            if ($bulan==6) {
                if ($tanggal >= 1 && $tanggal <= 20) {
                    echo '<h1>Gemini</h1>';
                }else {
                    echo '<h1>Cancer</h1>';
                }
            }

            if ($bulan==7) {
                if ($tanggal >= 1 && $tanggal <= 22) {
                    echo '<h1>Cancer</h1>';
                }else {
                    echo '<h1>Leo</h1>';
                }
            }

            if ($bulan==8) {
                if ($tanggal >= 1 && $tanggal <= 22) {
                    echo '<h1>Leo</h1>';
                }else {
                    echo '<h1>Virgo</h1>';
                }
            }

            if ($bulan==9) {
                if ($tanggal >= 1 && $tanggal <= 22) {
                    echo '<h1>Virgo</h1>';
                }else {
                    echo '<h1>Libra</h1>';
                }
            }

            if ($bulan==10) {
                if ($tanggal >= 1 && $tanggal <= 22) {
                    echo '<h1>Libra</h1>';
                }else {
                    echo '<h1>Scorpio</h1>';
                }
            }

            if ($bulan==11) {
                if ($tanggal >= 1 && $tanggal <= 21) {
                    echo '<h1>Scorpio</h1>';
                }else {
                    echo '<h1>Sagitarius</h1>';
                }
            }
            if ($bulan==12) {
                if ($tanggal >= 1 && $tanggal <= 21) {
                    echo '<h1>Sagitarius</h1>';
                }else {
                    echo '<h1>Capricon</h1>';
                }
            }
        }
    }
}
