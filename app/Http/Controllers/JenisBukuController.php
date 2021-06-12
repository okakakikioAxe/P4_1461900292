<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JenisExport;
use App\Models\JenisBuku;
use Illuminate\Http\Request;

class JenisBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JenisBuku::all();
        return view ('dataJenisBuku0292', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahJenisBuku0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisBuku = $request->jenis;

        $jenis = new JenisBuku;
        $jenis->jenis = $jenisBuku;
        $jenis->save();
        
        return redirect()->route('jenis.index');

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
        $data = JenisBuku::where('id',$id)->get();
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
        JenisBuku::where('id',$id)->update(['jenis'=>$request->jenis]);
        return redirect()->route('jenis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisBuku::where('id',$id)->delete();
        return redirect()->route('jenis.index');
    }

    public function find(Request $request)
    {
        $data = $request->data;
        $jenis = JenisBuku::where('id',$data)->orWhere('jenis',$data)->get();
        
        return view('dataJenisBuku0292',['data'=> $jenis]);
    }

    public function excel()
    {  
        return Excel::download(new JenisExport, 'Data_1461900292.xlsx');
        
    }
}
