<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gunung;
use App\Models\Pengalaman;
use App\Models\Tour;

class GunungController extends Controller
{
    public function index()
    {
        $gunungs = Gunung::all();
        $jumlahGunung = Gunung::count();
        $gunungTertinggi = Gunung::orderBy('ketinggian', 'desc')->first();
        $gunungTerendah = Gunung::orderBy('ketinggian', 'asc')->first();
        $pengalamans = Pengalaman::with('gunung')->get();

        return view('index', compact('gunungs', 'pengalamans', 'jumlahGunung', 'gunungTertinggi', 'gunungTerendah'));
    }

    public function jelajah()
    {
        $gunungs = Gunung::paginate(6); // Mengambil 6 data gunung per halaman
        return view('jelajah', compact('gunungs'));
    }


    public function show($id)
    {
        $gunung = Gunung::findOrFail($id); // Mengambil data gunung berdasarkan ID
        $pengalaman = Pengalaman::where('id', $id)->get(); // Mengambil semua pengalaman untuk gunung ini
        $tour = Tour::where('id', $id)->get(); // Mengambil semua tour untuk gunung ini
        $pengalamans = $gunung->pengalaman;

        return view('detail-gunung', compact('gunung', 'pengalaman', 'tour', 'pengalamans'));
    }
    public function storePengalaman(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        Pengalaman::create([
            'id' => $id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
        ]);


        return redirect()->route('gunung.show', $id)->with('success', 'Pengalaman berhasil ditambahkan!');
    }
}
