<!DOCTYPE html>
<html>

<head>
    <title>Upload CSV</title>
</head>

<body>
    <h2>Upload Berkas CSV</h2>
    <form action="upload_csv.php" method="post" enctype="multipart/form-data">
        Pilih file CSV:
        <input type="file" name="file_csv" accept=".csv">
        <br><br>
        <input type="submit" name="upload" value="Upload CSV">
    </form>
</body>

</html>