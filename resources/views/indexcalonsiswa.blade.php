<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">`
            <h2>Tabel Data Calon Siswa

        </h2>
        @if(session()->has('pesan'))
        <div class="alert alert-success">{{ session()->get('pesan') }}</div>

        @endif

        @if(session()->has('pesanhapus'))
        <div class="alert alert-danger">{{ session()->get('pesanhapus') }}</div>

        @endif


        </div>
        <a href="{{ route('calonsiswa.create') }}" class="btn btn-success">Tambah Data</a>


        <table class="table table-bordered">
            <tr>
                    <td scope="col">No</td>
                    <td scope="col">Nomer PPDB</td>
                    <td scope="col">Nama Calon Siswa</td>
                    <td scope="col">Asal Sekolah</td>
                    <td scope="col">Pilihan 1</td>
                    <td scope="col">Pilihan 2</td>
                    <td scope="col">Alamat</td>
                    <td scope="col">No HP</td>
                    <td colspan="3">Action</td>
            </tr>

            @forelse($calonsiswa as $itemSiswa)

            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemSiswa->noppdb }}</td>
                <td>{{ $itemSiswa->nama }}</td>
                <td>{{ $itemSiswa->asal_sekolah}}</td>
                <td>{{ $itemSiswa->pilihan1 }}</td>
                <td>{{ $itemSiswa->pilihan2 }}</td>
                <td>{{ $itemSiswa->alamat }}</td>
                <td>{{ $itemSiswa->nohp }}</td>
                <td><a href="{{ url("calonsiswa/$itemSiswa->id") }}"class="btn btn-primary">Detail</a></td>

                <td><a href="{{ url("hapussiswa/$itemSiswa->id ") }} " class="btn btn-danger">Hapus</a></td>
                <td> <a class="btn btn-success" href="{{ url("calonsiswa/$itemSiswa->id/edit") }}">Edit</a></td>
            </tr>
                @empty

                <td colspan="7">Tidak Ada Data</td>

                @endforelse


        </table>


    </div>







</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
