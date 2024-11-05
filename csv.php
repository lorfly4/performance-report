<!DOCTYPE html>
<html>

<head>
    <title>Upload CSV</title>
</head>

<body>
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

</html>