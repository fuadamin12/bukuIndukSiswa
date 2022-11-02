<link   href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Data Siswa</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: rgba(0, 183, 255, 0)">
                    <li class="breadcrumb-item"><a href="/">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Siswa</li>
                </ol>
            </nav>
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="siswa/pdf" class="btn btn-primary btn-sm mr-2  p-2 bd-highlight">Download Siswa PDF</a>&emsp;
                <a href="siswa/excel" class="btn btn-success btn-sm mr-2  p-2 bd-highlight">Download Siswa Excel</a>
            </div>
            <table class="table table-hover" id="dataTables">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($siswa as $item)

                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$item['namaSiswa']}}</td>
                        <td>{{$item['nisn']}}</td>
                        <td>{{$item['jenisKelamin']}}</td>
                        <td>{{$item['alamat']}}</td>
                        <td>{{$item['asalSekolah']}}</td>
                        <td>
                            <button class="inputNilaii btn btn-info btn-sm mr-2" data-id="{{$item['id']}}"
                                data-toggle="modal" data-target="#modalFormInputNilai1">Input Nilai</button>
                            <button class="lihatDataSiswa btn btn-secondary btn-sm mr-2" data-data="{{$item}}"
                                data-toggle="modal" data-target="#modalFormlihatSiswa">Lihat</button>
                            <button class="editDataSiswa btn btn-warning btn-sm mr-2"
                                data-data="{{$item}}">Edit</button><br>
                            <button class="hapusDataSiswa btn btn-danger btn-sm"
                                data-id="{{$item['id']}}">Hapus</button>
                        </td>
                    </tr>
                    <?php $i++;?>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal form input-->
<div class="modal fade" id="modalFormInputNilai1" tabindex="-1" aria-labelledby="modalFormInputNilaiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormInputNilaiLabel">Form Input Nilai</h5>
                <button type="button" class="close" id="close-modalFormInputNilai1" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formInputNilai">
                    @csrf
                    <div class="row">

                        <div class="col-6">

                            <input type="hidden" name="idSiswa" value="">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input class="form-control" list="datalistOptions" id="kelas" placeholder="Pilih Kelas"
                                    name="kelas">
                                <datalist id="datalistOptions">
                                    <option value="VII"></option>
                                    <option value="VIII"></option>
                                    <option value="IX"></option>
                                </datalist>
                            </div>

                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input class="form-control" list="datalistOptions1" id="semester"
                                    placeholder="Pilih Semester" name="semester">
                                <datalist id="datalistOptions1">
                                    <option value="1">
                                    <option value="2">
                                </datalist>
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">
                                <label for="mataPelajaran">Mata Pelajaran</label>
                                <input class="form-control" list="datalistOptions2" id="mataPelajaran"
                                    placeholder="Pilih Mata Pelajaran" name="mataPelajaran">
                                <datalist id="datalistOptions2">
                                    <option value="PKN">
                                    <option value="IPA">
                                    <option value="IPS">
                                    <option value="Matematika">
                                </datalist>
                            </div>

                            <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input type="number" name="nilai" class="form-control" id="nilai">
                            </div>

                        </div>

                    </div>
                    <div class="buttonsubmit text-center">
                        <button type="button" id="submitFormInputNilai" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal form lihat--}}
<div class="modal fade" id="modalFormlihatSiswa" tabindex="-1" aria-labelledby="modalFormlihatSiswaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormlihatSiswaLabel">Form Lihat Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formlihatSiswa">
                    @csrf
                    <div class="row">

                        <div class="col-6">
                            <input type="hidden" name="idSiswalihat" value="">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="namaSiswaLihat">Nama Siswa</label>
                                    <input type="text" name="namaSiswaLihat" class="form-control" id="namaSiswaLihat">
                                </div>
                                <div class="form-group">
                                    <label for="nisnLihat">NIS</label>
                                    <input type="number" name="nisnLihat" class="form-control" id="nisnLihat">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahirLihat">Tanggal Lahir</label>
                                    <input type="date" name="tanggalLahirLihat" class="form-control"
                                        id="tanggalLahirLihat">
                                </div>
                                <div class="form-group">
                                    <label for="tempatLahirLihat">Tempat Lahir</label>
                                    <input type="text" name="tempatLahirLihat" class="form-control"
                                        id="tempatLahirLihat">
                                </div>
                                <div class="form-group">
                                    <label for="asalSekolahLihat">Asal Sekolah</label>
                                    <input type="text" name="asalSekolahLihat" class="form-control"
                                        id="asalSekolahLihat">
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <fieldset disabled>
                                    <label for="">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenisKelaminLihat"
                                                id="jenisKelaminLihatLakiLaki" value="L">
                                            <label class="form-check-label" for="jenisKelaminLihatLakiLaki">
                                                Laki Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenisKelaminLihat"
                                                id="jenisKelaminLihatPerempuan" value="P">
                                            <label class="form-check-label" for="jenisKelaminLihatPerempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="alamatLihat">Alamat Siswa</label>
                                    <textarea type="text" name="alamatLihat" class="form-control"
                                        id="alamatLihat"></textarea>
                                </div>
                                <hr class="mt-3 mb-3">
                                <hr>
                                <div class="form-group">
                                    <label for="namaOrangTuaLihat">Nama Orang Tua</label>
                                    <input type="text" name="namaOrangTuaLihat" class="form-control"
                                        id="namaOrangTuaLihat">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaanOrangTuaLihat">Pekerjaan Orang Tua</label>
                                    <input type="text" name="pekerjaanOrangTuaLihat" class="form-control"
                                        id="pekerjaanOrangTuaLihat">
                                </div>
                                <div class="form-group">
                                    <label for="alamatOrangTuaLihat">Alamat Orang Tua</label>
                                    <textarea type="text" name="alamatOrangTuaLihat" class="form-control"
                                        id="alamatOrangTuaLihat"></textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal form edit-->
<div class="modal fade" id="modalFormEditSiswa" tabindex="-1" aria-labelledby="modalFormEditSiswaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormEditSiswaLabel">Form Edit Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formEditSiswa">
                    @csrf
                    <div class="row">
                        <div class="col-6">

                            <input type="hidden" name="idSiswaEdit" value="">

                            <div class="form-group">
                                <label for="namaSiswaEdit">Nama Siswa</label>
                                <input type="text" name="namaSiswaEdit" class="form-control" id="namaSiswaEdit">
                            </div>
                            <div class="form-group">
                                <label for="nisnEdit">NIS</label>
                                <input type="number" name="nisnEdit" class="form-control" id="nisnEdit">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahirEdit">Tanggal Lahir</label>
                                <input type="date" name="tanggalLahirEdit" class="form-control" id="tanggalLahirEdit">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahirEdit">Tempat Lahir</label>
                                <input type="text" name="tempatLahirEdit" class="form-control" id="tempatLahirEdit">
                            </div>
                            <div class="form-group">
                                <label for="asalSekolahEdit">Asal Sekolah</label>
                                <input type="text" name="asalSekolahEdit" class="form-control" id="asalSekolahEdit">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenisKelaminEdit"
                                            id="jenisKelaminEditLakiLaki" value="L">
                                        <label class="form-check-label" for="jenisKelaminEditLakiLaki">
                                            Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenisKelaminEdit"
                                            id="jenisKelaminEditPerempuan" value="P">
                                        <label class="form-check-label" for="jenisKelaminEditPerempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamatEdit">Alamat Siswa</label>
                                <textarea type="text" name="alamatEdit" class="form-control" id="alamatEdit"></textarea>
                            </div>

                            <hr class="mt-3 mb-3">

                            <div class="form-group">
                                <label for="namaOrangTuaEdit">Nama Orang Tua</label>
                                <input type="text" name="namaOrangTuaEdit" class="form-control" id="namaOrangTuaEdit">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaanOrangTuaEdit">Pekerjaan Orang Tua</label>
                                <input type="text" name="pekerjaanOrangTuaEdit" class="form-control"
                                    id="pekerjaanOrangTuaEdit">
                            </div>
                            <div class="form-group">
                                <label for="alamatOrangTuaEdit">Alamat Orang Tua</label>
                                <textarea type="text" name="alamatOrangTuaEdit" class="form-control"
                                    id="alamatOrangTuaEdit"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="submitFormEditSiswa" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
    // data Tables
    $(document).ready(function () {
        $('#dataTables').DataTable();
    });

    // store data Input Nilai
    $('.inputNilaii').on('click', function () {
        let id = $(this).data('id');

        $('#submitFormInputNilai').on('click', function () {

            let konfirmasi = confirm('Yakin Input?');

            if (konfirmasi) {

                $('input[name=idSiswa]').val(id);

                $.ajax({
                    type: "POST",
                    url: "{{ route('tambahNilai') }}",
                    data: $('#formInputNilai').serialize(),
                    success: function (response) {
                        alert('berhasil');

                        $('#close-modalFormInputNilai1').trigger('click');

                        $('#tabNilai').click();
                    },
                    error: function (response) {
                        alert('gagal');
                    },
                })

            }
        })
    })

    // edit data
    $('.editDataSiswa').on('click', function () {

        let siswa = $(this).data('data');

        //set id siswa
        $('input[name=idSiswaEdit]').val(siswa['id']);

        $('input[name=namaSiswaEdit]').val(siswa['namaSiswa']);
        $('input[name=nisnEdit]').val(siswa['nisn']);
        $('textarea[name=alamatEdit]').val(siswa['alamat']);
        $('input[value=' + siswa['jenisKelamin'] + ']').attr('checked', true);
        $('input[name=tanggalLahirEdit]').val(siswa['tanggalLahir']);
        $('input[name=tempatLahirEdit]').val(siswa['tempatLahir']);
        $('input[name=namaOrangTuaEdit]').val(siswa['namaOrangTua']);
        $('input[name=pekerjaanOrangTuaEdit]').val(siswa['pekerjaanOrangTua']);
        $('textarea[name=alamatOrangTuaEdit]').val(siswa['alamatOrangTua']);
        $('input[name=asalSekolahEdit]').val(siswa['asalSekolah']);

        $('#modalFormEditSiswa').modal('show');

        $('#submitFormEditSiswa').on('click', function () {

            let konfirm = confirm('yakin ubah?');

            if (konfirm) {

                $.ajax({
                    type: 'POST',
                    data: $('#formEditSiswa').serialize(),
                    url: "{{ route('editSiswa') }}",
                    success: function (response) {
                        alert('berhasill');

                        $('#modalFormEditSiswa').modal('hide');

                        $('#tabSiswa').click();

                    },
                    error: function (response) {
                        alert('gagal')
                    }
                })
            }

        })
    })

    // hapus data
    $('.hapusDataSiswa').on('click', function () {

        let konfirm = confirm('Yakin  hapus?');

        let id = $(this).data('id');

        if (konfirm) {
            $.ajax({
                type: 'POST',
                url: "{{ route('hapusSiswa') }}",
                data: {
                    id: id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (response) {
                    alert('berhasil Hapus');

                    $('#tabSiswa').click();
                },
                error: function (response) {
                    alert('gagal');
                },
            })
        }
    })

    // lihat Data siswa

    $('.lihatDataSiswa').on('click', function () {

        let siswa = $(this).data('data');

        //set id siswa
        $('input[name=idSiswaLihat]').val(siswa['id']);

        $('input[name=namaSiswaLihat]').val(siswa['namaSiswa']);
        $('input[name=nisnLihat]').val(siswa['nisn']);
        $('textarea[name=alamatLihat]').val(siswa['alamat']);
        $('input[value=' + siswa['jenisKelamin'] + ']').attr('checked', true);
        $('input[name=tanggalLahirLihat]').val(siswa['tanggalLahir']);
        $('input[name=tempatLahirLihat]').val(siswa['tempatLahir']);
        $('input[name=namaOrangTuaLihat]').val(siswa['namaOrangTua']);
        $('input[name=pekerjaanOrangTuaLihat]').val(siswa['pekerjaanOrangTua']);
        $('textarea[name=alamatOrangTuaLihat]').val(siswa['alamatOrangTua']);
        $('input[name=asalSekolahLihat]').val(siswa['asalSekolah']);

        $('#modalFormLihatSiswa').modal('show');
    })

</script>
