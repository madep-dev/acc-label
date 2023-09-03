<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Label PO <?= $hasil->po; ?></title>
    <link rel="stylesheet" href=<?= base_url('assets/css/bootstrap.min.css') ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href=<?= base_url('assets/css/animate.min.css') ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Wix Madefor Display, sans-serif;
            background-color: #EEEEEE;
        }

        .blank {
            width: 60%;
        }

        @media screen and (max-width: 640px) {
            .blank {
                width: 100%;
            }
        }

        .card {
            background-color: #F1F6F9;
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

    <div class="container">
        <div class="blank mx-auto">
            <div class="row align-items-center mb-5">
                <div>
                    <div class="card shadow my-5 border-0 animate__animated animate__fadeInDown animate__faster">
                        <div class="card-header border-0">
                            <h4 class="text-center">Data PO <?= $hasil->po; ?></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-striped align-middle">
                                <tbody>
                                    <tr>
                                        <td>MPS</td>
                                        <td>: <?= $hasil->mps; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>: <?= $hasil->cell; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Item</td>
                                        <td>: <?= $hasil->item; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Artikel</td>
                                        <td>: <?= $hasil->artikel; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Customer</td>
                                        <td>: <?= $hasil->customer; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Cust. No</td>
                                        <td>: <?= $hasil->customer_no; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Service Identifier</td>
                                        <td>: <?= $hasil->si; ?></td>
                                    </tr>
                                    <tr>
                                        <td>PO</td>
                                        <td>: <?= $hasil->po; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Start Assembly</td>
                                        <td>: <?= $hasil->start_ass; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>: <?= $hasil->qty; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card shadow mb-5 border-1 animate__animated animate__fadeInUp animate__faster">
                        <div class="card-header border-0">
                            <h4 class="text-center">Aksesoris Label PO <?= $hasil->po; ?></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-striped align-middle">
                                <tbody>
                                    <tr>
                                        <td>Shipping</td>
                                        <?php if ($hasil->shipping == 'V') { ?>
                                            <td>: <span class="badge rounded-0 bg-success"><?= $hasil->shipping; ?></span></td>
                                        <?php } else { ?>
                                            <td>: <span class="badge rounded-0 bg-danger"><?= $hasil->shipping; ?></span></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>Size Label</td>
                                        <td>: <?= $hasil->sizelabel; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hangtag</td>
                                        <td>: <?= $hasil->hangtag; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Shoebox</td>
                                        <td>: <?= $hasil->abs; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Outer Carton</td>
                                        <td>: <?= $hasil->outer; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Other Label</td>
                                        <td>: <?= $hasil->other; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Trigger</td>
                                        <?php if ($hasil->trigger == 'V') { ?>
                                            <td>: <span class="badge rounded-0 bg-success"><?= $hasil->trigger; ?></span></td>
                                        <?php } else { ?>
                                            <td>: <span class="badge rounded-0 bg-danger"><?= $hasil->trigger; ?></span></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>WIE</td>
                                        <?php if ($hasil->wie == 'V') { ?>
                                            <td>: <span class="badge rounded-0 bg-success"><?= $hasil->wie; ?></span></td>
                                        <?php } else { ?>
                                            <td>: <span class="badge rounded-0 bg-danger"><?= $hasil->wie; ?></span></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td>Remarks Label</td>
                                        <td>: <?= $hasil->others; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="<?= base_url('label') ?>" class="btn rounded"><i class='bx bxs-left-arrow-circle me-2'></i> Kembali</a>
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