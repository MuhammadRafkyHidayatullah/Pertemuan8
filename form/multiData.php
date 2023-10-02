<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form kenal MDP</title>
</head>
<body>
    <h1> survey MDP</h1>
    <form action="proses.php" method="post">
        Nama : <input type="text" name="nama"/></br>
        Kenal MDP Dari :    <input type="checkbox" name="dari[]" value="instagram"/>instagram</br>
                            <input type="checkbox" name="dari[]" value="facebook"/>Facebook</br>
                            <input type="checkbox" name="dari[]" value="twitter"/>Twitter</br>
                            <input type="checkbox" name="dari[]" value="youtube"/>Youtube</br>
</br>
<button type="Submit" name="simpan">Simpan</button>
</body>
</html>