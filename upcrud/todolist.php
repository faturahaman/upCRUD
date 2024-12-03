<?php  

include 'db.php';
$sql  = "SELECT * FROM absen_siswa";
$result = mysqli_query($conn,$sql);
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
    
    <div class="d-flex align-items-center m-4 gap-4">
      <?php 
      while($row = mysqli_fetch_array($result)) :
      ?>
    <div class="card" style="width: 18rem;">
  <div class="card-body border border-3">
    <h5 class="card-title"><?= $row['title'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $row['creator'] ?></h6>
    <p class="card-text"><?= $row['desk'] ?></p>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $row['time'] ?></h6>

    <a href="edit.php?id=<?= $row['id'] ?>">
      <button type="button" class="btn btn-primary">edit</button>
    </a>
     <a href="delete.php?id=<?= $row['id'] ?>">
       <button type="button" class="btn btn-secondary">Delete</button>
     </a>
  </div>
</div>
<?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>