<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Penonton;

class PenontonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($request->has('search')){
        //     $penonton = Penonton::where('kode','LIKE','%'.$request->search.'%')
        //     ->orderBy("id",'desc')
        //     ->paginate(10);
        // }else{
        //     $penonton = Penonton::orderBy("id",'desc')->paginate(10);
        // }
        // return view ('penonton.index', compact('penonton'));
        $penonton = Penonton::all();
        return view('penonton.index', compact('penonton'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $penonton = new Penonton;
        // $validated = $request->validate([
        //     'nama' => 'required|max:255',
        //     'email' => 'required|email:dns',
        //     'nomer_telepon' => 'required',
        //     'status' => 'required'
        // ]);
    
        $penonton = new Penonton();
        $penonton->nama = $request->input('nama');
        $penonton->email = $request->input('email');
        $penonton->nomer_telepon = $request->input('nomer_telepon');
        $penonton->kode = Penonton::generateKode(); // generate kode acak
        $penonton->status = 'N'; // set default status
        $penonton->save();
    
        return redirect()->route('penonton.index');
    }
    public function selesai($id)
    {
        $penonton = Penonton::find($id);
        $penonton->status = 'Y';
        $penonton->save();

        return redirect()->route('penonton.selesai')->with(['success' => 'Penonton Berhasil Cek in!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penonton = Penonton::destroy($id);
        return redirect()->route('penonton.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
