<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\StokBuku;
use App\Model\DaftarBuku;

class StokBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['stokBukus'] = StokBuku::orderBy('id', 'DESC')->get();
        return view('stokBuku.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['daftarBukus'] = DaftarBuku::orderBy('id', 'DESC')->get();
        return view('stokBuku.add', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $c = StokBuku::orderBy('_id', 'DESC')->first();
        if(!empty($c->nomor_rak)){
            $c1 = substr($c->nomor_rak,3);
            $rak = "RAK".sprintf('%05d', $c1 + 1);
        }
        else{
            $rak = "RAK".sprintf('%05d', 1);
        }
        $d = new StokBuku;
        $d->judul_buku = $r->input('judul_buku');
        $d->nomor_rak = $rak;
        $d->jumlah_buku = $r->input('jumlah_buku');

        $d->save();
        return redirect()->route('stokBuku.index')->with('alertTambah', $rak);
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
        $d['stokBukus'] = StokBuku::find($id);
        $d['daftarBukus'] = DaftarBuku::orderBy('id', 'DESC')->get();
        return view('stokBuku.edit', $d);
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
        $d = StokBuku::find($id);
        $d->judul_buku = $r->input('judul_buku');
        $d->jumlah_buku = $r->input('jumlah_buku');

        $d->save();
        return redirect()->route('stokBuku.index')->with('alertEdit', $d->nomor_rak);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = StokBuku::where('_id', $id)->first();
        $data = $d->nomor_rak;
        $d->delete();
        return redirect()->route('stokBuku.index')->with('alertHapus', $data);
    }
}
