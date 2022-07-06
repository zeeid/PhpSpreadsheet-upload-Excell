<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Import Excel Codeigniter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        
        <form method="post" action="fungsi.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>File Excel</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
        
    </div>
</body>

</html>