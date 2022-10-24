<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- jquery --}}
    <script src="/js/jquery-3.6.0.js"></script>

    {{--dataTables  --}}
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    {{-- Chart --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>SMP Negeri 5 Padangsidimpuan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-blue mb-4" style="background-color: #FFFFFF">
                    <img src="/img/logo.png" alt="" width="50" height="50">

                    <h1 class="navbar-brand" style="color: #00AEEF">| SISTEM INFORMASI BUKU INDUK SISWA </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>

        </div>
        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <div class="container">
                        <a class="navbar-brand">
                            <svg width="39" height="39" viewBox="0 0 43 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="21.5" cy="22" rx="21.5" ry="22" fill="#3751FF" />
                                <path
                                    d="M14.7812 13.375C14.7812 12.8227 15.229 12.375 15.7813 12.375H21.4872C24.4733 12.375 26.7854 13.2131 28.4235 14.8894C30.0787 16.5657 30.9063 18.9268 30.9063 21.973C30.9063 25.0371 30.0787 27.4163 28.4235 29.1106C26.7854 30.7869 24.4733 31.625 21.4872 31.625H15.7813C15.229 31.625 14.7812 31.1773 14.7812 30.625V13.375Z"
                                    fill="url(#paint0_linear_5_81)" />
                                <defs>
                                    <linearGradient id="paint0_linear_5_81" x1="14.7812" y1="12.375" x2="31.3351"
                                        y2="31.2489" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" stop-opacity="0.7" />
                                        <stop offset="1" stop-color="white" />
                                    </linearGradient>
                                </defs>
                            </svg> Menu
                        </a>
                    </div>
                </div>
                <a href="#" id="tabDashboard" class="list-group-item list-group-item-action active">
                    <svg width="30" height="30" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_33_99)">
                            <path
                                d="M49.4805 28.5H27.2346L42.0499 43.3152C42.6161 43.8815 43.548 43.9274 44.1302 43.379C47.7583 39.9609 50.254 35.3531 50.9861 30.1734C51.1118 29.2865 50.3758 28.5 49.4805 28.5V28.5ZM47.9965 22.425C47.224 11.2256 38.2746 2.27625 27.0752 1.50376C26.2202 1.44469 25.5002 2.16563 25.5002 3.0225V24H46.4786C47.3355 24 48.0555 23.28 47.9965 22.425ZM21.0002 28.5V6.25406C21.0002 5.35875 20.2136 4.62281 19.3277 4.74844C8.15552 6.32718 -0.38417 16.0875 0.0133299 27.7846C0.42208 39.7977 10.7655 49.649 22.7843 49.498C27.5093 49.439 31.8752 47.9165 35.4649 45.3702C36.2055 44.8452 36.2543 43.7549 35.6121 43.1127L21.0002 28.5Z"
                                fill="#DDE2FF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_33_99">
                                <rect width="51" height="51" fill="white" />
                            </clipPath>
                        </defs>
                    </svg> Dashboard</a>
                <a href="#" id="tabKelas" class="list-group-item list-group-item-action" data-toggle="modal"
                    data-target="#modalFormInputSiswa">
                    <svg width="30" height="30" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M2.4 5.1999C3.2825 5.1999 4 4.4824 4 3.5999C4 2.7174 3.2825 1.9999 2.4 1.9999C1.5175 1.9999 0.8 2.7174 0.8 3.5999C0.8 4.4824 1.5175 5.1999 2.4 5.1999ZM13.6 5.1999C14.4825 5.1999 15.2 4.4824 15.2 3.5999C15.2 2.7174 14.4825 1.9999 13.6 1.9999C12.7175 1.9999 12 2.7174 12 3.5999C12 4.4824 12.7175 5.1999 13.6 5.1999ZM14.4 5.9999H12.8C12.36 5.9999 11.9625 6.1774 11.6725 6.4649C12.68 7.0174 13.395 8.0149 13.55 9.1999H15.2C15.6425 9.1999 16 8.8424 16 8.3999V7.5999C16 6.7174 15.2825 5.9999 14.4 5.9999ZM8 5.9999C9.5475 5.9999 10.8 4.7474 10.8 3.1999C10.8 1.6524 9.5475 0.399902 8 0.399902C6.4525 0.399902 5.2 1.6524 5.2 3.1999C5.2 4.7474 6.4525 5.9999 8 5.9999ZM9.92 6.7999H9.7125C9.1925 7.0499 8.615 7.1999 8 7.1999C7.385 7.1999 6.81 7.0499 6.2875 6.7999H6.08C4.49 6.7999 3.2 8.0899 3.2 9.6799V10.3999C3.2 11.0624 3.7375 11.5999 4.4 11.5999H11.6C12.2625 11.5999 12.8 11.0624 12.8 10.3999V9.6799C12.8 8.0899 11.51 6.7999 9.92 6.7999ZM4.3275 6.4649C4.0375 6.1774 3.64 5.9999 3.2 5.9999H1.6C0.7175 5.9999 0 6.7174 0 7.5999V8.3999C0 8.8424 0.3575 9.1999 0.8 9.1999H2.4475C2.605 8.0149 3.32 7.0174 4.3275 6.4649Z"
                            fill="#9FA2B4" />
                    </svg> Entri Data Siswa</a>
                <a href="#" id="tabSiswa" class="list-group-item list-group-item-action" aria-current="true">
                    <svg width="35" height="35" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M3.55556 5.33329H12.4444V10.6666H3.55556V5.33329ZM14.6667 7.99996C14.6667 8.73635 15.2636 9.33329 16 9.33329V12C16 12.7363 15.4031 13.3333 14.6667 13.3333H1.33333C0.596944 13.3333 0 12.7363 0 12V9.33329C0.736389 9.33329 1.33333 8.73635 1.33333 7.99996C1.33333 7.26357 0.736389 6.66663 0 6.66663V3.99996C0 3.26357 0.596944 2.66663 1.33333 2.66663H14.6667C15.4031 2.66663 16 3.26357 16 3.99996V6.66663C15.2636 6.66663 14.6667 7.26357 14.6667 7.99996ZM13.3333 5.11107C13.3333 4.74288 13.0349 4.4444 12.6667 4.4444H3.33333C2.96514 4.4444 2.66667 4.74288 2.66667 5.11107V10.8888C2.66667 11.257 2.96514 11.5555 3.33333 11.5555H12.6667C13.0349 11.5555 13.3333 11.257 13.3333 10.8888V5.11107Z"
                            fill="#9FA2B4" />
                    </svg> Siswa</a>
                <a href="#" id="tabNilai" class="list-group-item list-group-item-action">
                    <svg width="35" height="35" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_29_13)">
                            <path opacity="0.4"
                                d="M5.50187 14.1985C5.50219 14.395 5.56031 14.5875 5.66937 14.7513L6.20344 15.5541C6.29467 15.6913 6.41841 15.8039 6.56366 15.8817C6.7089 15.9596 6.87114 16.0003 7.03594 16.0003H8.96438C9.12917 16.0003 9.29141 15.9596 9.43665 15.8817C9.5819 15.8039 9.70564 15.6913 9.79688 15.5541L10.3309 14.7513C10.44 14.5875 10.4982 14.3952 10.4984 14.1985L10.4997 13H5.50031L5.50187 14.1985ZM2.5 5.50003C2.5 6.88659 3.01406 8.15159 3.86125 9.11815C4.3775 9.70721 5.185 10.9378 5.49281 11.976C5.49406 11.9841 5.495 11.9922 5.49625 12.0003H10.5037C10.505 11.9922 10.5059 11.9844 10.5072 11.976C10.815 10.9378 11.6225 9.70721 12.1388 9.11815C12.9859 8.15159 13.5 6.88659 13.5 5.50003C13.5 2.45659 11.0284 -0.00934836 7.98281 2.66431e-05C4.795 0.00971414 2.5 2.59284 2.5 5.50003ZM8 3.00003C6.62156 3.00003 5.5 4.12159 5.5 5.50003C5.5 5.77628 5.27625 6.00003 5 6.00003C4.72375 6.00003 4.5 5.77628 4.5 5.50003C4.5 3.57003 6.07 2.00003 8 2.00003C8.27625 2.00003 8.5 2.22378 8.5 2.50003C8.5 2.77628 8.27625 3.00003 8 3.00003Z"
                                fill="#9FA2B4" />
                        </g>
                        <defs>
                            <clipPath id="clip0_29_13">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg> Nilai</a>
            </div>
            <div class="col-10">
                <div id="isiUtama" style="background: rgba(0, 181, 255, 0.05)"></div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Modal form input-->
    <div class="modal fade" id="modalFormInputSiswa" tabindex="-1" aria-labelledby="modalFormInputSiswaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormInputSiswaLabel">Pendaftaran Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="formInputSiswa">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="namaSiswa">Nama Siswa</label>
                                    <input type="text" name="namaSiswa" class="form-control" id="namaSiswa">
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NIS</label>
                                    <input type="number" name="nisn" class="form-control" id="nisn">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir">
                                </div>
                                <div class="form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" name="tempatLahir" class="form-control" id="tempatLahir">
                                </div>
                                <div class="form-group">
                                    <label for="asalSekolah">Asal Sekolah</label>
                                    <input type="text" name="asalSekolah" class="form-control" id="asalSekolah">
                                </div>
                                <div class="form-group">
                                    <label for="nomorIjazah">Nomor Ijazah</label>
                                    <input type="number" name="nomorIjazah" class="form-control" id="nomorIjazah">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenisKelamin"
                                                id="jenisKelaminLakiLaki" value="L">
                                            <label class="form-check-label" for="jenisKelaminLakiLaki">
                                                Laki Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenisKelamin"
                                                id="jenisKelaminPerempuan" value="P">
                                            <label class="form-check-label" for="jenisKelaminPerempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat Siswa</label>
                                    <textarea type="text" name="alamat" class="form-control" id="alamat"></textarea>
                                </div>

                                <hr class="mt-3 mb-3">

                                <div class="form-group">
                                    <label for="namaOrangTua">Nama Orang Tua</label>
                                    <input type="text" name="namaOrangTua" class="form-control" id="namaOrangTua">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaanOrangTua">Pekerjaan Orang Tua</label>
                                    <input type="text" name="pekerjaanOrangTua" class="form-control"
                                        id="pekerjaanOrangTua">
                                </div>
                                <div class="form-group">
                                    <label for="alamatOrangTua">Alamat Orang Tua</label>
                                    <textarea type="text" name="alamatOrangTua" class="form-control"
                                        id="alamatOrangTua"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="submitFormInputSiswa" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<script>
    //  buka dashboard otomatis
    $(document).ready(function () {
        $.get("{{ route('tabDashboard')}}", function (data) {
            $('#isiUtama').html(data);
        })
    });

    // buka side tab dashboard
    $('#tabDashboard').on('click', function () {
        $.get("{{ route('tabDashboard') }}", function (data) {
            $("#isiUtama").html(data);
        })
    })

    // buka side tab siswa
    $('#tabSiswa').on('click', function () {
        $.get("{{ route('tabSiswa') }}", function (data) {
            $("#isiUtama").html(data);
        })
    })

    // buka side tab nilai
    $('#tabNilai').on('click', function () {
        $.get("{{ route('tabNilai') }}", function (data) {
            $("#isiUtama").html(data);
        })
    })


    // store data Input Siswa
    $('#submitFormInputSiswa').on('click', function () {

        let konfirmasi = confirm('Yakin Input?');

        if (konfirmasi) {

            $.ajax({
                type: "POST",
                url: "{{ route('tambahSiswa') }}",
                data: $('#formInputSiswa').serialize(),
                success: function (response) {
                    $('#formInputSiswa').trigger("reset");
                    alert('berhasil');

                    $('#modalFormInputSiswa').modal('hide');

                    $('#tabSiswa').click();
                },
                error: function (response) {
                    alert('gagal');
                },
            })

        }
    })

</script>
