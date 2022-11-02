    <div class="wrapper">
        <section class="invoice">
            <div class="row">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Daftar Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Nama Orang Tua</th>
                                <th scope="col">Alamat Orang Tua</th>
                                <th scope="col">Pekerjaan Orang Tua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach ($siswa as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item['namaSiswa']}}</td>
                                <td>{{$item['nisn']}}</td>
                                <td>{{date('d/M/y', strtotime($item['tanggalLahir']))}}</td>
                                <td>{{$item['tempatLahir']}}</td>
                                <td>{{$item['jenisKelamin']}}</td>
                                <td>{{$item['alamat']}}</td>
                                <td>{{$item['asalSekolah']}}</td>
                                <td>{{$item['namaOrangTua']}}</td>
                                <td>{{$item['alamatOrangTua']}}</td>
                                <td>{{$item['pekerjaanOrangTua']}}</td>

                            </tr>
                            <?php $i++;?>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </div>