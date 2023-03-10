<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use App\Models\Buku;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatabukuExport;
use PDF;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index(Request $request)
    {
        if($request->has('search')){
            $bukus = buku::where('judulbuku','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
        $bukus = buku::paginate(10);
        }
       return view('admin/bukus/index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/bukus/create',[
            "title"=> "bukus"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $bukus = buku ::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $bukus->gambar = $request->file('gambar')->getClientOriginalName();
        $bukus->save();
        }

        SweetAlert::success('Success', 'Data Berhasil Ditambahkan');
        
        return redirect()->route('bukus.index');

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
        $buku = buku::findOrFail($id);
        return view('admin/bukus/edit', compact('buku'));

        
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
        $buku = buku::findOrFail($id);
        $buku->update($request->all());
        $buku->save();

        return redirect()->route('bukus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('bukus.index');
    }

    public function exportpdf()
    {
        $buku = buku::all();
        view()->share('buku',$buku);
        $pdf = PDF::loadview('databuku-pdf');
        return $pdf->download('data.pdf');
    }
    public function export_excel()
	{
		return Excel::download(new DatabukuExport, 'buku.xlsx');
	}
}
