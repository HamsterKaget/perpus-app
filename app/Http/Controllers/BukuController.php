<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.sections.buku.index');
    }

    public function getData(Request $request)
    {
        $query = Buku::query();

        if ($request->search) {
            $query->where('nama_buku', 'LIKE', "%" . $request->search . "%");
        }

        $data = $query->with('penerbit')
                    ->orderBy('updated_at', 'desc') // Order by updated_at in descending order
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
            "id_buku" => 'required',
            "kategori" => 'required',
            "nama_buku" => 'required',
            "harga" => 'required',
            "stok" => 'required',
            "id_penerbit" => 'required',
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

        $data = new Buku([
            "id_buku" => $request->input('id_buku'),
            "kategori" => $request->input('kategori'),
            "nama_buku" => $request->input('nama_buku'),
            "harga" => $request->input('harga'),
            "stok" => $request->input('stok'),
            "id_penerbit" => $request->input('id_penerbit'),
        ]);

        $data->save();

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $pengarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $pengarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $data = Buku::findOrFail($request->id);
            $data->delete();
            return response()->json(['message' => 'Buku deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e], 500);
        }
    }
}
