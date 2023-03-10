<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use PDF;

class UserController extends Controller
{
      public function dashboard(Request $request){

       
            if ($request->has('search')) {
                  $bukus = buku::where('judulbuku','LIKE','%'.$request->search.'%')
                                      ->orWhere('penulis', 'like', '%'.$request->search.'%')
                                      ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
                                      
                  Session::put('halaman_url',request()->fullUrl());
                  // halaman_url manggil mana ya
              }else {
                  
                  $bukus = buku::paginate(10);
                  Session::put('halaman_url',request()->fullUrl());
              }
      
          //   menampilkan halaman 
             return view('user/dashboard',compact('bukus'));

     
      }

      
      
      public function detail($id){
            $bukus = buku::find($id);
    
            return view('user/detail_buku', compact('bukus'));
        }
}
