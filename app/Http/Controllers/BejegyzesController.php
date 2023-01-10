<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    public function index(){
        $bejegyzesek =  Bejegyzesek::all();
        return $bejegyzesek;
    }
    
    public function show($id)
    {
        $bejegyzesek = Bejegyzesek::find($id);
        return $bejegyzesek;
    }
    public function destroy($id)
    {
        Bejegyzesek::find($id)->delete();
    }

    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }

    public function storeAlap(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->save();
    }

    public function update(Request $request, $id)
    {
        $bejegyzes = Bejegyzesek::find($id);
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }
}
