<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href=<?= base_url('assets/css/bootstrap.min.css') ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href=<?= base_url('assets/css/animate.min.css') ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("assets/img/bg.avif");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Wix Madefor Display, sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .blank {
            width: 60%;
        }

        .row {
            height: 100vh;
        }

        @media screen and (max-width: 640px) {
            .blank {
                width: 100%;
            }
        }

        div form a {
            text-decoration: none;
            color: gray;
        }

        div form a:hover {
            text-decoration: underline;
            color: #0079FF;
        }

        .card-header {
            background-color: #BACDDB;
        }

        .btn {
            border: 1px solid #0079FF;
            color: #0079FF;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #0079FF;
            -webkit-transition: linear 0.4s;
            -moz-transition: linear 0.4s;
            transition: linear 0.4s;
        }

        .btn:hover {
            box-shadow: inset 300px 0 0 0 #0079FF;
            color: white;
            border: 1px solid #0079FF;
        }

        footer p {
            font-size: 0.7em;
        }

        footer p a {
            color: #0079FF;
            text-decoration: none;
        }

        footer p a:hover {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container shadow">
        <div class="blank mx-auto">
            <div>
                <div class="row align-items-start">
                    <!-- <div class="card shadow-sm animate__animated animate__fadeInUp animate__faster" style="background-color: #F1F6F9;">
                        <div class="card-header border-0 fs-4">
                            <i class='bx bx-list-ul mx-2'></i> Lihat VCB
                        </div>
                        <div class="card-body m-3">
                            <h5 class="text-center mb-3">Masukan Customer No</h5>
                            <form action="<?= base_url('/label/hasil') ?>" method="post">
                                <div class="mb-4">
                                    <label for="po" class="form-label"></label>
                                    <input type="number" class="form-control rounded-pill" id="nis" name="nis" autocomplete="off" placeholder="Contoh : 12345" required autofocus>
                                </div>
                                <a href="<?= base_url('') ?>">Kembali</a>
                                <button type="submit" class="btn rounded-pill float-end text-white">Lanjutkan <i class='bx bxs-right-arrow-circle ms-2'></i></button>
                            </form>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" class="mx-auto d-block mt-5 animate__animated animate__fadeInDown animate__fast">
                    <div class="mx-3 mx-auto animate__animated animate__fadeInDown animate__fast">
                        <div class="alert alert-warning p-4" role="alert">
                            <p class="fw-bold mb-0">Maaf!</p>
                            <p class="mb-0">Untuk saat ini menu <span class="fw-bold">Lihat VCB</span> belum tersedia.</p>
                            <p class="mb-0">Silahkan coba lagi nanti.</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="<?= base_url('') ?>" class="btn rounded"><i class='bx bxs-left-arrow-circle me-2'></i> Kembali</a>
                    </div>
                </div>
            </div>

            <footer class="p-3">
                <div class="mx-auto border-1 border-top border-dark-subtle pt-3">
                    <p class="text-center text-muted">Created with ❤️ by <a href="https://www.madep.id/" target="_blank">madep.id</a> &copy; 2023.</p>
                </div>
            </footer>

        </div>
    </div>


    <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
</body>

</html>