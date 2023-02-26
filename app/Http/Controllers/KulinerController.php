<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(){
        $data = Kuliner::all();
        return view('data_Kuliner',compact('data'));
    }
    public function tambahkuliner(){
        return view('tambahkuliner');
    }
    public function insertkuliner(Request $request){
        $data = Kuliner::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotokuliner/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data_kuliner');
    }
    public function tampilkankuliner($id){
        $data = Kuliner::find($id);
        // dd($data);
        return view('tampilkuliner',compact('data'));
    }
    public function updatekuliner(Request $request, $id){
        $data = Kuliner::find($id);
        $data->update($request->all());
        return redirect()->route('data_kuliner');
        
     }
    public function deletekuliner($id){
        $data = Kuliner::find($id);
        $data->delete();
        return redirect()->route('data_kuliner');
        
     }

    public function mainkuliner(){
        $data = Kuliner::all();
        return view('mainkuliner',compact('data'));
     }
}
