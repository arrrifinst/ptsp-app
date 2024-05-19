<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananModel;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.layanan', [
            "title" => "Layanan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.buat-layanan', [
            "title" => "Formulir"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'jenis' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        // Proses menangkap file
        // $file = $request->file('file');
        // $nama_file = 'FT' . date('Ymdhis') . '.' . $request->file('file')->getClientOriginalExtension();
        // $file->move('dokumen/', $nama_file);

        // $data = new LayananModel();
        // $data->nama = $request->nama;
        // $data->email = $request->email;
        // $data->telepon = $request->telepon;
        // $data->jenis = $request->jenis;
        // $data->file = $nama_file;

        if ($request->hasFile('file')) {
            $file = time() . '_' . $request->file('file')->getClientOriginalName();
            $filePath = '/storage/' . $request->file('file')->storeAs('file', $file, 'public');
        }

        $data = LayananModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'jenis' => $request->jenis,
            'file' => $filePath,
        ]);

        $data->save();
        return redirect('/buat-layanan')->with('success', 'Permohonan Anda telah terkirim');
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
        //
    }
}
