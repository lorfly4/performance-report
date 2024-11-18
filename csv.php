<!DOCTYPE html>
<html>

<head>
    <title>Upload CSV</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">DESWA INVISCO MULTITAMA</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../client/client.php">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2>Upload Berkas CSV</h2>
    <h3>Jika ingin mengupload file pastikan file memiliki name di bawah ini:</h3>
    <ul>
        <li>Jika MSIG maka upload dengan nama msig.csv</li>
        <li>Jika Allianz maka upload dengan nama allianz.csv</li>
        <li>Jika Generali maka upload dengan nama generali.csv</li>
    </ul>

    <form action="upload_csv.php" method="post" enctype="multipart/form-data">
        input file CSV:
        <input type="file" name="file_csv" accept=".csv">
        <br><br>
        <input type="submit" name="upload" value="Upload CSV">
    </form>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>