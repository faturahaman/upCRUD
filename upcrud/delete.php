<?php 
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM absen_siswa WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "<script>alert('list berhasil di hapus')</script>";
    header("location: todolist.php");
} else {
    echo "<script>alert('list tidak berhasil di hapus')</script>";
    header("location: todolist.php");
}