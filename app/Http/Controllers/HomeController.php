<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nama = 'Luffy D Monkey';
        return view('home', ['nama'=> $nama]);
    }
    public function biodata(){
        $nama = 'Muhammad G Hisyam';
        $umur = '19';
        $mapel = ['Web','Mobile','Kualitas perangkat lunak'];
        return view('home', ['nama' => $nama,'umur' => $umur, 'mapel' => $mapel]);
    }
}
