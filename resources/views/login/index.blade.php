<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery-3.6.0.js"></script>
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


        <main class="form-signin">
            <div class="card-mt3" style="max-width: 20rem;">
                <form style="background-color: rgba(0, 174, 239, 0.6)">
                    <h1 class="h6 text-white text-center mt-3">ADMINISTRATOR APLIKASI BUKU INDUK SISWA</h1>
                    <hr class="mt-2 mb-3 bg-light">
                    <img class="rounded mx-auto d-block" src="img/logo1.png" alt="" width="80" height="90">
                    <h1 class="h6 text-center text-warning mt-3">SMP Negeri 5 Padangisidimpuan</h1>

                    <div class="form-floating mt-4 col-sm">
                        <input type="username" class="form-control" id="floatingInput" placeholder="User ID">
                        <label for="floatingInput"></label>
                    </div>
                    <div class="form-floating mt-2 col-sm">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"></label>
                    </div>
                    <button class="btn btn btn-outline-dark col-sm-6 mx-auto d-block" type="submit"><a
                            href="/">Login</button>
                </form>
            </div>
        </main>


    </div>
</body>
