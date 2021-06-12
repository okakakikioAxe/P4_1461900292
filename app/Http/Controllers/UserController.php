<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view ('dataUser0292', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahUser0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $username = $request->username;
        $pw1 = $request->pw1;
        $pw2 = $request->pw2;

        if($pw1 == $pw2){
            $user = new User;
            $user->nama = $nama;
            $user->username = $username;
            $user->password = $pw1;
            $user->save();
            return redirect()->route('user.index');
        }
        else{
            return back()->withInput();
        }
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
        $data = User::where('id',$id)->get();
        return view ('editUser0292',['data'=>$data]);
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
        $nama = $request->nama;
        $username = $request->username;
        $pw1 = $request->pw1;
        $pw2 = $request->pw2; 
        if($pw1 == $pw2){
            User::where('id',$id)->update(['nama'=>$nama, 'username'=>$username, 'password'=>$pw1]);
            return redirect()->route('user.index');
        }
        else{
            return back()->withInput();
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('user.index');
    }

    public function find(Request $request)
    {
        $data = $request->data;
        $rak = User::where('id',$data)->orWhere('username',$data)->get();
        
        return view('dataUser0292',['data'=> $rak]);
    }

    public function excel()
    {  
        return Excel::download(new UserExport, 'Data_1461900292.xlsx');
        
    }
}
