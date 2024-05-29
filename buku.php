<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <div class="container w-75">
    <h1> Daftar Buku </h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">ISBN</th>
      <th scope="col">Unit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
  </tbody>
</table>

    <table border="1">
        <tr>
        <?php foreach($query as $data) {?>
        <tr>
            <td><?php echo $buku["judul buku"] ?></td>
            <td><?php echo $buku["isbn"] ?></td>
            <td><?php echo $buku["unit"] ?></td>
            <td>
                <a href=<?php echo "edit-buku.php?id=" . $buku["id"]?>>EDIT</a> |
                <a href=<?php echo "delete-buku.php?id=" . $buku["id"]?>>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
        </tr>
    </table>

    <br>
    <a href="./tambah-buku.php">Tambah data buku</a>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>