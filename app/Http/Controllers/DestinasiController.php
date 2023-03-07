<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Destinasi::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('kategori','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Destinasi::paginate(5);
        }
        return view('data_destinasi',compact('data'));
    }
    public function tambahdestinasi(){
        return view('tambahdestinasi');
    }
    public function insertdestinasi(Request $request){
        $data = Destinasi::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data_destinasi');
    }
    public function tampilkandestinasi($id){
        $data = Destinasi::find($id);
        // dd($data);
        return view('tampildestinasi',compact('data'));
    }
    public function updatedestinasi(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $data = Destinasi::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->deskripsi = $request->deskripsi;

        $data->save();
        return redirect()->route('data_destinasi');
        
     }
    public function deletedestinasi($id){
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('data_destinasi');
        
     }

    public function maindestinasi(){
        $data = Destinasi::paginate(9);
        return view('maindestinasi',compact('data'));
     }
     
     public function deskripsidestinasi($id){
         $data = Destinasi::find($id);
         return view('deskripsidestinasi',compact('data'));
      }
    

}
