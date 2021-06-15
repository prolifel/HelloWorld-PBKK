<!DOCTYPE html>
<html class="is-builder">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/icon.jpg" type="image/x-icon">
    <meta name="description" content="">

    <title>CRUD PBKK</title>
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }
    </style>
</head>

<body>
    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="height: fit-content;">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" id="formEdit">
                    <div class="modal-body">
                        <div class="dragArea row">
                            <input type="text" name="id" id="id" hidden>
                            <div class="col-12 form-group">
                                <input type="number" name="nrp" placeholder="NRP" class="form-control" id="nrp">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" id="name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="address" placeholder="Alamat" class="form-control" id="address">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="department" placeholder="Departemen" class="form-control" id="department">
                            </div>
                            <div class="col-12 form-group">
                                <input type="number" name="phone" placeholder="Nomor Telepon" class="form-control" id="phone">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <section class="menu menu1 cid-sAkfPkbRVR" once="menu" id="menu1-0">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="<?= route_to('home') ?>">CRUD PBKK</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </nav>
    </section>

    <!-- Judul -->
    <section class="content4 cid-sAkoquy1Ze" id="content4-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-12 col-sm-12 align-center">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Data Mahasiswa</strong>
                    </h3>
                    <!-- TODO: Tambahin route tambah data -->
                    <a class="mbr-section-btn btn btn-primary display-4" href="<?= route_to('data.create') ?>">Tambah Data</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content4 cid-sAkoquy1Ze mb-4" id="content4-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Departemen</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $row['nrp'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><?= $row['department'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td>
                                        <button class="mbr-section-button btn btn-warning" type="button" onclick="updateData('<?= $row['name']?>')" data-toggle="modal" data-target="#modalEdit" >Edit</button>
                                        <button class="mbr-section-button btn btn-danger" type="button" onclick="deleteData('<?= $row['id'] ?>', '<?= $row['name'] ?>')">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer7 cid-sAkfSdIDkk" once="footers" id="footer7-1">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © Copyright 2021 Clement Prolifel Priyatama - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });

        function updateData(name) {
            $('#modalLabel').text('Edit Data ' + name)

            $('#formEdit').submit(function(e) {
                e.preventDefault;
                $.ajax({
                    type: "PUT",
                    url: "<?= route_to('data.update') ?>",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        $('#modalEdit').modal('hide');
                        alert('Data ' + name + ' berhasil diedit!');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Data ' + name + ' tidak berhasil diedit. Silakan coba kembali!');
                    }
                });
            })
        };

        function deleteData(id, name) {
            console.log(id, name)
            if (confirm('Apakah anda yakin untuk menghapus data ' + name)) {
                $.ajax({
                    type: "DELETE",
                    url: "<?= base_url('/delete') ?>" + "/" + id,
                    dataType: "JSON",
                    success: function(data) {
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Data gagal dihapus! Silakan coba kembali!');
                    }
                });
            }

        };
    </script>
</body>

</html>