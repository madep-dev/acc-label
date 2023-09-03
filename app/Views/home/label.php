<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Label</title>
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

        .card-header {
            background-color: #BACDDB;
        }

        .next {
            border: 1px solid #0079FF;
            color: white;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #F97B22;
            -webkit-transition: linear 0.4s;
            -moz-transition: linear 0.4s;
            transition: linear 0.4s;
            background-color: #0079FF;
        }

        .next:hover {
            box-shadow: inset 300px 0 0 0 #F97B22;
            color: black;
            border: 1px solid #F97B22;
        }

        .back {
            border: 1px solid #0079FF;
            color: #0079FF;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #0079FF;
            -webkit-transition: linear 0.4s;
            -moz-transition: linear 0.4s;
            transition: linear 0.4s;
        }

        .back:hover {
            border: 1px solid #0079FF;
            box-shadow: inset 300px 0 0 0 #0079FF;
            color: white;
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
            <div class="row align-items-center mb-5">
                <div>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show animate__animated animate__fadeInDown animate__faster" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="card border-1 shadow animate__animated animate__fadeInUp animate__faster" style="background-color: #F1F6F9;">
                        <div class="card-header rounded-bottom-0 border-0 fs-4 text-center">
                            <i class='bx bx-purchase-tag mx-2'></i> Lihat Label
                        </div>
                        <div class="card-body m-3">
                            <form action="<?= base_url('label/hasil') ?>" method="post">
                                <div class="mb-4">
                                    <label class="form-label" for="gedung">Gedung</label>
                                    <select class="form-select" id="gedung" name="gedung" required>
                                        <option value="">Pilih Gedung ...</option>
                                        <option value="A">Gedung A</option>
                                        <option value="B">Gedung B</option>
                                        <option value="E">Gedung C2</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="po" class="form-label">PO</label>
                                    <input type="number" class="form-control" id="po" name="po" autocomplete="off" placeholder="Contoh : 123456789" required>
                                </div>
                                <a class="btn btn-sm back rounded" href="<?= base_url('') ?>"><i class='bx bxs-left-arrow-circle me-2'></i> Kembali</a>
                                <button type="submit" class="btn btn-sm next rounded float-end">Lanjutkan <i class='bx bxs-right-arrow-circle ms-2'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="p-3">
                <div class="mx-auto border-1 border-top border-dark-subtle pt-3">
                    <p class="text-center text-muted">Created with ❤️ by <a href="https://www.madep.id/" target="_blank"> madep.id</a> &copy; 2023.</p>
                </div>
            </footer>

        </div>
    </div>


    <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
</body>

</html>