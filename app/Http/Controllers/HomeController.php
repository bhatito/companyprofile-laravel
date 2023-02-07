<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        
        $tentang = DB::table('tentangs')->get();
        $contact = DB::table('contacts')->get();
 
        return view('home.index', ['tentang' => $tentang],['contact' => $contact]);
    }
    public function merias()
    {
    return view('home.merias');
    }
    public function sosialisasi()
    {
    return view('home.sosialisasi');
    }
    public function pembagian()
    {
    return view('home.pembagian');
    }
    public function index2()
    {
        $tentang = DB::table('tentangs')->get();
        $contact = DB::table('contacts')->get();
 
        return view('home.index2', ['tentang' => $tentang],['contact' => $contact]);
    }
    public function pembelajaran()
    {
    return view('home.pembelajaran');
    }
    public function bimbingan()
    {
    return view('home.bimbingan');
    }
    public function pelatihan()
    {
    return view('home.pelatihan');
    }
   
}
