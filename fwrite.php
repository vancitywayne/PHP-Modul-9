<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan File</title>
</head>
<body>
    <h2>Penulisan Data</h2>
    <?php
    $file='C:\\Teks.txt';
    $fo=fopen($file,'w');
    $data='Tes fwrite OK in '.$file.' !';
    fwrite($fo,$data);
    fclose($fo);
    echo ("Cek isi file di <b> $file <b/> !");
    ?>
</body>
</html>