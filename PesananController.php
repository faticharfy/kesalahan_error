<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Storage;
class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::latest()->paginate(10);
        return view('pesanan.index', compact('pesanans'));
    }
    public function create(){
        return view('pesanan.create');
    }
    public function store(Request $request){
        $this->validate($request,[
           
            'tanggal'    => 'required',
            'nama_pelanggan'    => 'required',
            'no_telp'    => 'required',
            'paket_pesanan'    => 'required',
            'alamat_tujuan'    => 'required',
            'total_bayar'    => 'required',
            'status'    => 'required'
        ]);
            $pesanans=Pesanan::create([
              
                'tanggal'   => $request->tanggal,
                'nama_pelanggan'   => $request->nama_pelanggan,
                'no_telp'   => $request->no_telp,
                'paket_pesanan'   => $request->paket_pesanan,
                'alamat_tujuan'   => $request->alamat_tujuan,
                'total_bayar'   => $request->total_bayar,
                'status'   => $request->status

        ]);
            if($pesanans){
 
                return redirect()->route('dataPesan')->with(['success' => 'Data berhasil disimpan']);
            
            }else{
                return redirect()->route  ('dataPesan')->with(['error' => 'Data gagal disimpan']);
            
            }
    }

    public function edit ($id)
{
    
    $pesanans = Pesanan::find($id);
   return view('pesanan.edit1',['pesanans' => $pesanans]);
    
}

    
  public function update(Request $request,$id)
  {
    $pesanans = Pesanan::find($id);
   
    $pesanans->update($request->all());
    return redirect('dataPesan')->with('success','data berhasil disimpan');

}
public function pemesan(){
    return $this->belongTo('pesanans','id');

}
    public function destroy(Pesanan $pesanans)
    {
        $pesanans->delete();

        return redirect()->route('dataPesan')
            ->with('success', 'Project deleted successfully');
    }
}


