<?php

namespace App\Http\Controllers;
use App\Models\pasien;
use Illuminate\Http\Request;

class webController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pasien::all();
        return view('web.index', ['data' => $data]); 
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response; 
     */

    public function create()
    {
        $data['store'] = 'Input';
        $data['pasien'] = new pasien();
        $data['action'] = url('data_pasien');
        return view ('web.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new pasien(); 
        $data->nik =$request->input('nik');
        $data->nama =$request->input('nama');
        $data->alamat =$request->input('alamat');
        $data->hp =$request->input('hp');
        $data->save();
        return redirect('/data_pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pasien $pasien)
    {
        $data['store'] = 'Ubah';
        $data['pasien'] = $pasien;
        $data['action'] = url('data_pasien' . '/' . $pasien->nik);
        return view('web.create', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $pasien->nik =$request->input('nik');
        $pasien->nama =$request->input('nama');
        $pasien->alamat =$request->input('alamat');
        $pasien->hp =$request->input('hp');
        $pasien->save();
        return redirect('/data_pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
