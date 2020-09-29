<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>

<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8">
            <hr>
            <h1>Form Daftar Calon Siswa {{ $calonsiswa->nama }}</h1>
            <hr>
            <h2>SMK Taruna Bhakti Depok</h2>
            <hr>
            {{-- <form action="{{ url('/calonsiswa') }}" method="post"> --}}


                <div class="form-group">
                    <label for="noppdb"> <h5><b>Nomor PPDB</b></h5> </label>
              <div class="btn btn-danger">: {{ $calonsiswa->noppdb }}</div></div>


               <div class="form-group">
                <label for="nama"><h5><b>Nama Calon Siswa</b></h5></label>
                <div class="btn btn-warning">: {{ $calonsiswa->nama }}</div></div>


              <div class="form-group">
                <label for="asal_sekolah"><h5><b>Asal Sekolah</b></h5></label>
                <div class="btn btn-success">: {{ $calonsiswa->asal_sekolah }}</div></div>


<h5><b></b></h5>
              <div class="form-group">
                <label for="pilihan1"><h5><b>Pilihan Jurusan 1</b></h5></label>
                <div class="btn btn-info">: {{ $calonsiswa->pilihan1 }}</div></div>


              <div class="form-group">
                <label for="pilihan2"> <h5><b>Pilihan Jurusan 2</b></h5></label>
                <div class="btn btn-secondary">: {{ $calonsiswa->pilihan2}}</div></div>


              <div class="form-group">
                <label for="alamat"><h5><b></b>Alamat</h5></label>
                <div class="btn btn-success">: {{ $calonsiswa->alamat }}</div></div>



              <div class="form-group">
                <label for="nohp"><h5><b>Nomer HP</b></h5></label>
                <div class="btn btn-warning">: {{ $calonsiswa->nohp }}</div></div>

              <hr>

              <a class="btn btn-success" href="{{ url("calonsiswa/$calonsiswa->id/edit") }}">Edit data</a>

              <a href="{{ url("hapussiswa/$calonsiswa->id ") }} " class="btn btn-danger">Hapus</a>

              {{-- <td><a href="{{ url("hapussiswa/$itemSiswa->id") }}">Hapus</a></td> --}}
{{--
              <form action="{{ $calonsiswa->id }}" method="POST">
                @method('delete')
                @csrf
            <td><button type="submit" class="btn btn-danger">Delete</button></td></form> --}}

              {{-- <button class="btn btn-primary" type="submit">Daftar</button> --}}








        {{-- </form> --}}
             </div>
                 </div>






</div>




</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
