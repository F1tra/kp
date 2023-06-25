<?php

namespace App\Http\Controllers;

use App\Models\Dekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BooksExport;
use App\Imports\BooksImport;

class DekanController extends Controller
{
   public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $data_dekan = Dekan::all();
        return view('Dekan.dekan',compact('data_dekan'));
    }
    public function create()
    {
        $user = Auth::user();
        $data_dekan = Dekan::all();
        return view('dekan.create_dekan');
    }
    //    public function submit_dekan(Request $req)
    //  {
    //     $data_dekan = Dekan::all();
    //     $validate = $req->validate([
    //         'judul' => 'required|max:255',
    //         'dekripsi' => 'required',
    //     ]);

    //     $dekan = new Dekan;
    //     $dekan->judul = $req->get('judul');
    //     $dekan->deskripsi = $req->get('deskripsi');

    //     if ($req->hasFile('gambar')) {
    //         $extention = $req->file('gambar')->extension();

    //         $filename = 'gambar_buku_'.time().'.'.$extention;

    //         $req->file('gambar')->storeAs(
    //             'public/gambar_dekan', $filename
    //         );
    //         $dekan->gambar = $filename;
    //     }
    //     $dekan->save();

    //     $notification = array(
    //         'message' => 'Data Dekan berhasiil ditambahkan','alert-type' => 'success'
    //     );

    //     return redirect()->route('admin.dekan')->with($notification);
    //  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'judul' => 'required',
            'desk' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000'
        ]);

        $dekan = new Dekan();
        $dekan->judul = $validatedData['judul'];
        $dekan->desk = $validatedData['desk'];

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage\gambar_dekan'), $imageName);
            $dekan->img = $imageName;
        }

        $dekan->save();

        return redirect('dekan');
    }
    public function show()
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
        $dekan = Dekan::findOrFail($id);

        return view('dekan.editdekan', compact('dekan'));
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
        $validatedData = $request->validate([
            'judul' => 'required',
            'desk' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000'
        ]);

        $dekan = new Dekan();
        $dekan->judul = $validatedData['judul'];
        $dekan->desk = $validatedData['desk'];

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage\gambar_dekan'), $imageName);
            $dekan->img = $imageName;
        }

        $dekan->save();

        return redirect()->route('dekan.show', $dekan->id)->with('success', 'Data dekan berhasil diperbarui.');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Dekan $dekan)
    {
         if ($dekan->id){
        Storage::delete('public/storage/gambar_dekan'.$dekan->dekan);
    }

    $dekan->delete();

    return to_route('dekans.dekan')->with('success','Post deleted successfully');
    }
}