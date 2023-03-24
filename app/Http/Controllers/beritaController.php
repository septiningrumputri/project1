<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use DB;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Join = DB::table('beritas')
            ->Join('kategoris', 'kategoris.idkat', '=', 'beritas.idk')
            ->get();
        return view('pengguna.Berita', compact('Join'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('pengguna.BeritaAdd', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required'],
            'slug' => ['required'],
            'idk' => ['required'],
            'isi' => ['required'],
            'image' => ['mimes:jpg,jpeg,png,gif,svg'],
        ]);
        $imgName = 'gambar kosong';

        if ($request->image) {
            $file = $request->file('image');
            $imgName = $file->getClientOriginalName() . '.' . time()
                . '.' . $file->getClientOriginalExtension();

            $request->image->move(public_path('image'), $imgName);
        }
        berita::create([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'idk' => $request->idk,
            'isi' => $request->isi,
            'image' => $imgName
        ]);

        return redirect('berita')->with('success', 'Data berhasil di input');


        // $data           = new \App\berita;
        // $data->title    = $request->title;
        // $data->slug     = $request->slug;
        // $data->isi     = $request->isi;
        // $data->idk = $request->idk;
        // $data->save();

        // return redirect('berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = berita::find($id);
        $kategori = kategori::all();
        $Join = DB::table('beritas')
            ->Join('kategoris', 'kategoris.idkat', '=', 'beritas.idk')
            ->where('beritas.id', $id)
            ->select('beritas.idk', 'kategoris.nama')
            ->get();
        return view('pengguna.BeritaEdit', compact('berita', 'kategori', 'Join'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => ['required'],
            'slug' => ['required'],
            'idk' => ['required'],
            'isi' => ['required'],
            'image' => ['mimes:jpg,jpeg,png,gif,svg'],
        ]);
        $imgName = 'gambar kosong';

        if ($request->image) {
            $file = $request->file('image');
            $imgName = $file->getClientOriginalName() . '.' . time()
                . '.' . $file->getClientOriginalExtension();

            $request->image->move(public_path('image'), $imgName);
        }

        berita::find($id)->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'idk' => $request->idk,
            'isi' => $request->isi,
            'image' => $imgName
        ]);

        return redirect('/berita')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        berita::find($id)->delete();
        return redirect('berita');
    }
}
