<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.sections.pengarang.index');
    }

    public function getData(Request $request)
    {
        $query = Pengarang::query();

        if ($request->search) {
            $query->where('nama_pengarang', 'LIKE', "%" . $request->search . "%");
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
            'nama_pengarang' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:5120',
            'tel' => 'nullable',
            'email' => 'nullable',
            'web' => 'nullable',
            'ig' => 'nullable',
            'x' => 'nullable',
            'fb' => 'nullable',
            'youtube' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Store the file in the 'public' disk under the 'foto' directory
            $path = Storage::disk('public')->putFileAs  ('foto', $file, $filename);
        } else {
            $filename = null; // No file uploaded
        }

        $data = new Pengarang([
            'nama_pengarang' => $request->input('nama_pengarang'),
            'foto' => $filename,
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'web' => $request->input('web'),
            'ig' => $request->input('ig'),
            'x' => $request->input('x'),
            'fb' => $request->input('fb'),
            'youtube' => $request->input('youtube'),
            'linkedin' => $request->input('linkedin'),
        ]);

        $data->save();

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengarang $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengarang $pengarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengarang $pengarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $pengarang = Pengarang::findOrFail($request->id);
            $pengarang->delete();
            return response()->json(['message' => 'Pengarang deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e], 500);
        }
    }

}
