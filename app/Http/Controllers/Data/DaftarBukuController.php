<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\DaftarBuku;

class DaftarBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['daftarBukus'] = DaftarBuku::orderBy('id', 'DESC')->get();
        return view('daftarBuku.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarBuku.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $c = DaftarBuku::orderBy('_id', 'DESC')->first();
        if(!empty($c->kode_buku)){
            $c1 = substr($c->kode_buku,3);
            $bku = "BKU".sprintf('%05d', $c1 + 1);
        }
        else{
            $bku = "BKU".sprintf('%05d', 1);
        }
        $d = new DaftarBuku;
        $d->kode_buku = $bku;
        $d->judul_buku = $r->input('judul_buku');
        $d->pengarang = $r->input('pengarang');
        $d->kategori = $r->input('kategori');

        $d->save();
        return redirect()->route('daftarBuku.index')->with('alertTambah', $bku);
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
    public function edit($id)
    {
        $d['daftarBukus'] = DaftarBuku::find($id);
        return view('daftarBuku.edit', $d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $d = DaftarBuku::find($id);
        $d->judul_buku = $r->input('judul_buku');
        $d->pengarang = $r->input('pengarang');
        $d->kategori = $r->input('kategori');

        $d->save();
        return redirect()->route('daftarBuku.index')->with('alertEdit', $d->kode_buku);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = DaftarBuku::where('_id', $id)->first();
        $data = $d->kode_buku;
        $d->delete();
        return redirect()->route('daftarBuku.index')->with('alertHapus', $data);
    }
}
