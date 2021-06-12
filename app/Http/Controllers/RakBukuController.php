<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\RakExport;
use App\Models\RakBuku;

class RakBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RakBuku::all();
        return view ('dataRakBuku0292', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahRakBuku0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idBuku = $request->buku;
        $idJenis = $request->jenis;

        $rak = new RakBuku;
        $rak->id_buku = $idBuku;
        $rak->id_jenis_buku = $idJenis;
        $rak->save();
        
        return redirect()->route('rak.index');

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
        $data = RakBuku::where('id',$id)->get();
        return view ('editJenisBuku0292',['data'=>$data]);
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
        $idBuku = $request->buku;
        $idJenis = $request->jenis; 
        RakBuku::where('id',$id)->update(['id_buku'=>$idBuku, 'id_jenis_buku'=>$idJenis]);
        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RakBuku::where('id',$id)->delete();
        return redirect()->route('rak.index');
    }

    public function find(Request $request)
    {
        $data = $request->data;
        $rak = RakBuku::where('id',$data)->get();
        
        return view('dataRakBuku0292',['data'=> $rak]);
    }

    public function excel()
    {  
        return Excel::download(new RakExport, 'Data_1461900292.xlsx');
        
    }
}
