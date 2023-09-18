<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

        .blank {
            min-height: 60vh;
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

        .input-group {
            width: 50%;
        }

        @media only screen and (max-width: 600px) {
            .input-group {
                width: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="text-center py-5 animate__animated animate__fadeInDown animate__faster">
                    <h1>Lihat Label</h1>
                </div>
                <div class="input-group input-group-lg shadow-sm mx-auto mb-3 animate__animated animate__fadeInDown animate__faster animate__delay-0.5s">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Cari</span>
                    <input type="text" class="form-control" id="keyword" name="keyword" autocomplete="on" placeholder="Masukkan PO atau Qty">
                </div>
                <div class="blank animate__animated animate__fadeInDown animate__faster animate__delay-0.8s">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="bg-info">
                            <tr class="text-center">
                                <th>Cell</th>
                                <th>PO</th>
                                <th>Quantity</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody id="hasil" class="bg-light">
                        </tbody>
                    </table>
                </div>
                <footer class="p-3 mx-auto">
                    <div class="mx-auto border-1 border-top border-dark-subtle pt-3">
                        <p class="text-center text-muted">Created with ❤️ by <a href="https://www.madep.id/" target="_blank" class=""> madep.id</a> &copy; 2023.</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div>


    <script src=<?= base_url('assets/js/bootstrap.bundle.min.js') ?>></script>
    <script src=<?= base_url('assets/js/jquery.js') ?>></script>
    <script>
        $(document).ready(function() {
            load_data();

            $("#keyword").keyup(function() {
                var search = $(this).val();
                if (search != "") {
                    load_data(search);
                } else {
                    load_data();
                }
            });

            function load_data(query) {
                $.ajax({
                    url: "search",
                    method: "post",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $("#hasil").html(data);
                    },
                });
            }
        });
    </script>

</body>

</html>