<!DOCTYPE html>
<html>
<head>
<style>
#buku {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#buku td, #buku th {
  border: 1px solid #ddd;
  padding: 8px;
}

#buku tr:nth-child(even){background-color: #f2f2f2;}

#buku tr:hover {background-color: #ddd;}

#buku th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3B8993;
  color: white;
}
</style>
</head>
<body>

<h1>Data Buku</h1>

<table id="buku">   
  <tr>
    <th>No</th>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Deskripsi</th>
  </tr>
  @php
      $index=1;
  @endphp
  @foreach ($buku as $row)
  <tr>
    <td>{{$index ++}}</td>
    <td>{{$row->judulbuku}}</td>
    <td>{{$row->penulis}}</td>
    <td>{{$row->penerbit}}</td>
    <td>{{$row->tahun}}</td>
    <td>{{$row->deskripsi}}</td>

</tr>
    @endforeach
</table>
</body>
</html>