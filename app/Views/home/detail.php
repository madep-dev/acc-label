<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail PO <?= $row->po; ?></title>
    <link rel="stylesheet" href=<?= base_url('assets/css/bootstrap.min.css') ?>>
    <link rel="stylesheet" href=<?= base_url('assets/css/animate.min.css') ?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Wix Madefor Display, sans-serif;
            background-color: #eeeeee;
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
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card shadow-sm my-5 border-0 animate__animated animate__fadeInDown animate__faster">
                    <div class="card-header border-0 bg-info">
                        <h4 class="text-center">Data PO <?= $row->po; ?></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderless table-striped align-middle">
                            <tbody>
                                <tr>
                                    <td>MPS</td>
                                    <td>: <?= $row->mps; ?></td>
                                </tr>
                                <tr>
                                    <td>Cell</td>
                                    <td>: <?= $row->cell; ?></td>
                                </tr>
                                <tr>
                                    <td>Item</td>
                                    <td>: <?= $row->item; ?></td>
                                </tr>
                                <tr>
                                    <td>Artikel</td>
                                    <td>: <?= $row->artikel; ?></td>
                                </tr>
                                <tr>
                                    <td>Customer</td>
                                    <td>: <?= $row->customer; ?></td>
                                </tr>
                                <tr>
                                    <td>Cust. No</td>
                                    <td>: <?= $row->customer_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Service Identifier</td>
                                    <td>: <?= $row->si; ?></td>
                                </tr>
                                <tr>
                                    <td>PO</td>
                                    <td>: <?= $row->po; ?></td>
                                </tr>
                                <tr>
                                    <td>Start Assembly</td>
                                    <td>: <?= $row->start_ass; ?></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>: <?= $row->qty; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card shadow-sm mb-5 border-0 animate__animated animate__fadeInUp animate__faster">
                    <div class="card-header border-0 bg-info">
                        <h4 class="text-center">Aksesoris Label PO <?= $row->po; ?></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderless table-striped align-middle">
                            <tbody>
                                <tr>
                                    <td>Shipping</td>
                                    <?php if ($row->shipping == 'V') { ?>
                                        <td>: <span class="badge rounded-0 bg-success"><?= $row->shipping; ?></span></td>
                                    <?php } else { ?>
                                        <td>: <span class="badge rounded-0 bg-danger"><?= $row->shipping; ?></span></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>Size Label</td>
                                    <td>: <?= $row->sizelabel; ?></td>
                                </tr>
                                <tr>
                                    <td>Hangtag</td>
                                    <td>: <?= $row->hangtag; ?></td>
                                </tr>
                                <tr>
                                    <td>Shoebox</td>
                                    <td>: <?= $row->abs; ?></td>
                                </tr>
                                <tr>
                                    <td>Outer Carton</td>
                                    <td>: <?= $row->outer; ?></td>
                                </tr>
                                <tr>
                                    <td>Other Label</td>
                                    <td>: <?= $row->other; ?></td>
                                </tr>
                                <tr>
                                    <td>Trigger</td>
                                    <?php if ($row->trigger == 'V') { ?>
                                        <td>: <span class="badge rounded-0 bg-success"><?= $row->trigger; ?></span></td>
                                    <?php } else { ?>
                                        <td>: <span class="badge rounded-0 bg-danger"><?= $row->trigger; ?></span></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>WIE</td>
                                    <?php if ($row->wie == 'V') { ?>
                                        <td>: <span class="badge rounded-0 bg-success"><?= $row->wie; ?></span></td>
                                    <?php } else { ?>
                                        <td>: <span class="badge rounded-0 bg-danger"><?= $row->wie; ?></span></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>Remarks Label</td>
                                    <td>: <?= $row->others; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 text-center mb-5">
                    <a href="<?= base_url('/') ?>" class="btn btn-primary rounded">Kembali</a>
                </div>
                <footer class="p-3">
                    <div class="mx-auto border-1 border-top border-dark-subtle pt-3">
                        <p class="text-center text-muted">Created with ❤️ by <a href="https://www.madep.id/" target="_blank"> madep.id</a> &copy; 2023.</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
</body>

</html>