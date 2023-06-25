<?php

namespace App\Http\Controllers;

use App\Models\Brita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data_brita = Brita::all();
          return view('brita.brita',compact('data_brita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $brita = Brita::all();
        return view('brita.createbrita',compact('brita'));
    }
    public function store(Request $request)
    {
        Brita::create([
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('brita');
    //     $request->validate([
    //         'judul' => 'required',
    //         'gambar' => 'required',
    //         'deskripsi' => 'required',
    //         'tanggal' => 'required',
    //     ]);
    // $data_brita  =[
    //     'judul' => $request->input('judul'),
    //     'gambar' => $request->input('gambar'),
    //     'deskripsi' => $request->input('deskripsi'),
    //     'tanggal' => $request->input('tanggal'),
    // ];
    // Brita::create($data_brita);
        // return redirect('brita');

        // $validate =$request->validate([
        //     'judul' => 'required|max:255',
        //     'deskripsi' => 'required',
        //     'tanggal' => 'required',
        // ]);
        // $brita = new Brita;
        // $brita = Employee::create($request->all());
        // $brita->judul = $request->get('judul');
            // if($request->hasFile('gambar')){
            //     $request->file('gambar')->move('gambarbrita/',$request->file('gambar')->getClientOriginalName());
            //     $brita->gambar = $request->file('gambar')->getClientOriginalName();
            //     $filename = 'gambar'.time().'.'.$extension;
            //     $request->file('gambar')->storeAs('public/gambar',$filename);
            //     $brita->gambar=$filename;
            // }
            // return redirect('brita');
            //  $brita->deskripsi = $request->get('deskripsi');
            //   $brita->tanggal = $request->get('tanggal');
            //   $brita->save('brita');
            // $req = $request->gambar; 
            // $namaFile =$req ->getClientOriginalName();
            // $brita=new Brita;
            // $brita->judul=$request->judul;
            // $brita->gambar=$request->gambar;
            // $brita->deskripsi=$request->deskripsi;
            // $brita->tanggal=$request->tanggal;

            // $req->move(public_path().'/img',$namaFile);
            // $brita->save();

            // return redirect()->route('brita');
         



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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}