<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\berita;
use App\kategori;
use DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $Join = DB::table('beritas')
            ->Join('kategoris', 'kategoris.idkat', '=', 'beritas.idk')
            ->get();
        return view('welcome', compact('Join'));
    }
}
