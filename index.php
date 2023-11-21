<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>2106043_radit</title>
</head>
<body><br><br>
    <div class="kotak">
        <h2>PENDAFTARAN PEMANCINGAN</h2>
    <form action="input.php" method="post">
        <label for="nama">nama:</label>
        <input type="text" name="nama" id="nama" class="form-input"> <br>

        <!-- <label for="jenis_kelamin">jenis kelamin:</label> -->
        
        <p>
        jenis kelamin:
        <select name="jenis_kelamin">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select><br>
               
        </p>

        <label for="lapak">lapak:</label>
        <input type="number" name="lapak" id="lapak" class="form-input"><br>

        <label for="harga">harga:</label>
        <input type="number" name="harga" id="harga" class="form-input"><br>

        <button type="submit" id="btn-kirim">kirim</button>
        
    </form>
    </div>
    
</body>
</html>