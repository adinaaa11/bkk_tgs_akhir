<?php
namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('informasi.galeri', compact('galeris'));
    }

    public function create()
    {
        return view('informasi.galeri-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('galeri', 'public');
            $data['gambar'] = $path;
        }

        Galeri::create($data);
        return redirect()->route('galeri.index')->with('success','Galeri tersimpan.');
    }
}
