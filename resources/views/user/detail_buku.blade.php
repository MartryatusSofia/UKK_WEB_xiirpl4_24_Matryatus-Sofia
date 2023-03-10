@extends('layout_user.navbar')
@section('content')
<div class="container mt-4">
       <style>
              .label {
                  display: inline-block;
                  width: 80px;
                  font-weight: bold;
                  margin-right: 5px;
              }
          </style>
     
       <div class="row">
              <div class="col-md-4 mt-3">
                <img src="{{ asset('images/'.$bukus->gambar)}}" alt="" style="width: 100%; height: auto;">
              </div>
              <div class="col-md-8 mt-3">
                     <div class="card-body text-secondary">
                         <h2 class="card-title" style="color:#3C415C; font-weight: bold;" >{{$bukus->judulbuku}}</h2>
                         <div style="margin-top: 10px; margin-bottom: 10px;">
                            <h7 class="card-text label" style="margin-right: 24px;">Penulis</h7>
                            <h7 class="card-text" style="margin-left: -10px;">: {{$bukus->penulis}}</h7>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <h7 class="card-text label" style="margin-right: 24px;">Penerbit</h7>
                            <h7 class="card-text" style="margin-left: -10px;">: {{$bukus->penerbit}}</h7>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <h7 class="card-text label" style="margin-right: 24px;">Tahun Ada</h7>
                            <h7 class="card-text" style="margin-left: -10px;">: {{$bukus->tahun}}</h7>                       
                        </div> 
                        <div>
                            <h7 class="card-text label">Sinopsis</h7>
                            <p class="card-text"> {{$bukus->deskripsi}}</p>
                        </div>
                        <a href = '\' class="btn btn-dark w-100" style="background-color: #6B728E; border: 2px solid rgba(255, 255, 255, 0.247); margin-top: 200px;">Kembali</a>

                     </div>
                 </div>           
              </div>
            </div>

            
</div>

@endsection('content')