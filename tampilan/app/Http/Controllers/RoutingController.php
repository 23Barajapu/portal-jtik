<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\CPL;
use App\Models\Dosen;
use App\Models\Tendik;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\MataKuliah;

class RoutingController extends Controller
{
    public function root()
    {
        $prodis = \App\Models\Prodi::all();
        $cpls = \App\Models\CPL::all();
        $dosens = \App\Models\Dosen::all(); // Ambil semua data dosen untuk slider
        $tendiks = \App\Models\Tendik::paginate(4, ['*'], 'tendik_page');
        $beritas = \App\Models\Berita::with('kategori')->latest()->paginate(6, ['*'], 'berita_page');
        $kategori_beritas = \App\Models\KategoriBerita::all();
        return view('index', compact('prodis', 'cpls', 'dosens', 'tendiks', 'beritas', 'kategori_beritas'));
    }
    /**
     * first level route
     */
    public function firstLevel(Request $request, $first)
    {
        // Jika ada parameter pagination, redirect ke root dengan query string
        if ($request->has('dosen_page') || $request->has('tendik_page') || $request->has('berita_page')) {
            return redirect('/?' . http_build_query($request->query()));
        }
        if ($first === 'index') {
            return redirect('/');
        }
        if ($first === 'about') {
            return view('about.index');
        }
        if ($first === 'dosen') {
            $dosens = Dosen::all();
            return view('about.dosen', compact('dosens'));
        }
        // Prodi D3SI
        if ($first === 'prodi') {
            $prodi = Prodi::where('jenjang', 'D3')->first();
            $mataKuliahs = $prodi ? $prodi->mataKuliahs : collect();
            return view('prodi.d3si', compact('mataKuliahs'));
        }
        return view($first);
    }

    /**
     * Handle route untuk prodi/d3si
     */
    public function d3si()
    {
        // Ambil data mata kuliah untuk prodi D3SI
        $prodi = Prodi::where('jenjang', 'D3')->first();
        $mataKuliahs = $prodi ? $prodi->mataKuliahs : collect();
        return view('prodi.d3si', compact('mataKuliahs'));
    }

    /**
     * Handle route untuk prodi/d4trpl
     */
    public function d4trpl()
    {
        // Ambil data mata kuliah untuk prodi D4TRPL
        $prodi = Prodi::where('jenjang', 'D4')->first();
        $mataKuliahs = $prodi ? $prodi->mataKuliahs : collect();
        return view('prodi.d4trpl', compact('mataKuliahs'));
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        // Prodi D4TRPL
        if ($first === 'prodi' && $second === 'd4trpl') {
            $prodi = Prodi::where('jenjang', 'D4')->first();
            $mataKuliahs = $prodi ? $prodi->mataKuliahs : collect();
            return view('prodi.d4trpl', compact('mataKuliahs'));
        }
        return view($first . '.' . $second);
    }

    /**
     * third level route
     */
    public function thirdLevel(Request $request, $first, $second, $third)
    {
        return view($first . '.' . $second . '.' . $third);
    }
}
