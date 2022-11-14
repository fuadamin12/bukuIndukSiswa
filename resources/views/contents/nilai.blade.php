<link   href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js"></script>
    
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Data Nilai Siswa</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: rgba(0, 183, 255, 0)">
                    <li class="breadcrumb-item"><a href="/">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nilai</li>
                </ol>
            </nav>
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="nilai/pdf" class="btn btn-primary btn-sm mr-2  p-2 bd-highlight">Download Nilai PDF</a>&emsp;
                <a href="nilai/excel" class="btn btn-success btn-sm mr-2  p-2 bd-highlight" >Download Nilai Excel</a>
            </div>
            <table class="table table-hover" id="dataTables">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Aksi</th>
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
                        <td>
                            <button class="editDataSiswa btn btn-warning btn-sm mr-2" data-data="{{$item}}">Edit</button>&emsp;
                            <button class="hapusDataNilai btn btn-danger btn-sm" data-id="{{$item['id']}}">Hapus</button>
                        </td>
                    </tr>
                    <?php $i++;?>
                    @endif

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal form edit Nilai-->
<div class="modal fade" id="modalFormEditNilai" tabindex="-1" aria-labelledby="modalFormEditNilaiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormEditNilaiLabel">Form Edit Nilai</h5>
                    <button type="button" class="btn-close" aria-label="Close" data-dismiss="modal"></button>
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formEditNilai">
                    @csrf
                    <div class="row">

                        <div class="col-6">

                            <input type="hidden" name="idSiswaUbah" value="">

                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input class="form-control" list="datalistOptions" id="kelas" placeholder="Pilih Kelas"
                                    name="kelasUbah">
                                <datalist id="datalistOptions">
                                    <option value="VII"></option>
                                    <option value="VIII"></option>
                                    <option value="IX"></option>
                                </datalist>
                            </div>

                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input class="form-control" list="datalistOptions1" id="semester"
                                    placeholder="Pilih Semester" name="semesterUbah">
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
                                    placeholder="Pilih Mata Pelajaran" name="mataPelajaranUbah">
                                <datalist id="datalistOptions2">
                                        <option value="IPA">
                                        <option value="IPS">
                                        <option value="Matematika">
                                    </datalist>
                                </datalist>
                            </div>

                            <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input type="number" name="nilaiUbah" class="form-control" id="nilai">
                            </div>

                        </div>

                    </div>
                    <div class="buttonsubmit text-center">
                        <button type="button" id="submitFormInputNilai" class="btn btn-primary">Simpan</button>
                    </div>
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

    // edit data
    $('.editDataSiswa').on('click', function () {

        let nilai = $(this).data('data');

        //set id nilai
        $('input[name=idSiswaUbah]').val(nilai['id']);

        $('input[name=tahunPelajaranUbah]').val(nilai['tahunPelajaran']);
        $('input[name=kelasUbah]').val(nilai['kelas']);
        $('input[name=mataPelajaranUbah]').val(nilai['mataPelajaran']);
        $('input[name=nilaiUbah]').val(nilai['nilai']);
        $('input[name=semesterUbah]').val(nilai['semester']);
        $('input[value=' + nilai['jenisKelamin'] + ']').attr('checked', true);

        $('#modalFormEditNilai').modal('show');

        $('#submitFormInputNilai').on('click', function () {

            let konfirm = confirm('yakin ubah?');

            if (konfirm) {

                $.ajax({
                    type: 'POST',
                    data: $('#formEditNilai').serialize(),
                    url: "{{ route('editNilai') }}",
                    success: function (response) {
                        alert('berhasill');

                        $('#modalFormEditNilai').modal('hide');

                        $('#tabNilai').click();

                    },
                    error: function (response) {
                        alert('gagal')
                    }
                })
            }

        })
    })

    // hapus data
    $('.hapusDataNilai').on('click', function () {

        let konfirm = confirm('Yakin hapus?');

        let id = $(this).data('id');

        if (konfirm) {
            $.ajax({
                type: 'POST',
                url: "{{ route('hapusNilai') }}",
                data: {
                    id: id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (response) {
                    alert('berhasil Hapus');

                    $('#tabNilai').click();
                },
                error: function (response) {
                    alert('gagal');
                },
            })
        }
    })

    // filter

    $(document).ready(function () {
        $('.filterable .btn-filter').click(function () {
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function (e) {
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function () {
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' +
                    $table.find('.filters th').length + '">No result found</td></tr>'));
            }
        });
    });

</script>
