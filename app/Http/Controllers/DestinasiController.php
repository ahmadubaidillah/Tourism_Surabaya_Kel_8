<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index(){

        $data = Destinasi::all();
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
        $data = Destinasi::find($id);
        $data->update($request->all());
        return redirect()->route('data_destinasi');
        
     }
    public function deletedestinasi($id){
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('data_destinasi');
        
     }

    public function maindestinasi(){
        $data = Destinasi::all();
        return view('maindestinasi',compact('data'));
     }

}
