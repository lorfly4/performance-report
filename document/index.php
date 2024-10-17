<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">DESWA INVISCO MULTITAMA</a>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DIM</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../client/client.php">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main role="main" class="container mt-5">
        <h1>Performace Report Investigation</h1>
        <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Create
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="pro_index.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <table class="table table-borderless table-striped table-earning">

                                    <tbody>
                                        <td>Client name</td>
                                        <td>

                                            <select class="form-control" name="client_id" required>
                                                <?php 
            include '../koneksi.php';
            $sql = "SELECT id, name FROM client";
            $result = mysqli_query($koneksi, $sql);
            while ($data = mysqli_fetch_array($result)) {
                echo "<option value=\"{$data['id']}\">{$data['name']}</option>";
            }
            ?>
                                            </select>

                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Periode</td>
                                            <td> <select id="period" name="periode">
                                                    <option value="Januari - Febuari - Maret">Januari - Febuari - Maret
                                                    </option>
                                                    <option value="April - Mei - Juni">April - Mei - June</option>
                                                    <option value="Juli - Agustus - September">Juli - Agustus -
                                                        September</option>
                                                    <option value="Oktober - November - Desember">Oktober - November -
                                                        Desember</option>
                                                </select>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td><input type="date" class="form-control" name="tanggal"
                                                    autocomplete="off">
                                            </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>

                        <th>Number</th>
                        <th>Client Name</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <?php 
                                        

                                        $no = 1;
                                      
                                            
                                        
                                     ?>
                <tbody>

                    <?php 
                                       $no++;
                                         include 'paging.php';

                                        ?>
                </tbody>
            </table>

        </div>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
            </li>
            <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
            <?php
                }
                ?>
            <li class="page-item">
                <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
            </li>
        </ul>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>