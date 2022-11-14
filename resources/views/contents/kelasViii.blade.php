<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas VIII</title>
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
                    <h1 class="text-center">Daftar Nilai</h1>
                    <h4 class="text-left">Kelas VIII</h4>

                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-hover" id="dataTables">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Semester</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1;?>
                        @foreach ($nilai as $item)

                        @if ($item['nilai'])
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$item['namaSiswa']}}</td>
                            <td>{{$item['nisn']}}</td>
                            <td>{{$item['kelas']}}</td>
                            <td>{{$item['nilai']}}</td>
                            <td>{{$item['mataPelajaran']}}</td>
                            <td>{{$item['semester']}}</td>
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