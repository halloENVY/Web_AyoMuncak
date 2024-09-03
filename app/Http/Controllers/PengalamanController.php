<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
        $pengalaman = Pengalaman::with('gunung')->get();  // Menggunakan eager loading untuk relasi dengan gunung
        return view('index', compact('pengalaman'));
    }
    
    public function create()
    {
        return view('admin-pengalaman-create');
    }

    public function store(Request $request)
    {
        Pengalaman::create($request->all());
        return redirect()->route('admin.pengalaman.index');
    }

    public function edit(Pengalaman $pengalaman)
    {
        return view('admin-pengalaman-edit', compact('pengalaman'));
    }

    public function update(Request $request, Pengalaman $pengalaman)
    {
        $pengalaman->update($request->all());
        return redirect()->route('admin.pengalaman.index');
    }

    public function destroy(Pengalaman $pengalaman)
    {
        $pengalaman->delete();
        return redirect()->route('admin.pengalaman.index');
    }
}
