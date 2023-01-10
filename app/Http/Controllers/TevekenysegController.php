<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index(){
        $tevekenysegek =  Tevekenyseg::all();
        return $tevekenysegek;
    }
    
    public function show($id)
    {
        $tevekenysegek = Tevekenyseg::find($id);
        return $tevekenysegek;
    }
    public function destroy($id)
    {
        Tevekenyseg::find($id)->delete();
    }
}
