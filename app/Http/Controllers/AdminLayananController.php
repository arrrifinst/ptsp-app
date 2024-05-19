<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananModel;

class AdminLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LayananModel::all();
        return view('admin/data-layanan')->with([
            'data' => $data,
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
        return view('admin/tambah', [
            "title" => "Tambah-data"
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

        // $data = new LayananModel();
        // $data->nama = $request->nama;
        // $data->email = $request->email;
        // $data->telepon = $request->telepon;
        // $data->jenis = $request->jenis;

        // $file = $request->file('file');
        // $ext = $file->getClientOriginalExtension();
        // $nama_file = 'FT' . date('Ymdhis') . '.' . $ext;
        // $file->move('dokumen/',$nama_file);
        // $data->file = $nama_file;

        $data->save();
        return redirect('/data-layanan')->with('success', 'Data baru berhasil ditambahkan');
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
    public function edit(Request $request, $id)
    {
        $data = LayananModel::where('id', $id)->first();
        return view('admin/edit', compact('data'))->with([
            "title" => "Edit Data"
        ]);
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
        $data = LayananModel::where('id', $id)->first();

        // dd($data);

        $filePath = $data->file;
        if ($request->hasFile('file')) {
            $file = time() . '_' . $request->file('file')->getClientOriginalName();
            $filePath = '/storage/' . $request->file('file')->storeAs('file', $file, 'public');
        }

        // Proses menangkap file
        // $file = $request->file('file');
        // $nama_file = 'FT' . date('Ymdhis') . '.' . $request->file('file')->getClientOriginalExtension();
        // $file->move('dokumen/', $nama_file);

        // $data = new LayananModel();
        // $data->nama = $request->nama;
        // $data->email = $request->email;
        // $data->telepon = $request->telepon;
        // $data->jenis = $request->jenis;
        // $data->file = $filePath;

        $data->update([
            $data->nama = $request->nama,
            $data->email = $request->email,
            $data->telepon = $request->telepon,
            $data->jenis = $request->jenis,
            $data->file = $filePath,
        ]);



        $data->status = $request->status;
        $data->save();
        return redirect('/data-layanan')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = LayananModel::where('id', $id);
        $data->delete();
        return redirect('/data-layanan')->with('success', 'Data berhasil dihapus');
    }
}
