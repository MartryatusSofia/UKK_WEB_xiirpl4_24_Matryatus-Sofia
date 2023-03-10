@extends('layouts.app')
@section('title', 'Perpustakaan| Data bukus')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Create</strong> Data Buku
                                    </div>
                                    <div class="card-body card-block">
                                      <form method = "post" action="{{route('bukus.store')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-gambar" class=" form-control-label">Gambar</label>
                                                <input type="file" name="gambar" class="form-data"  required id="gambar" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-judulbuku" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judulbuku" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputpenulis">Penulis</label>
                                                <input type="text" name="penulis" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputpenerbit">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control">
                                            </div>
                                            <div class="form-floating mb-3">
                                            <label for="inputtahun" class="form-label">Tahun</label>
                                              <input type="text" class="form-control" id="inputtahun" name= "tahun">
                                              
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-deskripsi" class=" form-control-label">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" >
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Simpan
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

{{-- @extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold">buku Us</h2>
</div>
<form method = "post" action="{{route('bukus.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputjudulbuku" placeholder="Judul Buku" name = "judulbuku">
    <label for="inputjudulbuku">Judul Buku</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputpenulis" placeholder="Penulis" name= "penulis">
    <label for="inputpenulis" class="form-label">penulis</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputpenerbit" placeholder="Penerbit" name= "penerbit">
    <label for="input" class="form-label">pengarang</label>
  </div>
  <div class="form-floating mb-3">
    <input type="date" class="form-control" id="inputtahun" placeholder="Tahun" name= "tahun">
    <label for="inputtahun" class="form-label">Tahun</label>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection --}}