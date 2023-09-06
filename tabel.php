<?php
$nama="Alfandy";
$alamat="Bondowoso";
$nim="E41220328";
$nohp="085850845495";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <h1 class=" mt mt-3 text-center">Biodata </h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 ">
<table class="table  table-bordered ">
  <thead class="bg-dark text-white">
    <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>NIM</th>
    <th>No HP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo $nama; ?></td>
    <td><?php echo $alamat; ?></td>
    <td><?php echo $nim; ?></td>
    <td><?php echo $nohp; ?></td>
    </tr>
  </tbody>
</table>
</div>
