<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Master</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>    
<body onload="window.print();">
<body>
    <div class="wrapper">
        <div class="row">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">DATA MASTER</h1>
                    <h4 class="text-center">SMP NEGERI 5 PADANGSIDIMPUAN</h4>&emsp;

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="11" class="text-center">Daftar Siswa</th>
                            <th colspan="11" class="text-center">Daftar Nilai</th>
                        </tr>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Nama Orang Tua</th>
                            <th scope="col">Pekerjaan Orang Tua</th>
                            <th scope="col">Alamat Orang Tua</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Mata Pelajaran</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1;?>
                        @foreach ($siswa as $item)

                        @if ($item['nilai'])
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$item['namaSiswa']}}</td>
                            <td>{{$item['nisn']}}</td>
                            <td>{{$item['jenisKelamin']}}</td>
                            <td>{{$item['tempatLahir']}}</td>
                            <td>{{date('d/M/y', strtotime($item['tanggalLahir']))}}</td>
                            <td>{{$item['alamat']}}</td>
                            <td>{{$item['asalSekolah']}}</td>
                            <td>{{$item['namaOrangTua']}}</td>
                            <td>{{$item['pekerjaanOrangTua']}}</td>
                            <td>{{$item['alamatOrangTua']}}</td>

                            <td>{{$item['kelas']}}</td>
                            <td>{{$item['nilai']}}</td>
                            <td>{{$item['semester']}}</td>
                            <td>{{$item['mataPelajaran']}}</td>
                        </tr>
                        <?php $i++;?>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>