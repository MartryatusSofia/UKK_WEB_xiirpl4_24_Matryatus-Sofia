@extends('layouts.app')
@section('title', 'Data Buku')
@section('content')
<div class="main-content">
    <div class="section_content section_content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1" style="margin-bottom: 10px; margin-top:10px">Data Buku
                            <div class="card-tools">

                                <form action="{{ route('bukus.index') }}" class="form-inline" method="GET" style="margin-top: 10px; background-color: #6B728E; ">
                                <input type="search" name="search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search" style="color: white;"></i>
                                        </button>
                                    </div>
                                </form>
                                
                            </h2>

                            <div class="col-mr-12">
                                <div class="table-responsive m-b-32 d-flex justify-content-between">
                                    <a href="/exportpdf" class="btn btn-info" style="background-color: red; color: #fff;">Export PDF</a>
                                    <a href="{{ route('export_excel') }}" class="btn btn-success" target="_blank">Export EXCEL</a>
                            </div>                             
                </div>
                </div>
            </div>
                    <div class="col-md-12" >
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40" >
                            <table class="table table-borderless table-data3" >
                                <thead style="background-color: #6B728E">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($bukus as $index => $buku)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>
                                                <img src="{{ asset('images/'.$buku->gambar)}}" alt="" style="width: 500px;">
                                            </td>
                                            <td>{{$buku->judulbuku}}</td>
                                            <td>{{$buku->penulis}}</td>
                                            <td>{{$buku->penerbit}}</td>
                                            <td>{{$buku->tahun}}</td>
                                            <td>{{$buku->deskripsi}}</td>
                                            <td>
                                                <a href="{{ route('bukus.edit', $buku->id) }}" style="float: left;"><i class="fas fa-edit"></i></a> 
                                                <a href="{{ route('bukus.destroy', $buku->id) }}" style="float: right; color:rgb(181, 52, 52)"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$bukus->links()}}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>UKK WEB © 2023 Colorlib. xii rpl 4_24_ Martryatus Sofia <a href="https://www.instagram.com/mrtryatuss_/">Hubungi IG</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection