<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Kuliner::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('kategori','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Kuliner::paginate(5);
        }
        return view('data_kuliner',compact('data'));
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
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->deskripsi = $request->deskripsi;

        $data->save();
        return redirect()->route('data_kuliner');
        
     }
    public function deletekuliner($id){
        $data = Kuliner::find($id);
        $data->delete();
        return redirect()->route('data_kuliner');
        
     }

    public function mainkuliner(Request $request){
        if($request->has('search')){
            $data = Kuliner::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('kategori','LIKE','%'.$request->search.'%')->paginate(9);
        }else{
            $data = Kuliner::paginate(9);
        }
        return view('mainkuliner',compact('data'));
     }

     public function deskripsikuliner($id){
        $data = Kuliner::find($id);
        return view('deskripsikuliner',compact('data'));
     }
}
