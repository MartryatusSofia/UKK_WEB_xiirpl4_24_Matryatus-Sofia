@extends('layout_user.navbar')
@section('content')

<style>
 body {
    background: linear-gradient(to bottom, #3C415C, #0D0D0D);
    color: #111111;
    background-size: 200% 200%;
    animation: shining 6s ease-in-out infinite;
}

@keyframes shining {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}


  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 56px rgba(0, 0, 0, 0.5);
    transition: all 0.3s ease;
  }
  .shine {
        position: relative;
        background: rgba(255, 255, 255, 0.1);
    }
    
    .shine:before,
    .shine:after {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        background: linear-gradient(
            to right,
            rgba(255, 255, 255, 0.2),
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.2)
        );
        width: 60px;
        height: 2px;
        animation: shine 2s infinite;
    }
    
    .shine:after {
        transform: rotate(90deg);
        width: 2px;
        height: 60px;
    }
    
    @keyframes shine {
        0% {
            left: -60px;
        }
        100% {
            left: 100%;
        }
    }

</style>
<div class="container">
    <div class="row">
        @forelse($bukus as $row)
        <div class="col-md-3 mt-4">

            <div class="card" style="width: 16rem; border-top: 4px solid #ffffff;
            border-left: 4px solid #ffffff;
            border-right: 4px solid #ffffff;"> 
            
            <img src="{{ asset('images/'.$row->gambar)}}" alt="" style="width: 100%; height: 350px; border-radius: 2px;">

                
              <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">{{ $row->judulbuku }}</h5>
                     <p class="card-text" style="font-weight: regular; color: grey;">{{$row->penulis}}</p>
                     <a href="/detailbuku/{{ $row->id }}" class="btn btn-dark w-100" style="background-color: #6B728E; border: 2px solid rgba(255, 255, 255, 0.247);">Detail Buku</a>

                 
              </div>
           
       </div>
        </div> 
        @empty
        <div class="mt-auto">
            <p>Data Buku Kosong!</p>
        </div>
        @endforelse
    </div>
</div>



@endsection('content')