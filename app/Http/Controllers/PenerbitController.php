<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        return view('backend.sections.penerbit.index');
    }

    public function getData(Request $request)
    {
        $query = Penerbit::query();

        if ($request->search) {
            $query->where('nama', 'LIKE', "%" . $request->search . "%");
        }

        $data = $query->orderBy('updated_at', 'desc') // Order by updated_at in descending order
                    ->orderBy('created_at', 'desc') // Then order by created_at in descending order
                    ->paginate(7);

        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_penerbit" => 'required',
            "nama" => 'required',
            "alamat" => 'required',
            "kota" => 'required',
            "telepon" => 'required',
        ]);

        // Handle file upload
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $filename = time() . '_' . $file->getClientOriginalName();

        //     // Store the file in the 'public' disk under the 'foto' directory
        //     $path = Storage::disk('public')->putFileAs  ('foto', $file, $filename);
        // } else {
        //     $filename = null; // No file uploaded
        // }

        $data = new Penerbit([
            "id_penerbit" => $request->input('id_penerbit'),
            "nama" => $request->input('nama'),
            "alamat" => $request->input('alamat'),
            "kota" => $request->input('kota'),
            "telepon" => $request->input('telepon'),
        ]);

        $data->save();

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $pengarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $pengarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $pengarang = Penerbit::findOrFail($request->id);
            $pengarang->delete();
            return response()->json(['message' => 'Penerbit deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e], 500);
        }
    }
}
