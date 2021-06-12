<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BukuExport;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
        return view ('dataBuku0292', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahBuku0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul = $request->judul;
        $tahun = $request->tahun;

        $buku = new Buku;
        $buku->judul = $judul;
        $buku->tahun_terbit = $tahun;
        $buku->save();
        
        return redirect()->route('buku.index');

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
        $data = Buku::where('id',$id)->get();
        return view ('editBuku0292',['data'=>$data]);
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
        $judul = $request->judul;
        $tahun = $request->tahun;
        Buku::where('id',$id)->update(['judul'=>$judul, 'tahun_terbit'=>$tahun]);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id',$id)->delete();
        return redirect()->route('buku.index');
    }

    public function find(Request $request)
    {
        $data = $request->data;
        $buku = Buku::where('id',$data)->orWhere('judul',$data)->get();
        
        return view('dataBuku0292',['data'=> $buku]);
    }

    public function excel()
    {  
        return Excel::download(new BukuExport, 'Data_1461900292.xlsx');
        
    }
}
