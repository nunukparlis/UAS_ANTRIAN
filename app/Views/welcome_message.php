<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Loket</title>
        <link
            rel="stylesheet"
            id="theme_link"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
        <link rel="stylesheet" href="navbar-fixed-right.min.css">
        <link rel="stylesheet" href="navbar-fixed-left.min.css">
        <link rel="stylesheet" href="docs.css">
        <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('pelayanan'); ?>">pelayanan</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a
                            class="nav-link active"
                            aria-current="page"
                            href="<?php echo base_url('antrian'); ?>">Ambil Antrian</a>
                        <a class="nav-link" href="<?php echo base_url('antrianno'); ?>">Nomor Antrian
                        </a>
                        <a class="nav-link" href="<?php echo base_url('loketpanggil'); ?>">Loket Antrian</a>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a >
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4"><b>WELCOME </h1>
                <h2>
                    Antrian Loket dengan FrameWork Codeigniter 4
                    Tugas Ujian Akhir Semester 4 Pemograman Web
                    <h2>
              

            </div>

        </div>

    </body>
</html>