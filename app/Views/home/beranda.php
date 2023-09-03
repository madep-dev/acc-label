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
            height: 100vh;
        }

        footer {
            width: 60%;
        }

        img {
            padding-top: 50px;
            margin-bottom: 100px;
        }

        @media screen and (max-width: 640px) {

            .blank {
                width: 100%;
                height: auto;
                margin-bottom: 50px;
            }

            footer {
                width: 100%;
            }

            img {
                margin-bottom: 50px;
            }
        }

        /* .alert {
            border-radius: 28px 28px 28px 28px;
            -moz-border-radius: 28px 28px 28px 28px;
            -webkit-border-radius: 28px 28px 28px 28px;
        } */

        .box {
            /* border-radius: 28px 28px 28px 28px;
            -moz-border-radius: 28px 28px 28px 28px;
            -webkit-border-radius: 28px 28px 28px 28px; */
            -webkit-box-shadow: 0px 0px 16px -10px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 16px -10px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 16px -10px rgba(0, 0, 0, 0.75);
            transition: 0.3s;
            background-color: #fdfdfd;
            color: #2B2730;
            border: 1px solid #d1d1d1;
        }

        .box:hover {
            -webkit-box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.25);
            box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.25);
            transition: 0.3s;
            background-color: #f3f3f3;
            border: 1px solid #f3f3f3;
        }

        .btn {
            border: 0;
            color: white;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #F97B22;
            -webkit-transition: linear 0.4s;
            -moz-transition: linear 0.4s;
            transition: linear 0.4s;
            background-color: #0079FF;
            padding: 0.3em 1em 0.3em 1em;
        }

        .btn:hover {
            box-shadow: inset 300px 0 0 0 #F97B22;
            color: black;
        }

        .bx-purchase-tag,
        .bx-list-ul {
            background-color: #DDE6ED;
            color: #0079FF;
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
            <div class="row">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" class="mx-auto d-block animate__animated animate__fadeInDown animate__fast">
                <div class="col-12 mt-3 mb-3 mx-3 mx-auto animate__animated animate__fadeInDown animate__fast">
                    <div class="alert alert-info py-4" role="alert">
                        <i class='bx bx-info-circle bx-sm mb-2'></i>
                        <p class="lh-1 mb-0">Aksesoris Label sudah diupdate ke <strong>MPS Juli Rev 00</strong>.</p>
                    </div>
                </div>
                <div class="col-sm mb-3 mb-sm-0">
                    <div class="box rounded p-4 animate__animated animate__fadeInUp animate__fast">
                        <div class="mb-4">
                            <i class='bx bx-purchase-tag bx-sm border-0 rounded-circle p-3'></i>
                        </div>
                        <h5 class="">Lihat Label</h5>
                        <p class="mb-4">Untuk melihat aksesoris label apa saja yang dipakai.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('label') ?>" class="btn rounded">Mulai <i class='bx bxs-right-arrow-circle ms-2'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="box rounded p-4 animate__animated animate__fadeInUp animate__fast">
                        <div class="mb-4">
                            <i class='bx bx-list-ul bx-sm border-0 rounded-circle p-3'></i>
                        </div>
                        <h5 class="card-text">Lihat VCB</h5>
                        <p class="card-text mb-4">Untuk melihat panduan VCB berdasarkan Customer Number.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('vcb') ?>" class="btn rounded">Mulai <i class='bx bxs-right-arrow-circle ms-2'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="p-3 mx-auto">
            <div class="mx-auto border-1 border-top border-dark-subtle pt-3">
                <p class="text-center text-muted">Created with ❤️ by <a href="https://www.madep.id/" target="_blank" class=""> madep.id</a> &copy; 2023.</p>
            </div>
        </footer>

    </div>

    <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
</body>

</html>