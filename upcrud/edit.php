<?php  
include 'db.php';

$list = "SELECT * FROM absen_siswa WHERE id = '".$_GET['id']."'";
$result = mysqli_query($conn, $list);
$data = mysqli_fetch_array($result);

if(isset($_POST['btnedit'])){
    $title = $_POST['title'];
    $desk = $_POST['desk'];
    $creator = $_POST['creator'];
    $update = "UPDATE absen_siswa SET title = '$title', desk = '$desk', creator = '$creator' where id = '$_GET[id]' " ;

    if(mysqli_query($conn,$update)){
        echo "<script>alert('Data Berhasil Diupdate');
        window.location.href='todolist.php'</script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="" class="m-5 bg-secondary p-3 text-white" method="post">
   <div class="mb-3">
      <label for="title" class="form-label">Judul list</label>
      <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="title" value="<?= $data['title'] ?>">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="ISI DESKRIPSI" id="floatingTextarea" name="desk" value="<?= $data['desk'] ?>">
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Di buat oleh</label>
      <input type="text" class="form-control" id="text" aria-describedby="emailHelp" name="creator" value="<?= $data['creator'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="btnedit">edit</button>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>