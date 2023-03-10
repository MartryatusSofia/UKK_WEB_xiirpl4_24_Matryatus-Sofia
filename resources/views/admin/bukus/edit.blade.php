@extends('layouts.app')
@section('title', 'Martryatus| Data bukus')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Data Buku
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('bukus.update', $buku->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-gambar" class=" form-control-label">Gambar</label>
                                                <input type="file" name="gambar" class="form-control" value="{{$buku->gambar}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-judulbuku" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judulbuku" class="form-control" value="{{$buku->judulbuku}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-penulis" class=" form-control-label">Penulis</label>
                                                <input type="text" name="penerbit" class="form-control" value="{{$buku->penulis}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="penerbit" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control" value="{{$buku->penerbit}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="tahun" class=" form-control-label">Tahun</label>
                                                <input type="text" name="tahunterbit" class="form-control" value="{{$buku->tahun}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" value="{{$buku->deskripsi}}">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
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
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
@endsection