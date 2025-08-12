<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\KategoriBerita;
use App\Models\Tendik;
use App\Models\Prodi;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalBerita = Berita::count();
        $totalDosen = Dosen::count();
        $totalTendik = Tendik::count();
        $beritaTerbaru = Berita::with('kategori')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalBerita', 'totalDosen', 'totalTendik', 'beritaTerbaru'));
    }

    // ================= BERITA MANAGEMENT =================
    public function berita()
    {
        $beritas = Berita::with('kategori')->latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function beritaCreate()
    {
        $kategoris = KategoriBerita::all();
        return view('admin.berita.create', compact('kategoris'));
    }

    public function beritaStore(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'ringkasan' => 'nullable|max:500',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal' => 'required|date',
            'kategori_berita_id' => 'required|exists:kategori_beritas,id'
        ]);

        $data = $request->only(['judul', 'isi', 'ringkasan', 'tanggal', 'kategori_berita_id']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            // Konversi gambar ke base64
            $imageData = base64_encode(file_get_contents($gambar->getRealPath()));
            $mimeType = $gambar->getMimeType();
            $data['gambar'] = 'data:' . $mimeType . ';base64,' . $imageData;
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function beritaEdit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategoris = KategoriBerita::all();
        return view('admin.berita.edit', compact('berita', 'kategoris'));
    }

    public function beritaUpdate(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'ringkasan' => 'nullable|max:500',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal' => 'required|date',
            'kategori_berita_id' => 'required|exists:kategori_beritas,id'
        ]);

        $data = $request->only(['judul', 'isi', 'ringkasan', 'tanggal', 'kategori_berita_id']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            // Konversi gambar ke base64
            $imageData = base64_encode(file_get_contents($gambar->getRealPath()));
            $mimeType = $gambar->getMimeType();
            $data['gambar'] = 'data:' . $mimeType . ';base64,' . $imageData;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function beritaDestroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    // ================= DOSEN MANAGEMENT =================
    public function dosen()
    {
        $dosens = Dosen::latest()->get();
        return view('admin.dosen.index', compact('dosens'));
    }

    public function dosenCreate()
    {
        $prodis = Prodi::all();
        return view('admin.dosen.create', compact('prodis'));
    }

    public function dosenStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'nullable|max:255',
            'jabatan' => 'required|max:255',
            'prodi' => 'nullable|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bidang_keahlian' => 'nullable|max:255'
        ]);

        $data = $request->only(['nama', 'nip', 'jabatan', 'prodi', 'bidang_keahlian']);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            // Konversi foto ke base64
            $imageData = base64_encode(file_get_contents($foto->getRealPath()));
            $mimeType = $foto->getMimeType();
            $data['foto_base64'] = 'data:' . $mimeType . ';base64,' . $imageData;
        }

        Dosen::create($data);

        return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function dosenEdit($id)
    {
        $dosen = Dosen::findOrFail($id);
        $prodis = Prodi::all();
        return view('admin.dosen.edit', compact('dosen', 'prodis'));
    }

    public function dosenUpdate(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);

        $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'nullable|max:255',
            'jabatan' => 'required|max:255',
            'prodi' => 'nullable|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bidang_keahlian' => 'nullable|max:255'
        ]);

        $data = $request->only(['nama', 'nip', 'jabatan', 'prodi', 'bidang_keahlian']);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            // Konversi foto ke base64
            $imageData = base64_encode(file_get_contents($foto->getRealPath()));
            $mimeType = $foto->getMimeType();
            $data['foto_base64'] = 'data:' . $mimeType . ';base64,' . $imageData;
        }

        $dosen->update($data);

        return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil diperbarui!');
    }

    public function dosenDestroy($id)
    {
        try {
            $dosen = Dosen::findOrFail($id);
            $dosen->delete();

            return redirect()->route('admin.dosen.index')->with('success', 'Data dosen berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('admin.dosen.index')->with('error', 'Gagal menghapus data dosen: ' . $e->getMessage());
        }
    }

    // ================= KATEGORI BERITA MANAGEMENT =================
    public function kategori()
    {
        $kategoris = KategoriBerita::all();
        return view('admin.kategori.index', compact('kategoris'));
    }

    public function kategoriStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|unique:kategori_beritas,nama'
        ]);

        KategoriBerita::create($request->only(['nama']));

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function kategoriUpdate(Request $request, $id)
    {
        $kategori = KategoriBerita::findOrFail($id);

        $request->validate([
            'nama' => 'required|max:255|unique:kategori_beritas,nama,' . $id
        ]);

        $kategori->update($request->only(['nama']));

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function kategoriDestroy($id)
    {
        $kategori = KategoriBerita::findOrFail($id);

        // Cek apakah kategori digunakan di berita
        if ($kategori->beritas()->count() > 0) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak dapat dihapus karena masih digunakan di berita!');
        }

        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
