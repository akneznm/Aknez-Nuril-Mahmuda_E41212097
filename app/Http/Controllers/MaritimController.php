<?php

namespace App\Http\Controllers;

use App\Models\Maritim;
use Illuminate\Http\Request;

class MaritimController extends Controller
{
    //
    public function index()
    {
        $data = Maritim::all();
        // dd('data');
        return view('index', compact('data'));
    }
    public function create()
    {
        $maritims = null;
        return view('create', compact('maritims'));
    }
    public function insert(Request $request)
    {
        $data = Maritim::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokapal/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('maritim.index')->with('success', 'Data maritim baru telah berhasil disimpan');
    }

    public function tampil($id)
    {
        $data = Maritim::find($id);
        // dd($data);
        return view('edit', compact('data'));
    }
    public function edit(Request $request, $id)
    {
        $data = Maritim::find($id);
        $data->update($request->all());

        return redirect()->route('maritim.index')->with('success', 'Data maritim telah berhasil di edit');
    }

    public function delete($id)
    {
        $data = Maritim::find($id);
        $data->delete();

        return redirect()->route('maritim.index')->with('success', 'Data maritim telah berhasil di hapus');
    }
}
