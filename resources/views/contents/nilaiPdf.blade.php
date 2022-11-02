<div class="wrapper">
        <div class="row">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Daftar Nilai</h1>
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
                        @foreach ($siswa as $item)
    
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