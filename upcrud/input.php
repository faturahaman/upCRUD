<?php  
include 'db.php';

if(isset($_POST['btnBuat'])){
  $title = $_POST['title'];
  $desk = $_POST['desk'];
  $creator = $_POST['creator'];

  $sql = "INSERT INTO absen_siswa (title, desk, creator) VALUES ('$title','$desk','$creator')";
  $tampil = mysqli_query($conn,$sql);
  if($tampil){
    echo "<script>alert('berhasil menambahkan to-do list')</script>";
  }else {
    echo "<script>alert('gagal menambahkan to-do list')</script>";
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
    <header>
        <?= include 'component/navbar.php' ?>
    </header>   
    
        
    <form action="" method="post" class="m-5 bg-secondary p-3 text-white">
  <div class="mb-3">
    <label for="title" class="form-label">Judul list</label>
    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="title">
  </div>
  <div class="mb-3">
  <textarea class="form-control" placeholder="ISI DESKRIPSI" id="floatingTextarea" name="desk"></textarea>
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Di buat oleh</label>
    <input type="text" class="form-control" id="text" aria-describedby="emailHelp" name="creator">
  </div>
  <button type="submit" class="btn btn-primary" name="btnBuat">Create</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>